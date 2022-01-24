<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;

use App\Models\Port;

use Image;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ports = Port::all();

        return view('admin.ports.index', compact('ports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation rules
        $request->validate([
            'name' => 'required|min:3',
            'ssilka' => 'required|min:3',
            'img' => 'required|file|mimes:jpg,png,jpeg'
        ]);

        //Upload image to storage

        $img_name = $request->file('img')->store('ports', ['disk' => 'public']);

        //Create thumbnail

        $full_path = storage_path('app/public/'.$img_name);
        $full_thumb_path = storage_path('app/public/thumbs/'.$img_name);
        $thumb = Image::make($full_path);
        //proporsiya qilib qirqish
        // $thumb->resize(300, 300)->save($full_thumb_path);

        //Kvadrat qilib qirqish
        $thumb->fit(300,300, function($constraint){
             $constraint->aspectRatio();
        })->save($full_thumb_path);

        //Bazaga yozish
        Port::create([
            'img' => $img_name,
            'name' => $request->post('name'),
            'ssilka' => $request->post('ssilka')
        ]);

        return redirect()->route('ports.index')->with('success', 'Yangi dastur qo`shildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Port::findOrFail($id);

        $model->delete();

        return redirect()->route('ports.index');
    }
}
