
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(rgba(255, 182, 193, 0.4), rgba(255, 182, 193, 0.4)), url('birthday.png');
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
        }

        .button-container {
            text-align: center;
        }

        .birthday-button {
            width: 190px;
            height: 190px;
            background: url('for-you.png') no-repeat center center;
            background-size: contain;
            border: none;
            outline: none;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5), 0 0 30px rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .birthday-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.7), 0 0 50px rgba(255, 255, 255, 0.8);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .button-container {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <button class="birthday-button" onclick="goToNextPage()"></button>
    </div>

    <script>
        function goToNextPage() {
            window.location.href = 'next-page.html'; // Replace with your next page URL
        }
    </script>
</body>
</html>