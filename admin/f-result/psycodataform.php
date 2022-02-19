<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="author" content="Ruzi developers">
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="official ruzi international schools administrative system">   
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link href="../assets/css/adminStyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/fontawesome-free-5.12.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="f-result.css">
</head>

<body id="myPage" data-spy="scroll" data-offset="60" class="">
<!--navigation-->
<nav class="navbar navbar-expand-sm navbar-light loadtime f-result-nav f-result-display">
  <div class="container-fluid">
  <div class="nav-item">
      <a class="navbar-brand default-text-color" style="font-size: 30px;" href="#">RUZI</a>
  </div> 
    <ul class="nav">
      <li class="nav-item">
          <a class="d-inline-block ml-3" style="width: 30px;"><object data="../assets/svg/home.svg" type="image/svg+xml" style="width: 100%;"></object></a>
      </li>
      <li class="nav-item"><a class="d-inline-block ml-3" style="width: 30px;"><object data="../assets/svg/folder.svg" type="image/svg+xml" style="width: 100%;"></object></a>
      </li>

        <a class="btn d-inline-block ml-3 nav-item" style="width: 30px; padding: 0px; z-index: 10;" data-toggle="collapse" href="#f-result-subjectlist" role="button" aria-expanded="false" aria-controls="collapseExample">Me
            <!--<object data="../assets/svg/open-menu.svg" type="image/svg+xml" style="width: inherit; cursor: inherit;"></object>-->
        </a>
     
      <li>
        <a class="d-inline-block ml-3" href="#mobileSearchCollapse"  data-toggle="collapse"  style="width: 30px;" id="f-result-desktop-list-link">lis</a>
        <!--<object data="../assets/svg/search.svg" type="image/svg+xml" style="width: 100%;"></object> --> 
      </li>
      </ul>
  </div>
</nav>

<div class="collapse" id="f-result-subjectlist">
 <div class="container-fluid">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Agricultural Science</li>
      <li class="list-group-item">Mathematics</li>
      <li class="list-group-item">Basic Education</li>
      <li class="list-group-item">Social Studies</li>
      <li class="list-group-item">Economics</li>
    </ul>
 </div>
</div>

  <!-- for mobile structure -->
  <div class="container-fluid d-md-none bg-light p-3 f-result-mobile-info f-result-display">
        <p>
           <h4><i class="fab fa-buysellads"></i> Cognitive</h4>
        </p>
        <div class="row mb-4" style="font-size: 11px !important;">
         <div class="col-4 col-sm-3">
          <div class="f-result-circular-progress"></div>
         </div>
         <div class="col-8 col-sm-9 pt-3">
           <h6>Agricultural Science | SS2A</h6>
           <div>40 student | 0 recorded</div>
           <div>Status - UNAPPROVED</div>
           <div><small>last updated- 20 may,2020</small></div>  
         </div>         
        </div>
        <div style="position: relative;" class="" ><a href="reportScript" style="position: absolute; right: 0px; bottom: 0px;">details</a></div>
  </div>
    

