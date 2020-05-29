<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PackagePricing;
use Illuminate\Support\Facades\Log;


class PackageController extends Controller
{
    public function index()
    {
        $categories = PackagePricing::latest()->paginate(10);
        print($categories);
        Log::channel('stderr')->info($categories);
        return response($categories, 200)
                ->header('Content-Type', 'application/json')
                ->header("Access-Control-Allow-Origin", "*")
                ->header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, OPTIONS")
                ->header("Access-Control-Allow-Headers", "X-Requested-With, Content-Type, X-Token-Auth, Authorization")
                ->header('X-Header-One', 'Header Value')
                ->header('X-Header-Two', 'Header Value');
    }
    
}