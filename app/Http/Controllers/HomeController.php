<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        dd($_SERVER);
//        $response = $user->api()->rest('GET', '/admin/webhooks.json')['body'];
        return  view('welcome');
    }
    public function connectSlack() {
        $user = Auth::user();
        dd($user);
//        $response = $user->api()->rest('GET', '/admin/webhooks.json')['body'];
        return  view('welcome');
    }
}
