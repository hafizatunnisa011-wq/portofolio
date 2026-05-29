<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Portfolio Pija</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<link rel="stylesheet"
href="https://unpkg.com/aos@2.3.4/dist/aos.css">


   <style>


        html{
            scroll-behavior:smooth;
        }

        body{
            margin:0;
            font-family:Arial;
            background:#fff5f8;
        }

        /* BACKGROUND BLUR */

.blur1{
    position:absolute;
    width:350px;
    height:350px;
    background:#ff8fc7;
    border-radius:50%;
    filter:blur(140px);
    top:-100px;
    right:100px;
    z-index:-1;
}

.blur2{
    position:absolute;
    width:300px;
    height:300px;
    background:#ffb6d9;
    border-radius:50%;
    filter:blur(120px);
    bottom:100px;
    left:250px;
    z-index:-1;
}

        .sidebar{
            width:300px;
            height:100vh;
            background:linear-gradient(
                180deg,
                #ff7eb3,
                #ff4f9a
            );

            position:fixed;
            left:0;
            top:0;

            color:white;
            text-align:center;
            padding:30px;
        }

        .profile{
            width:180px;
            height:180px;
            border-radius:50%;
            object-fit:cover;
            border:5px solid white;
            margin-top:20px;
        }

        .sidebar h1{
            margin-top:20px;
            font-size:35px;
            font-weight:bold;
        }

        .sidebar h3{
            font-size:20px;
            font-weight:normal;
        }

        .menu{
            margin-top:40px;
        }

        .menu a{
            display:block;
            color:white;
            text-decoration:none;
            padding:12px;
            margin-bottom:10px;
            border-radius:10px;
            transition:0.3s;
        }

        .menu a:hover{
            background:white;
            color:#ff4f9a;
        }

        .content{
            margin-left:320px;
            padding:50px;
        }

        section{
            min-height:50vh;
            padding-top:50px;
        }

        .title{
            color:#ff4f9a;
            font-weight:bold;
            margin-bottom:20px;
        }

        .hero{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:50px;
        }

        .hero-text h1{
            font-size:70px;
            font-weight:bold;
        }

        .pink{
            color:#ff4f9a;
        }

        .btn-pink{
            background:#ff4f9a;
            color:white;
            padding:12px 25px;
            border-radius:10px;
            text-decoration:none;
            display:inline-block;
            margin-top:15px;
        }

        .btn-pink:hover{
            background:#ff2f87;
        }

        .card-custom{
            background:white;
            border-radius:20px;
            padding:30px;
            box-shadow:0 0 15px rgba(0,0,0,0.08);
            margin-bottom:20px;
        }

        .skill{
            margin-bottom:20px;
        }

        .project-card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
            transition:0.3s;
            cursor:pointer;
        }

        .project-card:hover{
            transform:translateY(-8px);
        }

        .project-card img{
            width:100%;
            height:220px;
            object-fit:cover;
        }

        .project-card .p-3{
            padding:20px;
        }

        .shadow{
            box-shadow:0 5px 15px rgba(0,0,0,0.15) !important;
        }

        .card-custom img{
            transition:0.3s;
        }

        .card-custom img:hover{
            transform:scale(1.02);
        }

        .contact-item{
            margin-bottom:15px;
            font-size:18px;
        }

        @media(max-width:768px){

            .sidebar{
                position:relative;
                width:100%;
                height:auto;
            }

            .content{
                margin-left:0;
            }

            .hero{
                flex-direction:column;
            }

            .hero-text h1{
                font-size:45px;
            }

        }

        /* HERO */

.hero{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:40px;
    position:relative;
}

/* FOTO GANTUNG */
/* AREA FOTO */

.photos-area{
    position:relative;
    width:300px;
    height:450px;
}





/* FOTO GANTUNG */

.hanging-photo{
    position:absolute;
    animation:swing 4s ease-in-out infinite;
    transform-origin:top center;
}





/* FOTO PERTAMA */

.photo-1{
    top:0;
    left:0;
}





/* FOTO KEDUA */

.photo-2{
    top:80px;
    right:0;

    animation-delay:1s;
}





/* TALI */

.rope{

    width:4px;
    height:120px;

    background:
    linear-gradient(
        180deg,
        #ffb3d1,
        #ff4f9a,
        #ffb3d1
    );

    border-radius:20px;

    margin:auto;

}





/* TALI LEBIH PANJANG */

.rope-long{
    height:180px;
}





/* FOTO */

.photo-gantung{

    width:170px;
    height:170px;

    border-radius:25px;

    object-fit:cover;

    border:7px solid white;

    box-shadow:
        0 15px 30px rgba(0,0,0,0.15);

    transition:0.4s;

}





.photo-gantung:hover{

    transform:
        scale(1.05)
        rotate(4deg);

}


/* COMPUTER IMAGE */

