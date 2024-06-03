<?php get_header() ?>


<main>

    <section>
        <h1 class="booking-headline">Book tid</h1>
        <div class="booking-list">

            <!-- Wedding dress booking -->

            <div class="booking-card">
                <?php
                $bookingDress = get_field('provning_brudekjole');
                if ($bookingDress): ?>

                    <div class="img-box">
                        <img class="booking-img" src="<?php echo esc_url($bookingDress['dress_img']['sizes']['medium']); ?>"
                            alt="<?php echo $image["alt"] ?>">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingDress['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingDress['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingDress['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingDress['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingDress['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3GOSGr1Rb6EyjltOSWs0cdrIAd5gBnJ6RWV0rwXmnFbgxnaKsyXAPA6wRL6pdi6Ldl4tFAe208?gv=true',
                                            color: '#52443b',
                                            label: 'Book en aftale',
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Outlet Wedding dress booking -->

            <div class="booking-card">
                <?php
                $bookingOutlet = get_field('provning_outlet');
                if ($bookingOutlet): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingOutlet['dress_img']['sizes']['medium']); ?>" alt="<?php echo $image["alt"] ?>">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingOutlet['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingOutlet['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingOutlet['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingOutlet['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingOutlet['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3GOSGr1Rb6EyjltOSWs0cdrIAd5gBnJ6RWV0rwXmnFbgxnaKsyXAPA6wRL6pdi6Ldl4tFAe208?gv=true',
                                            color: '#52443b',
                                            label: 'Book en aftale',
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Galla dress booking -->

            <div class="booking-card">
                <?php
                $bookingGallaDress = get_field('provning_af_gallakjole');
                if ($bookingGallaDress): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingGallaDress['dress_img']['sizes']['medium']); ?>" alt="<?php echo $image["alt"] ?>">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingGallaDress['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingGallaDress['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingGallaDress['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingGallaDress['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingGallaDress['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3GOSGr1Rb6EyjltOSWs0cdrIAd5gBnJ6RWV0rwXmnFbgxnaKsyXAPA6wRL6pdi6Ldl4tFAe208?gv=true',
                                            color: '#52443b',
                                            label: 'Book en aftale',
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Galla dress group booking -->

            <div class="booking-card">
                <?php
                $bookingGallaGroup = get_field('provning_af_gallakjole_gruppe');
                if ($bookingGallaGroup): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingGallaGroup['dress_img']['sizes']['medium']); ?>" alt="<?php echo $image["alt"] ?>">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingGallaGroup['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingGallaGroup['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingGallaGroup['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingGallaGroup['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingGallaGroup['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3GOSGr1Rb6EyjltOSWs0cdrIAd5gBnJ6RWV0rwXmnFbgxnaKsyXAPA6wRL6pdi6Ldl4tFAe208?gv=true',
                                            color: '#52443b',
                                            label: 'Book en aftale',
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pickup dress booking -->

            <div class="booking-card">
                <?php
                $bookingDressPickup = get_field('afhentning_kjole');
                if ($bookingDressPickup): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingDressPickup['dress_img']['sizes']['medium']); ?>" alt="<?php echo $image["alt"] ?>">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingDressPickup['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingDressPickup['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingDressPickup['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingDressPickup['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingDressPickup['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3GOSGr1Rb6EyjltOSWs0cdrIAd5gBnJ6RWV0rwXmnFbgxnaKsyXAPA6wRL6pdi6Ldl4tFAe208?gv=true',
                                            color: '#52443b',
                                            label: 'Book en aftale',
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Confirmation dress booking -->

            <div class="booking-card">
                <?php
                $bookingConfirmationDress = get_field('provning_konfirmationskjole');
                if ($bookingConfirmationDress): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingConfirmationDress['dress_img']['sizes']['medium']); ?>" alt="<?php echo $image["alt"] ?>">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingConfirmationDress['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingConfirmationDress['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingConfirmationDress['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingConfirmationDress['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingConfirmationDress['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3GOSGr1Rb6EyjltOSWs0cdrIAd5gBnJ6RWV0rwXmnFbgxnaKsyXAPA6wRL6pdi6Ldl4tFAe208?gv=true',
                                            color: '#52443b',
                                            label: 'Book en aftale',
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <section class="store-info">

        <div class="contact-info">
            <h2 class="booking-headline">Kontakt os</h2>

            <div class="contact-info-box">

                <p>Ring til os eller send os en mail</p>

                <div class="contact-info-inner">
                    <div class="call">

                        <?php $contactLoop = new WP_Query(
                            array(
                                "post_type" => "address",
                                "posts_per_page" => -1,
                            )
                        ) ?>

                        <?php while ($contactLoop->have_posts()):
                            $contactLoop->the_post() ?>
                            <i class="fa-solid fa-phone"></i></a>

                            <div class="phone">

                                <p><a href="tel:<?php the_field('phone_number') ?>">
                                        +45 <?php the_field('phone_number') ?>
                                    </a></p>

                            <?php endwhile ?>

                            <?php wp_reset_postdata() ?>

                        </div>
                    </div>

                    <div class="write">
                        <i class="fa-solid fa-envelope"></i>
                        <button id="contactBtn">Skriv til os</button>
                        <div id="contactForm" class="contact_form_box">
                            <div class="contact_form">
                                <span class="close">&times;</span>
                                <div class="contact">
                                    <h3>Send os en besked</h3>
                                    <?php echo do_shortcode('[contact-form-7 id="4d7ddd4" title="Kontaktformular"]') ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="opening-hours">
            <h2 class="booking-headline">Åbningstider</h2>
            <div class="opening-hours-box info-box">

                <!-- Opening hours loop code start -->

                <?php $openHoursLoop = new WP_Query(
                    array(
                        "post_type" => "open_hours",
                        "posts_per_page" => -1,
                        "orderby" => "date",  // Order by date
                        "order" => "ASC"     // Reverse order (latest posts first)
                    )
                ) ?>

                <?php while ($openHoursLoop->have_posts()):
                    $openHoursLoop->the_post() ?>

                    <div class="hours">
                        <b><?php the_title() ?>:&nbsp;</b>

                        <div class="hours-box">
                            <?php if (!get_field('closed')) {
                                if (get_field("open") && get_field("close")): ?>
                                    <p><?php the_field("open"); ?>&nbsp;-&nbsp;</p>
                                    <p><?php the_field("close"); ?></p>
                                <?php endif;
                            } ?>

                            <?php
                            if (!get_field('closed')) {
                                $openingHours = get_field('open_later');
                                if (!empty($openingHours['open_later']) && !empty($openingHours['close_later'])): ?>
                                    <p><?php echo '&nbsp;&&nbsp;'; ?></p>
                                    <p><?php echo $openingHours['open_late']; ?></p>
                                    <p><?php echo '&nbsp;-&nbsp;'; ?></p>
                                    <p><?php echo $openingHours['close_late']; ?></p>
                                <?php endif;
                            } ?>

                            <?php if (get_field('closed')) {
                                echo '<p>Lukket</p>';
                            }

                            if (get_field('book')) {
                                echo '<p>Se tider ved booking</p>';
                            }
                            ?>
                        </div>
                    </div>

                <?php endwhile ?>

                <?php wp_reset_postdata() ?>

                <!-- Opening hours loop code end -->

            </div>
        </div>
        </div>

        <div class="address">
            <h2 class="booking-headline">Adresse</h2>
            <div class="address-box info-box">

                <!-- Address loop code start -->

                <?php $addressLoop = new WP_Query(
                    array(
                        "post_type" => "address",
                        "posts_per_page" => -1,
                    )
                ) ?>

                <?php while ($addressLoop->have_posts()):
                    $addressLoop->the_post() ?>

                    <p class="store-address"><?php the_field('street_number') ?>, <?php the_field('postal_code') ?></p>

                    <iframe class="maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4505.774172981708!2d8.478445877117661!3d55.621380402105835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b1e67d2f3d7db%3A0x1edb8a96de66a4e9!2sBelle%20Robe%20bridal%20and%20party%20dresses!5e0!3m2!1sen!2sdk!4v1715084743677!5m2!1sen!2sdk"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                <?php endwhile ?>

                <?php wp_reset_postdata() ?>

                <!-- Address loop code end -->

            </div>
        </div>
    </section>

