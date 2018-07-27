<?php
/**
 * Created by PhpStorm.
 * User: Parham
 * Date: 7/23/2018
 * Time: 12:44 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController
{

    /**
     * generate first page that show products for customer
     */
    public function productsMainPage(Request $request){

        $cat = $request->input('category');
        if($cat == null){
            // TODO get all products from database
            return View('customerViews/products');
        }else{
            // TODO get products from database that are in inserted category
            return View('customerViews/products');
        }

    }


}