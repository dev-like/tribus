<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class WebSiteController extends Controller
{

    public function home()
    {

      return view('pages.index');
    }
}
