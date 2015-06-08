@extends('theme.index')

@section('content')

    @if($name)
        @include('theme.'.$name)
    @else
        No Page
    @endif
@stop