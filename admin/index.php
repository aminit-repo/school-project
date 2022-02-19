<!--
  --initiated project : Ruzi international school administrative system
  -- developer : Alphonsus John Inisaziba
  --project start date: 9th january 2020
  --- client name: pst Ebizimo 


  /* PROJECT DETAILS*/
  Front end
    ** Bootstrap 4
    ** Jquery
-->  
<script type="text/javascript">
 var User={};
 var fList={};
</script>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ruzi control panel</title>
	<meta charset="utf-8">
  <meta name="author" content="Ruzi developers">
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="official ruzi international schools administrative system">   
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link href="assets/css/adminStyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome-free-5.12.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="f-home/f-home.css">
    <link rel="stylesheet" type="text/css" href="f-result/f-result.css">
    <style type="text/css">
      /*body { 
        background: url(../img/back.gif) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }  */

     .f-result-display{
        display: none;
      }

    </style>
    <style type="text/css">
.spinner {
  display: inline-block;
  width: 51.2px;
  height: 51.2px;
  position: relative;
  top: 50%;
  margin-top: -25.6px;
  line-height: 100%;
   font-family: sans-serif;
}
.spinner .text {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  margin-top: 1.6em;
  text-align: center;
  font-size: 80%;
  color: hsla(0, 0%, 0%, 0.4);
}
.spinner .spinner-circle {
  position: absolute;
  background-color: transparent;
  border-radius: 50%;
  border-style: solid;
  border-color: #181818 transparent #181818 transparent;
}
.spinner .spinner-circle.spinner-circle-outer {
  width: 51.2px;
  height: 51.2px;
  border-width: 12.8px;
  top: -6.400000000000002px;
  left: -6.400000000000002px;
  opacity: 0.2;
  -ms-filter: alpha(opacity=50);
  filter: alpha(opacity=50);
  -webkit-animation: spinner-rotate-outer 2s 0s ease-in-out infinite;
  animation: spinner-rotate-outer 2s 0s ease-in-out infinite;
}
.spinner .spinner-circle.spinner-circle-inner {
  width: 25.6px;
  height: 25.6px;
  border-width: 6.4px;
  top: 12.799999999999999px;
  left: 12.799999999999999px;
  opacity: 0.0;
  -ms-filter: alpha(opacity=70);
  filter: alpha(opacity=70);
  -webkit-animation: spinner-rotate-inner 3s 0s linear infinite;
  animation: spinner-rotate-inner 3s 0s linear infinite;
}
.spinner .spinner-circle.spinner-circle-single-1 {
  width: 38.4px;
  height: 38.4px;
  border-width: 9.6px;
  top: 3.200000000000001px;
  left: 3.200000000000001px;
  opacity: 0.9;
  -ms-filter: alpha(opacity=30);
  filter: alpha(opacity=30);
  -webkit-animation: spinner-rotate-single-1 5s 0s ease-in-out infinite;
  animation: spinner-rotate-single-1 5s 0s ease-in-out infinite;
  border-color: transparent transparent transparent #4dc3ff;
  box-shadow: 2px 0 2px #4dc3ff;
}
.spinner .spinner-circle.spinner-circle-single-2 {
  width: 0;
  height: 0;
  border-width: 25.6px;
  top: 6.399999999999999px;
  left: 6.399999999999999px;
  opacity: 0.0;
  -ms-filter: alpha(opacity=30);
  filter: alpha(opacity=30);
  -webkit-animation: spinner-rotate-single-2 7s 0s ease-in-out infinite;
  animation: spinner-rotate-single-2 7s 0s ease-in-out infinite;
  border-color: #4dc3ff transparent transparent transparent;
  box-shadow: 0 -12px 4px #4dc3ff;
}
@-webkit-keyframes spinner-rotate-outer {
  0% {
    -webkit-transform: rotateZ(0deg);
    transform: rotateZ(0deg);
  }
  100% {
    -webkit-transform: rotateZ(360deg);
    transform: rotateZ(360deg);
  }
}
@keyframes spinner-rotate-outer {
  0% {
    -webkit-transform: rotateZ(0deg);
    transform: rotateZ(0deg);
  }
  100% {
    -webkit-transform: rotateZ(360deg);
    transform: rotateZ(360deg);
  }
}
@-webkit-keyframes spinner-rotate-inner {
  0% {
    -webkit-transform: rotateZ(30deg);
    transform: rotateZ(30deg);
  }
  100% {
    -webkit-transform: rotateZ(390deg);
    transform: rotateZ(390deg);
  }
}
@keyframes spinner-rotate-inner {
  0% {
    -webkit-transform: rotateZ(30deg);
    transform: rotateZ(30deg);
  }
  100% {
    -webkit-transform: rotateZ(390deg);
    transform: rotateZ(390deg);
  }
}
@-webkit-keyframes spinner-rotate-single-1 {
  0% {
    -webkit-transform: rotateZ(56deg);
    transform: rotateZ(56deg);
  }
  20% {
    -webkit-transform: rotateZ(-132deg);
    transform: rotateZ(-132deg);
  }
  40% {
    -webkit-transform: rotateZ(-250deg);
    transform: rotateZ(-250deg);
  }
  60% {
    -webkit-transform: rotateZ(40deg);
    transform: rotateZ(40deg);
  }
  70% {
    -webkit-transform: rotateZ(-80deg);
    transform: rotateZ(-80deg);
  }
  100% {
    -webkit-transform: rotateZ(56deg);
    transform: rotateZ(56deg);
  }
}
@keyframes spinner-rotate-single-1 {
  0% {
    -webkit-transform: rotateZ(56deg);
    transform: rotateZ(56deg);
  }
  20% {
    -webkit-transform: rotateZ(-132deg);
    transform: rotateZ(-132deg);
  }
  40% {
    -webkit-transform: rotateZ(-250deg);
    transform: rotateZ(-250deg);
  }
  60% {
    -webkit-transform: rotateZ(40deg);
    transform: rotateZ(40deg);
  }
  70% {
    -webkit-transform: rotateZ(-80deg);
    transform: rotateZ(-80deg);
  }
  100% {
    -webkit-transform: rotateZ(56deg);
    transform: rotateZ(56deg);
  }
}
@-webkit-keyframes spinner-rotate-single-2 {
  0% {
    -webkit-transform: rotateZ(-24deg);
    transform: rotateZ(-24deg);
  }
  10% {
    -webkit-transform: rotateZ(142deg);
    transform: rotateZ(142deg);
  }
  20% {
    -webkit-transform: rotateZ(-87deg);
    transform: rotateZ(-87deg);
  }
  30% {
    -webkit-transform: rotateZ(-345deg);
    transform: rotateZ(-345deg);
  }
  40% {
    -webkit-transform: rotateZ(86deg);
    transform: rotateZ(86deg);
  }
  50% {
    -webkit-transform: rotateZ(175deg);
    transform: rotateZ(175deg);
  }
  60% {
    -webkit-transform: rotateZ(-245deg);
    transform: rotateZ(-245deg);
  }
  70% {
    -webkit-transform: rotateZ(4deg);
    transform: rotateZ(4deg);
  }
  80% {
    -webkit-transform: rotateZ(-132deg);
    transform: rotateZ(-132deg);
  }
  90% {
    -webkit-transform: rotateZ(345deg);
    transform: rotateZ(345deg);
  }
  100% {
    -webkit-transform: rotateZ(-24deg);
    transform: rotateZ(-24deg);
  }
}
@keyframes spinner-rotate-single-2 {
  0% {
    -webkit-transform: rotateZ(-24deg);
    transform: rotateZ(-24deg);
  }
  10% {
    -webkit-transform: rotateZ(142deg);
    transform: rotateZ(142deg);
  }
  20% {
    -webkit-transform: rotateZ(-87deg);
    transform: rotateZ(-87deg);
  }
  30% {
    -webkit-transform: rotateZ(-345deg);
    transform: rotateZ(-345deg);
  }
  40% {
    -webkit-transform: rotateZ(86deg);
    transform: rotateZ(86deg);
  }
  50% {
    -webkit-transform: rotateZ(175deg);
    transform: rotateZ(175deg);
  }
  60% {
    -webkit-transform: rotateZ(-245deg);
    transform: rotateZ(-245deg);
  }
  70% {
    -webkit-transform: rotateZ(4deg);
    transform: rotateZ(4deg);
  }
  80% {
    -webkit-transform: rotateZ(-132deg);
    transform: rotateZ(-132deg);
  }
  90% {
    -webkit-transform: rotateZ(345deg);
    transform: rotateZ(345deg);
  }
  100% {
    -webkit-transform: rotateZ(-24deg);
    transform: rotateZ(-24deg);
  }
}



 #desktop-feat .card{
    position: relative;
  }

   #desktop-feat .desktop-loader-cover{
    position: absolute;
    width: 100%;
    display: none;
   }
   .spinner{
    top: 6rem;
   } 

   #desktop-feat .card img.selected-feat{
    opacity: 0.2;
   }

   .feature:hover{
    cursor: pointer;
   }
    </style>



