<?php

namespace App\Services;

use App\Models\Article;

class Edit
{
    public static function editTask($request)
    {
        $data = $request->only(['email', 'body', 'checkbox_info', 'id', 'name']);
        $article = Article::findOrFail($request->get('id'));

        $article->email = $data['email'];
        $article->name =$data['name'];
        $article->task_body = $data['body'];

        if (isset($data['checkbox_info']))
        {
            $article->done = '1';
        } else {
            $article->done = '0';
        }

        return $article->save();
    }

}
