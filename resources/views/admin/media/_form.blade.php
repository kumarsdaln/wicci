@php $media = $media ?? null; @endphp
<div class="grid md:grid-cols-2 gap-4">
  <div><label class="block text-sm font-medium mb-1">Title</label><input type="text" name="title" value="{{ old('title', $media?->title) }}" class="w-full border rounded px-3 py-2" required></div>
  <div><label class="block text-sm font-medium mb-1">Slug (Optional)</label><input type="text" name="slug" value="{{ old('slug', $media?->slug) }}" class="w-full border rounded px-3 py-2"></div>
</div>
<div class="grid md:grid-cols-3 gap-4 mt-4">
  <div><label class="block text-sm font-medium mb-1">Type</label><select name="media_type" class="w-full border rounded px-3 py-2" required><option value="photo" @selected(old('media_type',$media?->media_type)==='photo')>Photo</option><option value="video" @selected(old('media_type',$media?->media_type)==='video')>Video</option><option value="press" @selected(old('media_type',$media?->media_type ?? 'press')==='press')>Press</option></select></div>
  <div><label class="block text-sm font-medium mb-1">Status</label><select name="status" class="w-full border rounded px-3 py-2" required><option value="draft" @selected(old('status',$media?->status ?? 'draft')==='draft')>Draft</option><option value="published" @selected(old('status',$media?->status)==='published')>Published</option></select></div>
  <div><label class="block text-sm font-medium mb-1">Published At</label><input type="datetime-local" name="published_at" value="{{ old('published_at', optional($media?->published_at)->format('Y-m-d\\TH:i')) }}" class="w-full border rounded px-3 py-2"></div>
</div>
<div class="mt-4"><label class="block text-sm font-medium mb-1">External URL</label><input type="url" name="external_url" value="{{ old('external_url', $media?->external_url) }}" class="w-full border rounded px-3 py-2" placeholder="https://..."></div>
<div class="mt-4"><label class="block text-sm font-medium mb-1">Summary</label><textarea name="summary" rows="3" class="w-full border rounded px-3 py-2" required>{{ old('summary', $media?->summary) }}</textarea></div>
<div class="mt-4"><label class="block text-sm font-medium mb-1">Content</label><textarea name="content" rows="8" class="w-full border rounded px-3 py-2">{{ old('content', $media?->content) }}</textarea></div>
<div class="mt-6 flex gap-3"><button type="submit" class="px-4 py-2 bg-slate-900 text-white rounded hover:bg-slate-800">Save</button><a href="{{ route('admin.media.index') }}" class="px-4 py-2 bg-slate-200 rounded hover:bg-slate-300">Cancel</a></div>
