<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        //
        $categories = Category::all();

        return view ('/dashboard/newpost', compact('categories'));

        // $categories = Category::join('posts'. 'categories.id', '=', 'posts.categories_id')
        //         ->get();
        // return view ('/dashboard/newpost', compact('categories'));

    }


    public function search(Request $request)
    {
        $pageSize = 10;

        $searchResults = $request->get('query');
        $posts = Post::where('title', 'LIKE', '%'.$searchResults.'%')
                        ->orWhere('status', 'LIKE', '%'. $searchResults. '%')
                        ->paginate($pageSize);

        return view('dashboard/allpost', ['posts' => $posts]);
    }

    public function grafik()
    {
        
        $category = Category::all()
            ->count();

        $publishedCount = Post::all()
            ->where('status', 'Publish')
            ->count();

        $draftCount = Post::all()
            ->where('status', 'Draft')
            ->count();

        $allpost = Post::all()
            ->count();

        return view ('/dashboard/admin',  compact('category', 'publishedCount', 'draftCount', 'allpost'));

    }




    /** get all data Post */
    public function data()
    {
        //
        $pageSize = 10;
        // $posts = Post::orderBy('created_at')->paginate($pageSize);

        $posts = Post::join('categories', 'categories.id', '=', 'posts.categories_id')                                                       
                 ->select("posts.*", "categories.name")
                 ->orderBy('posts.created_at', 'desc')                
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

        // Validation form
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'description' => 'required',
        ]);
    
        // saves image
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
        $post = Post::findOrFail($id);

        return view('/editpost', compact('post'));
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

        $categories = Category::all();

        Log::debug("edit callled with id " . $id);
        $post = Post::findOrFail($id);
        
        Log::debug("Post found");
        $view = view('/dashboard/editpost', compact('post', 'categories'));
        Log::debug("Found view");
        return $view;
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

        $dictionary = $request->all();
        if($request->image != null) {
           $savedPath = $request->image->store('public');
           $dictionary['image'] = str_replace("public/", "", $savedPath);                        
        } 
        $post= Post::findOrFail($id)
                ->update($dictionary);
        return redirect('/mypost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // $dictionary = $request->all();
        // $dictionary['image'] = str_replace("public/", "", $savedPath);        
        // // return redirect('/mypost');

        // $productImage = str_replace('/storage', '', $product->image_path);

        //     Storage::delete('/public' . $productImage);



        Log::debug("Destory callled");
        $post = Post::findOrFail($id);                
        $postImage = str_replace('/storage', '', $post->image);        
        if ($postImage) {
            Log::debug("Post image is " . $postImage);
            Storage::delete("/public/" . $postImage);
            $post->delete();
            // $post->delete($id);

            return "deleted ok";
        }

    }

      public function pagenotfound()
    {
        return view('dashboard/errors');
    }
}
