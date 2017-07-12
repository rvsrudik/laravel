<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Auth\Access\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Response;
use Illuminate\Http\Response;


class AboutController extends Controller
{
    //

    public function show()
    {

        if (view()->exists('default.about')) {


            $view = view('default.about')->withTitle('Hello World')->render();
//            return (new Response($view))->header('Content-Type', 'newType')->header('Header-One', 'headerONE');

//            return response($view)->header('Content-Type', 'newType');

//            return response()->json(['name'=>'Hello', 'namr1'=>'Hello1']);

//            return response()->view('default.about', ['title'=>'Hello world']);

//            return response()->download('robots.txt', 'mytext.txt');

//             return response($view)->withHeaders([
//                                            'headerOne'=>'hello',
//                                            'headerTwo'=>'hello2',
//             ]);

//            return redirect('/');

//            return redirect()->route('home');

//            return redirect()->action('Admin\ContactController@show');

            return redirect('/articles')->with('param1', 'Hello');

//            return new RedirectResponse('/articles');

//            return RedirectResponse::create('/articles');

//            return view('default.about')->withTitle('Hello World');
        }
        abort(404);
    }
}
