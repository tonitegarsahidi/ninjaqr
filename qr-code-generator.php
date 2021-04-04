<?php
include "include/config.php";

//THIS ONE IS THE SETTING FOR CURRENT PAGE
$_PAGE_TITLE = "Online QR Code Generator, Free, Fast, No install";
//META SEO
$_CONFIG_METAAUTHOR = "Toni Tegar Sahidi - CV Ruang Rimbun Indonesia";
$_CONFIG_METADESCRIPTION = "Online QR Code Generator Online. Create QR Code from web online. 100% Free. Just Fill the text and We'll generate the QR Code for you.";
$_CONFIG_METAKEYWORD = "QR Code Generator, QR Code Maker, QR Code builder, QR code make NinjaQR, Best QR Code Apps Online";


include "include/header.php";
?>


<!-- PUT ANY HEADER CODE HERE -->
<?php

include "include/navbar.php";
include "include/sidebar.php";
?>


<main id="content" role="main" class="main pb2">

  <section class="md-col-6 pb5 md-px1 md-pt1 md-pb7 text-center gocenter">
    <div class="flex flex-column">
      <h1 class="h3 mb2">Online QR Code Generator</h1>
      <div id="boxhints" class="mb2">
        <p>
          To Generate the QR Code, fill the form with text you want to build QR Code. Click Create QR. The QR Code will be generated below.
        </p>
        <p>
        To <strong> Save the QR Code</strong> simply right click on QR Code then click Save Image. Or copy it to your document editor.
        </p>
        <p>Seel Also on our Online <a href="qr-code-scanner.php" title="Online QR Code Scanner and Reader"> QR Code Scanner and Reader to read QR Code</a></p>
      </div>
      

      <div class="text-center">

      
        <hr class="xs-hide sm-hide mt1 mb1" />

        <!-- Start Textarea -->
        <div class="ampstart-input inline-block relative m0 p0 mb0 mt0 text-center">
          <textarea name="mesage" id="qrmessage" class="gocenter block p1 m0" rows="2"></textarea>
          <label for="message" class="absolute top-0 right-0 bottom-0 left-0 gocenter" aria-hidden="true">CONTENT OF QR CODE</label>
        </div>

        <!-- End Textarea -->
        <div>
          <button type="button" id="buttongenerateqrcode" class="ampstart-btn ampstart-btn-secondary caps qr-button">
            GENERATE
          </button>
          <button type="button" id="buttondownloadqrcode" class="ampstart-btn ampstart-btn-secondary caps qr-button">
            DOWNLOAD
          </button>

        </div>

        <br>

        <!-- QR CODE BOX -->

        <div id="qrcodebox" class="mb2 mt2"></div>

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
<!-- CREDIT :  -->
<script src="js/qrcode-generator.js"></script>

<script>
var qrcodebox = document.getElementById("qrcodebox");
var buttongenerateqrcode = document.getElementById("buttongenerateqrcode");
var buttondownloadqrcode = document.getElementById("buttondownloadqrcode");
var textareamessage = document.getElementById("qrmessage");



var qrcode = new QRCode(document.getElementById("qrcodebox"), {
	text: "https://ninjaqr.com",
	width: 380,
	height: 380,
	colorDark : "#000000",
	colorLight : "#ffffff",
	correctLevel : QRCode.CorrectLevel.H
});


// GENERATE QR CODE
buttongenerateqrcode.onclick = function() {

    console.log("Generating QR for : "+ textareamessage.value);
    qrcode.clear();
    qrcode.makeCode(textareamessage.value);

};

// DOWNLOAD QR CODE
buttondownloadqrcode.onclick = function(){

  var downloadurl = "https://chart.googleapis.com/chart?chs=512x512&cht=qr&chl="+textareamessage.value;
  var a = document.createElement("a");
  a.href = downloadurl;
  a.setAttribute("download", "QR Code " + textareamessage.value);
  a.click();

}


</script>

</body>
</html>