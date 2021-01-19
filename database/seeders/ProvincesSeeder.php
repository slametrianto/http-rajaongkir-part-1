<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

use App\Models\Province;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withHeaders([
            'key' => 'c352713f591c4386e137379795213a64'
        ])->get('https://api.rajaongkir.com/starter/province');

        $provinces = $response['rajaongkir']['results'];

        foreach ($provinces as $pro) {
            $data_provinces[] = [
                'id' => $pro['province_id'],
                'province' => $pro['province'],
            ];
        }
        Province::insert($data_provinces);
    }
}