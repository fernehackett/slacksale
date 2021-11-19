<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $user = Auth::user();
//        $response = $user->api()->rest('GET', '/admin/webhooks.json')['body'];
        return  view('welcome');
    }
}
