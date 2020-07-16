<?php
//index.php
include('database_connection.php');
include('function.php');


// Restrict user to access the page without login
if(!isset($_SESSION["type"]))
{
	header("location:login.php");
}

include('header.php');
include_once('admin-side-nav.php'); /* To display page header information */

?>
	<div class = "container space" style="margin-left:350px;">
	<div class="row">
	<?php
	if($_SESSION['type'] == 'master')
	{
	?>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total User</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_user($connect); ?></h1>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Category</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_category($connect); ?></h1>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Brand</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_brand($connect); ?></h1>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Item in Stock</strong></div>
			<div class="panel-body" align="center">
				<h1><?php echo count_total_product($connect); ?></h1>
			</div>
		</div>
	</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Sales</strong></div>
				<div class="panel-body" align="center">
					<h1>Rs. <?php echo count_total_order_value($connect); ?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Sales in Cash</strong></div>
				<div class="panel-body" align="center">
					<h1>Rs. <?php echo count_total_cash_order_value($connect); ?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Sales in Credit</strong></div>
				<div class="panel-body" align="center">
					<h1>Rs. <?php echo count_total_credit_order_value($connect); ?></h1>
				</div>
			</div>
		</div>
		<hr />
				
		<div class="col-md-12">
			<div class="panel panel-default">
			    <div>
				<br> <br>
				  <a class="btn btn-success" href="printtotalOrderUserwise.php"> View Pdf</a>
				  <a class="btn btn-primary" href="printtotalOrderUserwise.php?download=1"> Download Pdf</a>
				  <br>
				</div>
				<div class="panel-heading"><strong>Total Sales Value User wise</strong></div>
				<div class="panel-body" align="center">
					<?php echo get_user_wise_total_order($connect); ?>
				</div>
			</div>
		</div>
		<?php
		}
		?>


        <?php
		if($_SESSION['type'] == 'user')
		{
		?>

<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Sales</strong></div>
				<div class="panel-body" align="center">
					<h1>Rs. <?php echo count_total_order_value($connect); ?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Sales in Cash</strong></div>
				<div class="panel-body" align="center">
					<h1>Rs. <?php echo count_total_cash_order_value($connect); ?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Sales in Credit</strong></div>
				<div class="panel-body" align="center">
					<h1>Rs. <?php echo count_total_credit_order_value($connect); ?></h1>
				</div>
			</div>
		</div>
		<hr />
		<?php
		}
		?>
	</div>
	</div>

<?php
include("footer.php");
?>

