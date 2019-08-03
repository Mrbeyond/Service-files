<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title> Sale page</title>
		<style type="text/css">
			*{font-family: century gothic;}
			#ull>li{
				height:60px;
				background-color:#33b5e5;
				box-shadow: 0 0 10px 0 rgba(0,0,0,0.4);
			}
		</style>
		<?php include 'meta.php'; ?>
	</head>
	<body>
		<div class="container-fluid mt-1 sticky-top"> <?php include 'navbar.php'; ?> </div>
		<div class="container-fluid mt-5 z-">
			<div class=" row d-flex justify-content-center ">
				<div class="col-md-8">
					<div class="card shadow shadow-bg">
						<div class="card-header d-flex justify-content-center bg-primary text-white">
							<h3>ITEMS LIST</h3>  
						</div>
						<div class="card-body">            
							<table class="table table-hover">
								<thead>
								<tr>
									<th><strong>S/N</strong> </th>
									<th><strong>ITEM</strong></th>
									<th><strong>PRICE</strong></th>
									<th><strong></strong>QUANTITY</th>
								</tr>
								</thead>
								<tbody>
								<tr v-for="(item, index ) in Items" :key="item.id">
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td> </td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow-bg">
						<div class="card-header bg-primary text-white">
							<div class="d-flex justify-content-center">
								<h2>Add Items here</h2> 
							</div>
						</div>
						<div class="card-body mt-1">
						
							<form method="POST" action="Adder_actualizer.php">
								<div class="form-group">
									<label for="Items">Items</label>
									<input type="text" class="form-control" name="Items">
								</div>
								<div class="form-group">
									<label for="Price">Price</label>
									<input type="text" class="form-control" name="Price">
								</div>
								<div class="form-group">
									<label for="Quantity">Quantity</label>
									<input type="text" class="form-control" name="Quantity">
								</div>								
								<div class=" form-group d-flex justify-content-center">
									<input type="submit" class="btn" name="submit">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>

