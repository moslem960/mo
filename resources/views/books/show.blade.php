@extends('layouts.app')
@section('content')
    <div class="container">

            <div> ISBN : {{$books->ISBN}}</div>
            <div >Page :{{$books->pages}}</div>
            <div >Owner :{{$books->user->name}}</div>
            <p>
                category :
                @foreach($books->categories as $category)

                    {{$category->name.','}}

                @endforeach
            </p>


    </div>
@endsection

