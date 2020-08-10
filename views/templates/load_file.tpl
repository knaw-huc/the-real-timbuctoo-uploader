<div id="welcome">
    <form id="upload_form">
        <label>Step 4: Upload Dataset File(s)</label>
        <input id="uploadfiles" name="uploadfiles[]" type="file" accept=".ttl,.trig,.nt,.nq,.n3,.xml,.gz" multiple onchange="resetFileUploadError()">
        <div id="hint">Accepted file types: .ttl, .trig, .nt, .nq, .n3, .xml, <br/>or a .gz version of these types</div>
        <div id="fileError" class="errorMsg"></div>
        <input id="submitBtn" type="button" value="Send" onclick="validateFiles()">
        <input type="hidden" id="hsid" name="hsid" value="{$hsid}">
        <input type="hidden" id="repo" name="repo" value="{$repo}">
        <input type="hidden" id="actiontype" name="actiontype" value="{$actiontype}">
        <input type="hidden" id="ds" name="ds" value="{$ds}">
        <input type="hidden" id="ds_name" name="ds_name" value="{$ds_name}">
    </form>
    <div id="uploadStatus" class="noView">
        <div id="uploadProgress">
            <p>Transferring file(s) to Timbuctoo server...</p>
            <img src="img/spinner.gif">
            <div id="uploadError" class="errorMsg">

            </div>
        </div>
    </div>
</div>