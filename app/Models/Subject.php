<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use CrudTrait;

    protected $table = 'subjects';

    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'credits',
        'credits_short',
        'in_avg',
        'lft'
    ];

    protected $casts = [
        'lft' => 'integer'
    ];

    public function creditsString(bool $short = false)
    {
        $credits = $short ? $this->credits_short : $this->credits;
        $creditCost = $credits * env('CREDIT_COST', 30);
        return "$credits($creditCost)";
    }
}
