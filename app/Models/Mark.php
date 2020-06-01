<?php

namespace App\Models;

use App\Helpers\MarkingHelper;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use CrudTrait;
    use MarkingHelper;

    protected $table = 'marks';
    protected $guarded = ['id'];
    protected $fillable = [
        'subject_id',
        'student_id',
        'mark'
    ];

    public function getMarkText(bool $inAvg = true)
    {
        if (!$inAvg) return 'Зараховано / Passed';

        return $this->markConstants()[$this->getMarkLetter($this->mark)]['text'];
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }


}
