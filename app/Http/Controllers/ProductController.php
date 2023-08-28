<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as ModelsProduct;
use App\Models\User as ModelsUser;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    public function index()
    {
        $pageName = 'Home';
        $newArrivals = ModelsProduct::with('reviews')->latest()->limit(5)->get()->toArray();
        $bestSellers = ModelsProduct::with('reviews')->limit(5)->get();
        $featureds = ModelsProduct::with('reviews')->limit(5)->get();
        $prevVisits = ModelsProduct::with('reviews')->limit(5)->get();
        $brands = ModelsProduct::all()->unique('car_brand')->pluck('car_brand');
        $collections = ModelsProduct::all()->unique('collection')->pluck('collection');
        $filterTypes = ModelsProduct::all()->unique('filter_type')->pluck('filter_type');
        $findProductVars = array('brands' => $brands, 'collections' => $collections, 'filterTypes' => $filterTypes);
        $data = compact('newArrivals', 'bestSellers', 'featureds', 'prevVisits', 'findProductVars', 'pageName');
        return view('welcome')->with($data);
    }

    public static function aboutUs()
    {
        $pageName = 'About Us';
        $data = compact('pageName');
        return view('aboutUs')->with($data);
    }

    public static function contactUs()
    {
        $pageName = 'Contact Us';
        $data = compact('pageName');
        return view('contactUs')->with($data);
    }

    public static function shop(Request $request)
    {
        $pageName = 'Shop';
        //sort mode: 1 - default, 2 - brand asc, 3 - brand desc, 4 - model asc, 5 - model desc, 6 - price desc, 7 - price asc
        switch ($request->sortMode) {
            case 1:
                $products = ModelsProduct::with('reviews')->orderBy('bmuk_no', 'asc')->paginate(20)->withQueryString();
                break;
            case 2:
                $products = ModelsProduct::with('reviews')->orderBy('car_brand', 'asc')->paginate(20)->withQueryString();
                break;
            case 3:
                $products = ModelsProduct::with('reviews')->orderBy('car_brand', 'desc')->paginate(20)->withQueryString();
                break;
            case 4:
                $products = ModelsProduct::with('reviews')->orderBy('model', 'asc')->paginate(20)->withQueryString();
                break;
            case 5:
                $products = ModelsProduct::with('reviews')->orderBy('model', 'desc')->paginate(20)->withQueryString();
                break;
            case 6:
                $products = ModelsProduct::with('reviews')->orderBy('price', 'desc')->paginate(20)->withQueryString();
                break;
            case 7:
                $products = ModelsProduct::with('reviews')->orderBy('price', 'asc')->paginate(20)->withQueryString();
                break;
            default:
                $products = ModelsProduct::with('reviews')->orderBy('bmuk_no', 'asc')->paginate(20)->withQueryString();
        }

        // search funtion
        if ($request->searchQuery) {
            $products = ModelsProduct::with('reviews')->where('bmuk_no', $request->searchQuery)->orWhere('collection', 'like', '%' . $request->searchQuery . '%')->orWhere('filter_type', 'like', '%' . $request->searchQuery . '%')->orWhere('car_brand', 'like', '%' . $request->searchQuery . '%')->orWhere('model', 'like', '%' . $request->searchQuery . '%')->orderBy('bmuk_no', 'asc')->paginate(20)->withQueryString();
        }
        $sortMode = $request->sortMode ?? 1;
        $brands = ModelsProduct::all()->unique('car_brand')->pluck('car_brand');
        $collections = ModelsProduct::all()->unique('collection')->pluck('collection');
        $filterTypes = ModelsProduct::all()->unique('filter_type')->pluck('filter_type');
        $filterProductVars = array('brands' => $brands, 'collections' => $collections, 'filterTypes' => $filterTypes);
        $isFiltered = false;
        $isSearch = isset($request->searchQuery);
        $data = compact('products', 'filterProductVars', 'sortMode', 'isFiltered', 'isSearch', 'pageName');
        return view('shop')->with($data);
    }

    public static function filteredShop(Request $request)
    {
        $pageName = 'Shop';
        $brands = ModelsProduct::all()->unique('car_brand')->pluck('car_brand');
        $collections = ModelsProduct::all()->unique('collection')->pluck('collection');
        $filterTypes = ModelsProduct::all()->unique('filter_type')->pluck('filter_type');
        if ($request->brand != 'all') {
            $models = ProductController::getModels($request->brand);
        }
        if ($request->model != 'all') {
            $specifications = ProductController::getSpecifications($request->brand, $request->model);
        }
        $selectedFilter = array('collection' => $request->collection, 'filter_type' => $request->filter_type, 'brand' => $request->brand, 'model' => $request->model, 'specification' => $request->specification);
        $filterProductVars = array('brands' => $brands, 'collections' => $collections, 'filterTypes' => $filterTypes, 'models' => $models ?? null, 'specifications' => $specifications ?? null);
        $isFiltered = true;
        $products = array();
        if ($request->collection != 'all') {
            $products['collection'] = $request->collection;
        }
        if ($request->filter_type != 'all') {
            $products['filter_type'] = $request->filter_type;
        }
        if ($request->brand != 'all') {
            $products['car_brand'] = $request->brand;
        }
        if ($request->model != 'all') {
            $products['model'] = $request->model;
        }
        if ($request->specification != 'all') {
                /* $products['specification'] = $request->specification */;
        }
        $products = ModelsProduct::with('reviews')->where($products)->orderBy('bmuk_no', 'asc')->paginate(20)->withQueryString();
        $data = compact('products', 'filterProductVars', 'selectedFilter', 'isFiltered', 'pageName');
        return view('shop')->with($data);
    }


    public static function product(String $productId)
    {
        $productDetails = ModelsProduct::with('reviews')->where('bmuk_no', $productId)->get()->first();
        $userIds = $productDetails->reviews->pluck('user_id');
        $userNames = ModelsUser::whereIn('id', $userIds)->select('id', 'name')->get();
        $userNames = Arr::pluck($userNames, 'name', 'id');
        $pageName = $productDetails->collection . ' - ' . $productDetails->filter_type;
        $data = compact('pageName', 'productDetails', 'userNames');
        return view('product')->with($data);
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
