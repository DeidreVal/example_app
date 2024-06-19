<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Listing;

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Single Listing
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello', function() {
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function($id) {
//     // dd($id);
//     return response('Post '. $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     // dd($request->name . ' ' . $request-> city);
//     return $request->name . ' ' . $request-> city;
// });