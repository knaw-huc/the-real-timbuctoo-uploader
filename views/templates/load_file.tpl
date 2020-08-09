<div id="welcome">
    <form id="upload_form">
        <label>Step 4: Upload Dataset File(s)</label>
        <input id="uploadfiles" name="uploadfiles[]" type="file" multiple>
        <div id="fileError" class="errorMsg"></div>
        <input id="submitBtn" type="button" value="Send" onclick="validate()">
        <input type="hidden" id="hsid" name="hsid" value="{$hsid}">
        <input type="hidden" id="repo" name="repo" value="{$repo}">
        <input type="hidden" id="actiontype" name="actiontype" value="{$actiontype}">
        <input type="hidden" id="ds" name="ds" value="{$ds}">
        <input type="hidden" id="ds_name" name="ds_name" value="{$ds_name}">
    </form>
    <div id="status" class="noView">

    </div>
</div>