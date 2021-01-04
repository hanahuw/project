<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<!--Start Banner-->

<div class="sub-banner">

    <img class="banner-img" src="images/gallery/banner2.jpg" alt="">
    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="paging">
                        <h2>Meows Update</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/meows-up">Meows-up</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!--End Banner-->

<!--Start Content-->
<div class="content">



    <div class="services-content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <h2>Mereka baik-baik saja</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="serv-sec">
                        <img class="banner-img" src="<?= base_url(); ?>/images/meowsup/Telon.jpg" alt="">
                        <div class="detail">
                            <h5>Telon</h5>
                            <p>Diadopsi tanggal: 20 September 2020.</p>
                            <p>Nama pengadopsi : Adelia</p>
                            <p>Domisili : Jakarta Timur</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="serv-sec">
                        <img class="banner-img" src="<?= base_url(); ?>/images/meowsup/geri dan bron.jpg" alt="">
                        <div class="detail">
                            <h5>Geri dan Bron</h5>
                            <p>Diadopsi tanggal: 30 November 2020.</p>
                            <p>Nama pengadopsi : Sayyid</p>
                            <p>Domisili : Jakarta Pusat</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="serv-sec">
                        <img class="banner-img" src="<?= base_url(); ?>/images/meowsup/Oleng.jpg" alt="">
                        <div class="detail">
                            <h5>Oleng</h5>
                            <p>Diadopsi tanggal: 16 Agustus 2020.</p>
                            <p>Nama pengadopsi : Nina</p>
                            <p>Domisili : Jakarta Utara</p>
                        </div>
                    </div>
                </div>


                <!-- <div class="col-md-4">
                    <div class="serv-sec">
                        <img class="banner-img" src="<?= base_url(); ?>/images/meowsup/Tata.jpg" alt="">
                        <div class="detail">
                            <h5>Tabi</h5>
                            <p>Diadopsi tanggal: 5 September 2020.</p>
                            <p>Nama pengadopsi : Amel</p>
                            <p>Domisili : Jakarta Pusat</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="serv-sec">
                        <img class="banner-img" src="<?= base_url(); ?>/images/meowsup/Yeli.jpg" alt="">
                        <div class="detail">
                            <h5>Tabi</h5>
                            <p>Diadopsi tanggal: 23 Oktober 2020.</p>
                            <p>Nama pengadopsi : Asep</p>
                            <p>Domisili : Bekasi</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="serv-sec">
                        <img class="banner-img" src="<?= base_url(); ?>/images/meowsup/Tabi.jpg" alt="">
                        <div class="detail">
                            <h5>Tabi</h5>
                            <p>Diadopsi tanggal: 2 Oktober 2020.</p>
                            <p>Nama pengadopsi : Windu</p>
                            <p>Domisili : Jakarta Pusat</p>
                        </div>
                    </div>
                </div> -->

            </div>


        </div>
    </div>


</div>
<!--End Content-->




<?= $this->endSection(); ?>