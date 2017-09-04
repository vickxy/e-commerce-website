
<!DOCTYPE html>
<html>
<head>
  <title> </title>
 <?php include('head.php'); ?>
     <style>
   body{
        margin:0px;
           background: rgba(17, 0, 25, 0.9);
       
    }
    .imagebox{
          background: rgba(0, 0, 0, 0.49);
    }
    .imagebox img{
        height:200px;
        max-width: 100%;
    }
         p {
font-family: Cambria,Georgia,serif;
	font-size: 25px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 27.5px;
    color: whitesmoke;
}
h1 {
    color:whitesmoke;
	font-family: Cambria,Georgia,serif;
	font-size: 37px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 40.7px;
}
    a.back-to-top {
    display: none;
    width: 50px;
    height: 50px;
    text-decoration: none;
    color:white;
    text-align: center;
    padding: 10px;
    font-size: 20pt;
    position: fixed;
    z-index: 999;
    right: 10px;
    bottom: 60px;
    background: #27AE61 url("up-arrow.png") no-repeat center 43%;
    background: #31b0d5;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    font-size: 20px;
    }
    .fix1 {
        position:fixed;
        font-size: 20px;
        width:50px;
        left:20px;
        top:200px;
        z-index: 1000;
        background: rgb(78, 134, 181);
        color:antiquewhite;
    }
    .fix2{
        position:fixed;
        font-size: 20px;
        width:50px;
        left:20px;
        top:250px;
        z-index: 1000;
        background: rgb(181, 31, 31);
        color:antiquewhite;
    }  .fix3{
        position:fixed;
        font-size: 20px;
        width:50px;
        left:20px;
        top:300px;
        z-index: 1000;
        background: #31b0d5;
        color:antiquewhite;
    }
       .navbar a{
        color:whitesmoke !important;
    }
    .btn-default {
    color: #f9f2f2;
    background-color: #31b0d5;
        border-color: #31b0d5;}
    .btn-default:hover{
        color: #f9f2f2;
    background-color: #0b9dc7;
        border-color: #31b0d5;}  
    }
         .shiftright{
             margin: 30px;
         }   
         .fixcart{
             position:fixed;
        font-size: 20px;
        width:60px;
        right:20px;
        top:100px;
        z-index: 1000;
         }
         .backdesign{
             position: fixed;
/*             background:#f08793;*/
             background: url(<?php echo base_url('/assests/image/slide3.jpg')?>) no-repeat center;
             height: 200px;
             width:100%;
         }
    </style>
   
</head>
   
<body>
 <a href="http://facebook.com" class="btn btn-social-icon btn-facebook fix1">
    <i class="fa fa-facebook"></i></a>
    <a href="http://facebook.com" class="btn btn-social-icon btn-google-plus fix2">
     <i class="fa fa-google-plus"></i></a>
    <a href="http://facebook.com" class="btn btn-social-icon btn-twitter fix3">
     <i class="fa fa-twitter"></i></a>
<a href="#" class="back-to-top fa fa-arrow-up"></a>
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:0px; background:#393c41; -webkit-box-shadow: 0px 7px 3px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 7px 3px -4px rgba(0,0,0,0.75);
box-shadow: 0px 7px 3px -4px rgba(0,0,0,0.75);">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="drop1" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="drop1" id="slidemenu" role="menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
        <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default fa fa-search" style="font-size:20px;"></button>
    </form>
      <ul class="nav navbar-nav navbar-right">
          
        <li><?= anchor('Upload','Add Product'); ?></li>
        <li><a data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="backdesign"></div>
 <div class="container" style="margin-top:40px;">
<div class="contentbody" >
  <div class="row" style="margin:0px;">
     <div class="col-lg-4 col-md-4 ">
        <h1>Art Selected by our Curators</h1>
<!--         <p>Discover new original artwork from around the world</p>-->
         <?php $rows = count($this->cart->contents()); ?>
          <?= anchor('Shopingcart',' '.$rows,['class'=>'btn btn-info fixcart fa fa-shopping-cart']); ?>
    </div>  
  </div>

  <?php if(count($data)):?>
    <?php foreach($data as $head_data) :?>
 
    <div class="col-lg-4 col-md-4 c" style="height:400px;">
          <div class="imagebox">
              <a class="thumbnail fancybox" rel="lightbox" href='<?php echo base_url($head_data->p_image);?>' >
              <img src='<?php echo base_url($head_data->p_image)?>' class = "img-responsive" alt="picture"/>
              </a>

               <?php
                         echo form_open('Checkout/detail',['class'=>'form-horizontal']);
                       
                        //echo form_open('Shopingcart/add');
                         echo form_hidden('image', $head_data->p_image);
                        echo form_hidden('id', $head_data->p_id);
                        echo form_hidden('qty', 1);
                        echo form_hidden('name', $head_data->p_name);
                        echo form_hidden('price', $head_data->p_price);
                        ?> 
                      
              <!-- <p><?= $head_data->headline ?></p> -->
              <p id="id" name="p_id" hidden="ture"><?= $head_data->p_id ?></p>
              <p id="p_price" name="p_price" hidden="ture"><?= $head_data->p_price ?></p>
              <p id="p_name" name="p_name" hidden="hidden"><?= $head_data->p_name ?></p>
              <div class="shiftright" style="float:right;"><button class="btn btn-danger fancybox-buttons ">Buy</button> </div>
                <?php echo form_close();?>
               <?php
                         echo form_open('Shopingcart/add',['class'=>'form-horizontal']);
                       
                        //echo form_open('Shopingcart/add');
                        echo form_hidden('id', $head_data->p_id);
                        echo form_hidden('qty', 1);
                        echo form_hidden('name', $head_data->p_name);
                        echo form_hidden('price', $head_data->p_price);
                        ?> 
<!--             <p><?php echo form_submit('', 'Add to Cart' ,['class'=>'btn btn-info fa fa-shopping-cart','style'=>'font-size:18px;']); ?></p>-->
                                <button  type="submit" class="btn btn-danger fa fa-shopping-cart " name="submit" style="font-size:18px;"> Add to Cart</button> 
            
              

          </div>
          </div>
          <?php echo form_close(); ?> 
          <?php endforeach; ?>
        <?php exit; ?>
         <?php else: ?>
         <p> No content found</p>
         <?php endif ?>
   
</div>
    </div>

</body>
  <script type="text/javascript">
  $(document).ready(function () {
    var ckbox1 = $('#checkbox1');
    
            $('input').on('click',function () {
            if (ckbox1.is(':checked')) {
           window.location = "<?php echo base_url(); ?>Stuff/type1";
            } else {
            return false;
                  }
              });
          });
              $(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
           $(function(){ 
      $('#drop1').click(function(e){ 
          e.stopPropagation();
          $('#slidemenu').slideToggle(500);
      });
      $('#drop1').click(function(e){
          e.stopPropagation();
      });

      $(document).click(function(){
          $('#slidemenu').slideUp(500);
      });
   }); 
           var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
}); 

$('a.back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
      
});
        </script>
 

</html>