<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }

    public function users()
    {
        $users = User::all();
        return view('pages.dashboard.users', compact('users'));
    }

    public function volunteers()
    {
        return view('pages.dashboard.volunteers');
    }

    public function donations()
    {
        return view('pages.dashboard.donations');
    }
    public function galleries()
    {
        return view('pages.dashboard.galleries');
    }
    public function blogs()
    {
        return view('pages.dashboard.blogs');
    }
}
