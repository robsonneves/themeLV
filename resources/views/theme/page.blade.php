@extends('theme.index')

@section('content')

    @if($name)
        @include('theme.'.$name)
    @else
        @include('theme.ui.dashboard')
    @endif
@stop