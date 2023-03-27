<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Traits\FileUpload;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    use FileUpload;
    public function index()
    {
        try{
            $blogs = Blog::all();
            return view('admin.blog.index', [
                'blogs' => $blogs,
            ]); 
            
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function blogList()
    {
        try{
            $blogs = Blog::all();
            return response()->json([
                'blogs' => $blogs,
            ], 200);
            
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function create(){
        $blog = new Blog();
        return view('admin.blog.create',compact('blog'));
    }


    public function store(Request $request){
        // try{
            $this->validate($request, [
                'name' => 'required|string|between:2,255|unique:blogs',
                'image' => 'required',
                'description'=>'required|string',
            ]);
            if($request->image){
                $imageNameWithPath = $this->FileUpload($request->image,'images');
            }
            $newblog = Blog::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name, '-'),
                'image' => isset($imageNameWithPath) ? $imageNameWithPath : null,
                'description' => $request->description,
            ]);
        
            return redirect()->route('admin.blogs.index')->with('success','Blog created successfully');
        //  } catch (\Exception $e) {
        //     return $e->getMessage();
        // }    
       
    }
    public function edit(Blog $blog){
        return view('admin.blog.edit', compact('blog'));
    }

   

    public function show( $id){
        try {
            $blog = Blog::whereId($id)->first();
            return response()->json([
                'blog' => $blog,
            ], 200);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function update(Request $request, $id){
        // try {
            $request->validate([
                'name' => 'string|between:2,100|unique:blogs,name,'.$id,
                'image' => 'sometimes|mimes:jpeg,png,jpg',
                'description'=>'required|string',
            ]);
          
            $blog = Blog::whereId($id)->first();
            $blog->name = $request->name;
            $blog->slug = Str::slug($request->name, '-');
            $blog->description = $request->description;
          
            if($request->image){
                Storage::delete($blog->image);
                $imageNameWithPath = $this->FileUpload($request->image,'images');
                $blog->image = $imageNameWithPath;
            }
            $blog->save();
            return redirect()->route('admin.blogs.index')->with('success','blog updated successfully');
        //  } catch (\Exception $e) {
        //     return $e->getMessage();
        // }
    }

    
    public function destroy( $id)
    {
        try {
            $blog = Blog::whereId($id)->first();
            Storage::delete($blog->image);
            $blog->delete();
            return redirect()->route('admin.blogs.index')->with('success','blog deleted successfully');
        } catch (\Exception $e) {
           return $e->getMessage();
        }
    }
}
