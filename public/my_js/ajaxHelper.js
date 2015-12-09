/**
 *
 * @returns {ajaxHelper}
 */
function ajaxHelper(formNumber, received, error) {
        var whichForm = 'form[data-remote=' + formNumber + ']';
        $(whichForm).on('submit', function (e) {
            e.preventDefault();
            var form = $(this);
            var method = form.find('input[name="_method"]').val() || 'POST';
            var url = form.prop('action');
            var dataSent = form.serialize();
            $.ajax({
                type: method,
                url: url,
                data: dataSent,
                error: function (data) {
                    error(data);
                }

            }).done(function(data) {
                received(data)
            });

        });
    }


/**
 * Created by omar on 29/11/15.
 */


