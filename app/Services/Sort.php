<?php

namespace App\Services;

use App\Models\Article;
use App\Providers\AppServiceProvider;
class Sort
{

    public static function sortTask($request) {
        $taskRequest = Article::query();
        foreach (['name', 'email'] as $field) {
            if ($request->has($field)) {
                $taskRequest->orderBy($field, 'asc');
            }
        }
        if ($request->has('done')) {
            $taskRequest->where('done', 1);
        } elseif ($request->has('no')) {
            $taskRequest->where('done', 0);
        }

        return $taskRequest->orderBy('created_at', 'desc')->SimplePaginate(3)->withPath("?" . $request->getQueryString());
    }
}
