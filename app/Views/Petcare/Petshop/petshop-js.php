<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<!--Start Banner-->

<div class="sub-banner">

    <img class="banner-img" src="images/gallery/banner2.jpg" alt="">
    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Pet Shop Di Jakarta Selatan</h2>
                </div>
            </div>
        </div>
    </div>

</div>

<!--End Banner-->

<!--Start Content-->
<div class="content">



    <div class="contact-us">
        <div class="container">

            <div class="row">

                <div class="get-touch">
                    <div class="col-md-6">

                        <div class="main-title">
                            <h2><span>San</span> Francisco</h2>
                            <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis felis
                                ultricies dui, ut rhoncus libero augue at liberolacus ut suscipit fermentum turpis. </p>
                        </div>

                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3151.8655244315096!2d144.9554158!3d-37.8166187!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2s!4v1437236216432"
                                width="100%" height="460px" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <div class="get-directions">
                                <form action="http://maps.google.com/maps" method="get" target="_blank">
                                    <input type="text" name="saddr" placeholder="Enter Your Address" />
                                    <input type="hidden" name="daddr"
                                        value="Envato Pty Ltd, Elizabeth Street, Melbourne, Victoria, Australia" />
                                    <input type="submit" value="Get directions" class="direction-btn" />
                                </form>
                            </div>
                        </div>

                        <div class="detail">
                            <span><b>Phone:</b> 1.800.555.6789</span>
                            <span><b>Email:</b> support@medical.com</span>
                            <span><b>Web:</b> www.Medicalguide.com</span>
                            <span><b>Address:</b> 12345 North Main Street, New York, NY 555555</span>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="contact-adrs2">

                            <div class="main-title">
                                <h2><span>Cape</span> Twon</h2>
                                <p>cursus lorem molestie vitae. Nulla vehicula, lacus ut suscipit fermentum, turpis
                                    felis ultricies dui, ut rhoncus libero augue at liberolacus ut suscipit fermentum
                                    turpis. </p>
                            </div>

                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6305.606734438974!2d-122.39947661499052!3d37.79464769631387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808aa44da05d%3A0x7bd6bdbc78216027!2sBrook+Furniture+Rental+-+San+Francisco%2C+CA!5e0!3m2!1sen!2s!4v1437244029146"
                                    width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <div class="get-directions">
                                    <form action="http://maps.google.com/maps" method="get" target="_blank">
                                        <input type="text" name="saddr" placeholder="Enter Your Address" />
                                        <input type="hidden" name="daddr"
                                            value="500 Washington St #100, San Francisco, CA 94111, United States" />
                                        <input type="submit" value="Get directions" class="direction-btn" />
                                    </form>
                                </div>
                            </div>

                            <div class="detail">
                                <span><b>Phone:</b> 1.800.555.6789</span>
                                <span><b>Email:</b> support@medical.com</span>
                                <span><b>Web:</b> www.Medicalguide.com</span>
                                <span><b>Address:</b> 12345 North Main Street, New York, NY 555555</span>
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