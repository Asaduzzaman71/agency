<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Order;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    public function index($lang=null){
        APP::setlocale($lang);
        $companies = Company::all();
        return view('home')->with(['companies' => $companies]);
    }
    public function about(){
        return view('user.about');
    }
    public function contact(){
        return view('user.contact');
    }
    public function orderDetails(Request $request,$tracking_id){
        APP::setlocale($request->lang);
        $order = Order::with('routes', 'company')->where('tracking_id', $tracking_id)->first();
        return view('user.order_details',compact('order'));
    }
}
