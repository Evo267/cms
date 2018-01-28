<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\Dashboard;

use App\Page;
use App\PageStatus;

class AdminController extends Controller
{

    protected $activePage;

    public function index(){

        $this->activePage = 'index';

        $dashboard = new Dashboard();
        $dashboard->fillData();

        return view('manage.app')
            ->with('dashboard', $dashboard)
            ->with('activePage', $this->activePage);
    }

    public function pages(){

        $this->activePage = 'pages';

        $pages = Page::all();

        return view('manage.pages.pages')
            ->with('pages', $pages)
            ->with('activePage', $this->activePage);
    }

    public function pagesCreate(){
        $this->activePage = 'pages';

        $status = PageStatus::all();

        return view('manage.pages.new')
            ->with('activePage', $this->activePage);
    }

    public function storePage(Request $request){

    }
}


class Dashboard
{
    public $nOfPages;

    public function fillData(){
        $this->nOfPages = Page::all()->count();
    }
}