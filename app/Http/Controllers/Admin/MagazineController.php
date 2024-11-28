<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Magazine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magazines = Magazine::all();
        return view("admin.magazine.index", compact("magazines"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.magazine.create");
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
            "published_magazines" => "required",
            "email" => "required",
            "short_name_uz" => "required",
            "short_name_en" => "required",
            "short_name_ru" => "required",
            "veb_sayt" => "required",
            "issn_publish" => "required",
            "location" => "required",
            "phone_number" => "required",
            "description" => "required",
            "file" => "required",

        ]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('front/Magazine/', $image_name);
            $requestData['image'] = $image_name;
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('front/Magazine/', $file_name);
            $requestData['file'] = $file_name;
        }

        Magazine::create($requestData);
        return redirect()->route('admin.magazine.index');
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
        $magazine = Magazine::findOrFail($id);
        return view("admin.magazine.edit", compact("magazine"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ads = Magazine::findOrFail($id);
        if ($request->hasFile('image')) {
            if (File::exists('front/Magazine/' . $ads->image)) {
                File::delete('front/Magazine/' . $ads->image);
            }
            $file = $request->file('image');
            $ads->image = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path('front/Magazine/'), $ads->image);
            $request['image'] = $ads->image;

        }
        if ($request->hasFile('file')) {
            if (File::exists('front/Magazine/' . $ads->file)) {
                File::delete('front/Magazine/' . $ads->file);
            }
            $file = $request->file('file');
            $ads->file = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path('front/Magazine/'), $ads->file);
            $request['file'] = $ads->file;

        }
        $ads->update([
            "name_uz" => $request->name_uz,
            "name_ru" => $request->name_ru,
            "name_en" => $request->name_en,
            "email" => $request->email,
            "published_magazines" => $request->published_magazines,
            "short_name_uz" => $request->short_name_uz,
            "short_name_en" => $request->short_name_en,
            "short_name_ru" => $request->short_name_ru,
            "veb_sayt" => $request->veb_sayt,
            "issn_publish" => $request->issn_publish,
            "location" => $request->location,
            "phone_number" => $request->phone_number,
            "description" => $request->description,
            "image" => $ads->image,
            "file" => $ads->file,

        ]);
        return redirect()->route('admin.magazine.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Magazine::destroy($id);
        return redirect()->route('admin.magazine.index');
    }
}
