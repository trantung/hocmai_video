<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\BankBranch;
use App\Bank;
use App\HocmaiBank;

class CreateDataBankSample extends Migration
{
    public function up()
    {
        //create bank database
        $listBank = [
            [
                'bank_name' => 'MSB',
                'bank_image' => '',
            ],
            [
                'bank_name' => 'Vietcombank',
                'bank_image' => '',
            ],
            [
                'bank_name' => 'VPBANK',
                'bank_image' => '',
            ],
            [
                'bank_name' => 'Agribank',
                'bank_image' => '',
            ],
            [
                'bank_name' => 'BIDV',
                'bank_image' => '',
            ],
            [
                'bank_name' => 'Viettinbank',
                'bank_image' => '',
            ],
            [
                'bank_name' => 'TECHCOMBANK',
                'bank_image' => '',
            ],
        ];
        foreach ($listBank as $bank)
        {
            Bank::create($bank);
        }
        //create bank_branch database
        BankBranch::create([
            'bank_id' => 1,
            'branch_name' => 'Chi nhánh Thanh Xuân, Hà Nội',
        ]);
        BankBranch::create([
            'bank_id' => 2,
            'branch_name' => 'Chi nhánh Thành Công, Hà Nội',
        ]);
        BankBranch::create([
            'bank_id' => 3,
            'branch_name' => 'Chi nhánh Trung Hòa, Nhân Chính, Hà Nội',
        ]);
        BankBranch::create([
            'bank_id' => 4,
            'branch_name' => 'Chi nhánh Trung Yên, Hà Nội',
        ]);
        BankBranch::create([
            'bank_id' => 5,
            'branch_name' => 'Chi nhánh Đông Đô, Hà Nội',
        ]);
        BankBranch::create([
            'bank_id' => 6,
            'branch_name' => 'Chi nhánh Ba Đình, Hà Nội',
        ]);
        BankBranch::create([
            'bank_id' => 7,
            'branch_name' => 'Đông Đô, Hà Nội',
        ]);
        //create account
        HocmaiBank::create([
            'bank_id' => 1,
            'branch_id' => 1,
            'account_number' => '032-010-135-33838',
            'account_holder' => 'Công ty cổ phần đầu tư và dịch vụ giáo dục',
        ]);
        HocmaiBank::create([
            'bank_id' => 2,
            'branch_id' => 2,
            'account_number' => '045-100-133-8687',
            'account_holder' => 'Công ty cổ phần đầu tư và dịch vụ giáo dục',
        ]);
        HocmaiBank::create([
            'bank_id' => 3,
            'branch_id' => 3,
            'account_number' => '566-565-88',
            'account_holder' => 'Công ty cổ phần đầu tư và dịch vụ giáo dục',
        ]);
        HocmaiBank::create([
            'bank_id' => 4,
            'branch_id' => 4,
            'account_number' => '130-220-103-3343',
            'account_holder' => 'Công ty cổ phần đầu tư và dịch vụ giáo dục',
        ]);
        HocmaiBank::create([
            'bank_id' => 5,
            'branch_id' => 5,
            'account_number' => '125-100-005-90546',
            'account_holder' => 'Công ty cổ phần đầu tư và dịch vụ giáo dục',
        ]);
        HocmaiBank::create([
            'bank_id' => 6,
            'branch_id' => 6,
            'account_number' => '117-000-114-150',
            'account_holder' => 'Công ty cổ phần đầu tư và dịch vụ giáo dục',
        ]);
        HocmaiBank::create([
            'bank_id' => 7,
            'branch_id' => 7,
            'account_number' => '191-207-094-65011',
            'account_holder' => 'Công ty cổ phần đầu tư và dịch vụ giáo dục',
        ]);
    }
}
