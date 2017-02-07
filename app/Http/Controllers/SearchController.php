<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    //
    public function index()
    {
        return view('search');
    }

    public function search()
    {

        $searchterm = request('title');

        if (!$searchterm) {
        

         $dvds  = DB::table('dvds')->get();
       }
          $dvds  = DB::table('dvds')
        ->select('title', 'rating_name', 'genre_name')
         ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
         ->join('genres', 'dvds.genre_id', '=', 'genres.id')
         ->where('title', 'LIKE', "%$searchterm%")
         ->orderBy('title')
         ->get();


              return view('search-results', [
                'dvds'=> $dvds,
                'searchterm' => $searchterm
              ]);


}
}
