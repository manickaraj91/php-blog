<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function service(){
        $data=array(
            'title' =>'service',
            'services' => ['Webdesign','SEO','Program']

        );
        return view('pages.service')->with($data);
    }
}
