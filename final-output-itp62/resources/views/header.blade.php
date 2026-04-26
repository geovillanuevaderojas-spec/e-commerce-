<header class="unit-header">

    <h1 class="homepage_title">kanlungan.</h1>

    <nav class="main-nav">
        <a href="/home">Units</a>
        <a href="/my-bookings">Bookings</a>
        <a href="#">About</a>
    </nav>

    <div class="header-actions">

    @if(request()->is('units/*'))
        <button onclick="history.back()" class="back_btn">Back</button>
    @else
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="log_out">Logout</button>
        </form>
    @endif

</div>

</header>