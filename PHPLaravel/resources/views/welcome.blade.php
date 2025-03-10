<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            color: #444;
        }

        .dashboard-btns {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn-logout {
            background-color: #f44336;
        }

        .btn-logout:hover {
            background-color: #d32f2f;
        }

        .btn-view,
        .btn-create {
            background-color: #007bff;
        }

        .btn-view:hover,
        .btn-create:hover {
            background-color: #0056b3;
        }

        .user-info {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .user-info p {
            font-size: 18px;
            font-weight: bold;
            margin-right: 10px;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container">
        <header>
            <h1>Welcome to the Dashboard</h1>
        </header>

        <div class="user-info">
            <p>User ID:</p>
            <p>{{ $userId }}</p>
        </div>

        <div class="dashboard-btns">
            <a href="{{ route('logout') }}">
                <button class="btn btn-logout">Log Out</button>
            </a>
            <a href="{{ route('view.post', ['id' => $userId]) }}">
                <button class="btn btn-view">View Post</button>
            </a>
            <a href="{{ route('create') }}">
                <button class="btn btn-create">Create Post</button>
            </a>
        </div>

        <footer>
            <p>&copy; 2025 </p>
        </footer>
    </div>

</body>

</html>
