<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<title>Analysed</title>
<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="/">Dashboard</a> > <a href="">My Database</a> > <a href="">Add Contact</a> 
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Contact</h1>
            <p class="mainParaDash">Fill in the details to create a new client.</p>
        </div>
        <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button>
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addContact-1"><a href="#" >Personal info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addContact-2"><a href="#" class="active">Professional info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addContact-3"><a href="#">Additional info</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="professional-information-addcontact-1">
                <h2 class="heading-for-general-information-right-side-add-client-container  heading-addContact-2"><i class="fa fa-user" aria-hidden="true"></i> Professional information</h2>
                <div class="row-recruiter image-box-right-side-add-client">
                    <div class="right-side-image-box-right-add-client-1">
                        <div class="row-recruiter inputs-for-add-client-below-image-box">
                            <p class="input-para-add-client-ekam-1" >
                                <label for="default-input-for-no.1">Current title </label>
                                <input type="text" name="cTitle" class="default-input-for-add-client-1" placeholder="Enter current job title of candidate" id="default-input-for-no.1">
                            </p>
                            <p class="input-para-add-client-ekam-1" >
                                <label for="default-input-for-no.1011">Company name</label>
                                <input type="text" name="cname"class="default-input-for-add-client-1" placeholder="Candidate currently employed in?" id="default-input-for-no.1011">
                            </p>
                            </div>
                            <div class="row-recruiter inputs-for-add-client-below-image-box">
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Contact type *</label>
                                    <select name="contacttype" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Client</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Division*</label>
                                    <select name="division" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Other</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Source *</label>
                                    <select name="source" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Select your source (Ex. LinkedIn)</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Reports to *</label>
                                    <select name="reports to" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Select a recruiter</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Industry *</label>
                                    <select name="industry" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Select Industry</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-input-for-no.2">Required skills </label>
                                        <input name="reqSkills" type="text" class="default-input-for-add-client-1" placeholder="Enter Required skills" id="default-input-for-no.2">
                                    </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>