<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function uploadExcel(Request $request)
    {
       
        Excel::import(new StudentImport, $request->file('excel_file'));
        
        return redirect('/student-upload')->with('message', 'Student Imported Successfully');
    }
    
    public function exportExcel()
    {
        return Excel::download(new StudentExport, 'student-excel.xlsx');
    }

}
