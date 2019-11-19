<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

        $posts = [
            'Post 1',
            'Post 2',
            'Post 3',
            'Post 4',
            'Post 5'
        ];   

        return view('welcome', [
            'posts' => $posts,
            'food' => 'feed'
         
        ]);
    }


    public function about(){
        return view('about', [
           'about' => 'About Us.'
        ]);
    }

    public function contact(){
        return view('contact', [
           'contact' => 'Contact Us.'
        ]);
    }
}
