<!-- wrap start -->
<div class="wrapper">

    <!-- ?php echo form_open(site_url()."/results", array('method' => 'post', 'id' => 'myForm')); ?-->
    <?php echo form_open(site_url()."/results", array('method' => 'post', 'id' => 'myForm')); ?>
    <?php echo form_fieldset('Reference Check it out',['class' => 'reference langKor']);?>
    <h4>&nbsp;Authenticity of a document issued/certified by <br/> Korea Chamber of Commerce and Industry (KCCI)</h4>

    <p>Republic of Korea</p>

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
                <input type="text" id="refno" name="refno" placeholder="Please enter referenceNo only" maxlength="15" autocomplete="off"/>
            </li>

            <li>
                <label for="refcode">Reference Code</label>
                <input type="text" id="refcode" name="refcode" placeholder="Please enter referenceCode only" maxlength="9" autocomplete="off"/>
            </li>
        </ul>

        <?php echo form_submit('submit', 'Check it out', array('class' => 'btnOut type01','id' => 'btnSearch'));?>

    </div>

    <?php echo form_fieldset_close(); ?>
    <?php echo form_close(); ?>

    

</div> <!-- //wrap end -->