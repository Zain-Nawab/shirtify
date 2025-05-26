<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Email</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 24px;
            background-color: #f9f9f9;
            color: #333;
        }
        .email-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 32px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
        .email-btn {
            display: inline-block;
            padding: 10px 30px;
            background: #3b82f6;
            color: white !important;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            margin-top: 16px;
            transition: background-color 0.3s ease;
        }
        .email-btn:hover {
            background-color: #155d93;
        }
        p {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <p>Hello {{ $user->name }},</p>
        <p>Click the button below to verify your email address:</p>
        <p><a href="{{ $url }}" class="email-btn">Verify Email</a></p>
        <p>If you didn't create an account, no further action is required.</p>
    </div>
</body>
</html>