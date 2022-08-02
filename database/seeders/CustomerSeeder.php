<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Http;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $customers = [2182921,24173410,26693780,27916791,27916936,28425308,28534557,35262,35432,35491,35505,1428896,1461788,1476947,1594516,1630628,1637461,1639170,1651501,1699237,1745336,1765736,1787519,1802577,1890816,1919041,1919911,1936620,2031116,2083183,2083264,2095050,2237814,2240742,2247941,2252775,2352664,2585316,2747006,2904730,3008606,3010589,3096904,3139182,3217302,3304337];

      foreach ($customers as $customer) {
        $customer_db = new Customer;

        $response = Http::get("http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico=" . $customer);

        $xml = simplexml_load_string($response);

        $ns = $xml->getDocNamespaces();
        $data = $xml->children($ns['are']);
        $el = $data->children($ns['D'])->VBAS;

        if (strval($el->ICO) == $customer) {

          $customer_db->ico = $customer;
          $customer_db->name = (string) $el->OF ?? null;
          $customer_db->country = (string) $el->AA->NS ?? null;
          $customer_db->municipality_name = (string) $el->AA->N ?? null;
          $customer_db->municipality_part_name = (string) $el->AA->NCO ?? null;
          $customer_db->city_part_name = (string) $el->AA->NMC ?? null;
          $customer_db->street = (string) $el->AA->NU . ' ' . (($el->AA->CO == '') ? $el->AA->CD : $el->AA->CD . '/' . $el->AA->CO) ?? null;
          $customer_db->zip_code = (string) $el->AA->PSC ?? null;


      };

      $customer_db->save();
  };
    }
}
