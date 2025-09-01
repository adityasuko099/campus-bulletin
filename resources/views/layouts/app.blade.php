<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Campus Mini‑Bulletin</title>
  <style>
    body {font-family: system-ui, Arial, sans-serif; margin: 2rem}
    .grid {display: grid; gap: 1rem; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr))}
    .card {border: 1px solid #ddd; border-radius: 12px; padding: 16px}
  </style>
</head>
<body>
  <header style="margin-bottom:1rem;display:flex;gap:1rem;align-items:center">
    <h1 style="margin:0">Campus Mini‑Bulletin</h1>
    <nav><a href="/">Home</a> · <a href="/clubs">Clubs</a> · <a href="/health">Health</a></nav>
  </header>
  <main>
    @yield('content')
  </main>
  <footer style="margin-top:2rem;color:#666;font-size:14px">&copy; 2025</footer>
</body>
</html>