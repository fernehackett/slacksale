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
        if (empty($user_channel)) {
            return true;
        }
        $data = json_decode($user_channel->data, true);
        $slackHelper = new SlackHelper();
        if ($this->type == self::TYPE_NEW_ORDER) {
            $order = $this->data_order;
            if ($this->shop->format_message) {
                $format_message = $this->shop->format_message;
            } else {
                $format_message = "New Order {order_name}!\n{line_items}\n{total_price}\n{payment_method}\n{link}";
            }
            $format_message = str_replace('{order_name}', $order->name, $format_message);
            $line_item = '';
            if ($order->line_items) {
                foreach ($order->line_items as $item) {
                    if ($item->product_exists) {
                        $line_item .= $item->name.' '.$item->price."\n";
                    }
                }
            }
            $format_message = str_replace('{line_items}', trim($line_item), $format_message);
            $format_message = str_replace('{total_price}', $order->total_price, $format_message);
            $format_message = str_replace('{payment_method}', $order->processing_method, $format_message);
            $message = str_replace('{link}', 'https://'.$this->shop->getDomain()->toNative().'/admin/orders/'.$order->id, $format_message);
        }
        if ($this->type == self::TYPE_WELCOME) {
            $message = trans('Hello! now you will receive notify when have new order');
        }
        $slackHelper->sendNoti($data['incoming_webhook']['url'], $message);
    }
}
