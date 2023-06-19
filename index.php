<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href="CSS\index.CSS" rel="stylesheet" type="text/css">
    <link href="fontello\css\fontello.css" rel="stylesheet" type="text/css">

    <title>Aleksander</title>

<meta name="description" content=""/>
<meta name="keywords" content=""/>
</head>


<body>
   
  <div id="topPanel">
  
    <div class="smallLogo"></div>
    
     <div id="icons">
      
       <i class="icon-github-circled"></i>
       <i class="icon-linkedin-squared"></i>
       <i class="icon-facebook-squared"></i>
        <div id="verticalSmallLine"></div>
       <i class="icon-mail-alt"></i>
       <div id="verticalSmallLine"></div>
       <i class="icon-moon"></i>
     
     </div>

  </div>

  <div id="topContainer">
  
    <div class="logo"> <img src="img\alex.jpg" alt="profileLogo" width="193" height="193" > </div>
    <div class="mainText"> Hito | DevHito | ... </div>
    <div class="underMainText"> Hello. I am writing in PHP and occasionally in something else. If you have a question, please write to me. </div>
  
     <div id="underAboutMeContainer">
    <div class="somethingLikeClipBoard">
        <p id="email">a.bazanski@gmail.com</p>
        <button id="copyButton">Copy</button>
    </div>

      
    </div>

   <!--
   Przykład Fontello
   
   <i class="icon-facebook-squared"></i> -->

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