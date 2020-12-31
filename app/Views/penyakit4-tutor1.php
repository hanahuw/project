<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<!--Start Navbar-->

<div id="header-2">

    <header class="header header2">
        <div class="container">


            <div class="row">

                <div class="col-md-3">
                    <a href="/" class="logo"><img src="images/kittycare/home5.png"></a>

                </div>


                <div class="col-md-9">


                    <nav class="menu-2">
                        <ul class="nav wtf-menu">
                            <li><a href="#.">Adopsi</a>
                                <ul class="submenu">
                                    <li> <a href="/mau-adopsi">Mau Adopsi</a> </li>
                                    <li> <a href="index2.html">Cari pengadopsi</a> </li>
                                </ul>
                            </li>

                            <li class="parent"><a href="/meows-up">Meows-up</a>
                            </li>

                            <li class="item-select parent"><a href="/interme-ow">Interme-ow</a>
                            </li>

                            <li><a href="/donasi">Donasi</a></li>

                            <li class="parent"><a href="#.">Petcare</a>

                                <ul class="submenu">

                                    <li class="parent"> <a href="#">Pet shop</a> <i class="icon-chevron-small-right"></i>
                                        <ul class="submenu">
                                            <li> <a href="/petshop-jp">Jakarta Pusat</a> </li>
                                            <li> <a href="/petshop-jt">Jakarta Timur</a> </li>
                                            <li> <a href="/petshop-jb">Jakarta Barat</a> </li>
                                            <li> <a href="/petshop-ju">Jakarta Utara</a> </li>
                                            <li> <a href="/petshop-js">Jakarta Selatan</a> </li>
                                            <li> <a href="/petshop-bk">Bekasi</a> </li>
                                        </ul>
                                    </li>

                                    <li class="parent"> <a href="#">Pet klinik</a> <i class="icon-chevron-small-right"></i>
                                        <ul class="submenu">
                                            <li> <a href="/petklinik-jp">Jakarta Pusat</a> </li>
                                            <li> <a href="/petklinik-jt">Jakarta Timur</a> </li>
                                            <li> <a href="/petklinik-jb">Jakarta Barat</a> </li>
                                            <li> <a href="/petklinik-ju">Jakarta Utara</a> </li>
                                            <li> <a href="/petklinik-js">Jakarta Selatan</a> </li>
                                            <li> <a href="/petklinik-bk">Bekasi</a> </li>
                                        </ul>
                                    </li>

                                </ul>

                            </li>

                            <li class="parent"><a href="#."><i class="icon-user"></i></a>
                                <ul class="submenu">
                                    <li> <a href="index.html">Profile</a> </li>
                                    <li> <a href="index2.html">Pengaturan</a> </li>
                                    <li> <a href="index2.html">Keluar</a> </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>

                </div>

            </div>


        </div>
    </header>
</div>

<!--End Navbar-->

<!--Start Banner-->

<div class="sub-banner">

    <img class="banner-img" src="images/kittycare/tutorial-banner.jpg" alt="">
    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="paging">
                        <h2>Intermezo with meow</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/interme-ow">Interme-ow</a></li>
                            <li><a>Tutorial</a></li>
                            <li><a href="/tutorial1">CARA MENGOBATI DAN MENCEGAH PENYAKIT KULIT PADA KUCING</a></li>
                            <li><a>JERAWAT KUCING</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!--End Banner-->

<div class="welcome-two">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="main-title">
                    <h4>PENYAKIT KULIT JERAWAT KUCING</h4><br>
                </div>
            </div>
        </div>

        <div class="welcome-detail">
            <div class="row">

                <div class="col-md-3">
                    <img src="images/tutorial1/jerawat.jpg" alt="">
                </div>

                <div class="col-md-9">
                    <div class="detail">

                        <p>
                            Jerawat biasanya muncul di dan di sekitar dagu kucing.
                            Kemungkinan penyebab termasuk stres, jarang dibersihkan, reaksi terhadap obat, atau masalah kulit.
                            Dokter hewan teman-teman dapat merekomendasikan shampoo khusus atau gel untuk membersihkan Jerawat,
                            atau antibiotik jika infeksi bakteri menyertai jerawat.
                            <br>
                            <br>
                            Pengobatan Penyakit Kucing Jerawat :
                            Bersihkan kerak yang terbentuk dengan Minyak Tawon atau Virgin Coconut Oil (VCO),
                            setelah bersih oleskan Pro polis.
                            <br>
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?= $this->endSection(); ?>