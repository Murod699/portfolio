<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbacksController extends Controller
{
    public function index(){
        $items = Feedback::latest()->paginate(10);
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

    public function destroy($id){
        $data = Feedback::findOrFail($id);
        $data->delete();

        return redirect()->route('feedbacks.index')->with('success', 'Xabar o`chirildi!');
    }
}