</head>
<body id="myPage" data-spy="scroll" data-offset="60" style="">

  <!-- feature icon image links -->
  <div class="d-none f-img-link-container">
    <img class="home card-img-top" src="../img/home.png" alt="home">
    <img class="message card-img-top" src="../img/message.png" alt="messages">
    <img class="gallery card-img-top" src="../img/gallery.jpg" alt="gallary">
    <img class="setting card-img-top" src="../img/setting.png" alt="setting">
    <img class="result card-img-top" src="../img/result.png" alt="result">
    <img class="controlpanel card-img-top" src="../img/controlpanel.jpg" alt="control panel">
    <img class="theme card-img-top" src="../img/theme.jpg" alt="result">
    <img class="entrance card-img-top" src="../img/entrance2.jpg" alt="entrance">
    <img class="activities card-img-top" src="../img/activities.jpg" alt="activities">
    <img class="desk card-img-top" src="../img/deskD1.png" alt="activities">
    <img class="added card-img-top" src="../img/background.jpg" alt="activities">
  </div>





  <!--navigation-->
<nav class="navbar navbar-expand-sm navbar-light loadtime f-home-nav">
  <div class="container-fluid">
  <div class="nav-item">
      <a class="navbar-brand f-home-default-text-color" style="font-size: 30px;" href="#">RUZI</a>
  </div>
    <div class="nav-item d-md-none f-home-custom-hide home-feature">
      <div id="f-home-profile" class="text-center p-2 bg-light text-primary mr-2" style="font-size: 25px;" ><i class="fas fa-question"></i></div>
      <div id="f-home-profile" class="text-center p-2 bg-light text-primary" style="font-size: 25px; border-style: solid;"><i class="fas fa-power-off"></i></div>
    </div> 
    <ul class="navbar-nav f-home-custom-hide home-feature home-lg-feat">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle user-name" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        </a>
        <div class="dropdown-menu dropdown-menu-right box-shadow" aria-labelledby="navbarDropdownMenuLink" style="font-size: 0.8rem; z-index: 10000;">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<nav class="nav justify-content-center sticky-top d-md-none f-home-custom-hide home-feature" id="mobile-search">
  <div class="container-fluid">
    <form>
      <div class="input-group mb-2 mr-sm-2">
      <input type="text" class="form-control" id="mobileSearch" placeholder="Quick Search" style="border-right: 0px; text-align: center;">
      <div class="input-group-append bg-white">
      <div class="input-group-text bg-white"><i class="fa fa-search"></i></div>
      </div>
    </div>
    </form>
  </div>  
