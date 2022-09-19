@extends('layouts.app')
@section('title', 'Index')

@section('content')
    <div class="container-lg">
    
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Author</th>
                    <th scope="col" colspan="2">Title</th>
                    <th scope="col">Post Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td><a href="#">{{$post->id}}</a></th>
                        <td>{{$post->author}}</td>
                        <td colspan="2">{{$post->title}}</td>
                        <td>{{$post->post_date}}</td>
                        <td>
                            <a href="#">
                                <button type="button" class="btn btn-success">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="#" method="post" title-delete="{{$post->title}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul>
        </ul>
    </div>
@endsection