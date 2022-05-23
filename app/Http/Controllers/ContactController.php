<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;
use Alert;
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
      $contact =   Contact::insert($data);
      if($contact){
        Alert::success('Success', 'Voucher Success');
      }
      else{
        Alert::error('Error', 'Voucher Error');
      }
        return redirect()->back();

       
    }
}
