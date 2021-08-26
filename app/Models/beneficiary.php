<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiary extends Model
{
    use HasFactory;

    public $table = "beneficiary";

    public $timestamps=false;
    protected $fillable = [
        'name', 'telephone_number', 'address', 'marital_status', 'no_of_children', 'bank_name', 'bank_account_number'];

    public function beneficiary_info()
    {
        return $this->hasMany('App\Models\beneficiary_info', 'beneficiary_id');
    }
}
