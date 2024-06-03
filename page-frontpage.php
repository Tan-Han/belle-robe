<?php get_header() ?>

<!-- this is the coding for the frontpage for the website-->

<main>

  <!-- first section on the frontpage with the hero video/picture -->
  <section class="frontpage_hero">
    <video class="frontpage-video" id="heroVideo" preload="auto" autoplay loop muted>
      <source src="https://bellerobe.trshansen.online/wp-content/uploads/2024/05/stemmings.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="video-overlay"></div>
    <h1 class="hero-text"><?php the_field("hero_text_on_frontpage") ?></h1>
  </section>

  <!-- padding for på siderne for alt andet end hero -->
  <div class="frontpage_pading">

    <!-- second section on the frontpage with the introduction text -->
    <section class="section frontpage_introduction">
      <h2><?php the_field("introduction_header_on_frontpage") ?></h2>
      <p class="frontpage_text_with_margin_top_p"><?php the_field("introduction_text_on_frontpage") ?></p>
    </section>

    <!-- third section on the frontpage with four categories of products -->
    <section class="section">
      <h2 class="centered_text_frontpage"><?php the_field("introduction_to_cards_on_frontpage") ?></h2>
      <p class="centered_text_frontpage frontpage_text_with_margin_top_p">
        <?php the_field("text_under_introduction_to_cards") ?>
      </p>

      <div class="frontpage_cards_container">


        <!--first card-->
        <a href="/product-category/brudekjoler/">
          <div class="frontpage_cards">
            <p class="p_cards">Brudekjoler</p>
            <?php $image = get_field("brudekjole_card_image") ?>
            <img class="img_cards" src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>">
          </div>
        </a>

        <!--second card-->
        <a href="/product-category/gallakjoler/">
          <div class="frontpage_cards">
            <p class="p_cards">Fest- & gallekjoler</p>
            <?php $image = get_field("galla_og_festkjoler_card_image") ?>
            <img class="img_cards" src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>">
          </div>
        </a>

        <!--third card-->
        <a href="/product-category/konfirmationskjoler/">
          <div class="frontpage_cards">
            <p class="p_cards">Konfirmationskjoler</p>
            <?php $image = get_field("konfirmationskjoler_card_image") ?>
            <img class="img_cards" src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>">
          </div>
        </a>

        <!--fourth card-->
        <a href="/product-category/sko/">
          <div class="frontpage_cards">
            <p class="p_cards">Sko & tilbehør</p>
            <?php $image = get_field("sko_og_tilbehor_card_image") ?>
            <img class="img_cards" src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>">
          </div>
        </a>

      </div>
    </section>

    <!-- fourth section on the frontpage with the informations of opening hours and map -->

    <section class="section frontpage_opening_hours_and_booking">

      <!-- Code for opening hours on frontpage begins -->
      <div class="opening_hours_container">
        <h3>Åbningstider</h3>
        <p><?php the_field("opening_hours_description") ?></p>

        <!-- Div box for "åbningstider" with loop -->
        <div class="opening_hours_loop_frontpage">

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

            <div class="hours_frontpage">
              <b><?php the_title() ?>:&nbsp;</b>

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

          <?php endwhile ?>
          <?php wp_reset_postdata() ?>
        </div>

        <!-- div box for "book tid"-->
        <div class="book_div_box">
          <p><?php the_field("tekst_til_book_tid") ?></p>
          <a class="book_tid_a" href="/book-tid/">
            <button class="book_tid_button">Book tid</button>
          </a>
        </div>

      </div>

      <!-- Code for opening hours on frontpage ends -->

      <!-- Code for adress area on frontpage begins -->
      <div class="adress_section_container">

        <h3>Find vej</h3>

        <div>
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
        </div>

      </div>
      <!-- Code for adress area on frontpage ends -->

    </section>

  </div>

</main>


