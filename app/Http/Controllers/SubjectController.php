<?php


namespace App\Http\Controllers;


use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index($subject_id) {
        $subject = Subject::find($subject_id);
        $students = Student::query()->orderBy('name', 'asc')->get();

        $marks = Mark::query()->where('subject_id', $subject_id)->get();

        $studentMarks = [];

        foreach ($students as $student) {
            $mark = $marks->first(function($mark, $key) use ($student) {
                return $mark->student_id == $student->id;
            });
            $studentMarks[$student->id] = !is_null($mark) ? $mark->mark : '';
        }

        return view('marking', [
            'subject' => $subject,
            'students' => $students,
            'studentMarks' => $studentMarks
        ]);
    }



}
