<html>
<head>
<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<style>
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.navbar
{
    width:100%;
    white-space:nowrap;
    background-color: darkseagreen;
}
.main_div
{
    width:100%;
    height:100vh;
    background-image:url("bank_back.jpg");
    
}
.main_text
{
    color:white;
    margin-top:120px;
    font-family: 'JetBrains Mono', monospace;
}
.big-text
{
   
    margin:20px 0;
    color:white;
    font-family: 'JetBrains Mono', monospace;
}
.contactus{
    width:100%;
    height: 100vh;
    padding: 80px 0;
    position: relative;
}
.contactus:before{
    content:"";
    position: absolute;
    top:0;
    left:0;
    bottom: 0;
    right:0;
    background:url("bank_back.jpg");
    z-index: -1;
}
.formbutton button{
    border:1px solid #50d1c0;
    border-radius:100px;
    margin:0 50px;
    padding: 12px 35px;
    outline:none;
    columns: #50d1c0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    background:transparent;
    color:#fff;
   
}
form:hover .formbutton button{
background: white;
color:#5E11A3 ;
box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);

}
@media(min-width:400px)
{
    .main_div
    {
        max-height:1000px;
    }
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.active{
  background-color: #717171;
}
.col-sm-6{
  max-width: 500px;
  position: relative;
  margin: auto;
    }
.mySlides
{
display: none;
}

</style>
</head>

<body>
<div class="main_div">
 
     <div class="navbar navbar-expand-md">
   
      <a href="#" class="navbar-brand font-weight-bold text-white text-center"><h2>AXIS BANK</h2></a>
      <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon" style="background:white;"></span>
      </button>
     
       <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="index.php" class="nav-link text-white "><span style="margin-left:-700px;">HOME|</span></a></li>
              <li class="nav-item">
                  <a href="viewcustomers.php" class="nav-link text-white "><span style="margin-left:-450px;">CUSTOMER DETAILS|</span></a></li>
              <li class="nav-item">
                  <a href="transfermoney.php" class="nav-link text-white"></a></li>
              <li class="nav-item">
                  <a href="#contact" class="nav-link text-white"><span style="margin-left:-200px;">CONTACT|</span></a></li>    
               </ul>
        </div>
     </div>

     <div class="container">
        <div class="row">

          <div class="col-sm-6">
              
                <img src="axis_home_loan.jpg" width="400" height="345" style="margin-left:-400px;margin-top:70px;"> 
              
                <img src="Axis-Bank-Personal-Loan.png"  width="400" height="345" style="margin-top:70px;margin-left:20px;">
              
                <img src="education_loan.png"  width="400" height="345" style="margin-top:-340px;margin-left:450px;">

              

                 <script>
                  var slideIndex = 0;
                  showSlides();
                  function showSlides() {
                      var i;
                      var slides = document.getElementsByClassName("mySlides");
                      for (i = 0; i < slides.length; i++) {
                          slides[i].style.display = "none";  
                      }
                      slideIndex++;
                      if (slideIndex > slides.length) {slideIndex = 1}    
                      for (i = 0; i < dots.length; i++) {
                          dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                      dots[slideIndex-1].className += " active";
                      setTimeout(showSlides, 2000);
                  }
              </script>
  
                                
            </div>
          </div>
         </div>

          
             
            
          </div>

       </div>
       
    


  <!--contact starts-->
  <section class="contactus" id="contact" >
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;color:white;">Enter Your Details</h1>
            <p style="color:white;">Experience new generation banking</p>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1" style="background-image:contacts_background.jpg;">
                    <form action="/action_page.php">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
                        </div>
                        <form action="/action_page.php">
                            <div class="form-group">
                              
                              <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  
                                  <input type="number" class="form-control" placeholder="Enter mobile number" id="mobile" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                     <input type="number" class="form-control" placeholder="Enter Account number" id="mobile" required autocomplete="off">
                                    </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
                      </form>
                </div>
            </div>
        </div>
       </section>
</body>
</html>