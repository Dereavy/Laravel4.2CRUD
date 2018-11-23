<?php

class ContactController extends BaseController {
    /** 
     * Functions for these routes: 
     *     - Route::post('contact/add', 'ContactController@addPost');
     *     - Route::get('contact/add', 'ContactController@addGet');
     *     - Route::get('contact/', 'ContactController@get');
     *     - Route::post('contact/edit', 'ContactController@editPost');
     *     - Route::get('contact/edit', 'ContactController@editGet');
     *     - Route::post('contact/remove', 'ContactController@delete'); 
     */


    public function addPost()
	{
        $contactInfo = Input::all();

        $contact = new Contact;
            $contact->firstname = $contactInfo['firstname'];
            $contact->lastname = $contactInfo['lastname'];
            $contact->subject = $contactInfo['subject'];
            $contact->message = $contactInfo['message'];
        $contact->save();
		return View::make('templates.layout.bienvenue')->with('formData', $contactInfo);
    }

    public function addGet()
	{
		return View::make('templates.layout.contact');
    }

    public function addAF(){
        $contact = new Contact;
            $contact->firstname = "Anonymous".rand();
            $contact->lastname = "Sirname".rand();
            $contact->subject = "Subject".rand();
            $contact->message = "Message".rand();
        $contact->save();

        $contacts = Contact::all();
        return View::make('templates.layout.contactlist')->with('contacts', $contacts);
    }

    public function get()
	{
        $contacts = Contact::all();
        return View::make('templates.layout.contactlist')->with('contacts', $contacts);
    }

    public function editPost($id)
	{

        $editData = Input::all();

        $contact = Contact::find($id);
            $contact->firstname = $editData["firstname"];
            $contact->lastname = $editData["lastname"];
            $contact->subject = $editData["subject"];
            $contact->message = $editData["message"];
        $contact->save();

        // Diriger vers la page Edition de commentaire
        $contacts = Contact::all();
        return View::make('templates.layout.contactlist')->with('contacts', $contacts);
    }

    public function editGet($id)
	{
        $contact = Contact::find($id);
        //return var_dump($contact);
        return View::make('templates.layout.contactedit')->with('contact', $contact);
    }

    public function delete($id)
	{
        $contact = Contact::find($id);
        $contact->delete();
        $contacts = Contact::all();
        return View::make('templates.layout.contactlist')->with('contacts', $contacts);
    }
}