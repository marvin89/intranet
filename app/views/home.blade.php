@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
<h1>Hello World!</h1>
<p>This page is created using a master template.</p>
<h3 user-info="displayName"></h3>
<img src="" alt="" user-info="image" />
@stop