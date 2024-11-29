<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function blog(Request $request): View
    {
        if(!$request->search) {
            $posts = Blog::all();
        } else {
            $posts = Blog::where('title', 'LIKE', "%$request->search%")
                ->orWhere('content', 'LIKE', "%$request->search%")
                ->orWhere('author', 'LIKE', "%$request->search%")
            ->get();
        }
        return view('blogs', [
            'title' => 'Read all about it',
            'subtitle' => 'Web logs are all here',
            'posts' => $posts
        ]);
    }

    public function blogpost(int $id): View
    {
        $blogpost = Blog::find($id);
        return view('blogpost', [
            'blogpost' => $blogpost
        ]);
    }

    public function form(): View
    {
        return view('addBlog');
    }

    public function create(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'content' => 'required|string|max:1000',
            'author' => 'nullable|string|max:100'
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author;
        $blog->save();

      return redirect('/blogs');
    }

    public function editBlogForm(int $id, Request $request)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            abort(404, "Blog $id does not exist");
        }
        return view('editBlog', ['blog' => $blog]);
    }
}
