<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
class FrontController extends Controller
{

    public function index()
    {
        $contents = Content::first();
        return view('main.home', compact('contents'));
    }



        public function about()
        {
            $contents = Content::first();

            return view('main.about', compact('contents'));
        }



    //   public function about()
    // {

    //  return  view('main.about');

    // }

       
    public function services()
    {
        return view('main.services');
    }
    public function Blog()
    {
        return view('main.plusticblog');
    }
    public function Blog1()
    {
        return view('main.cleaningfor');
    }
    public function Blog2()
    {
        return view('main.oceanclean');
    }
    public function Blog3()
    {
        return view('main.climates');
    }
    public function contact()
    {
        return view('main.contact');
    }
    public function faq()
    {
        return view('main.faq');
    }
   
    public function aitrading()
    {
        return view('main.aitrading');
    }

    public function affiliate()
    {
        return view('main.affiliate');
    }
    public function termcandition()
    {
        return view('main.term-candition');
    }

    public function partners()
    {
        
        return view('main.partners');
    }
 public function news()
    {
        return view('main.news');
    }



}
