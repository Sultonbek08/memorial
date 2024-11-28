<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\Models\Magazine;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        return view('index');
    }
    public function about()
    {

        return view('about');
    }
    public function magazine()
    {
        $magazines = Magazine::all();
        return view('magazine', compact('magazines'));
    }
    public function library()
    {

        return view('library');
    }
    public function contactus()
    {

        return view('contactus');
    }
    public function search(Request $request)
    {

        $query = $request->input('query'); // Foydalanuvchi kiritgan qidiruv so'rovi

        if (!$query) {
            return view('search', [
                'authors' => [],
                'articles' => [],
                'magazines' => [],
                'totalResults' => 0, // Umumiy natijalar soni 0 bo'ladi
            ]);
        }

        // Qidiruv natijalari
        $authors = Author::where('name_uz', 'LIKE', "%$query%")
            ->orWhere('name_ru', 'LIKE', "%$query%")
            ->orWhere('name_en', 'LIKE', "%$query%")
            ->get();
        $articles = Article::where('name_uz', 'LIKE', "%$query%")
            ->orWhere('name_ru', 'LIKE', "%$query%")
            ->orWhere('name_en', 'LIKE', "%$query%")
            ->orWhere('content_uz', 'LIKE', "%$query%")
            ->orWhere('content_ru', 'LIKE', "%$query%")
            ->orWhere('content_en', 'LIKE', "%$query%")
            ->get();
        $magazines = Magazine::where('name_uz', 'LIKE', "%$query%")
            ->orWhere('name_ru', 'LIKE', "%query%")
            ->orWhere('name_en', 'LIKE', "%query%")
            ->orWhere('short_name_uz', 'LIKE', "%query%")
            ->orWhere('short_name_ru', 'LIKE', "%query%")
            ->orWhere('short_name_en', 'LIKE', "%query%")
            ->get();

        // Umumiy natijalar sonini hisoblash
        $totalResults = $authors->count() + $articles->count() + $magazines->count();

        // Natijalarni Blade sahifasiga yuborish
        return view('search', compact('authors', 'articles', 'magazines', 'totalResults'));
    }

    public function magazine__detail(Request $request)
    {
        $magazine = Magazine::findOrFail($request->id);
        return view('magazine__detail', compact('magazine'));
    }
}
