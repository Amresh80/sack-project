<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {

    	$data['home'] = DB::select('select * from pages where slug = ?', ['home']);
    	$data['contactDetails'] = DB::select('select * from contact_us');
    	return view('home')->with(['home' => $data['home'],'contactDetails' =>$data['contactDetails']]);
    }

    public function services() {

    	$data['page'] = DB::select('select * from pages where slug = ?', ['services']);
    	
    	
    	$data['services_list'] = DB::select('select * from services');
    	$data['testimonials'] = DB::select('select * from testimonials');
    	$data['contactDetails'] = DB::select('select * from contact_us');
    	//return view('services');
    	return view('services')->with(['page' => $data['page'],'services_list' =>$data['services_list'],'testimonials' => $data['testimonials'],'contactDetails' =>$data['contactDetails']]);
    }

    public function contact() {

    	$data['contactDetails'] = DB::select('select * from contact_us');
    	
    	
    	return view('contact')->with(['contactDetails' => $data['contactDetails']]);
    }

    public function career() {

    	
    	$data['careerDetails'] = array();
    	$data['contactDetails'] = DB::select('select * from contact_us');
    	
    	return view('career')->with(['careerDetails' => $data['careerDetails'],'contactDetails' =>$data['contactDetails']]);
    }

    public function about() {

    	$data['contactDetails'] = DB::select('select * from contact_us');
    	return view('about')->with(['contactDetails' =>$data['contactDetails']]);

    }
    public function portfolio() {

    	$data['contactDetails'] = DB::select('select * from contact_us');
    	return view('portfolio')->with(['contactDetails' =>$data['contactDetails']]);


    }
}
