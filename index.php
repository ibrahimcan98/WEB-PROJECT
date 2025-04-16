<?php
include("header.php");
?>
  <!-- MAIN SECTION -->
  <main>
    <!-- Swiper animation for image carousel -->
    <section class="photo_container swiper">
      <div class="slider_wrapper">
        <figure class="card_list swiper-wrapper">
          <picture class="card_item swiper-slide">
            <img src="./media/IMG_0503-1-2.jpg" alt="" class="image" />
          </picture>
          <picture class="card_item swiper-slide">
            <img src="./media/IMG_1490.jpg" alt="" class="image" />
          </picture>
          <picture class="card_item swiper-slide">
            <img src="./media/IMG_1678-Edit.jpg" alt="" class="image" />
          </picture>
          <picture class="card_item swiper-slide">
            <img src="./media/Eduard final.jpg" alt="" class="image" />
          </picture>
        </figure>
      </div>
    </section>
    <!-- About -->
    <section id="about">
      <!-- Image of the photographer -->
      <img src="./media/profile.jpg" alt="" />

      <!-- Description of the photographer -->
      <article class="about_her">
        <h1>Hello, I'm <span>Ivana Tumbeva</span></h1>
        <p>
          I have been a family and portrait photographer for 5 years,
          capturing genuine emotions and timeless moments. Since 2022, I have
          been studying photography at Griffith College Dublin, continuously
          refining my skills and artistic vision.
        </p>
        <a href="about.html" class="button_dark">More</a>
      </article>
    </section>
    <!-- Gallery for portrait and family photo -->
    <section"home_gallery">
      <figure class="home_gallery_container">
        <article class="portrait">
          <h2>Portrait</h2>
          <figure class="portrait_photo">
            <img src="./media/DSC01061.jpg" alt="" />
            <img src="./media/DSC01073.jpg" alt="" />
            <img class="desktop tablet" src="./media/portrait1.jpg" alt="" />
            <img class="desktop tablet" src="./media/portrait.jpg" alt="" />
            <img class="desktop" src="./media/portrait2.jpg" alt="" />
          </figure>
        </article>
        <article class="family_photo">
          <h2>Family Photoshots</h2>
          <figure class="family_photo">
            <img src="./media/family2.jpg" alt="" />
            <img src="./media/IMG_1501.jpg" alt="" />
            <img class="desktop tablet" src="./media/family3.jpg" alt="" />
            <img class="desktop tablet" src="./media/family4.jpg" alt="" />
            <img class="desktop" src="./media/family5.jpg" alt="" />
          </figure>
        </article>
      </figure>
      </section>

      <!-- PROCESS -->
      <section id="process">
        <!-- Process description title -->
        <hgroup>
          <i class="fa-solid fa-star"></i>
          <h1>The Photography Journey</h1>
          <i class="fa-solid fa-star"></i>
        </hgroup>
        <!-- Each step of the photography journey described in a sepearate article -->
        <section class="process_container">
          <article class="process_1 process">
            <i class="fa-solid fa-envelope"></i>
            <p>1.Getting in Touch</p>
            <span class="tooltip-text">
              > The client reaches out via the website, social media, or phone.
              <br />
              > They receive information about services, pricing, and
              availability.
              <br />
              > An initial consultation is conducted based on the client's
              needs.</span>
          </article>
          <article class="process_2 process">
            <i class="fa-solid fa-briefcase"></i>
            <p>2.Brief & Planning</p>
            <span class="tooltip-text">
              > The type of shoot is determined (wedding, family, portrait,
              product photography, etc.). <br />
              > The shooting concept, location, date, and time are planned.
              <br />
              > The client’s expectations and special requests are noted.
            </span>
          </article>
          <article class="process_3 process">
            <i class="fa-solid fa-credit-card"></i>
            <p>3. Deposit / Prepayment:</p>
            <span class="tooltip-text">
              > The booking is confirmed. <br />
              > A contract is signed to finalize the payment plan and
              cancellation policies.
            </span>
          </article>
          <article class="process_4 process">
            <i class="fa-solid fa-camera"></i>
            <p>4. Preparation & Shooting:</p>
            <span class="tooltip-text">
              > Equipment and lighting are set up. <br />
              > A comfortable atmosphere is created for the client. <br />
              > Guidance on posing and direction is provided during the shoot.
            </span>
          </article>
          <article class="process_5 process">
            <i class="fa-solid fa-check-double"></i>
            <p>5. Selection & Retouching</p>
            <span class="tooltip-text">
              > The best photos are selected and previewed for the client.
              <br />
              > Color correction, lighting adjustments, retouching, and other
              editsare applied. <br />
              > Custom editing is done based on the client'spreferences.
            </span>
          </article>
          <article class="process_6 process">
            <i class="fa-solid fa-truck-ramp-box"></i>
            <p>6.Photo Delivery</p>
            <span class="tooltip-text"> 
              > Photos are provided in digital or printed format. <br />
              > Options include an online gallery, USB drive, or printed album.
              <br />
              > A password-protected client gallery can be created on the
              website.</span>
          </article>
          <article class="process_7 process">
            <i class="fa-solid fa-hashtag"></i>
            <p>7.Additional Services</p>
            <span class="tooltip-text"> 
              > Social media-optimized images. <br />
              > Custom prints, framed photos, or album design. <br />
              > Extra retouching or additional photoshoots.</span>
          </article>
          <article class="process_8 process">
            <i class="fa-solid fa-comment"></i>
            <p>8.Feedback & Communication</p>
            <span class="tooltip-text">
              > Follow-up communication is maintained for feedback. <br />
              > Clients are encouraged to leave reviews or referrals. <br />
              > Future collaboration opportunities are explored.</span>
          </article>
        </section>
      </section>

      <!-- BOOK BUTTON -->
      <section class="book">
        <a href="booking.html">Book</a>
      </section>

      <!-- FORM SECTION -->
      <form action="submit.php" method="post" class="form">
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
include("footer.php");
?>