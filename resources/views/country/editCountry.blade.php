@extends('layouts.app')

@section('title', 'Create Country')

@section('content')
    <hr>
    <div class="container">
        <form method="POST" action="{{ route('country.update', $country->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">NAME</span>
                <input type="text" name="country_name" value="{{ $country->country_name }}" class="form-control"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                @if ($errors->any())
                    <p style="color: red">{{ $errors->first('country_name') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>
        </form>
    </div>




@endsection
