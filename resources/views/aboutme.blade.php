<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E1337Kq - O meni</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        /* Html, Body
 ------------------------------------------------------ */

        html,body {
            background: #660066;  /* za zastarjele pretrazivace */
            background: -webkit-linear-gradient(to right, #ff0000, #660066);
            background: linear-gradient(to right, #ff0000, #660066);
            color: #636b6f;

            font-weight: 200;
            height: 100vh;
            margin: 0px;
            padding: 0px;
            font-family: 'Poppins', sans-serif;
        }

        /* ------------------------------------------------------ */





        /* Colors-For-Text and Background
        ------------------------------------------------------ */

        .text-color-highlighted {
            color: #17c6c0;
        }

        .text-color-normal {
            color: white;
        }

        .bg-color-normal {
            background-color: #ffffff;
        }

        .text-bold-900 {
            font-weight: 900;
        }


        /* ------------------------------------------------------ */




        /* Button Style
        ------------------------------------------------------ */

        .My-Button {
            background-color: white;
            color: #212529;
            border: #212529 solid 0.5px;
            border-radius: 0px;
        }

        .My-Button-see-live {
            background-color: #212529;
            color: white;
            border: #212529 solid 0.5px;
            border-radius: 0px;
        }

        .My-Button-special {
            background-color: #17c3b7;
            color: white;
            border: #17c3b7 solid 0.5px;
            border-radius: 0px;
        }


        .My-Button:hover,
        .My-button:active {
            background-color: #212529;
            color: white;
            border: #212529 solid 0.5px;
            border-radius: 0px;
        }

        .My-Button-see-live:hover,
        .My-Button-see-live:active {
            background-color: #212529;
            color: white;
            border: #212529 solid 0.5px;
            border-radius: 0px;
        }

        .My-Button-special:hover,
        .My-Button-see-live:active {
            background-color: #1b857e;
            color: white;
            border: #1b8571 solid 0.5px;
            border-radius: 0px;
        }
        /* ------------------------------------------------------ */






        /* Hiding stuff
        ------------------------------------------------------ */

        a,a:hover {
            text-decoration: none;
            color: inherit;
        }

        .hide-overflow {
            overflow-x: hidden;
        }

        /* ------------------------------------------------------ */






        /* Font-size
        ------------------------------------------------------ */

        .font-size-40 {
            font-size: 40px;
        }


        /* ------------------------------------------------------ */





        /* Body-Head-1 Css
        ------------------------------------------------------ */

        .Body-Head-1 {
            height: 100vh;
            text-align: center;
        }

        .Body-Head-1-Inside {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .py-3{
            color: #17c6c0;
        }

        /* ------------------------------------------------------ */
    </style>
</head>
<body>
<div class="container Body-Head-1">
    <div class="Body-Head-1-Inside">
        <h1 class="text-bold-900 display-5 text-color-normal mb-3 animate__animated animate__fadeIn">Želiš da znaš, <span
                class="text-color-highlighted"> ko sam ja?</span></h1>
        <button class="btn btn-info"> <a target="_blank" href="https://www.linkedin.com/in/eldin-kurpejovi%C4%87-3444b9109/">Curriculum Vitae</a> </button>
    </div>
</div>

<div class="container" data-aos="fade-in" data-aos-offset="200" data-aos-duration="1000"
     data-aos-easing="ease-in-out">
    <div class="text-center">
        <h2 class="pt-3 pb-2 text-color-normal">O<span class="text-bold-900"> MENI</span></h2>
        <p class="py-3">Zaljubljenik u tehnologiju, prirodu i dizajn. Osoba sa nepoznatim brojem hobija, a neki od njih su planinarenje, kampovanje, fotografija, kajaking...</p>
    </div>
</div>


<!-- Projects Section ---------- To showcase your projects -->
<div class="container mt-5 py-5 hide-overflow">


    <div data-aos="fade-in" data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
         class="text-center py-3">
        <h2 class="pt-3 pb-2 text-color-normal">MOJE <span class="text-bold-900">FOTOGRAFIJE</span></h2>
    </div>


    <div data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
         class="row my-5 justify-content-center">
        <div class="col-lg-4 col-md-5 order-1">
            <img src="https://i.ibb.co/Dps1xq7/2.png" class="w-100" alt="Responsive image">
        </div>
        <div class="col-lg-6 col-md-7 col-sm-12 align-self-center py-3 pt-md-0 px-3 order-12">
            <div class="card-block px-3">
                <h4 class="card-title">Rožaje, Štedim 2018</h4>
                <p class="card-text">Fotografija nastala na jednom od mnogobrojnih kampovanja sa prijateljima.</p>
                <button class="My-Button btn mx-2"><a target="_blank" href="https://www.instagram.com/p/BmY2kl-n8W0/">Pogledaj fotografiju</a> </button>
            </div>
        </div>
    </div>

    <div data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
         class="row my-5 justify-content-center">
        <div class="col-lg-6 col-md-7  col-sm-12 align-self-center pt-3 py-3 pt-md-0 px-3 order-md-1 order-12">
            <div class="card-block px-3">
                <h4 class="card-title">Gusinje, Prokletije 2020</h4>
                <p class="card-text">Fotografija nastala prilikom pohoda Zijova staza 2020.godine. </p>
                <button class="My-Button btn mx-2"><a target="_blank" href="https://www.instagram.com/p/CA-HHbvJVHv/">Pogledaj fotografiju</a>
                </button>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 order-md-12 order-1">
            <img src="https://i.ibb.co/ysZhW5Z/3.png" class="w-100" alt="Responsive image">
        </div>
    </div>

    <div data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
         class="row my-5 justify-content-center">
        <div class="col-lg-4 col-md-5 order-1">
            <img src="https://i.ibb.co/vLS5dpx/4.png" class="w-100" alt="Responsive image">
        </div>
        <div class="col-lg-6 col-md-7 col-sm-12 align-self-center py-3 pt-md-0 px-3 order-12">
            <div class="card-block px-3">
                <h4 class="card-title">Rožaje, Vodopadi Grlja 2019</h4>
                <p class="card-text">Fotografija nastala prilikom markiranja staze do vodopada Grlja.</p>
                <button class="My-Button btn mx-2"><a target="_blank" href="https://www.instagram.com/p/BmGazfSBs1K/">Pogledaj fotografiju</a>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Ending Project Section -->

<div class="container-fluid mt-5 pt-5 pb-2" style=" background-color: #212529;color: white;">
    <div class="mt-5 text-center">
        <small>COPYRIGHT <i class="far fa-copyright"></i> E1337Kq 2020</small>
    </div>
</div>



<script src="https://kit.fontawesome.com/733c06764a.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
