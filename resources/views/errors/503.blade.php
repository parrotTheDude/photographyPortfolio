<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Back soon — Evie Bowerman</title>
  <meta name="robots" content="noindex">
  <style>
    :root { --bg:#0f1714; --grad1:#1b2421; --grad2:#22332d; --text:#f1f3ee; --accent:#f0b46d; }
    html,body { height:100%; margin:0 }
    body {
      color:var(--text);
      font-family: ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Inter,Arial,sans-serif;
      background: linear-gradient(to bottom, var(--grad1), var(--grad2), var(--grad1));
    }
    .wrap { min-height:100%; display:grid; place-items:center; padding:2rem }
    .card {
      max-width:42rem; width:100%; text-align:center; padding:2.5rem 1.5rem;
      border:1px solid rgba(255,255,255,.08);
      background: rgba(15,23,20,.55); backdrop-filter: blur(10px);
      box-shadow: 0 10px 40px rgba(0,0,0,.45); border-radius:.75rem;
    }

    /* Spinner */
    .spinner-wrap { display:flex; justify-content:center; margin-bottom:1.75rem }
    .spinner {
      width:52px; height:52px; border-radius:50%;
      border:3px solid rgba(240,180,109,.15);
      border-top-color:var(--accent);
      animation: spin .9s linear infinite;
    }
    @keyframes spin { to { transform: rotate(360deg) } }

    .name {
      display:inline-block; font-size:.7rem; font-weight:700; letter-spacing:.18em;
      text-transform:uppercase; color:var(--accent); opacity:.75; margin-bottom:.6rem;
    }
    .title { font-size:1.9rem; font-weight:800; letter-spacing:.01em; margin:0 0 .6rem }
    .lead  { opacity:.75; margin:0; line-height:1.6; font-size:.975rem }

    .divider { width:2.5rem; height:2px; background:rgba(240,180,109,.3); margin:1.5rem auto }
    .eta {
      font-size:.8rem; letter-spacing:.06em; text-transform:uppercase;
      color:var(--accent); opacity:.6;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">

      <div class="spinner-wrap">
        <div class="spinner" role="status" aria-label="Loading"></div>
      </div>

      <span class="name">Evie Bowerman</span>
      <h1 class="title">Back in a moment</h1>
      <p class="lead">We're just updating the website.<br>Everything will be back shortly.</p>

      <div class="divider"></div>
      <p class="eta">Back in ~30 seconds</p>

    </div>
  </div>
</body>
</html>
