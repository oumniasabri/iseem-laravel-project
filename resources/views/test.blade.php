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

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Test view</title>
</head>
<body>

<br>


</body>
</html> -->

