
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

<?php include('../navMenu.php')?>
        <div class="row-signup hero-section-justify-content max-width-row">
            <div class="left-side-flex-container-signup">
                <p class="signup-heading-signup-recruiter">
                    Sign up
                </p>
                <p class="progress-bar-signup"><span></span></p>
                <p class="personal-details-heading">Personal details</p>
                <form action="#">
                    <div class="row-signup input-section-row">
                        <div class="input-signup-div">
                            <label for="input-first-name">First name</label>
                            <input type="text" name="First name" placeholder="First name" id="input-first-name">
                        </div>
                        <div class="input-signup-div">
                            <label for="input-first-name">Last name</label>
                            <input type="text" name="Last name" placeholder="Last name" id="input-first-name">
                        </div>
                        <div class="input-signup-div">
                            <label for="input-first-name">Email address</label>
                            <input type="email" name="Email address" placeholder="Email address" id="input-first-name">
                        </div>
                        <div class="input-signup-div">
                            <label for="input-first-name">Phone number</label>
                            <div class="phn-number-div row-signup"  style="flex-wrap: nowrap;"><select><option>+91</option></select><input type="tel" maxlength='10' name="Phone number" placeholder="Phone number" id="input-first-name" class="phn-number--input-signup"></div>
                        </div>
                        <div class="input-signup-div">
                            <label for="input-first-name">Password</label>
                            <input type="password" name="Password" placeholder="Password" id="input-first-name">
                        </div>
                        <div class="input-signup-div">
                            <label for="input-first-name">Confirm Password</label>
                            <input type="password" name="Confirm Password" placeholder="Confirm Password" id="input-first-name">
                        </div>
                        <div class="input-signup-div address">
                            <label for="input-first-name">Address</label>
                            <input type="text" name="Address" placeholder="Address" id="input-first-name">
                        </div>
                    </div>
                    <button type="submit" class="submit-signup-button"><img src="../images/Next.svg"></button>
                </form>
            </div>
            <div class="right-side-flex-container-signup">
                <img src="../images/recruiter.svg" alt="">
            </div>
        </div>
        
    </div>
</div>