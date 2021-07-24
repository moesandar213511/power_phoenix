<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Blog;
use App\Service;
use App\Contact;
use App\Team;
use App\Office;
use App\Client;
use App\CustomClass\BlogData;
use App\CustomClass\ServiceData;
use App\CustomClass\TeamData;
use App\CustomClass\ContactData;
use App\CustomClass\ClientData;


class BlogController extends Controller
{
    // <=========For Blog==========>
    function show_blog(){
        return view('site_admin.blog')->with([
            'url' => 'blog'
        ]);
    }
    function view_blog(){
        $blogs = Blog::orderBy('id','desc')->get();
        $blog_datas=BlogData::getAllData($blogs);
        return json_encode($blog_datas);
    }

    function create_or_edit_admin_blog(Request $request){
        $title=$request->get('title');
        $detail=$request->get('detail');

        $file = $request->file('photo');
        $fileName =time()."_".$file->getClientOriginalName();
        $file->move(public_path().'/upload/blog',$fileName);
        Blog::create([
            'title'=> $title,
            'detail' => $detail,
            'photo' => $fileName
        ]);   
         return redirect('/admin/blog')->with('alert', 'Create Blog Successfully');
    }

    public function edit_blog($id)
    {       
       $obj=new BlogData($id);
       return json_encode($obj->getSingleBlogData());
    }

    public function update_blog(Request $request)
    {
       $update_blog=Blog::find($request->get('id'));
       $update_blog->title=$request->get('title');
       $update_blog->detail=$request->get('detail');

       if($request->hasFile('photo')){
            if(file_exists(public_path().'/upload/blog/'.$update_blog->photo)){
                unlink(public_path().'/upload/blog/'.$update_blog->photo);
            }
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/blog/'),$photo_name);

            $update_blog->photo=$photo_name;
       }
       $update_blog->update();

       return json_encode(true);
    
    }

    function delete_blog($id){
      $blog = Blog::find($id);
      $image_path=public_path().'/upload/blog/'.$blog->photo;
      if(file_exists($image_path)){
          unlink($image_path);
      }
      $blog->delete();
    }   


    // <=========For Service========>
    function service(){
        return view('site_admin.service')->with([
            'url'=>'service'
        ]);
    }
    function view_service(){
        $service = Service::orderBy('id','desc')->get();
        $service_data = ServiceData::getAllData($service);
        echo json_encode($service_data);

    }
    function create_service(Request $request){
        $title=$request->get('title');
        $detail=$request->get('detail');
        $file = $request->file('photo');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/upload/service',$filename);
        
        Service::create([
            'photo' => $filename,
            'title'=> $title,
            'detail' => $detail
        ]);
        return redirect('/admin/service')->with('alert', 'Create Data Successfully');
    }
    function edit_service($id){
       $obj = new ServiceData($id);
       return json_encode($obj->getSingleServiceData());
    }
    function update_service(Request $request){
       $update_service=Service::find($request->get('id'));
       $update_service->title=$request->get('title');
       $update_service->detail=$request->get('detail');

       if($request->hasFile('photo')){
            if(file_exists(public_path().'/upload/service/'.$update_service->photo)){
                unlink(public_path().'/upload/service/'.$update_service->photo);
            }
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/service/'),$photo_name);

            $update_service->photo=$photo_name;
       }
       $update_service->update();

       return json_encode(true);
    }

    function delete_service($id){
        $service = Service::find($id);
        $image_path=public_path().'/upload/service/'.$service->photo;
        if(file_exists($image_path)){
          unlink($image_path);
        }
        $service->delete();
    }  


    // <=============For Contact=========>
    function contact(){  
        return view('site_admin.contact')->with([
            'url'=>'contact',
        ]);
    }
    function view_contact(){
        $contacts=Contact::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($contacts as $data){
            $contact_data=new ContactData($data->id);
            array_push($arr,$contact_data->getContactData());
        }
         return json_encode($arr);
    }
    function delete_contact($id){
       Contact::find($id)->delete();
        return redirect('/admin/contact');
    }


