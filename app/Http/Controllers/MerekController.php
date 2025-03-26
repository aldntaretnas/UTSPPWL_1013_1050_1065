<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    public function index()
    {
        $merek2 = Merek::all();
        return response(view('merek', ['merek2' => $merek2]));
    }
}
