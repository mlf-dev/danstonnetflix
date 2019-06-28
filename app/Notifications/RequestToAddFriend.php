<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class RequestToAddFriend extends Notification
{
    use Queueable;

    private $pseudo_user_request;

    private $id_user1;

    private $id_user2;

    private $description;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(String $user_pseudo, $id_user1, $id_user2)
    {
        //
        $this->pseudo_user_request = $user_pseudo;
        $this->description = ucfirst($this->pseudo_user_request).' souhaite vous ajouter à son réseau !';
        $this->id_user1 = $id_user1;
        $this->id_user2 = $id_user2;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
            'id_user1'=>$this->id_user1,
            'id_user2'=>$this->id_user2,
            'description'=>$this->description
        ];
    }

    public function toDatabase($notifiable){
        return [
            'id_user1'=>$this->id_user1,
            'id_user2'=>$this->id_user2,
            'description'=>$this->description
        ];
    }
}
