<?php
/**
 * Created by PhpStorm.
 * User: Parham
 * Date: 7/23/2018
 * Time: 12:44 PM
 */

namespace App\Http\Controllers;


use Illuminate\View\View;

class ManagerController
{

    public function mainManagerPage(){
        return View('managerViews/managerTemplate');
    }
}