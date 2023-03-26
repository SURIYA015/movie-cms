<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // dd('hii');
        $this->data = $data;
        // dd($this->data);
        // dd($data->email);
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        // dd('hii');
        return $this->from($this->data->email, $this->data->name)->replyTo($this->data->email, $this->data->name)->subject('Inquiry From Website')->markdown('emails.contact')->with([
            'data' => $this->data,
        ]);
    }
}
