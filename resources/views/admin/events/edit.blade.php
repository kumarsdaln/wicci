@extends('admin.layouts.app')
@section('title', 'Edit Event')
@section('page_title', 'Edit Event')
@section('content')
<div class="bg-white rounded-lg shadow-sm border p-6">
  @if($errors->any())<div class="mb-4 rounded border border-rose-200 bg-rose-50 text-rose-700 px-4 py-3 text-sm">{{ $errors->first() }}</div>@endif
  <form method="POST" action="{{ route('admin.events.update', $event) }}">@csrf @method('PUT') @include('admin.events._form', ['event' => $event])</form>
</div>
@endsection
