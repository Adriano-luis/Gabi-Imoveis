@extends('adminlte::auth\login')
@if (isset($erro))
    {{$erro}}
@endif
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/template.css')}}"/>
@endsection