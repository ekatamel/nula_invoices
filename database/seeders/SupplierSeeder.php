<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;
use Illuminate\Support\Facades\Http;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $suppliers = [8832749,76143201,3000044];

      foreach ($suppliers as $supplier) {
        $supplier_db = new Supplier;

        $response = Http::get("http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico=" . $supplier);

        $xml = simplexml_load_string($response);

        $ns = $xml->getDocNamespaces();
        $data = $xml->children($ns['are']);
        $el = $data->children($ns['D'])->VBAS;

        if (strval($el->ICO) == $supplier) {

          $supplier_db->ico = $supplier;
          $supplier_db->name = (string) $el->OF ?? null;
          $supplier_db->country = (string) $el->AA->NS ?? null;
          $supplier_db->municipality_name = (string) $el->AA->N ?? null;
          $supplier_db->municipality_part_name = (string) $el->AA->NCO ?? null;
          $supplier_db->city_part_name = (string) $el->AA->NMC ?? null;
          $supplier_db->street = (string) $el->AA->NU . ' ' . (($el->AA->CO == '') ? $el->AA->CD : $el->AA->CD . '/' . $el->AA->CO) ?? null;
          $supplier_db->zip_code = (string) $el->AA->PSC ?? null;


      };

      $supplier_db->save();
  };
    }
}