</nav>

<ul class="nav justify-content-end sticky-top container-fluid toolbar border-bottom bg-white f-home-custom-hide">
  <li class="nav-item">
    <a class="nav-link active" href="#"><i class="fa fa-home"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="fa fa-cloud-upload-alt"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"><i class="fa fa-pen"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#"><i class="fa fa-trash"></i></a>
  </li>
</ul>


<nav class="bg-white pt-3 f-home-custom-hide d-none"  id="search-div">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-size: 12px;"><b>Neil Amstrong</b></a><span class="d-inline-block p-2" style="font-size: 12px;"> loader...</span>
</nav>
<div class="tab-content bg-white container d-md-none" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="font-size: 12px;"></div>
</div>


<nav class="nav justify-content-center pt-5 pb-5 f-home-bg-search f-home-custom-hide home-md home-lg-feat" id="desktop-search">
  <div class="container-fluid pt-4">
    <form class="mt-5 mt-sm-0 mb-5 mb-sm-0">
     <div class="row pt-md-4 pb-2">
      <div class="col-sm-0 col-md-2"></div>
     <div class="col-sm-12 col-md-8">
      <input class="form-control form-control-lg box-shadow" type="text" placeholder="Search">
     </div>
      <div class="col-sm-0 col-md-2"></div>
     </div>
     <div class="row">
         <div class="col text-center"><button class="btn btn-primary box-shadow" type="button" aria-expanded="false" aria-controls="collapseExample">Quick Search</button></div>
     </div>
      </form>
     </div>  
</nav>

    <style type="text/css">
       #user-slogan{
        width: 60px;
        height: 60px;
        border-radius: 100%;
        margin: auto;
        padding-top: 5px;
        animation: inis-slogan 1s ease infinite;
        position: relative;
       }
       #user-slogan span{
        display: block;
        border-radius: 100%;
        background-color: #000080;;
        color: white;
        width: 50px;
        height: 50px;
        margin: auto;
        font-size: 30px;
       }


   /* ALL LOADERS */

.loader{
  width: 50px;
  height: 50px;
  border-radius: 100%;
  position: relative;
  margin: auto;
}

