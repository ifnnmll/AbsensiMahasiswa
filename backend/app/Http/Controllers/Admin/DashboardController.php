<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\student;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'students' => student::count(),
            'attendances' => Attendance::count()
        ]);
    }
}
