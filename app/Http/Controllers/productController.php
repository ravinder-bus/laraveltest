<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class productController extends Controller
{
    public function productList(Request $request)
    {
        	try {
                $cart_count=(!empty($request->session()->get('cart_items')))?count($request->session()->get('cart_items')):0;
                
            		$productList=product::paginate(2);
                    
            		return view('product',['productlist'=> $productList,'cart_count'=>$cart_count]);
        } catch (Throwable $e) {
            report($e);

            return false;
        }


    }
    public function addtocart(Request $request)
    {
            try {
                    
                    $cart_items=$_POST["items"];
                    $request->session()->put('cart_items', $cart_items);

        } catch (Throwable $e) {
            report($e);

            return false;
        }


    }

    public function cart(Request $request)
    {
        
        $cart=$request->session()->get('cart_items');
        $product=[];
         $product_desc_list=[];
        if(!empty($cart))
        {
        foreach($cart as $key=>$cartitem)
        {
            $indexes = array_keys($cart, $cartitem); //array(0, 1)
            $count=count($indexes);

            $product[$cartitem]['count']=$count;
            //$product[$cartitem] ['id']=$cartitem;
        }
       
        
        foreach($product as $key=>$val)
        {
            $productList=product::get()->where('id','=',$key)->toArray();
            foreach($productList as $key1=>$prd)

            {
                $product_desc_list[$key]['id']=$prd['id'];
                $product_desc_list[$key]['name']=$prd['name'];  
                $product_desc_list[$key]['image']=$prd['image']; 
                $product_desc_list[$key]['description']=$prd['description']; 
                 $product_desc_list[$key]['price']=$prd['price']; 
                 $product_desc_list[$key]['count']=$val['count']; 

            }
            
            // $product_desc_list[]['image']=$productList['image'];
            // $product_desc_list[]['description']=$productList['description'];
            

        }
    }
       
        return view('cart',['productlist'=> $product_desc_list]);
        

    }

    public function description($id)
    {
          
        try {
                    
                    $productList=product::where('id','=',$id)->get()->toArray(); 

                    return view('product_description',['product_description'=> $productList]);


        } catch (Throwable $e) {
            report($e);

            return false;
        }
    }

    public function cartRemove(Request $request,$id)
    {
        $cart=$request->session()->get('cart_items');
        if(!empty($cart))
        {
            if (in_array($id, $cart)) 
                {
                    unset($cart[array_search($id,$cart)]);
                }
        }
       $request->session()->put('cart_items', $cart);

        return redirect()->route('cart');
    }
}
