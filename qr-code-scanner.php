<?php
include "include/config.php";

//THIS ONE IS THE SETTING FOR CURRENT PAGE
$_PAGE_TITLE = "Online QR Code Scanner and Reader";
//META SEO
$_CONFIG_METAAUTHOR = "Toni Tegar Sahidi";
$_CONFIG_METADESCRIPTION = "Free Online QR Code Scanner from web. Just Scan and copy the QR message. No need to install.";
$_CONFIG_METAKEYWORD = "QR Code, QR Code Scanner, QR Code reader, QRCode Scanner, QRCode reader, 2d barcode scanner, NinjaQR, QRCode";


include "include/header.php";
?>


<!-- PUT ANY HEADER CODE HERE -->
<?php

include "include/navbar.php";
include "include/sidebar.php";
?>


<main id="content" role="main" class="main pb2">
  <section class="md-col-6 px2 pt2 pb5 md-px1 md-pt1 md-pb7 text-center gocenter ">
    <div class="flex flex-column">
      <h1 class="h3 mb2">Online QR CODE Scanner and Reader</h1>
      <div id="boxhints" class="mb2">
        <p>
          TO SCAN : Click on "<strong>SCAN QR</strong>" to start Scanning using camera. <br/>Align your camera into the QR Code. 
        </p>
        <p>
        TO READ FROM IMAGE : Click <strong> "Upload Image"</strong> and choose image which contain QR Code.
        </p>
        <p>Once the Code is detected, the Extracted information can be seen below.</p>

        <p>Seel Also on our Online <a href="qr-code-generator.php" title="Online QR Code Generator"><strong>Online QR Code Generator</strong></a> to Create QR Code</p>

      </div>
      

      <div>

        <button type="button" id="buttonscannow" class="ampstart-btn ampstart-btn-secondary caps qr-button">
          SCAN QR
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

<!-- QR CODE SCANNER LIBRARY INCLUDED -->
<!-- thanks for minhazav for the code, credit : https://medium.com/@minhazav/html5qrcodescanner-end-to-end-qr-code-scanner-for-web-not-just-a-library-8f6a2d00794d -->
  <script src="js/html5-qrcode.min.js"></script>

  <script>
  

  const qrreaderbox = document.querySelector("#qr-reader");
  const buttonscannow = document.querySelector("#buttonscannow");
  const buttonstopscan = document.querySelector("#buttonstopscan");
  const buttonuploadimage = document.querySelector("#buttonuploadimage");

  const boxhints = document.querySelector("#boxhints");
  const boxchoosefile = document.querySelector("#boxchoosefile");

  const buttoncopytext = document.querySelector("#buttoncopytext");
  const buttongotourl = document.querySelector("#buttongotourl");

  const textarearesult = document.querySelector("#qrmessage");

  html5QrCode = null; 

  //qr code thing
  var html5QrCode; 

  const qrCodeSuccessCallback = message => { /* handle success */ }
  const config = { fps: 10, qrbox: 250 };



  var cameraId = null;
  var cameraIdIndex = -1;
  var cameraList = null;

  //JIKA TOMBOL SCAN NOW DI KLIK, LAKUKAN INI
  buttonscannow.onclick = function(){
    qrreaderbox.style.display = "block";
    buttonstopscan.style.display = "inline";
    buttonscannow.style.display = "none";
    boxchoosefile.style.display = "none";
    boxhints.style.display = "none";
    startScan();
  };

  buttonstopscan.onclick = function(){
    buttonstopscan.style.display = "none";
    buttonscannow.style.display = "inline";
    boxhints.style.display = "block";
    stopScan();
  };

  buttonuploadimage.onclick = function(){
    boxchoosefile.style.display = "block";
    stopScan();
    qrreaderbox.style.display = "block";
    buttonstopscan.style.display = "none";
    buttonscannow.style.display = "inline";
    
  };

  buttongotourl.onclick = function(){
    var url = textarearesult.value;
    //open the URL in new tab
    window.open(url, '_blank');
  }

  buttoncopytext.onclick = function(){
      /* Get the text field */
      var copyText = textarearesult;

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /* For mobile devices */

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      alert("Copied the text: " + copyText.value);

  }




  //QR CODE FUNCTION IS HERE

  //STOP SCANNING
  function stopScan(){

    if(html5QrCode != null){
        //first stop scanning dulu ya, 
        html5QrCode.stop().then(ignore => {
          // QR Code scanning is stopped.
          console.log("QR Code Scanning is Stopped");

          //remove the qr-shaded-region
          document.getElementById("qr-shaded-region").style.display = "none";
        }).catch(err => {
          // Stop failed, handle it.
        });
    }
  }


  // START SCANNING
  function startScan(){
    emptyTextArea();

    html5QrCode = new Html5Qrcode("qr-reader");
    console.log("START SCANNING USING CAMERA");
    // If you want to prefer back camera
    
    html5QrCode.start(
          { facingMode: "environment" },     // retreived in the previous step.
          {
            fps: 10,    // sets the framerate to 10 frame per second
            qrbox: 350  // sets only 250 X 250 region of viewfinder to
                        // scannable, rest shaded.
          },
          displayMessage,
          displayErrorMessage
          )
        .catch(err => {
          // Start failed, handle it. For example,
          console.log(`Unable to start scanning, error: ${err}`);
        });


  }

  //ON FILE INPUT CHOOSE IMAGE
  const fileinput = document.getElementById('qr-choose-file');

  fileinput.addEventListener('change', e => {

    emptyTextArea();

    if (e.target.files.length == 0) {
      // No file selected, ignore 
      return;
    }

    const imageFile = e.target.files[0];

    // Scan QR Code
    if(html5QrCode == null){
      html5QrCode = new Html5Qrcode("qr-reader");
    }

    qrreaderbox.style.display = "block";
    html5QrCode.scanFile(imageFile, true)
    .then(displayMessage)
    .catch(displayErrorMessage);
  });

  //EMPTYING THE TEXT AREA
  function emptyTextArea(){
    textarearesult.value = "";
  }


  //=================== SUCCESSFULL QR CODE SCANNING GOES HERE =============================
  //DISPLAY QR MESSAGE
  function displayMessage(qrmessage){
    console.log("QR Code Detected : " + qrmessage);
    textarearesult.value = qrmessage;
    qrreaderbox.style.display = "none";
    
    stopScan();

    if(isValidUrl(qrmessage)){
      buttongotourl.style.display = "inline";
    }
    else{
      buttongotourl.style.display = "none";
    }

    buttonscannow.style.display = "inline";
    buttonscannow.innerHTML = "Scan Again"
    buttonstopscan.style.display = "none";
  }

  //DISPLAY ERROR MESSAGE
  function displayErrorMessage(errormessage){
    //textarearesult.value = "Error in reading QR Code :(   \n" +  errormessage;
    console.log("QR Code is AFC - Away From Camera :p , thanks for watching this log console");
    console.log("Losers quite when they fail, winners fail until they succeed - Robert T Kiyosaki")
  }



  //this function check if certain string is a valid url
  //credit for this function :  https://stackoverflow.com/questions/1701898/how-to-detect-whether-a-string-is-in-url-format-using-javascript
  function isValidUrl(s) {
   s = s.toLowerCase();
   var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
   return regexp.test(s);
  }

 
  </script>

</body>
</html>