<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;



class PostController extends Controller
{

    function view($id) {
        $post = Post::where('user_id', $id)->first(); 

    if (!$post) {
        return redirect()->route('home')->with('error', 'No post found for this user.');
    }

    return view('post.View', compact('post'));
    }

    function create()
    {
        return view("post.Create");
    }

   

    function createPost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new post and associate the authenticated user
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content; // Corrected to use content
        $post->user_id = auth()->user()->id;  // Assign the authenticated user's ID to the post

        // Save the post
        if ($post->save()) {
            return redirect(route('home'))
                ->with('success', 'post added successfully');
        }

        // If saving fails
        return redirect(route('create'))
            ->with('error', 'Task not added');
    }

    function edit($id){
        $student = Post::findOrFail($id); // Fetch student details
        return view("update", compact('post')); // Pass student data to the view
    }
    function update(Request $request ,$id){
        
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
         $post = Post::where("id", $id)->first();
         $post->title = $request->title;
        $post->content = $request->content; // Corrected to use content
        $post->user_id = auth()->user()->id;  //

         if($post->save()){
            return redirect(route("home"))->with("Success","Ctrate new post");
         }
         return redirect(route(""))->with("error", "post note create");
    }
    function delete($id) {
        $post= Post::where("id" ,$id)->first(); // Find the student by ID
    
        if ($post) {
            $post->delete(); // Delete the student
            return redirect(route("home"))->with("success", "postt deleted successfully.");
        }
    
        return redirect(route("home"))->with("error", "post not found.");
    }
}
