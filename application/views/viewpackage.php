<!DOCTYPE html>
<html>
<head>
  <title>user</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css');?>" media="all">
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<style>
  .package
{
  background-color:#e69900;
  background-size:cover;
  background-position:absolute;
}
.haircut
{
  background-image:url(../img/haircut.jpg);
  background-size:cover;
  background-position: center;
  background-repeat: no-repeat;
}
.spa
{
  background-image:url(../img/spa.jpg);
  background-size:cover;
  background-position: center;
  background-repeat: no-repeat;
}
.skin
{
  background-image:url(../img/package.jpg);
  background-size:cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
<body class="package">
  <a href="<?php echo base_url()?>main/userhome">Back to Home</a>
  <form  method="post" style="border:1px solid #ccc" action="<?php echo base_url()?>main/" >
    <nav class="tagline"><h2>BEAUTY INNOVATIONS</h2></nav>
        <header class="site-header">
            <div class="wrap">
              <div class="title-area">
               <!--  <p class="site-title">
          <p class="site-description">Ladies Salon | Spa | Beauty Store</p></div>
        </div> -->
        </header><nav class="nav-secondary">
          <div class="wrap">
            
                
<div class="row haircut">
    <div class="container" style="width:auto;height:auto;">
      <div class="tab-content">
          <div class="tab-pane active" id="haircare">
            <h2 class="text-center text-white" style="padding:10px;">Hair Care Service</h2>
                <div class="col" style="width:440px;height:auto;">
                      <ul>
                          <li>Hair Cut --- Rs.250 </li>
                          <li>Kids Hair cut --- Rs.200 </li>
                          <li>Advanced Hair Cuts – U/V, Feather, Layer --- Rs.500</li>  
                          <li>Hair Spa --- Rs.1000</li>
                          <li>Hair Coloring --- Rs.750</li>
                          <li>Highlighting Colors --- Rs.500 </li>
                          <li>Hair dyen --- Rs.500</li>
                          <li>Henna dye --- Rs.500</li>
                          <li>Hot Oil Massage --- Rs.500 </li>
                          <li>Hair Wash with Setting --- Rs.500 </li>
                          <li>Anti Dandruff --- Rs.750</li>
                          <li>Hair Split end removal --- Rs.1000 </li>
                      </ul>
                </div>
                 <!--  <div class="col-6">
                    <h6><i>Select any 3 service as a combo @1999</i></h6>
                    <p><i><b>*Terms and conditions apply</b></i></p>
                  </div> -->
          </div>
      </div>
    </div>
</div> 
<div class="row skin">
  <div class="container" style="width:auto;height:auto;">
    <div class="tab-pane" id="skin care">
      <h2 class="text-center text-white" style="padding:10px;">Skin Care Service</h2>
        <div class="col-6">
            <div class="col" style="width:350px;height:auto;">
                <ul>
                    <li>Vegpeel (Pimple treatment)  --- Rs.250</li>
                    <li>Under eye treatment  --- Rs.250</li>
                    <li>Thermo herb skin tightening  --- Rs.250</li>
                    <li>Galvanic Facial  --- Rs.250</li>
                    <li>Facials (Advanced)  --- Rs.250</li>
                    <li>Clean up  --- Rs.250</li>
                    <li>Threading  --- Rs.250</li>
                    <li>Bleaching  --- Rs.250</li>
                </ul>
            </div>
        </div>    
    </div>
  </div>
</div>


 <div class="row spa">
    <div class="container" style="width:auto;height:auto;">
      <div class="tab-content">
          <div class="tab-pane active" id="bodyspa">
       <h2 class="text-center text-white" style="padding:10px;">Body Spa Service</h2>
          <div class="col" style="width:450px;height:auto;">
            <ul>
              <li>Face Massage  --- Rs.250</li>
              <li>Full body oil massage  --- Rs.2500</li>
              <li>Full body (Aroma / Swedish) Massage  --- Rs.3000</li>
              <li>Full body (Deep tissue) Massage  --- Rs.2000</li>
              <li>Head / Shoulder / Back Massage  --- Rs.1500</li>
              <li>Foot Massage  --- Rs.250</li>
              <li>Hand Massage  --- Rs.250</li>
            </ul>
          </div>
            <div class="col-12">
              <h6><i>Select any 3 service as a combo @1599</i></h6>
              <p><i><b>*Terms and conditions apply</b></i></p>
            </div>
      </div>
    </div>
  </div>
</div>
        
<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js"></script>
</body>
</html>