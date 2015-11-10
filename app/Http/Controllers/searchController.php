<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BottleTree;
use App\Post;

class searchController extends Controller
{
    /*
    * Search infomation
    */
    public function search()
    {
        $query = Input::get('searchinput');
        $bts = BottleTree::where('nameNormal', 'LIKE', "%".$query."%")
                            ->orWhere('nameScience', 'LIKE', "%".$query."%")
                            ->orWhere('code', 'LIKE', "%".$query."%")->get();
        $posts = Post::where('title', 'LIKE', "%".$query."%")
                            ->orWhere('content', 'LIKE', "%".$query."%")->get();
        $result = array(
            "bt" => $bts, 
            "post" => $posts
            );
        return view('search.show', compact('result'));
    }
}
