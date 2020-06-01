<?php

namespace App\Models;

use App\Helpers\MarkingHelper;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use CrudTrait;
    use MarkingHelper;

    protected $table = 'students';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'diploma_title',
        'short'
    ];

    public function avgMark()
    {
        $subjectsIDs = Subject::query()->where('in_avg', true)->pluck('id');

        $marks = Mark::query()->where('student_id', $this->id)->whereIn('subject_id', $subjectsIDs)->pluck('mark');

        $marksNational = [];

        foreach ($marks as $mark) {
            $marksNational[] = $this->markConstants()[$this->getMarkLetter($mark)]['national_grate'];
        }

        return number_format((array_sum($marksNational)) / count($marksNational), 2);
     }
}
