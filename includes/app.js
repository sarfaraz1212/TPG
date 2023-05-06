$(document).ready(function() {
    $('#addclientform').on('submit', function(e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: 'includes/logic.php',
            method: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            success: function(feedback) {
                var feedback = JSON.parse(feedback);
                if(feedback.status = "success") {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Client inserted successfully!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Client insertion failed!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            }
        });
    });
});
