<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $heading="Welcome to Laravel!";
    return view('pages.index')->with('heading', $heading);
    }

    public function about(){
        $heading="Welcome to Laravel!";
        return view('pages.about')->with('heading', $heading);
        }

    public function services(){
        $data=array(
            'title'=>'Services',
            'services'=>['Web Designing','Programming','SEO']
        );
        return view('pages.services')->with($data);
        }
}
