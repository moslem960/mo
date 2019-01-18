@extends('layouts.app')
@section('content')
    <div class="container">

        <h5 class="card-title">create book</h5>

        <form  method="post" action="{{route('books.update',['id'=>$books->id])}}">

            {{ method_field('PUT') }}
            {{csrf_field()}}


            <h1>Create Post</h1>


            <div class="form-group">
                <label for="name">name :</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$books->name}}" placeholder="name">
            </div>
            <div class="form-group">
                <label for="pages">pages:</label>
                <input type="number" class="form-control" id="pages" name="pages" value="{{$books->pages}}" placeholder="pages">
            </div>
            <div class="form-group">
                <label for="ISBN">ISBN:</label>
                <input type="text" class="form-control" id="ISBN" name="ISBN" value="{{$books->ISBN}}" placeholder="ISBN">
            </div>
            <div class="form-group">
                <label for="price">price:</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$books->price}}" placeholder="price">
            </div>


            <div class="form-group">
                <label for="category">category:</label>
                <select name="category_id[]" id="category" class="form-control" multiple>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$books->categories->contains('id',$category->id)? 'selected': ''}}>
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit"  class="btn btn-primary"  >update</button>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>
    </div>

@endsection