   // <============For Team============>
    function team(){
        return view('site_admin.team')->with([
            'url' => 'team'
        ]);
    }
    function view_team(){
        $team = Team::orderBy('id','desc')->get();
        $team_data = TeamData::getAllData($team);
        return json_encode($team_data);
    }
    function create_team(Request $request){
        $file = $request->file('photo');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/upload/team/',$filename);
        Team::create([
            'name' => $request->get('name'),
            'photo' => $filename,
            'position' => $request->get('position'),
            'detail' => $request->get('detail'),
            'fb_link' => $request->get('fb_link')
        ]);
        return redirect('admin/team');
    }
    function edit_team($id){
        $obj = new TeamData($id);
        return json_encode($obj->getSingleTeamData());
    }
    function update_team(Request $request){
        $update_team=Team::find($request->get('id'));
       $update_team->name=$request->get('name');
       $update_team->position=$request->get('position');
       $update_team->detail=$request->get('detail');
       $update_team->fb_link=$request->get('fb_link');

       if($request->hasFile('photo')){
            if(file_exists(public_path().'/upload/team/'.$update_team->photo)){
                unlink(public_path().'/upload/team/'.$update_team->photo);
            }
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/team/'),$photo_name);

            $update_team->photo=$photo_name;
       }
       $update_team->update();

       return json_encode(true);
    }
    function delete_team($id){
        Team::find($id)->delete();
        return redirect('admin/team');
    }


    // <=============For Office==============>
    function office(){
        $officeOne = Office::findOrFail(1);
        $officeTwo = Office::findOrFail(2);
        $officeThree = Office::findOrFail(3);
       return view('site_admin.office',compact('officeOne','officeTwo','officeThree'))->with([
            'url' => 'office'
       ]); 
    }
    function update_office(Request $request){
        if($request->has('name')){
           Office::find($request->get('id'))->update([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'phone' => $request->get('phone')    
            ]); 
        }else{
           Office::find($request->get('id'))->update([
            'address' => $request->get('address'),
            'phone' => $request->get('phone')    
            ]); 
        }
        
        return redirect('/admin/office');
    }


    // <============For Client=========>
    function client(){
        return view('site_admin.client')->with([
            'url' => 'client',
        ]);
    }
    function view_client(){
        $client = Client::orderBy('id','desc')->get();
        $client_data = ClientData::getAllData($client
        );
        return json_encode($client_data);
    }
    function create_client(Request $request){
        $file = $request->file('photo');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/upload/client/',$filename);
        Client::create([
            'photo' => $filename,
            'link' => $request->get('link')
        ]);
        return redirect('admin/client');
    }
    function edit_client($id){
        $obj = new ClientData($id);
        return json_encode($obj->getSingleClientData());
    }
    function update_client(Request $request){
       $update_client=Client::find($request->get('id'));
       $update_client->link=$request->get('link');

       if($request->hasFile('photo')){
            if(file_exists(public_path().'/upload/client/'.$update_client->photo)){
                unlink(public_path().'/upload/client/'.$update_client->photo);
            }
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/client/'),$photo_name);

            $update_client->photo=$photo_name;
       }
       $update_client->update();

       return json_encode(true);
    }

    function delete_client($id){
        Client::find($id)->delete();
        return back();
    }

    //--------------------api---------------//
    function apiCreateBlog(Request $request){
        $title = $request->get('title');
        $detail = $request->get('detail');

        $file = $request->file('photo');
        $fileName = uniqid() . "_" . $file->getClientOriginalName();
        $file->move(public_path() . '/upload/blog', $fileName);
        Blog::create([
            'title' => $title,
            'detail' => $detail,
            'photo' => $fileName
        ]);   
        return response()->json(['message'=>true]);
    }

    function apiShowBlogData(){
        $blogs=Blog::all();
        return response()->json(['data'=>$blogs]);
    }

    function apiEditBlog($id){
        $edit=Blog::find($id);
        return response()->json(['data'=>$edit]);
    }

    function apiUpdateBlog(Request $request,$id){
        $update_blog = Blog::find($id);
        $update_blog->title = $request->get('title');
        $update_blog->detail = $request->get('detail');
        if ($request->hasFile('photo')) {
            if (file_exists(public_path() . '/upload/blog/' . $update_blog->photo)) {
                unlink(public_path() . '/upload/blog/' . $update_blog->photo);
            }
            $photo = $request->file('photo');
            $photo_name = uniqid() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('upload/blog/'), $photo_name);

            $update_blog->photo = $photo_name;
        }
        $update_blog->update();

        return response()->json(['message'=>true]);
    }

    function apiDeleteBlog($id){
        $blog = Blog::find($id);
        $image_path = public_path() . '/upload/blog/' . $blog->photo;
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $blog->delete();

        return response()->json(['message'=>true]); 
    }

}
