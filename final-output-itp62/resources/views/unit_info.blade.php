<!DOCTYPE html>
<html>
<head>
  <title>{{ $unit->name }}</title>
   <link rel="stylesheet" href="{{asset('css/unit.css')}}"> 
</head>
<body>

<header class="unit-header">
  <h1>kanlungan.</h1>
  <button class="log_out">Logout</button>
  <button class="back_btn">Back</button>
</header>

<main class="unit-main">

  <section class="unit-gallery">
    <h2>{{ $unit->name }}</h2>

    <div class="main-image">
      <img src="{{ asset($unit->mainpic) }}">
    </div>

    <div class="additional-images">

      @if($unit->image2)
        <img src="{{ asset($unit->image2) }}">
      @endif

      @if($unit->image3)
        <img src="{{ asset($unit->image3) }}">
      @endif

    </div>
  </section>

  <section class="unit-details">
    <h3>{{ $unit->details }}</h3>
    <p>{{ $unit->description }}</p>

    <div class="details-bottom">
      <p>★ 5.0</p>
      <p>{{ $unit->location_name }}</p>
    </div>
  </section>

  <aside class="unit-booking">
    <h3>Php 4999 <small>/night</small></h3>

    <form>
      <div class="booking-date">
        <label>CHECK-IN</label>
        <input type="date" id="check_in" min="{{ date('Y-m-d') }}">
      </div>

      <div class="booking-date">
        <label>CHECKOUT</label>
        <input type="date" id="check_out" min="{{ date('Y-m-d') }}">
      </div>

      <a href="{{ url('/units/' . $unit->slug . '/booking') }}"
        onclick="
        if(!document.getElementById('check_in').value || !document.getElementById('check_out').value){
            alert('Select dates first');
            return false;
        }
        this.href += '?check_in=' + document.getElementById('check_in').value + 
                    '&check_out=' + document.getElementById('check_out').value;
        "
        class="book-now">
        Book Now
        </a>
    </form>
  </aside>

</main>

</body>
</html>