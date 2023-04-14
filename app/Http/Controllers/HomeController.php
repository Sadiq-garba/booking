<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     

  

    public function edit($id)
    {   
        
        $user = User::find($id);
         return view('edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {     
          $this->validate($request, [
           
             'name'=>'required|min:3|string',
             'email'=>'required',
             'bio' =>'string|nullable',
             'profile_pic'=>'image|mimes:jpeg,png,jpg,gif|max:500',
             'phone'=>'string|min:10'
          ]);


          if($request->hasFile('profile_pic')){
            //get file name with extension
           $fileNameWithExt = $request->file('profile_pic')->getClientOriginalName();
           //get just filename
           $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    
           //get just extension
           $extension = $request->file('profile_pic')->getClientOriginalExtension();
           // file name to store
            $fileNameToStoreOne= $filename.'_'.time().'.'.$extension;
           //upload image
           $path = $request->file('profile_pic')->storeAs('public/banner_img', $fileNameToStoreOne);
           }else{
    
               $fileNameToStoreOne = 'noimage.jpeg';
           
            }

           
          $user = User::find($id);
          $user->name = $request->input('name');
          $user->email = $request->input('email');
          $user->phone = $request->input('phone');
          $user->date_of_birth = $request->input('date_of_birth');
          $user->bio= $request->input('bio');
          $user->profile_pic = $fileNameToStoreOne;

          $user->save();

          return back()->with('success', 'Your data has been saved successfully');


    }


}
