<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="../assets/js/custom.js"></script>

</body>
</html>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Your Profile Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="profilePic" style="margin:0 auto; display:block; border-radius: 100px; width: 150px; height: 150px" />
                <form id="frmUpdateProfileDetails" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="new_name" style="width:49%; float:left" class="form-control" placeholder="Your Name" id="name">
                        <input type="email" name="new_email" style="width: 49%; float:right" class="form-control" placeholder="Your Email" id="email">
                    </div>
                    <br><br><br>
                    <div class="form-group">
                        <input type="number" name="new_cell" style="width: 49%; float:left" class="form-control" id="cell">
                        <input type="text" readonly style="width: 49%; float:right" class="form-control" id="username">
                    </div>
                    <br><br>
                    <div class="form-group">
                        <input type="password" name="new_password" style="width: 49%; float:left" class="form-control" id="password">
                        <input type="file" name="new_image" style="width: 49%; float:right" class="form-control" id="image">
                        <span id="error_success"> </span>
                    </div>
                    <br>
                    <br>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="btnUpdateProfileDetails" class="btn btn-primary">Update Profile Details</button>
            </div>
            </form>
         </div>
    </div>
</div>
