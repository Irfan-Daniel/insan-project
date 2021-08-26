<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiary_info extends Model
{
    use HasFactory;

    public $table = "beneficiary_info";

    public $timestamps=false;
    protected $fillable = [
        'answer'];

    public function beneficiary()
    {
        return $this->belongsTo('App\Models\beneficiary','beneficiary_id');
    }

    public function beneficiary_question(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\beneficiary_question','id', 'beneficiary_question_id');
    }

}
