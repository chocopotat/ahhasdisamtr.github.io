<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            overflow-x: hidden;
            background: var(--bgcolor);
            font-family: sans-serif;
            user-select: none;
            margin: 0;
            padding: 0;
        }

        #slider {
            position: absolute;
            width: 50%;
            top: 50%;
            right: 120px; /* Posisi di sebelah kanan */
            transform: translateY(-50%);
            width: 40%; /* Lebar slider yang diperkecil */
            height: auto; 
            height: 25vw;
            margin: 50px auto;
            transform-style: preserve-3d;
            font-family: helvetica , sans-serif;
            perspective: 1400px;
        
        }

        input[type="radio"]{
            position: relative;
            top: 108%;
            left: 50%;
            width: 18px;
            height: 18px;
            margin: 0 15px 0 0;
            transform: translateX(-83px);
            cursor: pointer;
            opacity: 0.4;
        }

        input[type="radio"]:nth-child(5){
            margin-right: 0px;
        }

        input[type="radio"]:checked{
            opacity: 1;
        }

        #slider label,
        #slider label img{
            display: flex;
            position: absolute;
            top: 0;
            left: 0;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            border-radius: 3px;
            color: white;
            font-size: 70px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 400ms ease;
        }

/* Slide Transitions */
#s1:checked~#slide1,
#s2:checked~#slide2,
#s3:checked~#slide3,
#s4:checked~#slide4,
#s5:checked~#slide5 {
    transform: translate3d(0%, 0, 0px);
    /* ... (other styles) ... */
}

/* Next Slide */
#s1:checked~#slide2,
#s2:checked~#slide3,
#s3:checked~#slide4,
#s4:checked~#slide5,
#s5:checked~#slide1 {
    transform: translate3d(20%, 0, -100px);
    /* ... (other styles) ... */
}

/* Previous Slide */
#s1:checked~#slide5,
#s2:checked~#slide1,
#s3:checked~#slide2,
#s4:checked~#slide3,
#s5:checked~#slide4 {
    transform: translate3d(20%, 0, -100px);
    /* ... (other styles) ... */
}

/* Next to Next Slide */
#s1:checked~#slide3,
#s2:checked~#slide4,
#s3:checked~#slide5,
#s4:checked~#slide1,
#s5:checked~#slide2 {
    transform: translate3d(20%, 0, -250px);
    /* ... (other styles) ... */
}

/* Previous to Previous Slide */
#s1:checked~#slide4,
#s2:checked~#slide5,
#s3:checked~#slide1,
#s4:checked~#slide2,
#s5:checked~#slide3 {
    transform: translate3d(20%, 0, -250px);
    /* ... (other styles) ... */
}

        
        a {
            text-decoration: none;
        }
        
        .hero {
            width: 100%;
            height: 100vh;
            background: url(img/bg.png);
            background-size: cover;
        }
        
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 100px;
        }
        
        .logo {
            max-height: 100px;
        }
        
        nav ul li {
            list-style: none;
            display: inline-block;
            padding: 10px 20px;
        }
        
        nav ul li a {
            color: #1d1d24;
            position: relative;
            padding: 5px 0;
        }
        
        nav ul li a:hover {
            color: #ee1b2e;
        }
        
        nav ul li a:after {
            content: "";
            position: absolute;
            left: 0;
            width: 0;
            height: 3px;
            background: #ee1b2e;
            transition: 0.3s;
            bottom: 0;
        }
        
        nav ul li a:hover:after {
            width: 100%;
        }
        
        .btn {
            color: #202020;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 16px 40px;
            border-radius: 500px;
            display: inline-block;
            font-weight: 500;
            transition: all 0.4s ease-in-out;
            background-size: 152% 100%;
            background: #ee1b2e;
            border: 2px solid #ee1b2e;
        }
        
        .btn:hover {
            background: transparent;
            border-color: #ee1b2e;
            color: #ee1b2e;
        }
        
        .content {
            position: absolute;
            top: 35%;
            left: 8%;
        }
        
        .content .title {
            color: #0a0a0a;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 4px;
            display: inline-block;
            margin-bottom: 20px;
            background: linear-gradient( 120deg, #1c99fe 20.69%, #7644ff 50.19%, #1f1f25 79.69%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .content h1 {
            color: #1f1f25;
            font-size: 50px;
            font-weight: 900;
            line-height: 90px;
            text-transform: inherit;
            width: 70%;
            ce
        }
        
        .content h1 span {
            color: #161314;
        }
        
        .content p {
            width: 55%;
            color: #202020;
            margin-top: 25px;
            margin-bottom: 30px;
        }
        
    </style>
    <meta charset="UTF-8" />
    <title>Ahhas Disa Motor</title>
    <!----CSS link----->
</head>

<body>
    <di class="hero">
        <nav>
            <ul>
                <li><a href="home.php">Beranda</a></li>
                <li><a href="booking_form.php">Booking</a></li>
                
            </ul>
        </nav>
        <div id="slider">
            <input type="radio" name="slider" id="s1" checked/>
            <input type="radio" name="slider" id="s2"/>
            <input type="radio" name="slider" id="s3"/>
            <input type="radio" name="slider" id="s4"/>
            <input type="radio" name="slider" id="s5"/>
        <label for="s1" id="slide1">
            <img src="logo.png" alt />
        </label>
        <label for="s2" id="slide2">
            <img src="image2.jpg" alt />
        </label>
        <label for="s3" id="slide3">
            <img src="image3.jpg" alt />
        </label>
        <label for="s4" id="slide4">
            <img src="image4.jpg" alt />
        </label>
        <label for="s5" id="slide5">
            <img src="image5.jpg" alt />
        </label>

    </div>

        <div class="content">
            <span class="title">Ahhas Disa Motor </span>
            <h1> <span>Service Booking Online </span></h1>
            <a href="booking_form.php" class="btn">Booking Sekarang</a>
            <p>
            <!-- tempat data base sama seperti home,news,tips,contact -->
            </p>
        </div>
    <script>
        const slider = document.getElementById('slider');
        const backButton = document.getElementById('backButton');

        slider.addEventListener('mouseover', () => {
            backButton.classList.add('show');
        });

        slider.addEventListener('mouseout', () => {
            backButton.classList.remove('show');
        });
        </script>
    </div>
</body>

</html>