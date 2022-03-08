$(function () {


    // conveting cedis to dollars
    $("#amount").keyup(function () {

        // $("#amtd").html($(this).val());

        if ($(this).val() == "") {

            $("#decv").html('');

        }
        else {

            var myp = parseFloat($(this).val());
            var rt = parseFloat($("#rate").val());
            $("#decv").html('$' + (myp / rt));
        }



    });

// loading function
    function isLoading() {
        swal({
            title: "Validating!",
            text: "<small>Please wait........</small>",
            type: "info",
            html: true
        });
    }

    // response function

    function resp(response) {

        response = $.trim(response);

        console.log(response);
        console.log(response.trim() == "login");

        if (response == "ok") {
            swal({
                title: "Comment sent!",
                text: "<small>Your comment is delivered successfully</small>",
                type: "success",
                html: true
            });

        }

        else if (response == "Thanks") {
            swal({
                title: "Subscribed!",
                text: "<small>Thank you for subscribing</small>",
                type: "success",
                html: true
            });

        }

        else if (response == "login") {

            swal({
                title: "Success!",
                text: "<small>login successful.</small>",
                type: "success",
                html: true,
                timer: 3000,
                showConfirmButton: false
            }, function () {
                window.location.reload();
            });


        }


        else if (response == "Registration successful") {
            swal({
                title: "Success!",
                text: "<small>Your Account created successfully</small>",
                type: "success",
                html: true
            });
        }

        else if (response == "updated") {
            swal({
                title: "Success!",
                text: "<small>update successful.</small>",
                type: "success",
                html: true,
                timer: 3000,
                showConfirmButton: false
            }, function () {
                window.location.reload();
            });
        }

        else if (response == "activeplan") {
            var mid = $("#mpi").val();
            var cid = $("#mci").val();
            var rr = "AZJDJDZHxsdjaaezcawwelnpfjfjd"

            swal({
                title: "Success!",
                text: "<small>Redirecting......</small>",
                type: "success",
                html: true,
                timer: 3000,
                showConfirmButton: false
            }, function () {
                window.location = "mf.php?pid=" + mid + "&cid=" + cid + "&com.nsikeymey=" + rr;
            });
        }

        else if (response == "Formsub") {


            swal({
                title: "Success!",
                text: "<small>An Email has been sent to you.. </small>",
                type: "success",
                html: true,
                timer: 5000,
                showConfirmButton: false
            }, function () {
                window.location = "players.php";
            });
        }

        else if (response == "expired") {
            // var mid = $("#mpi").val();
            // var cid = $("#mci").val();
            // var rr = "AZJDJDZHxsdjaaezcawwelnpfjfjd"

            swal({
                title: "Warning!",
                text: "<small>Your Subscription expired......</small>",
                type: "warning",
                html: true,
                timer: 4000,
                showConfirmButton: false
            }, function () {
                window.location = "profile.php";
            });
        }
        else {

            swal({
                title: "Warning!",
                text: "<small>" + response + "</small>",
                type: "error",
                html: true
            });

        }




    }


    // contact us form
    $("#contfrm").submit(function (e) {

        e.preventDefault();

        var reg1opt = {
            url: 'dollar.php?action=addmess',
            type: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: isLoading,
            success: resp


        }
        $.ajax(reg1opt);

    })

})