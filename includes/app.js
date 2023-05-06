$(document).ready(function()
{
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
                alert(feedback);
            }
        });
    });
    
      
});