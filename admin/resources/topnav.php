<body>
    <div class="header">
        <ul>
            <li>
                <span> Welcome <?=@$_SESSION['username'];?> </span>
            </li>
            <li class="listitem">
                <a href="" class="test" title="Notifications">
                   <i class="fa fa-bell" aria-hidden="true"></i> 
                </a>
            </li>
            <li class="listitem">
                <a class="test" data-id="<?php echo $_SESSION['username'];?>" data-toggle="modal" data-target="#exampleModal" href="" title="profile">
                <i class="fa fa-user" aria-hidden="true"></i>     
                </a>
            </li>
            <li class="listitem">
                <a href="../routes/logout.php" class="test" title="logout">
                <i class="fa fa-sign-out" aria-hidden="true"></i> 
                </a>
            </li>
            <li class="listitem">
                <a href="#" title="Settings">
                    <i class="fa fa-cog" aria-hidden="true"></i> 
                </a>
            </li>
            <li class="listitem">
                <a href="#" title="Security">
                    <i class="fa fa-shield" aria-hidden="true"></i> 
                </a>
            </li>

        </ul>
    </div>
