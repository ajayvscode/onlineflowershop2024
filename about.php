<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>About Us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
<video src="images/Farm1.mp4"width="100%" loop autoplay muted></video>     
        </div>

        <div class="content">
            <h3>Why choose us?</h3><center>
            <p>➤Various pocket-friendly options for my near and dear ones,
            Improved customer service in case of issues with &nbspfresh flowers and plants including fresh flowers and plants, express delivery of flowers to the destination address, immediate response and resolution.<br>
&nbsp&nbsp&nbsp➤First, the company buys products directly from manufacturers and suppliers to provide fresher products for you, the customer. This approach also removes wholesalers (middlemen) from the equation which greatly reduces costs. Those savings are calculated and displayed on each product page in the form of comparable market prices.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>
<br><br><br><br>

    <div class="flex">
        <div class="content">
            <h3>what we provide?</h3>
            <p>&nbsp&nbsp&nbsp ➤Our vision is to provide you with the best flower options and to ensure that your experience as a customer while searching for flowers is stress-free and enjoyable! <br>
&nbsp&nbsp&nbsp➤ Our main objective is to ensure that you get the best quality products including fresh flowers on our portal. It is our responsibility to ensure that customers find the right flowers for their people and deliver them on time.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <video src="images/Farm2.mp4"width="100%" loop autoplay muted></video>     
        </div>
    </div>
<br><br><br><br>

    <div class="flex">
        <div class="image">
<video src="images/Farm3.mp4"width="100%" loop autoplay muted></video>        
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>&nbsp➤This website started in a small local flower shop. After developing a traditional retail flower business, in 2022 the owner decided to try something new by expanding into online sales with an innovative business model and a more efficient way to sell flowers. This website was born with its slogan "Fresh, Fast and Fair". Company Aim: To provide the best quality gifts at very low prices to the customers of Gujarat.</p>
            <br>
➤ We are proud to support our local communities as well as national non-profits and sports agencies, including Hockey Sports India, Ice Skating India and Basketball Children's Foundation.</p>         
   <a href="#reviews" class="btn">clients reviews</a>
        </div>
    </div><br>
</section>

<section class="reviews" id="reviews">
    <h1 class="title">client's reviews</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/Narendra modi.jpeg" alt="">
            <p>To be honest the red rose vase I ordered is more beautiful than the picture! Very satisfied with the experience! Thank you for the wonderful flower... My family members are happy and it was a bright fresh and beautiful rose flowers...Thank you.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Narendra Modi</h3>
        </div>
																																																																
        <div class="box">
            <img src="images/Manmohan singh.jpeg" alt="">
            <p>The flowers were ordered for my daughter's special birthday. The flowers on the website are exactly the same as the flowers delivered by the team. It was on time and my requests were attended to promptly and without any hassle. Will order here again! Thanks for a great service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Manmohan Singh</h3>
        </div>

        <div class="box">
            <img src="images/Atal Bihari Vajpai1.jpeg" alt="">
            <p>I was a bit scared while placing my order but it was amazing...Tulips flowers fresh and beautiful...hope to get same good quality services in future...very fast delivery quality and presentation good for last minute order Looks like. All the best team..</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Atal Bihari Vajpayee</h3>
        </div>

        <div class="box">
            <img src="images/Morarji Desai.jpeg" alt="">
            <p>I ordered flowers for my aunt a week ago for her birthday .Customer service was excellent I had payment issues with foreign cc sorted well. The flowers were arranged in a beautiful bouquet. Very nice thank you…</p>
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Morarji Desai</h3>
        </div>

        <div class="box">
            <img src="images/Rajiv Gandhi.jpeg" alt="">
            <p>Flowers saved my stressful day today. After calling numbers of flower shops for delivery and my request for flower delivery before 4pm being rejected, only this website granted my request. We had a special event today.</p>
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rajiv Gandhi</h3>
        </div>

        <div class="box">
            <img src="images/Lal Bahadur Shastri.jpeg" alt="">
            <p>This flower shop website in India is highly recommended! I like that it comes with a flower food packet, which has some instructions/details on how to extend the freshness of the flowers, which is a big help for people like me, who know very little about gardening.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Lal Bahadur Shastri</h3>
        </div>

    </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>