<?php
    
    session_start();
   

    if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','virtual_analysed');

        $sql = mysqli_query($conn,"INSERT INTO recruitment  VALUES ('$Position','$Industry','$Jobtype','$Nameoftheclientcompany','$Contactatclientcompany','$BusinessDevelopmentManager','$Status','$Priority','$Jobreferencenumber','$Designation','$Recruitersname','$Numberofopenings','$Sdate','$EndDate','$Joblocation1','$Joblocation2','$Joblocation3','$Startingtime','$Endingtime','$Clientmargin','$Contactinformationfortheadvert','$Contact','$skills','$Qualifications','$Eligibilitycriteria','$Experiencerequirement','$Relevantexperience','$Irrelevantexperience','$Rolesandresponsibilities','$Growthoppurtunities','$Learningoppurtunities','$Employeeendorsements','$Employeebenefits','$Reputationoforganisation','$Jobdescriptionfortheadvert','$Transportation','$PackagetypeCurr','$Packagetype','$Package','$Billrate','$Markup','$Clientmargin','$Dayson','$Daysoff','$Shiftpattern')");

        if($sql){
            unset($_SESSION['info']);

            echo 'Data has been saved successfully!';

            echo '<a href="../createRecruitement.php">Go back!</a>';


        }else{
            echo mysqli_error($conn);
        }
    }
   
?>
