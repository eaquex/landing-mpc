@extends('landing.layout')

@section('content')
    @include('landing.hero')
    @include('landing.table', get_defined_vars())
@endsection    