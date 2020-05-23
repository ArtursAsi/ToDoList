@extends('todos.layout')


@section('todos.edit')
    <x-alert/>
    <div class="container ">
        <div class="row justify-content-center mt-5">
            <form action="{{ route('todos.update',$todo) }}" method="post">
                @csrf
                @method('PATCH')
                <input name="title" type="text" placeholder="Enter title" value="{{ old('title',$todo->title) }}">
                <input name="text" type="text" placeholder="Enter text" value="{{ old('text',$todo->text )}}">
                <button type="submit" class="btn btn-outline-primary">Update</button>
            </form>
        </div>
    </div>

@endsection
