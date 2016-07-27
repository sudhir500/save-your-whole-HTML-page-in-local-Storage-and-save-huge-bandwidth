var entityMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': '&quot;',
    "'": '&#39;',
    "/": '&#x2F;'
};

console.log(entityMap);
function encodeHtml(string) {
    return String(string).replace(/[&<>"'\/]/g, function (s) {
        return entityMap[s];
    });
}

function decodeHtml(string) {
    return String(string).replace(/[&<>"'\/]/g, function (s) {
        return entityMap[s];
    });
}

function setLocalStorage(string){
    var _HtmlData = encodeHtml($('html').html());
    console.log("data is "+_HtmlData);
    //var _HtmlData = string;
    localStorage.setItem("_HtmlData",_HtmlData);



    if(_HtmlData!=""){
        localStorage.setItem("ls", true); // tell page that localstorage is active or not
    }
}
function getLocalStorage(keyName) {


    var _HtmlData = localStorage.getItem(keyName);
    var decoded = $('<div/>').html(_htmlData).text();
    //alert(decoded);

    return decoded;
}

var send_request_data;
function send_request(task_alias,file_url,data_array,status_container){
    $.ajax({
        type:'POST',
        async   : false,
        url:file_url,
        'Content-Type' : 'application/Json',
        data:{
            'task_alias':task_alias,
            'allData':data_array
        },
        success: function(data) {
            window.send_request_data=data;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            $(status_container).html("Something Error Found while inserting this record..");
            console.log("Ajax Error found-: \n \n"+XMLHttpRequest.responseText+'</pre>');
        }
    });
    return send_request_data;
}

//alert(5);