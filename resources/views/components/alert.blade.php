<div class="container">
    @if($errors->has('title') )
        <div class="alert alert-danger">
            {{ $errors->first('title') }}
        </div>

    @elseif($errors->has('text'))
        <div class="alert alert-danger">
            {{ $errors->first('text') }}
        </div>
    @endif
</div>
