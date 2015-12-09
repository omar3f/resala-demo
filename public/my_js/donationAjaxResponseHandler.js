

        //Disappear when clicked
        disappearWhenClicked('first_name', '_error');
        disappearWhenClicked('last_name', '_error');
        disappearWhenClicked('phone', '_error');
        disappearWhenClicked('email', '_error');





        //Handling ajax response

        $(document).ready(function () {
            $('#note').slideUp(0);
            //Successful donation
            var success_action = function(data) {
                if (data.success === true) {
                    $('#note').slideDown("slow", function () {
                        setTimeout(function () {
                            $('#note').slideUp("slow");
                        }, 2000);
                    });
                } else {
                    alert('Something went wrong');
                }
            };
            //Unsuccessful donation
            var error_action = function(data) {
                var attrs = getProps(data.responseJSON);
                var error_status = data.error().status;
                //Validation error code 422
                if (error_status === 422) {
                    var attrsHTML = addToArrayElements(attrs, '_error');

                    for (var key in attrsHTML) {

                        $('.' + attrsHTML[key]).removeClass('hide');

                    }
                } else {
                    alert('Something went wrong');
                }


            };
            ajaxHelper('1', function(data) {
                success_action(data);

            }, function(data) {
                error_action(data);
            });



        });