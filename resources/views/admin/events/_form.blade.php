@php $event = $event ?? null; @endphp

<div class="grid md:grid-cols-2 gap-4">
  <div>
    <label class="block text-sm font-medium mb-1">Title</label>
    <input type="text" name="title" value="{{ old('title', $event?->title) }}" class="w-full border rounded px-3 py-2" required>
  </div>
  <div>
    <label class="block text-sm font-medium mb-1">Slug (Optional)</label>
    <input type="text" name="slug" value="{{ old('slug', $event?->slug) }}" class="w-full border rounded px-3 py-2">
  </div>
</div>

<div class="grid md:grid-cols-3 gap-4 mt-4">
  <div>
    <label class="block text-sm font-medium mb-1">Date & Time</label>
    <input type="datetime-local" name="event_date" value="{{ old('event_date', optional($event?->event_date)->format('Y-m-d\\TH:i')) }}" class="w-full border rounded px-3 py-2">
  </div>
  <div>
    <label class="block text-sm font-medium mb-1">Location</label>
    <input type="text" name="location" value="{{ old('location', $event?->location) }}" class="w-full border rounded px-3 py-2">
  </div>
  <div>
    <label class="block text-sm font-medium mb-1">Mode</label>
    <select name="mode" class="w-full border rounded px-3 py-2" required>
      @foreach(['online' => 'Online', 'in-person' => 'In-Person', 'hybrid' => 'Hybrid'] as $value => $label)
        <option value="{{ $value }}" @selected(old('mode', $event?->mode ?? 'online') === $value)>{{ $label }}</option>
      @endforeach
    </select>
  </div>
</div>

<div class="mt-4">
  <label class="block text-sm font-medium mb-1">Summary</label>
  <textarea name="summary" rows="3" class="w-full border rounded px-3 py-2" required>{{ old('summary', $event?->summary) }}</textarea>
</div>

<div class="mt-4">
  <label class="block text-sm font-medium mb-1">Details</label>
  <textarea name="details" rows="8" class="w-full border rounded px-3 py-2">{{ old('details', $event?->details) }}</textarea>
</div>

<div class="grid md:grid-cols-2 gap-4 mt-4">
  <div>
    <label class="block text-sm font-medium mb-1">Status</label>
    <select name="status" class="w-full border rounded px-3 py-2" required>
      @foreach(['draft' => 'Draft', 'published' => 'Published'] as $value => $label)
        <option value="{{ $value }}" @selected(old('status', $event?->status ?? 'draft') === $value)>{{ $label }}</option>
      @endforeach
    </select>
  </div>
  <div class="flex items-end">
    <label class="inline-flex items-center gap-2">
      <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $event?->is_featured))>
      <span class="text-sm">Featured Event</span>
    </label>
  </div>
</div>

<div class="mt-6 flex gap-3">
  <button type="submit" class="px-4 py-2 bg-slate-900 text-white rounded hover:bg-slate-800">Save</button>
  <a href="{{ route('admin.events.index') }}" class="px-4 py-2 bg-slate-200 rounded hover:bg-slate-300">Cancel</a>
</div>
