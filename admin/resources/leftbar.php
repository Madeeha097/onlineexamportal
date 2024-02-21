<nav>
    <?php
    
    // Check if the session variables are set
    if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
        $us = $_SESSION['username'];
        $pw = $_SESSION['password'];
        $id = $_SESSION['login_id'];
        $get_data = "SELECT * FROM tbl_login WHERE id = $id";
        
        $run_data = mysqli_query($con, $get_data);
        $row_data = mysqli_fetch_array($run_data);
        $image = $row_data['image'];
    }
    ?>
    <img src="../assets/images/<?php echo $image;?>" class="img-admin" />
    <ul class="main-ul">
        <h3> <span class="admin">A</span>dmin Leftside  </h3>
        <li> 
            <a href=""> Dashboard
               <ul class="sub-ul">
                <li>
                    <a href=""> Sub Item 1 </a>
                </li>
                <li>
                    <a href=""> Sub Item 2 </a>
                </li>
               </ul>
            </a>       
        </li>
        <li>
            <a href=""> Add Question
                <ul class="sub-ul">
                <li>
                    <a href=""> Sub Item 1 </a>
                </li>
                <li>
                    <a href=""> Sub Item 2 </a>
                </li>
                <li>
                    <a href=""> Sub Item 3 </a>
                </li>
               </ul>
            </a>       
        </li>
        <li>
            <a href=""> Manage Students
                <ul class="sub-ul">
                    <li>
                        <a href=""> Sub Item 1 </a>
                    </li>
                </ul>
            </a>
        </li>
        <li>
            <a href=""> Manage Result </a>
        </li>
        <li>
            <a href=""> Manage Study Material </a>
        </li>
    </ul>
</nav>
