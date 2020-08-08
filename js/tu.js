const login_server = 'https://secure.huygens.knaw.nl/saml2/login';
const home = "http://www.huc.localhost/timbuctoo_uploader/";
const resources = {
    loc: {url: "http://localhost:8080/v5/graphql", name: "Local Timbuctoo"},
    tim: {url: "http://localhost:8080/v5/graphql", name: "Huygens Timbuctoo"},
    gol: {url: "http://localhost:8080/v5/graphql", name: "Golden Agents"}
}
let user_id = '';
let user_name = '';

function init() {
    //$("#login").html("Logged in");
    $("#uploadMetadata").removeClass("noView");
    if ($("#repo").length) {
        create_metadata( 'Repository', resources[$("#repo").val()].name);
        whoAmI($("#hsid").val());
    }
    if ($("#actiontype").length) {
        create_metadata( 'Action', selectAction($("#actiontype").val()));
    }
}

function selectAction(status) {
    if (status === 'new') {
        return "Create new dataset";
    } else {
        return "Select existing dataset";
    }
}

function login() {
    var lform = document.createElement('form');
    lform.action = login_server;
    lform.id = 'loginForm'
    lform.method = 'POST';
    var field = document.createElement('input');
    field.type = 'hidden';
    field.name = 'hsurl';
    field.value = document.location;
    lform.append(field);
    document.getElementById('loginFormDiv').append(lform);
    document.getElementById('loginForm').submit();
}

function create_metadata( label, value) {
    var row = document.createElement('div');
    $(row).attr("class", 'mdRow');
    var line = document.createElement('div');
    $(line).addClass("mdLabel");
    $(line).html(label);
    $(row).append(line);
    line = document.createElement('div');
    $(line).addClass("mdValue");
    $(line).html(value);
    $(row).append(line);
    $("#uploadMetadata").append(row);
}

function process_repo() {
    window.location = home + "?hsid=" + $("#hsid").val() + "&repo=" + $("#resource").val();
}

function validate() {
    if ($("#ds_name").val().trim() === "") {
        $("#nameError").html("No dataset name provided!");
    } else {
        if (!correctExpression($("#ds_name").val())) {
            $("#nameError").html("Invalid dataset name!");
        } else {
            $("#nameError").html("");
        }
    }
    if ($("#ds").val() === "") {
        $("#fileError").html("No dataset file provided!");
    } else {
        $("#fileError").html("");
    }
}

function validateName() {
    let error = false;
    if ($("#ds_name").val().trim() === "") {
        error = true;
        $("#nameError").html("No dataset name provided!");
    } else {
        if (!correctExpression($("#ds_name").val())) {
            error = true;
            $("#nameError").html("Invalid dataset name!");
        } else {
            $("#nameError").html("");
        }
    }
    if (!error) {
        //window.location = home + "?hsid=" + $("#hsid").val() + "&repo=" + $("#repo").val() + "&actiontype=new&ds=" + $("#ds_name").val();
        create_dataset($("#ds_name").val());
    }
}

function correctExpression(name) {
    var re = new RegExp('^([a-z_0-9]+)$');
    return re.test(name);
}

async function whoAmI(hsid) {
    let response = await fetch(resources[$("#repo").val()].url, {
        method: "POST",
        body: JSON.stringify( {"query": "{aboutMe {id name}}"}),
        headers: {
            authorization:  hsid,
            'Content-Type': 'application/json'
        }
    });
    if (response.ok) {
        result = await response.json();
        user_id = result.data.aboutMe.id;
        create_metadata('Username', result.data.aboutMe.name);
    } else {
        console.log(response.statusText);
    }
}

async function timbuctoo_requests(url, query, hsid) {
    let response = await fetch(url, {
        method: "POST",
        body: JSON.stringify(query),
        headers: {
            authorization:  hsid,
            'Content-Type': 'application/json'
        }
    });
    if (response.ok) {
        result = await response.json();
        return result
    } else {
        console.log(response.statusText);
    }
}

async function create_dataset(name) {
    const query = "mutation {createDataSet(dataSetName: \""  + name + "\") {dataSetId dataSetName ownerId}}";
    console.log(JSON.stringify({"query": query}));
    let response = await fetch(resources[$("#repo").val()].url, {
        method: "POST",
        body: JSON.stringify({"query": query}),
        headers: {
            authorization:  hsid,
            'Content-Type': 'application/json'
        }
    });
    if (response.ok) {
        result = await response.json();
        if (!result.data) {
            $("#nameError").html(result.errors[0].message);
        } else {
            create_metadata('Dataset', name);
        }

    } else {
        console.log(response.statusText);
    }
}