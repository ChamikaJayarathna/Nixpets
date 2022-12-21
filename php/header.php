<header class="header">

    <div class="flex">
        <a href="#" class="logo">NIXPETS</a>

        <nav class="navbar">
            <a href="dogAdminPage.php">add products</a>
            <a href="dogProducts.php">view products</a>
        </nav>

        <?php
        
        $select_row = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
        $row_count = mysqli_num_rows($select_row);

        ?>

        <a href="cart.php" class="cart">cart <span><?php echo $row_count;?></span></a>


        <div id="menu-btn" class="fas fa-bars"></div>

    </div>


</header>