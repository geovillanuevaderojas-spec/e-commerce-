<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
</head>

<body>
    <header class="navbar_header">
    <h1 class="homepage_title">kanlungan.</h1>
    
    <form method="POST" action="/logout">
        @csrf
        <input class="log_out" type="submit" value="Log out">
    </form>
    </header>
        
    <h2 class="homepage_content">Welcome to kanlungan, {{ session('user')->name }}</h2>
    <p class="homepage_paragraphs">Choose from our exclusive selection of units</p>

    <div class="three_units" id="units-container">
    @foreach ($units as $unit)
    <a href="{{ url('/units/' . $unit->slug) }}" class="unit_one_link">
    <div class="unit_one">
    <video loop muted poster="{{ asset($unit->mainpic) }}">
            <source src="{{ asset($unit->video) }}" type="video/mp4">
        </video>

        <p class="unitone_details">{{ $unit->details }}</p>
        <p class="name_of_unit">{{ $unit->name }}</p>
        <p class="unitone_description">{{ $unit->description }}</p>

        <div class="unitone_location">
            <img class="location_icon" src="{{ asset($unit->location_image) }}">
            <p class="location_name">{{ $unit->location_name }}</p>
        </div>

        <div class="unit_details">
            <div class="guests">
                <img src="{{ asset('images/cake.png') }}" class="location_icon">
                <p class="location_name">{{ $unit->guests }}</p>
            </div>

            <div class="beds">
                <img src="{{ asset('images/single-bed.png') }}" class="location_icon">
                <p class="location_name">{{ $unit->beds }}</p>
            </div>
        </div>

    </div>
</a>
@endforeach
        </div>

    <footer class="site-footer">
    <div class="footer-container">

    <div class="footer-about">
      <h3>About Us</h3>
      <p>We provide the best properties in the city for comfortable living. Discover your dream home today.</p>
    </div>

    <div class="footer-links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Properties</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="footer-contact">
      <h3>Contact</h3>
      <p>Email:kanlungan@example.com</p>
      <p>Phone: +1 234 567 890</p>
      <p>Address: 123 Main Street, Metro City</p>
    </div>

    <div class="footer-social">
      <h3>Follow Us</h3>
      <a href="#" class="social-icon">Facebook</a>
      <a href="#" class="social-icon">Instagram</a>
      <a href="#" class="social-icon">Twitter</a>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 kanlungan. All rights reserved.</p>
  </div>
</footer>

    <script src="{{asset('js/homepage.js')}}"></script>
    <!-- <script src="{{asset('js/inner.js')}}"></script> -->
    </body>
</html>