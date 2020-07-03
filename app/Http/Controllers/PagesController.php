<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactdetail;
use App\Message;
use App\Social;

class PagesController extends Controller
{
    public function index() {

        $contact = Contactdetail::all();
        return view('home', compact('contact'));
    }

    public function about() {
        return view('about');
    }

    public function diensten() {
        return view('diensten');
    }

    public function projecten() {
        return view('projecten');
    }

    public function contact() {
        $contactdetail = Contactdetail::all();
        $socials = Social::all();
        $sended = false;

        return view('contact', compact('contactdetail', 'sended', 'socials'));
    }

    public function message() {

        $message = new Message;
        $message->name = request("name");
        $message->email = request("email");
        $message->message = request("message");
        $message->save();

        $contactdetail = Contactdetail::all();
        $socials = Social::all();
        $sended = true;

        return view('contact', compact('contactdetail', 'sended', 'socials'));
    }
}
