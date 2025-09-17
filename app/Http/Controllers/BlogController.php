<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class BlogController extends Controller
{

    public function index()
    {
        return "In the future will be my Blog";
    }

    public function getPost($slug, $slug2)
    {
        return $slug."<br>".$slug2; //Можно дробить несколько параметров URL
    }


}