<!-- this is the styling for the frontpage -->
<style>
  /* General styling for frontpage */
  main {
    padding: 0 !important;
    margin: 0 !important;
    /* Har sat padding til 0 for at kunne sætte videoen helt ud til kanten (!important for at den overwriter den anden padding)*/
  }

  .section {
    margin-top: 5rem;
  }

  .frontpage_pading {
    padding: 5rem 8rem 0 8rem;
    box-shadow: 0 -3px 5px #52443B7D;
    position: relative;
    z-index: 2;
  }

  h2 {
    font-size: 35px;
  }

  h3 {
    font-size: 25px;
  }

  .frontpage_text_with_margin_top_p {
    margin-top: .5rem;
  }

  /* First section styling */

  .frontpage_hero {
    position: relative;
    /* For at kunne sætte teksen oven på videoen */
    width: 100%;
    height: 700px;
    z-index: 0;
    margin: 0;
    padding: 0;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .frontpage-video {
    max-width: 100vw;
    width: 100%;
    height: 700px;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
  }

  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #52443B4D;
    /* Dark overlay */
    z-index: 1;
  }

  .hero-text {
    position: relative;
    z-index: 2;
    font-size: 65px;
    color: var(--quinary-color);
    text-shadow: 2px 2px 5px var(--quaternary-color);
  }

  /* Second section styling */

  .frontpage_introduction {
    border-top: 1px solid var(--tertiary-color);
    border-bottom: 1px solid var(--tertiary-color);
    padding: 2rem 3rem;
    margin: 0 !important;
  }


  /* Third section styling */

  .centered_text_frontpage {
    text-align: center;
  }

  .frontpage_cards_container {
    display: flex;
    justify-content: space-between;
    margin: 30px 0;
  }


  .frontpage_cards {
    border-radius: 10px;
    position: relative;
  }

  .p_cards {
    font-family: "garamond-premier-pro", serif;
    font-weight: 700;
    font-style: normal;
    color: var(--white);
    text-shadow: 1px 1px 2px var(--quaternary-color);
    position: absolute;
    z-index: 1;
    bottom: 2rem;
    Left: 2rem;
    font-size: 36px;
    overflow: hidden;
  }

  .img_cards {
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 3px 3px 5px #52443B7D;
    height: 38rem;
    width: 19vw;
    transition: 0.4s;
  }

  .img_cards:hover {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
    transition: 0.4s;
  }

  /* Fourth section styling */
  .frontpage_opening_hours_and_booking {
    display: flex;
    justify-content: space-between;
    padding-bottom: 100px;
  }

  .h3_frontpage {
    font-size: 25px;
  }

  /* opening hours area styling */
  .opening_hours_container {
    width: 45%;
  }

  .opening_hours_loop_frontpage {
    background-color: var(--tertiary-color);
    border-radius: 10px;
    box-shadow: 3px 3px 5px #52443B7D;
    padding: 20px;
    margin-top: 18px;
    background-image: url('https://trshansen.online/bellerobe/wp-content/themes/bellerobe/img/open-hours.svg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  .hours_frontpage {
    display: flex;
    font-size: 17px;
    padding: 4px 0;
    color: var(--white);
  }

  /* book tid styling */
  .book_div_box {
    background-color: var(--tertiary-color);
    border-radius: 10px;
    box-shadow: 3px 3px 5px #52443B7D;
    padding: 20px;
    margin-top: 20px;
  }

  .book_div_box p {
    color: var(--white);
    font-size: 17px;
    font-weight: 500;
  }

  .book_tid_button {
    background-color: var(--white);
    border: none;
    border-radius: 10px;
    color: var(--brown);
    padding: 10px 20px;
    font-size: 18px;
    font-weight: 700;
    margin-top: 10px;
  }


  .book_tid_button:hover {
    background-color: var(--quinary-color);
  }

  /* adress area styling */
  .adress_section_container {
    width: 45%;
  }

  .maps {
    border-radius: 10px;
    border: none !important;
    box-shadow: 3px 3px 5px #52443B7D;
    height: 415px;
    width: 100%;
    margin-top: 18px;
  }

  @media screen and (max-width: 2000px) {
    .img_cards {
      height: 34rem;
    }

    .p_cards {
      font-size: 30px;
    }
  }

  @media screen and (max-width: 1700px) {
    .img_cards {
      height: 29rem;
    }

    .p_cards {
      font-size: 25px;
    }

  }

  @media screen and (max-width: 1500px) {
    .img_cards {
      height: 22rem;
      width: 240px;
    }

    .p_cards {
      font-size: 21px;
    }
  }

  @media screen and (max-width: 1300px) {

    .frontpage_hero, .frontpage-video {
      height: 600px;
    }

    .img_cards {
      width: 200px;
    }

    .frontpage_cards {
      display: flex;
      justify-content: center;
    }

    .p_cards {
      font-size: 20px;
      bottom: 1rem;
      Left: auto;
    }


  }

  @media screen and (max-width: 1160px) {
    .img_cards {
      height: 17rem;
      width: 170px;
    }

    .p_cards {
      font-size: 19px;
    }

    .frontpage_opening_hours_and_booking {
      flex-direction: column;
    }

    .opening_hours_container {
      width: 100%;
    }

    .book_div_box {
      display: flex;
      flex-direction: column;
    }

    .book_tid_a {
      align-self: center;
      width: 40%;
      margin-top: .5rem;
    }

    .book_tid_button {
      width: 100%;
    }

    .adress_section_container {
      width: 100%;
      margin-top: 70px;
    }
  }

  @media screen and (max-width: 960px) {

    .frontpage_hero,.frontpage-video {
      height: 500px;
    }

    .hero-text {
      font-size: 55px;
    }

    .frontpage_pading {
      padding: 5rem 3rem 0 3rem;
    }

    .frontpage_cards_container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px 0;
    }

    .img_cards {
      height: 23rem;
      width: 260px;
    }

    .p_cards {
      font-size: 18px;
    }

  }

  @media screen and (max-width: 800px) {
    .hero-text {
      font-size: 50px;
    }
}

  @media screen and (max-width: 696px) {

    .frontpage_cards_container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px 0;
    }

    .img_cards {
      height: 20rem;
      width: 220px;
    }

    .hero-text {
      font-size: 50px;
    }

  }

  @media screen and (max-width: 600px) {

    .frontpage_cards_container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px 0;
    }

    .img_cards {
      height: 15rem;
      width: 170px;
    }

    .section {
      padding-top: 40px;
    }

    .hero-text {
      font-size: 50px;
      max-width: 520px;
    }

  }

  @media screen and (max-width: 500px) {

    .hero-text {
      font-size: 32px;
      text-align: center;
    }

    .frontpage_cards_container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(135px, 1fr));
      gap: 20px 0px;
    }

    .frontpage_introduction {
      padding: 2rem .5rem;
    }

    .book_tid_a {
      width: 100%;
    }

    .img_cards {
      height: 12rem;
      width: 130px;
    }

    h2 {
      font-size: 28px;
    }

    .p_cards {
      font-size: 15px;
    }


    .opening_hours_loop_frontpage {
      background-image: none;
      background-color: var(--tertiary-color);
    }
  }
</style>

<?php get_footer() ?>