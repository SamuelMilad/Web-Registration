<?php

namespace App\Http\Controllers;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\user’s;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class RegisterController extends Controller
{

    function checkdata(Request $request){
        $existingUser = user’s::where('user_name', $request->user_name)->first();

        if ($existingUser) {
            return true;
        }
        return false;
    }
    function addData(Request $request){

        if($this->checkdata($request)){
            return redirect('/')
            ->withErrors(['user_name' => 'User name already exists'])
            ->withInput();
        }
        // // Check if user already exists
        // $existingUser = user’s::where('user_name', $request->user_name)->first();

        // if ($existingUser) {

        // }

        $user = new user’s;
        $user->full_name = $request->full_name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->confirm_password = $request->confirm_password;
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->user_image = $request->user_image;
        // // Process and save image as string
        // $image = $request->file('public.user_images');
        // $imageData = file_get_contents($image);
        // $encodedImage = base64_encode($imageData);
        // $user->user_image = $encodedImage;
        Mail::to('20200641@stud.fci-cu.edu.eg')->send(new TestMail($request->user_name));
        $user->save();


        return redirect('/');
    }





}




