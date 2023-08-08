<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as ModelsProduct;

class ProductController extends Controller
{
    public function index()
    {
        $newArrivals = ModelsProduct::all()->random(10)->toArray();
        $bestSellers = ModelsProduct::all()->random(10)->toArray();
        $featureds = ModelsProduct::all()->random(10)->toArray();
        $prevVisits = ModelsProduct::all()->random(10)->toArray();
        $brands = ModelsProduct::all()->unique('car_brand')->pluck('car_brand');
        $collections = ModelsProduct::all()->unique('collection')->pluck('collection');
        $filterTypes = ModelsProduct::all()->unique('filter_type')->pluck('filter_type');
        $findProductVars = array('brands' => $brands, 'collections' => $collections, 'filterTypes' => $filterTypes);
        $data = compact('newArrivals', 'bestSellers', 'featureds', 'prevVisits', 'findProductVars');
        return view('welcome')->with($data);
    }

    public function shop()
    {
        $products = ModelsProduct::paginate(20);
        $brands = ModelsProduct::all()->unique('car_brand')->pluck('car_brand');
        $collections = ModelsProduct::all()->unique('collection')->pluck('collection');
        $filterTypes = ModelsProduct::all()->unique('filter_type')->pluck('filter_type');
        $filterProductVars = array('brands' => $brands, 'collections' => $collections, 'filterTypes' => $filterTypes);
        $data = compact('products', 'filterProductVars');
        return view('shop')->with($data);
    }

    public static function getModels(String $brand)
    {
        $carModels = ModelsProduct::where('car_brand', $brand)->get()->unique('model')->pluck('model');
        return $carModels;
    }

    public static function getSpecifications(String $brand, String $model)
    {
        $specifications = ModelsProduct::where('car_brand', $brand)->where('model', $model)->get()->pluck('specification');
        $specifications = json_decode($specifications, true);
        $specs = array();
        foreach ($specifications as $s1) {
            foreach (json_decode($s1, true) as $s2) {
                $specs[] = $s2;
            }
        }
        $specs = array_unique($specs, SORT_REGULAR);
        $result = array();
        foreach ($specs as $spec) {
            $result[] = $spec['engine'] . ', ' . $spec['fuelType'] . ', ' . $spec['year'];
        }
        sort($result);
        return $result;
    }
}
