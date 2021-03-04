<!-- main body - start
			================================================== -->
<main>


    <!-- breadcrumb_section - start
				================================================== -->
    <section id="breadcrumb_section"
        class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
        <div class="container">
            <div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title">Contact Us</h1>
                <p class="mb-0">
                    Faff about only a quid blower I don't want no agro bleeding chim pot burke tosser cras nice
                    one boot fanny.
                </p>
            </div>
        </div>

        <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
            <img src="<?php echo base_url() ?>assets/images/shapes/shape_1.png" alt="spahe_not_found">
        </div>
        <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="500">
            <img src="<?php echo base_url() ?>assets/images/shapes/shape_2.png" alt="spahe_not_found">
        </div>
    </section>
    <!-- breadcrumb_section - end
				================================================== -->


    <!-- contact_section - start
				================================================== -->
    <section id="contact_section" class="contact_section sec_ptb_120 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-lg-3 col-md-8 col-sm-10">
                    <div class="contact_info ul_li_block" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="list_title">Office Address</h3>
                        <ul class="clearfix">
                            <li>Melbourne’s GPO 434 Bourke St.</li>
                            <li>Dhaka VIC 3074, Australia</li>
                        </ul>
                    </div>

                    <div class="contact_info ul_li_block" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="list_title">Contact Info</h3>
                        <ul class="clearfix">
                            <li><span>Phone:</span> (+096) 302 443 7488</li>
                            <li><span>Fax:</span> (+096) 204 353 6684</li>
                            <li><span>Email:</span> makro@gmail.com</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-10">
                    <div class="contact_form" data-aos="fade-up" data-aos-delay="500">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_item">
                                        <?= form_error('name') ?>
                                        <input type="text" name="name" id="name" value="<?= set_value('name') ?>"
                                            placeholder="Nama Anda" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form_item">
                                        <?= form_error('email') ?>
                                        <input type="email" name="email" id="email" value="<?= set_value('email') ?>"
                                            placeholder="Email Anda" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form_item">
                                <?= form_error('subject') ?>
                                <input type="text" name="subject" value="<?= set_value('subject') ?>"
                                    placeholder="Subject" required>
                            </div>

                            <div class="form_item">
                                <?= form_error('message') ?>
                                <textarea name="message" id="message" placeholder="Masukkan Pesan..."></textarea>
                            </div>

                            <button type="submit" class="btn bg_default_blue">Kirim Email</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact_section - end
				================================================== -->


    <!-- map_section - start
				================================================== -->
    <div id="map_section" class="map_section clearfix">
        <div id="google-map" class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.8521681400043!2d115.0855368504212!3d-8.116530694128311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24116b203f1bd%3A0x75078d34d4179074!2sGanesha%20University%20of%20Education!5e0!3m2!1sen!2sid!4v1614836517655!5m2!1sen!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- map_section - end
				================================================== -->


</main>
<!-- main body - end
			================================================== -->