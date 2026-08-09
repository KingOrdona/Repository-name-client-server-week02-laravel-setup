<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Information</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background: white;
            width: 500px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .info {
            padding: 12px 0;
            border-bottom: 1px solid #ddd;
        }

        .label {
            font-weight: bold;
        }

        .date {
            text-align: center;
            margin-top: 25px;
            color: #555;
        }
    </style>
</head>

<body>

    <div class="card">

        <h1>Student Information</h1>

        <div class="info">
            <span class="label">Student Name:</span>
            King Anthony Davinci M. Ordona
        </div>

        <div class="info">
            <span class="label">Student Number:</span>
            0124-0638
        </div>

        <div class="info">
            <span class="label">Course:</span>
            BS Information Technology
        </div>

        <div class="info">
            <span class="label">Section:</span>
            BSIT-3C
        </div>

        <div class="info">
            <span class="label">Subject:</span>
            LARAVEL
        </div>

        <div class="date">
            Current Date: {{ date('F d, Y') }}
        </div>

    </div>

</body>
</html>