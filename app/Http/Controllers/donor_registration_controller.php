<?php

namespace App\Http\Controllers;

use App\Models\donor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class donor_registration_controller extends Controller
{
    public function index()
    {
        $donor= donor::latest()->paginate(5);

        return view('overviewpage',compact('donor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('donorregistrationform');
    }

    public function store(Request $request)
    {
        $out = new ConsoleOutput();
        $out->writeln($request->all());
        $request->validate([
            'name' => 'required',
            'ic_number' => 'required',
            'telephone_number' => 'required',
            'email' => 'required',
        ]);

        $out->writeln($request->all());

        try
        {
            $newDonor = new donor();

            $newDonor->name = $request->get('name');
            $newDonor->ic_number = $request->get('ic_number');
            $newDonor->telephone_number = $request->get('telephone_number');
            $newDonor->email = $request->get('email');

            $newDonor->save();

            $newDonorData['donor'] = $newDonor;

            return view('donorprofileview', $newDonorData);

        }
        catch (\Exception $e)
        {
            $out->writeln($e);
            return view('overviewpage')
                ->with(
                    [
                        'error','Donor was not created successfully.'
                    ]);
        }
    }

    public function showdonor($id){
        $donor = DB::table('donor')->select ('id','name', 'ic_number', 'telephone_number', 'email')->where('id', $id)->first();
        return view('donorprofileview',['donors' => $donor]);
    }
}
