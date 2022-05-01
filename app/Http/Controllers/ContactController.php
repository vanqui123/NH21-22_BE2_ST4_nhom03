<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function addToContact(Request $request){
        $data = array(
            'name' =>$request->name,
            'email' =>$request->email,
            'message' =>$request->message,
        );
        Contact::insert($data);
        session()->flash('success', 'Product is Added to Message Successfully !');

       
    }
}
