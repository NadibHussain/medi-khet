<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use \Cart as Cart;


class BlogsController extends Controller
{	public function index(){
    
    $blogs = DB::table('blogs')->orderBy('created', 'desc')->get();
    $products = DB::table('products')
                ->orderBy('Sold', 'desc')
                ->get();

        return view('index', ['blogs' => $blogs,'products' => $products]);
}
public function blog1(){

	$blogs = DB::table('blogs')->get();

        return view('blog', ['blogs' => $blogs[0]]);
}
public function blog2(){

	$blogs = DB::table('blogs')->get();

        return view('blog', ['blogs' => $blogs[1]]);
}
public function blog3(){

	$blogs = DB::table('blogs')->get();

        return view('blog', ['blogs' => $blogs[2]]);
}
public function blog4(){

	$blogs = DB::table('blogs')->get();

        return view('blog', ['blogs' => $blogs[3]]);
}
public function blog5(){

	$blogs = DB::table('blogs')->get();

        return view('blog', ['blogs' => $blogs[4]]);
}

 public function cartadd($name = null){
        $quantity=Input::get('quantity');
         $products = DB::table('products')->where('Name','LIKE','%'. $name . '%')
                                        ->get();


         Cart::add($products[0]-> Name, $products[0]-> ScientificName, $quantity,$products[0]-> Price);

     $blogs = DB::table('blogs')->orderBy('created', 'desc')->get();
    $product= DB::table('products')
                ->orderBy('Sold', 'desc')
                ->get();

        return view('index', ['blogs' => $blogs,'products' => $product]);                          
        
    }
}
