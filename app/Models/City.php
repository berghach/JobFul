<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function cities(){
        // API endpoint
        $apiEndpoint = 'https://madina.ysnirix.xyz/api/cities?format=json';

        // Make the API request
        $response = file_get_contents($apiEndpoint);

        // Check if the request was successful
        if ($response === false) {
            die('Failed to fetch data from the API');
        }

        // Decode the JSON response
        $data = json_decode($response, true);

        $cities = array();
        foreach($data['results'] as $city){
            $cities[] = $city['name'];
        }

        return $cities;
    }
}
