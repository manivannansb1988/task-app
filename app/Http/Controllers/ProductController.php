<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
     
        /**
         * Write code on Method
         *
         * @return response()
         */
        public function index()
        {
            $products = Product::get();
      
            return view("products", compact("products"));
        }  
      
        /**
         * Write code on Method
         *
         * @return response()
         */
        public function show(Product $product, Request $request)
        {
            $intent = auth()->user()->createSetupIntent();
      
            return view("subscription", compact("product", "intent"));
        }
        /**
         * Write code on Method
         *
         * @return response()
         */
        public function subscription(Request $request)
        {
            $product = Product::find($request->product);
      
            $subscription = $request->user()->newSubscription($request->product, $product->stripe_plan)
                            ->create($request->token);
      
            return view("subscription_success");
        }
    }