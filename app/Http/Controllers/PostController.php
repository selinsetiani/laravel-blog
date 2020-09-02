<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Category;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();

        return view ('/dashboard/newpost', compact('categories'));

        // $categories = Category::join('posts'. 'categories.id', '=', 'posts.categories_id')
        //         ->get();
        // return view ('/dashboard/newpost', compact('categories'));

    }


    public function grafik()
    {
        $publishedCount = Post::all()
            ->where('status', 'Publish')
            ->count();

        $draftCount = Post::all()
            ->where('status', 'Draft')
            ->count();

        $allpost = Post::all()
            ->count();

        return view ('/dashboard/admin',  compact('publishedCount', 'draftCount', 'allpost'));

    }




    /** get all data Post */
    public function data()
    {
        //
        $pageSize = 10;
        // $posts = Post::orderBy('created_at')->paginate($pageSize);

        $posts = Post::join('categories', 'categories.id', '=', 'posts.categories_id')                
                 ->orderBy('posts.created_at')                                  
                 ->paginate($pageSize);
                 
        return view ('/dashboard/allpost', ['posts' => $posts, 'pageSize' => $pageSize]);

        // return view('/dashboard/allpost', ['posts' => $posts, 'pageSize' => $pageSize]);

        // return view ('/dashboard/allpost', compact('posts'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // Log::debug('Request happened',  [ 'request' => $request->all()]);
        
        // Post::create($request->all());
        // $request->image->store('public');

        // saves image

        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'required',

        ]);
    
        $savedPath = $request->image->store('public');

        // swaps the 'image' from the memory one to the saved path
        $dictionary = $request->all();
        $dictionary['image'] = str_replace("public/", "", $savedPath);                        
        
        Post::create($dictionary);                

        return redirect('/mypost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete post
        // $Post= Post::whereId($id)->delete();
        
        // return redirect('/mypost');
        Log::debug("Destory callled");
        $Post= Post::whereId($id)->delete();
        return "deleted ok";
        // return back()->withInput()
        //             ->with('success','Post deleted successfully');
    }
}
