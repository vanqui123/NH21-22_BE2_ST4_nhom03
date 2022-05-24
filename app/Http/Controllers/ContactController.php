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
  public function addToContact(Request $request)
  {
    $data = array(
      'name' => $request->name,
      'email' => $request->email,
      'message' => $request->message,
      'created_at' => date('Y-m-d H:i:s'),
    );
    if ($request->name != null ||$request->email !=null|| $request->message !=null) {
      $contact =   Contact::insert($data);
      if ($contact) {
        Alert::success('Success', 'Post contact Success!!');
      }
    } else {
      Alert::error('Error', 'Lỗi!! Vui lòng nhập đầy đủ các thông tin');
    }


    return redirect()->back();
  }
}
