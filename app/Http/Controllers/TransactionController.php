<?php

namespace App\Http\Controllers;

use App\Models\ChartOfAccount;
use App\Models\Transactions;
use App\Models\Exhouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TransactionController extends Controller
{
    /********************************
     * Account Transaction
    ***********************************/
    public function accountTransactionCreate()
    {
        $COA=ChartOfAccount::select('COACode','AccountName')->get();

        $vrDate= Exhouse::selectRAW('DATE_FORMAT(TnxDate,"%d-%b-%Y") AS TnxDate')->where('ExHouseID','=',Auth::user()->ExHouseID)->first();
        //dd($vrDate);
        return view('pages.accountTransaction',compact('COA','vrDate'));
    }
    public function accountTransactionStore(Request $request)
    {
        //dd($request);
        $rules = [
			'TnxType' => 'required|string|max:1'
        ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return redirect()->route('transaction-account')->withInput()->withErrors($validator);
		}else{
            $data = $request->input();
            $AuthUser = Auth::user();

            $VoucherDate = Exhouse::select('TnxDate')->where('ExHouseID','=',$AuthUser->ExHouseID)->first();
            $VoucherNo = Transactions::selectRAW('IFNULL(MAX(VoucherNo),0)+1 AS VoucherNo')
                                        ->where('VoucherDate','=',$VoucherDate['TnxDate'])
                                        ->where('ExHouseID','=',$AuthUser->ExHouseID)->first();
            //dd($VoucherNo['VoucherNo']);
            try{

                //dd($AuthUser);
                $Tnx = new Transactions;
                $Particulars = !empty($data['Particulars']) ? $data['Particulars'] : '';
                $COACode = !empty($data['accountCode']) ? $data['accountCode'] : '';
                $DrAmt = !empty($data['DrAmt']) ? $data['DrAmt'] : '';
                $CrAmt = !empty($data['CrAmt']) ? $data['CrAmt'] : '';
                $TnxType = !empty($data['TnxType']) ? $data['TnxType'] : '';
                $VrNo = $VoucherNo['VoucherNo'];
                $VrDate=$VoucherDate['TnxDate'];
                //dd(count($Particulars));
                //foreach($Particulars as $a => $b){
                $saveData = array();
                    //['user_id'=>'Coder 1', 'subject_id'=> 4096],
                    //['user_id'=>'Coder 2', 'subject_id'=> 2048],
                    //...

                    for($i=0; $i < count($Particulars); $i++){
                        if($i>0){
                            $VrNo += 1;
                        }
                        $parseData = [
                        'VoucherNo' => $VrNo,
                        'VoucherDate' => $VrDate,
                        'ExHouseID' => $AuthUser->ExHouseID,
                        'TnxType' => $TnxType,
                        //dd($Particulars[$i]);
                        'Particulars' => $Particulars[$i],
                        'COACode' => $COACode[$i],
                        'DrAmt' => $DrAmt[$i],
                        'CrAmt' => $CrAmt[$i],
                        'Status' => '1',

                        'CreatedBy' => $AuthUser->user_id,
                        'created_at' => Carbon::now(),
                        'AuthorizeBy' => Null,
                        'AuthorizeDate' => Null,
                        //$Tnx->updated_at = null;
                        'remember_token' => $data['_token'],
                        ];
                        //dd($parseData);
                        $saveData[$i] = $parseData;
                        //$VrNo+=1;
                    }
                //dd($saveData);
                $Tnx->insert($saveData);
                return redirect()->route('transaction-account')
                                ->with('status','Transaction created successfully.');
			}
			catch(Exception $e){
				return redirect()->route('transaction-account')->with('failed',"operation failed");
			}
        }
    }
    /*public function groupAccountEdit()
    {
        return view('pages.groupAccountEdit');
    }
    public function groupAccountUpdate()
    {

    }*/
    /********************************
     * Reverse Transaction
    ***********************************/
    public function reverseTransactionCreate()
    {
        return view('pages.reverseTransaction');
    }
    public function reverseTransactionStore()
    {

    }
    /*public function subGroupAccountEdit()
    {
        return view('pages.subGroupAccountEdit');
    }
    public function subGroupAccountUpdate()
    {

    }*/

}
