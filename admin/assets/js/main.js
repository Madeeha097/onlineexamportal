
$(document).ready(function(){
    $('#btnAddSemester').on('click', function(e){
        e.preventDefault();
        let semester_name = $('#sem_name').val();
        let stream_id = $('#stream_id').val();

        $.ajax({
            url: "../routes/add_semester.php",
            method: "post",
            data: {semester_name:semester_name, stream_id:stream_id},
            success: function(returnedData) {
                if(returnedData == 200) {

                } else{

                }
            }
        });

    });


    $('#btnAddStream').on('click', function(e){
        e.preventDefault();
        let stream_name = $('#stream_name').val();
        let stream_code = $('#stream_code').val();

        $.ajax({
            url: "../routes/add_semester.php",
            method: "post",
            data: {stream_name:stream_name, stream_code:stream_code},
            success: function(returnedData) {
                if(returnedData == 200) {

                } else{

                }
            }
        });

    });




    $('#btnAddSubject').on('click', function(e){
        e.preventDefault();
        let subject_name = $('#subject_name').val();
        let semester_id = $('#semester_id').val();
        let stream_id = $('#stream_id').val();

        $.ajax({
            url: "../routes/add_semester.php",
            method: "post",
            data: {subject_name:subject_name, semester_id:semester_id, stream_id:stream_id},
            success: function(returnedData) {
                if(returnedData == 200) {

                } else{

                }
            }
        });

    });


    $('#btnAddQuiz').on('click', function(e){
        e.preventDefault();
        let title = $('#title').val();
        let creator_id = $('#creator_id').val();
        let creation_date = $('#creation_date').val();
        let start_date = $('#start_date').val();
        let end_date = $('#end_date').val();
        let stream_id = $('#stream_id').val();
        let semester_id = $('#semester_id').val();
        let subject_id = $('#subject_id').val();


    $.ajax({
            url: "../routes/add_semester.php",
            method: "post",
            data: {title:title, creator_id:creator_id, creation_date:creation_date, start_date:start_date, end_date:end_date, stream_id:stream_id, semester_id:semester_id, subject_id:subject_id},
            success: function(returnedData) {
                if(returnedData == 200) {

                } else{

                }
            }
        });

    });


    $('#btnAddQuestion').on('click', function(e){
        e.preventDefault();
        let question_text = $('#question_text').val();
        let question_type = $('#question_type').val();
       // let correct_answer = $('#correct_answer').val();
        let subject_id = $('#subject_id').val();

        $.ajax({
            url: "../routes/add_semester.php",
            method: "post",
            data: {question_text:question_text, question_type:question_type, correct_answer:correct_answer, subject_id:subject_id},
            success: function(returnedData) {
                if(returnedData == 200) {

                } else{

                }
            }
        });

    });

    $('#btnAddUser').on('submit', function(e){
        e.preventDefault();
        let formData = new FormData(this);
        

        $.ajax({
            url: "../routes/add_semester.php",
            method: "post",
            data: {formData:formData},
            success: function(returnedData) {
                if(returnedData == 200) {

                } else{

                }
                
            },
                contentType: false,
                processData: false,
                cache: false
        });

    });


    // This is fetch handlers section

    $('.edit_user').on('click',function(e){
        e.preventDefault();
        let username = $(this).attr('data-id');    
        let filename = 'fetch_user';    

        $.ajax({
            url: "../routes/fetch_details.php",
            method: "post",
            dataType: "JSON",
            data: {userName:username, filename: filename},
            success: function(returnedData) {
                if(returnedData) {
                    $('#name').val(returnedData['name']);
                    $('#email').val(returnedData['email']);
                    $('#username').val(returnedData['username']);
                    $('#password').val(returnedData['password']);
                    $('#cell').val(returnedData['phone']);
                    $('#profilePic').attr('src', '../assets/images/' + returnedData['image']);
                } else{
                }    
            }
        });
    });

    $('#edit_semester').on('click', function(e){
        e.preventDefault();
        let semester_name = $('#sem_name').val();
        let stream_id = $('#stream_id').val();
        let filename = 'fetch_semester';

        $.ajax({
            url: "../routes/add_semester.php",
            method: "post",
            data: {semester_name:semester_name, stream_id:stream_id, filename:filename},
            success: function(returnedData) {
                if(returnedData == 200) {

                } else{

                }
            }
        });

    });


    //this is update handlers section
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
        });
    });

    $('#frmUpdateQuestionDetails').on('submit', function(e) {
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
        });
    });
});

$('#frmUpdateQuizDetails').on('submit', function(e){
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
    });
});

$('#frmUpdateSubjectDetails').on('submit', function(e){
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
    });
});

$('#frmUpdateStreamDetails').on('submit', function(e){
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
    });
});

$('#frmUpdateSemesterDetails').on('submit', function(e){
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
    });
});
