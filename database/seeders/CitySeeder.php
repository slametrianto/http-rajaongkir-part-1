<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use Illuminate\Support\Facades\Http;


class CitySeeder extends Seeder
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
        ])->get('https://api.rajaongkir.com/starter/city');

        $city = $response['rajaongkir']['results'];

        foreach ($city as $cities) {
            $data_city[] = [
                'id' => $cities['city_id'],
                'province_id' => $cities['province_id'],
                'type' => $cities['type'],
                'city_name' => $cities['city_name'],
                'postal_code' => $cities['postal_code'],
            ];
        }

        City::insert($data_city);
    }
}