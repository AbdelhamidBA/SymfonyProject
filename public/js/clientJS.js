function showTab(name, button) {
    $(".tabContent").each(function(index) {
        $(this).fadeOut(500);
    });
    $(".tabLink").each(function(index) {
        $(this).removeClass("active");
    });
    $(button).addClass("active");
    $(name).delay(500).fadeIn(500);
}

/*
Cette fonction ajax permet de faire l'annulation d'une reservation
d'un client donner
*/
function cancelReservation(id) {
    $.ajax({
        type: 'DELETE',
        url: '/' + id + '/reservation/cancel',
        data: {},
        success: function(data) {
            if (data.success == false) {
                alert("Something Went Wrong");
            } else {
                alert("Reservation is Successfully Cancelled");
                location.reload(true);
            }
        }
    });
}

/*
Cette fonction ajax permet au client d'envoyer un email de contact pour l'agence
sans besoin de quitter sa profile
*/

function contact() {
    var c = $("#concern").val();
    var des = $("#description").val();
    $.ajax({
        type: "POST",
        url: "/profile/contact",
        data: { concern: c, description: des },
        success: function(data) {
            console.log(data.status);
            if (data.status == true) {
                alert("Contact mail is successfully sent");
                console.log(data);
                console.log(c);
                console.log(des);
                location.reload(true);

            } else {
                alert("Something Went Wrong");
                console.log(data);
                console.log(c);
                console.log(des);
            }
        }
    });
}
$(document).ready(function() {

    $("#historyTable_wrapper").removeAttr('class');
    $("#historyTable").DataTable({
        bSort: false,
        "autoWidth": false,
        "pageLength": 10,
        'aoColumns': [
            { bSortable: false },
            { bSortable: false },
            { bSortable: false },
            { bSortable: false },
            { bSortable: false },
        ],
        "info": true,
        "bInfo": false,
        "bLengthChange": false,
        "bFilter": false,
        "paging": true
    });
    $("#ResTable").DataTable({
        bSort: false,
        "autoWidth": false,
        "pageLength": 10,
        'aoColumns': [
            { bSortable: false },
            { bSortable: false },
            { bSortable: false },
            { bSortable: false },
            { bSortable: false },
            { bSortable: false },
        ],
        "info": true,
        "bInfo": false,
        "bLengthChange": false,
        "bFilter": false,
        "paging": true
    });


    showTab("#history", "#hisLink");
    $("#hisLink").on("click", function() {
        if ($("#hisLink").hasClass("active")) {

        } else {
            showTab("#history", "#hisLink");
        }
    });
    $("#resLink").on("click", function() {
        if ($("#resLink").hasClass("active")) {

        } else {
            showTab("#reslist", "#resLink");
        }
    });
    $("#contactLink").on("click", function() {
        if ($("#contactLink").hasClass("active")) {

        } else {
            showTab("#contact", "#contactLink");
        }
    });

    $("#hisLink").on("click", function() {

    });


    $("#resLink").on("click", function() {

    });

    $(document).on("click", ".cancel", function() {
        var id = $(this).attr("id");
        cancelReservation(id);
    });
    $("#contactForm").on("submit", function(e) {
        e.preventDefault();
        var c = $("#concern").val();
        var des = $("#description").val();

        if (c == "" || des == "") {
            alert("fill in the contact form");
        } else {
            contact();
        }

    });
});