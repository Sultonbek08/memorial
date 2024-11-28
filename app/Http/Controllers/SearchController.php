<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\Models\Magazine;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $query = $request->input("query");

        //authorlarni orasidan qidirish
        $authors = Author::where("name_uz", "like", "%$query%")
            ->orWhere('name_ru', 'like', "%$query%")
            ->orWhere('name_en', 'like', "%$query%")
            ->get();

        //article lar orasidan qidirish
        $articles = Article::where("name_uz", "like", "%$query%")
            ->orWhere('name_ru', 'like', "%$query%")
            ->orWhere('name_en', 'like', "%$query%")
            ->orWhere('content_uz', 'like', "%$query%")
            ->orWhere('content_ru', 'like', "%$query%")
            ->orWhere('content_en', 'like', "%$query%")
            ->get();

        $magazines = Magazine::where("name_uz", "like", "%$query%")
            ->orWhere('name_uz','like',"%query%")
            ->orWhere('name_ru','like',"%query%")
            ->orWhere('name_en','like',"%query%")
            ->orWhere('short_uz','like',"%query%")
            ->orWhere('short_ru','like',"%query%")
            ->orWhere('short_en','like',"%query%")
            ->get();

        return view("search", compact("authors","articles","magazines","query"));
    }
}
