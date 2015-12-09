        function disappearWhenClicked(field, validatorAdd) {

                $("input[name=" + field + "]").keyup(function() {
                    $("." + field + validatorAdd).addClass('hide');
                });
                $("input[name=" + field + "]").keydown(function() {
                    $("." + field + validatorAdd).addClass('hide');
                });
                $("input[name=" + field + "]").click(function() {
                $("." + field + validatorAdd).addClass('hide');
                });

        }