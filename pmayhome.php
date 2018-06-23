<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Online PMAY E-learning module for ULBs and general citizens">
  <meta name="keywords" content="PMAY, Pradhan Mantri Awas Yojna, ULBs, Urban Local Bodies, E-learning, State of Maharashtra, policies">

  <title>New Home</title>
 
  <link href="other/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  <link href="other/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">    
  <link href="css/newHome.css" rel="stylesheet">
    <style type="text/css">iframe.goog-te-banner-frame{ display: none !important;}</style>
  <style type="text/css">body {position: static !important; top:0px !important;}</style>

</head>

<body >

  <div class="d-flex justify-content-center heading">
    <div class="text-right">
      <page-header><h3>Welcome to the PMAY E-learning Module of ULBs and General Citizens<h3>
          <?php if(!isset($_REQUEST['lang'])){?>
               <form>
                  <input type="hidden" name="lang" value="eng"/>
                   <button type="submit" class="btn" formaction="<?php echo $_SERVER['PHP_SELF'];?>">English</button> 
                
               </form>
             <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,mr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        
          <?php }else{?>
              <form>   
                  <button type="submit" class="btn" formaction="<?php echo $_SERVER['PHP_SELF'];?>">Marathi</button> 
               </form>
               <?php }?>
        </div>
      </page-header>
      
  </div>
   
  <div class="container">
      <div class="row row-eq-height">
        <div class="col-md-6 col-sm-3 main">
          <div class="row cel"><img src="images/smartcity2.jpg" class="image"/></div>
          <div class="row cel"><p class="para">
        <!--   Train number 12759 is a train running between Chennai and Hyderabad. Chennai is located in the state of Tamil Nadu and Hyderabad is located in the state of Andhra Pradesh.The two cities are located at a distance of 790kms.

          The train 12759 is named as CHARMINAR EXP. It leaves Chennai at 18:10 on day 1 and reaches Hyderabad at 08:00 on day 2.It takes 13 hrs 50 mins to reach from its source to the destination.

          Some of the major stations that the train passes. -->
           The Mission will be implemented during 2015-2022 and will provide central assistance to Urban Local Bodies (ULBs) and other implementing agencies through States/UTs for:<br> 
                1. In-situ Rehabilitation of existing slum dwellers using land as a resource through private participation<br> 
                2. Credit Linked Subsidy <br>
                3. Affordable Housing in Partnership <br>
                <a href = 'https://pmaymis.gov.in/'>more here</a><br>
          </p></div>
        </div>
        <div class="col-md-6 col-sm-3 text-center">
          <a href="ulblogin.php" style="text-decoration: none;"><div class="row cel"><h5 class="general">Urban Local Bodies</h5></div></a>
          <a href = 'general_citizen.php' style = 'text-decoration : none'><div class="row cel"><h5 class="ulbs">General Citizens</h5></div></a>
        </div>
      </div>
  </div>
  
<script src="other/bootstrap/js/bootstrap.min.js"></script>
<script src="other/jquery/jquery.min.js"></script>
<script src="other/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
