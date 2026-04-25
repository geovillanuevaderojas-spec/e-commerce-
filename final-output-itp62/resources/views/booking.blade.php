    <!DOCTYPE html>
    <html>
    <head>
        <title>Booking - {{ $unit->name }}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <h1 class="homepage_title">kanlungan.</h1>
        <button class="log_out" type="submit">Log Out</button>

        <div class="details">

            <form method="POST" action="/units/{{ $unit->slug }}/booking">
                @csrf

                <div class="booking_informations">

                    <p class="details_title">Booking Information</p>

                
                    <input type="hidden" name="unit_id" value="{{ $unit->id }}">

                    <div class="booking_information">
                        <label class="check_in">Check-In</label>
                        <input type="date" name="check_in" value="{{ $check_in }}" class="check_in_container" min="{{ date('Y-m-d') }}" required> 

                        <label class="check_out">Check-Out</label>
                        <input type="date" name="check_out" value="{{ $check_out }}" class="check_in_container" min="{{ date('Y-m-d') }}" required>
                    </div>

                    <input type="text" name="message" placeholder="Add Message" class="message">
                    <label class="message_text">Message to host (optional)</label>

                    <p class="details_title">Guest Information</p>

                    <div class="guest_information">
                        <label class="first_name">First Name</label>
                        <input type="text" name="first_name" placeholder="Add Text" class="name_container" required>

                        <label class="last_name">Last Name</label>
                        <input type="text" name="last_name" placeholder="Add Text" class="name_container" required>
                    </div>

                    <div class="additional_information">
                        <label class="email">Email Address</label>
                        <input type="email" name="email" placeholder="Add Email Address" class="email_container" required>

                        <label class="phone_number">Phone Number</label>
                        <input type="number" name="phone_number" placeholder="Add Number" class="phone_number_container" required>
                    </div>

                    <p class="details_title">Payment Information</p>

                    <label class="card_number">Card Number</label>
                    <input type="text" name="card_number" placeholder="Add Card Number" class="card_number_container" required>

                    <div class="payment_information">
                        <label class="expiry">Expiry Date</label>
                        <input type="text" name="expiry" placeholder="MM/YY" class="payment_container" required>

                        <label class="cvv">CVV</label>
                        <input type="text" name="cvv" placeholder="123" class="payment_container" required>
                    </div>

                </div>

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
                                <input type="checkbox" name="terms_conditions" class="terms_conditions" required>
                                <label class="conditions"> I agree to the terms and conditions</label>
                            </div>

                            <div class="special_offers_container">
                                <input type="checkbox" name="special_offers" class="special_offers">
                                <label class="conditions"> Send me promotional emails and special offers</label>
                            </div>
                        </div>

                        <button class="book_now" type="submit">Book Now</button>

                    </div>
                </div>

            </form>

        </div>

    </body>
    </html>