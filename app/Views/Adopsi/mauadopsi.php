<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<!--Start Banner-->

<div class="sub-banner" style="background-color: #60412b;">

    <img class="banner-img" src="<?= base_url(); ?>/images/adopsi/banner-adopsi.jpg" alt="">
    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h2 style="color: wheat;">Rawat Mereka</h2>
                        <!-- <hr style="box-sizing: border-box;"> -->
                        <p style="color:wheat">Jadikan mereka teman berbagimu, karena mereka tidak akan pernah
                            meninggalkanmu
                            sendiri</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!--End Banner-->

<!--Start Content-->
<div class="content">



    <div class="gallery">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <h2><span>3 Columns</span> Gallery</h2>
                        <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut
                            volutpat eros adipiscing nonummy.</p>
                    </div>
                </div>
            </div> -->


            <div class="row">
                <div class="main-gallery">
                    <?php foreach ($identitas_kucing as $i) : ?>
                    <div class="col-md-4">
                        <a class="gallery-sec fancybox photo-icon" href="<?= base_url(); ?>/Adopsi/<?= $i['slug']; ?>"
                            data-fancybox-group="gallery">
                            <div class="image-hover img-layer-slide-left-right">
                                <img src="<?= base_url(); ?>/images/adopsi/<?= $i['Foto']; ?>" alt="" width="400px"
                                    height="310px">
                                <div class="layer"> <i class="icon-image2"></i> </div>
                            </div>

                            <div class="detail">
                                <h6><?= $i['Nama_kucing']; ?></h6>
                                <span><?= $i['Domisili']; ?></span>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>





                    <div class="col-md-12">
                        <div class="paging">
                            <a href="#." class="selected">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>


</div>
<!--End Content-->

<?= $this->endSection(); ?>