@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection


@section('header')
    @parent
@endsection




@section('content')
    @include('default.content')

@endsection


@section('footer')
    @parent
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
@endsection

