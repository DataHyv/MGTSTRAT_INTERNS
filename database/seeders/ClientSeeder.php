<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config = ['table'=>'clients', 'length'=>10, 'field'=>'cstmzd_eng_form_id', 'prefix'=>'CLNT-'];
        $idClnt = IdGenerator::generate($config);
        DB::table('clients')->insert([
            [
                'company_name' => 'MGT_STRAT',
                'cstmzd_eng_form_id' => $idClnt,
                'status' => 'ACTIVE',
                'sales_person' => 'Goody',
                'industry' => 'Shipping & Logistics',
                'old_new' => 'OLD',
                'first_eng' => '7/2/2020',
                'latest_eng' => '08/10/2022',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            // [
            //     'company_name' => 'DATAHYV',
            //     'cstmzd_eng_form_id' => $idClnt,
            //     'status' => 'ACTIVE',
            //     'sales_person' => 'Erick',
            //     'industry' => 'Data Analytics',
            //     'old_new' => 'NEW',
            //     'first_eng' => '09/28/2022',
            //     'latest_eng' => '09/28/2022',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            // ]
        ]);
    }
}
