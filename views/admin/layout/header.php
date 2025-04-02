<div class="container-fluid">
    <div class="cr-header-items">
        <div class="left-header">
           
            
        </div>
        <div class="right-header">
          
            <div class="cr-right-tool display-screen">
                <a class="cr-screen full" href="javascript:void(0)"><i class="ri-fullscreen-line"></i></a>
                <a class="cr-screen reset" href="javascript:void(0)"><i
                        class="ri-fullscreen-exit-line"></i></a>
            </div>
            <div class="cr-right-tool display-dark">
                <a class="cr-mode dark" href="javascript:void(0)"><i class="ri-moon-clear-line"></i></a>
                <a class="cr-mode light" href="javascript:void(0)"><i class="ri-sun-line"></i></a>
            </div>
            <div class="cr-right-tool cr-user-drop">
                <?php
                if (empty($_SESSION['nameAccount'])  ) {
                    echo '<a href="index.php?admin=login" class="cr-mode"><i class="ri-account-pin-circle-line"></i></a>';
                    exit();
                } else {
                    echo '<div class="cr-hover-drop">
                                <div class="cr-hover-tool">
                                    <img class="user" src="assets/admin/img/user/1.jpg" alt="user">
                                </div>
                                <div class="cr-hover-drop-panel right">
                                    <div class="details">
                                        <h6>' . $_SESSION['nameAccount'] . '</h6>
                                        <p></p>
                                    </div>
                                    <ul class="border-top">
                                        <li><a href="index.php?admin=logout"><i class="ri-logout-circle-r-line"></i>Logout</a></li>
                                        <li><a href="index.php?user=home"><i class="ri-logout-circle-r-line"></i>Quay lại trang chủ</a></li>
                                    </ul>
                                </div>
                            </div>';    
                }
                ?>

            </div>
        </div>
    </div>
</div>