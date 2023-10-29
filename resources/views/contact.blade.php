@extends('layout')
@section('title')
  Test Page
@endsection()
@section('content')
  <h1>Test Page</h1>
  @forelse ($etudiant as $item)
<h2>{{ $item }}</h2>
@empty
<h3>Le tableau est vise</h3>
@endforelse
@endsection
