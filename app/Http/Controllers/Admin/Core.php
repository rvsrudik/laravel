<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Core extends Controller
{

    public function __construct()
    {
//        $this->middleware('mymiddle');
    }


    //list articles
    public function getArticles() {
        echo "123";
    }

    //material
    public function getArticle($id) {
        echo $id;
    }
}
