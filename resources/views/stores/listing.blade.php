@extends('landing')
@section('title','Business Listing')
@section ('content')
    <h1>Business Listing</h1>
    @include ('stores.display-box', ['stores' => $stores])

@endsection