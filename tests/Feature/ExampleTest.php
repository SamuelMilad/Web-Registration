<?php

namespace Tests\Feature;

use App\Models\user’s;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;

class ExampleTest extends TestCase
{
   
    public function testAddData()
    {
         $c=new RegisterController();
         $fillable =new Request();
         $fillable->full_name="eeeeeeee";
         $fillable->user_name="asdfasdfsrefdsfsfdsdfaefdsa";
         $fillable->email="ya023560@gmail.come";
         $fillable->password="123456qwerty!";
         $fillable->confirm_password="123456qwerty!";
         $fillable->birthdate="2020/5/5";
         $fillable->phone="eeeeeeee";
         $fillable->address="eeeeeeee";
         $fillable->user_image=null;

       $r= $c->addData($fillable);
       $response = $this->post("$r"); // make a POST request to the controller action// assert that the response redirects to the home page// assert that the user was saved to the database

        
    }

  
}

