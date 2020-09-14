
@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')

</div>
<div class='LIST'>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
            <td>Organization</td>
            <td>email</td>
            <td>image</td>
        </tr>

        @foreach ($cusDetail as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->address}}</td>
                <td>{{$post->organization}}</td>
                <td>{{$post->email}}</td>

                <td>{{$post->image}}</td>
                <td><button><a href="cusdelete/{{$post->id}}">Delete</a></button></td>
                <td><button><a href="edit/{{$post->id}}">Edit</a></button></td>
                <td><button><a href="../dashboard">Add data</a></button></td>
            </tr>
            <br>

        @endforeach
    </table>
</div>
@endsection
