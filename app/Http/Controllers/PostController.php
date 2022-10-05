<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //use宣言は外部にあるクラスをPostController内にインポートできる
    use App\Models\Post;
    
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用
    {
        return $post->get();//$postの中身を戻り値にする
    }
}
