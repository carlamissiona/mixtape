<?php

use Illuminate\Support\Facades\Route;
use KubAT\PhpSimple\HtmlDomParser;
use App\Songs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/play', function () {
    return view('play');
});

Route::get('/home', 'SiteController@home');
Route::get('/search/{searchstr}', 'SiteController@search');
Route::get('/getsongsbygenre/{searchstr}/{limit}/{page}/{firstlimit}', 'SiteController@getsongsbygenre');
Route::get('/geturls', function () {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.freemusicarchive.org/search?adv=1&quicksearch=a&&page=1&per_page=200");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 0);

$output = curl_exec($ch);
curl_close($ch);
$dom = HtmlDomParser::str_get_html( $output );

foreach($dom->find("div.play-item") as $elements) {
    echo "row row \n\n";
    var_dump($elements);
}

// }
// // print_r($output);
// preg_match_all('~<a(.*?)href="([^"]+)"(.*?)>~', $output, $matches);
//
// $mp3s = array();
// foreach($matches[2] as $value){
//   if( strpos($value, ".mp3" ) ){
//     array_push($mp3s,$value);
//
//       $song = new Songs;
//       $song->name = $value;
//       $song->genres = "fma";
//       $song->provider = "FMA";
//       $song->playlist_id = 0;
//       $song->url = $value ;
//       $song->save();
//
//   }
// }


// return   print_r($mp3s) ;
return print_r(1);
});


Route::get('/str', 'SiteController@stream');
Route::get('/playlist', 'SiteController@playlist');
