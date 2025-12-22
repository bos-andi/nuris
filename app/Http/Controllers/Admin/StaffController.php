<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Symfony\Component\HttpFoundation\StreamedResponse;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::ordered()->get();
        return view('admin.staff.index', compact('staff'));
    }

    public function create()
    {
        return view('admin.staff.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'tmt' => 'nullable|string|max:10',
            'tempat_tanggal_lahir' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'pendidikan_terakhir' => 'nullable|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'unit' => 'nullable|string|max:255',
            'status' => 'required|in:Guru,Karyawan',
            'email' => 'nullable|email|max:255',
            'no_hp' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle foto upload
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('staff', 'public');
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;
        
        // Set default order if not provided
        if (!isset($validated['order'])) {
            $maxOrder = Staff::max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        Staff::create($validated);

        return redirect()->route('admin.staff')->with('success', 'Data guru/karyawan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('admin.staff.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:255',
            'tmt' => 'nullable|string|max:10',
            'tempat_tanggal_lahir' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'pendidikan_terakhir' => 'nullable|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'unit' => 'nullable|string|max:255',
            'status' => 'required|in:Guru,Karyawan',
            'email' => 'nullable|email|max:255',
            'no_hp' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle foto upload
        if ($request->hasFile('foto')) {
            // Delete old foto if exists
            if ($staff->foto) {
                Storage::disk('public')->delete($staff->foto);
            }
            $validated['foto'] = $request->file('foto')->store('staff', 'public');
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;

        $staff->update($validated);

        return redirect()->route('admin.staff')->with('success', 'Data guru/karyawan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $staff = Staff::findOrFail($id);
        
        // Delete foto if exists
        if ($staff->foto) {
            Storage::disk('public')->delete($staff->foto);
        }
        
        $staff->delete();

        return redirect()->route('admin.staff')->with('success', 'Data guru/karyawan berhasil dihapus.');
    }

    public function deleteAll()
    {
        // Get all staff records
        $allStaff = Staff::all();
        $count = $allStaff->count();
        
        // Delete all photos
        foreach ($allStaff as $staff) {
            if ($staff->foto) {
                Storage::disk('public')->delete($staff->foto);
            }
        }
        
        // Delete all records
        Staff::truncate();

        return redirect()->route('admin.staff')->with('success', "Semua data ({$count} record) berhasil dihapus.");
    }

    public function import()
    {
        return view('admin.staff.import');
    }

    public function downloadTemplate()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header
        $headers = ['NO', 'NAMA', 'TMT', 'Tempat Tanggal Lahir', 'Alamat', 'Pendidikan Terakhir', 'No HP'];
        $sheet->fromArray($headers, null, 'A1');

        // Style header
        $headerStyle = [
            'font' => [
                'bold' => true,
                'color' => ['rgb' => 'FFFFFF'],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['rgb' => '4472C4'],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
        ];

        $sheet->getStyle('A1:G1')->applyFromArray($headerStyle);

        // Set column widths
        $sheet->getColumnDimension('A')->setWidth(8);
        $sheet->getColumnDimension('B')->setWidth(30);
        $sheet->getColumnDimension('C')->setWidth(15);
        $sheet->getColumnDimension('D')->setWidth(25);
        $sheet->getColumnDimension('E')->setWidth(40);
        $sheet->getColumnDimension('F')->setWidth(25);
        $sheet->getColumnDimension('G')->setWidth(15);

        // Set row height for header
        $sheet->getRowDimension(1)->setRowHeight(25);

        // Add example data
        $exampleData = [
            ['1', 'Contoh Nama Guru', '2020-01-01', 'Mojokerto, 01 Januari 1980', 'Jl. Contoh No. 123', 'S1 Pendidikan', '081234567890'],
        ];
        $sheet->fromArray($exampleData, null, 'A2');

        // Style example row
        $exampleStyle = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['rgb' => 'CCCCCC'],
                ],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['rgb' => 'F2F2F2'],
            ],
        ];
        $sheet->getStyle('A2:G2')->applyFromArray($exampleStyle);

        // Freeze header row
        $sheet->freezePane('A2');

        $filename = 'template-import-guru-karyawan.xlsx';
        
        $response = new StreamedResponse(function() use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
        });
        
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="' . $filename . '"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }

    public function processImport(Request $request)
    {
        $validated = $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls|max:10240',
        ]);

        $file = $request->file('excel_file');
        $path = $file->getRealPath();
        
        try {
            $spreadsheet = IOFactory::load($path);
            $worksheet = $spreadsheet->getActiveSheet();
            $rows = $worksheet->toArray();

            // Skip header row (first row)
            array_shift($rows);

            $imported = 0;
            $skipped = 0;
            $errors = [];

            foreach ($rows as $index => $row) {
                // Skip empty rows
                if (empty(array_filter($row))) {
                    continue;
                }

                // Expected format: NO, NAMA, TMT, Tempat Tanggal Lahir, Alamat, Pendidikan Terakhir, No HP
                $no = trim($row[0] ?? '');
                $nama = trim($row[1] ?? '');
                
                if (empty($nama)) {
                    $skipped++;
                    continue;
                }

                // Check if already exists
                $exists = Staff::where('nama', $nama)->first();
                if ($exists) {
                    $skipped++;
                    continue;
                }

                try {
                    // Parse TMT as year string
                    $tmt = null;
                    if (!empty($row[2])) {
                        $tmtValue = trim($row[2]);
                        if (is_numeric($tmtValue)) {
                            // If it's a numeric value, check if it's an Excel date serial number
                            if ($tmtValue > 25569) { // Excel epoch starts at 1900-01-01
                                // Excel date serial number - extract year
                                try {
                                    $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($tmtValue);
                                    $tmt = $date->format('Y');
                                } catch (\Exception $e) {
                                    // If conversion fails, try to extract year from the number
                                    $tmt = (string)intval($tmtValue);
                                }
                            } else {
                                // Direct year value (4 digits)
                                $tmt = (string)intval($tmtValue);
                            }
                        } else {
                            // Try to parse as date string and extract year
                            try {
                                $parsedDate = date_parse($tmtValue);
                                if ($parsedDate && isset($parsedDate['year']) && $parsedDate['year'] > 1900 && $parsedDate['year'] < 2100) {
                                    $tmt = (string)$parsedDate['year'];
                                } else {
                                    // Try strtotime as fallback
                                    $timestamp = strtotime($tmtValue);
                                    if ($timestamp !== false) {
                                        $year = date('Y', $timestamp);
                                        if ($year > 1900 && $year < 2100) {
                                            $tmt = $year;
                                        }
                                    }
                                }
                            } catch (\Exception $e) {
                                // If it's already a year string, use it directly
                                if (preg_match('/^\d{4}$/', $tmtValue)) {
                                    $tmt = $tmtValue;
                                }
                            }
                        }
                    }

                    $maxOrder = Staff::max('order') ?? 0;

                    Staff::create([
                        'nama' => $nama,
                        'nip' => $no ?: null,
                        'tmt' => $tmt,
                        'tempat_tanggal_lahir' => trim($row[3] ?? '') ?: null,
                        'alamat' => trim($row[4] ?? '') ?: null,
                        'pendidikan_terakhir' => trim($row[5] ?? '') ?: null,
                        'no_hp' => trim($row[6] ?? '') ?: null,
                        'status' => 'Guru', // Default, bisa diubah manual
                        'order' => $maxOrder + 1,
                        'is_active' => true,
                    ]);

                    $imported++;
                } catch (\Exception $e) {
                    $errors[] = "Baris " . ($index + 2) . " ({$nama}): " . $e->getMessage();
                }
            }

            $message = "Import selesai! Berhasil: {$imported}, Dilewati: {$skipped}";
            if (count($errors) > 0) {
                $message .= ", Error: " . count($errors);
                session()->flash('import_errors', $errors);
            }

            return redirect()->route('admin.staff')->with('success', $message);

        } catch (\Exception $e) {
            return redirect()->route('admin.staff.import')->with('error', 'Error membaca file Excel: ' . $e->getMessage());
        }
    }
}
