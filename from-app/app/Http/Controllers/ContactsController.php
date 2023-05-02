<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function index()
    {
        return view('contact.index');
    }


    public function post(ContactRequest $request)
    {

        $input = $request->all();
        $request->session()->put('form_input', $input);
        return redirect()->route('confirm');
    }


    public function confirm(Request $request)
    {

        $input = $request->session()->get('form_input');
        return view('contact.confirm', ['input' => $input]);

    }


    public function send(Request $request)
    {
        $input = $request->session()->get('form_input');

        
        if($request->has('back')){
            return redirect()->route('index')->withInput($input);
        }
        
		return redirect()->route('complete');
    }


    
    public function complete()
    {
        return view('contact.complete');
    }
}
