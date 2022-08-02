<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $customers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,1,33,34,35,36,37,38,39,40,41,42,43,44,45,45,46];

        $suppliers = [1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,2,2,2,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3];

        $prices = [2852,2804,2057,5952,2146,8334,6989,6249,3237,8903,5956,3407,8820,5416,8869,1574,1597,8836,7785,9008,6054,1360,5185,7576,4898,9195,4296,1680,5901,5935,9101,7705,4042,6585,1929,7984,7311,3416,3634,8174,9169,9275,2085,7869,4325,5809,6606,393];


        foreach ($customers as $key => $customer) {
          $invoice = new Invoice;
          $invoice->customer_id = $customer;
          $invoice->supplier_id = $suppliers[$key];
          $invoice->price = $prices[$key];
          $invoice->save();
        }


        


    }
}
