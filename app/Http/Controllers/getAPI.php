<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// use App\Http\Controllers\getAPI;


class getAPI extends Controller
{
    public function index()
    {
        // $response = Http::withHeaders([
        //     'key' => 'c352713f591c4386e137379795213a64'

        // ])->get('https://api.rajaongkir.com/starter/province');
        // return $response->body();

        $response = Http::withHeaders([
            'key' => 'c352713f591c4386e137379795213a64'
        ])->get('https://api.rajaongkir.com/starter/city');
        return $response['rajaongkir']['results'];
    }
}