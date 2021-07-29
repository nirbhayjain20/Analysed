
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

<?php include('../navMenu.php')?>

            <div class="row-signup hero-section-justify-content max-width-row">
                <div class="left-side-flex-container-signup">
                    <p class="signup-heading-signup-recruiter">
                        Sign up
                    </p>
                    <p class="progress-bar-signup"><span style="width:100%;"></span></p>
                    <p class="personal-details-heading">Company details</p>
                    <form action="#">
                        <div class="row-signup input-section-row">
                            <div class="input-signup-div">
                                <label for="input-first-name">Company Details</label>
                                <input type="text" name="Company Details" placeholder="Company Details" id="input-first-name">
                            </div>
                            <div class="input-signup-div">
                                <label for="input-first-name">Designation</label>
                                <input type="text" name="Designation" placeholder="Designation" id="input-first-name">
                            </div>
                            <div class="input-signup-div">
                                <label for="input-first-name">Official Email ID</label>
                                <input type="email" name="Official Email ID" placeholder="Official Email ID" id="input-first-name">
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Industry</label>
                                <select id="industry-selection-1">
                                    <option>Select Industry</option>
                                </select>
                            </div>
                            <div class="input-signup-div address">
                                <label for="input-first-name">Address</label>
                                <input type="text" name="Address" placeholder="Address" id="input-first-name">
                            </div>
                            <div class="input-signup-div row-signup">
                                <input type="checkbox" name="consultant" id="consultant-checkbox" style="width:auto!important;margin-bottom:0px">
                                <label for="consultant-checkbox" style="display:inline-block;margin-bottom:0px">&nbsp;&nbsp;&nbsp;Are you a consultant?</label>
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