.computer-img img{
    animation:float 4s ease-in-out infinite;
}

/* FLOAT */

@keyframes float{

    0%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-15px);
    }

    100%{
        transform:translateY(0);
    }

}

/* ANIMASI AYUN */

@keyframes swing{

    0%{
        transform:rotate(5deg);
    }

    50%{
        transform:rotate(-5deg);
    }

    100%{
        transform:rotate(5deg);
    }

}

/* PAKU PINK */

.pin{

    width:22px;
    height:22px;

    background:
    radial-gradient(
        circle at top left,
        #ffd6e8,
        #ff4f9a
    );

    border-radius:50%;

    margin:auto;

    position:relative;

    z-index:10;

    box-shadow:
        0 3px 10px rgba(255,79,154,0.35);

}





/* EFEK TENGAH PAKU */

.pin::after{

    content:"";

    width:7px;
    height:7px;

    background:#fff;

    border-radius:50%;

    position:absolute;

    top:50%;
    left:50%;

    transform:
        translate(-50%,-50%);

}





@keyframes butterflyFly{

    0%{

        transform:
        rotate(-8deg)
        scale(1);

    }

    100%{

        transform:
        rotate(8deg)
        scale(1.08);

    }

}

    </style>

</head>

<body>

<!-- BLUR BACKGROUND -->

<div class="blur1"></div>
<div class="blur2"></div>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <img src="{{ asset('assets/img/foto.jpeg') }}"
             class="profile">

        <h1>Hafizatunnisa</h1>

        <h3>Web Developer</h3>

        <div class="menu">

            <a href="#home">
                <i class="fa fa-house"></i>
                Home
            </a>

            <a href="#about">
                <i class="fa fa-user"></i>
                About
            </a>

            <a href="#skills">
                <i class="fa fa-code"></i>
                Skills
            </a>

            <a href="#project">
                <i class="fa fa-briefcase"></i>
                Project & Jurnal
            </a>

            <a href="#contact">
                <i class="fa fa-envelope"></i>
                Contact
            </a>

        </div>

    </div>





    <!-- CONTENT -->

    <div class="content">

        <!-- HOME -->

       <!-- HOME -->

<section id="home" data-aos="fade-up">

    <div class="hero">

        <!-- TEXT -->

        <div class="hero-text">

            <h2>Halo 👋</h2>

            <h1>
                Saya
                <span class="pink">
                    Hafizatunnisa
                </span>
            </h1>

            <h3>
                Mahasiswa Teknik Informatika
            </h3>

            <p>
                Saya tertarik pada web development,
                UI/UX, dan desain website modern.
            </p>

            <a href="#project"
               class="btn-pink">

                Lihat Project

            </a>

        </div>



       <!-- FOTO GANTUNG -->

<div class="photos-area">

    <!-- FOTO 1 -->

    <div class="hanging-photo photo-1">

<div class="pin"></div>

<div class="rope"></div>

        <img src="{{ asset('assets/img/fotogantung1.jpeg') }}"
             class="photo-gantung">

    </div>





    <!-- FOTO 2 -->

    <div class="hanging-photo photo-2">
<div class="pin"></div>
<div class="rope rope-long"></div>

        <img src="{{ asset('assets/img/fotogantung2.jpeg') }}"
             class="photo-gantung">

    </div>

</div>

        <!-- GAMBAR COMPUTER -->

        <div class="computer-img">

            <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png"
                 width="320">

        </div>

    </div>

