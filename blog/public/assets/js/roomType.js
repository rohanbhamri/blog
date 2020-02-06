function getOccupancy(id) {

    $.get('/getOccupancy/' + id, function(success) {
        //alert(success);
        $("#occupancy").val(success);
        $("#empty_bed").val(success);
    });

}