<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\books;
use App\category;
use App\Mail\BooksCreated;
use App\Http\Controllers\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

use Symfony\Component\HttpFoundation\Response as HttpResponse;


class BooksController extends Controller
{
    //


    public function __Construct(){
        $this->middleware('auth')->only(['create','edit']);
    }


    public function index(){
        // $books=books::all();
        $books=books::with(['user'])->get();
        return view('books.index',compact('books'));
    }

    public function show($id){

        $books =books::find($id);
        //////////////////////////////////////////////////////
//        $books->categories()->get() = $books->categories
////////////////////////////////////////////////////////////////////////////////////////////////////////
//        foreach ($books->categories()->get() as $category){
//            dump($category->toArray());
//        }
//
//        dd();

        return view('books.show', compact('books'));

    }

    public function create(){
        $categories=category::all();

        return view('books.create',compact('categories'));
    }

    /**
     * @param Request $request
     */
    public function store(Request $request){


//        $request->validate([
//            'name'=>'required',
//            'pages'=>'required|numeric',
//            'price'=>'required|numeric',
//            'ISBN'=>'required'
//
//        ]);
        $books=Auth::user()->books()->create($request->except('_token'));
        $books->categories()->attach($request->get('category_id'));

      //  \Illuminate\Support\Facades\Mail::to(Auth::user())->send(new BooksCreated($books));

        return redirect('books');
        // books::create($request->except('_token'));


    }
    public function update(Request $request,$id){
//        dd($request->all(),$id);

        //find book
        $book=books::find($id);
        //update
        $book->update($request->only(['name','pages','ISBA','price']));
        // update->category
        $book->categories()->sync($request->get('category_id'));

        return redirect('/books');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit($id){
        $books=books::find($id);
        $this->authorize('update',$books);

//        abort_if($books->user->id != Auth::user()->id,HttpResponse::HTTP_UNAUTHORIZED);

//        if($books->user->id != Auth::user()->id){
//            abort(Response::HTTP_UNAUTHORIZED);
//        }
        $categories=category::all();
        return view('books.edit',compact('books','categories'));
    }
}
