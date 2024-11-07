<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view("admin.author.index", compact("authors"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.author.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name_uz" => "required",
            "name_en" => "required",
            "name_ru" => "required",
            "email" => "required",
            "bio_uz" => "required",
            "bio_en" => "required",
            "bio_ru" => "required",
            "facebook" => "required",
            "telegram" => "required",
            "instagram" => "required",

        ]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('front/Author/', $image_name);
            $requestData['image'] = $image_name;
        }
        Author::create($requestData);
        return redirect()->route('admin.author.index')->with('success', "Qo'shildi");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::findOrFail($id);
        return view("admin.author.edit", compact("author"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ads = Author::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('front/Author/'. $ads->image)){
                File::delete('front/Author/'. $ads->image);  
            } 
            $file = $request->file('image');
            $ads->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('front/Author/'),$ads->image);
            $request['image']=$ads->image;
            
        }

        $ads->update([
            "name_uz" => $request->name_uz,
            "name_ru" => $request->name_ru,
            "name_en" => $request->name_en,
            "email" => $request->email,
            "facebook" => $request->facebook,
            "telegram" => $request->telegram,
            "instagram" => $request->instagram,
            "bio_uz" => $request->bio_uz,
            "bio_en" => $request->bio_en,
            "bio_ru" => $request->bio_ru,
            "image" => $ads->image,

        ]);
        return redirect()->route('admin.author.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Author::destroy($id);
        return redirect()->route('admin.author.index');
    }
}
