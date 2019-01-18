@extends('layouts.app')
@section('content')
    <div class="container col-md-5">
        <table class="table">

            <tr>
                <th>
                    book name
                </th>
                <th>
                    Creator
                </th>
                <th>
                    action
                </th>
            </tr>

            @foreach($books as $book)
                <tr>
                    <td>
                        <a href={{"/books/".$book->id}}>{{$book->name}}</a>
                    </td>
                    <td>
                        {{$book->user->name}}
                    </td>
                    @can('update',$book)
                        <td>
                            <a href="{{route('books.edit',['id'=>$book->id])}}" class="btn btn-primary">update</a>
                        </td>
                    @endcan


                    <td></td>

                </tr>
            @endforeach
        </table>

        <a href="{{route('books.create')}}" class="btn btn-success btn-block">create</a>


    </div>
@endsection
