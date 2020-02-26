<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function showAllItemCD()
    {
        return response()->json(Item::all());
    }

  
}