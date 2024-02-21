$(document).ready(function(){
    $('#btnlogin').on('click', function(e){
        e.preventDefault();;
        let username = $('#username').val();
        let password = $('#password').val();
        $.ajax({
            url: "../routes/login.php",
            method: "post",
            data: {user:username, pwd:password},
            success: function(test) {
                if(test == 200) {
                    window.location.href='../views/index.php';
                } else {
                    alert('In-Valid Credentials');
                }
            }
        });
    });    

    $('.test').on('click',function(e){
        e.preventDefault();
        let username = $(this).attr('data-id');
        

        $.ajax({
            url: "../routes/fetch_details.php",
            method: "post",
            dataType: "JSON",
            data: {userName:username},
            success: function(returnedData) {
                if(returnedData) {
                    $('#name').val(returnedData['name']);
                    $('#email').val(returnedData['email']);
                    $('#username').val(returnedData['username']);
                    $('#password').val(returnedData['password']);
                    $('#cell').val(returnedData['phone']);
                    $('#profilePic').attr('src', '../assets/images/' + returnedData['image']);
                } else{
                    alert('In-Valid Credentials');
                }    
            }
        });
    });


$('#frmUpdateProfileDetails').on('submit', function(e){
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "../routes/update_details.php",
        method: "post",
        data: formData,
        success: function(returnedData) {
            if(returnedData == 200) {
                // handle success
            } else {
                // handle failure
            }
        },
        contentType: false,
        processData: false,
        cache: false
    })
});


$('#btnBulkUpload').on('submit', function(e){
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "../routes/insert_details.php",
        method: "post",
        data: formData,
        success: function(returnedData) {
            if(returnedData == 200) {
                alert('Data uploaded successfully');
                window.location.href = window.location.href;
            } else {
                alert(returnedData);                
            }
        },
        contentType: false,
        processData: false,
        cache: false
    })
});

    $('#image').on('change', function(e){
        e.preventDefault();
        let extension = 'test';
        if (extension == 'jpg' || fileExtension == 'png') {
            $('#image').css('border', '1px solid green')
            $('#error_success').html('Valid Image');
        } else {
            $('#image').css('border', '1px solid red');
            $('#error_success').html('In-Valid Image');
        }
    });

});



