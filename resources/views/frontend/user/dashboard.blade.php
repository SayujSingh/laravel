@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Dashboard')
                    </x-slot>

                    <x-slot name="body">
                        <div class= "FORM">
                            <form method = "POST" action='add'>
                                @csrf
                                Name:-<input type="text" name="name"><br>
                                Address:- <input type="text" name ="address"><br>
                                organization:- <input type="text" name ="organization"><br>
                                email:- <input type="text" name ="email"><br>
                                mobile <input type="text" name ="mobile"><br>
                                <label for="image">Post Image</label>
                                <input type="file" id="image" name="image"><br>
                                <button type="submit">Add Customer</button>
                            </form>
                            {{session('msg')}}
                        </div>
                        <td><button><a href="/viewTable">view</a></button></td>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
