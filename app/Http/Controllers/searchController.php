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
    * Search 
    */
    public function search()
    {
        $query = Input::get('searchinput');
        $category = Input::get('category');
        $area = Input::get('area');
        switch ($category) {
            case "all":
                return $this->searchAll($query);
            case "bt":
                return $this->searchBt($query, $area);
            case "post":
                return $this->searchPost($query);
            default:
                return $this->searchAll($query);
        }
    }
    /*
    *   Search post and bottle tree
    */
    private function searchAll($query) {
        $bts = BottleTree::where('nameNormal', 'LIKE', "%".$query."%")
                            ->orWhere('nameScience', 'LIKE', "%".$query."%")
                            ->orWhere('code', 'LIKE', "%".$query."%")->get();
        $posts = Post::where('title', 'LIKE', "%".$query."%")
                            ->orWhere('content', 'LIKE', "%".$query."%")->get();
        $result = array(
            "bt" => $bts, 
            "post" => $posts,
            "keyword" => $query
            );
        return view('search.show', compact('result'));
    }
    /*
    *   Search bt
    */
    private function searchBt($query, $area) {
         $bts = BottleTree::where('area','=',$area)
                            ->where(function ($select) use ($query) {
                                $select->where('nameNormal', 'LIKE', "%".$query."%")
                                ->orWhere('nameScience', 'LIKE', "%".$query."%")
                                ->orWhere('code', 'LIKE', "%".$query."%");
                            })
                            ->get();
        $result = array(
            "bt" => $bts, 
            "post" => array(),
            "keyword" => $query
            );      
        return view('search.show', compact('result'));
    }
    /*
    *   Search post
    */
    private function searchPost($query) {
        $posts = Post::where('title', 'LIKE', "%".$query."%")
                            ->orWhere('content', 'LIKE', "%".$query."%")->get();
        $result = array(
            "bt" => array(), 
            "post" => $posts,
            "keyword" => $query
            );      
        return view('search.show', compact('result'));
    }
}
