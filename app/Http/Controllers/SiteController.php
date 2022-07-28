<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feedback;
use App\Models\Port;
use App\Services\SendTelegramService;
class SiteController extends Controller
{
    public function index(){
        $ports = Port::all();
        return view('index', compact('ports'));
    }
    

    public function feedbackStore(Request $request){

       $data = $request -> validate([
            'name' => 'required|min:3',
            'phone' => 'required|numeric|min:9|max:9',
            'message' => 'required|max:2048'
        ]);
        //Formatting

        $message = 'F.I.O: '.$data['name'].PHP_EOL;
        $message.= 'Telefon: '.$data['phone'].PHP_EOL;
        $message.= 'Xabar matni: '.$data['message'];

        //Send to telegram

        SendTelegramService::send($message);

        Feedback::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'message' => $data['message']
        ]);

        return redirect()->route('index')->with('success', 'Xabaringgiz uchun rahmat tez orada javob qaytaramiz!');
    }

    
}
