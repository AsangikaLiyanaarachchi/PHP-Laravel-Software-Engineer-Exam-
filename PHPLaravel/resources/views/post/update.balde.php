<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;  
            color: #fff;  
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;  
            margin: 0;
        }

        .form-container {
            background-color: #333;  
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        .form-container label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }

        .form-container input[type="text"],
        .form-container textarea,
        .form-container input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #222;  
            color: #fff;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;  
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0056b3;  
        }

        .form-container .alert {
            color: #FF6F61;  
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Update a New Post</h1>

         
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <form action="{{route('update.post')}}" method="POST">
            @csrf

            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div>
                <label for="content">Content:</label>
                <textarea id="content" name="content" required></textarea>
            </div>

            

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
