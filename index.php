<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


<script>
function scrollToElement(elementId) {
  var element = document.getElementById(elementId);
  element.scrollIntoView({ behavior: 'smooth' });
}
$("#call-us-button").click(function() {
        window.location.href = "tel:94914 05839";
});
</script>
    


<!-- banner -->
<div class="banner" id="banner">    	   
    <img src="images/photos/15.jpg"   style="display:block; margin:auto;width: auto; height: 100vh; padding: 3rem!important;" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Dinesh Grand</h1>
                <p class="animated fadeInUp">Where Luxury Meets Comfort</p>
            <button id="contact-us-btn">
                <i class="fa-solid fa-phone"></i> Contact Us
                <a href="tel:94914 05839" id="call-us-button" ></a>
            </button>    
            <button id="contact-us-btn" onclick="scrollToElement('direction')">
                <i class="fa-solid fa-location-arrow"></i> Get Directions
                
            </button>             
            </div>
            
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
<div class="item active"><img src="images/photos/14.jpg" class="img-responsive" alt="slide"></div>
</div>
<div class="col-sm-5 col-md-4">
<h3>Our Rooms and Banquet Hall</h3>
    <p>Welcome to Dinesh Grand Hotel, where luxury and elegance come together to provide you with an unforgettable stay. Our hotel offers 13 spacious and well-appointed luxury and suite rooms, each designed to ensure your comfort and relaxation. Our rooms feature modern amenities, such as a flat-screen TV, high-speed internet, and comfortable bedding to ensure a restful night's sleep.</p>

<p>Whether you are here for a special occasion or a business trip, our hotel's banquet hall is the perfect venue to host your events. Our grand banquet hall can accommodate up to 200 guests and can be customized to suit your specific needs, whether it's a business conference, engagement, or a birthday party.</p>

<p>Located in the prime Narasaraopet area, our hotel is surrounded by an array of shops, restaurants, and entertainment options. We are just 200 meters away from the Narasaraopet railway station, making it easy for our guests to explore the city and its many attractions.</p>

<p>At Dinesh Grand Hotel, we pride ourselves on providing exceptional service and attention to detail. Our friendly and professional staff is dedicated to ensuring that your stay with us is as comfortable and enjoyable as possible. We look forward to welcoming you to our hotel and making your visit to Narasaraopet a memorable one.</p>
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp" id="gallery">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>                
                </div>
                
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Luxury Rooms</div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/6.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Suite Rooms</div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" style="height:270px"alt="slide"></div>
                </div>
                <!-- Controls -->
                <!-- <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a> -->
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Banquet Hall</div>
        </div>
    </div>
</div>
</div>
<!-- services -->


<?php include 'footer.php';?>