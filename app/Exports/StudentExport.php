<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Student;

class StudentExport implements FromView
{
   public function view(): View
    {
        return view('exports.student-export', [
            'students' => Student::all()
        ]);
    }
}
