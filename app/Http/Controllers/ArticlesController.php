<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\Edit;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    //Создаем функцию для выполнения добавления задач
    public function  add(ArticleRequest $request) {
        $data = $request->only(['name', 'body', 'email']);

        $article  = Article::create ([
            "email" => $data['email'],
            "name" => $data['name'],
            "task_body" => $data['body']
        ]);
        if ($article) {
            return redirect()->back();
        }
    }


    //Функция редактирования задачи
    public function edit(Request $request)
    {
        $sort = Edit::editTask($request);
        return redirect()->route('main');
    }
}
