<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('tweets.index',[
            'tweets'=> auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attrubutes = request()->validate(['body'=>'required|max:255']);

        Tweet::create([
            'user_id'=>auth()->id(),
            'body' => $attrubutes['body']
            ]);

       return  redirect()->route('home');
    }
}
