<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CoinPairController extends Controller
{
    public function allPairs()
    {
        try {
            $client = new Client();
            $pairsUrl = 'https://api.pro.coinbase.com/products';
            $pairsResponse = $client->get($pairsUrl);
            $pairsData = json_decode($pairsResponse->getBody(), true);
            $usdPairs = array_filter($pairsData, function ($pair) {
                return $pair['quote_currency'] === 'USD' && $pair['status'] === 'online';
            });
            array_multisort(array_column($usdPairs, 'base_currency'), SORT_ASC, $usdPairs);
            return response()->json($usdPairs);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function pairPrice($pair)
    {
        try {
            $client = new Client();
            $response = $client->get('https://api.pro.coinbase.com/products/' . strtoupper($pair) . '/ticker');
            $data = json_decode($response->getBody(), true);
            return response()->json($data['price']);
        } catch (\Exception $error) {
            return response()->json(['error' => $error->getMessage()], 400);
        }
    }
}
