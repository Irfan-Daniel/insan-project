<?php

namespace App\Http\Controllers;

use App\Models\beneficiary;
use App\Models\beneficiary_info;
use App\Models\beneficiary_question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\ConsoleOutput;

class beneficiary_registration_controller extends Controller
{
    public function index()
    {
        $beneficiary= beneficiary::latest()->paginate(5);

        return view('overviewpage',compact('beneficiary'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $out = new ConsoleOutput();
        //$out->writeln($request->all());

        $answers = $request->only('answers');

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
            $newBeneficiary = new beneficiary();

            $newBeneficiary->name = $request->get('name');
            $newBeneficiary->telephone_number = $request->get('telephone_number');
            $newBeneficiary->address = $request->get('address');
            $newBeneficiary->marital_status = $request->get('marital_status');
            $newBeneficiary->no_of_children = $request->get('no_of_children');
            $newBeneficiary->bank_name = $request->get('bank_name');
            $newBeneficiary->bank_account_number = $request->get('bank_account_number');

            $newBeneficiary->save();

            foreach ($answers['answers'] as $questionId => $answer){
                $newBeneficiaryInfo = new beneficiary_info();
                $newBeneficiaryInfo->beneficiary_id = $newBeneficiary->id;
                $newBeneficiaryInfo->beneficiary_question_id = $questionId;
                $newBeneficiaryInfo->answer = $answer;
                $newBeneficiaryInfo->save();
            }

            $newBeneficaryData['beneficiary'] = $newBeneficiary;
            return view('beneficiaryprofileview', $newBeneficaryData);

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

    public function create()
    {
        $beneficiary_question = beneficiary_question::all();
        return view('beneficiaryregistrationform', compact('beneficiary_question'));
    }












    /*public function store(Request $request)
    {
        $out = new ConsoleOutput();
        $out->writeln($request->all());
        $request->validate([
            'name' => 'required',
            'telephone_number' => 'required',
            'address' => 'required',
            'answer' => 'required',
            'bank_name' => 'required',
            'bank_account_no' => 'required',

        ]);

        $out->writeln($request->all());

        try
        {
            $newBeneficiary = new beneficiary();
            $newBeneficiaryInfo = new beneficiary_info();

            $newBeneficiary->name = $request->get('name');
            $newBeneficiary->telephone_number = $request->get('telephone_number');
            $newBeneficiary->address = $request->get('address');
            $newBeneficiary->bank_name = $request->get('bank_name');
            $newBeneficiary->bank_account_no = $request->get('bank_account_no');

            $newBeneficiaryInfo->answer = $request->get('answer');

            $newBeneficiary->save();
            $newBeneficiaryInfo->save();

            $newBeneficiaryData['beneficiary'] = $newBeneficiary;
            $newBeneficiaryInfoData['beneficiary_question'] = $newBeneficiaryInfo;

            return view('beneficiaryprofileview', compact($newBeneficiaryData, $newBeneficiaryInfoData));

        }
        catch (\Exception $e)
        {
            $out->writeln($e);
            return view('overviewpage')
                ->with(
                    [
                        'error','Beneficiary was not created successfully.'
                    ]);
        }
    }*/

}
