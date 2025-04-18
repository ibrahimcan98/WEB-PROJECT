<?php
$page_title = "Home";
include("./nav.php");
?>

<!-- MAIN SECTION -->
<main>
    <!-- Swiper animation for image carousel -->
    <section class="photo_container swiper">
      <div class="slider_wrapper">
        <figure class="card_list swiper-wrapper">
          <picture class="card_item swiper-slide">
            <img src="./media/family5.png" alt="" class="image" />
          </picture>
          <picture class="card_item swiper-slide">
            <img src="./media/family4.png" alt="" class="image" />
          </picture>
          <picture class="card_item swiper-slide">
            <img src="./media/DSC01073.png" alt="" class="image" />
          </picture>
          <picture class="card_item swiper-slide">
            <img src="./media/IMG_1490.png" alt="" class="image" />
          </picture>
          <picture class="card_item swiper-slide">
            <img src="./media/DSC08536.png" alt="" class="image" />
          </picture>
          <picture class="card_item swiper-slide">
            <img src="./media/Eduard final.png" alt="" class="image" />
          </picture>
        </figure>
      </div>
    </section>
    <!-- About -->
    <section id="about">
      <!-- Image of the photographer -->
      <img src="./media/profile_ivana.png" alt="" />
      <!-- Description of the photographer -->
      <article class="about_her">
        <h1>Hello, I'm <span>Ivana Tumbeva</span></h1>
        <p>
          I have been a family and portrait photographer for 5 years,
          capturing genuine emotions and timeless moments. Since 2022, I have
          been studying photography at Griffith College Dublin, continuously
          refining my skills and artistic vision.
        </p>
        <a href="about.php" class="button_dark">More</a>
      </article>
    </section>
    <!-- Gallery for portrait and family photo -->
    <section"home_gallery">
      <figure class="home_gallery_container">
        <article class="portrait">
          <h2>Portrait</h2>
          <figure class="portrait_photo">
            <img src="./media/DSC01061.png" alt="" />
            <img src="./media/DSC01073.png" alt="" />
            <img class="desktop tablet" src="./media/DSC08536.png" alt="" />
            <img class="desktop tablet" src="./media/Eduard final.png" alt="" />
            <img class="desktop" src="./media/DSC08384.png" alt="" />
          </figure>
        </article>
        <article class="family_photo">
          <h2>Family Photoshots</h2>
          <figure class="family_photo">
            <img src="./media/family2.png" alt="" />
            <img src="./media/.png" alt="" />
            <img class="desktop tablet" src="./media/family3.png" alt="" />
            <img class="desktop tablet" src="./media/family4.png" alt="" />
            <img class="desktop" src="./media/family5.png" alt="" />
          </figure>
        </article>
      </figure>
      </section>

      <!-- PROCESS -->
      <section id="process">
        <!-- Process description title -->
          <h1>The Photography Journey</h1>
        <!-- Each step of the photography journey described in a sepearate article -->
        <section class="process-grid">
          <article class="process-card">
            <i class="fa-solid fa-envelope"></i>
            <h4>1.Getting in Touch</h4>
            <p>
              The client reaches out via the website, social media, or phone. An
              initial consultation is done based on needs.
            </p>
          </article>
          <article class="process-card">
            <i class="fa-solid fa-briefcase"></i>
            <h4>2.Brief & Planning</h4>
            <p>
              The shoot type, concept, date, and location are planned. Special
              requests are noted.
            </p>
             
          </article>
          <article class="process-card">
            <i class="fa-solid fa-credit-card"></i>
            <h4>3. Deposit / Prepayment:</h4>
            <p>
              The booking is confirmed and a contract is signed for payment and
              cancellation policy.
            </p>
          </article>
          <article class="process-card">
            <i class="fa-solid fa-camera"></i>
            <h4>4. Preparation & Shooting:</h4>
            <p>
              Equipment is set, atmosphere is prepared, and posing guidance is
              given.
            </p>
          </article>
          <article class="process-card">
            <i class="fa-solid fa-check-double"></i>
            <h4>5. Selection & Retouching</h4>
            <p>
              Best photos are selected and edited according to client’s
              preferences.
            </p>
          </article>
          <article class="process-card">
            <i class="fa-solid fa-truck-ramp-box"></i>
            <h4>6.Photo Delivery</h4>
            <p>
              Photos are delivered digitally or printed. Options include online
              gallery or USB.
            </p>
          </article>
          <article class="process-card">
            <i class="fa-solid fa-hashtag"></i>
            <h4>7.Additional Services</h4>
            <p>
              Social media versions, albums, framed prints or extra editing
              offered.
            </p>
          </article>
          <article class="process-card">
            <i class="fa-solid fa-comment"></i>
            <h4>8.Feedback & Communication</h4>
            <p>
              Follow-up for feedback, review requests, and future collaboration
              ideas.
            </p>
          </article>
        </section>
      </section>

      <!-- BOOK BUTTON -->
      <section class="book">
        <a href="booking.php">Book</a>
      </section>

      <!-- FORM SECTION -->
      <form action="submit.php" method="post" class="contact_form" id="">
        <h1>
          If you want to find out more, contact me with form below:
        </h1>
        <label for="name">First Name</label>
        <input type="text" id="name" name="name" required placeholder="Enter your First Name" minlength="2" maxlength="25"/>

        <label for="name">Last Name</label>
        <input type="text" id="name" name="name" required placeholder="Enter your Last Name" minlength="2" maxlength="25"/>
        <h2>Contact By</h2>
        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter Your Number" />

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email" />
        <button type="submit">Send</button>
      </form>
  </main>


<?php
include("./footer.php");
?>