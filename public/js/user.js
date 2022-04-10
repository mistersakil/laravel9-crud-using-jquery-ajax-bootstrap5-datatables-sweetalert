$("#user_add_form").submit(function(event) {
    event.preventDefault();
    const form_data = new FormData(this);
    
    $('#user_add_btn').text('Saving...');
    const url = $(this).attr('action');
    /** Send ajax request */
    $.ajax({
        url: url,
        processData: "false",
        method: "post",
        cache: false,
        processData: false,
        contentType: false,
        data: form_data,
        success: function(result){
            console.log(result);
            if(result.status == 200){
                /** Display sweet alert **/
                swal('Perfect', 'User added successfully',"success");

                $('#user_add_btn').text('Save');
                /** Rest modal form */
                $("#user_add_form")[0].reset();

                /** Hide modal */
                $("#user_add_modal").modal('hide');
            }
        }
    });
    /** End: Send ajax request */

});