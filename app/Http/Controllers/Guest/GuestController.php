<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;


class GuestController extends Controller
{
    public function index(){
        $projects = Project::All();

        return view('guest.pages.home', compact('projects'));
    }
}