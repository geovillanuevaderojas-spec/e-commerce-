<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="my-booking-container">
    <h1 class="homepage_title">kanlungan.</h1>

    <form method="POST" action="/logout">
        @csrf
        <input class="log_out" type="submit" value="Log out">
    </form>
    
    <h1 class="my-bookings">My Bookings</h1>

    <div class="bookings-container">
        <div class="booking_informations" style="max-width: 100%; margin-top: 0;">
            <div class="details_title">Upcoming Stays</div>
            
            @if($bookings->isEmpty())
                <div class="unitone_description">
                    <p>You haven't made any bookings yet.</p>
                </div>
            @else
                <table class="bookings-table">
                    <thead>
                        <tr>
                            <th>Unit</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            <td class="unit-name-cell">
                                {{ $booking->unit->name ?? 'Standard Unit' }}
                            </td>
                            <td>{{ $booking->check_in }}</td>
                            <td>{{ $booking->check_out }}</td>
                            <td>
                                <span class="status-confirmed">Confirmed</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
</body>
</html>