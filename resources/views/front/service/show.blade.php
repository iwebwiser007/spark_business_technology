@extends('layout.layouts')
@section('title', $service->title)
@section('content')
{!! $service->html_content !!}
 @endsection    