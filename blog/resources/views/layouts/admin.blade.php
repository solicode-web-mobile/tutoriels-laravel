<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>{{ $title ?? 'Admin - ' . config('app.name') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{
      font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu;
      max-width:960px;
      margin:32px auto;
      padding:0 16px;
      background:#f9fafb;
    }
    header{margin-bottom:16px;}
    nav a{margin-right:12px;text-decoration:none;font-size:.95rem;}
    .active{font-weight:700;text-decoration:underline;}
    .card{padding:16px;border:1px solid #e5e7eb;border-radius:12px;background:#fff;margin-bottom:16px;}
  </style>
</head>
<body>
  <header>
    <h1>Admin — {{ config('app.name', 'Blog Solicode') }}</h1>

    <nav>
      <a href="{{ route('home') }}">← Retour au site</a>
      <a href="{{ route('admin.articles.create') }}">Nouvel article</a>
      {{-- plus tard : <a href="{{ route('admin.articles.index') }}">Liste des articles</a> --}}
    </nav>

    <hr>
  </header>

  <main>
    @include('partials.flash')
    @yield('content')
  </main>

  <hr>
  <footer>
    Espace admin • Laravel • {{ now()->format('d/m/Y H:i') }}
  </footer>
</body>
</html>
