@extends('todos.layout')

@section('todos.index')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <ul class="list-group">
                    @foreach($todos as $todo)
                        @if($todo->completed)
                            <li class="list-group-item list-group-item-success">
                                <a href="{{ route('todos.show',$todo) }}">{{ $todo->title }} </a>
                            </li>
                        @else
                            <li class="list-group-item list-group-item-warning">
                                <a href="{{ route('todos.show',$todo) }}">{{ $todo->title }} </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>




@endsection
