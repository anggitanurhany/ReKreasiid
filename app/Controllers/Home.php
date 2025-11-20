<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function gita(): string
    {
        return view('about');
    }
    
    public function saya(): string
    {
        return view('products');
    }

     public function aja(): string
    {
        return view('news');
    }
    
    public function sendiri(): string
    {
        return view('kontak');
    }
}