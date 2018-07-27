<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Ingredient;
use App\Category;


class PagesController extends Controller
{
    public function index(){
        $title = "This is Index";
        return view('pages.index');
    }
    public function menu(){
        $title = "This is menu";
        return view('pages.menu');
    }
    public function orders(){
        $title = "This is orders";
        return view('pages.orders');
    }
}
