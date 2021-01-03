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
                        <h2>Rawat Aku</h2>
                        <!-- <hr style="box-sizing: border-box;"> -->
                        <p style="color:#60412b">Jadikan aku teman berbagimu, karena aku tidak akan pernah
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


    <div class="main-appointment-form">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="main-title text-center">
                        <h2><span>Make an</span> Appointment</h2>
                        <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut
                            volutpat eros adipiscing nonummy.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="icon-center">
            <div class="appoint-icon">
                <i class="icon-pencil"></i>
            </div>
        </div>

        <div class="appointment-form">
            <!-- <div class="container"> -->
            <section class="bgcolor-a">
                <form action="/Adopsi/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <div class="col-md">
                            <input type="text" class="form-control" id="Nama_kucing" name="Nama_kucing"
                                placeholder="Nama Kucing" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md">
                            <input type="text" class="form-control" id="Gender" name="Gender"
                                placeholder="Jenis Kelamin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md">
                            <input type="text" class="form-control" id="Perkiraan_Umur" name="Perkiraan_Umur"
                                placeholder="Perkiraan Umur">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md">
                            <input type="text" class="form-control" id="Domisili" name="Domisili"
                                placeholder="Domisili">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md">
                            <input type="text" class="form-control" id="Jenis_Kucing" name="Jenis_Kucing"
                                placeholder="Ras Kucing">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md">
                            <textarea class="form-control" id="Deskripsi" name="Deskripsi"
                                placeholder="Deskripsi Kucing"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md">
                            <input type="text" class="form-control" id="Foto" name="Foto" placeholder="Foto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md">
                            <button type="submit" class="btn btn-light"
                                style="background-color: #b37c47;">Kirim</button>
                        </div>
                    </div>
                </form>

                <br><br>
                <!-- </div> -->
            </section>
            <!-- </div> -->
        </div>


        <!-- <div class="container">
        <div class="row">
            <div class="col-8">

                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>

            </div>
        </div>



    </div> -->
    </div>
    <br> <br>
</div>
<!--End Content-->

<?= $this->endSection(); ?>