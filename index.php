<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href="CSS\index.CSS" rel="stylesheet" type="text/css">

    <title>Aleksander</title>

<meta name="description" content=""/>
<meta name="keywords" content=""/>
</head>


<body>
   
  <div id="topPanel">
  <div class="smallLogo"></div>
  </div>

  <div id="topContainer">
  
    <div class="logo"> <img src="img\alex.jpg" alt="profileLogo" width="193" height="193" > </div>
    <div class="mainText"> Hito | DevHito | ... </div>
    <div class="underMainText"> Hello. I am writing in PHP and occasionally in something else. If you have a question, please write to me. </div>

    <div id="underAbountMe">
      <div class="somethingLikeClipBoard">
        <p id="email">a.bazanski@gmail.com</p>
        <button id="copyButton">Copy</button>
      </div>

     <!-- <button id="copyButton">Copy</button>-->
    </div>

  </div>
 

  <script>
    
    const copyButton = document.getElementById('copyButton');
    const emailElement = document.getElementById('email');

    copyButton.addEventListener('click', () => {
      const email = emailElement.textContent;
      
      const tempInput = document.createElement('input');
      tempInput.value = email;
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand('copy');
      document.body.removeChild(tempInput);

      console.log('Adres e-mail został skopiowany do schowka.');
    });

  </script>

</body>
</html>