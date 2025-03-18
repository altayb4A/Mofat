<?php

namespace App\Services;

use GuzzleHttp\Client;

class GoogleMapsService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('GOOGLE_MAPS_API_KEY');
    }

    public function getDistance($origin, $destination)
    {
        $url = 'https://maps.googleapis.com/maps/api/distancematrix/json';

        $response = $this->client->get($url, [
            'query' => [
                'origins' => $origin,
                'destinations' => $destination,
                'key' => $this->apiKey,
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        if (isset($data['rows'][0]['elements'][0]['distance']['value'])) {
            return $data['rows'][0]['elements'][0]['distance']['value'] / 1000;
        }

        return null;
    }
}
