<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;


class MenuController extends Controller
{
    function index(){
        $allItems = Item::all();
        $drinks = Item::where('menu_type','drink')->get();
        $foods = Item::where('menu_type','food')->get();
        return view('menu',['allItems' => $allItems, 'drinks'=>$drinks, 'foods'=>$foods]);
    }
    
}
