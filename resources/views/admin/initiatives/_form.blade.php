@php $initiative = $initiative ?? null; @endphp
<div class="grid md:grid-cols-2 gap-4">
  <div><label class="block text-sm font-medium mb-1">Title</label><input type="text" name="title" value="{{ old('title', $initiative?->title) }}" class="w-full border rounded px-3 py-2" required></div>
  <div><label class="block text-sm font-medium mb-1">Slug (Optional)</label><input type="text" name="slug" value="{{ old('slug', $initiative?->slug) }}" class="w-full border rounded px-3 py-2"></div>
</div>
<div class="grid md:grid-cols-3 gap-4 mt-4">
  <div><label class="block text-sm font-medium mb-1">Category</label><input type="text" name="category" value="{{ old('category', $initiative?->category) }}" class="w-full border rounded px-3 py-2"></div>
  <div><label class="block text-sm font-medium mb-1">Sort Order</label><input type="number" min="0" name="sort_order" value="{{ old('sort_order', $initiative?->sort_order ?? 0) }}" class="w-full border rounded px-3 py-2"></div>
  <div><label class="block text-sm font-medium mb-1">Status</label><select name="status" class="w-full border rounded px-3 py-2" required><option value="draft" @selected(old('status', $initiative?->status ?? 'draft')==='draft')>Draft</option><option value="published" @selected(old('status', $initiative?->status)==='published')>Published</option></select></div>
</div>
<div class="mt-4"><label class="block text-sm font-medium mb-1">Summary</label><textarea name="summary" rows="3" class="w-full border rounded px-3 py-2" required>{{ old('summary', $initiative?->summary) }}</textarea></div>
<div class="mt-4"><label class="block text-sm font-medium mb-1">Details</label><textarea name="details" rows="8" class="w-full border rounded px-3 py-2">{{ old('details', $initiative?->details) }}</textarea></div>
<div class="mt-6 flex gap-3"><button type="submit" class="px-4 py-2 bg-slate-900 text-white rounded hover:bg-slate-800">Save</button><a href="{{ route('admin.initiatives.index') }}" class="px-4 py-2 bg-slate-200 rounded hover:bg-slate-300">Cancel</a></div>
