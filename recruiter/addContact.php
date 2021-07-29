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
                <p class="links-for-add-client-low-side-row-for-add-client " id="link-categories-addContact-1"><a href="" class="active">Personal info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addContact-2"><a href="">Professional info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addContact-3"><a href="">Additional info</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="personal-information-addcontact-1">
                <h2 class="heading-for-general-information-right-side-add-client-container heading-addContact-1"><i class="fa fa-home" aria-hidden="true"></i> Personal information</h2>
                <div class="left-side-image-box-add-client-1">
                        <div class="sub-divs-image-box-right-side-add-client">
                            <input type="file" class="input-image-upload-ekam-1-add-client" id="input-image-upload-ekam-1-add-client" name="input-file-1">
                                <label class="label-for-image-upload-ekam-1client position-absolute-label-ekam-addclient" for="input-image-upload-ekam-1-add-client">
                                <h2 style="padding:20px 30px"><i class="fa fa-user" aria-hidden="true"></i></h2>
                                <p style="margin-left:80px;margin-top:-30px;"><i class="fa fa-camera" aria-hidden="true"></i></p>
                            </label>
                        </div>
                    </div>
                <div class="row-recruiter image-box-right-side-add-client">
                    <div class="right-side-image-box-right-add-client-1">
                        <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                            <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                <label for="default-input-for-no.1">First name *</label>
                                <input type="text" name="First name" class="default-input-for-add-client-1" placeholder="First name" id="default-input-for-no.1">
                            </p>
                            <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                <label for="default-input-for-no.1011">Last name *</label>
                                <input type="text" name="Last name" class="default-input-for-add-client-1" placeholder="Last name" id="default-input-for-no.1011">
                            </p>
                            <p class="input-para-add-client-ekam-1 right-side fx-city-name-1">
                                <label for="default-select-for-no1">Status *</label>
                                <select name="status" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                    <option value="0" default>Live</option>
                                    <option value="1">Open</option>
                                    <option value="2">Closed</option>
                                    <option value="3">Working</option>
                                </select>
                            </p>
                            </div>
                            <div class="row-recruiter inputs-for-add-client-below-image-box">
                                <p class="input-para-add-client-ekam-1">
                                    <label for="default-input-for-no.2">Middle name </label>
                                    <input type="text" name="Middle name" class="default-input-for-add-client-1" placeholder="Middle name" id="default-input-for-no.2">
                                </p>
                                <p class="input-para-add-client-ekam-1">
                                    <label for="default-input-for-no.2">Title * </label>
                                    <input type="text" name="Title" class="default-input-for-add-client-1" placeholder="Title" id="default-input-for-no.2">
                                </p>
                                <p class="input-para-add-client-ekam-1">
                                    <label for="default-input-for-no.2">Main Email * </label>
                                    <input type="email" name="Main Email" class="default-input-for-add-client-1" placeholder="Main email ID" id="default-input-for-no.2">
                                </p>
                                <p class="input-para-add-client-ekam-1">
                                    <label for="default-input-for-no.2">Contact number * </label>
                                    <input type="tel" maxlength="10" name="Contact number" class="default-input-for-add-client-1" placeholder="Contact number" id="default-input-for-no.2">
                                </p>
                                <div class="row-recruiter inputs-for-add-client-below-image-box" style="width:100%">    
                                    <p class="input-para-add-client-ekam-1"> 
                                            <label for="default-select-for-no.13">Address</label>
                                            <input id="default-select-for-no.13" name="Address" type="text" class="default-input-for-add-client-1" placeholder="Enter your address">
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name"> 
                                            <label for="default-select-for-no.13">City name</label>
                                            <input id="default-select-for-no.13" name="Cityname" type="text" class="default-input-for-add-client-1" placeholder="Enter your city name">
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-zipcode"> 
                                            <label for="default-select-for-no.13">Zipcode</label>
                                            <input id="default-select-for-no.13" name="Zipcode" type="text" class="default-input-for-add-client-1" placeholder="Enter zipcode of city">
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs"> 
                                        <label for="default-select-for-no.6">State</label>
                                            <select name="state" id="default-select-for-no.6" class="default-select-for-add-client-1">
                                                <option value="0" default>Andhra Pradesh</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs"> 
                                        <label for="default-select-for-no.6">Country</label>
                                            <select name="country" id="default-select-for-no.6" class="default-select-for-add-client-1">
                                                <option value="0" default>India</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  