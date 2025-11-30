<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 - Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #0f172a;
            color: #e5e7eb;
        }

        .card {
            background: #020617;
            border-radius: 16px;
            padding: 32px 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
            max-width: 480px;
            width: 100%;
            text-align: center;
            border: 1px solid #1f2937;
        }

        .code {
            font-size: 72px;
            font-weight: 800;
            letter-spacing: 4px;
            color: #38bdf8;
            margin-bottom: 8px;
        }

        .title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .text {
            font-size: 14px;
            color: #9ca3af;
            margin-bottom: 24px;
        }

        .hint {
            font-size: 12px;
            color: #6b7280;
            margin-bottom: 16px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 999px;
            background: #38bdf8;
            color: #020617;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: background 0.15s ease, transform 0.15s ease;
        }

        .btn:hover {
            background: #0ea5e9;
            transform: translateY(-1px);
        }

        .btn:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="code">404</div>
        <div class="title">Page Not Found</div>
        <p class="text">
            The requested route does not exist on this server.  
            This Laravel instance is currently used only as an API backend.
        </p>
        <p class="hint">
            If you are using a frontend application (e.g. Vue),  
            please open its URL directly (e.g. <code>http://localhost:5173</code>).
        </p>

        <a href="/" class="btn">Go to root</a>
    </div>
</body>
</html>
