<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return Auth::user()->role == 'admin' ? view('pages.dashboard.admin')  : view('pages.home');
    }
}
