<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $contact = new Contact();
        $data = $request->all() ;
        $data['mail'] = strtolower($request->mail);
        $user->fill( $data );
        $user->save();
    }


    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        Session::flash('alert-success', 'Removed successfully.');
        return Redirect::back();
    }
}
