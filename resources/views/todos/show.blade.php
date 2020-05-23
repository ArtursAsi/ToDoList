@extends('todos.layout')

@section('todos.show')
    <div class="container">
    <div class="row justify-content-start border-left pt-3">
        <div class="col-4" >
            <p>Title: {{ $todo->title }}</p>
            <p>Text: {{ $todo->text }}</p>
            <form action="{{ route('todos.completed',$todo)}}" method="post">
                @csrf
                @if(!$todo->completed)
                    <button type="submit" class="btn btn-warning">
                        In Progress
                    </button>
                @else
                    <button type="submit" class="btn btn-success">
                        Completed
                    </button>
                @endif

            </form>

            <form action="{{ route('todos.destroy',$todo) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>

            </form>

            <a href="{{ route('todos.edit',$todo) }}">
                <button class="btn btn-primary">Edit</button>
            </a>

            <p>Created: {{ $todo->created_at }}</p>
            <p>Updated: {{ $todo->updated_at }}</p>
        </div>
    </div>
    </div>
@endsection
