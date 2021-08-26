<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\beneficiary;
use App\Models\beneficiary_info;
use App\Models\donor;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class overview_page_controller extends Controller
{
    public function index()
    {
        $donor = donor::all();
        $beneficiary = beneficiary::all();

        return view('overviewpage', compact('donor','beneficiary'));
    }



}
