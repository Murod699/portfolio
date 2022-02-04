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
            'phone' => 'required|min:9|max:9',
            'message' => 'required|max:2048'
        ]);

        Feedback::create([
            'name' => $request->post('name'),
            'phone' => $request->post('phone'),
            'message' => $request->post('message')
        ]);

        return redirect()->route('index')->with('success', 'Xabaringgiz uchun rahmat tez orada javob qaytaramiz!');
    }

    
}
