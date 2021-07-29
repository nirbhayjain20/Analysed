
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

<?php include('../navMenu.php')?>
        <div class="row-signup hero-section-justify-content max-width-row">
            <div class="left-side-flex-container-signup">
                <a href="#" class="back-to-sign-in-link">Back to Sign in</a>
                <p class="personal-details-heading">Reset password</p>
                <p class="light-grey-para-forgot-p">Please choose your new password</p>
                <form action="#">
                    <div class="row-signup input-section-row">
                        <div class="input-signup-div">
                            <label for="Password">Password</label>
                            <input type="Password" name="Password" placeholder="Password" id="Password">
                        </div>
                        <div class="input-signup-div">
                            <label for="ConfirmPassword">Confirm Password</label>
                            <input type="Password" name="ConfirmPassword" placeholder="Confirm Password" id="ConfirmPassword">
                        </div>
                    </div>
                    <button type="submit" class="submit-signup-button"><img src="../images/Next.svg"></button>
                </form>
            </div>
            <div class="right-side-flex-container-signup">
                <img src="../images/fp.svg" alt="">
            </div>
        </div>
</div>