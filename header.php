<?php

$currentPage = basename($_SERVER['PHP_SELF']);

?>



<!-- header -->

<nav class="navbar navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand" href="index.php"><img src="new-imag/logo.png" alt="global lashing LOGO"
                class="img-fluid" /></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">

            <div class="wrapper">

                <div class="contact-numbers py-2">

                    <a class="contact-numbers" href="mailto:info@globallashingandlifting.com"><img
                            src="new-imag/email.png" class="px-1"
                            alt="" /><span>info@globallashingandlifting.com</span></a>

                    <a class="contact-numbers" href="tel:+919321928016"><img src="new-imag/phone-call.png" class="px-1"
                            alt="" /><span>+91-9321928016 | 9892365005</span></a>

                </div>

                <div>

                    <ul class="navbar-nav py-2">



                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">About Us</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="about-us.php">Overview</a></li>

                                <li><a class="dropdown-item" href="our-story.php">Our Story</a></li>

                            </ul>

                        </li>









                        <li class="nav-item">

                            <a class="nav-link <?php if ($currentPage == 'factory.php') {
                echo 'strline';
              } ?>" href="factory.php">Factory</a>

                        </li>



                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                Products

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">



                                <li><a href="#" class="dropdown-item">One Way Cargo Lashing &raquo;</a>





                                    <ul class="submenu dropdown-menu">

                                        <li><a class="dropdown-item" href="one-way-lashing.php">One Way Lashing</a>
                                        </li>

                                        <li><a class="dropdown-item" href="narrow-woven-fabric.php">Narrow Woven Fabric
                                            </a></li>

                                        <li><a class="dropdown-item" href="buckles.php">Buckles </a></li>

                                        <li><a class="dropdown-item" href="#">Tensioner</a></li>

                                    </ul>

                                </li>















                                <li>

                                    <a href="#" class="dropdown-item">Ratchet Lashing &raquo;</a>



                                    <ul class="submenu dropdown-menu">

                                        <li><a class="dropdown-item" href="ratchet-lashing-tie-down.php">Tie down</a>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Car lashing</a></li>



                                        <li><a class="dropdown-item" href="ratchet-lashing-endless.php">Ratchet Lashing
                                                Endless</a></li>

                                        <li><a class="dropdown-item" href="cam-buckle.php">Cam Buckle Endless</a></li>

                                        <li><a class="dropdown-item" href="velcro-lashing.php">Velcro Lashing</a></li>



                                    </ul>
                                </li>

                                <li>

                                    <a href="#" class="dropdown-item">Lifting Slings &raquo;</a>





                                    <ul class="submenu dropdown-menu">

                                        <li><a class="dropdown-item" href="eye-to-eye-slings.php">Eye to Eye Slings</a>
                                        </li>

                                        <li><a class="dropdown-item" href="flat-endless-slings.php">Flat Endless
                                                Slings</a></li>



                                        <li><a class="dropdown-item" href="#">Round Slings</a></li>

                                        <li><a class="dropdown-item"
                                                href="narrow-woven-fabric-lifting-slings.php">Narrow Woven Fabric </a>
                                        </li>



                                    </ul>







                                </li>
                                <li>

                                    <a href="#" class="dropdown-item">Hardware &raquo;</a>





                                    <ul class="submenu dropdown-menu">

                                        <li><a class="dropdown-item" href="ratchet.php">Ratchet</a></li>

                                        <li><a class="dropdown-item" href="end-fittings.php">End Fittings</a></li>

                                        <li><a class="dropdown-item" href="buckles.php">Buckles</a></li>

                                    </ul>







                                </li>
                                <li>

                                    <a href="#" class="dropdown-item">Tools and Accessories &raquo;</a>



                                    <ul class="submenu dropdown-menu">

                                        <li><a class="dropdown-item" href="#">Manual</a></li>

                                        <li><a class="dropdown-item" href="#">Battery Powered</a></li>

                                        <li><a class="dropdown-item" href="#">Pneumatic</a></li>

                                        <li><a class="dropdown-item" href="#">Accessory(lifting slings)</a></li>

                                        <li><a class="dropdown-item" href="#">Accessory(lift - hand palettes)</a></li>

                                        <li><a class="dropdown-item" href="#">Dunnage Bags</a></li>

                                        <li><a class="dropdown-item" href="#">D-Shackle</a></li>









                                    </ul>



                                </li>



                                <li><a href="composite-strap.php" class="dropdown-item">Composite Strap</a>

                                </li>



                                <li><a href="special-application.php" class="dropdown-item">Special Application</a>

                                </li>

                                <li><a href="end-line-pakaing-solution.php" class="dropdown-item">End Line Packaging
                                        Solution</a>

                                </li>






                            </ul>

                        </li>





                        <li class="nav-item">

                            <a class="nav-link <?php if ($currentPage == 'clients.php') {
                echo 'strline';
              } ?> " href="clients.php">Clients</a>

                        </li>













                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                Gallery

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">



                                <li><a href="warehouse.php" class="dropdown-item">Warehouse </a>

                                </li>

                                <li><a href="certificates.php" class="dropdown-item">Certificates</a>

                                </li>

                            </ul>

                        </li>















                        <li class="nav-item">

                            <a class="nav-link" href="/global/blog">Blogs</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link   <?php if ($currentPage == 'contact-us.php') {
                echo 'strline';
              } ?> " href="contact-us.php">Contact Us</a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</nav>