<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticket - MyShowz</title>
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Yanone Kaffeesatz', sans-serif;
            background: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #df0e62;
        }
        .ticket {
            background: #fff;
            border: 4px solid #df0e62;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
        }
        .ticket img {
            max-width: 300px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #df0e62;
            padding: 12px;
        }
        th {
            background: #df0e62;
            color: #fff;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            background: #df0e62;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Your E-Ticket - MyShowz</h1>
    <div class="ticket">
        <img src="{{ $movieImg }}" alt="{{ $movieTitle }}">
        <h2>{{ $movieTitle }}</h2>
        <table>
            <tr>
                <th>Day</th>
                <th>Screen</th>
                <th>Time</th>
                <th>Seats</th>
            </tr>
            <tr>
                <td>{{ $booking->day }}</td>
                <td>{{ $booking->screen }}</td>
                <td>{{ $booking->time }}</td>
                <td>{{ $booking->seats }}</td>
            </tr>
        </table>
        <a href="{{ url('user/index') }}" class="btn">Back to Home</a>
    </div>
</body>
</html>
