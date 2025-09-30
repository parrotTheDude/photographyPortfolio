<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page not found — 404</title>
  <meta name="robots" content="noindex">
  <style>
    :root { --bg:#0f1714; --grad1:#1b2421; --grad2:#22332d; --text:#f1f3ee; --accent:#f0b46d; }
    html,body{height:100%}
    body{
      margin:0; color:var(--text); font-family: ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Inter,Arial,sans-serif;
      background: linear-gradient(to bottom, var(--grad1), var(--grad2), var(--grad1));
    }
    .wrap{min-height:100%; display:grid; place-items:center; padding:2rem}
    .card{
      max-width:42rem; width:100%; text-align:center; padding:2rem 1.5rem; border:1px solid rgba(255,255,255,.08);
      background: rgba(15,23,20,.55); backdrop-filter: blur(10px); box-shadow: 0 10px 40px rgba(0,0,0,.45); border-radius:.75rem;
    }
    .title{font-size:2.25rem; font-weight:800; letter-spacing:.02em; margin:.25rem 0 0}
    .code{display:inline-block; font-weight:700; color:var(--accent); background: rgba(240,180,109,.12); padding:.25rem .5rem; border-radius:.375rem}
    .lead{opacity:.9; margin:.5rem 0 0}
    .actions{display:flex; gap:.75rem; justify-content:center; margin-top:1.25rem; flex-wrap:wrap}
    a.btn{display:inline-block; padding:.75rem 1rem; border:1px solid rgba(255,255,255,.12); text-decoration:none; color:var(--bg); background:var(--accent); font-weight:600; border-radius:.5rem}
    a.link{color:var(--text); text-decoration:underline; text-underline-offset:3px; opacity:.9}
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <span class="code">404</span>
      <h1 class="title">Page not found</h1>
      <p class="lead">Sorry, we couldn’t find the page you’re looking for.</p>
      <div class="actions">
        <a class="btn" href="{{ url('/') }}">Back to Home</a>
        <a class="link" href="mailto:{{ env('CONTACT_TO','hello@bowermandigital.com') }}">Report this</a>
      </div>
    </div>
  </div>
</body>
</html>