<!-- wrap start -->
<div class="wrapper">
<?php
    if (isset($error_message)) {
        //echo $error_message;
        echo '<script language="javascript">';
        echo 'alert("The Reference No. and Reference Code that you have entered are invalid.");';
        echo 'window.location.href = "http://localhost/aakorcham/search";';
        echo '</script>';
        exit;
    }

    if (isset($result_display)) {
        if ($result_display == "No record found !") {
            // echo $result_display;
            echo '<script language="javascript">';
            echo 'alert("The Reference No. and Reference Code that you have entered are invalid.");';
            echo 'window.location.href = "http://localhost/aakorcham/search";';
            echo '</script>';
            exit;
            }
        else { 
            echo'<section class="contentWrap" style="width:1000px;margin:0 auto">';
            echo'<div class="referTit">';
            echo'<h3>Authenticity of a document issued/certified by<br/>Korea Chamber of Commerce and Industry (KCCI)</h3>';
            echo'<p>Republic of Korea</p>';
            
            foreach ($result_display as $value) {
            echo '<div class="info">
				<p class="floatL">
				<strong class="tit">Reference No. : </strong>
				<span class="point01">' . $value->RefNo . '</span>' . 
				'<strong class="tit">Reference Code : </strong>
				<span class="point01">' . $value->RefCode . '</span></p>' . 
				'<p class="floatR">
				<strong class="tit">Issue Date. : </strong>
                <span class="point">' . $value->Date . '</span></p></div></div>
                <h4 class="hTit">1. Goods consigned from (Exporter\'s business name, address, country)</h4>
                <div class="boardWrap">
                    <table>
                        <caption>기본정보 Goods consigned from</caption>
                        <colgroup>
                            <col style="width: 17%;" />
                            <col />
                        </colgroup>
                        <tbody>
                            <tr>
                                <th scope="row">Name & Address</th>                                
                                <td>' . $value->GoodsConsignedFrom . '<br/>' . $value->Address1 . '</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4 class="hTit">2. Goods consigned to (Consignee\'s name, address, country)</h4>
                <div class="boardWrap">
                    <table>
                        <caption>기본정보 Goods consigned to</caption>
                        <colgroup>
                            <col style="width: 17%;" />
                            <col />
                        </colgroup>
                        <tbody>
                            <tr>
                                <th scope="row">Name & Address</th>
                                <td>' . $value->GoodsConsignedTo . '<br/>' . $value->Address2 . '</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4 class="hTit">3. Means of transport and route</h4>
		        <div class="boardWrap">
			        <table>
				        <caption>기본정보 Means of transport and route</caption>
				        <colgroup>
					        <col style="width: 17%;" />
					        <col />
				        </colgroup>
				        <tbody>
					        <tr>
						        <th scope="row">Port of Loading</th>
						            <td>' . $value->PortOfLoading . '</td>
					        </tr>
                            <tr>
                                <th scope="row">Port of Discharge</th>
                                <td>' . $value->PortOfDischarge . '</td>
                            </tr>
					        <tr>
						        <th scope="row">Vessel\'s name/Aircraft etc.</th>
						        <td>' . $value->VesselName . '</td>
					        </tr>
					        <tr>
						        <th scope="row">Departure date</th>
						        <td>' . $value->DepartureDate . '</td>
					        </tr>
				        </tbody>
			        </table>
                </div>
                <h4 class="hTit">5. Marks &amp; numbers; number and kind of packages; description of goods</h4>
                <div class="boardWrap printDocument">
                    <table>
                        <caption>Marks &amp; number</caption>
                        <colgroup>
                            <col style="width:10%" />
                            <col />
                            <col style="width:45%" />
                            <col style="width:10%" />
                            <col style="width:10%" />
                            <col style="width:10%" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" >Item number</th>
                                <th scope="col" >Marks and number of Packages</th>
                                <th scope="col" >Number and type of packages, description of goods(including quantity where appropriate and HS number of the importing country)</th>
                                <th scope="col" >Origin criterion (see notes overleaf)</th>
                                <th scope="col" >Gross weight orother quantity and Value(FOB)</th>
                                <th scope="col" >Number and date of invoices</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>' . $value->ItemNumber . '</td>
                                <td></td>
                                <td>' . $value->Des1 . '<br>' . $value->Des2 . '<br>' . $value->Des3 . '<br>'. $value->Des5 . '<br>'. $value->Des4 .  '</td>
                                
                                <td>' . $value->OriginCriterion . '</td>
                                <td>' . $value->GrossWeight1. '<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'  . $value->GrossWeight2 . '<br>' . $value->GrossWeight3 . '</td>
                                <td>' . $value->InvoiceNumDate . '</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4 class="hTit">13. Etc</h4>
                <div class="boardWrap">
                    <table>
                        <caption>기본정보 Etc</caption>
                        <colgroup>
                            <col style="width: 17%;" />
                            <col style="width: *%;" />
                        </colgroup>
                        <tbody>
                            <tr>
                                <th scope="row">Third Country Invoicing</th>
                                <td>n/a</td>
                            </tr>
                            <tr>
                                <th scope="row">Exhibition</th>
                                <td>n/a</td>
                            </tr>
                            <tr>
                                <th scope="row">Back-to-Back C/O</th>
                                <td>n/a</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>'; } } } ?>
    </section>
</div>