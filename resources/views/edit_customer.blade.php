@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
<div class= "FORM">
    <td><button><a href="/viewTable">view</a></button></td>
    <form method = "POST" action='../update/{{$cusArr->id}}'>
        @csrf
        Name:-<input type="text" name="name" required value="{{$cusArr->name}}"/><br>
        Address:- <input type="text" name ="address" required value="{{$cusArr->address}}"/><br>
        organization:- <input type="text" name ="organization" required value="{{$cusArr->organization}}"/><br>
        email:- <input type="text" name ="email" required value="{{$cusArr->email}}"/><br>

        <label for="image">Post Image</label>
        <input type="file" id="image" name="image" required value="{{$cusArr->image}}"/><br>
        <button type="submit">Update Details</button>
        <td><button><a href="/viewTable">view</a></button></td>
        <td><button><a href="../dashboard">Add data</a></button></td>
    </form>
</div>
@endsection
