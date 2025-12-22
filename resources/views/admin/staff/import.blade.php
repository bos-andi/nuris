@extends('admin.layouts.app')

@section('title', 'Import Data Guru/Karyawan')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Import Data dari Excel</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Import data guru dan karyawan dari file Excel (.xlsx)</p>
</div>

@if(session('error'))
<div class="alert alert-danger mb-4">
    {{ session('error') }}
</div>
@endif

@if(session('import_errors'))
<div class="alert alert-warning mb-4">
    <h6 class="font-semibold mb-2">Beberapa data mengalami error:</h6>
    <ul class="list-disc list-inside text-sm">
        @foreach(session('import_errors') as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card mb-6">
    <div class="p-6">
        <div class="flex justify-between items-start mb-4">
            <div>
                <h5 class="mb-2 font-semibold">Cara Import dari Excel:</h5>
                <ol class="list-decimal list-inside space-y-2 text-sm text-gray-600 dark:text-gray-400">
                    <li>Download template Excel di bawah ini</li>
                    <li>Isi data sesuai format yang ada di template</li>
                    <li>Upload file Excel yang sudah diisi di form di bawah ini</li>
                </ol>
            </div>
            <a href="{{ route('admin.staff.template') }}" class="btn bg-success text-white">
                <i class="mgc_download_line me-2"></i>Download Template
            </a>
        </div>
        
        <div class="mt-4 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
            <h6 class="font-semibold mb-2">Format Excel yang diharapkan:</h6>
            <p class="text-sm mb-2">File Excel harus memiliki kolom berikut (baris pertama adalah header):</p>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-blue-100 dark:bg-blue-900">
                            <th class="border border-gray-300 px-2 py-1">NO</th>
                            <th class="border border-gray-300 px-2 py-1">NAMA</th>
                            <th class="border border-gray-300 px-2 py-1">TMT</th>
                            <th class="border border-gray-300 px-2 py-1">Tempat Tanggal Lahir</th>
                            <th class="border border-gray-300 px-2 py-1">Alamat</th>
                            <th class="border border-gray-300 px-2 py-1">Pendidikan Terakhir</th>
                            <th class="border border-gray-300 px-2 py-1">No HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-2 py-1">1</td>
                            <td class="border border-gray-300 px-2 py-1">Contoh Nama</td>
                            <td class="border border-gray-300 px-2 py-1">2020-01-01</td>
                            <td class="border border-gray-300 px-2 py-1">Mojokerto, 01 Jan 1980</td>
                            <td class="border border-gray-300 px-2 py-1">Jl. Contoh</td>
                            <td class="border border-gray-300 px-2 py-1">S1 Pendidikan</td>
                            <td class="border border-gray-300 px-2 py-1">081234567890</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-xs mt-2 text-gray-600 dark:text-gray-400">
                <strong>Catatan:</strong> 
                <br>- Kolom NO bisa diisi dengan nomor urut atau NIP
                <br>- Kolom TMT bisa diisi dengan format tanggal (YYYY-MM-DD) atau format Excel
                <br>- Data yang sudah ada (berdasarkan nama) akan dilewati
                <br>- Semua data yang diimport akan otomatis berstatus "Guru" dan aktif
            </p>
        </div>
    </div>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.staff.import.process') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="excel_file">File Excel (.xlsx) *</label>
                <input type="file" id="excel_file" name="excel_file" class="form-input w-full" accept=".xlsx,.xls" required>
                <p class="text-xs text-gray-500 mt-1">Format: XLSX atau XLS. Maksimal 10MB</p>
                @error('excel_file')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_upload_line me-2"></i>Import Data
                </button>
                <a href="{{ route('admin.staff') }}" class="btn bg-secondary text-white">
                    <i class="mgc_close_line me-2"></i>Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

