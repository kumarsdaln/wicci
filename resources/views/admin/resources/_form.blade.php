@php
  $resource = $resource ?? null;
@endphp

<div class="grid md:grid-cols-2 gap-4">
  <div>
    <label class="block text-sm font-medium mb-1">Type</label>
    <select name="type" class="w-full border rounded px-3 py-2" required>
      @foreach(['blog','article','research','guide'] as $type)
        <option value="{{ $type }}" @selected(old('type', $resource?->type) === $type)>{{ ucfirst($type) }}</option>
      @endforeach
    </select>
  </div>
  <div>
    <label class="block text-sm font-medium mb-1">Status</label>
    <select name="status" class="w-full border rounded px-3 py-2" required>
      @foreach(['draft','published'] as $status)
        <option value="{{ $status }}" @selected(old('status', $resource?->status ?? 'draft') === $status)>{{ ucfirst($status) }}</option>
      @endforeach
    </select>
  </div>
</div>

<div class="mt-4">
  <label class="block text-sm font-medium mb-1">Title</label>
  <input type="text" name="title" value="{{ old('title', $resource?->title) }}" class="w-full border rounded px-3 py-2" required>
</div>

<div class="mt-4">
  <label class="block text-sm font-medium mb-1">Slug (Optional)</label>
  <input type="text" name="slug" value="{{ old('slug', $resource?->slug) }}" class="w-full border rounded px-3 py-2" placeholder="auto-generated-if-empty">
</div>

<div class="mt-4">
  <label class="block text-sm font-medium mb-1">Excerpt</label>
  <textarea name="excerpt" rows="3" class="w-full border rounded px-3 py-2" required>{{ old('excerpt', $resource?->excerpt) }}</textarea>
</div>

<div class="mt-4">
  <label class="block text-sm font-medium mb-1">Full Content</label>
  <textarea name="content" rows="10" class="w-full border rounded px-3 py-2">{{ old('content', $resource?->content) }}</textarea>
</div>

<div class="grid md:grid-cols-3 gap-4 mt-4">
  <div>
    <label class="block text-sm font-medium mb-1">Author Name</label>
    <input type="text" name="author_name" value="{{ old('author_name', $resource?->author_name) }}" class="w-full border rounded px-3 py-2">
  </div>
  <div>
    <label class="block text-sm font-medium mb-1">Published At</label>
    <input type="datetime-local" name="published_at" value="{{ old('published_at', optional($resource?->published_at)->format('Y-m-d\\TH:i')) }}" class="w-full border rounded px-3 py-2">
  </div>
  <div>
    <label class="block text-sm font-medium mb-1">Sort Order</label>
    <input type="number" name="sort_order" min="0" value="{{ old('sort_order', $resource?->sort_order ?? 0) }}" class="w-full border rounded px-3 py-2">
  </div>
</div>

<div class="mt-6 flex gap-3">
  <button type="submit" class="px-4 py-2 bg-slate-900 text-white rounded hover:bg-slate-800">Save</button>
  <a href="{{ route('admin.resources.index') }}" class="px-4 py-2 bg-slate-200 rounded hover:bg-slate-300">Cancel</a>
</div>
