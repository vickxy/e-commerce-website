<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Upload Product</title>
 	<?php include('head.php');?>

  </head>
    <style>
        .row{
            margin-bottom: 40px;
        }
        body{
            background: white;
        }
        label{
            color:black;
        }
    </style>
 <body>
<div class="container" style="margin-top:100px; background:white;">


  <fieldset>
    <legend style="color:black;">Upload Products</legend>
   <?php echo form_open_multipart('Upload/add_product',['class'=>'form-horizontal']);?>
   
   <?php if( $error =$this->session->flashdata('feedback')): ?>
  
    <div class="row">
    <div class="col-lg-12">
    <div class="alert alert-dismissible alert-warning">
        <?= $error; ?>
          </div>
          </div>
          </div>
        <?php endif; ?>
         <div class="row container form-group">
      <div class="col-lg-2">
      <label for="select" class="control-label">Select Product Type</label></div>
       
      <div class="col-lg-10">
        <select class="form-control" id="select" name="type" >
          <option value="Select content Type">Select content Type</option>
          <option value="type1">type1</option>
          <option value="type2">type2</option>
          <option value="type3">type3</option>
          </select>
        </div>
        </div>
       <div class="row">
        <div class="col-lg-12"  >
      <?php echo form_error('type'); ?>
       </div>
      </div>
      <div class="row container">
      <div class="col-lg-2">
          <label for="inputProduct" class="control-label">Product Name</label>
             </div>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'p_name','id'=>'p_name','class'=>'form-control','placeholder'=>'Product Name','value'=>set_value('p_name')]);  ?>
        </div>
   
    </div>
    <div class="row">
    <div class="col-lg-6"  >
    <?php echo form_error('p_name'); ?>
    </div>
        </div>
	<div class="form-group row">
        <div class="col-lg-6">
      <label for="inputUpload" class="control-label">Upload Images</label>
      </div>
      <div class="col-lg-6">
        
         <?php echo form_upload(['name'=>'userfile']);  ?>
      </div>
    </div>
    
     <div class="row">
     <div class="col-lg-6"  >
       <?php if(isset($upload_error)) echo($upload_error) ?>
      </div>
        </div>   
        <div class=" row form-group">
        <div class="col-lg-2">
      <label for="inputProductPrice" class="control-label">Product Price</label>
        </div>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'p_price','id'=>'p_price','class'=>'form-control','placeholder'=>'Product Price','value'=>set_value('p_price')]);  ?>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-12"  >
       <?php echo form_error('p_price') ?>
      </div>
    </div>
     <div class="row container form-group">
      <div class="col-lg-2">
      <label for="selectCOD" class="control-label">Cash On Delivery Avilable</label></div>
       
      <div class="col-lg-10">
        <select class="form-control" id="select" name="p_cod" >
          <option value="Select content Type">--Select--</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
          
          </select>
        </div>
        </div>
       <div class="row">
        <div class="col-lg-12"  >
      <?php echo form_error('p_cod'); ?>
       </div>
      </div>
    <div class="row container">
      <div class="col-lg-2">
          <label for="inputAbout" class="control-label">About Product</label>
             </div>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'p_about','id'=>'p_about','class'=>'form-control','placeholder'=>'About Product','value'=>set_value('p_about')]);  ?>
        </div>
   
    </div>
    <div class="row">
    <div class="col-lg-6"  >
    <?php echo form_error('p_about'); ?>
    </div>
        </div>
      <div class=" row form-group">
      <div class="col-lg-10 col-lg-offset-2">
      <!-- <?php //echo form_submit('submit','Publish',['class'=>'btn btn-primary']);?> -->
       <button type="submit" class="btn btn-primary" id="submit">Save Product</button>
      </div>
    </div>
      
   
  </fieldset>

</div>
</body>
</html>