<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'WICCI NPWC')</title>
  <meta name="description" content="@yield('meta_description', 'WICCI National Psychological & Mental Wellbeing Council')">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: '#C81970',
            secondary: '#7B3FA2',
            accent: '#F4A261'
          },
          fontFamily: {
            heading: ['Poppins', 'Inter', 'sans-serif'],
            body: ['Open Sans', 'sans-serif']
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @stack('head')
</head>
<body>
  <x-navbar />

  @yield('content')

  <x-footer />

  @yield('scripts')
  @if(session('form_success') === 'newsletter')
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        if (typeof window.showToast === 'function') {
          window.showToast('Subscribed successfully!');
        }
      });
    </script>
  @endif
</body>
</html>
