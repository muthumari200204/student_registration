<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of all contacts.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new contact.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created contact in the database.
     */    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect('contacts')->with('flash_message', 'Contact Addedd!');
    }

    /**
     * Display a specific contact's details.
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        // dd($contact); // Debugging step
        return view('contacts.show')->with('contact', $contact);
    }

    /**
     * Show the form for editing a specific contact.
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit')->with('contact', $contact);
    }

    /**
     * Remove a contact from the database.
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('flash_message', 'Contact Deleted!');
    }

    public function update($id, Request $request)
    {
        $contact = Contact::findOrFail($id);

        // Update with request data
        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('flash_message', 'Contact Updated!');
    }

}
