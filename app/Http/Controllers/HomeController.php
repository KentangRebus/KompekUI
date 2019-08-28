<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Announcement::orderBy('announcement_id', 'DESC')->take(3)->get();

        return view('home')->with("data", $data);
    }
}
