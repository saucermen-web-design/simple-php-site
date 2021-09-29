<!-- Start Navigation -->
    <div class="navbar navbar-default navi" id="navi">
        <div class="brandingIconNav">
            <a class="btn" href="<?php echo ROOT_PATH;?>">
                <img src='<?php echo ROOT_PATH; ?>Assets/images/napster-brands.svg' alt='branding-icon'/>
            </a>
        </div>
        <div class="navLinks">
            <a href="<?php echo ROOT_PATH; ?>">Home</a>
            <a href="<?php echo ROOT_PATH . "boards"; ?>">Boards</a>
            <?php
                $loggedIn = false;

                if($loggedIn) {
                    echo "<a href=" . ROOT_PATH . "user>User</a>";
                }else {
                    echo "
                        <a href=" . ROOT_PATH . "users/login>Log-In</a>
                        <a href=" . ROOT_PATH . "users/register>Register</a>
                    ";
                }
            ?>
            <a href="<?php echo ROOT_PATH . "about"; ?>">About</a>
        </div>
    </div>
<!-- End Navigation -->
<!-- Start Content -->