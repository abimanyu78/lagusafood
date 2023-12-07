<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagusa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>

            /* Reset some default styles */
        body, h1, h2, h3, p {
            margin: 0;
            padding: 0;
        }

        /* Basic styling */
        body {
            font-family: Calibri;
            /* background-color: #b99d9d; */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        } */

        nav {
            /* display: flex; */
            justify-content: space-between;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        #hero {
            background-image: url(img/cover.png);
            background-color: black;
            background-size: cover;
            background-position: center;
            text-align: center;
            color: #fff;
            padding: 100px 0;
        }

        #hero h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        #menu {
            background-color: #fff;
            padding: 40px 0;
        }

        .menu-item {
            border-bottom: 1px solid #ccc;
            padding: 20px 0;
        }

        .menu-item h3 {
            font-size: 24px;
        }

        .price {
            font-weight: bold;
            color: #333;
        }

        #contact {
            background-color: #f7f7f7;
            padding: 40px 0;
        }

        address {
            font-style: normal;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }


</style>

<body>
    
    <section id="hero" style="height: 600px">

        <header>
        <nav>
            <div class="container">
                <ul style="margin-top: -80px; font-weight: bold; font-size: 20px;">
                    <li style="margin-left: 360px;"><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#testimoni">Testimoni</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>                
            </div>
        </nav>
       
        </header>
        <div class="container">
            <h2 style="font-family: Calibri; font-weight: bold; font-size: 86px; margin-top:80px;">Welcome to Lagusa</h2>
            <a href="#menu" class="btn">View Menu</a>
        </div>


    </section>

    <section id="about">
        <div class="container text-center" style="margin-top: 45px;">
        <div class="row align-items-start">
            <div class="col">
                <img src="img/about.jpeg" alt="" style="width: 500px">
            </div>
            <div class="col">
                <h4 style="font-weight: bold; font-family: Calibri; text-align: left; margin-top:100px;">A FRENCH FLING</h4>
                <p style="font-family: Calibri; text-align: left;">La Lune French Bistro was born from a love of all things Paris. Our founder and chef Ingrid Correa spent three amazing years in the City of Love, training under the industry's best. She brought home everything she learned - the flavors, the feelings, the family-style cafe - so that you can get a taste of Paris, too.</p>
                <a href="" class="btn" style="margin-top: 30px; margin-right: 435px;">Book Now</a>
            </div>
            </div>
        </div>
    </section>


    <section id="menu" style="margin-top: 20px">

        <div class="container text-center" style="margin-top: 30px;">
        <div class="row align-items-start">
            <div class="col-4">
            <h3 style="font-weight: bold; font-size: 60px; text-align: left;">FLAVORS OF FRANCE</h3>
            <p style="text-align: left;">Paris is a melting pot, as our food can attest. Take <br>a bite and savor la vie délicieuse!</p>
            </div>
            @forelse ($blog as $post)
            <div class="col">
                <img src="{{ asset('/storage/blog/'.$post->image) }}" class="rounded" style="width: 170px">
                <p style="margin-top: 15px">{{ $post->title }} </p>
                <a href="{{ route('blog.show', $post->id) }}" class="btn btn-sm btn-dark mt-3">VIEW MENU </a>
            </div>
            
            @empty
            
        @endforelse

        </div>
        </div>
        <div style="margin-left: 77%">
        {{ $blog->links() }}
        </div>
    </section>




<section id="testimoni" style="background-color: black; margin-top: 100px;">
    <div class="container text-center" style="padding-top: 70px; padding-bottom: 70px;">
        <h3 style="font-weight: bold; color: white;">LOVE FOR LA LUNE</h3>
        <div class="row align-items-start" style="color: white; margin-top: 80px;">
          <div class="col" style="text-align: left;">
            <h5 style="font-weight: bold; padding-bottom: 5px;">Transported to Paris</h5>
            <p>One bite and I felt like I was back in <br>
                France. Chef Ingrid and her team have <br>
                outdone themselves!
                <br> <br>
                - Teddy, Entrepreneur</p>
          </div>
          <div class="col" style="text-align: left;">
            <h5 style="font-weight: bold; padding-bottom: 5px;">Lovely Bistro</h5>
            <p>The ambience was great - and the <br> food even better! Simple recipes done <br> well, with top-notch ingredients. Will <br> be back!

                
                <br> <br>
                - Dani, Mother</p>
          </div>
          <div class="col" style="text-align: left;">
            <h5 style="font-weight: bold; padding-bottom: 5px;">Transported to Paris</h5>
            <p>Eating here made me miss Paris so <br> much. What a treat! I will be bringing <br> my client meetings here. 

                                <br> <br>
                                - Carly, Entrepreneur</p>
          </div>
        </div>
      </div>
</section>

<section id="contact" style="margin-top: 0px">
    <div class="container" style="margin-top: 30px; background-color: white;">
    <div class="row align-items-start">
        <div class="col">
            <img src="img/contact.png" alt="">
        </div>
        <div class="col" style="margin-left: 50px">
        <h2 style="font-weight: bold;text-align: left; margin-top: 170px;">SEE YOU SOON</h2>
                <div style="margin-top: 100px">
                <h5 style="font-weight: bold"> PHONE NUMBER</h5>
                <p>+33 8229 - 2542 - 943</p>
            </div>
            <div style="margin-top: 50px">
                <h5 style="font-weight: bold">EMAIL ADDREAS</h5>
                <p>alfinanda18@gmail.com</p>
            </div>
            <div style="margin-top: 50px">
                <h5 style="font-weight: bold">RESTAURANT</h5>
                <p>123 Anywhere St. Any City, ST 12345</p>
            </div>
        </div>
    </div>
    </div>
</section>
    

    <footer>
        <div class="container">
            <p>&copy; 2023 Lagusa Food</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>
    