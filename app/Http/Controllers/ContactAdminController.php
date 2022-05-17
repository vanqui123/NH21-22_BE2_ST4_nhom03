<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactAdminController extends Controller
{
    public function show(){
        $blog = Contact::All();
        return view('admin/contactadmin',['data'=>$blog]);
    }
}
