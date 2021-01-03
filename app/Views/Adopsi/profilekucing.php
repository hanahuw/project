<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>
<!--Start Content-->
<div class="content">


    <!--Start Team Detail-->
    <div class="member-detail">
        <div class="container">

            <div class="row">
                <div class="col">
                    <a href="<?= base_url(); ?>/mauadopsi">Kembali</a>
                </div>

            </div>


            <div class="row">


                <div class="col-md-5">
                    <img src="<?= base_url(); ?>/images/adopsi/<?= $identitas_kucing['Foto']; ?>" alt="">
                </div>

                <div class="col-md-7">
                    <div class="team-detail">

                        <div class="name">
                            <h4>Hallo, Kenalan yuk!</h4>
                            <!-- <span>Outpatient Surgery</span> -->
                        </div>

                        <ul>
                            <li><span class="title">Nama</span>
                                <span><?= $identitas_kucing['Nama_kucing']; ?></span>
                            </li>
                            <li><span class="title">Domisili</span>
                                <span><?= $identitas_kucing['Domisili']; ?></span>
                            </li>
                            <li><span class="title">Jenis Kelamin</span>
                                <span><?= $identitas_kucing['Gender']; ?></span>
                            </li>
                            <li><span class="title">Ras</span>
                                <span><?= $identitas_kucing['Jenis_Kucing']; ?></span>
                            </li>
                            <li><span class="title">Perkiraan Umur</span>
                                <span><?= $identitas_kucing['Perkiraan_Umur']; ?></span>
                            </li>
                            <li><span class="title">Deskripsi</span>
                                <span><?= $identitas_kucing['Deskripsi']; ?></span>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>

        </div>
    </div>
    <!--End Team Detail-->


</div>
<!--End Content-->
<?= $this->endSection(); ?>