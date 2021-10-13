@extends('adminlte::page')
@section('content')
    <section class="imovel">
        <div class="">
            @if (isset($c))
                cliente cadastrado
            @endif
        </div>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/template.css')}}"/>
@endsection