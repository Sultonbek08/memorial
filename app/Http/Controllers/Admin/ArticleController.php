<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use App\Models\Magazine;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view("admin.article.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        $magazines = Magazine::all();
        return view("admin.article.create", compact("authors","magazines"));
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
            "content_uz" => "required",
            "content_en" => "required",
            "content_ru" => "required",
            "doi" => "required",
            "author_id" => "required|exists:authors,id",
            "magazine_id" => "required|exists:magazines,id",
        ]);

        Article::create($request->all());
        return redirect()->route("admin.article.index");
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
        $article = Article::findOrFail($id);
        $authors = Author::all();
        return view('admin.article.edit', compact('article', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'content_uz' => 'required|string',
            'content_en' => 'required|string',
            'content_ru' => 'required|string',
            'doi' => 'required|string',
            'author_id' => 'required|exists:authors,id',
            'magazine_id' => 'required|exists:authors,id',
        ]);

        $article = Article::findOrFail($id);

        $article->update([
            'name_uz' => $validatedData['name_uz'],
            'name_en' => $validatedData['name_en'],
            'name_ru' => $validatedData['name_ru'],
            'content_uz' => $validatedData['content_uz'],
            'content_en' => $validatedData['content_en'],
            'content_ru' => $validatedData['content_ru'],
            'doi' => $validatedData['doi'],
            'author_id' => $validatedData['author_id'],
            'magazine_id' => $validatedData['magazine_id'],
        ]);

        return redirect()->route('admin.article.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::destroy($id);
        return redirect()->route('admin.article.index');
    }
}
