<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use宣言は外部にあるクラスをPostController内にインポートできる
use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)//インポートしたPostをインスタンス化して$postとして使用
    {
        return view('posts/show')->with(['post' => $post]);
        //'post'はbladeファイルで使う変数。
    }
}
