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
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>/resources/js/lib/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>/resources/js/lib/jquery-ui.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>/resources/js/lib/jquery.form.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>/resources/js/lib/jquery.browser.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>/resources/js/lib/moment.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/resources/css/lib/jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/resources/css/lib/jquery-ui.structure.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/resources/css/lib/jquery-ui.theme.min.css" />
<!-- // End - Jquery Script -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/resources/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/resources/css/content.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/resources/css/nanumgothic.css" />
</head>

<body>
<!-- wrap start -->
<div class="wrapper">
	
<form method="POST" <?= base_url('results'); ?>">
        <fieldset class="reference langKor">
                <legend>Reference Check it out</legend>
                <h4>Authenticity of a document issued/certified by<br/>
                    Korea Chamber of Commerce and Industry (KCCI)</h4>
                <p>Republic of Korea</p>
                <!--inputArea-->
                <div class="inputArea">
                    <ul>
                        <li>
                            <label for="issuyear">Year of Issuance/Certification</label>
                            <select title="issued year select" id="issuyear" name="issuedYear">
                                    <option value="2020">2020</option>						          
						          	<option value="2019">2019</option>
						          	<option value="2018">2018</option>						          
						          	<option value="2017">2017</option>						          
						          	<option value="2016">2016</option>						          
						          	<option value="2015">2015</option>						          
						          	<option value="2014">2014</option>						          
						          	<option value="2013">2013</option>						          
						          	<option value="2012">2012</option>						          
						          	<option value="2011">2011</option>						          
						          	<option value="2010">2010</option>						          						          
                            </select>
                        </li>
                        <li>
                            <label for="refno">Reference No</label>
                            <input type="text" id="refno" name="refno" placeholder="Please enter referenceNo only" />
                        </li>
                        <li>
                            <label for="refcode">Reference Code</label>
                            <input type="text" id="refcode" name="refcode" placeholder="Please enter referenceCode only" />
                        </li>
                    </ul>
                    <!--input type="submit" name="Submit" id="btnSearch" class="btnOut type01" value="Check it out" /-->
                    <?php echo form_submit('submit', 'Check it out', ['class' => 'btnOut type01']);?>
                </div> <!--//inputArea-->
            </fieldset>



</form>

</div> <!-- //wrap end -->
</body>
</html>