<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<!-- Custom styles for this template -->
<link href="<?= base_url(); ?>/https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="<?= base_url(); ?>/blog.css" rel="stylesheet">

<!--Start Banner-->

<div class="sub-banner">

    <img class="banner-img" src="images/kittycare/interme-ow-banner.jpg" alt="">
    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="paging">
                        <h2>Intermezo with meow</h2>
                        <ul>
                            <li><a href="/home">Home</a></li>
                            <li><a href="/interme-ow">Interme-ow</a></li>
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
    <div class="procedures">
        <div class="container">

            <div class="row">
                <div class="col-md-4">

                    <div class="procedures-links">
                        <span class="title">Menu</span>
                        <ul id="procedures-links" class="accordion">
                            <li>
                                <div class="link">Artikel<i class="icon-chevron-down"></i></div>
                                <ul class="submenu">
                                    <li><a href="/artikel-home">10 Sifat dan Kepribadian Kucing Menurut Warna
                                            Bulunya</a></li>
                                    <li><a href="/artikel2">Perilaku Unik Kucing</a></li>
                                    <li><a href="/artikel3">Fakta Unik Kucing yang Jarang Diketahui Banyak Orang</a>
                                    </li>
                                    <li><a href="#">Trials Section Four</a></li>
                                    <li><a href="#">Trials Section Five</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="link">Tutorial<i class="icon-chevron-down"></i></div>
                                <ul class="submenu">
                                    <li><a href="/tutorial1">CARA MENGOBATI DAN MENCEGAH PENYAKIT KULIT PADA KUCING</a>
                                    </li>
                                    <li><a href="#">Cancer Center</a></li>
                                    <li><a href="#">Brain Cancer</a></li>
                                    <li><a href="#">Tumor Microenvironment</a></li>
                                    <li><a href="#">Breast Cancer</a></li>
                                    <li><a href="#">Childhood Cancers</a></li>
                                    <li><a href="#">Endocrine Cancers</a></li>
                                    <li><a href="#">Skin Cancer</a></li>
                                    <li><a href="#">Male Cancers</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="link">Tips&Trick<i class="icon-chevron-down"></i></div>
                                <ul class="submenu">
                                    <li><a href="#">Skin Care</a></li>
                                    <li><a href="#">Face Care</a></li>
                                    <li><a href="#">Hair Care</a></li>
                                    <li><a href="#">Health Care</a></li>
                                    <li><a href="#">Body Care</a></li>
                                    <li><a href="#">Arm Care</a></li>
                                    <li><a href="#">Chest Care</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>


                </div>



                <div class="col-md-8">

                    <div class="col-md-6">
                        <div class="serv-sec">
                            <img class="banner-img" src="images/service-two-img1.jpg" alt="">
                            <div class="detail">
                                <h5>Dental Implants</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur of adipiscing elit. Donec nec eros eget nisl
                                    fringilla commodo. Maecenas.</p>
                                <a href="#.">- Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="serv-sec">
                            <img class="banner-img" src="images/service-two-img4.jpg" alt="">
                            <div class="detail">
                                <h5>Heart Specialist</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur of adipiscing elit. Donec nec eros eget nisl
                                    fringilla commodo. Maecenas.</p>
                                <a href="#.">- Read More</a>
                            </div>
                        </div>
                    </div>
                    <br> <br>

                    <div class="col-md-6">
                        <div class="serv-sec">
                            <img class="banner-img" src="images/service-two-img5.jpg" alt="">
                            <div class="detail">
                                <h5>Laboratory Tests</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur of adipiscing elit. Donec nec eros eget nisl
                                    fringilla commodo. Maecenas.</p>
                                <a href="#.">- Read More</a>
                            </div>
                        </div>
                    </div>



                </div>



            </div>

        </div>
    </div>
</div>
<!--End Content-->


<?= $this->endSection(); ?>