<?php
use Illuminate\Http\Request;
Route::get('contact',function(){
    return view('contact::contact');
});
Route::post('contact',function(Request $request){
    dd($request->all());
})->name('contact');