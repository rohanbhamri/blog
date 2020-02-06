$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


function getRoomCharge(room) {
    // alert(room);
    $.post('/members/getRoomCharges', { 'room': room }, function(success) {
        let rent = success[0].rent;
        let security = success[0].security_deposit;
        $('#room_charges').val(rent);
        $('#security').val(security);

        updateTotal();

    });
}


function getMealsCharges(title) {
    if (title != 'Not Included') {
        $.post('/members/getMealCharge', { "title": title }, function(success) {
            let meal_charges = success[0].price;
            $('#meal_charges').val(meal_charges);
            updateTotal();
        });
    } else {
        $('#meal_charges').val(0);
        updateTotal();
    }
}

function updateTotal(discount) {
    let rent = parseInt($("#room_charges").val());
    let security = parseInt($("#security").val());
    let meal_charges = $("#meal_charges").val();
    let taxes = $("#taxes").val();
    if (meal_charges == '') {
        meal_charges = 0;
    }
    let total = rent + parseInt(meal_charges);
    total = total + (total * (taxes / 100));
    total = total + security;
    // alert(discount)
    if (discount != undefined) {
        total = total - discount;
    }
    // alert(total_rent);
    //let date_joined = $("#date_joined").val();
    $('#total').val(total);
    $('#amount_recieved').val(total);
    $('#pending').val(0);

}

function updatePending(amount_recieved) {
    let total = $('#total').val();
    let pending = total - amount_recieved;
    $('#pending').val(pending);

}

function branchSettings(id) {
    $.post('/members/getBranchSettings', { 'id': id }, function(success) {
        $("#taxes").val(success.taxes);
        let invoice_no = success.invoice_prefix + "-" + success.invoice_last_number;
        $("#invoice").val(invoice_no);
    });
}

function updateRoomCharges(room, member_id) {
    // alert(member_id);
    $.post('/members/getRoomCharges', { 'room': room }, function(success) {
        let rent = success[0].rent;
        let security = success[0].security_deposit;
        $('#updated_room_charges').val(rent);
        $('#updated_security').val(security);
        updateNewRoomTotal(rent, security);
    });
}

function updateNewRoomTotal(rent, security) {
    // let rent = parseInt($("#updated_room_charges").val());
    // let security = parseInt($("#updated_security").val());
    let taxes = parseInt($("#taxes").val());
    let meal_charges = parseInt($("#meal_charges").val());
    let total = (rent + meal_charges) + ((rent + meal_charges) * (taxes / 100));
    total = Math.ceil(total + security);
    $('#updated_total').val(total);
    $('#amount_recieved').val(total);
    let last_room_rent = $("#last_room_rent").val();
    let last_room_security = $("#last_room_security").val();
    let total_security = last_room_security - security;
    let total_rent = last_room_rent - rent;
    let pending = parseInt($("#pending").val());
    if (pending == undefined) { pending = 0; }
    let total_pending = pending + total_rent + total_security;
    $("#pending").val(total_pending);
    $("#old_pending").val(total_pending);
    // alert(meal_charges);
}

function updateNewPending(amount_recieved) {
    let pending = parseInt($("#old_pending").val());
    let total = parseInt($('#updated_total').val());
    // alert(total);
    let pending_total = (total - parseInt(amount_recieved));
    pending_total = pending_total + pending;
    $('#pending').val(pending_total);

    // document.getElementById("test").innerHTML = pending_total;
}