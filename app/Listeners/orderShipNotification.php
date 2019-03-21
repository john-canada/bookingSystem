<?php

namespace App\Listeners;
use Mail;
use App\Events\ordership;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class orderShipNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ordership  $event
     * @return void
     */
    public function handle(ordership $event)
    {
        $data = array('name'=>$event->user->name, 'email'=>$event->user->email,'body'=>'This is body info');
        Mail::send('mails.ordership', $data , function($message)use($data){
            $message->to($data['email'])
                    ->subject('test ordership');
            $message->from('canadajun1972@gmail.com');        
        });
    }
}
