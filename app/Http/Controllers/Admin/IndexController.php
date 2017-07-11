<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
//    public function show() {

//        $data = array('title'=>'Hello World');
//        return view('default.template', $data); // key=>value



//        return view('default.template')->with('title', 'Hello');




//        $view = view('default.template');
//
//        $view->with('title', 'Hello World 2');
//        $view->with('title2', 'Hello World 3');
//        $view->with('title3', 'Hello World 4');
//
//        return $view;

//        if (view()->exists('default.template')) {



//            view()->name('default.template', 'myview');

//            view()->of('myview',  $data);


//            $content_vida = view('default.template', ['title'=>'Hello World'])->render();

//            echo $content_vida;

//            return;

//            $path = config('view.paths');

//            return view()->file($path[0], 'default/template.php')->withTitle('Hello World?');
//            return view('default.template')->withTitle('Hello World?');
//        }

//        abort(404);

//    }





//----------lesson 12 -------------------

//    public function show() {
//
//        if (view()->exists('default.index')) {
//            return view('default.index')->withTitle('Hello World');
//        }
//        abort(404);
//    }
//
//}




//---------lesson 13 --------------------

    public function show() {

        $array = array(
                        'title'=>'Laravel Project',
                        'data'=>[
                                'one'=>'List 1',
                                'two'=>'List 2',
                                'three'=>'List 4',
                                'five'=>'List 5'
                                ],
                        'dataI'=>['List 1','List 2','List 3','List 4','List 5'],

                        'bvar' => true,
                        'script'=>"<script>alert('hello')</script>"
        );


        if (view()->exists('default.index')) {
            return view('default.index', $array);
        }
        abort(404);
    }

}














