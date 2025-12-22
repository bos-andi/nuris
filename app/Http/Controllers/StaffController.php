<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        // Get active staff ordered by order and status
        $guru = Staff::active()->byStatus('Guru')->ordered()->get();
        $karyawan = Staff::active()->byStatus('Karyawan')->ordered()->get();
        
        return view('staff.index', [
            'title' => 'Data Guru & Karyawan',
            'guru' => $guru,
            'karyawan' => $karyawan
        ]);
    }
}
