<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Acme Widget Co</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
</head>
<body>

<div class="container">
	
	<br>
	<center><h3>Acme Widget Co</h3>	</center>
	<br>
	<h4>Get Products Price by Quantity</h4>
	<br>
	<div class="row"> 
		<div class="col-sm-6">
			<form class="form-horizontal" method="POST" action="<?php echo site_url();?>Basket/total">
				
				<?php echo "<div style='color:red'>".$this->session->flashdata("errors")."</div>"?>
				<div class="col-sm-8 form-group">
						<label for="email"> Red Widget - $32.95 </label>
						<input type="text" name="R01" class="form-control" value="0" id="R01">
				</div>
				<div class="col-sm-8 form-group">
						<label for="email"> Green Widget - $24.95</label>
						<input type="text" name="G01" class="form-control" value="0" id="G01">
				</div>
				<div class="col-sm-8 form-group">
						<label for="email"> Blue Widget - $7.95 </label>
						<input type="text" name="B01" class="form-control" value="0" id="B01">
				</div>
				<button type="submit" class="btn btn-success">Calculate Total</button>
			
			</form>
		</div>
		<div class="col-sm-6">
				<h5>Delivery Cost: <h5>
				<h6>For Orders under $50 cost $4.95. <br> 
				For orders under $90, delivery costs $2.95. <br> 
				For Orders of $90 or more have free delivery.<h6> 
				<br>
				<h5>Offers: <h5>
				<h6>The initial offer will be “buy one red widget,
				get the second half price"<h6>
		</div>
	</div>
	<br><br>
	<?php echo "<h3 style='color:green'>".$this->session->flashdata("success")."</div>"?>
				
</div>




<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>