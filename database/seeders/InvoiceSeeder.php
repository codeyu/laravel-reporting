<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("Invoices")->insert(
            [
                [
                    'billno' => 'WS-DF502',
                    'slipno' => 'GB465',
                    'customerid' => 1,
                    'customername' => '長崎カントリーフーズ',
                    'products' => 'コーヒー 250 ml',
                    'number' => 100,
                    'unitprice' => 100,
                    'date' => '2021-01-05T00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'billno' => 'WS-DF502',
                    'slipno' => 'GB465',
                    'customerid' => 1,
                    'customername' => '長崎カントリーフーズ',
                    'products' => '紅茶 350 ml',
                    'number' => 300,
                    'unitprice' => 120,
                    'date' => '2021-01-05T00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'billno' => 'WS-DF502',
                    'slipno' => 'DK055',
                    'customerid' => 1,
                    'customername' => '長崎カントリーフーズ',
                    'products' => '炭酸飲料 (オレンジ） 350 ml',
                    'number' => 200,
                    'unitprice' => 120,
                    'date' => '2021-01-09T00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            ]
        );
    }
}