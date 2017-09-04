<!DOCTYPE html>
<html>
<head>
  <title>Picture Gallery</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php include('head.php'); ?>
    <style>
         body{
        margin:0px;
           background: rgba(17, 0, 25, 0.9);
       
    }
    </style>
</head>
<body>

    <div class="container">
	<div class="row">
		<div class="col-lg-12">
			<!--<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name">
                                <strong>Product name</strong>
                            </h4>
                            <h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Update cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>$50.00</strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block">
								Checkout
							</button>
						</div>
					</div>
				</div>
			</div>-->
<div class="panel panel-info">
	<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</button>
							</div>
						</div>
					</div>
				</div>

<div class="panel-body" style="padding:20px;">
 <div class="row">
<?php echo form_open('Shopingcart/update',['class'=>'form-horizontal']);?>

<table cellpadding="6" cellspacing="1" style="width:100%" border="0" >

<tr>
        <th>QTY</th>
        <th>Item Description</th>
        <th style="text-align:right">Item Price</th>
        <th style="text-align:right">Sub-Total</th>
</tr>


<?php $i = 1; ?>


<?php foreach ($this->cart->contents() as $items): ?>
    <div class="row">
      
        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
                <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'])); ?></td>
                <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right"> &#8377; <?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right"> &#8377; <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                <td><?php echo anchor('Shopingcart/remove_cart/' . $items['rowid'],'<span class="glyphicon glyphicon-trash"> </span>'); ?></td>
                            
        </tr>
    </div>

<?php $i++; ?>

<?php endforeach; ?>

  </table>
 </div>
    </div>
<div class="panel-footer">
<div class="row text-center">
<table>

<tr>
        <td colspan="2"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right"> &#8377; <?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>
</table>
    


<p><?php echo form_submit('', 'Update your Cart',"class='btn btn-danger'"); ?></p>
    </div>
    </div>
		</div>
	</div>
</div>
    </div>
</body>
</html>