</section>

        <!-- ABOUT -->

        <section id="about" data-aos="fade-up">

            <h2 class="title">
                Tentang Saya
            </h2>

            <div class="card-custom">

                <p>
                    Halo, nama saya Hafizatunnisa,
                    namun biasa dipanggil 'Pija'.
                    Saya merupakan mahasiswa Teknik Informatika
                    Universitas Malikussaleh yang memiliki minat
                    besar dalam dunia teknologi, khususnya pada
                    bidang web development dan desain antarmuka website.
                </p>

                <p>
                    Saya senang mempelajari hal-hal baru dan terus
                    mencoba mengembangkan kemampuan saya dalam
                    membuat website yang modern, responsif,
                    dan nyaman digunakan oleh pengguna.
                </p>

                <p>
                    Selain belajar coding, saya juga tertarik
                    pada desain visual dan UI/UX karena menurut saya
                    tampilan website yang menarik dapat memberikan
                    pengalaman yang lebih baik bagi pengguna.
                </p>

                <p>
                    Saat ini saya sedang fokus mempelajari HTML,
                    CSS, PHP, Laravel, dan database MySQL untuk
                    mengembangkan berbagai project website sederhana.
                    Saya juga senang bekerja secara mandiri maupun
                    bersama tim dalam menyelesaikan suatu project.
                </p>

                <p>
                    Melalui portfolio ini, saya ingin menunjukkan
                    beberapa hasil pembelajaran dan project yang
                    pernah saya buat selama proses belajar di dunia
                    teknologi informasi.
                </p>

                <div class="row mt-4">

                    <div class="col-md-6">

                        <p>
                            <b>Nama :</b>
                            Hafizatunnisa
                        </p>

                        <p>
                            <b>Email :</b>
                            hafizatu.nnisa011@gmail.com
                        </p>

                    </div>

                    <div class="col-md-6">

                        <p>
                            <b>Lokasi :</b>
                            Aceh, Indonesia
                        </p>

                        <p>
                            <b>Status :</b>
                            Mahasiswa
                        </p>

                    </div>

                </div>

            </div>

        </section>





        <!-- SKILLS -->

        <section id="skills" data-aos="fade-up">

            <h2 class="title">
                Skills
            </h2>

            <div class="card-custom">

                <div class="skill">

                    <p>HTML</p>

                    <div class="progress">

                        <div class="progress-bar bg-danger"
                             style="width:95%">
                        </div>

                    </div>

                </div>

                <div class="skill">

                    <p>CSS</p>

                    <div class="progress">

                        <div class="progress-bar bg-info"
                             style="width:90%">
                        </div>

                    </div>

                </div>

                <div class="skill">

                    <p>PHP</p>

                    <div class="progress">

                        <div class="progress-bar bg-warning"
                             style="width:80%">
                        </div>

                    </div>

                </div>

                <div class="skill">

                    <p>Laravel</p>

                    <div class="progress">

                        <div class="progress-bar"
                             style="width:85%; background:#ff4f9a;">
                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- PROJECT -->

<section id="project" data-aos="fade-up">

    <h2 class="title">
        Project & Jurnal
    </h2>

    <div class="row">

        <div class="col-md-5">

            <a href="/resto"
               style="text-decoration:none;color:black;">

                <div class="project-card">

                    <img src="{{ asset('assets/img/resto-cover.jpeg') }}">

                    <div class="p-3">

                        <h4>
                            Website Reservasi Restoran
                        </h4>

                        <p>
                            Website reservasi restoran
                            berbasis Laravel dengan
                            dashboard admin.
                        </p>

                    </div>

                </div>

            </a>

        </div>
 <!-- PROJECT JURNAL -->

<div class="col-md-5 mt-4">

    <a href=" https://doi.org/10.62671/jikum.v2i1.174"
       target="_blank"
       style="text-decoration:none;color:black;">

        <div class="project-card">


            <div class="p-3">

                <h4>
                    Analisis Keamanan Data Pengguna pada Platform E-commerce: Studi Kasus Kebocoran Data Tokopedia 2020
                </h4>

                <p>
                    Penelitian mengenai usability
                    dan pengalaman pengguna
                    pada aplikasi Wattpad.
                </p>

                <p>
                    <b>Role :</b>
                    Co-Author
                </p>

                <p>
                    <b>Tahun :</b>
                    2025
                </p>

            </div>

        </div>

    </a>

</div>
    </div>

</section>



        <!-- CONTACT -->

<section id="contact" data-aos="fade-up">

    <h2 class="title">
        Contact
    </h2>
<div class="card-custom">

    <div class="row">

        <!-- KIRI -->

        <div class="col-md-6">

            <!-- EMAIL -->

            <div class="contact-item">

                <a href="mailto:hafizatu.nnisa011@gmail.com"
                   style="text-decoration:none;color:black;">

                    <i class="fa fa-envelope pink"></i>

                    hafizatu.nnisa011@gmail.com

                </a>

            </div>





            <!-- WHATSAPP -->

            <div class="contact-item">

                <a href="https://wa.me/6282277802230"
                   target="_blank"
                   style="text-decoration:none;color:black;">

                    <i class="fa-brands fa-whatsapp pink"></i>

                    082277802230

                </a>

            </div>

        </div>





        <!-- KANAN -->

        <div class="col-md-6">

            <!-- INSTAGRAM -->

            <div class="contact-item">

                <a href="https://instagram.com/hafizatunnsa_"
                   target="_blank"
                   style="text-decoration:none;color:black;">

                    <i class="fa-brands fa-instagram pink"></i>

                    @hafizatunnsa_

                </a>

            </div>





            <!-- LINKEDIN -->

            <div class="contact-item">

                <a href="https://www.linkedin.com/in/hafizatunnisa-92b14840b?utm_source=share_via&utm_content=profile&utm_medium=member_android"
                   target="_blank"
                   style="text-decoration:none;color:black;">

                    <i class="fa-brands fa-linkedin pink"></i>

                    Hafizatunnisa.

                </a>

            </div>

        </div>

    </div>

</div>

    </div>

</section>

    </div>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>

AOS.init({

    duration:1200,
    once:true,

});

</script>

</body>
</html>