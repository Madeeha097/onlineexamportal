<?php
    include('../resources/header.php');
    include('../resources/leftbar.php');
    include('../resources/topnav.php');

?>
<div class="container mt-5" style="position: relative; left: 401px; top: 168px">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="post" id="btnBulkUpload" enctype="multipart/form-data">
                <h2> Upload Student Data in Bulk </h2>
                <div class="mb-3">
                    <label for="fileInput" class="form-label">Choose File</label>
                    <input class="form-control" type="file" id="fileInput" accept=".csv" name="fileInput">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
        <div class="col-md-7 offset-md-3">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th> #</th>
                        <th> Stream Name</th>
                        <th> Stream Code</th>
                        <th> Uploaded By</th>
                        <th> Uploaded On</th>
                    </tr>
                </thead>
                Hello
                <tbody>
                    <?php
                        $get_data= "SELECT * FROM tbl_stream";
                        $run_data = mysqli_query($con, $get_data);
                        while($row_data = mysqli_fetch_array($run_data)) {
                           
                    ?>
                    <tr>
                        <td> <?=$row_data['id']?> </td>
                        <td> <?=$row_data['stream_name']?> </td>
                        <td> <?=$row_data['stream_code']?> </td>
                        <td> <?=$row_data['uploaded_by']?> </td>
                        <td> <?=date('M d, Y h:i A', strtotime($row_data['uploaded_on']));?> </td>
                    </tr>        
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    include('../resources/footer.php');
?>    