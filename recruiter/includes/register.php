<?php
    
    session_start();
   

    if(isset($_SESSION['info'])){
        extract($_SESSION['info']);

        $conn = mysqli_connect('localhost','root','','virtual_analysed');

        $sql = mysqli_query($conn,"INSERT INTO general_info (Company_Name,status,Company_URL,Ownership,Industry,Source,Parent_Company,Active_Contact,Company_Description,Permanent_Fee,Contact_Fee,Email,contactNumber,Address,cityName,Pincode,State,Country,bankName,bankId,bankAccountNumber,IBAN,VAT) VALUES ('$companyname','$status','$cURL','$ownership','$Industry','$source','$parentCompany','$activeContact','$company_Description','$Pfee','$Cfee','$mainemail','$Contact_number','$Address','$Cityname','$Zipcode','$State','$Country','$Bankname','$BankID','$Bankaccountnumber','$IBAN','$VAT')");

        if($sql){
            unset($_SESSION['info']);

            echo 'Data has been saved successfully!';

            echo '<a href="../addClient.php">Go back!</a>';


        }else{
            echo mysqli_error($conn);
        }
    }
   
?>
