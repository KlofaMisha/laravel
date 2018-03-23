<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $name;
    protected $email;
    protected $phone;
    protected $date;
    protected $sel;
    protected $msg;
    protected $cert;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $date, $sel, $msg, $cert, $id)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->date = $date;
        $this->sel = $sel;
        $this->msg = $msg;
        $this->cert = $cert;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.mailContact')
        ->with([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'date'=>$this->date,
            'sel'=>$this->sel,
            'msg'=>$this->msg,
            'cert'=>$this->cert,
            'id'=>$this->id,
           ])
        ->subject('Замовлення з сайту');
    }
}
