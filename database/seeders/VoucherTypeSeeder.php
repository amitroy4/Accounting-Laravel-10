<?php

namespace Database\Seeders;


use App\Models\VoucherType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VoucherTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VoucherType::insert([
            ['type_name' => 'Recive','type_code'=> 'RV'],
            ['type_name' => 'Payment','type_code'=> 'PV'],
            ['type_name' => 'Account Receive','type_code'=> 'ARV'],
            ['type_name' => 'Account Payment','type_code'=> 'APV'],
        ]);
    }
}
