<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
            <?php
            include_once "php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
            ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['img'] ?>" alt="">
                    <div class="details">
                        <span><?php echo $row ['fname'] . " " . $row ['email']?></span>
                        <p><?php echo $row ['status'] ?></p>

                    </div>
                </div>
                <a href="login.php" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select a user to chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="images/President_of_South_Africa_Cyril_Ramaphosa_(3x4_cropped).jpg" alt="Cyril Ramaphosa">
                        <div class="details">
                            <span>Cyril Ramaphosa</span>
                            <p>Its me cupcake</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="images/diddler.jpg" alt="Diddy">
                        <div class="details">
                            <span>Diddy</span>
                            <p>I'm ready to oil you up</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="images/island guy.jpg" alt="Jeffery">
                        <div class="details">
                            <span>Jeffery</span>
                            <p>Do you wanna visit my island?</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>

<script src="Javascript/user.js"></script>

</body>
</html>