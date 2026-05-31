<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Portfolio Hafizatunnisa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>

html{
    scroll-behavior:smooth;
}

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:#fff7fb;
    overflow-x:hidden;
}

/* BACKGROUND */

.blur1{
    position:fixed;
    width:400px;
    height:400px;
    background:#ffb3d1;
    border-radius:50%;
    filter:blur(180px);
    top:-100px;
    right:-100px;
    z-index:-1;
}

.blur2{
    position:fixed;
    width:350px;
    height:350px;
    background:#ffd6e8;
    border-radius:50%;
    filter:blur(160px);
    bottom:-100px;
    left:-100px;
    z-index:-1;
}

/* NAVBAR */

.navbar-custom{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:75px;

    background:rgba(255,255,255,.92);
    backdrop-filter:blur(10px);

    display:flex;
    align-items:center;
    justify-content:space-between;

    padding:0 60px;

    z-index:9999;
}

.logo{
    color:#ff4f9a;
    font-size:26px;
    font-weight:700;
}

.nav-menu{
    display:flex;
    gap:30px;
}

.nav-menu a{
    position:relative;
    text-decoration:none;
    color:#444;
    font-weight:600;
    transition:.3s;
}

.nav-menu a:hover{
    color:#ff4f9a;
}
.nav-menu a.active{
    color:#ff4f9a;
}

.nav-menu a.active::after{
    width:100%;
}

.nav-menu a::after{
    content:'';
    position:absolute;
    left:0;
    bottom:-5px;
    width:0;
    height:2px;
    background:#ff4f9a;
    transition:.3s;
}

.nav-menu a:hover::after{
    width:100%;
}

/* CONTENT */

.content{
    max-width:1200px;
    margin:auto;
    padding:70px 40px 50px;
}
/* HERO */

.hero-modern{
    min-height:65vh;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:20px;
}

.hero-photo img{
    width:220px;
    height:220px;
    object-fit:cover;

    border-radius:30px;

    border:7px solid white;

    box-shadow:0 15px 35px rgba(0,0,0,.12);
}

.hero-text h1{
    font-size:52px;
}

.hero-label{
    color:#ff4f9a;
    font-weight:700;
    letter-spacing:2px;
}

.hero-text h1{
    font-size:58px;
    font-weight:800;
    line-height:1.1;
    margin-top:15px;
}

.hero-text p{
    color:#555;
    max-width:550px;
    font-size:17px;
    margin-top:15px;
}

.pink{
    color:#ff4f9a;
}

.hero-btns{
    display:flex;
    gap:15px;
    margin-top:25px;
}

.btn-pink{
    background:#ff4f9a;
    color:white;
    text-decoration:none;
    padding:12px 25px;
    border-radius:12px;
    transition:.3s;
    box-shadow:0 8px 20px rgba(255,79,154,.25);
}


.btn-pink:hover{
    background:#ff2e85;
    color:white;
     transform:translateY(-2px);
}

.btn-outline{
    border:2px solid #ff4f9a;
    color:#ff4f9a;
    text-decoration:none;
    padding:12px 25px;
    border-radius:12px;
    transition:.3s;
}

.btn-outline:hover{
    background:#ff4f9a;
    color:white;
}

.hero-right{
    flex:1;
    display:flex;
    justify-content:flex-start;
    align-items:center;
    margin-left:-180px;
}

.computer-img{
    width:420px;
    max-width:100%;
}


.title{
    color:#ff4f9a;
    font-weight:700;
    margin-bottom:20px;
}

.card-custom{
    background:white;
    border-radius:25px;
    padding:30px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    margin-bottom:20px;
}

@media(max-width:991px){

    .navbar-custom{
        padding:0 20px;
    }

    .content{
        padding:100px 20px;
    }

    .hero-modern{
        flex-direction:column;
        text-align:center;
    }

    .hero-text h1{
        font-size:40px;
    }

    .hero-photo img{
        width:180px;
        height:180px;
    }

    .computer-img{
        width:280px;
    }

    .nav-menu{
        gap:15px;
        font-size:14px;
    }
    }

/* PROJECT */

.project-card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
    transition:.3s;
    height:100%;
}

.project-card:hover{
    transform:translateY(-8px);
}

.project-card img{
    width:100%;
    height:220px;
    object-fit:cover;
    display:block;
}

.project-card .p-4,
.project-card .p-3{
    padding:25px;
}

.project-card h4{
    font-size:24px;
    margin-bottom:15px;
}

.project-card p{
    color:#555;
    line-height:1.7;
}

/* SECTION */

section{
    padding-top:40px;
    padding-bottom:20px;
}

/* SKILL */

.progress{
    height:12px;
    border-radius:20px;
    overflow:hidden;
}

.progress-bar{
    border-radius:20px;
}

/* CONTACT */

.contact-item{
    margin-bottom:15px;
}

.contact-item a{
    text-decoration:none;
    color:#333;
    transition:.3s;
}

.contact-item a:hover{
    color:#ff4f9a;

}

</style>
</head>

<body>

<div class="blur1"></div>
<div class="blur2"></div>

<nav class="navbar-custom">

    <div class="logo">
        pija
    </div>

    <div class="nav-menu">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#project">Project</a>
        <a href="#contact">contact</a>
    </div>

</nav>

<div class="content">

