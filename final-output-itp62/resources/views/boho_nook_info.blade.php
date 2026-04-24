<!DOCTYPE html>
<html>
<head>
  <title>Unit Page</title>
  @vite('resources/css/unit.css')
</head>
<body>

  <header class="unit-header">
    <h1>kanlungan.</h1>
    <button class="log_out">Log out</button>
  </header>

  <main class="unit-main">
    <section class="unit-gallery">
      <h2>Boho Nook</h2>
      <div class="main-image">
        <img src="{{ asset('images/loft-design-bedroom-renovation-north-york-768x558.jpg') }}" alt="Main image of unit">
      </div>
      <div class="additional-images">
        <img src= "{{ asset('images/Gemini_Generated_Image_q5ber0q5ber0q5be.png') }}"  alt="Additional photo 1"> 
        <img src= "{{ asset('images/Gemini_Generated_Image_8yecix8yecix8yec.png') }}" alt="Additional photo 2"> 
      </div>
    </section>

    <section class="unit-details">
      <h3>Details</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <div class="details-bottom">
        <p>★ 5.0</p>
        <p>Downtown</p>
      </div>
    </section>

    <aside class="unit-booking">
      <h3>Php 4999 <small>/night</small></h3>
      <form>
        <div class="booking-date">
          <label>CHECK-IN</label>
          <input type="text" placeholder="Add Date">
        </div>
        <div class="booking-date">
          <label>CHECKOUT</label>
          <input type="text" placeholder="Add Date">
        </div>
        <a href="downtown_oasis.blade.php" class="book-now">Book Now</a>
      </form>
    </aside>
  </main>

</body>
</html>