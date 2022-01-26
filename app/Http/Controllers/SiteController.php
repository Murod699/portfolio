<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feedback;

class SiteController extends Controller
{
    public function index(){
        
        return view('index');
    }
    

    public function feedbackStore(Request $request){

        $request -> validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:6|max:128',
            'message' => 'required|max:2048'
        ]);

        Feedback::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'subject' => $request->post('subject'),
            'message' => $request->post('message')
        ]);

        return redirect()->route('index')->with('success', 'Xabaringgiz uchun rahmat tez orada javob qaytaramiz!');
    }

    
}