<section id="home" data-aos="fade-up">

    <div class="hero-modern">

        <div class="hero-photo">
            <img src="{{ asset('assets/img/foto.jpeg') }}">
        </div>

        <div class="hero-text">

            <span class="hero-label">
                WEB DEVELOPER
            </span>

            <h1>
                Halo, Saya
                <span class="pink">
                    Hafizatunnisa
                </span>
            </h1>

            <p>
                Mahasiswa Teknik Informatika yang memiliki minat
                pada Web Development, UI/UX Design, Laravel,
                PHP, dan MySQL.
            </p>

            <div class="hero-btns">

                <a href="#project" class="btn-pink">
                    Lihat Project
                </a>

                <a href="#contact" class="btn-outline">
                    Hubungi Saya
                </a>

            </div>

        </div>

        <div class="hero-right">

            <img
                src="{{ asset('assets/img/computer.png') }}"
                class="computer-img">

        </div>

    </div>

</section>

<section id="about" data-aos="fade-up">
    <h2 class="title">About</h2>

<div class="card-custom">

     <p>Halo, nama saya Hafizatunnisa, namun biasa dipanggil 'Pija'. Saya merupakan mahasiswa Teknik Informatika Universitas Malikussaleh yang memiliki minat besar dalam dunia teknologi, khususnya pada bidang web development dan desain antarmuka website.</p>
                <p>Saya senang mempelajari hal-hal baru dan terus mencoba mengembangkan kemampuan saya dalam membuat website yang modern, responsif, dan nyaman digunakan oleh pengguna.</p>
                <p>Selain belajar coding, saya juga tertarik pada desain visual dan UI/UX karena menurut saya tampilan website yang menarik dapat memberikan pengalaman yang lebih baik bagi pengguna.</p>
                <p>Saat ini saya sedang fokus mempelajari HTML, CSS, PHP, Laravel, dan database MySQL untuk mengembangkan berbagai project website sederhana. Saya juga senang bekerja secara mandiri maupun bersama tim dalam menyelesaikan suatu project.</p>
                <p>Melalui portfolio ini, saya ingin menunjukkan beberapa hasil pembelajaran dan project yang pernah saya buat selama proses belajar di dunia teknologi informasi.</p>

    <div class="row mt-4">

        <div class="col-md-6">
            <p><b>Nama :</b> Hafizatunnisa</p>
            <p><b>Status :</b> Mahasiswa</p>
        </div>

        <div class="col-md-6">
            <p><b>Lokasi :</b> Aceh, Indonesia</p>
            <p><b>Email :</b> hafizatu.nnisa011@gmail.com</p>
        </div>

    </div>

</div>

</section>


<!-- SKILLS -->

<section id="skills" data-aos="fade-up">

<h2 class="title">Skills</h2>

<div class="card-custom">

    <div class="mb-4">
        <label class="mb-2">HTML</label>

        <div class="progress">
            <div
                class="progress-bar bg-danger"
                style="width:95%">
            </div>
        </div>
    </div>

    <div class="mb-4">
        <label class="mb-2">CSS</label>

        <div class="progress">
            <div
                class="progress-bar bg-info"
                style="width:90%">
            </div>
        </div>
    </div>

    <div class="mb-4">
        <label class="mb-2">PHP</label>

        <div class="progress">
            <div
                class="progress-bar bg-warning"
                style="width:80%">
            </div>
        </div>
    </div>

    <div class="mb-4">
        <label class="mb-2">Laravel</label>

        <div class="progress">
            <div
                class="progress-bar"
                style="
                width:85%;
                background:#ff4f9a;">
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

    <div class="col-lg-6 mb-4">

        <a
        href="/resto"
        style="
        text-decoration:none;
        color:black;">

            <div class="project-card">

                <img
                src="{{ asset('assets/img/resto-cover.jpeg') }}">

                <div class="p-4">

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

    <div class="col-lg-6 mb-4">

        <a
        href="https://doi.org/10.62671/jikum.v2i1.174"
        target="_blank"
        style="
        text-decoration:none;
        color:black;">

            <div class="project-card">

                <div class="p-4">

                    <h4>
                        Analisis Keamanan Data Pengguna
                        pada Platform E-Commerce
                    </h4>

                    <p>
                        Studi kasus kebocoran data
                        Tokopedia tahun 2020.
                    </p>

                    <p>
                        <b>Role :</b> Co-Author
                    </p>

                    <p>
                        <b>Tahun :</b> 2025
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

        <div class="col-md-6">

            <div class="mb-3">

                <a
                href="mailto:hafizatu.nnisa011@gmail.com"
                style="
                text-decoration:none;
                color:black;">

                    <i class="fa fa-envelope pink"></i>

                    hafizatu.nnisa011@gmail.com

                </a>

            </div>

            <div class="mb-3">

                <a
                href="https://wa.me/6282277802230"
                target="_blank"
                style="
                text-decoration:none;
                color:black;">

                    <i class="fa-brands fa-whatsapp pink"></i>

                    082277802230

                </a>

            </div>

        </div>

        <div class="col-md-6">

            <div class="mb-3">

                <a
                href="https://instagram.com/hafizatunnsa_"
                target="_blank"
                style="
                text-decoration:none;
                color:black;">

                    <i class="fa-brands fa-instagram pink"></i>

                    @hafizatunnsa_

                </a>

            </div>

            <div class="mb-3">

                <a
                href="https://www.linkedin.com/in/hafizatunnisa-92b14840b"
                target="_blank"
                style="
                text-decoration:none;
                color:black;">

                    <i class="fa-brands fa-linkedin pink"></i>

                    Hafizatunnisa

                </a>

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
    once:true
});
</script>

</body>
</html>