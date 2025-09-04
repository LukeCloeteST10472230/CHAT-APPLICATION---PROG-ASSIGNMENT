<?php include_once "header.php"; ?>
<body>
 <div class="wrapper">
        <section class="form signup">
            <header>CHATAPP BULLISH APPLICATION</header>
            <div class="error-text"></div>
            
            <form action="#" enctype="multipart/form-data" id="signupForm">
                <div class="field input">
                    <label>Username</label>
                    <input type="text" name="fname" placeholder="Must contain _ and be ≤5 characters" required>
                    <div class="validation-error" id="usernameError"></div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <div class="validation-error" id="usernameError"></div>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" id="password" placeholder="Min 8 chars, with A-Z, 0-9, and special char" required>
                    <i class="fas fa-eye"></i>
                    <div class="validation-error" id="passwordError"></div>
                </div>
                <div class="field input">
                    <label>Contact number</label>
                    <input type="tel" name="lname" placeholder="Enter your phone number" required>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" accept="image/*" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Submit to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login</a></div>
        </section>
    </div>

<script src="Javascript/pass-show-hide.js"></script>
<script src="Javascript/validation.js"></script>
<script src="Javascript/signup.js"></script>
    
</body>
</html>