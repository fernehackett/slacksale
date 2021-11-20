<?php


namespace App\Helpers;


use App\Models\User;
use Illuminate\Support\Facades\Http;

class SlackHelper
{
    public function getAuthUrl(User $user) {
        $auth_url = 'https://slack.com/oauth/authorize?';
        $data = [
            'client_id' => config('app.slack_app.client_id'),
            'scope' => 'incoming-webhook',
            'redirect_uri' => route('callbackSlack', ['token' => $user->getJWTtoken()]),
        ];
        return $auth_url.http_build_query($data);
    }
    public function getAcessToken($user, $code) {
        $response = Http::asForm()->post('https://slack.com/api/oauth.access', [
            'client_id' => config('app.slack_app.client_id'),
            'client_secret' => config('app.slack_app.client_secret'),
            'code' => trim($code),
            'redirect_uri' => route('callbackSlack', ['token' => $user->getJWTtoken()]),
        ]);
        return $response;
    }
    public function sendNoti($incoming_webhook_url, $message) {
        $response = Http::asJson()->post($incoming_webhook_url, ['text' => $message]);
    }

    public static function genConnectHtml($data) {

    }
}
