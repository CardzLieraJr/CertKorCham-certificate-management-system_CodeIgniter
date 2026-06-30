<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8" />
<title>대한상공회의소 무역인증서비스센터</title>
<meta name="description" content="국가기관, 기업을 대변하는 공신력 기관 대한상공회의소 무역인증서비스센터" />
<meta name="keywords" content="FTA기업지원, 관세청 원산지관리시스템, 원산지증명 일반 무역인증, 무역조정지원사업,해외시장정보 및 국가정보, 해외투자정보" />
<meta name="robots" content="all" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<!-- // Start - Jquery Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>resources/js/lib/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>resources/js/lib/jquery-ui.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>resources/js/lib/jquery.form.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>resources/js/lib/jquery.browser.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>resources/js/lib/moment.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/lib/jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/lib/jquery-ui.structure.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/lib/jquery-ui.theme.min.css" />
<!-- // End - Jquery Script -->

<!-- Customized javascript & css stylesheet -->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>resources/js/cert.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>resources/js/common.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>resources/js/event.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>resources/js/utils.js"></script>

<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800&amp;subset=korean" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/content.css" />

<script type="text/javascript">
	$(document).ready(function() {
        $(document).on("keypress","#refno" ,function(e) {
			var check = /^[k]/i;
			if(check.test($("#refno").val())){
				realtimeValid(this, 15, '4, 6');
			}else{
				realtimeValid(this, 14, '3, 5');	
			}
			
		});
		
		$('#refno').keyup(function() {
			this.value = this.value.toUpperCase();
		});

        $(document).on("keypress","#refcode" ,function(e) {
			$('#refcode').attr('maxlength','9');
			realtimeValid(this, 9, '4');
        });

		window.onunload = function(){
		  window.opener.location.reload();
		};
    });
</script>

</head>

<body>