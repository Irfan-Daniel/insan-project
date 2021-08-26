<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    use HasFactory;

    public $table = "donation";

    public $timestamps=false;
    protected $fillable = [
        'amount'];

    public function donor()
    {
        return $this->belongsTo('App\Models\donor','donor_id');
    }
}
