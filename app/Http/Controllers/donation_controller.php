<?php

namespace App\Http\Controllers;
use App\Models\donation;
use App\Models\donor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class donation_controller extends Controller
{
    public function index()
    {
        $donor= donor::latest()->paginate(5);

        return view('overviewpage',compact('donor'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create($id)
    {
        $donor = DB::table('donor')->select ('id', 'name')->where('id', $id)->first();
        return view('donationform',['donors' => $donor]);
        //return view('donationform');
    }

    public function store(Request $request)
    {
        $out = new ConsoleOutput();
        //$out->writeln($request->all());

        /*$request->validate([
            'name' => 'required',
            'telephone_number' => 'required',
            'address' => 'required',
            'bank_name'=> 'required',
            'bank_account_no' => 'required',
            'answer' => 'required'
        ]);*/

        //$out->writeln($request->all());

        //try
        //{
        $newDonation = new donation();

        $newDonation->amount = $request->get('amount');

        $newDonation->save();

        $newDonationData['beneficiary'] = $newDonation;
        return view('/donorprofileview/{id}', $newDonationData);

        //}
        /*catch (\Exception $e)
        {
            $out->writeln($e);
            return redirect()->action([beneficiary_registration_controller::class, 'create']);


            /*return view('beneficiaryregistrationform')
                ->with(
                    [
                        'error','Beneficiary was not created successfully.'
                    ]);
        }*/
    }

    /*public function showdonor($id){
        $donor = DB::table('donor')->select ('name')->where('id', $id)->first();
        return view('donationform',['donors' => $donor]);
    }*/
}
