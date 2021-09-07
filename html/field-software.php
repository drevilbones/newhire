<fieldset id="field-software">
    <legend>Software</legend>

    <p id="std-sft">The following software comes standard with each desktop and includes Jenzabar, 
        Microsoft Office (Excel, Outlook, PowerPoint, Word), and Zoom.  Also 
        included are these web browsers: Edge (formerly Microsoft Internet Explorer), Google Chrome, 
        and Mozilla Firefox.</p>
        <p>If the employee needs access to additional software, please check below:</p>                    
    <!-- <label for="astra"><input type="checkbox" name="software[]" id="astra" value="astra">Ad Astra</label> -->
    <!-- <label for="adp-man"><input type="checkbox" name="software[]" id="adp-man" value="adp-man">ADP Manager Access</label> -->
    <label for="solomon"><input type="checkbox" name="software[]" id="solomon" value="solomon">Dynamics SL (Solomon)</label>
    <!-- <label for="infomaker"><input type="checkbox" name="software[]" id="infomaker" value="infomaker">Infomaker</label> -->
    <label for="jrm"><input type="checkbox" name="software[]" id="jrm" value="jrm">JRM</label>                
    <label for="powerfaids"><input type="checkbox" name="software[]" id="powerfaids" value="powerfaids">PowerFaids</label>    
    <label for="raisers"><input type="checkbox" name="software[]" id="raisers" value="raisers">Raiser's Edge</label>
</fieldset>

<script>
    var soft_list = <?php echo json_encode(@$form_data['software']); ?>;
    for (index in soft_list) {
        document.getElementById(soft_list[index]).checked = true;
    }
</script>
