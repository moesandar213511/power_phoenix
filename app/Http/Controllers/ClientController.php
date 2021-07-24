<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomClass\ServiceData;
use App\CustomClass\BlogData;
use App\CustomClass\TeamData;
use App\Service;
use App\Blog;
use App\Team;
use App\Contact;
use App\Office;
use App\Client;
use Session;

class ClientController extends Controller
{
    function index(){
        $client = Client::all();
    	return view('user.index',compact('client'))->with([
            'url' => 'home'
        ]);
    }
    function about(){
        $officeOne = Office::findOrFail(1);
        $officeTwo = Office::findOrFail(2);
        $officeThree = Office::findOrFail(3);
        $team = Team::all();
    	return view('user.about',compact('team','officeOne','officeTwo','officeThree'))->with([
            'url' => 'about'
        ]);
    }
    function view_team($id){
        $obj = new TeamData($id);
        return json_encode($obj->getSingleTeamData());
    }
    function service(){
        $service = Service::all();
    	return view('user.service',compact('service'))->with([
            'url' => 'service'
        ]);
    }
    function blog(){
        $blog = Blog::orderBy('id','desc')->paginate(5);
    	return view('user.blog',compact('blog'))->with([
            'url' => 'blog'
        ]);
    }
    function contact(){
    	return view('user.contact')->with([
            'url' => 'contact'
        ]);
    }
    function create_contact(Request $request){
        Session::flash('success','Insert Form Successfully');
        Contact::create([
            'name' => $request->get('name'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email')
        ]);
        return redirect('/contact');
    }
    function blogDetail($id){
        $blog_obj = new BlogData($id);
        $blog_detail = $blog_obj->getSingleBlogData();
    	return view('user.blog_detail',compact('blog_detail'))->with([
            'url' => 'blog'
        ]
        );
    }
    function serviceDetail($id){
      $service_obj = new ServiceData($id);
      $service_detail = $service_obj->getSingleServiceData();
      return view('user.service_detail')->with([
          'service_detail'=>$service_detail,
          'url' => 'service'
        ]);
    }

}
