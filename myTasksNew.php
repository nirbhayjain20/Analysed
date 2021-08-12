<?php
session_start();
include('db.php');
include ('header.php')?>

 <!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Let browser know website is optimized for mobile-->
<link rel="stylesheet" href="./css/myTasksNew.css">
<div class="container">
        <div class="small_container" >
            <div class="heading_dash">
                <h1 class="mainHeadingDash">My Tasks</h1>
            </div>
            <div class="input-task-name-container row-myTasksNew">
                <div class="input-div-myTasksNew">
                <label>Tasks name</label>
                    <select class="browser-default" id="task" onchange="filterMeals(),filtermeal(),filteringmeal()">
                         <option value="">Choose your option</option>
                           <?php
                           $records = mysqli_query($db,"SELECT DISTINCT task FROM tasklisting ");
                            while ($row = mysqli_fetch_array($records)){
                           echo "<option value=" . $row['task'] . ">" . $row['task'] . "</option>";
                            }
                            ?>
                    </select>
                    <button class="abs-button"><img src="./img/Icon ionic-ios-arrow-down.svg" alt=""></button>
                </div>
                <div class="input-div-myTasksNew">
                <label>Company</label>
                    <select class="browser-default" id="name" onchange="filterMeals(),filtermeal(),filteringmeal()">
                         <option value="">Choose your option</option>
                           <?php
                           $records = mysqli_query($db,"SELECT DISTINCT name FROM tasklisting ");
                            while ($row = mysqli_fetch_array($records)){
                           echo "<option value=" . $row['name'] . ">" . $row['name'] . "</option>";
                            }
                            ?>
                    </select>
                    <button class="abs-button"><img src="./img/Icon ionic-ios-arrow-down.svg" alt=""></button>
                </div>

                <div class="input-div-myTasksNew">
                <label>Job</label>
                     <select  class="browser-default" id="position" onchange="filterMeals(),filtermeal(),filteringmeal()">
                         <option value="">Choose your option</option>
                           <?php
                           $records = mysqli_query($db,"SELECT DISTINCT position FROM tasklisting ");
                            while ($row = mysqli_fetch_array($records)){
                           echo "<option value=" . $row['position'] . ">" . $row['position'] . "</option>";
                            }
                            ?>

                    </select>
                    <button class="abs-button"><img src="./img/Icon ionic-ios-arrow-down.svg" alt=""></button>
                </div>
                <div class="input-div-myTasksNew">
                <label for="Sortby">Location</label>
                      <select  class="browser-default" id="location" onchange="filterMeals(),filtermeal(),filteringmeal()">
                         <option value="">Choose your option</option>
                           <?php
                           $records = mysqli_query($db,"SELECT DISTINCT location FROM tasklisting ");
                            while ($row = mysqli_fetch_array($records)){
                           echo "<option value=" . $row['location'] . ">" . $row['location'] . "</option>";
                            }
                            ?>

                    </select>
                    <button class="abs-button"><img src="./img/Icon ionic-ios-arrow-down.svg" alt=""></button>
                </div>
            </div>


             <div class="tasks-headings-name-container row-myTasksNew upcoming">
                <div class="upcoming">
                    <div class="tasks-div-heading-child row-myTasksNew upcoming">
                        <p>Upcoming tasks</p>
                        <span><?php	$id = $db->query("SELECT * FROM tasklisting WHERE c_date BETWEEN CURDATE() AND CURDATE()+10");
                                        	echo $id->num_rows;?></span>
                    </div>

                    <div class="upcoming-tasks-container">
                    <div id="displayHere">
                        <?php
  if ($mealresult = mysqli_query($db,"SELECT * FROM tasklisting WHERE c_date BETWEEN CURDATE() AND CURDATE()+10;")) {
      while ($meal = mysqli_fetch_array($mealresult)) {
        $Unfilteredname = $meal['name'];
        $Unfilteredposition = $meal['position'];
        $Unfilteredtask = $meal['task'];
        $Unfilteredcompany_website = $meal['company_website'];
        $Unfilteredstatus = $meal['status'];
         $Unfilteredicon = $meal['icon'];
          $Unfilteredlocation = $meal['location'];

             ?>
                        <div class="card-upcoming-task-main-1">
                            <div class="name-and-image row-myTasksNew">

                                <img src="./img/<?php echo $Unfilteredicon;?>" style="width:45px;height:45px;">
                                <span class="name-and-website-myTasks">
                                    <p><?php echo $Unfilteredname;
                                     echo ("\t");
                                    echo $Unfilteredposition;?></p>

                                    <span><?php echo $Unfilteredcompany_website;?></span>

                                </span>
                            </div>
                            <div class="message-text-outline row-myTasksNew">
                                <img src="./img/message-text-outline.svg" alt="">
                                <span>Starts tomorrow</span>
                            </div>
                            <div class="row-myTasksNew progressbar-parent ">
                                <div class="progress-bar">
                                    <span style="width:   <?php echo $Unfilteredstatus;?>%;"></span>
                                </div>
                                <?php echo $Unfilteredstatus;?>
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
                         <?php
      }
    }  ?>
                            </div>
                </div></div>
         <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">
  function filterMeals(){
        var name = document.getElementById('name').value;
        var position = document.getElementById('position').value;
           var task = document.getElementById('task').value;
            var location = document.getElementById('location').value;

       $.post('config/filterMeals.php', {name1:name,position1:position,task1:task,location1:location}, function(data){
           $('#displayHere').html(data);
        });
  }

    $(document).ready(function(){
        $("#select-box").on('change',function(){
            var value = $(this).val();
            multiCheckKey = true;

            ajaxFilter('select-box.php', value, multiCheckKey);
        });
    });
