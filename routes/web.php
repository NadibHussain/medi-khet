<?php

use Illuminate\Support\Facades\Input;

Route::get('/', function () {     
    return view('index');
});
	
Route::get('users',['uses' =>'UsersController@index']);	
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',['uses' =>'BlogsController@index']);
Route::get('/blog1',['uses' =>'BlogsController@blog1']);
Route::get('/blog2',['uses' =>'BlogsController@blog2']);
Route::get('/blog3',['uses' =>'BlogsController@blog3']);
Route::get('/blog4',['uses' =>'BlogsController@blog4']);
Route::get('/blog5',['uses' =>'BlogsController@blog5']);
Route::post('cart/{name?}',['uses' =>'BlogsController@cartadd']);
Route::get('/cart',['uses' =>'CartController@index']);
 
Route::post('/checkedout',['uses' =>'CartController@checkedout']);


Route::post('/list', function() {
    $name=Input::get('name');
     $category=Input::get('category');
     $com=strcmp($category,"all");

    if ($com==-1) {
    	if (is_null($name)) {
    		$products = DB::table('products')->where('Category', $category)->get();
    	}
    	else 
    	{
    		$products = DB::table('products')->where('Category', $category)
    									->where('Name','LIKE','%'. $name . '%')
    									->get();
    	}
    	
    }
    if ($com==0) {
     	if (!is_null($name)) {
           $products = DB::table('products')->where('Name','LIKE','%'. $name . '%')
                                        ->get();
        }
        else
        {
            $products = DB::table('products')->get();

        }
    	
    }
    
    	return view('list', ['products' => $products]);
      
 

});
Route::get('detail/{name?}', function ($name = null) {
   $product= DB::table('products')->where('Name','LIKE','%'. $name . '%')
                                        ->get();
      return view('details', ['product' => $product]);
                                      
});




