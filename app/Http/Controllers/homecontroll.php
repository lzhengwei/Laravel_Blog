<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Post;
class homecontroll extends Controller{

	public function index()
	{
		$post = new Post;
		return View('home')
		 ->with('title','My Blog')
		 ->with('posts',$post);
	}
	public function create()
	{
		return View('test')
		 ->with('title','hello world--')
		 ->with('hello','hello everyone--');
	}
	public function edit($id)
	{
		$post = Post::find($id);
		return View('edit')
		 ->with('title','Edit Post'.$post->title)
		 ->with('post',$post);
	}
	public function showpost($id)
	{
		$post = Post::find($id);
		return View('post')
		 ->with('title','My Blog -'.$post->title)
		 ->with('post',$post);
	}
	public function store()
	{
		
	}
	public function delete($id)
	{
		//$input = Request::input();
		
		//$post = Product::all();
		$post = Post::find($id);
		$post->delete();

		return Redirect::to('post');

	}
	public function update($id)
	{
		//$input = Request::input();
		$input = Input::all();
		//$post = Product::all();
		$post = Post::find($id);
		$post->title=$input['title'];
		$post->content = $input['content'];
		$post->save();

		return Redirect::to('post/'.$id);

	}
	public function save()
	{
		//$input = Request::input();
		$input = Input::all();
		//$post = Product::all();
		$post = new Post;
		$post->title=$input['title'];
		$post->content = Input::get('content');
		$post->save();

		return Redirect::to('/post');

	}
}
