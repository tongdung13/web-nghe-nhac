@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
<hr>
    <div class="container">
    <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
        @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">{{ __('messages.name_category') }}</span>
        <input type="text" name="category_name"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        @if($errors->any())
            <p style="color: red">{{ $errors->first('category_name') }}</p>
        @endif
    </div>
        <button type="submit" class="btn btn-primary">{{ __('messages.add') }}</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">{{ __('messages.cancel') }}</button>
    </form>
    </div>


@endsection
