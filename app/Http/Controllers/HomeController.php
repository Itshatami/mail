<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        // Mail::send(new TestMail());
        Mail::to('itshatami@gmail.com')->send(new TestMail());

        return view('welcome');
    }


    //     public function activate($id)
    //     {
    //         $mymodel = MyModel::find($id);

    //         $contact = Contact::where('mymodel_id', $mymodel->id)->first();
    //         Mail::to($contact->email)->send(new MyMail($contact));
    //     }
}
