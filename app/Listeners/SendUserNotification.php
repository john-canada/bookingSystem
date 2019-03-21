<?php

namespace App\Listeners;
use Mail;
use App\Events\userRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserNotification
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
     * @param  userRegister  $event
     * @return void
     */
    public function handle(userRegister $event)
    {
        $data = array('name'=>$event->user->name,'email'=>$event->user->email,'body'=>'This is the body text');
        Mail::send('mails.emailnotification',$data,function($message)use($data){
            $message->to($data['email'])
                    ->subject('Notification');
            $message->from('canadajun1972@gmail.com');        
        });
    }
}
