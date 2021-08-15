<?php

    session_start();
    // $file_name = $_FILES['resume']['name'];
    // $file_size =$_FILES['resume']['size'];
    // $file_tmp =$_FILES['resume']['tmp_name'];
    // $file_type=$_FILES['resume']['type'];
    // $file_ext=strtolower(end(explode('.',$_FILES['resume']['name'])));
    
   // $extensions= array(".docx",".doc",".pdf");
    
    // if(in_array($file_ext,$extensions)=== false){
    //    $errors[]="extension not allowed, please choose a PDF or DOC file.";
    // }
    
    // if($file_size > 6097152){
    //    $errors[]='File size must be less than 6 MB';
    // }
    
    // if(empty($errors)==true){
    //    move_uploaded_file($file_tmp,"resume/".$file_name);
    //    echo "Success";
    // }else{
    //    print_r($errors);
    // }

    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $value)
        {
            $_SESSION['info'][$key] = $value;
        }
     
        $keys = array_keys($_SESSION['info']);
     
        if(in_array('next', $keys)){
            unset($_SESSION['info']['next']);
        }
     
        header("Location: includes/registerCandidate.php");
     } 

?>
<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/addCandidates1.css">
<!-- <link rel="stylesheet" href="../signup/recruiter/css/index.css"> -->
<title>Analysed</title>
<div class="container">
<div class="bread-crumbs_Mytools-recruiter">
        <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">My Database</a> > <a href="" class="active-breadcrumb-link">Add candidates</a> 
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Candidate</h1>
            <p class="mainParaDash">Please enter the details of the new candidates</p>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="addCandidates1.php" >Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="addCandidates2.php">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addCandidates3.php">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addCandidates4.php" class="active">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
            <div class="row-recruiter" style="margin-bottom: 30px;">
                <img src="./img/clipboard.svg" width="50px" style="margin-right: 30px;">
                    <h2 class="heading-for-general-information-right-side-add-client-container">Additional information</h2>
                </div>
                <form action="" method="post">
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-input-for-no.1">Candidates Comments*</label>
                                        <input type="text" name="candidateComment" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-input-for-no.1">Availability Date*</label>
                                        <input type="date" name="availability" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" required />
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs  fx-city-name-1"> 
                                        <label for="default-select-for-no.6">Job*</label>
                                            <select name="job" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Andhra Pradesh</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs  fx-city-name-1"> 
                                        <label for="default-select-for-no.6">Accessibility*</label>
                                            <select name="accessebility" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Andhra Pradesh</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs  fx-city-name-1"> 
                                        <label for="default-select-for-no.6">Response type*</label>
                                            <select name="reasonType" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Andhra Pradesh</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                </div>
                                <input type = "submit" name = "submit" class="save_button_addClient default-button-for-recruiter-dashboard" value="Submit" >
                        </div>
                        </form>
                    </div>
                </div>
    </div>
    </div>
</div>
