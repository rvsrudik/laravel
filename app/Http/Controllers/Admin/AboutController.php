<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    //

    public function show()
    {

        return 'hello';
        if (view()->exists('default.about')) {

//            return (new Response('hello', 200, array()));

//            return view('default.about')->withTitle('Hello World');
        }
        abort(404);
    }
}
