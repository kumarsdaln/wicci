<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 flex items-center justify-center p-4">
  <div class="w-full max-w-md bg-white rounded-xl shadow p-6">
    <h1 class="text-2xl font-semibold mb-2">WICCI CMS Login</h1>
    <p class="text-sm text-slate-500 mb-6">Sign in to manage website content and submissions.</p>

    @if($errors->adminLogin->any())
      <div class="mb-4 rounded border border-rose-200 bg-rose-50 text-rose-700 px-4 py-3 text-sm">
        {{ $errors->adminLogin->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('admin.login.attempt') }}" class="space-y-4">
      @csrf
      <div>
        <label class="block text-sm font-medium mb-1">Email</label>
        <input name="email" type="email" value="{{ old('email') }}" required class="w-full border rounded px-3 py-2">
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Password</label>
        <input name="password" type="password" required class="w-full border rounded px-3 py-2">
      </div>
      <button type="submit" class="w-full bg-slate-900 text-white py-2 rounded hover:bg-slate-800">Login</button>
      <p class="text-xs text-slate-500">Default: admin@wicci.in / admin12345 (change via .env)</p>
    </form>
  </div>
</body>
</html>
