<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

//    protected $request;

//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }


    public function show(Request $request, $id=0) {

        print_r($request->all());

//        echo '<h1>'.$id.'</h1>';
//        print_r($request->only('name', 'site'));
//        print_r($request->except('name'));

//        $name = $request->name;
//        if ($request->has('name')) {
//            echo '<h1 style="margin-top: 100px">' . $request->input('name', 'Default') . '</h1>';
//        }





//        if($request->is('contact/*')) {
//            echo '<h1 style="margin-top: 100px">' . $request->path() . '</h1>';
//        }


//        echo '<h1 style="margin-top: 100px">' . $request->url() . '</h1>';

//        echo '<h1 style="margin-top: 100px">' . $request->Fullurl() . '</h1>';

//        echo '<h1 style="margin-top: 100px">' . $request->method() . '</h1>';


        if($request->isMethod('post'))
        {
            ////

            //validation

            ////

            $request->flash();
//            $request->flashOnly('name', 'site');
//            $request->flashExcept('name');
//            return redirect()->route('contact');
            echo '<h1 style="margin-top: 100px">' . $request->method() . '</h1>';
        }
        return view('default.contact', ['title'=>'Contacts']);
    }
}
