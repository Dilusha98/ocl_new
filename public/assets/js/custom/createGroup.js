$(document).ready(function () {

    $(document).on('change', '#noDate', function () {
        $("#endDate").prop("disabled", $(this).prop('checked'));
    });

    $(document).on('change', '#noLimit', function () {
        $("#participantsCount").prop("disabled", $(this).prop('checked'));
    });



    $(document).on('click','#createBtn',function (e) {
        e.preventDefault();

        var name = $('#groupName').val();
        var message = $('#message').val();
        var startDate = $('#startDate').val();
        var EndDate = $('#endDate').val();
        var participantCount = $('#participantsCount').val();
        var noLimit = $('#noLimit').prop('checked');
        var acountTypeRadioBtn = $("#accountType").prop("checked");
        var Nodate = $('#noDate').prop('checked');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "post",
            url: "/create-group",
            data: {
                'name':name,
                'message':message,
                'startDate':startDate,
                'endDate':EndDate,
                'Nodate':Nodate,
                'participantCount':participantCount,
                'noLimit':noLimit,
                'acountTypeRadioBtn':acountTypeRadioBtn,

            },
            success: function (res) {

                console.log(res);

                if (res.error) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: res.error['0'],
                    });
                } else {

                    $('input, textarea').val('');
                    $('input[type="checkbox"]').prop('checked', false);
                    $('input[type="radio"]').prop('checked', false);
                    $("input").prop("disabled",false);

                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        text: res.success,
                        showConfirmButton: false,
                        timer: 1500
                    });
                }


            }
        });



    });

});
