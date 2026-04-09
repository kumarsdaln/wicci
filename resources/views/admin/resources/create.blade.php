@extends('admin.layouts.app')

@section('title', 'Create Resource')
@section('page_title', 'Create Resource')

@section('content')
<div class="bg-white rounded-lg shadow-sm border p-6">
  @if($errors->any())
    <div class="mb-4 rounded border border-rose-200 bg-rose-50 text-rose-700 px-4 py-3 text-sm">
      {{ $errors->first() }}
    </div>
  @endif

  <form method="POST" action="{{ route('admin.resources.store') }}">
    @csrf
    @include('admin.resources._form')
  </form>
</div>
@endsection
