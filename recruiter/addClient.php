<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<title>Analysed</title>
<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="/">Dashboard</a> > <a href="">My Database</a> > <a href="">Add client</a> 
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Client</h1>
            <p class="mainParaDash">Fill in the details to create a new client.</p>
        </div>
        <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button>
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="" class="active">General info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="">Contact info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="">Billing info</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
                <h2 class="heading-for-general-information-right-side-add-client-container"><i class="fa fa-pencil" aria-hidden="true"></i> General information</h2>
                <div class="row-recruiter image-box-right-side-add-client">
                    <div class="left-side-image-box-add-client-1">
                        <div class="sub-divs-image-box-right-side-add-client">
                            <input type="file" name="image-file" class="input-image-upload-ekam-1-add-client" id="input-image-upload-ekam-1-add-client">
                            <label class="label-for-image-upload-ekam-1client" for="input-image-upload-ekam-1-add-client">
                                <h2><i class="fa fa-building" aria-hidden="true"></i></h2>
                                <p><i class="fa fa-camera" aria-hidden="true"></i></p>
                            </label>
                        </div>
                    </div>
                    <div class="right-side-image-box-right-add-client-1">
                        <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                            <p class="input-para-add-client-ekam-1">
                                <label for="default-input-for-no.1">Company name *</label>
                                <input type="text" name="companyname" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1">
                            </p>
                            <p class="input-para-add-client-ekam-1 right-side">
                            <label for="default-select-for-no1">Status *</label>
                            <select name="status" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                <option value="0" default>Select Status</option>
                                <option value="1">Open</option>
                                <option value="2">Closed</option>
                                <option value="3">Working</option>
                            </select>
                            </p>
                        </div>
                        <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                            <p class="input-para-add-client-ekam-1">
                                <label for="default-input-for-no.2">Company URL *</label>
                                <input type="text" name="cURL" class="default-input-for-add-client-1" placeholder="Company URL" id="default-input-for-no.2">
                            </p>
                            <p  class="input-para-add-client-ekam-1 right-side">
                            <label for="default-select-for-no.2">Ownership</label>
                            <select name="ownership" id="default-select-for-no.2" class="default-select-for-add-client-1">
                                <option value="0" default>Select Ownership</option>
                                <option value="1">Open</option>
                                <option value="2">Closed</option>
                                <option value="3">Working</option>
                            </select>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <p class="select-for-select-image-box-below-inputs"> 
                        <label for="default-select-for-no.3">Industry</label>
                            <select name="Industry" id="default-select-for-no.3" class="default-select-for-add-client-1">
                                <option value="0" default>Temporary to permanent</option>
                                <option value="1">Open</option>
                                <option value="2">Closed</option>
                                <option value="3">Working</option>
                            </select>
                    </p>
                    <p class="select-for-select-image-box-below-inputs"> 
                        <label for="default-select-for-no.4">Source</label>
                            <select name="Source" id="default-select-for-no.4" class="default-select-for-add-client-1">
                                <option value="0" default>Select your source</option>
                                <option value="1">Open</option>
                                <option value="2">Closed</option>
                                <option value="3">Working</option>
                            </select>
                    </p>
                    <p class="select-for-select-image-box-below-inputs"> 
                        <label for="default-select-for-no.5">Parent Company</label>
                            <select name="Parent Company" id="default-select-for-no.5" class="default-select-for-add-client-1">
                                <option value="0" default>Select a parent company</option>
                                <option value="1">Open</option>
                                <option value="2">Closed</option>
                                <option value="3">Working</option>
                            </select>
                    </p>
                    <p class="select-for-select-image-box-below-inputs"> 
                        <label for="default-select-for-no.6">Active contact</label>
                            <select name="Active contact" id="default-select-for-no.6" class="default-select-for-add-client-1">
                                <option value="0" default>Select active contact if available</option>
                                <option value="1">Open</option>
                                <option value="2">Closed</option>
                                <option value="3">Working</option>
                            </select>
                    </p>
                    <p class="textarea-div-default-select-no7"> 
                        <label for="default-select-for-no.7">Add company's description</label>
                            <textarea name="company Description" id="default-select-for-no.7" class="text-area-for-company-description-add-client" placeholder="Company description">
                            </textarea>
                    </p>
                    <p class="input-para-add-client-ekam-1"> 
                        <label for="default-select-for-no.9">Permanent fee</label>
                            <input id="default-select-for-no.9" name="Pfee" class="default-input-for-add-client-1"placeholder="Enter value in %">
                    </p>
                    <p class="input-para-add-client-ekam-1"> 
                        <label for="default-select-for-no.10">Contract fee</label>
                        <input id="default-select-for-no.10" name="Cfee" class="default-input-for-add-client-1" placeholder="Enter value in %">
                    </p>
                    </div>
            </div>
        </div>
    </div>
    </div>
</div>
