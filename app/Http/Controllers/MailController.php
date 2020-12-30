<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            // "name" => "Tu mejor",
            "title" => "Titulo de prueba",
            "body" => "Body de prueba",
        ];

        Mail::to("joel.edu.v@gmail.com")->send(new TestMail($details));
        return "ENVIADO";
    }
}
