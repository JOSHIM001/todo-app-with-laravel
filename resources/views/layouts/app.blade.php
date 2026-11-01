<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Todo App</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: system-ui, sans-serif; background: #f3f4f6; margin: 0; padding: 40px 16px; color: #1f2937; }
        .container { max-width: 560px; margin: 0 auto; background: #fff; padding: 24px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,.08); }
        h1 { margin-top: 0; }
        form.add { display: flex; gap: 8px; margin-bottom: 16px; }
        input[type=text] { flex: 1; padding: 10px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 16px; }
        button { padding: 10px 14px; border: 0; border-radius: 8px; cursor: pointer; font-size: 14px; }
        .btn-primary { background: #2563eb; color: #fff; }
        .btn-danger { background: #dc2626; color: #fff; }
        .btn-light { background: #e5e7eb; color: #111; text-decoration: none; display: inline-block; padding: 10px 14px; border-radius: 8px; font-size: 14px; }
        ul { list-style: none; padding: 0; margin: 0; }
        li { display: flex; align-items: center; gap: 8px; padding: 10px 0; border-bottom: 1px solid #e5e7eb; }
        li .title { flex: 1; }
        li.done .title { text-decoration: line-through; color: #9ca3af; }
        .alert { background: #dcfce7; color: #166534; padding: 10px; border-radius: 8px; margin-bottom: 12px; }
        .error { color: #dc2626; font-size: 14px; margin-bottom: 8px; }
        .empty { color: #6b7280; text-align: center; padding: 20px 0; }
        form.inline { display: inline; margin: 0; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
