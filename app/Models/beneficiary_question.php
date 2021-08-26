<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiary_question extends Model
{
    use HasFactory;

    public $table = "beneficiary_question";

    public $timestamps=false;
    protected $fillable = [
        'question', 'seq'];

    public function beneficiary_info()
    {
        return $this->hasMany('App\Models\beneficiary_info', 'beneficiary_question_id');
    }
}
