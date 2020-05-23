@extends('todos.layout')

@section('todos.create')
    <x-alert/>
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <form action="/todos" method="post">
                @csrf
                <input name="title" type="text" placeholder="Enter title">
                <input name="text" type="text" placeholder="Enter text">
                <button type="submit" class="btn btn-outline-success">Create</button>
            </form>
        </div>
    </div>

@endsection
