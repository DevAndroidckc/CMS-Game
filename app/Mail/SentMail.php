<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SentMail extends Mailable
{
    public $test;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($test)
    {
        $this->test = $test;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.test')
        ->text('mail.test_plain')
        ->with([
                'gia_tri_1'=>1,
                'gia_tri_2'=>100
            ])
        ->attach(public_path('/images').'/test.jpg'[
            'as'=>'test.jpg',
            'mime'=>'image/jpeg',
            ]);
    }
}
