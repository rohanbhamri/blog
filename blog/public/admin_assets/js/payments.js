function updatePendings(amount_recieved) {
    let total = $('#total').val();
    let pending = total - amount_recieved;
    $('#pending').val(pending);
}

function update(discount) {
    let total = $('#total_discount').val();
    let pending = total - discount;
    $('#amount_recieved').val(pending);
    $('#total').val(pending);
}