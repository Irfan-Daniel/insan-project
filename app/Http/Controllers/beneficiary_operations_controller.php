<?php

namespace App\Http\Controllers;

use App\Models\beneficiary_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\beneficiary;

class beneficiary_operations_controller extends Controller
{

    public function showbeneficiary($id)
    {

        $beneficiary_info = beneficiary_info::where([
            ['beneficiary_id', '=' , $id]
        ]) -> get();

        $beneficiary = beneficiary::where([
            ['id', '=' , $id]
        ]) -> first();

        return view('beneficiaryprofileview', ['beneficiary' => $beneficiary, 'beneficiary_info' => $beneficiary_info]);
    }
    public function delete($id)
    {
        $delete = DB::table('beneficiary')
            ->where('id', $id)
            ->delete();
        return redirect('/');
    }
}
