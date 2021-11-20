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
    const TYPE_WELCOME = 'welcome';
    const TYPE_NEW_ORDER = 'new_order';
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $shop;
    protected $type;
    protected $data_order;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($shop, $type, $data_order = [])
    {
        $this->shop = $shop;
        $this->type = $type;
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
        if ($this->type == self::TYPE_NEW_ORDER) {
            $order = $this->data_order;
            $message = 'New order: '.$order->id;
        }
        if ($this->type == self::TYPE_WELCOME) {
            $message = trans('Hello! now you will receive notify when have new order');
        }
        $slackHelper->sendNoti($data['incoming_webhook']['url'], $message);
    }
}
