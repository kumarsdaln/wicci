@extends('admin.layouts.app')

@section('title', 'Edit Resource')
@section('page_title', 'Edit Resource')

@section('content')
<div class="bg-white rounded-lg shadow-sm border p-6">
  @if($errors->any())
    <div class="mb-4 rounded border border-rose-200 bg-rose-50 text-rose-700 px-4 py-3 text-sm">
      {{ $errors->first() }}
    </div>
  @endif

  <form method="POST" action="{{ route('admin.resources.update', $resource) }}">
    @csrf
    @method('PUT')
    @include('admin.resources._form', ['resource' => $resource])
  </form>
</div>
@endsection
