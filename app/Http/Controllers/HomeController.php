<?php


namespace App\Http\Controllers;


use App\Helpers\SlackHelper;
use App\Jobs\SendNotiSlack;
use App\Models\User;
use App\Models\UserChannel;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        return  view('welcome', [
            'user' => $user
        ]);
    }
    public function saveSeting(Request $request) {
        $user = Auth::user();
        return  view('welcome', [
            'user' => $user
        ]);
    }
    public function connectSlack(Request $request) {
        try {
            $slackHelper = new SlackHelper();
            $user_id = JWT::decode($request->token, config('app.jwt_key'),['HS256'])->id;
            $user = User::find($user_id);
            $url = $slackHelper->getAuthUrl($user);
            return redirect($url);
        } catch (\Exception $exception) {
            return abort(404);
        }
    }
    public function disconnectSlack(Request $request) {
        try {
            $user_id = JWT::decode($request->token, config('app.jwt_key'),['HS256'])->id;
            $user = User::find($user_id);
            UserChannel::where('user_id', $user_id)->delete();
            return redirect($user->getShopifyAppUrl());
        } catch (\Exception $exception) {
            return abort(404);
        }
    }
    public function callbackSlack(Request $request) {
        try {
            $slackHelper = new SlackHelper();
            $user_id = JWT::decode($request->token, config('app.jwt_key'),['HS256'])->id;
            $user = User::find($user_id);
            if (!$user) {
                return abort(404);
            }
            $url_shopify_app = $user->getShopifyAppUrl();
            $AcessToken = $slackHelper->getAcessToken($user, $request->code);
            $data = $AcessToken->json();
            if (empty($data['access_token'])) {
                return  redirect($url_shopify_app);
            }
            UserChannel::updateOrCreate([
                'user_id' => $user_id,
                'type' => UserChannel::TYPE_SLACK,
            ],[
                'user_id' => $user_id,
                'type' => UserChannel::TYPE_SLACK,
                'data' => $AcessToken->body(),
                'status' => UserChannel::STATUS_ACTIVE,
            ]);
            dispatch(new SendNotiSlack($user, SendNotiSlack::TYPE_WELCOME));
            return redirect($url_shopify_app);
        } catch (\Exception $exception) {
            return abort(404);
        }
    }
}
