<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    use HasFactory;

    public $table = "donor";

    public $timestamps=false;
    protected $fillable = [
        'name', 'ic_number', 'telephone_number', 'email'];
}
