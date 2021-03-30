<?php
include "include/config.php";

//THIS ONE IS THE SETTING FOR CURRENT PAGE
$_PAGE_TITLE = "Online QR Code Generator Free, Fast, No install";
//META SEO
$_CONFIG_METAAUTHOR = "Toni Tegar Sahidi";
$_CONFIG_METADESCRIPTION = "Free Online QR Code Generator Online. Just Fill the text and We'll generate the QR Code for you.";
$_CONFIG_METAKEYWORD = "QR Code Generator, QR Code Maker, QR Code builder, QR code make NinjaQR, Best QR Code Apps Online";


include "include/header.php";
?>


<!-- PUT ANY HEADER CODE HERE -->
<?php

include "include/navbar.php";
include "include/sidebar.php";
?>


<main id="content" role="main" class="main pb2">
  <section class="md-col-6 px2 pt2 pb5 md-px4 md-pt4 md-pb7 gocenter">
    <div class="flex flex-column">
      <h1 class="h3 mb2">Online QR CODE Generator #1</h1>
      <div id="boxhints" class="mb2">
        <p>
          Click on SCAN BUTTON to start Scanning using camera. Align your camera into the QR Code. 
        </p>
        <p>
        You can also Upload Image to Read QR Code from an image.
        </p>
        <p>Once the Code is detected, the Extracted information can be seen below.</p>

      </div>
      

      <div>

        <button type="button" id="buttonscannow" class="ampstart-btn ampstart-btn-secondary caps qr-button">
          SCAN NOW
        </button>
        
        <button type="button" id="buttonstopscan" class="ampstart-btn ampstart-btn-secondary caps qr-button">
          STOP SCAN
        </button>
        or 
        <button type="button" id="buttonuploadimage" class="ampstart-btn ampstart-btn-secondary qr-button">
          Upload Image
        </button>

        <div id="boxchoosefile">
          <input type="file" id="qr-choose-file" accept="image/*">
        </div>

      <br>
      <!-- QR CODE PART IS HERE -->
        <div id="qr-reader">
        
        </div>
        
      
        <hr class="xs-hide sm-hide mt1 mb1" />



        <!-- Start Textarea -->
        <div class="ampstart-input inline-block relative m0 p0 mb0 mt3">
          <textarea name="mesage" id="qrmessage" class="block p1 m0" rows="4"></textarea>
          <label for="message" class="absolute top-0 right-0 bottom-0 left-0" aria-hidden="true">CONTENT OF QR CODE</label>
        </div>
        <!-- End Textarea -->
        <div>
          <button type="button" id="buttoncopytext" class="ampstart-btn ampstart-btn-secondary caps qr-button">
            Copy Text
          </button>

          <button type="button" id="buttongotourl" class="ampstart-btn ampstart-btn-secondary caps qr-button">
            Go To URL
          </button>
        </div>

      </div>

      <!-- include the library -->
        


      
    </div>
  </section>
</main>



<?php
include "include/footer.php";
?>

<!-- PUT ANY FOOTER CODE HERE, LIKE SCRIPT ETC -->

<!-- QR CODE GENERATOR LIBRARY INCLUDED -->


</body>
</html>