@extends('admin.layouts.app')
@section('title','Edit Media Item')
@section('page_title','Edit Media Item')
@section('content')
<div class="bg-white rounded-lg shadow-sm border p-6">@if($errors->any())<div class="mb-4 rounded border border-rose-200 bg-rose-50 text-rose-700 px-4 py-3 text-sm">{{ $errors->first() }}</div>@endif<form method="POST" action="{{ route('admin.media.update', $media) }}">@csrf @method('PUT') @include('admin.media._form', ['media' => $media])</form></div>
@endsection
