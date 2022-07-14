@extends('layouts.app')

@section('content')
   <div class="jumbotron">
    <h1 class="display-3">Welcome to my Site</h1>
    <p class="lead">Jumbo helper text</p>
    <hr class="my-2">
    <p>More info</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{ route('pages.index') }}" role="button">Jumbo action name</a>
    </p>
   </div>
@endsection
