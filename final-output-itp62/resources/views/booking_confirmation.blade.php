<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmed</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1 class="homepage_title">kanlungan.</h1>

    <div style="text-align:center; margin-top:50px;">

        <h2 style="color:green;">Thank you {{ session('user')->name }}, for choosing kanlungan.</h2>

        <p>
            You have successfully booked 
            <strong>{{ $unit->name }}</strong>
        </p>

        <img src="{{ asset($unit->mainpic) }}" 
             style="width:300px; border-radius:10px; margin:20px 0;">

        <p>
            <strong>Check-in:</strong> {{ $check_in }}
        </p>

        <p>
            <strong>Check-out:</strong> {{ $check_out }}
        </p>

        <br>

        <a href="/home">
            <button style="padding:10px 20px; font-size:16px;">
                Back to Homepage
            </button>
        </a>

    </div>

</body>
</html>