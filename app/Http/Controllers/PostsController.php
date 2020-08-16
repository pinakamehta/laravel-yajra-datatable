<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Yajra\Datatables\Datatables;
use function view;

class PostsController extends Controller
{
    public function index()
    {
        $posts = $this->getPosts()->get();
        return view('posts')->with('posts', $posts);
    }

    protected function getPosts()
    {
        return Post::leftJoin('authors', 'authors.id', '=', 'posts.author_id')
            ->select(
                'authors.first_name',
                'authors.last_name',
                'posts.id',
                'posts.title',
                'posts.description',
                'posts.content',
                'posts.date'
            );
    }

    public function yajraPosts()
    {
        return view('yajra_posts');
    }

    public function yajraAjax()
    {
        return DataTables::of($this->getPosts())
            ->editColumn('first_name', function ($post) {
                return $post->first_name . " " . $post->last_name;
            })
            ->make(true);
    }
}
