<?php

namespace App\Http\Controllers;


use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:subscribers'
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();
        if (isset($subscriber)){
            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        }else{
            toastr()->error('Data has been saved successfully!');
            return redirect()->back();
        }

    }
}