</main>

<style>
    main {
        display: grid;
        justify-items: center;
        grid-template-columns: repeat(2, 1fr);
        gap: 8rem;
    }

    section {
        width: 100%;
    }

    .booking-headline {
        font-size: 35px;
        padding-bottom: 1rem;
    }

    /* Booking cards */

    .booking-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .booking-card {
        background-color: var(--secondary-color);
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        height: 200px;
        align-items: center;
        box-shadow: 3px 3px 5px #5C48337D;
    }

    .img-box {
        width: 25%;
        height: 100%;
    }

    .booking-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
    }

    .booking-info {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        width: 75%;
        height: 100%;
        position: relative;
    }

    .booking-card-headline {
        padding: 1.5rem 1.5rem 0 1.5rem;
        display: flex;
        gap: 1.5rem;
        align-items: first baseline;
    }

    .booking-card-headline h3 {
        font-size: 22px;
    }

    .price-time {
        display: flex;
        font-size: 16px;
    }

    .booking-description {
        padding: 0 1.5rem;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        font-size: 16px;
    }

    .booking-btn {
        position: absolute;
        right: 1.5rem;
        bottom: 1.5rem;
    }

    .qxCTlb {
        color: var(--white) !important;
        background-color: var(--quaternary-color) !important;
        font-weight: 700;
        border-radius: 10px !important;
        padding: .5rem 1rem !important;
        font-family: proxima-nova, sans-serif !important;
        line-height: normal !important;
        letter-spacing: normal !important;
        font-size: 16px;
        float: right;
    }

    .qxCTlb:hover {
        color: var(--brown) !important;
        background-color: var(--primary-color) !important;
    }

    /* OPENING HOURS AND ADDRESS */

    .store-info {
        display: flex;
        flex-direction: column;
        gap: 5rem;
    }

    /* Opening hours */

    .opening-hours-box {
        background-image: url('https://trshansen.online/bellerobe/wp-content/themes/bellerobe/img/open-hours.svg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding: 1.5rem 2rem;
        border-radius: 10px;
        box-shadow: 3px 3px 5px #5C48337D;
        color: var(--white);
    }

    .hours {
        display: flex;
        font-size: 20px;
        padding: .5rem 0;
    }

    .hours-box {
        display: flex;
    }

    .more-times {
        font-style: italic;
        padding: .5rem 0;
    }

    /* CONTACT INFO */

    .contact-info-box {
        background-color: var(--tertiary-color);
        padding: 1.5rem 2rem;
        border-radius: 10px;
        box-shadow: 3px 3px 5px #5C48337D;
        color: var(--white);
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .contact-info-box p {
        font-style: italic;
        font-size: 20px;
    }

    .contact-info-inner {
        display: flex;
        align-items: center;
        gap: 2rem;
        height: 100px;
    }

    .call,
    .write {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: 50%;
        gap: 1.5rem;
        min-height: 80px;
    }

    .call i {
        font-size: 50px;
    }

    .write i {
        font-size: 55px;
    }

    .phone {
        display: flex;
        align-items: baseline;
    }

    .phone b,
    .phone p {
        font-size: 18px;
        font-style: normal;
    }

    .phone a {
        color: var(--white);
    }

    #contactBtn {
        width: fit-content;
        font-size: 16px;
        color: var(--brown);
        background-color: var(--primary-color);
    }

    #contactBtn:hover {
        background-color: var(--secondary-color);
        color: var(--brown);
    }

    /* Contact form */

    .contact_form {
        box-shadow: 3px 3px 5px #5C48337D;
    }

    .contact_form .contact {
        padding: 2rem;
    }

    .contact h3 {
        text-align: center;
        font-size: 35px;
        color: var(--brown);
        padding-bottom: 1rem;
    }

    .wpcf7-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .wpcf7-form br {
        display: none;
    }

    .wpcf7-form input,
    .client-message {
        width: 100%;
        border-radius: 10px;
        border: 1px solid var(--quaternary-color);
        padding: .5rem;
        font-size: 18px;
        color: var(--brown);
        background-color: var(--forms);
        font-family: proxima-nova, sans-serif;
    }

    /* For Firefox */
    @-moz-document url-prefix() {

        .wpcf7-form input,
        .client-message {
            max-width: -moz-available;
        }
    }

    /* For Chrome and other WebKit-based browsers */
    @media screen and (-webkit-min-device-pixel-ratio:0) {
        /* Safari and Chrome */
        @supports (-webkit-appearance:none) {

            .wpcf7-form input,
            .client-message {
                max-width: -webkit-fill-available;
            }
        }
    }

    .client_box {
        display: flex;
        gap: 1rem;
    }

    .client_name,
    .client_contact {
        width: 50%;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .client_message_box {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .submit_btn {
        font-family: proxima-nova, sans-serif;
        font-weight: 700;
        font-style: normal;
        width: fit-content !important;
        padding: .5rem 1rem !important;
        border: none !important;
        border-radius: 10px;
        box-shadow: 3px 3px 5px #5C48337D;
        cursor: pointer;
        font-size: 16px;
        background-color: var(--secondary-color) !important;
        /* Change cursor to pointer on hover */
    }

    .submit_btn:hover {
        color: var(--white);
        background-color: var(--quaternary-color) !important;
        /* Change cursor to pointer on hover */
    }

    .wpcf7-form p {
        position: relative;
        text-align: center;
    }

    .wpcf7-spinner {
        position: absolute;
        top: 25%;
    }

    .wpcf7-not-valid-tip {
        text-align: start;
    }

    .wpcf7-response-output {
        margin: 0 !important;
        border: none !important;
        color: #dc3232;
        text-align: center;
        font-family: proxima-nova, sans-serif;
    }

    /* Contact form modal (Pop-up contact form)*/

    /* The Modal (background) */
    .contact_form_box {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .contact_form {
        position: relative;
        background-color: var(--primary-color);
        margin: 6% auto;
        /* 6% from the top and centered */
        padding: 20px;
        border-radius: 10px;
        width: 50%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 0;
        right: 1.5rem;
        color: var(--quaternary-color);
        float: right;
        font-size: 55px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: var(--tertiary-color);
        text-decoration: none;
        cursor: pointer;
    }

    /* ADDRESS AND MAPS */

    .store-address {
        padding-bottom: 1.5rem;
    }

    .maps {
        border-radius: 10px;
        border: none !important;
        box-shadow: 3px 3px 5px #5C48337D;
        height: 350px;
        width: 100%;
    }

    /* Media queries */

    @media (max-width: 1600px) {
        main {
            gap: 5rem;
        }
    }

    @media (max-width: 1550px) {

        .booking-info {
            gap: .5rem;
        }

        .booking-card-headline {
            gap: 0;
            flex-direction: column;
        }

        .price-time {
            font-size: 14px;
        }

        .qxCTlb {
            font-size: 14px;
        }
    }

    @media (max-width: 1350px) {
        main {
            gap: 3rem;
        }

        .booking-card-headline h3 {
            font-size: 18px;
        }

        .booking-description {
            font-size: 14px;
        }
    }

    @media (max-width: 1100px) {
        main {
            grid-template-columns: 1fr;
        }

        .booking-info {
            gap: 1rem;
        }

        .booking-card-headline {
            gap: 1.5rem;
            flex-direction: row;
        }

        .booking-description {
            font-size: 16px;
        }

        .store-info {
            gap: 3rem;
        }
    }

    @media (max-width: 750px) {

        .booking-card-headline {
            gap: 0;
            flex-direction: column;
        }

        .booking-card-headline h3 {
            font-size: 20px;
        }

        .booking-description {
            font-size: 14px;
            -webkit-line-clamp: 3;
        }

        .booking-card {
            height: 230px;
        }

        .img-box {
            width: 35%;
        }

        .booking-info {
            width: 65%;
            gap: .75rem;
        }
    }

    @media (max-width: 700px) {

        .contact-info-inner {
            height: 150px;
        }

        .call,
        .write {
            flex-direction: column;
            justify-content: space-between;
        }
    }

    @media (max-width: 600px) {
        .booking-card {
            flex-direction: column;
            height: 500px;
        }

        .img-box {
            width: 100%;
            height: 55%;
        }

        .booking-img {
            object-position: 0 5%;
        }

        .booking-info {
            width: 100%;
            height: 45%
        }

        .booking-card-headline h3 {
            font-size: 22px;
        }

        .price-time {
            font-size: 16px;
        }

        .booking-description {
            font-size: 16px;
            -webkit-line-clamp: 3;
        }

        .opening-hours-box {
            background-image: none;
            background-color: var(--tertiary-color);
        }
    }

    @media (max-width: 500px) {

        .img-box {
            height: 45%;
        }

        .booking-info {
            height: 55%;
        }

        .contact-info-box p {
            font-size: 18px;
        }

        .contact-info-inner {
            gap: 1rem;
            height: 175px;
            flex-direction: column;
        }

        .call i {
            font-size: 40px;
        }

        .phone p {
            font-size: 16px;
        }

        .write i {
            font-size: 45px;
        }

        #contactBtn {
            font-size: 14px;
        }

        .call,
        .write {
            flex-direction: row;
            justify-content: start;
            width: 100%;
        }

        .hours {
            font-size: 16px;
        }

    }

    @media (max-width: 400px) {
        .hours {
            flex-direction: column;
        }
    }
</style>

<?php get_footer() ?>