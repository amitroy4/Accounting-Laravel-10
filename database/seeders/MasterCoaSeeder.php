<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterCoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = Carbon::now();

        // Insert parent Chart of Accounts
        DB::table('chart_of_accounts')->insert([
            [
                'company_id' => null,
                'created_by' => 1, // Assuming admin user with ID 1
                'updated_by' => 1,
                'parent_coa_id' => null, // No parent for top-level accounts
                'payment_type_id' => null,
                // 'project_id' => null,
                'account_code' => '001',
                'account_name' => 'Asset',
                'account_type' => 'Asset',
                'is_auto_head' => true,
                'is_active' => true,
                // 'has_leaf' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'company_id' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'parent_coa_id' => null,
                'payment_type_id' => null,
                // 'project_id' => null,
                'account_code' => '002',
                'account_name' => 'Liability',
                'account_type' => 'Liability',
                'is_auto_head' => true,
                'is_active' => true,
                // 'has_leaf' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'company_id' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'parent_coa_id' => null,
                'payment_type_id' => null,
                // 'project_id' => null,
                'account_code' => '003',
                'account_name' => 'Income',
                'account_type' => 'Income',
                'is_auto_head' => true,
                'is_active' => true,
                // 'has_leaf' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'company_id' => null,
                'created_by' => 1,
                'updated_by' => 1,
                'parent_coa_id' => null,
                'payment_type_id' => null,
                // 'project_id' => null,
                'account_code' => '004',
                'account_name' => 'Expense',
                'account_type' => 'Expense',
                'is_auto_head' => true,
                'is_active' => true,
                // 'has_leaf' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
