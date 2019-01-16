<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \Cart as Cart;
use DB;
use Route;
class CartController extends Controller
{
	public function index(){
		$carts=Cart::content();
		 return view('cart', ['carts' => $carts]);
	}

	 public function cartadd($name = null){
        $quantity=Input::get('quantity');
         $products = DB::table('products')->where('Name','LIKE','%'. $name . '%')
                                        ->get();


         Cart::add($products[0]-> Name, $products[0]-> ScientificName, $quantity,$products[0]-> Price);

      index();                            
        
    }
    public  function checkedout(){
    	Cart::destroy();
    	 $blogs = DB::table('blogs')->orderBy('created', 'desc')->get();
    $product= DB::table('products')
                ->orderBy('Sold', 'desc')
                ->get();

        return view('index', ['blogs' => $blogs,'products' => $product]);  
    } 
   
}
