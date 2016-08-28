<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laravel CRUD</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	@yield('css')
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">Home</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ (Request::path() == 'articles') ? 'active' : '' }}"><a href="{{action('ArticleController@index')}}">Articles <span class="sr-only">(current)</span></a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>
@if(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	{{ Session::get('success') }}
</div>
@endif
@if(Session::has('errors'))
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
@foreach ($errors->all() as $error)
	<div>{{ $error }}</div>
@endforeach
</div>
@endif