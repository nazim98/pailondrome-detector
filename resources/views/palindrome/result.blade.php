<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Result</title>
    <!-- Add your preferred styling or link to a CSS file -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }

        h2 {
            color: #007bff;
        }

        p {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .palindrome-message {
            font-weight: bold;
            margin-top: 20px;
        }

        .back-to-form {
            display: block;
            margin-top: 30px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Palindrome Result</h2>
    <p>Entered word: {{ $word }}</p>
    @if($isPalindrome)
        <p class="palindrome-message" style="color: #28a745;">This word is a palindrome!</p>
    @else
        <p class="palindrome-message" style="color: #dc3545;">This word is not a palindrome.</p>
    @endif
    <a href="{{ route('palindrome.index') }}" class="back-to-form">Back to form</a>
</body>
</html>
