<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\user’s;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;




class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testAddData()
    {
        $c=new RegisterController();
        $fillable =new Request();
        $fillable->full_name="eeee";
        $fillable->user_name="asdfasdfaefdsa";
        $fillable->email="ya023560@gmail.come";
        $fillable->password="123456qwerty!";
        $fillable->confirm_password="123456qwerty!";
        $fillable->birthdate="2020/5/5";
        $fillable->phone="123244";
        $fillable->address="eeeeeeee";
        $fillable->user_image=null;

        $r= $c->checkdata($fillable);
        $this->assertTrue($r, "User already exists"); // assert that the response redirects to the home page// assert that the user was saved to the database


    }
}
