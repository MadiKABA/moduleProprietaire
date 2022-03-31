<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commune;
class CommuneController extends Controller
{
    //

    public function index()
    {
        Commune::all();
        return view();
    }
}
