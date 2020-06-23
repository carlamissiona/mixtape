<?php

namespace App\Http\Controllers;

use App\mixtapeadmin;
use Illuminate\Http\Request;
use App\Songs;

class SiteController extends Controller
{


    public function home()
    {

          $rocksong= Songs::where('genres', 'LIKE', 'rock')
                    ->take(8)
                    ->get();
          $instrusong= Songs::where('genres', 'LIKE', 'instrumental')
                    ->take(8)
                    ->get();
          $popsong= Songs::where('genres', 'LIKE', 'pop')
                    ->take(8)
                    ->get();
             // print_r(json_encode($results));
          $genres = array(
                "rock"=> $rocksong,
                "instrumental"=> $instrusong,
                "pop"=> $popsong
              );
          $genrelist = array(
                "rock","instrumental","pop","reggae","jazz","rnb","indie"
              );

            return view('index', compact('genres','genrelist'));


    }
    public function geturlsvideo($search)
    {
         //echo $search;
     
    }
    public function playlist()
    {

        echo "home playlist";

    }
    public function search($searchstr)
    {
      $str = '%' . $searchstr . '%';
      $results = Songs::where('name', 'LIKE' , $str)
                ->orWhere('genres', 'LIKE', $str )
                ->orWhere('artist', 'LIKE', $str )
                ->orWhere('url', 'LIKE', $str )
                ->get();
         print_r(json_encode($results));
    }
    public function searchvideo($searchstr)
    {
        // 1. search vimeo
        // 2. search dailymotion

       print_r(json_encode($results));
    }
    public function signup()
    {
        return view('signup');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function getsongsbygenre($searchstr,$limit,$page,$firstlimit)
    {
      $str = '%' . $searchstr . '%';
      $results = Songs::where('genres', 'LIKE', $str )
                ->take($firstlimit)
                ->get();
         print_r(json_encode($results));
    }


}
