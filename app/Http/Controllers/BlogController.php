<?php
namespace App\Http\Controllers;

//import Model "Post
use App\Models\blog;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller{

public function index(): View{

//get blog
$blog = blog::latest()->paginate(5);

//render view with posts
return view('blog.index', compact('blog'));
}
public function home(): View{

    //get blog
    $blog = blog::latest()->paginate(3);
    
    //render view with posts
    return view('resto.index', compact('blog'));
    }
public function create(): View{
return view('blog.create');
}

public function store(Request $request): RedirectResponse{
    $this->validate($request, [ 
        'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048', 
        'title'     => 'required|min:5', 
        'content'   => 'required|min:10' 
    ]);
    //upload image
    $image = $request->file('image'); 
    $image->storeAs('public/posts', $image->hashName()); 

//validate form
$this->validate($request, [
'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
'title' => 'required|min:5',
'content' => 'required|min:10'
]);

//upload image
$image = $request->file('image');
$image->storeAs('public/blog', $image->hashName());

//create post
Blog::create([
'image' => $image->hashName(),
'title' => $request->title,
'content' => $request->content
]);

//redirect to index
return redirect()->route('blog.index')->with(['success' => 'Data 
Berhasil Disimpan!']);
}

public function show(string $id){
    //get blog by id
    $blog =Blog::findOrfail($id);

    //render view with post
    return view('blog.show', compact('blog'));
}

public function destroy($id): RedirectResponse
{
    //get blog by id
    $blog = Blog::findOrFail($id);
    //delete image
    Storage::delete('public/blog/'.$blog->image);

    $blog->delete();
    return redirect()->route('blog.index')->with(['succes'=>'Data Berhasil Dihapus!']);
}

public function edit(string $id): View{
    $blog = Blog::findOrFail($id);

    //render view with blog
    return view('blog.edit', compact('blog'));
}

public function update(Request $request, $id): RedirectResponse 
    { 
        //validate form 
        $this->validate($request, [ 
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048', 
            'title'     => 'required|min:5', 
            'content'   => 'required|min:10' 
        ]); 
 
        //get post by ID 
        $blog = Blog::findOrFail($id); 
 
        //check if image is uploaded 
        if ($request->hasFile('image')) { 
 
            //upload new image 
            $image = $request->file('image'); 
            $image->storeAs('public/blog', $image->hashName()); 
 
            //delete old image 
            Storage::delete('public/blog/'.$blog->image); 
 
            //update post with new image 
            $blog->update([ 
                'image'     => $image->hashName(), 
                'title'     => $request->title, 
                'content'   => $request->content 
            ]); 
 
        } else { 
 
            //update post without image 
            $blog->update([ 
                'title'     => $request->title, 
                'content'   => $request->content 
            ]); 
        } 
 
        //redirect to index 
        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Diubah!']); 
    } 

    public function tampil(): View
    {
        //get posts
        $blog = Blog::latest()->paginate(5);
        //render view with posts
        return view('blog.user', compact('blog'));
    }

public function resto():view{
    $blog = Blog::latest()->pagination(5);
    return view('resto.index');
}

public function search(Request $request){
    $search = $request->search;
    $blog = DB::table('blogs')
    ->where('title','like','%'.$search.'%')
    ->paginate();
    return view('blog.index', compact('blog'));
}


}
