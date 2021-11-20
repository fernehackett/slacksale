<?php

namespace App\Jobs;

use App\Helpers\SlackHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendNotiSlack implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $shop;
    protected $data_order;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($shop, $data_order)
    {
        $this->shop = $shop;
        $this->data_order = $data_order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user_channel = $this->shop->channelSlack;
        $data = json_decode($user_channel->data, true);
        $slackHelper = new SlackHelper();
        $order = $this->data_order;
        $message = 'New order: '.$order->id.;
        $slackHelper->sendNoti($data['incoming_webhook']['url'], $message);
    }
}
