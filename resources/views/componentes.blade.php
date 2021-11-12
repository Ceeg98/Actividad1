@extends('layouts.master')
@section('title', 'Componentes')
@section('content')
@foreach($componentes as $componente)
<p>{{$componente}}</p>
@endforeach
@stop