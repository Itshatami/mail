<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        // Mail::send(new TestMail());
        $user = User::find(1);
        Mail::to($user->email)->send(new TestMail($user));

        return view('welcome');
    }


    //     public function activate($id)
    //     {
    //         $mymodel = MyModel::find($id);

    //         $contact = Contact::where('mymodel_id', $mymodel->id)->first();
    //         Mail::to($contact->email)->send(new MyMail($contact));
    //     }
}
