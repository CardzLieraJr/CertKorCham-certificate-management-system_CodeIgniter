<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pdf/base.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pdf/fancy.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pdf/main.css"/>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/pdf/compatibility.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/pdf/theViewer.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
	<script>
	try{
	theViewer.defaultViewer = new theViewer.Viewer({});
	}catch(e){}
	</script>
	
	<title>AK FORM</title>
</head>

<body id="printarea">
	<div id="sidebar"><div id="outline"></div></div>
	
	<div id="page-container">
		<div id="pf1" class="pf w0 h0" data-page-no="1">
			<div class="pc pc1 w0 h0">
				
				<img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url(); ?>assets/pdf/1953-opt.jpg"/>
				<!--<img class="bi x0 y0 w1 h1" alt="" src="<-?php echo base_url(); ?>assets/pdf/bg1.jpg"/>-->
			
				<!--reference no-->
				<div class="t m0 xb h3 y9 ff2 fs1 fc1 sc0 ls0 ws0 txt1 bold faded" style="line-height: 3.7;"><?php echo $RefNo; ?></div>
			
				<!--reference code-->
				<div class="t m0 x8 h3 y1c ff2 fs1 fc6 sc0 ls0 ws0 txt1 bold faded" style="line-height: 3.4;letter-spacing:-1.5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $RefCode; ?></div>

				<!--goods consigned from-->
				<div class="t m0 x2 h3 yb ff2 fs1 fc2 sc0 ls0 ws0 txt2 faded" style="line-height: 3;text-indent:-3px;"><?php echo $GoodsConsignedFrom; ?></div>
				
				<!--goods consigned from address-->
					<?php
						$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$Address1);

						$array = explode("\n", $s1);
						echo "<div class='t m0 xc h3 yc ff2 fs1 fc3 sc0 lsc ws0 txt2 faded' style='line-height: 3.2;text-indent:-3px;'> ".$array[0] . "</div>";
						echo "<div class='t m0 xc h3 yc ff2 fs1 fc3 sc0 lsc ws0 txt2 faded' style='line-height: 5.4;text-indent:-3px;'> ".$array[1] . "</div>";
					?>
					

				<!--goods consigned to-->
				<div class="t m0 xc h3 yf ff2 fs1 fc4 sc0 ls19 ws0 txt2 faded" style="line-height: 3.2;text-indent: 8px;"><?php echo $GoodsConsignedTo; ?></div>
				
				<!--goods consigned to address-->
				<div class="t m0 x2 h3 y10 ff2 fs1 fc5 sc0 ls1a ws0 txt2 faded" style="line-height: 3.1;text-indent: -8px;"><?php echo $Address2; ?></div>
				<div class="t m0 x2 h3 y10 ff2 fs1 fc5 sc0 ls1a ws0 txt2 faded" style="line-height: 5.6;text-indent: -8px;"><?php echo $Address3; ?></div>

				<!--departure date-->
				<div class="t m0 xf h3 y12 ff2 fs1 fc6 sc0 ls29 ws0 txt3 faded" style="line-height: 3.2;text-transform:uppercase;"><?php $newDate = date("d M,  Y", strtotime($DepartureDate)); echo $newDate; ?></div>

				<!--vessel's name/aircraft etc-->
				<div class="t m0 xd h3 y14 ff2 fs1 fc7 sc0 ls2a ws0 txt3 faded" style="line-height: 3.2;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $VesselName; ?></div>

				<!--port of loading-->
				<div class="t m0 x10 h3 y16 ff2 fs1 fc8 sc0 ls31 ws0 txt3 faded" style="line-height: 3.2;"><?php echo $PortOfLoading; ?></div>

				<!--port of discharge-->
				<div class="t m0 x13 h3 y1b ff2 fs1 fc5 sc0 ls0 ws0 txt3 faded" style="line-height: 3.2;text-indent: -40px;"><?php echo $PortOfDischarge; ?></div>

				<!--Hs Code-->
				<?php
					$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$Des1);
    
    
    
					$array = explode("\n", $s1); 			
					echo "<div class='t m0 x2c hc y3f ffc fs1 fce sc0 ls62 ws0 txt4 faded bold' style='letter-spacing: 0.3px;line-height: 1;'> ".$array[0] . "</div>";

					echo "<div class='t m0 x2c hc y40 ffc fs1 fce sc0 ls0 ws0 txt4 faded bold' style='letter-spacing: 2.5px;text-indent: -5px;line-height: 1;'> ".@$array[1] . "</div>";
					echo "<div class='t m0 x2c hc y46 ffc fs1 fc6 sc0 ls0 ws0 txt4 faded bold' style='line-height: 1;'> ".$array[2] . "</div>";
					echo "<div class='t m0 x2c hc y47 ffc fs1 fc6 sc0 ls7a ws0 txt4 faded bold' style='line-height: 1;'> ".@$array[3] . "</div>";
				?>

				<!--unit/weight-->
				<?php
					$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$Des2);
					$array = explode("\n", $s1); 			
					echo "<div class='t m0 x2c hc y40 ffc fs1 fce sc0 ls0 ws0 txt4 faded bold' style='letter-spacing: 2.5px;text-indent: -5px;line-height: 1;'> ".@$array[0] . "</div>";
				
				?>

				<!--Variant-->
				<?php
					$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$Des3);
					$array = explode("\n", $s1); 			
					echo "<div class='t m0 x2c hc y46 ffc fs1 fc6 sc0 ls0 ws0 txt4 faded bold' style='line-height: 1;'> ".$array[0] . "</div>";
				
				?>

				<!--Cases no.-->
				<?php
					$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$Des5);
					$array = explode("\n", $s1); 			
					echo "<div class='t m0 x2c hc y47 ffc fs1 fc6 sc0 ls7a ws0 txt4 faded bold' style='line-height: 1;'> ".@$array[0] . "</div>";
				
				?>

				<!--Purpose.-->
				<?php
					$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$Des4);
					$array = explode("\n", $s1); 			
					echo "<div class='t m0 x2c hc y47 ffc fs1 fc6 sc0 ls7a ws0 txt4 faded bold' style='line-height: 3;'> ".@$array[0] . "</div>";
				
				?>

			
				
				<!--origin criterion-->
				<div class="t m0 x17 hd y3f ffd fsa fc12 sc0 ls6c ws0 txt4 faded bold" style="letter-spacing: 3px;line-height: 1;text-indent: -3px;"><?php $output = preg_replace('/\s+/', '  ',$OriginCriterion);?><?php echo $output; ?></div>

				<!--gross weight-->
				
				<?php
					$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$GrossWeight1);

					$array = explode("\n", $s1);
					echo "<div class='t m0 x2e hd y43 ffe fsa fc14 sc0 ls75 ws0 txt5 faded bold' style='letter-spacing: -0.5px;    text-indent: -8px;line-height: 0.7;'> ".$array[0] . "</div>";
					echo "<div class='t m0 x2e hd y45 ffe fsa fc6 sc0 ls77 ws0 txt5 faded bold' style='letter-spacing: -1px;    text-indent: -10px;line-height: 0.8;'> ".$array[1] . "</div>";
					echo "<div class='t m0 x2e hd y45 ffe fsa fc6 sc0 ls77 ws0 txt5 faded bold' style='letter-spacing: -1px;    text-indent: -10px;line-height: 3;'> ".$array[2] . "</div>";
				
					
				?>

				<!--Quantity-->

				<?php
					$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$GrossWeight2);

					$array = explode("\n", $s1);
					
					echo "<div class='t m0 x2e hd y45 ffe fsa fc6 sc0 ls77 ws0 txt5 faded bold' style='letter-spacing: -1px;    text-indent: 100px;line-height: 0.8;'> ".$array[0] . "</div>";
				
				?>


			<!--Value-->

				<?php
					$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$GrossWeight3);

					$array = explode("\n", $s1);
					
					echo "<div class='t m0 x2e hd y45 ffe fsa fc6 sc0 ls77 ws0 txt5 faded bold' style='letter-spacing: -1px;    text-indent: -10px;line-height: 3;'> ".$array[0] . "</div>";
				
				?>

				<!--invoice date number-->
				<?php
					$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$InvoiceNumDate);

					$array = explode("\n", $s1);
					echo "<div class='t m0 x2f hd y44 ffe fsa fc14 sc0 ls76 ws0 txt5 faded bold' style='letter-spacing: -1px;text-indent: -10px;line-height: 0.7;'> ".$array[0] . "</div>";
					echo "<div class='t m0 x2f hd y45 ffe fsa fc14 sc0 ls76 ws0 txt5 faded bold' style='letter-spacing: -1px;text-indent: -10px;line-height: 0.8;'> ".$array[1] . "</div>";
				?>

				<!--place and date-->
				<div class="t m0 x29 h11 y5d ff2 fs1 fc18 sc0 lsa4 ws0 txt3 faded bold" style="letter-spacing:1.5px;text-transform:uppercase;line-height: 3.2;text-indent: 5px;"><?php echo $Place; ?>&nbsp;<span style="letter-spacing:0.5px;"><?php $newDate = date("d M Y", strtotime($Date)); echo $newDate; ?></span></div>

<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>

</div>

</div>
<div class="loading-indicator">

</div>
</div>

<script type="text/javascript">

	$(document).ready(function () {
    window.print();
	});

/*--This JavaScript method for Print Preview command--*/

    function PrintPreview() {
	
		window.onload = function() { window.print(); }

        var toPrint = document.getElementById('printarea');

        var popupWin = window.open('', '_blank','location=center');

        popupWin.document.open();

		popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" href="<?php echo base_url(); ?>assets/pdf/base.min.css"/><link rel="stylesheet" href="<?php echo base_url(); ?>assets/pdf/fancy.min.css"/><link rel="stylesheet" href="<?php echo base_url(); ?>assets/pdf/main.css"/></head><body onload="window.print()">')
        popupWin.document.write(toPrint.innerHTML);

        popupWin.document.write('</html>');

        popupWin.document.close();

    }
	
</script>

</body>
</html>
