<?php


namespace App\Http\Controllers;


use App\Models\Mark;
use App\Models\Student;

class ReportsController extends Controller
{

    public function studentList() {
        $students = Student::query()->orderBy('name', 'asc')->get();

        return view('students-list', [
            'students' => $students
        ]);
    }

    public function report(int $student_id) {
        $student = Student::find($student_id);

        $marks = Mark::join('subjects', 'marks.subject_id', '=', 'subjects.id')
            ->orderBy('subjects.lft', 'asc')->select('marks.*')->where('student_id', $student_id)->get();

        return view('report', [
            'marks' => $marks,
            'student' => $student
        ]);
    }

}