</script>

                <div class="upcoming">
                    <div class="tasks-div-heading-child row-myTasksNew active">
                        <p>Active tasks</p>
                        <span><?php	$id = $db->query("SELECT * FROM tasklisting WHERE c_date=CURDATE()");
                                        	echo $id->num_rows;?></span></div>
                         <div class="upcoming-tasks-container">
                    <div id="displayhere">
                        <?php
  if ($mealresult = mysqli_query($db,"SELECT * FROM tasklisting WHERE c_date=CURDATE()")) {
      while ($meal = mysqli_fetch_array($mealresult)) {
        $Unfilteredname = $meal['name'];
        $Unfilteredposition = $meal['position'];
        $Unfilteredtask = $meal['task'];
        $Unfilteredcompany_website = $meal['company_website'];
        $Unfilteredstatus = $meal['status'];
          $Unfilteredicon = $meal['icon'];
           $Unfilteredlocation = $meal['location'];

             ?>
                        <div class="card-upcoming-task-main-1">
                            <div class="name-and-image row-myTasksNew">

                                <img src="./img/<?php echo $Unfilteredicon;?>" style="width:45px;height:45px;">
                                <span class="name-and-website-myTasks">
                                    <p><?php echo $Unfilteredname;
                                     echo ("\t");
                                    echo $Unfilteredposition;?></p>

                                    <span><?php echo $Unfilteredcompany_website;?></span>
                                </span>
                            </div>
                            <div class="message-text-outline row-myTasksNew">
                                <img src="./img/message-text-outline.svg" alt="">
                                <span>Ends Today</span>
                            </div>
                            <div class="row-myTasksNew progressbar-parent ">
                                <div class="progress-bar">
                                    <span style="width:   <?php echo $Unfilteredstatus;?>%;"></span>
                                </div>
                                <?php echo $Unfilteredstatus;?>
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
                         <?php
      }
    }  ?>
                            </div>
                </div>
                </div>
                         <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">
  function filtermeal(){
        var name = document.getElementById('name').value;
        var position = document.getElementById('position').value;
            var task = document.getElementById('task').value;
       var location = document.getElementById('location').value;

       $.post('config/filtermeal.php', {name1:name,position1:position,task1:task,location1:location}, function(data){
           $('#displayhere').html(data);
        });
  }
</script>

                <div class="upcoming">
                    <div class="tasks-div-heading-child row-myTasksNew completed">
                        <p>Completed tasks</p>
                        <span><?php	$id = $db->query("SELECT * FROM tasklisting WHERE c_date BETWEEN CURDATE()-10 AND CURDATE()");
                                        	echo $id->num_rows;?></span></div>
                          <div class="upcoming-tasks-container">
                        <div id="displayhere1">
                        <?php
  if ($mealresult = mysqli_query($db,"SELECT * FROM tasklisting WHERE c_date BETWEEN CURDATE()-10 AND CURDATE();")) {
      while ($meal = mysqli_fetch_array($mealresult)) {
        $Unfilteredname = $meal['name'];
        $Unfilteredposition = $meal['position'];
        $Unfilteredtask = $meal['task'];
        $Unfilteredcompany_website = $meal['company_website'];
        $Unfilteredstatus = $meal['status'];
          $Unfilteredicon = $meal['icon'];
           $Unfilteredlocation = $meal['location'];

             ?>
                        <div class="card-upcoming-task-main-1">
                            <div class="name-and-image row-myTasksNew">

                                <img src="./img/<?php echo $Unfilteredicon;?>" style="width:45px;height:45px;">
                                <span class="name-and-website-myTasks">
                                    <p><?php echo $Unfilteredname;
                                     echo ("\t");
                                    echo $Unfilteredposition;?></p>

                                    <span><?php echo $Unfilteredcompany_website;?></span>
                                </span>
                            </div>
                            <div class="message-text-outline row-myTasksNew">
                                <img src="./img/message-text-outline.svg" alt="">
                                <span>Completed Yesterday</span>
                            </div>
                            <div class="row-myTasksNew progressbar-parent ">
                                <div class="progress-bar">
                                    <span style="width:   <?php echo $Unfilteredstatus;?>%;"></span>
                                </div>
                                <?php echo $Unfilteredstatus;?>
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
                         <?php
      }
    }  ?>
                            </div>
                </div>
                </div>
                         <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">
  function filteringmeal(){
        var name = document.getElementById('name').value;
        var position = document.getElementById('position').value;
         var task = document.getElementById('task').value;
       var location = document.getElementById('location').value;

       $.post('config/filteringmeal.php', {name1:name,position1:position,task1:task,location1:location}, function(data){
           $('#displayhere1').html(data);
        });
  }
</script>
                    </div>
                </div>
            </div>
        </div>
</div>
