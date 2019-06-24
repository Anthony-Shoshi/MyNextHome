<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;

class blogPostController extends Controller
{
    public function addBlogPost()
    {
    	return view('admin.blogPost.addBlogPost');
    }

    public function blogPostList()
    {
    	return view('admin.blogPost.blogPostList');
    }

    public function saveBlogPost(Request $request)
    {
    	$blogPost = new BlogPost();
    	$blogPost->title = $request->title;
    	if ($request->file('photo')) {
    		$blogImage = $request->file('photo');
    		$imageOriginalName = $blogImage->getClientOriginalName();
    		$imageName = rand(time(),1000).'_'.$imageOriginalName;
    		$imagePath = 'uploads/blog/img/';
    		$blogImage->move($imagePath,$imageName);
    		$imageUrl  = $imagePath.$imageName;
    		$blogPost->photo = $imageUrl;
    	}
    	$blogPost->description = $request->description;
    	$blogPost->save();
    	return redirect()->back()->with('success','Blog post added successfully!');
    }

    public function allBlogList()
    {
        $blogPosts = BlogPost::orderBy('created_at','desc')->paginate(6);
        return view('user.blog.allBlogList')->with('blogPosts',$blogPosts);
    }


    public function singleBlog($id)
    {
        $blogPosts = BlogPost::inRandomOrder()->limit(3)->get();
        $blogPost = BlogPost::findOrFail($id);
        return view('user.blog.singleBlog')->with('blogPost',$blogPost)->with('blogPosts', $blogPosts);

    }
}
