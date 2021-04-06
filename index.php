<?php
    
    include "include/config.php";

    $_PAGE_TITLE = $_CONFIG_SITETITLE." - Online QR Code Scanner and Generator";
 
    $_CONFIG_METAAUTHOR = "Toni Tegar Sahidi";
    $_CONFIG_METADESCRIPTION = "Ninja QR is Free Online QR Code Scanner and QR Code Generator. Click and use. No Install!";
    $_CONFIG_METAKEYWORD = "QR Code, QR Code Scanner, QR Code Generator, NinjaQR, QRCode";
  
  include "include/header.php";
  ?>


  <!-- PUT ANY HEADER CODE HERE -->
  <?php

  include "include/navbar.php";
  include "include/sidebar.php";
?>
 


    <main id="content" role="main" class="main commerce-landing">
      <section class="commerce-hero-content-wrapper center overflow-hidden">
        <a href="qr-code-scanner.php" class="text-decoration-none block">
          <amp-img
            class="commerce-hero-image"
            src="img/ninjaqr/small-qr-code-scanner-ninjaqr.jpg"
            width="750"
            height="300"
            layout="responsive"
            media="(max-width: 52.06rem)"
            alt="QR Code Scanner"
            noloading=""
          >
            <div placeholder="" class="commerce-loader"></div>
          </amp-img>
          <amp-img
            class="commerce-hero-image"
            src="img/ninjaqr/wide-qr-code-scanner-ninjaqr.jpg"
            width="2560"
            height="800"
            layout="responsive"
            media="(min-width: 52.07rem)"
            alt="QR Code Scanner"
            noloading=""
          >
            <div placeholder="" class="commerce-loader"></div>
          </amp-img>
          <div class="commerce-hero-content commerce-hero-content-theme-primary flex justify-center flex-column md-mx-auto md-p0">
            <div class="commerce-hero-align md-mx-auto">
              <h2 class="commerce-hero-content-title h4 md-h1 caps md-mb2 md-pl4">
                QR Code Scanner
              </h2>
              <p class="commerce-hero-content-body">
                Online QR Code Scanner from your web browser. No need to install. Just click and scan. Free and Easy!
              </p>
              <div class="ampstart-btn ampstart-btn-secondary caps md-ml4">
                Scan QR Code Now
              </div>
            </div>
          </div>
        </a>
      </section>
      <section class="commerce-hero-content-wrapper center overflow-hidden">
        <a href="qr-code-generator.php" class="text-decoration-none block">
          <amp-img
            class="commerce-hero-image"
            src="img/ninjaqr/small-qr-code-generator-ninjaqr.jpg"
            width="750"
            height="330"
            layout="responsive"
            media="(max-width: 52.06rem)"
            alt="QR Code Generator"
            noloading=""
          >
            <div placeholder="" class="commerce-loader"></div>
          </amp-img>
          <amp-img
            class="commerce-hero-image"
            src="img/ninjaqr/wide-qr-code-generator-ninjaqr.jpg"
            width="2560"
            height="800"
            layout="responsive"
            media="(min-width: 52.07rem)"
            alt="QR Code Generator"
            noloading=""
          >
            <div placeholder="" class="commerce-loader"></div>
          </amp-img>
          <div
            class="commerce-hero-content commerce-hero-content-theme-primary flex justify-center flex-column md-mx-auto md-p0"
          >
            <div class="commerce-hero-align md-mx-auto">
              <h2
                class="commerce-hero-content-title h4 md-h1 caps md-mb2 md-pl4"
              >
                QR Code Generator
              </h2>
              <p class="commerce-hero-content-body">
                Create QR Code easily. Type any text you want, we will generate the QR Code for you in a blitz!. Online, Free, no need to install anything.
              </p>
              <div class="ampstart-btn ampstart-btn-secondary caps md-ml4">
                Create QR Code
              </div>
            </div>
          </div>
        </a>
      </section>

      
    


    </main>


    <?php

      include "include/footer.php";
    ?>

</body>
</html>