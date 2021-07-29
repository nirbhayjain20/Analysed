
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
                    <p class="personal-details-heading">Career details</p>
                    <form action="#">
                        <div class="row-signup input-section-row">
                        <div class="input-signup-div industry">
                                <label for="industry-selection-1">Qualification</label>
                                <select id="industry-selection-1">
                                    <option>Select Qualification</option>
                                </select>
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Year of passing</label>
                                <select id="industry-selection-1">
                                    <option>Select Year of passing</option>
                                </select>
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Institute</label>
                                <select id="industry-selection-1">
                                    <option>Select Institute</option>
                                </select>
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Education type</label>
                                <select id="industry-selection-1">
                                    <option>Select Education type</option>
                                </select>
                            </div>
                            <div class="input-signup-div ">
                                <label for="input-first-name">Skills</label>
                                <input type="text" name="Skills" placeholder="Skills" id="input-first-name">
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Industry <span style="color:#979797;font-size:14px">(you want to work in)</span></label>
                                <select id="industry-selection-1">
                                    <option>Select Education type</option>
                                </select>
                            </div>
                            <div class="input-signup-div industry">
                                <label for="industry-selection-1">Experience</label>
                                <select id="industry-selection-1">
                                    <option>Select Experience</option>
                                </select>
                            </div>
                            <div class="input-signup-div">
                                <label for="file-upload">Upload resume <span>6 MB max</span></label>
                                <label for="file-upload"><span class="span-class-file-upload">(*.docx, *.rtf, *.txt, *.pdf) <i class="fa fa-upload" aria-hidden="true"></i></span></label>
                               <input type="file" name="" id="file-upload" placeholder="docx" style="display:none;">
                            </div>

                        </div>
                        <button type="submit" class="submit-signup-button"><img src="../images/Next.svg"></button>
                    </form>
                </div>
                <div class="right-side-flex-container-signup">
                    <img src="../images/js.svg" alt="">
                </div>
            </div>
</div>