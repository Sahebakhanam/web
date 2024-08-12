<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contactPage()
    {
       
        return view('mainpages.contact');
    }
    public function createcontact(Request $request)
    {

        $request->validate([

            'contact_name' => 'required',
            'contact_company' => '',
            'contact_email' => 'required',
            'contact_phone' => '',
            'contact_service' => '',
            'contact_budget' => '',
            'contact_Description' => '', 
        ]);

        $contact = new contact();
        $contact->id = (string) \Illuminate\Support\Str::uuid();
        $contact->fill($request->all());
        $contact->save();



        return redirect()->route('contactPage')->with('success', 'We will get back to you');
    }
public function showcontact()
{
    $contacts = Contact::all();
    return view('dashboard.contactinfo', ['contacts' => $contacts]);
}
// public function deleteContact($email)
// {   
//     $contact = Contact::find($email);
//     dd('found');
//     return redirect()->route('showcontact')->with('success', 'Contact deleted successfully.');
//     if (!$contact) {
//         return redirect()->route('showcontact')->with('error', 'Contact not found.');
//     }
//     else{
//     dd('found');
//     $contact->delete();
//     return redirect()->route('showcontact')->with('success', 'Contact deleted successfully.');
//     }
// }
}

