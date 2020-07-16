<?php
	/*session_start();
	// Redirect the user to login page if he is not logged in.
	if(!isset($_SESSION['loggedIn'])){
		header('Location: login.php');
		exit();
	} 
	*/


	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
	require_once('header.php');

?>	

<?php
            include('database_connection.php');


            if(!isset($_SESSION["type"]))
            {
                header('location:login.php');
            }

            if($_SESSION['type'] != 'master')
            {
                header('location:index.php');
            }
            // include('header.php');
            // include('admin-side-nav.php');
        ?>
																							
  <body>
<?php
	// require 'inc/navigation.php';
?>
    <!-- Page Content -->
    <div class="container">
	  <!-- <div class="row">
		<div class="col-lg-2">
		<h1 class="my-4"></h1> -->
			<!-- <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			  <a class="nav-link active" id="v-pills-item-tab" data-toggle="pill" href="#v-pills-item" role="tab" aria-controls="v-pills-item" aria-selected="true">Item</a> 
			  <a class="nav-link" id="v-pills-purchase-tab" data-toggle="pill" href="#v-pills-purchase" role="tab" aria-controls="v-pills-purchase" aria-selected="false">Purchase</a>
			  <a class="nav-link" id="v-pills-vendor-tab" data-toggle="pill" href="#v-pills-vendor" role="tab" aria-controls="v-pills-vendor" aria-selected="false">Vendor</a>
			  <a class="nav-link" id="v-pills-sale-tab" data-toggle="pill" href="#v-pills-sale" role="tab" aria-controls="v-pills-sale" aria-selected="false">Sale</a>
			  <a class="nav-link" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="false">Customer</a> 
			  <a class="nav-link" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab" aria-controls="v-pills-search" aria-selected="false">Search</a>
			  <a class="nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">Reports</a>
			</div> -->
		</div>
		 <div class="col-lg-10">
			<div class="tab-content" id="v-pills-tabContent">
			

			  <div class="tab-pane fade show active" id="v-pills-purchase" role="tabpanel" aria-labelledby="v-pills-purchase-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Purchase Details</div>
				  <div class="card-body">
					<div id="purchaseDetailsMessage"></div>
					<form>
					  <div class="form-row">
						<div class="form-group col-md-3">
						  <label for="purchaseDetailsItemNumber">Item Number<span class="requiredIcon">*</span></label>
						  <input type="text" class="form-control" id="purchaseDetailsItemNumber" name="purchaseDetailsItemNumber" autocomplete="off">
						  <div id="purchaseDetailsItemNumberSuggestionsDiv" class="customListDivWidth"></div>
						</div>
						<div class="form-group col-md-3">
						  <label for="purchaseDetailsPurchaseDate">Purchase Date<span class="requiredIcon">*</span></label>
						  <input type="text" class="form-control datepicker" id="purchaseDetailsPurchaseDate" name="purchaseDetailsPurchaseDate" readonly value="2020-07-15">
						</div>
						<div class="form-group col-md-2">
						  <label for="purchaseDetailsPurchaseID">Purchase ID</label>
						  <input type="text" class="form-control invTooltip" id="purchaseDetailsPurchaseID" name="purchaseDetailsPurchaseID" title="This will be auto-generated when you add a new record" autocomplete="off">
						  <div id="purchaseDetailsPurchaseIDSuggestionsDiv" class="customListDivWidth"></div>
						</div>
					  </div>
					  <div class="form-row"> 
						  <div class="form-group col-md-4">
							<label for="purchaseDetailsItemName">Item Name<span class="requiredIcon">*</span></label>
							<input type="text" class="form-control invTooltip" id="purchaseDetailsItemName" name="purchaseDetailsItemName" readonly title="This will be auto-filled when you enter the item number above">
						  </div>
						  <div class="form-group col-md-2">
							  <label for="purchaseDetailsCurrentStock">Current Stock</label>
							  <input type="text" class="form-control" id="purchaseDetailsCurrentStock" name="purchaseDetailsCurrentStock" readonly>
						  </div>
						  <div class="form-group col-md-4">
							<label for="purchaseDetailsVendorName">Vendor Name<span class="requiredIcon">*</span></label>
							<select id="purchaseDetailsVendorName" name="purchaseDetailsVendorName" class="form-control chosenSelect">
								<?php 
									require('model/vendor/getVendorNames.php');
								?>
							</select>
						  </div>
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-2">
						  <label for="purchaseDetailsQuantity">Quantity<span class="requiredIcon">*</span></label>
						  <input type="number" class="form-control" id="purchaseDetailsQuantity" name="purchaseDetailsQuantity" value="0">
						</div>
						<div class="form-group col-md-2">
						  <label for="purchaseDetailsUnitPrice">Unit Price<span class="requiredIcon">*</span></label>
						  <input type="text" class="form-control" id="purchaseDetailsUnitPrice" name="purchaseDetailsUnitPrice" value="0">
						  
						</div>
						<div class="form-group col-md-2">
						  <label for="purchaseDetailsTotal">Total Cost</label>
						  <input type="text" class="form-control" id="purchaseDetailsTotal" name="purchaseDetailsTotal" readonly>
						</div>
					  </div>
					  <button type="button" id="addPurchase" class="btn btn-success">Add Purchase</button>
					  <button type="button" id="updatePurchaseDetailsButton" class="btn btn-primary">Update</button>
					  <button type="reset" class="btn">Clear</button>
					</form>
				  </div> 
				</div>
			  </div>
			  
			  <div class="tab-pane fade" id="v-pills-vendor" role="tabpanel" aria-labelledby="v-pills-vendor-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Vendor Details</div>
				  <div class="card-body">
				  <!-- Div to show the ajax message from validations/db submission -->
				  <div id="vendorDetailsMessage"></div>
					 <form> 
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="vendorDetailsVendorFullName">Full Name<span class="requiredIcon">*</span></label>
						  <input type="text" class="form-control" id="vendorDetailsVendorFullName" name="vendorDetailsVendorFullName" placeholder="">
						</div>
						<div class="form-group col-md-2">
							<label for="vendorDetailsStatus">Status</label>
							<select id="vendorDetailsStatus" name="vendorDetailsStatus" class="form-control chosenSelect">
								<?php include('inc/statusList.html'); ?>
							</select>
						</div>
						 <div class="form-group col-md-3">
							<label for="vendorDetailsVendorID">Vendor ID</label>
							<input type="text" class="form-control invTooltip" id="vendorDetailsVendorID" name="vendorDetailsVendorID" title="This will be auto-generated when you add a new vendor" autocomplete="off">
							<div id="vendorDetailsVendorIDSuggestionsDiv" class="customListDivWidth"></div>
						</div>
					  </div>
					  <div class="form-row">
						  <div class="form-group col-md-3">
							<label for="vendorDetailsVendorMobile">Phone (mobile)<span class="requiredIcon">*</span></label>
							<input type="text" class="form-control invTooltip" id="vendorDetailsVendorMobile" name="vendorDetailsVendorMobile" title="Do not enter leading 0">
						  </div>
						  <div class="form-group col-md-3">
							<label for="vendorDetailsVendorPhone2">Phone 2</label>
							<input type="text" class="form-control invTooltip" id="vendorDetailsVendorPhone2" name="vendorDetailsVendorPhone2" title="Do not enter leading 0">
						  </div>
						  <div class="form-group col-md-6">
							<label for="vendorDetailsVendorEmail">Email</label>
							<input type="email" class="form-control" id="vendorDetailsVendorEmail" name="vendorDetailsVendorEmail">
						</div>
					  </div>
					  <div class="form-group">
						<label for="vendorDetailsVendorAddress">Address<span class="requiredIcon">*</span></label>
						<input type="text" class="form-control" id="vendorDetailsVendorAddress" name="vendorDetailsVendorAddress">
					  </div>
					  <div class="form-group">
						<label for="vendorDetailsVendorAddress2">Address 2</label>
						<input type="text" class="form-control" id="vendorDetailsVendorAddress2" name="vendorDetailsVendorAddress2">
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <label for="vendorDetailsVendorCity">City</label>
						  <input type="text" class="form-control" id="vendorDetailsVendorCity" name="vendorDetailsVendorCity">
						</div>
						<div class="form-group col-md-4">
						  <label for="vendorDetailsVendorDistrict">District</label>

						  <!-- district list -->
						  <select id="vendorDetailsVendorDistrict" name="vendorDetailsVendorDistrict" class="form-control chosenSelect">
							<?php include('inc/districtList.html'); ?>
						  </select>
						</div>
					  </div>					  
					  <button type="button" id="addVendor" name="addVendor" class="btn btn-success">Add Vendor</button>
					  <button type="button" id="updateVendorDetailsButton" class="btn btn-primary">Update</button>
					  <button type="button" id="deleteVendorButton" class="btn btn-danger">Delete</button>
					  <button type="reset" class="btn">Clear</button>
					 </form>
				  </div> 
				</div>
			  </div>
			    
			  <div class="tab-pane fade" id="v-pills-sale" role="tabpanel" aria-labelledby="v-pills-sale-tab">
				<div class="card card-outline-secondary my-4">
				  <div class="card-header">Sale Details</div>
				  <div class="card-body">
					<div id="saleDetailsMessage"></div>
					<form>
					  <div class="form-row">
						<!-- <div class="form-group col-md-3">
						  <label for="saleDetailsItemNumber">Item Number<span class="requiredIcon">*</span></label>
						  <input type="text" class="form-control" id="saleDetailsItemNumber" name="saleDetailsItemNumber" autocomplete="off">
						  <div id="saleDetailsItemNumberSuggestionsDiv" class="customListDivWidth"></div>
						</div> -->
					<!-- 	<div class="form-group col-md-3">
							<label for="saleDetailsCustomerID">Customer ID<span class="requiredIcon">*</span></label>
							<input type="text" class="form-control" id="saleDetailsCustomerID" name="saleDetailsCustomerID" autocomplete="off">
							<div id="saleDetailsCustomerIDSuggestionsDiv" class="customListDivWidth"></div>
						</div> -->
					
				  
				</div>
			  </div>
			</div>
		 </div>
	  </div>
    </div>
<?php
	require 'inc/footer.php';
?>
  </body>
</html>

