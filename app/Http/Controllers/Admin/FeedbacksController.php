<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbacksController extends Controller
{
    public function index(){
        $items = Feedback::latest()->paginate(3);
        $links = $items->links();
        return view('admin.feedbacks.index', compact('items', 'links'));
    }

    public function show($id){
        
        $item = Feedback::findOrFail($id);
        $item->update([
            'status' => Feedback::STATUS_READED
        ]);
        return view('admin.feedbacks.show', compact('item'));
    }
}