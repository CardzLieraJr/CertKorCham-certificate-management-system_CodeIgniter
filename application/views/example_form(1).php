<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $page_title; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/dashboard.css" type="text/css" />   
	
	<style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
	<!-- <script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/jquery.inputmask.bundle.js"></script> -->

    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>

    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>
  </head>

<body>

<div class="container">
	<section class="content">
        <h3><?php echo $page_title; ?></h3> 
		
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Entry</li>
			</ol>
		</nav>
		
        <form action="<?php echo $action; ?>" method="post">
			<div class="input-group">
				<div class="col-md-4">
					<label for="RefNo" class="col-form-label">Reference No. <?php echo form_error('RefNo') ?></label>
					<input type="text" autocomplete="off" maxlength="15" class="form-control" name="RefNo" id="RefNo" value="<?php echo $RefNo; ?>" />
				</div>
				<div class="col-md-4">
					<label for="RefCode" class="col-form-label">Reference Code <?php echo form_error('RefCode') ?></label>
					<input type="text" autocomplete="off" maxlength="9" class="form-control" name="RefCode" id="RefCode" value="<?php echo $RefCode; ?>" />
				</div>
				<div class="col-md-4">
					<label for="varchar" class="col-form-label">Issued In <?php echo form_error('IssuedIn') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="IssuedIn" id="IssuedIn" value="<?php echo $IssuedIn; ?>" />
				</div>
			</div>

			<div class="input-group">
				<div class="col-md-12">
					<label for="GoodsConsignedFrom" class="col-form-label">1. Goods consigned from <?php echo form_error('GoodsConsignedFrom') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="GoodsConsignedFrom" id="GoodsConsignedFrom" value="<?php echo $GoodsConsignedFrom; ?>" />
				</div>
			</div>
			
			<div class="input-group">
				<div class="col-md-12">
					<label for="Address1"  class="col-form-label">1.1 Address <?php echo form_error('Address1') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="Address1" id="Address1" value="<?php echo $Address1; ?>" />
				</div>
			</div>
			
			<div class="input-group">
				<div class="col-md-12">
					<label for="GoodsConsignedTo" class="col-form-label">2. Goods consigned to <?php echo form_error('GoodsConsignedTo') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="GoodsConsignedTo" id="GoodsConsignedTo" value="<?php echo $GoodsConsignedTo; ?>" />
				</div>
			</div>
			
			<div class="input-group">
				<div class="col-md-12">
					<label for="Address2" class="col-form-label">2.1 Address <?php echo form_error('Address2') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="Address2" id="Address2" value="<?php echo $Address2; ?>" />
				</div>
			</div>


			<div class="input-group mb-3">
				<div class="col-md-12">
					<label for="Address3" class="col-form-label">2.1 City/Address <?php echo form_error('Address3') ?></label>
					<textarea rows="2" id="Address3" name="Address3" class="form-control"><?=set_value('', $Address3)?></textarea>	
				</div>
			</div>

						
			<div class="input-group">
				<div class="col-md-4">
					<label for="VesselName" class="col-form-label">Vessel's Name/Aircraft <?php echo form_error('VesselName') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="VesselName" id="VesselName" value="<?php echo $VesselName; ?>" />
				</div>
				<div class="col-md-4">
					<label for="PortOfLoading" class="col-form-label">Port of Loading <?php echo form_error('PortOfLoading') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="PortOfLoading" id="PortOfLoading" value="<?php echo $PortOfLoading; ?>" />
				</div>	
				<div class="col-md-4">
					<label for="PortOfDischarge" class="col-form-label">Port of Discharge <?php echo form_error('PortOfDischarge') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="PortOfDischarge" id="PortOfDischarge" value="<?php echo $PortOfDischarge; ?>" />
				</div>
			</div>
			
			<div class="input-group">
				<div class="col-md-3">
					<label for="DepartureDate" class="col-form-label">Departure Date <?php echo form_error('DepartureDate') ?></label>
					<input autocomplete="off" data-date-today-highlight="true" data-provide="datepicker" type="text" class="DatePicker form-control" name="DepartureDate" id="DepartureDate" value="<?php echo $DepartureDate; ?>" />
				</div>
				<div class="col-md-3">
					<label for="ItemNumber" class="col-form-label">Item Number <?php echo form_error('ItemNumber') ?></label>
					<input type="number" autocomplete="off" class="form-control" name="ItemNumber" id="ItemNumber" value="<?php echo $ItemNumber; ?>" />
				</div>
				<div class="col-md-3">
					<label for="NumberPackage" class="col-form-label">Number of Package <?php echo form_error('NumberPackage') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="NumberPackage" id="NumberPackage" value="<?php echo $NumberPackage; ?>" />
				</div>
				<div class="col-md-3">
					<label for="OriginCriterion" class="col-form-label">Origin Criterion <?php echo form_error('OriginCriterion') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="OriginCriterion" id="OriginCriterion" value="<?php echo $OriginCriterion; ?>" />
				</div>
			</div>

			<div class="input-group">
				<div class="col-md-12">
					<label for="Description" class="col-form-label">Description <?php echo form_error('Description') ?></label>
					<textarea rows="5" id="Description" name="Description" class="form-control"><?=set_value('', $Description)?></textarea>	
				</div>
			</div>

			<div class="input-group">
				<div class="col-md-6">
					<label for="GrossWeight" class="col-form-label">Gross Weight <?php echo form_error('GrossWeight') ?></label>
					<textarea rows="2" id="GrossWeight" name="GrossWeight" class="form-control"><?=set_value('', $GrossWeight)?></textarea>	
				</div>
				<div class="col-md-6">
					<label for="InvoiceNumDate" class="col-form-label">Number & Date of Invoice <?php echo form_error('InvoiceNumDate') ?></label>
					<textarea rows="2" id="InvoiceNumDate" name="InvoiceNumDate" class="form-control"><?=set_value('', $InvoiceNumDate)?></textarea>
				</div>
			</div>
			
			<div class="input-group">
				<div class="col-md-4">
					<label for="Country" class="col-form-label">Country <?php echo form_error('Country') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="Country" id="Country" value="<?php echo $Country; ?>" />
				</div>
				<div class="col-md-4">
					<label for="ImportingCountry" class="col-form-label">Importing Country <?php echo form_error('ImportingCountry') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="ImportingCountry" id="ImportingCountry" value="<?php echo $ImportingCountry; ?>" />
				</div>
				<div class="col-md-4" class="col-form-label">
					<label for="Place">Place <?php echo form_error('Place') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="Place" id="Place" value="<?php echo $Place; ?>" />
				</div>
			</div>
			
			<div class="input-group">
				<div class="col-md-4">
					<label for="Date" class="col-form-label">Date <?php echo form_error('Date') ?></label>
					<input type="text" autocomplete="off" data-date-today-highlight="true" data-provide="datepicker" class="DatePicker form-control" name="Date" id="Date" value="<?php echo $Date; ?>" />
				</div>
				<div class="col-md-4">
					<label for="Sign" class="col-form-label">Sign <?php echo form_error('Sign') ?></label>
					<input type="text" autocomplete="off" class="form-control" name="Sign" id="Sign" value="<?php echo $Sign; ?>" />
				</div>
				<div class="col-md-4" class="col-form-label">
					<label for="CertDateStamp" class="col-form-label">Certification Date (Stamp) <?php echo form_error('CertDateStamp') ?></label>
					<input type="text" autocomplete="off" data-date-today-highlight="true" data-provide="datepicker" class="DatePicker form-control" name="CertDateStamp" id="CertDateStamp" value="<?php echo $CertDateStamp; ?>" />
				</div>
			</div>

			<?php if ($id != NULL) {; ?>
				<input type="hidden" name="id" value="<?php echo $id; ?>" /> 
			<?php } ?>
		
			<div class="d-flex justify-content-center">
				<div class="p-2"><button type="submit" class="btn btn-primary"><?php echo $button ?></button></div>
				<div class="p-2"><a href="<?php echo site_url('dashboard') ?>" class="btn btn-outline-secondary">Cancel</a></div>
			</div>
		</form>
	</section>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('.DatePicker').datepicker({
		format: 'yyyy-mm-dd'
	});

	$('#RefNo').inputmask({mask: '****-**-*******', casing: "upper"});

	$('#RefCode').inputmask({mask: '****-****'});
	
})
</script>

</body>
</html>