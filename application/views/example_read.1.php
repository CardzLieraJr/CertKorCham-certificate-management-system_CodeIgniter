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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>

<title>AK FORM</title>

</head>
<body>
<div id="content">

<div id="sidebar">
<div id="outline">
</div>
</div>

<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1">
<div class="pc pc1 w0 h0">
	<img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url(); ?>assets/pdf/1953-opt.jpg"/>
	<div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">ORIGINAL</div>
	
	<div class="t m0 x2 h3 y2 ff2 fs1 fc1 sc0 ls0 ws0 txt1 bold txt-resize1"><span style="letter-spacing:-1.3px;">1. Goods consigned from (Exporter&rsquo;s business name, address, country)</span></div>
	
	<div class="t m0 x8 h3 y8 ff2 fs1 fc1 sc0 ls0 ws0 txt1 txt-resize6 bold"><span style="letter-spacing:-0.7px;">Reference No.</span>&nbsp;&nbsp;&nbsp;<span style="letter-spacing:1.2px;"><?php echo $RefNo; ?></span></div>
	
	<div class="t m0 x8 h3 y1c ff2 fs1 fc6 sc0 ls0 ws0 txt1 txt-resize6 bold"><span style="letter-spacing:-0.7px;">Reference Code.</span>&nbsp;<span style="letter-spacing:1px;"><?php echo $RefCode; ?></span></div>

	<div class="t m0 x2 h3 yb ff2 fs1 fc2 sc0 ls0 ws0 txt2"><span style="letter-spacing:1px;"><?php echo $GoodsConsignedFrom; ?></span></div>
	
	<div class="t m0 xc h3 yc fs1 fc3 sc0 lsc ws0 txt2"><span style="line-height: 0.5px;letter-spacing: 0.4px;"><?php echo $Address1; ?></span></div>
	
	<div class="t m0 xc h3 ye ff2 fs1 fc1 sc0 ls13 ws0 txt1 bold txt-resize1"><span style="letter-spacing:-0.3px;">2. Goods consigned to (Consignee's name, address, country)</span></div>
	
	<div class="t m0 xc h3 yf ff2 fs1 fc4 sc0 ls19 ws0 txt2"><span><?php echo $GoodsConsignedTo; ?></span></div>
	
	<div class="t m0 x2 h3 y10 ff2 fs1 fc5 sc0 ls1a ws0 txt3 txt-resize4"><span style="letter-spacing:-1.1px;"><?php echo $Address2; ?></span></div>
	
	<div class="t m0 xc h3 y11 ff2 fs1 fc6 sc0 ls1f ws0 txt1 bold txt-resize1"><span style="letter-spacing:-0.4px;">3. Means of transport and route (as far as known)</span></div>
	
	<div class="t m0 xd h3 y12 ff2 fs1 fc6 sc0 ls27 ws0 txt1 txt-resize3"><span style="letter-spacing: -1.5px;">Departure date</span>&nbsp;&nbsp;&nbsp;<span class="txt3" style="text-transform: uppercase;right: -18px; top: 0px;letter-spacing: -1px;font-size: 39px;"><?php $newDate = date("d M,  Y", strtotime($DepartureDate)); echo $newDate; ?></span></div>
	
	<div style="letter-spacing:-1px;" class="t m0 xd h3 y14 ff2 fs1 fc7 sc0 ls2a ws0 txt1 txt-resize3"><span style="letter-spacing:-1.3px;">Vessel&rsquo;s name/Aircraft etc.</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="letter-spacing:-3.7px;" class="txt3 txt-resize5"><?php echo $VesselName; ?></span></div>
	
	<div style="letter-spacing:-1.2px;" class="t m0 xd h3 y15 ff2 fs1 fc8 sc0 ls2f ws0 txt1 txt-resize3"><span style="bottom:6px;">Port of Loading</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="letter-spacing:-1.7px;" class="txt3 txt-resize5"><?php echo $PortOfLoading; ?></span></div>
	
	<div style="letter-spacing:-1.2px;" class="t m0 xd h3 y17 ff2 fs1 fc5 sc0 ls2f ws0 txt1 txt-resize3"><span style="bottom:6px;">Port of Discharge</span>&nbsp;&nbsp;&nbsp;<span style="letter-spacing:-3.5px;" class="txt3 txt-resize5"><?php echo $PortOfDischarge; ?></span></div>
	
	<div class="t m0 x14 h4 y1d ff4 fs3 fc0 sc0 ls38 ws1 bold txt1 txt-resize7"><span style="letter-spacing:-3.3px">KOREA - ASEAN&nbsp;&nbsp;FREE&nbsp;&nbsp;TRADE&nbsp;&nbsp;AREA</span></div>
	
	<div class="t m0 x15 h4 y1e ff4 fs3 fc0 sc0 ls0 ws4 bold txt1 txt-resize7"><span style="letter-spacing:-4.3px">PREFERENTIAL</span>&nbsp;&nbsp;<span style="letter-spacing:-4.5px">TARIFF</span></div>

	<div class="t m0 x1e h4 y1f ff4 fs3 fc0 sc0 ls0 ws5 bold txt1 txt-resize7"><span style="letter-spacing:-4.1px">CERTIFICATE&nbsp;&nbsp;&nbsp;OF&nbsp;&nbsp;&nbsp;ORIGIN</span></div>
	
	<div class="t m0 xb h3 y20 ff2 fs1 fc9 sc0 ls3a ws7 txt1 bold txt-resize1"><span style="letter-spacing:-0.3px;">(Combined Declaration and Certificate)</span></div>
	
	<div class="t m0 x1f h6 y21 ff6 fs4 fc0 sc0 ls0 wsa bold txt1 txt-resize5"><span>FORM AK</span></div>
	
	<div class="t m0 x20 h7 y22 ff7 fs5 fca sc0 ls0 ws0 txt1 txt-resize6"><span style="letter-spacing:-1.4px"><?php echo $IssuedIn; ?></span></div>
	
	<!--div class="t m0 x21 h8 y23 ff8 fs6 fcb sc0 ls0 ws0"><span class="txt1">Issued in</span>&nbsp;<span class="ls3e"><span class="_ _b"></span><span class="ls0"></span></div-->
	
	<div class="t m0 x22 h8 y24 ff8 fs6 fcc sc0 ls0 ws0 txt1"><span style="letter-spacing: 0.5px;">(Country)</span></div>
	
	<div class="t m0 x23 h9 y25 ff9 fs7 fcd sc0 ls9 ws0"><span style="letter-spacing: -0.1px;">See Notes Overleaf</span></div>
	
	<div class="t m0 x24 h3 y26 ff2 fs1 fce sc0 ls3f ws0"><span>4.For official use </span></div>
	
	<div class="t m0 x25 h3 y27 ff2 fs1 fcd sc0 ls0 ws0">&nbsp;&nbsp;</div>
	
	<div class="t m0 x21 h3 y28 ff2 fs1 fcd sc0 ls40 ws0"><span class="txt1" style="letter-spacing: -1.5px;">Preferential Treatment Given Under KOREA-ASEAN</span></div>
	
	<div class="t m0 x26 h3 y29 ff2 fs1 fcd sc0 ls45 ws0"><span class="txt1" style="letter-spacing: -1.2px;">Free Trade Area Preferential Tariff</span></div>
	
	<div class="t m0 x25 h3 y2a ff2 fs1 fc1 sc0 ls0 ws0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ls40 txt1" style="letter-spacing: -1.4px;">Preferential Treatment Not Given (Please state</span></div>
	
	<div class="t m0 x27 h3 y2b ff2 fs1 fc1 sc0 ls4b ws0"><span class="txt1" style="letter-spacing: -1.8px;">reason/s)</span></div>
	
	<!--div class="t m0 x28 h3 y2c ff2 fs1 fcd sc0 ls4b ws0"><span style="right: -6px;letter-spacing: -4px;top: -31px;">·······································································································</span></div-->
	
	<div class="t m0 x28 h3 y2c ff2 fs1 fcd sc0 ls4b ws0"><span style="letter-spacing: -0.4px;">Signature of Authorized Signatory of the Importing Country</span></div>
	
	<div class="t m0 xc h3 y2d ff2 fs1 fcf sc0 ls0 ws0"><span style="letter-spacing: -0.5px;">5. Item</span></div>
	
	<div class="t m0 x29 h3 y2e ff2 fs1 fcf sc0 ls52 ws0"><span>number</span></div>
	
	<!--div class="t m0 xc hb y49 ffb fs9 fc1 sc0 ls75 ws0"><span>Ill/Ill/II</span></div-->
	
	<div class="t m0 x2a h3 y2f ff2 fs1 fc10 sc0 ls0 ws0"><span style="letter-spacing: -0.5px;">6. Marks and</span></div>
	
	<div class="t m0 x2b h3 y30 ff2 fs1 fc10 sc0 ls53 ws0"><span style="letter-spacing: -0.5px;">numbers on</span></div>
	
	<div class="t m0 x2b h3 y31 ff2 fs1 fc10 sc0 ls32 ws0"><span style="letter-spacing: -0.5px;">packages</span></div>
	
	<!--div class="t m0 x2a hb y3e ffb fs9 fc1 sc0 ls6a ws0">IIIIIIIIIIIIII</div-->
	
	<div class="t m0 x2c h3 y32 ff2 fs1 fc11 sc0 ls0 ws0"><span style="letter-spacing: -0.5px;">7. Number and type of packages, description of</span></div>
	
	<div class="t m0 x2d h3 y30 ff2 fs1 fc11 sc0 ls1 ws0"><span style="letter-spacing: -0.5px;">goods (including quantity where appropriate</span></div>
	
	<div class="t m0 x2d h3 y33 ff2 fs1 fc11 sc0 ls5c ws0"><span style="letter-spacing: -0.5px;">and HS number of the importing country)</span></div>
	
	<!--div class="t m0 x2c hb y4b ffb fs9 fc1 sc0 ls7f ws0">IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII </div-->

	<div class="t m0 x40 h3 y65 ff2 fs1 fc6 sc0 ls0 ws0 txt-resize4"><span style="letter-spacing:-1.4px;">End Of Page ...</span></div>
	
	<div class="t m0 x16 h3 y34 ff2 fs1 fc7 sc0 ls0 ws0"><span style="letter-spacing: -0.5px;">8. Origin</span></div>
	
	<div class="t m0 x17 h3 y35 ff2 fs1 fc7 sc0 ls60 ws0"><span style="letter-spacing: -0.5px;">criterion</span></div>
	
	<div class="t m0 x17 ha y36 ffa fs8 fc7 sc0 ls0 ws0 txt1"><span>(see notes</span></div>
	
	<div class="t m0 x17 ha y37 ffa fs8 fc7 sc0 ls61 ws0 t"><span>overleaf)</span></div>
	
	<!--div class="t m0 x16 hb y4a ffb fs9 fc1 sc0 ls7b ws0"><span>/Ill/II/II</span></div-->
		
	<div class="t m0 x2e h3 y38 ff2 fs1 fc6 sc0 ls62 ws0"><span style="letter-spacing: -0.5px;">9. Gross weight</span></div>
	
	<div class="t m0 x30 h3 y3a ff2 fs1 fcd sc0 ls65 ws0"><span style="letter-spacing: -0.6px;">or other quantity,</span></div>
	
	<div class="t m0 x30 h3 y3c ff2 fs1 fc6 sc0 ls23 ws0"><span style="letter-spacing: -0.5px;">and Value(FOB</span></div>
	
	<div class="t m0 x2e h3 y41 ff2 fs1 fc6 sc0 ls71 ws0"><span style="letter-spacing: -0.5px;">only when RVC</span></div>
	
	<div class="t m0 x2e h3 y42 ff2 fs1 fc13 sc0 ls73 ws0"><span style="letter-spacing: -0.3px;">criterion is used)</span></div>
	
	<!--div class="t m0 x16a hb y4a ffb fs9 fc1 sc0 ls7b ws0"><span>IIIIIIIIIIIIIII</span></div-->
	
	<div class="t m0 x2f h3 y39 ff2 fs1 fc6 sc0 ls0 ws0"><span style="letter-spacing: -0.5px;">10. Number</span></div>
	
	<div class="t m0 x31 h3 y3b ff2 fs1 fcd sc0 ls23 ws0"><span style="letter-spacing: -0.5px;">and date of</span></div>
	
	<div class="t m0 x31 h3 y3d ff2 fs1 fc6 sc0 ls68 ws0"><span style="letter-spacing: -0.5px;">invoices</span></div>
	
	<div class="t m0 x32 hc y3f ffc fs7 fce sc0 ls62 ws0 txt4 txt-resize3" style="line-height:40px;"><?php
	$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$Description);

	$array = explode("\n", $s1); 
	echo "<span style='letter-spacing:0.1px;'> ".$array[0] . "</span>";
	echo "<span style='letter-spacing:2.2px;'> ".@$array[1] . "</span>";
	echo "<span style='letter-spacing:-0.2px;'> ".@$array[2] . "</span>";
	echo "<span style='letter-spacing:0px'> ".@$array[3] . "</span>";
	?>
	</div>

	<!--div class="t m0 x2f hb y48 ffb fs9 fc1 sc0 ls75 ws0">IIIIIIIIIIIIII</div-->	
	
	<div class="t m0 x17 hd y3f ffd fsa fc12 sc0 ls6c ws0 txt4 txt-resize1">
	<?php $output = preg_replace('/\s+/', '  ',$OriginCriterion);?><span style="letter-spacing:1.5px;bottom: 23px;right: 59px;"><?php echo $output; ?></span>
	</div>

	<div class="t m0 x2e hd y43 ffe fsa fc14 sc0 ls75 ws0 txt5 txt-resize1" style="line-height:35px;"><?php
	$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$GrossWeight);

	$array = explode("\n", $s1);
	echo "<span style='letter-spacing: -1.9px;bottom: 8px;right:7px;'> ".$array[0] . "</span>";
	echo "<span style='letter-spacing: -2.4px;right: 7px;'> ".@$array[1] . "</span>";
	?>
	</div>
	
	<div class="t m0 x2f hd y44 ffe fsa fc14 sc0 ls76 ws0 txt5 txt-resize1" style="line-height:35px;"><?php
	$s1 = str_replace(' ', html_entity_decode('&nbsp;&nbsp;'),$InvoiceNumDate);

	$array = explode("\n", $s1);
	echo "<span style='letter-spacing: -2.4px;bottom: 5px;right: 7px;'> ".$array[0] . "</span>";
	echo "<span style='letter-spacing: -2px;right: 7px;'> ".@$array[1] . "</span>";
	?>
	</div>
	
	<div class="t m0 x2 h3 y4c ff2 fs1 fc10 sc0 ls0 ws0"><span style="letter-spacing: -0.5px;">11. Declaration by the exporter</span></div>
	
	<div class="t m0 xd h8 y4d ff8 fs6 fc15 sc0 ls81 ws0 txt-resize6"><span style="letter-spacing: -0.25px;">The undersigned hereby declares that the above details and statements</span></div>
	
	<div class="t m0 xd h8 y4f ff8 fs6 fc15 sc0 ls89 ws0 txt-resize6"><span style="letter-spacing: -0.35px;">are correct; that all the goods were produced in</span></div>
	
	<div class="t m0 x10 h3 y50 ff2 fs1 fc6 sc0 ls8f ws0 txt3 txt-resize5"><span><?php echo $Country; ?></span></div>
	
	<!--div class="t m0 x10 h3 y50 ff2 fs1 fc6 sc0 ls8f ws0"><span style="right: 268px;top: 18px;letter-spacing: -4px;">······································································································</span></div-->
	<div class="t m0 x33 h8 y51 ff8 fs6 fcc sc0 ls0 ws0"><span style="letter-spacing: 1.5px;">(Country)</span></div>
	
	<div class="t m0 xd h8 y52 ff8 fs6 fcc sc0 ls85 ws0 txt-resize6"><span style="letter-spacing: -0.3px;">and that they comply with the origin requirements specified for these</span></div>
	
	<div class="t m0 xd h8 y53 ff8 fs6 fcc sc0 ls8c ws0 txt-resize6"><span style="letter-spacing: -0.35px;">goods in the KOREA-ASEAN Free Trade Area Preferential Tariff</span></div>
	
	<div class="t m0 xd h8 y54 ff8 fs6 fcc sc0 ls97 ws0 txt-resize6"><span style="letter-spacing: -0.4px;">for the goods exported to</span></div>
	
	<div class="t m0 x34 h3 y55 ff2 fs1 fc7 sc0 ls9c ws0 txt3 txt-resize5"><span style="letter-spacing: -1.2px;"><?php echo $ImportingCountry; ?></span></div>
	
	<!--div class="t m0 x3 hf y56 ff3 fs2 fc16 sc0 lsa1 ws0"><span>·········································································································</span></div-->
	
	<div class="t m0 x35 h8 y57 ff8 fs6 fc17 sc0 ls0 ws0"><span style="letter-spacing:1.2px;">(Importing Country)</span></div>
	
	<div class="t m0 x29 h11 y5d ff2 fs1 fc18 sc0 lsa4 ws0 txt-resize4"><span class="txt3" style="text-transform:uppercase;    letter-spacing: -0.4px"><?php echo $Place; ?>&nbsp;<?php $newDate = date("d M Y", strtotime($Date)); echo $newDate; ?></span></div>
	
	<!--div class="t m0 x3 h13 y5f ff14 fs10 fc19 sc0 lsa8 ws0"><span>........................................................................................................</span></div-->
	
	<div class="t m0 x29 h8 y60 ff8 fs6 fc7 sc0 lsaa ws0 txt-resize6"><span style="letter-spacing:-0.25px;">Place and date, signature of authorized signatory</span></div>

	<div class="t m0 xc h3 y62 ff2 fs1 fcd sc0 ls0 ws0"><span style="right:2px;letter-spacing:-0.3px;">13.       Third Country Invoicing</span></div>
	
	<div class="t m0 x3e h3 y63 ff2 fs1 fc10 sc0 ls0 ws0"><span>     Exhibition</span></div>
	
	<div class="t m0 x41 h3 y66 ff2 fs1 fc1 sc0 ls0 ws0"><span style="letter-spacing: -0.6px;">12. Certification</span></div>
	
	<div class="t m0 xa h8 y4d ff8 fs6 fc15 sc0 lsb3 ws0 txt-resize6"><span style="letter-spacing:-0.4px;">It is hereby certified, on the basis of control carried out, that the</span></div>
	
	<div id="pdf" class="t m0 xa h8 y4d ff8 fs6 fc15 sc0 lsb3 ws0 txt-resize6"><span style="letter-spacing: -0.35px;top:37px;">declaration by the exporter is correct.</span></div>
	
	<!--div class="t m0 x9 h19 y6c ff3 fs2 fc1d sc0 lsbe ws0"><span>.....................................................................................................</span></div-->

	<div class="t m0 x48 h3 y62 ff2 fs1 fce sc0 ls0 ws0"><span>    </span><span class="text-resize6" style="letter-spacing:-0.3px;">Back-to-BackC/O</span></div>
	
	<div class="t m0 x45 h8 y6d ff8 fs6 fcb sc0 lsaa ws0"><span style="letter-spacing:0.55px;">Place and date, signature and stamp of certifying authority</span></div>
	
	<div class="t m0 xc h3 y6f ff2 fs1 fcc sc0 ls2e ws0 txt-resize1"><span style="letter-spacing:2.6px;">Identify the authenticity of certificate for verification with the website.(http://korcham.net/search)</span></div>
	
<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>

</div>
<div class="loading-indicator">

</div>
</div>

<!--script type="text/javascript">
$(document).ready(function() {
	let doc = new jsPDF('div','pt','a4');
	doc.addHTML(document.body,function() {
    doc.save('html.pdf');
	});
})
</script> -->

</body>
</html>