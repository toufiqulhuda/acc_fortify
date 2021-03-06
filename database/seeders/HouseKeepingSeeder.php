<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HouseKeepingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_group_detail')->insert([
            //Asset
            [
                'AccGrCode'=>'101',
                'AccGrName'=>'Cash',
                'AccHdID'=>'1',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            [
                'AccGrCode'=>'102',
                'AccGrName'=>'Deposit with bank',
                'AccHdID'=>'1',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            [
                'AccGrCode'=>'103',
                'AccGrName'=>'Balance Due From Bank',
                'AccHdID'=>'1',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            [
                'AccGrCode'=>'104',
                'AccGrName'=>'Fixed Asset',
                'AccHdID'=>'1',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            //Liability
            [
                'AccGrCode'=>'201',
                'AccGrName'=>'Capital',
                'AccHdID'=>'2',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            [
                'AccGrCode'=>'202',
                'AccGrName'=>'Reserve',
                'AccHdID'=>'2',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            [
                'AccGrCode'=>'203',
                'AccGrName'=>'Other Liabilities',
                'AccHdID'=>'2',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            //Income
            [
                'AccGrCode'=>'301',
                'AccGrName'=>'Exchange Earning',
                'AccHdID'=>'3',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            [
                'AccGrCode'=>'302',
                'AccGrName'=>'Commission',
                'AccHdID'=>'3',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            //Expense
            [
                'AccGrCode'=>'401',
                'AccGrName'=>'Salary',
                'AccHdID'=>'4',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            [
                'AccGrCode'=>'402',
                'AccGrName'=>'Utility Charges',
                'AccHdID'=>'4',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],
            [
                'AccGrCode'=>'403',
                'AccGrName'=>'Telephone',
                'AccHdID'=>'4',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=> Carbon::now(),
            ],


        ]);
        DB::table('account_sub_group_detail')->insert([
            //asset
            [
                'AccSbGrCode'=>'10101',
                'AccSbGrName'=>'Cash In Hand',
                'AccGrID'=>'1',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'10102',
                'AccSbGrName'=>'Cash In Transit',
                'AccGrID'=>'1',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'10201',
                'AccSbGrName'=>'Deposit with Bank',
                'AccGrID'=>'2',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'10301',
                'AccSbGrName'=>'Within Singapore',
                'AccGrID'=>'3',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'10302',
                'AccSbGrName'=>'Outside Singapore',
                'AccGrID'=>'3',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'10401',
                'AccSbGrName'=>'Furniture & Fixtures',
                'AccGrID'=>'4',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            //Liability
            [
                'AccSbGrCode'=>'20101',
                'AccSbGrName'=>'Capital',
                'AccGrID'=>'5',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'20201',
                'AccSbGrName'=>'Reserve within Singapore',
                'AccGrID'=>'6',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'20301',
                'AccSbGrName'=>'Sundry Deposits',
                'AccGrID'=>'7',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'20302',
                'AccSbGrName'=>'Accumulated Depreciation',
                'AccGrID'=>'7',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'20303',
                'AccSbGrName'=>'Income',
                'AccGrID'=>'7',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            //Income
            [
                'AccSbGrCode'=>'30101',
                'AccSbGrName'=>'Exchange Gains',
                'AccGrID'=>'8',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'30201',
                'AccSbGrName'=>'Commission Earning',
                'AccGrID'=>'9',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            //Expense
            [
                'AccSbGrCode'=>'40101',
                'AccSbGrName'=>'Basic Salary',
                'AccGrID'=>'10',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'40201',
                'AccSbGrName'=>'Utility Charges',
                'AccGrID'=>'11',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'AccSbGrCode'=>'40301',
                'AccSbGrName'=>'Telephone Bill',
                'AccGrID'=>'12',
                'ExHouseID'=>'0650020001',
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
        ]);
        DB::table('chart_of_account')->insert([
            //Asset
            [
                'COACode'=>'10101001',
                'AccountName'=>'Cash In hand',
                'AccSbGrID'=>'1',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'10102001',
                'AccountName'=>'Cash In Transit',
                'AccSbGrID'=>'2',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'10201001',
                'AccountName'=>'FDR A/c with Bank',
                'AccSbGrID'=>'3',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'10301001',
                'AccountName'=>'Customer A/c DBS',
                'AccSbGrID'=>'4',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'10301002',
                'AccountName'=>'Company A/c DBS',
                'AccSbGrID'=>'4',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'10302001',
                'AccountName'=>'NBL USD A/C',
                'AccSbGrID'=>'5',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'10302002',
                'AccountName'=>'IBBL USD A/C',
                'AccSbGrID'=>'5',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'10401001',
                'AccountName'=>'Office Chair',
                'AccSbGrID'=>'6',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            //Liability
            [
                'COACode'=>'20101001',
                'AccountName'=>'Paid Up Capital',
                'AccSbGrID'=>'7',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'20201001',
                'AccountName'=>'Reserve',
                'AccSbGrID'=>'8',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'20301001',
                'AccountName'=>'Sundry Creditors A/C',
                'AccSbGrID'=>'9',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'20301002',
                'AccountName'=>'Sundry Creditors A/C Cover Fund Remittable',
                'AccSbGrID'=>'9',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'20302001',
                'AccountName'=>'Accum Depre- Right of use Assets',
                'AccSbGrID'=>'10',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'20303001',
                'AccountName'=>'Retained Profit',
                'AccSbGrID'=>'11',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            //Income
            [
                'COACode'=>'30101001',
                'AccountName'=>'Foreign exchange margin',
                'AccSbGrID'=>'12',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'30102001',
                'AccountName'=>'Commission Earning',
                'AccSbGrID'=>'13',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            //Expense
            [
                'COACode'=>'40101001',
                'AccountName'=>'Salaries',
                'AccSbGrID'=>'14',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'40201001',
                'AccountName'=>'PUB Bill',
                'AccSbGrID'=>'15',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],
            [
                'COACode'=>'40301001',
                'AccountName'=>'Office Telephone',
                'AccSbGrID'=>'16',
                'ExHouseID'=>'0650020001',
                'OpenDate'=>date('Y-m-d'),
                'CreatedBy'=>'1',
                'created_at'=>Carbon::now(),
            ],

        ]);
    }
}
