<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
<link rel="stylesheet" href="{{asset('css/style.css')}}"> 

</head>
<body>

  @include('header')
    <div class="about-us">
      <img src= "{{ asset('images/about-us-bg.png') }}"  alt="Background image">
      <div class="abt-text">
        <p>Welcome to our platform, a simple and friendly way to find your next favorite place to stay. 
          We created this system to make travel feel less like a hotel stay and more like visiting a friend. Our mission is to connect people who have unique spaces to share with travelers who want a comfortable, homey experience wherever they go. Whether you’re looking for a quick weekend getaway or a long-term stay, 
          we've made the process of finding and booking a home easy, safe, and stress-free.
        </p>
      </div> 
    </div>
    <div class="group-div">
        <img src= "{{ asset('images/group-pic.jpg') }}"  alt="Group image">   
        <div class="abtus">
            <h2>THE GROUP</h2> 
            <div class="abtus-info">
            <p>
              This website was created by CJ, Mark, Zen, and Geo as our final project for 
              ITP62: E-Commerce Technologies. Our goal was to take what we learned in class
              and build a real-world tool that makes online renting easy for everyone. 
              We worked together to make sure the site is simple to use, looks great, 
              and helps people connect without any hassle. This project represents our
              hard work as a team and our passion for 
              building helpful technology for the community.
            </p>
        </div>
      </div>
    </div>
</body>
</html>