<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //tambahkan function bernama index pada class RouteController
    public function index() {
        return "This is from Controller";
    }

    //tambahkan function bernama profile pada class RouteController
    public function profile($profileId) {
        return "This is Profile from Controller, profile id: ".$profileId;
    }

}
