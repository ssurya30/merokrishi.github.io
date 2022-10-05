<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class merokrishicontroller extends Controller
{
function index()
{
    return DB::select("SELECT * FROM loginandregister");
    //echo"from from user controller";
}
}