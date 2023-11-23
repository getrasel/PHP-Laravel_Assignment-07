<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id = 5){
        $name = "Donal Trump";
        $age = "75";
        $data = [
            "ID"=> $id,
            "Name"=> $name,
            "Age"=> $age,
        ];
        return response($data,200);
    }



    public function cookie(){
        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 60;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        
        $cookie = cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
        
        $data = [
        'message' => 'Success',
        'name' => $name,
        'Minute'=> $minutes,
        'path'=> $path,
        'Domain'=> $domain,
        'Secure'=> $secure,
        ];
        
        $status = 200;
        
        return response($data, $status)->cookie($cookie);
        }



}
