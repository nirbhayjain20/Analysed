<?php
 include('db.php');

if ($_POST) {
	$name = $_POST['name1'];
	$position = $_POST['position1'];
    $task = $_POST['task1'];
     $location = $_POST['location1'];
	
 if ($name=='' && $position=='' && $task=='' && $location=='') {
 		$queryMeal = "SELECT * FROM tasklisting WHERE c_date BETWEEN CURDATE()-10 AND CURDATE();";
 	}else{

 		if ($name!='') {
 			$nameSearch="`name` LIKE '$name' ";
 		}else {
 			$nameSearch = "`name` !='NULL'";
 		}

 		if ($position!='') {
 			$positionSearch="`position` LIKE '$position' ";
 		}else {
 			$positionSearch = "`position` !='NULL'";
 		}
          if ($task!='') {
 			$taskSearch="`task` LIKE '$task' ";
 		}else {
 			$taskSearch = "`task` !='NULL'";
 		}
        if ($location!='') {
 			$locationSearch="`location` LIKE '$location' ";
 		}else {
 			$locationSearch = "`location` !='NULL'";
 		}

 		$queryMeal = "SELECT * FROM tasklisting WHERE $nameSearch AND $positionSearch AND $taskSearch AND $locationSearch AND c_date BETWEEN CURDATE()-10 AND CURDATE()";
 	}

 	if ($result = mysqli_query($db, $queryMeal)) {
 			while ($meal = mysqli_fetch_array($result)) {
 				$filteredname = $meal['name'];
 				$filteredposition = $meal['position'];
                  $filteredtask = $meal['task'];
 				$filteredcompany_website = $meal['company_website'];
 				$filteredstatus = $meal['status'];
                 $filteredicon = $meal['icon'];
 			 $filteredlocation = $meal['location'];
 			

             ?>
				

                        <div class="card-upcoming-task-main-1">
                            <div class="name-and-image row-myTasksNew">
                                <img src="./img/<?php echo $filteredicon;?>" alt="" style="width:45px;height:45px;">
                                <span class="name-and-website-myTasks">
                                    <p><?php echo $filteredname;
                                     echo ("\t");
                                    echo $filteredposition;?></p>

                                    <span><?php echo $filteredcompany_website;?></span>
                                </span>
                            </div>
                            <div class="message-text-outline row-myTasksNew">
                                <img src="./img/message-text-outline.svg" alt="">
                                <span>Starts in 5 Days</span>
                            </div>
                            <div class="row-myTasksNew progressbar-parent ">
                                <div class="progress-bar">
                                    <span style="width:<?php echo $filteredstatus;?>%;"></span>
                                </div>
                                <?php echo $filteredstatus;?>
                            </div>
                            <div class="row-myTasksNew imagesfocard-1">
                                <div class="images-bottom">
                                    <img src="./img/Profile1.png" alt="">
                                    <img src="./img/Profile3.png" alt="">
                                    <img src="./img/Profile4.png" alt="">
                                    <img src="./img/Profile2.png" alt="">
                                    <img src="./img/Profile3.png" alt="">
                                </div>
                                <span class="new-tasks-bottom-one">5+</span>
                            </div>
                        </div>
                        
                            </div>
                </div>
                </div>
                 <?php
      }
    }
  }  ?>
