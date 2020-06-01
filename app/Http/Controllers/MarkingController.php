<?php


namespace App\Http\Controllers;


use App\Models\Mark;
use App\Models\Subject;
use Illuminate\Http\Request;

class MarkingController extends Controller
{

    public function markingSubjects()
    {
        $subjects = Subject::all();

        return view('marking-subjects', [
            'subjects' => $subjects
        ]);
    }

    public function marking(Request $request)
    {
        $data = $request->all();
        $subject_id = $data['subject_id'];


        foreach ($data as $key => $value) {

            if (starts_with($key, 'student')) {
                $student_id = substr($key, 8);
                if (!empty($value)) {
                    Mark::updateOrCreate([
                        'student_id' => $student_id,
                        'subject_id' => $subject_id,
                    ], ['mark' => $value]);
                } else {
                    $mark = Mark::query()->where([
                        'student_id' => $student_id,
                        'subject_id' => $subject_id
                    ])->first();
                    if (!is_null($mark)) $mark->delete();
                }
            }

        }

        return back()->withInput([
            'message' => 'Дані збережено!'
        ]);
    }

}