<div class="container-fluid">
  <!-- quick navigation section -->
  <div class="row d-none">
    <div class="col-md-3">
      <div class="f-result-quick-nav">
        <div class="d-inline-block"><i class="fas fa-home"></i></div>
        <div class="d-inline-block"><i class="fas fa-file-medical-alt"></i></div>
        <div class="d-inline-block"><i class="fa fa-envelope"></i></div>
        <div class="d-inline-block"><i class="fas fa-images"></i></div>
        <div class="d-inline-block"><i class="fab fa-buysellads"></i></div>
        <div class="d-inline-block"><i class="fas fa-file-medical-alt"></i></div>
      </div>
    </div>
    <div class="col-md-9" style="">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Agric Sc.</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Social </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Economics </a>
        </li>
      </ul>  
    </div>
  </div>

  <!-- quick navigation section -->
  <div class="row d-none d-md-flex">
    <div class="col-md-3">
      <div class="quick-nav d-none">
        <div class="d-inline-block"><i class="fas fa-home"></i></div>
        <div class="d-inline-block"><i class="fas fa-file-medical-alt"></i></div>
        <div class="d-inline-block"><i class="fa fa-envelope"></i></div>
        <div class="d-inline-block"><i class="fas fa-images"></i></div>
        <div class="d-inline-block"><i class="fab fa-buysellads"></i></div>
        <div class="d-inline-block"><i class="fas fa-file-medical-alt"></i></div>
      </div>
    </div>
    <div class="col-md-9 w-100" style=" position: relative;">
      <div style="width: 90%; position: absolute; bottom: 0.25rem; right: 0px; border-bottom: 1px solid rgba(0,0,0,0.16);"></div>
      <div   style="padding: 1rem; position: absolute; left: 4rem; bottom: -1rem; z-index: 100; background-color: #fff; font-size: 26px; font-weight: bold;">Data Sheet</div>
    </div>
  </div>
  <style type="text/css">
    li{
      list-style: none;
    }
    .outer-list{
      padding: 0px;
      height: 125px;
      overflow-y: auto;      
    }
    .inner-list li{
       padding: 0.20rem;
      position: relative;
    }
    .inner-list{
      margin-right: 0.25rem;
    }
    .outer-list object{
       margin-right: 5px;
    }
    .active-file i{
      color: #90EE90;
    }

    .inner-list li i{
      margin-right: 0.25rem;
    }
    .inner-list li span{
      position: absolute;
      right: 0.1rem;
    }
  </style>


  <div class="row" style="position: relative;">
    <div class="col-md-3">
      <div class="container shadow  pt-2 pb-2 sidebar d-none d-md-block" style="position: absolute;">
        <p>
           <h4><i class="fab fa-buysellads"></i> Cognitive</h4>
        </p>

        <p>
          
        <!--<div class="f-result-circular-progress m-auto shadow"></div> -->
           <h6>Desk</h6>
           <div>
            <ul class="outer-list text-monospace">
              <li><object data="../assets/svg/folder.svg" type="image/svg+xml" style="width: 5%;"></object> Subject List
                <ul class="inner-list" style="font-size: 10px; max-height: 70px; overflow-y: scroll;">
                  <li class="active-file"><i class="fas fa-file"></i> Agricultural Science <span>21 May</span></li>
                  <li><i class="fas fa-file"></i> Handwriting <span>11 June</span></li>
                  <li><i class="fas fa-file"></i> English Language <span>21 May</span></li>
                  <li><i class="fas fa-file"></i> Social Studies <span>21 May</span></li>
                  <li><i class="fas fa-file"></i> Agricultural Science <span>21 May</span></li>
                </ul>
              </li>
            </ul>
           </div>
        </p>

        <p>
          <h6>Infography:</h6>
          <p> 
           <div> 
            <div class="progress" style="height: 4px;">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          </p>
          <p class="text-right"><a href="">view</a></p>    
        </p>

        <p>
          <h6>Guidlines:</h6>
          <div class="card">
            <div class="card-body" style="font-size: 11px;">
              <p class="card-text">With supporting text below. this must be the best idea where i can have a guideline on how the system works  and i can send a request for a correction</p>
              <div class="text-right"><a href="#">reply</a></div>
            </div>
          </div>
        </p>

       <!-- <p>
          <div class="alert alert-primary text-center" role="alert">UNAPPROVED</div>
        </p> -->
      </div>
     
    </div>
    <div class="col-md-9">
    
      <!-- desktop search container -->
      <div class="row container d-none">
        <div class="col pt-3">
          <h5>Records</h5>
                <p><div class="result-custom-search-container" style="width: 96%;">
                      <div class="input-group f-result-custom-input-group input-group-sm">
                        <div class="input-group-prepend f-result-custom-input-group-prepend">
                          <div style="width: 14px;"></div>
                        </div>
                      <input type="text" class="form-control f-result-custom-input" placeholder=" Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append f-result-custom-input-group-append mr-1">
                      <object data="../assets/svg/search.svg" type="image/svg+xml" style="height: 14px;"></object>
                    </div>
                    </div>
                  </div>
                </p>
        </div>
        <div class="col">
          
        </div>
      </div>

      <!-- mobile structure -->
    <div class="sticky-top d-md-none f-result-mobile-tool" style="background-color: white;">
      <div class="container mt-4 pt-3 f-result-mobile-list-tool">
        <h5 style="position: relative;"><a a href="#recordCollapse" data-toggle="collapse" aria-expanded="true" aria-controls="recordCollapse">Records</a> <a href="#guidelineCollapse"  data-toggle="collapse" aria-expanded="false" aria-controls="guidelineCollapse" style="position: absolute; right: 0px; font-size: 12px;" >guideline</a></h5>
      </div>


      <!-- mobile table tool widget -->
      <div class="container-fluid f-result-mobile-table-tool-container p-1 d-none">
        <div class="f-result-mobile-table-tool p-2" style="position: relative;">
          <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-pen-fancy"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="far fa-copy"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-paste"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="far fa-file-pdf"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-info"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-plus"></i></div>
           <button class="btn btn-sm" style="background-color: #fff; border: 1px solid rgba(0, 0, 0, 0.16); font-size: 12px; position: absolute; right: 3.25rem;">Max</button>
           <button class="btn btn-sm" style="background-color: #fff; border: 1px solid rgba(0, 0, 0, 0.16); font-size: 12px; position: absolute; right: 0.25rem;">Min</button>
        </div>
        

        <div class="p-1">
          <div class="row">
            <div class="col-8">
              <input type="text" name="" placeholder="search record">
            </div>
            <div class="col-2">
              <input type="text" name="" placeholder="col">
            </div>
            <div class="col-2">
              <input type="text" name="" placeholder="value">
            </div>
          </div>
        </div>

        <div class="">
            <table class="w-100" style=" ">
              <thead>
                <th style="width: 5%;">sn</th>
                <th style="width: 65%;">names:</th>
                <th style="width: 10%;">test 1:</th>
                <th style="width: 10%;">test 2</th>
                <th style="width: 10%;">exams</th>
              </thead>
            </table>
        </div>
      </div>
    </div>

       <!--student record for mobile view-->
      <div class="collapse show d-md-none" id="recordCollapse">
        <div class="w-100 ">
        <p><div class="result-custom-search-container f-result-mobile-search m-auto" style="width: 90%;">
              <div class="input-group f-result-custom-input-group input-group-sm">
                  <div class="input-group-prepend f-result-custom-input-group-prepend">
                          <div style="width: 14px;"></div>
                  </div>
                  <input type="text" class="form-control f-result-custom-input" placeholder=" Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append f-result-custom-input-group-append mr-1">
                      <object data="../assets/svg/search.svg" type="image/svg+xml" style="height: 14px;"></object>
                  </div>
              </div>
            </div>
        </p>
      </div>

     <!--student record -->
      <div class="f-result-mobile-student-record">
        <ul class="list-group list-group-flush">
          <li class="list-group-item list1"><a href="#list1" data-toggle="collapse" class=""><span><i class="fas fa-caret-down"></i></span> Agala Victoria </a>
             <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
                      <!-- collapse -->
            <div class="collapse" id="list1">
              <div class="container p-4">
                <div class="borderx">
                  <span class="editbutton"><a href="">edit</a></span>
                  <span class="submitbutton"><button class="btn btn-sm">save</button></span>

                  <div class="p-4">
                    <div class="styled-heading">
                      <h6 style="">Prelimary</h6>
                    </div>
                    <div class="container p-4">
                      <div class="row mb-2">
                      <div class="col-8 col-sm-6">
                        test one
                      </div>
                      <div class="col-4 col-sm-6">
                        <input type="text" name="ca-1" maxlength="6" size="5">
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-8 col-sm-6">
                        test two
                      </div>
                      <div class="col-4 col-sm-6">
                        <input type="text" name="ca-2" maxlength="6" size="5">
                      </div>
                    </div>
                    </div>

                    <div class="styled-heading">
                      <h6 style="">Exmination</h6>
                    </div>
                  <div class="container p-4">
                    <div class="row">
                      <div class="col-8 col-sm-6">
                        Exam
                      </div>
                      <div class="col-4 col-sm-6">
                        <input type="text" name="ca-1" maxlength="6" size="5">
                      </div>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          <li class="list-group-item list2"><a href="#list2" data-toggle="collapse" class="inactive"><span><i class="fas fa-caret-down"></i></span> Adiele Chika</a>
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>

                                <!-- collapse -->
            <div class="collapse" id="list2">
              <div class="container p-4">
                <div class="borderx">
                  <span class="editbutton"><a href="">edit</a></span>
                  <span class="submitbutton"><button class="btn btn-sm">save</button></span>

                  <div class="p-4">
                    <div class="styled-heading">
                      <h6 style="">Prelimary</h6>
                    </div>
                    <div class="container p-4">
                      <div class="row mb-2">
                      <div class="col-8 col-sm-6">
                        test one
                      </div>
                      <div class="col-4 col-sm-6">
                        <input type="text" name="ca-1" maxlength="6" size="5">
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-8 col-sm-6">
                        test two
                      </div>
                      <div class="col-4 col-sm-6">
                        <input type="text" name="ca-2" maxlength="6" size="5">
                      </div>
                    </div>
                    </div>

                    <div class="styled-heading">
                      <h6 style="">Exmination</h6>
                    </div>
                  <div class="container p-4">
                    <div class="row">
                      <div class="col-8 col-sm-6">
                        Exam
                      </div>
                      <div class="col-4 col-sm-6">
                        <input type="text" name="ca-1" maxlength="6" size="5">
                      </div>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          <li class="list-group-item list3"><a href="#list3" data-toggle="collapse"><span><i class="fas fa-caret-down"></i></span> Agbo prince </a>
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
                                          <!-- collapse -->
            <div class="collapse" id="list3">
              <div class="container p-4">
                <div class="borderx">
                  <span class="editbutton"><a href="">edit</a></span>
                  <span class="submitbutton"><button class="btn btn-sm">save</button></span>

                  <div class="p-4">
                    <div class="styled-heading">
                      <h6 style="">Prelimary</h6>
                    </div>
                    <div class="container p-4">
                      <div class="row mb-2">
                      <div class="col-8 col-sm-6">
                        test one
                      </div>
                      <div class="col-4 col-sm-6">
                        <input type="text" name="ca-1" maxlength="6" size="5">
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-8 col-sm-6">
                        test two
                      </div>
                      <div class="col-4 col-sm-6">
                        <input type="text" name="ca-2" maxlength="6" size="5">
                      </div>
                    </div>
                    </div>

                    <div class="styled-heading">
                      <h6 style="">Exmination</h6>
                    </div>
                  <div class="container p-4">
                    <div class="row">
                      <div class="col-8 col-sm-6">
                        Exam
                      </div>
                      <div class="col-4 col-sm-6">
                        <input type="text" name="ca-1" maxlength="6" size="5">
                      </div>
                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>

          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Akpens Collins
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Akpens Collins
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Agala Victoria
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Adiele Chika
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Agbo prince
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Akpens Collins
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Akpens Collins
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Agala Victoria
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Adiele Chika
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Agbo prince
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Akpens Collins
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li class="list-group-item"><span><i class="fas fa-caret-down"></i></span> Akpens Collins
            <div class="progress" style="height: 4px; width: 20px";>
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
        </ul> 
      </div>

  
      <!-- tabulated record -->
      <div class="f-result-mobile-table-container d-none">
        <table class="" style=" " >
              <thead class="" style="visibility: hidden; height: 0px;">
                <th style="width: 5%;" >S/N</th>
                <th style="width: 65%;">name</th>
                <th style="width: 10%;">Test 1:</th>
                <th style="width: 10%;">Test 2</th>
                <th style="width: 10%;">Exams</th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Adiele chika</td>
                  <td><input type="text" name="" value="34"></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Agbo Prince</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Akpens Collins</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Amadi Chizi</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>18</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
                <tr>
                  <td>19</td>
                  <td>Adiele Chika</td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                  <td><input type="text" name=""></td>
                </tr>
              </tbody>
            </table>
      </div>
      </div>


      

      <!--  guideline structure -->
      <div class="collapse d-md-none" id="guidelineCollapse">
         this are the guidelines involved
      </div>
 

      <!-- search result container for desktop-->
      <div class="container">
        
      </div>

     <div class="tab-content d-none d-md-block" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

          <!-- container for table section -->
        <div class="f-result-desktop-table-record pl-3 pr-3 d-none" style="position: relative;">
          <div class="container-fluid f-result-mobile-table-tool-container p-1" style="position: absolute; top: 0.25rem; width: 98.9%; z-index: 2;">
            <div class="f-result-mobile-table-tool p-2" style="position: relative;">
            <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-pen-fancy"></i></div>
            <div class="d-inline-block p-2 bg-light mr-1"><i class="far fa-copy"></i></div>
            <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-paste"></i></div>
            <div class="d-inline-block p-2 bg-light mr-1"><i class="far fa-file-pdf"></i></div>
            <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-info"></i></div>
            <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-plus" id="add_sub"></i></div>
           <button class="btn btn-sm" style="background-color: #fff; border: 1px solid rgba(0, 0, 0, 0.16); font-size: 12px; position: absolute; right: 3.25rem;">Max</button>
           <button class="btn btn-sm" style="background-color: #fff; border: 1px solid rgba(0, 0, 0, 0.16); font-size: 12px; position: absolute; right: 0.25rem;">Min</button>
          </div>
        

        <div class="p-1">
          <div class="row">
            <div class="col-8">
              <input type="text" name="" placeholder="search record">
            </div>
            <div class="col-2">
              <input type="text" name="" placeholder="col">
            </div>
            <div class="col-2">
              <input type="text" name="" placeholder="value">
            </div>
          </div>
        </div>

        <div class="" style="background-color: #fff;">
            <table class="w-100" style=" ">
              <thead>
                <th style="width: 5%;">sn</th>
                <th style="width: 64%;">subject list</th>
                <th style="width: 10%;">max score</th>
                <th style="width: 10%;">min score</th>
                <th style="width: 10%;">avg</th>
              </thead>
            </table>
        </div>
      </div>

       <div  class="" style="height: 400px; overflow-y: scroll; position: absolute; top: 98px; width: 99%; z-index: 1;">
              <table class="w-100" style="" style="width: 98.9%;">
              <thead style="visibility: hidden;">
                <th style="width: 5%;">S/N</th>
                <th style="width: 64%;">subject list</th>
                <th style="width: 10%;">max score</th>
                <th style="width: 10%;">min score</th>
                <th style="width: 10%;">avg</th>
              </thead>
              <tbody class="subject-entry-table">
                <tr>
                  <td class="sub-list-no">1</td>
                  <td style="padding: 0px !important;"><input type="text" name="" style="text-align: left;"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
   
   <style type="text/css">
     .mobile-table-tool i{
       font-size: 20px;
     }
   </style>


      <div class="f-result-desktop-list-record ml-3 p-1" style="border: 1px solid rgba(0,0,0,0.12)">
        <div class="mobile-table-tool p-1 container" style="position: relative; border: 1px solid rgba(0,0,0,0.12);">
          <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-pen-fancy"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="far fa-copy"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-paste"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="far fa-file-pdf"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-info"></i></div>
          <div class="d-inline-block p-2 bg-light mr-1"><i class="fas fa-tags"></i></div>
           <button class="btn btn-sm" style="background-color: #fff; border: 1px solid rgba(0, 0, 0, 0.16); position: absolute; right: 3.25rem;">Max</button>
           <button class="btn btn-sm" style="background-color: #fff; border: 1px solid rgba(0, 0, 0, 0.16);  position: absolute; right: 0.25rem;">Min</button>
        </div>

          <div class="container row">
              <div class="col pt-3">
                    <h5>Records</h5>
                 <p style="margin: 0px;"><div class="result-custom-search-container" style="width: 60%;"> 
                      <div class="input-group f-result-custom-input-group input-group-sm">
                        <div class="input-group-prepend f-result-custom-input-group-prepend">
                          <div style="width: 10px;"></div>
                        </div>
                      <input type="text" class="form-control f-result-custom-input" placeholder=" Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append f-result-custom-input-group-append mr-1">
                      <object data="../assets/svg/search.svg" type="image/svg+xml" style="height: 10px;"></object>
                    </div>
                    </div>
                  </div>
                </p>
            </div>
            <div class="col">
              
            </div>
            </div>

          <div class="row"> 
            <div class="col">
              <div class="">
                <p style="margin: 0.25rem;">
                  <ul class="list-group list-group-flush pl-2 pr-2" style=" height: 350px; overflow-y: scroll;">
                    <li class="list-group-item"><i class="fas fa-caret-right" style="color: #90EE90;"></i> Agala Victoria <time datetime="2011-10-15" pubdate="pubdate">now</time></li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Adiele Chika</li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Agbo prince</li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Abikoya Mayowa</li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Akpens Collins</li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Agbo prince</li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Adiele Chika</li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Agbo prince</li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Abikoya Mayowa</li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Akpens Collins</li>
                    <li class="list-group-item"><i class="fas fa-caret-right"></i> Agbo prince</li>
                  </ul>
                </p>
              </div>
            </div>
             <div class="col">
               <div class="container">
                 <p style="margin: 0.25rem;">
                   <div class="card">
                     <div class="card-body">
                      <h4 class="card-title" style="position: relative;"><i class="fas fa-tags" style="color: #90EE90;"></i> Agala Victoria <a href="" style="opacity: 0.5; color: black; font-size: 12px; position: absolute; right: 0px; bottom: 0px;"><i class="fas fa-pen"></i><span style="font-size: 9px;">edit</span></a></h4>
                      <div>
                        <form id="student_details">
                          <fieldset class="border p-1 mb-2">
                            <legend  class="w-auto" style="font-size: medium;">Assessment</legend>
                            <table class="table table-borderless table-sm" style="font-size: 11.5px;">
                              <tbody>
                                <tr>
                                  <td><input type="text" name="surname"  placeholder="surname"></td>
                                  <td><input type="text" name="first_name" placeholder="name"></td>
                                </tr>                                                                
                                <tr>
                                  <td><input type="text" name="other_name"  placeholder="other name"></td>
                                  <td><input type="text" name="reg_no"  placeholder="reg no"></td>
                                </tr>
                              </tbody>
                            </table>
                          </fieldset>
                          <fieldset class="border p-1">
                            <legend class="w-auto font-weight-bolder" style="font-size: medium;">Examination</legend>
                            <table class="table table-borderless table-sm" style="font-size: 11.5px;">
                              <tbody>
                                <tr>
                                  <td>attendance</td>
                                  <td><input type="text" name="attendance"  placeholder="attendance"></td>
                                </tr>
                                <tr>
                                  <td>gender</td>
                                  <td><select name="gender">
                                    <option value="m">male</option>
                                    <option value="f">female</option>
                                  </select> </td>
                                </tr>
                                <tr>
                              </tbody>
                              <input type="text" name="class" value="primary one" style="display: none;">
                            </table>
                          </fieldset>
                        </form>
                        <div class="m-auto pt-2" style="width: 250px;">
                          <button type="button" class="btn btn-primary btn-sm" style="width: 100px; margin-right: 50px;">reset</button><button type="button" class="btn btn-secondary btn-sm" style="width: 100px;" id="student_submit_btn">submit</button>
                        </div>
                      </div>
                      <div>  
                        
                      </div>
                    </div>
                   </div>
                 </p>
               </div>
             </div>
             </div>           
          </div> 
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
      </div>

        <div class="row">
          <div class="col-7">
            
          </div>

          <div class="col-5">
            
          </div>
        </div>
     
    </div>

    <div>
      
    </div>
  </div>
</div>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../assets/js/vendor/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/vendor/jquery-1.10.2.min.js"></script>
    <!--<script type="text/javascript" src="../js/vendor/jquery-slim.min.js"></script>-->
    <script type="text/javascript" src="../assets/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="form.js"></script>
    <script type="text/javascript" src="../assets/js/core.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <!--<script type="text/javascript" src="../assets/js/classes.js"></script> -->
    <!--<script type="text/javascript" src="../assets/js/features.js"></script>
    <script type="text/javascript" src="../assets/js/deamon.js"></script> -->

    


    <script type="text/javascript">
      var lastOpened=false;
      var openedCollapsed=false;
      var sub_list_no= 1;
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

         $('#add_sub').click(function(){
            var temp=$('.subject-entry-table>tr:first-child').clone();
             $('.subject-entry-table').append(temp);
             temp.find('.sub-list-no').html(''+ (++sub_list_no));
         })
      })
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
          $('#student_submit_btn').click(function(){
              //send data to database;
             submitFormJson({
                form: "student_details",
                url: "uploadstudent.php",
                type: "POST"
              }) 
          })

      })

    </script>
</body>
</html>