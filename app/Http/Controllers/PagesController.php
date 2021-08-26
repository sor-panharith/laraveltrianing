<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To laravel';

       // return view('pages.index', compact('title')); //pass title to index
        return view('pages.index')->with('title',$title); //another way to pass
    }

    public function about(){
        $title = 'About Us';

        return view('pages.about')->with('title',$title);
        
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Mobile app', 'Web app', 'Desktop app']
        );

        return view('pages.services')->with($data);
    }
}
