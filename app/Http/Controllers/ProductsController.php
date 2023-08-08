<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products as ModelsProducts;

class ProductsController extends Controller
{
    public function index()
    {
        $products = ModelsProducts::all()->toArray();
        $engines = [];
        $brakes = [];
        $suspensions = [];
        $electricals = [];
        foreach ($products as $prod) {
            switch ($prod['category']) {
                case "Engine":
                    array_push($engines, $prod);
                    break;
                case "Brakes":
                    array_push($brakes, $prod);
                    break;
                case "Suspension":
                    array_push($suspensions, $prod);
                    break;
                case "Electrical":
                    array_push($electricals, $prod);
                    break;
                default:
                    echo "Unkown";
            }
        }
        $data = compact('engines', 'brakes', 'suspensions', 'electricals');
        return view('welcome')->with($data);
    }
}
