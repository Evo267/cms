<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\Dashboard;

class AdminController extends Controller
{
    public function index(){

        $dashboard = new Dashboard();
        $dashboard->fillData();

        return view('manage.app')->with('dashboard', $dashboard);
    }
}


use App\Page;

class Dashboard
{
    public $nOfPages;

    public function fillData(){
        $this->nOfPages = Page::all()->count();
    }
}