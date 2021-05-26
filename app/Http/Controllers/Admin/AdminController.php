<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
       return view("Pages.home-page");
    }
    
    public function toPost(){
        return view("Pages.post-page");
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    //    public function toqanda(){
    //     return view("Pages.q&a-page");
    // }
     
}
