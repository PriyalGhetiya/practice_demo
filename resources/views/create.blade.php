@extends('welcome')
@php 
$routeCurrent = explode('.',Route::current()->getName());
$route = (count($routeCurrent) > 0) ? $routeCurrent[0] : '';
$routeCapital = ucwords($route);
$page_title = (count($routeCurrent) > 0) ? ucwords($routeCurrent[0].' '.$route) : '';
@endphp

@section('content')
<div class="page-header mt-0 shadow p-3">
    {{$route}}
</div>
<form action="/action_page.php">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" id="pwd">
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection