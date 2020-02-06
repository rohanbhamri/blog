function checkall(ele) {
    var checkboxes = document.getElementsByTagName('input');
    if (ele.checked) {
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = true;
            }
        }
    } else {
        for (var i = 0; i < checkboxes.length; i++) {
            console.log(i)
            if (checkboxes[i].type == 'checkbox') {
                checkboxes[i].checked = false;
            }
        }
    }
}

function checkBox(val) {
    if (val.checked == false) {
        document.getElementById('checkall').checked = false;
    }
}

function getids() {
    var favorite = [];
    $.each($("input[name='check']:checked"), function() {
        favorite.push($(this).val());
    });
    let ids = favorite.join(",");
    let msg = $("#message").val();

    $.post('sendsms', { 'ids': ids, 'msg': msg }, function(success) {
        // alert(success);
        document.getElementById('successDiv').style.display = 'block';
    });
}


function checkMessage(val) {
    if (val == 'new') {
        document.getElementById('message1').style.display = "block";
    }
}

function showTextBox(id, name, contact) {
    // alert(id);
    $('#SendSMS').modal('show');
    $("#modal_id").val(id);
    $("#modal_name").val(name);
    $("#modal_contact").val(contact);
}

function sendSmsSingle() {
    var favorite = [];
    let msg = $("#message").val();
    let id = $("#modal_id").val();
    document.getElementById("modal_btn").innerHTML = "SENDING....";
    $.post('sendsms', { 'ids': id, 'msg': msg }, function(success) {
        // alert(success);
        document.getElementById("modal_btn").innerHTML = "SENT";
        setTimeout(function() {
            document.getElementById("modal_btn").innerHTML = "Send Message";
        }, 2000);
    });
}