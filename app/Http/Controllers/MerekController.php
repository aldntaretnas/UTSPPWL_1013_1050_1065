<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return response(view('brand', ['brands' => $brands]));
    }
}
