<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Services\Sort;

class PagesController extends Controller
{
    //Метод который отвечает за отображение задач, введенных пользователями
    public function taskPage(Request $request)
    {
        $sort = Sort::sortTask($request);

        return view('home', [
            'articles' => $sort,
        ]);

    }
    //Функция которая находит саму задачу отдельно
    public function articlePage($id)
    {
        $article = Article::findorFail($id);

        return view('article_page', [
            'article' => $article
        ]);
    }

}
