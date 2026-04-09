<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Panel')</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-900">
  <div class="min-h-screen flex">
    <aside class="w-64 bg-slate-900 text-slate-100 p-5 hidden md:block">
      <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold block mb-8">WICCI CMS</a>
      <nav class="space-y-2 text-sm">
        <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-slate-700' : 'hover:bg-slate-800' }}">Dashboard</a>
        <a href="{{ route('admin.resources.index') }}" class="block px-3 py-2 rounded {{ request()->routeIs('admin.resources.*') ? 'bg-slate-700' : 'hover:bg-slate-800' }}">Resources CMS</a>
        <a href="{{ route('admin.events.index') }}" class="block px-3 py-2 rounded {{ request()->routeIs('admin.events.*') ? 'bg-slate-700' : 'hover:bg-slate-800' }}">Events CMS</a>
        <a href="{{ route('admin.initiatives.index') }}" class="block px-3 py-2 rounded {{ request()->routeIs('admin.initiatives.*') ? 'bg-slate-700' : 'hover:bg-slate-800' }}">Initiatives CMS</a>
        <a href="{{ route('admin.media.index') }}" class="block px-3 py-2 rounded {{ request()->routeIs('admin.media.*') ? 'bg-slate-700' : 'hover:bg-slate-800' }}">Media CMS</a>
        <a href="{{ route('admin.submissions.index') }}" class="block px-3 py-2 rounded {{ request()->routeIs('admin.submissions.*') ? 'bg-slate-700' : 'hover:bg-slate-800' }}">Form Submissions</a>
        <a href="{{ route('resources') }}" class="block px-3 py-2 rounded hover:bg-slate-800">View Website</a>
      </nav>
    </aside>

    <main class="flex-1 p-4 md:p-8">
      <header class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold">@yield('page_title', 'Admin')</h1>
        <form method="POST" action="{{ route('admin.logout') }}">
          @csrf
          <button type="submit" class="px-4 py-2 bg-slate-800 text-white rounded hover:bg-slate-700">Logout</button>
        </form>
      </header>

      @if(session('success'))
        <div class="mb-4 rounded border border-emerald-200 bg-emerald-50 text-emerald-800 px-4 py-3 text-sm">{{ session('success') }}</div>
      @endif

      @yield('content')
    </main>
  </div>
</body>
</html>
