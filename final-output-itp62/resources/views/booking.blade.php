<!DOCTYPE html>
<html>
<head>
    <title>Booking - {{ $unit->name }}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 

</head>

<body>
        @include('header')
        <div class="details">
        <form method="POST" action="/units/{{ $unit->slug }}/booking" class="booking_informations" id="booking-form">
            @csrf
            <p class="details_title">BOOKING INFORMATION</p>
            <input type="hidden" name="unit_id" value="{{ $unit->id }}">

            <div class="booking_information">
                <div class="input-group">
                    <label class="check_in">Check-In</label>
                    <input type="date" name="check_in" value="{{ $check_in }}" id="check_in" class="check_in_container" min="{{ date('Y-m-d') }}" required>  
                </div>
                <div class="input-group">
                    <label class="check_out">Check-Out</label>
                    <input type="date" name="check_out" value="{{ $check_out }}"id="check_out"  class="check_in_container" min="{{ date('Y-m-d') }}" required>
                </div>
            </div>

            <div class="input-group">
                <label class="message_text">Message to host (optional)</label>
                <input type="text" name="message" placeholder="Add Message" class="message">
            </div>

            <p class="details_title">GUEST INFORMATION</p>

            <div class="guest_information">
                <div class="input-group">
                    <label class="first_name">First Name</label>
                    <input type="text" name="first_name" placeholder="Add Text" class="name_container" required>
                </div>
                <div class="input-group">
                    <label class="last_name">Last Name</label>
                    <input type="text" name="last_name" placeholder="Add Text" class="name_container" required>
                </div>
            </div>

            <div class="additional_information">
                <div class="input-group">
                    <label class="email">Email Address</label>
                    <input type="email" name="email" placeholder="Add Email Address" class="email_container" required>
                </div>
                <div class="input-group">
                    <label class="phone_number">Phone Number</label>
                    <input type="number" name="phone_number" placeholder="Add Number" class="phone_number_container" required>
                </div>
            </div>

            <p class="details_title">PAYMENT INFORMATION</p>

            <div class="input-group">
                <label class="card_number">Card Number</label>
                <input type="text" name="card_number" placeholder="Add Card Number" class="card_number_container" required>
            </div>

            <div class="payment_information">
                <div class="input-group">
                    <label class="expiry">Expiry Date</label>
                    <input type="text" name="expiry" placeholder="MM/YY" class="payment_container" required>
                </div>
                <div class="input-group">
                    <label class="cvv">CVV</label>
                    <input type="text" name="cvv" placeholder="123" class="payment_container" required>
                </div>
            </div>
        </form>
        <div class="more_details">
            <div class="unit-card">
                <img src="{{ asset($unit->mainpic) }}" class="unit-img"> 
                <div class="unit-info">
                    <h3 class="unit-name">{{ $unit->name }}</h3>
                    <div class="unit-rating">
                        <span class="star">★</span>
                        <span class="rating-value">5.0</span>
                    </div>
                    <p>{{ $unit->location_name }}</p>
                </div>
            </div>

            <p class="price_details">Price Details</p>
            <hr>

            <div class="price_details">
                <div class="unit_price">
                    <p class="prices">Unit Price</p>
                    <p class="prices" id="unitPrice">Php 4999</p>
                </div>
                <div class="cleaning_price">
                    <p class="prices">Cleaning Price</p>
                    <p class="prices" id="cleaningPrice">Php 500</p>
                </div>
                <div class="service_fee">
                    <p class="prices">Service Fee</p>
                    <p class="prices" id="serviceFee">Php 500</p>
                </div>
                <div class="total">
                    <p class="prices">Total</p>
                    <p class="prices" id="totalPrice">Php 0</p>
                </div>

                <div class="agreements">
                    <div class="terms_conditions_container">
                        <input type="radio" name="terms_conditions" class="terms_conditions" form="booking-form" required>
                        <label class="conditions">I agree to the Terms and Conditions</label>
                    </div>
                    <div class="special_offers_container">
                        <input type="radio" name="special_offers" class="special_offers" form="booking-form">
                        <label class="conditions">Send me promotional emails and special offers</label>
                    </div>
                </div>
                <button class="book_now" type="submit" form="booking-form">Book Now</button>
                @if(session('error'))
                    <p style="color:red;">{{ session('error') }}</p>
                @endif
            </div>
        </div>
     
    </div>
    <script>
        const pricePerNight = 4999;
        const cleaningFee = 500;
        const serviceFee = 500;

        const checkInInput = document.getElementById('check_in');
        const checkOutInput = document.getElementById('check_out');

        function calculatePrice() {
            const checkIn = new Date(checkInInput.value);
            const checkOut = new Date(checkOutInput.value);

            if (!checkInInput.value || !checkOutInput.value) return;

            const timeDiff = checkOut - checkIn;
            const nights = timeDiff / (1000 * 60 * 60 * 24);

            if (nights <= 0) return;

            const unitTotal = nights * pricePerNight;
            const total = unitTotal + cleaningFee + serviceFee;

            document.getElementById('unitPrice').innerText = "Php " + unitTotal;
            document.getElementById('totalPrice').innerText = "Php " + total;
        }

        checkInInput.addEventListener('change', calculatePrice);
        checkOutInput.addEventListener('change', calculatePrice);

        calculatePrice();
    </script>
</body>
</html>