/* LOADER 1 */

#loader-1:before, #loader-1:after{
  content: "";
  position: absolute;
  top: -10px;
  left: -10px;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 5px solid transparent;
  border-top-color:  #000080;;
}

#loader-1:before{
  z-index: 100;
  animation: spin 1s infinite;
}

#loader-1:after{
  border: 5px solid #ccc;
}

@keyframes spin{
  0%{
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100%{
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.option-widget svg{
  fill: #000080;
  font-stretch: expanded;
}
.option-widget svg:hover{
  fill: green;
}

.alert{
  font-size: 10px;
  padding: 1px;
  padding-right: 6px;
  padding-left: 6px;
}
.alert-cover{
  position: relative;
}
.alert-in-cover{
  position: absolute;
  top: -12px;
}
.alert-in-cover .close{
  font-size: 10px; 
  padding: 0px; 
  top: -4px; 
  right: -4px;
}

.sign-div{
  position: relative;
}

    </style>


<!-- sign in container -->
<div class="container-fluid loadtime">
  <div class="container signin-div signineffect mt-5 p-4 bg-white" style="min-height: 300px;">
    <!--<div class="f-home-signin-head f-home-default-text-color pb-3" style="border-bottom:  0.5px solid gray;">
      <div class="text-center">
        <span>S</span><span>ign</span><span> I</span><span>n</span>
      </div>
    </div>-->
    <div class="option-widget">
       <div class="row  container" style="padding-top: 50px; padding-bottom: 55px;">
        <div class=" col col-sm-6">
        <div class="text-center text-muted signinbutton d-inline-block">
          <a href="passwordclick" class="f-home-option-button d-block"><img src="../img/passtemp.png" style="width: 100%;">
          </a>
          <a href="passwordclick" class="description passlock text-muted f-home-default-font">Password Login</a>
       </div>
        </div>
        <div class="col col-sm-6">
          <div class="d-inline-block text-center signinbutton">
         <a href="idclick" class="f-home-option-button d-block"><img src="../img/idtemp.png" style="width: 100%;"></a>
        <a href="idclick" class="description text-muted f-home-default-font">ID card Login</a>
       </div>
        </div>
      </div>    
    </div>



    <div class="password-widget f-home-custom-hide">
      <div><img src="../img/passtemp.png"></div>
      <div class="p-3 alert-cover">
         <div class="alert-in-cover" style="top: 3px;">
          <div class="alert alert-info alert-dismissible fade email-alert" role="alert">
             <span class="info"></span>
              <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>--></div>
        </div>
        <input class="form-control" type="text" placeholder="Enter your Email" class="customfont" >
        <!--<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">-->
      </div>
      <div class="pl-3 pr-3 alert-cover">
        <div class="alert-in-cover">
           <div class="alert alert-info alert-dismissible fade password-alert" role="alert">
             <span class="info"></span>
              <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span></button>--></div>
        </div>

        <input class="form-control" type="password" placeholder="Enter your Password" class="customfont">
      </div>
     <!-- <div class="p-3 pt-5 signin-button-control">
        <div class="d-inline-block"><a href="forgotpassclick" class="text-muted customfont">forgot password ?</a></div><div class="d-inline-block"><button type="button" class="btn btn-primary btn-sm f-home-default-bg-color custombutton">Next</button></div>
      </div> -->
    </div>

    <!-- section that handles sigining in via qr code-->
    <div class="id-widget">
       
    </div>

    <div class="activate-widget f-home-custom-hide">
      <div class="activate-head">
        <img src="../img/Settings.png" class="">
      </div>
      <div id="step-one" class="f-home-custom-hide">
        <p class="text-center pt-4">Hello!, do you have an ID Card?</p>
        <p><button type="button" class="btn yes f-home-default-bg-color text-white custombutton" id="activate-yes">Yes</button><button type="button" class="btn no f-home-default-bg-color text-white custombutton" id="activate-no">NO</button></p>
      </div>

      <div id="step-two" class="f-home-custom-hide">
         <div class="container pt-5">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1" style="background-color: #FFFFFF; border-left: 0px; border-right: 0px; border-top: 0px; border-radius: 0px;"><img src="../img/id5.jpg" style="width: 14px;"></span>
            </div>
            <input type="text" class="form-control form-control styled-input" placeholder="ID number" aria-label="Username" aria-describedby="basic-addon1">
          </div>
        </div> 
      </div>

      <div id="step-three" class="f-home-custom-hide">
          <div class="container pt-3">
            <div class="input-group mb-2">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1" style="background-color: #FFFFFF; border-left: 0px; border-right: 0px; border-top: 0px; border-radius: 0px;"><img src="../img/emailnew.png"  style="width: 60%;"></span>
           </div>
            <input type="text" class="form-control form-control-sm styled-input" placeholder="enter mail" aria-label="email" aria-describedby="basic-addon1">
          </div>
           <div class="input-group mb-2">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1" style="background-color: #FFFFFF; border-left: 0px; border-right: 0px; border-top: 0px; border-radius: 0px;"><img src="../img/password.png"  style="width: 60%;"></span>
           </div>
            <input type="password" class="form-control form-control-sm styled-input" placeholder="password" aria-label="choose a password" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1" style="background-color: #FFFFFF; border-left: 0px; border-right: 0px; border-top: 0px; border-radius: 0px;"><img src="../img/password.png"  style="width: 60%;"></span>
           </div>
            <input type="password" class="form-control form-control-sm styled-input" placeholder="confirm password" aria-label="choose a password" aria-describedby="basic-addon1">
          </div>
        </div>
      </div>

      <div id="step-four" class="f-home-custom-hide">
        <div class="container pt-5">
          <p class="text-center"><span>Hi John!, Is this your phone number ? </span></p>
           <div class="input-group" style=" width: 152px; margin: auto;">
            <input type="text" class="form-control form-control-sm" disabled="disabled" style="width: 110px; background-color: #FFFFFF; font-size: 12px; border-top: 0px; border-radius: 0px; border-left: 0px; border-right: 0px;" value="+234 8133800401" aria-label="choose a password" aria-describedby="basic-addon1">
            <div class="input-group-append">
             <span class="input-group-text fa fa-pen" id="basic-addon1" style="background-color: #FFFFFF; border: 0px; width:20px;font-size: 14px;">edit</span>
           </div>
          </div>
        </div>
      </div>

      <div id="step-five" class="f-home-custom-hide">
        <div class="container pt-5">
          <div class="input-group">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1" style="background-color: #FFFFFF; border-left: 0px; border-right: 0px; border-top: 0px; border-radius: 0px;"><img src="../img/gsm1.png" style="width: 12px;"></span>
           </div>
            <input type="text" class="form-control form-control-sm styled-input" style="height: 40px;" placeholder="enter your phone number" aria-label="enter your Phone number" aria-describedby="basic-addon1">
          </div>  
        </div>
      </div>

      <div id="step-six" class="f-home-custom-hide">
        <div class="container">
        <p>This contact <span>08133800401<span> could not be found in our record</p>
          <div class="input-group">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1" style="background-color: #FFFFFF; border-left: 0px; border-right: 0px; border-top: 0px; height: 30px; border-radius: 0px;">Surname </span>
           </div>
            <input type="text" class="form-control form-control-sm styled-input" aria-label="enter your surname" aria-describedby="basic-addon1" style="height: 30px;">
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1" style="background-color: #FFFFFF; border-left: 0px; border-right: 0px; border-top: 0px; height: 30px; border-radius: 0px;">Other names</span>
           </div>
            <input type="text" class="form-control form-control-sm styled-input" aria-label="enter your other names" aria-describedby="basic-addon1" style="height: 30px;">
          </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01" style="background-color: #FFFFFF; border-left: 0px; border-right: 0px; border-top: 0px; height: 30px; border-radius: 0px;">Position</label>
        </div>
        <select class="custom-select styled-input" id="inputGroupSelect01" style="height: 30px;">
          <option selected>Choose...</option>
          <option value="1">Director</option>
          <option value="2">Principal</option>
          <option value="">Administrator</option>
          <option value="3">General Supervisor</option>
          <option value="">Teacher</option>
          <option value="">Instructor</option>
        </select>
        </div>
        </div>
      </div>


      <div id="step-seven" class="f-home-custom-hide">
        <div class="container mt-3">
          <p class="text-center">A verifiction code has been sent to <span>alphainis@gmail.com</span> and <span>08133800401</span></p>
            <input type="text" class="form-control form-control styled-input d-block w-50 m-auto text-center" placeholder="Enter Code" aria-label="Username" aria-describedby="basic-addon1">
          <p class="mt-2"><button type="button" class="btn btn-sm next-btn f-home-default-bg-color text-white d-block w-50 m-auto">VERIFY</button></p>
        </div>
      </div>
    </div>

 

  <!--wait widget starts here -->
    <div class="wait-widget f-home-custom-hide">
      <p class="p-2">
        <div class="loader f-home-custom-hide" id="loader-1"></div>
          <div class="user-identification">
           <p class=""><div class="bg-light" id="user-slogan" class="text-center"><span class="text-center user-slogan-text"></span></div><div class="text-center text-muted user-name" style="font-size: 18px;"></div></p>
      </div>
      </p>
      <p class="text-center text-muted pt-3" style="font-size: 15px;">Please wait while i prepare your workspace for you<p>
    </div>
    <div id="signin-loader-div" class="f-home-custom-hide">
      <div id="f-home-f-home-loader-box-container" class="p-3">
        <div id="f-home-loader-box"></div>
      </div>
    </div>
    <div class="direction-btns"><div class="extras"><a href="forgotpassclick" class="text-muted f-home-default-font f-home-custom-hide forgot">forgot password ?</a><a href="activateclick" class="text-muted f-home-default-font">activate account</a></div><div class="control-btns-cover"><button  type="button" class="btn btn-sm back-btn f-home-default-text-color custombutton" id="back">Back</button><button type="button" class="btn btn-sm next-btn f-home-default-bg-color text-white custombutton" id="next">Next</button></div></div>  
  </div>
</div>


<!-- features for desktop -->
 <div class="container-fluid mt-md-5 mt-sm-5 f-home-custom-hide home-lg-feat" id="desktop-feat">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner f-home-icon-append">  
    <div class="carousel-item active w-100">    
      <div class="card-deck p-3 f-home-icon-dom1" style="justify-content: center;">

     <!--<div class="card box-shadow f-home-home-icon" style="max-width: 250px;" >
        <a data-toggle="modal" class="feature">
        <img class="card-img-top" src="../img/theme.jpg" alt="home" style="opacity: 0.5">
        <div class="card-body text-center bg-white">
          <small class="text-muted font-weight-light">home</small>
        </div>
        <cite class="f-home-custom-hide">home</cite>
      </a>
     <div class="desktop-loader-cover text-center">
     <div style="">
      <div class="spinner">
        <div class="spinner-circle spinner-circle-outer"></div>
        <div class="spinner-circle-off spinner-circle-inner"></div>
        <div class="spinner-circle spinner-circle-single-1"></div>
        <div class="spinner-circle spinner-circle-single-2"></div>
        <div class="text">...working...</div>
      </div>
     </div> 
     </div>
    </div>


    <div class="card box-shadow f-home-message-icon" style="max-width: 250px;">
      <a href="#exampleModalCenter" data-toggle="modal" class="feature">
      <img class="card-img-top" src="../img/message.png" alt="messages">
       <div class="card-body  text-center bg-white">
        <small class="text-muted font-weight-light">messages</small>
      </div>
      <cite class="f-home-custom-hide">message</cite>
    </a>
    </div>


  <div class="card box-shadow f-home-gallery-icon" style="max-width: 250px;">
    <a href="#exampleModalCenter" data-toggle="modal" class="feature">
    <img class="card-img-top" src="../img/gallery.jpg" alt="gallary">
    <div class="card-body text-center bg-white align-bottom">
      <small class="text-muted font-weight-light">manage gallery</small>
    </div>
    <cite class="f-home-custom-hide">gallery</cite>
    </a>
  </div>


  <div class="card box-shadow f-home-result-icon">
    <a href="#exampleModalCenter" data-toggle="modal" class="feature">
    <img class="card-img-top" src="../img/result.png" alt="result">
    <div class="card-body text-center bg-white">
      <small class="font-weight-light text-muted font-weight-light">manage student result</small>
    </div>
    <cite class="f-home-custom-hide">result</cite>
  </a>
  </div>


 <div class="card box-shadow f-home-result-icon">
    <a href="#exampleModalCenter" data-toggle="modal" class="feature">
    <img class="card-img-top" src="../img/setting.png" alt="setting">
    <div class="card-body text-center bg-white">
      <small class="text-muted">settings</small>
    </div>
    <cite class="f-home-custom-hide">setting</cite>
    </a>
  </div>  -->


</div>
    </div>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

 <!-- end features for desktop-->



<!-- features for mobile views -->
<div class="container-fluid d-md-none home-sm f-home-custom-hide home-feature" id="mobile-features">

  <!-- this a category of features -->
  <div class="jumbotron mt-3 mb-3 pt-2">

    <span class="text-primary">Accesories</span>
    <hr class="my-4">
<a class="d-inline-block border-warning text-center rounded m-2 feature home f-home-home-icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-home fa-2x"></i> <!-- uses solid style -->
  </div>
  <div class="font-weight-light" style="font-size: 10px;">home</div>
  <cite class="f-home-custom-hide">home</cite>
</a>

<a class="d-inline-block border-warning text-center rounded m-2 feature message f-home-message-icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-envelope fa-2x"></i> <!-- uses solid style -->
  </div>
  <div class="font-weight-light" style="font-size: 10px;">message</div>
  <cite class="f-home-custom-hide">message</cite>
</a>

<a class="d-inline-block border-warning text-center rounded m-2 feature gallary f-home-gallery-icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-images fa-2x"></i> <!-- uses solid style -->
  </div>
  <div class="font-weight-light" style="font-size: 10px;">gallery</div>
  <cite class="f-home-custom-hide">gallery</cite>
</a>

<a class="d-inline-block border-warning text-center rounded m-2 feature result f-home-result-icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-file-medical-alt fa-2x"></i> <!-- uses solid style -->
  </div>
  <div class="font-weight-light" style="font-size: 10px;">result</div>
  <cite class="f-home-custom-hide">result</cite>
</a>

</div>

    <!-- this a category of features -->
  <div class="jumbotron mt-3 mb-3 pt-2">
    <span class="text-primary">Manage Result</span>
    <hr class="my-4">
    <a class="d-inline-block border-warning text-center rounded m-2 feature home f-home-monitor-icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-home fa-2x"></i> <!-- uses solid style -->
  </div>
  <div class="font-weight-light" style="font-size: 10px;">monitor</div>
  <cite class="f-home-custom-hide">monitor</cite>
</a>

<a class="d-inline-block border-warning text-center rounded m-2 feature message f-home-message-icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-envelope fa-2x"></i> <!-- uses solid style -->
    </div>
  <div class="font-weight-light" style="font-size: 10px;">message</div>
  <cite class="f-home-custom-hide">message</cite>
</a>

<a class="d-inline-block border-warning text-center rounded m-2 feature gallary f-home-gallery-icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-images fa-2x"></i> <!-- uses solid style -->
  </div>
  <div class="font-weight-light" style="font-size: 10px;">gallery</div>
  <cite class="f-home-custom-hide">gallery</cite>
</a>

<a class="d-inline-block border-warning text-center rounded m-2 feature result f-home-result-icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-file-medical-alt fa-2x"></i> <!-- uses solid style -->
  </div>
  <div class="font-weight-light" style="font-size: 10px;">result</div>
  <cite class="f-home-custom-hide">result</cite>
</a>
  </div>


  <!-- this a category of features -->
   <div class="jumbotron mt-3 mb-3 pt-2">
    <span class="text-primary">Settings</span>
    <hr class="my-4">
    <a class="d-inline-block border-warning text-center rounded m-2 feature reset-pass f-home-resetpass-icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-key fa-2x"></i> <!-- uses solid style -->
  </div>
  <div class="font-weight-light" style="font-size: 10px;">reset password</div>
  <cite class="f-home-custom-hide">reset-pass</cite>
</a>

<a class="d-inline-block border-warning text-center rounded m-2 feature theme f-home-resettheme -icon" href="#exampleModalCenter" data-toggle="modal">
    <div class="bg-primary text-white p-2 rounded box-shadow">
     <i class="fas fa-project-diagram fa-2x"></i> <!-- uses solid style -->
  </div>
  <div class="font-weight-light" style="font-size: 10px;">theme</div>
  <cite class="f-home-custom-hide">reset-theme</cite>
</a>
  </div><!-- a category ends here -->

</div>





<!-- search interface  -->
<div class="container-fluid search">
  <div class="container-fluid temp">
     
  </div>

</div>



<!-- Modal -->
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered loader" role="document">
    <img src="../img/ruziloader.svg" style="display: inline-block; margin: auto; width: 80%;">
  </div>
</div>

<div class="fixed-bottom bg-primary p-2 text-center text-white w-25 m-2 box-shadow f-home-custom-hide" id="name-button-widget">
  <i class="fas fa-user-shield"></i><span class="user-name pl-2"></span>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="assets/js/vendor/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/jquery-1.10.2.min.js"></script>
    <!--<script type="text/javascript" src="../js/vendor/jquery-slim.min.js"></script>-->
    <script type="text/javascript" src="assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/core.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <script type="text/javascript" src="assets/js/UserClasses.js"></script>
    <script type="text/javascript" src="assets/js/features.js"></script>
    <script type="text/javascript" src="assets/js/classes.js"></script>
   

    <script type="text/javascript" src="assets/js/deamon.js"></script>
</body>  
      <noscript>
         <div style="text-align: center; font-size: 40px;">This application runs on a javascript engine, enable javascript on your browser or use a different web browser to access this application</div>
      </noscript>
<script type="text/javascript"> 
  /*home.disableWidgets();
  gallery.disableWidgets();*/

 /* if (typeof(Storage) !== "undefined"){
    //if values are not existing in browser memory
    if(localStorage.firstname!=="undefined"){
      //store user details 
        localStorage.firstname="james";
        localStorage.lastname="alex";
    }else{
       alert(localStorage.firstname);
    }    

  }else{// else use session global variable

  }


/*  function getUser(){
    // do this for browsers that support web storage
    if (typeof(Storage) !== "undefined"){
       return {
          firstname: localStorage.firstname,
          lastname:  localStorage.lastname
       }
     }else{
       //do this for other devices that does not support web storage
     }   
  } */


   function getfeature(e){
        //verify the feature, it's request information and prepare it's attribute
        var address= e.find('cite').text(); 
        return { address: address }
   }
</script>

<script>
  $(document).ready(function(){

    $('.loadtime').css('visibility','visible');
    signin.setLoaderWidth();
    signin.setheight();//set the height of the signin container to maintain a fixed height, due to animation effect           

    // event registrations
   $('.signin-div').on('click','a, .custombutton',signin.click);
   $('.signin-div').on('focus', 'input',signin.passwordwidget.closeAlert);
    $('[data-toggle="tooltip"]').tooltip();



    $('body').on('click','.feature',function(e){
      e.stopPropagation();
     //verify feature object and kindly release it's details and the address to forward request
      var feature= getfeature($(this));
      //call the appropriate secretory of the Desired department to handle feature request
       featurelist[''+feature.address]['init']();
   })

   $('#exampleModalCenter').on('shown.bs.modal', function (e){
      $('#exampleModalCenter').modal('hide');
    }) 

    $('#myAlert').on('closed.bs.alert', function () {
       //
   })
     
     
    //check if the user is alreay signed in
      if (typeof(Storage) ==="undefined") {
        // Sorry! No Web Storage support..
        
      } else {

       // Code for localStorage/sessionStorage.
         if(localStorage.id=== "undefined" || !(localStorage.id) ){
            //open the signin section 
          
         }else{

            // close the option widget
            signin.widgets.option.DOM().hide();
            signin.manageextrasLinks("hide",true,true);
            $('.user-slogan-text').text(localStorage.firstname.charAt(0).toUpperCase());
            $('.user-name').text(localStorage.firstname);
            signin.widgets.wait.DOM().show();
            signin.widgets.wait.isOpen=true;
            //configure the system and open the home screen
            signin.directives.request.resigin=true;
            //create a  member object,
            User= new Member();
            //initialize the User.idno attribute
            User.idno= localStorage.id;
            User.requestObj= new request(CreatFeature.signin.request.resignin);
            User.request();
         }
    }

  });
</script>




    <script type="text/javascript">
      var lastOpened=false;
      var openedCollapsed=false;
      $('div[id^="list"]').on('show.bs.collapse', function () {
         if(lastOpened!=false){
            $('#'+lastOpened).collapse('hide');
            var id=$('.f-result-mobile-student-record li.'+lastOpened).removeClass('active-list');
            $('.f-result-mobile-student-record li.'+lastOpened+' a').removeClass('active');
            $('.f-result-mobile-student-record li.'+lastOpened+' i').removeClass('fa-caret-right');
            $('.f-result-mobile-student-record li.'+lastOpened+' i').addClass('fa-caret-down');

         }

         lastOpened = $(this).attr('id');
         $('.f-result-mobile-student-record li.'+lastOpened).addClass('active-list');
         $('.f-result-mobile-student-record li.'+lastOpened+' a').addClass('active');
          $('.f-result-mobile-student-record li.'+lastOpened+' i').addClass('fa-caret-right');
         list= lastOpened.substr(4);
        
      })
    </script>
    <script type="text/javascript">
      
      $(document).ready(function(){
         $('#f-result-desktop-list-link').click(function(){
          
               var temp=$(this).html();
               if(temp=="lis"){
                   //hide all list both moble and desktop
                   $('.f-result-desktop-list-record').attr('style','display: none');
                    $('.f-result-mobile-student-record').attr('style','display: none');
                    $('.f-result-mobile-info').attr('style','display: none'); 
                    $('.f-result-mobile-list-tool').attr('style','display: none');
                    $('.f-result-mobile-search').attr('style','display: none'); 
                    $(this).html("tab");

                     $('.f-result-mobile-table-container').removeClass('d-none'); 
                     $('.f-result-desktop-table-record').removeClass('d-none'); 
                     $('.f-result-mobile-table-tool-container').removeClass('d-none');
               }else{


               }
          
         })
      })
    </script>
</html>
