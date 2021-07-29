<title>Dashboard</title>
    <link rel="stylesheet" href="./css/DashboardJobs.css">
    <link rel="stylesheet" href="./css/appliedCandidates.css">
    <link rel="stylesheet" href="./css/interviewDone.css">
    <link rel="stylesheet" href="./css/shortlistedJobs.css">
  <body>
    <?php include('header.php') ?>
    <div class="container">

      <div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="active-breadcrumb-link">Applied Candidates</a> 
        </div>
        <div class="row-flex-jobs-j alignitemsstart-shortlisted Dashboard-main-container-jobs">
            <div class="left-side-container-DashboardJ">
                <h2 class="jobsCreateaDashboard-jobs">Interviews Done <span>(250)</span></h2>
                <div class="cards-section-container row-flex-jobs-j">
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs reviewed">Active</p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate">Java developer</p>
                                <p class="applied-in-iD">Applied in 2 companies</p>
                                <div class="row-flex-jobj">

                                    <p class="jobStatus-interviewDone notactive"><span></span> GlassDoor</p>
                                    <p class="jobStatus-interviewDone active"><span></span> BuzzLine</p>
                                </div>
                                <div class="upcomingInterviews-p">
                                    <p>Upcoming Interviews</p>
                                    <p>On 23 May, 2020 at 1:00 PM</p>
                                </div>
                                <a href="" class="resumepdfDownload row-flex-jobj"><img src="./img/File.svg" style="margin-right: 10px;width:20px">Resume/Jane.pdf</a>
                                <div class="seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                </div>
                            </a>
                    </div>
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied">
                            <a href="">
                                <p class="candidate-status-jobs reviewed">Active</p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate">Java developer</p>
                                <p class="applied-in-iD">Applied in 2 companies</p>
                                <div class="row-flex-jobj">

                                    <p class="jobStatus-interviewDone notactive"><span></span> GlassDoor</p>
                                    <p class="jobStatus-interviewDone active"><span></span> BuzzLine</p>
                                </div>
                                <div class="upcomingInterviews-p">
                                    <p>Upcoming Interviews</p>
                                    <p>On 23 May, 2020 at 1:00 PM</p>
                                </div>
                                <a href="" class="resumepdfDownload row-flex-jobj"><img src="./img/File.svg" style="margin-right: 10px;width:20px">Resume/Jane.pdf</a>
                                <div class="seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                </div>
                            </a>
                    </div>
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied completedInterviewDone">
                            <a href="">
                                <p class="candidate-status-jobs Completed">Completed</p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate">Java developer</p>
                                <p class="applied-in-iD">Applied in 2 companies</p>
                                <div class="row-flex-jobj">

                                    <p class="jobStatus-interviewDone notactive"><span></span> GlassDoor</p>
                                    <p class="jobStatus-interviewDone active"><span></span> BuzzLine</p>
                                </div>
                                <div class="upcomingInterviews-p">
                                    <p>Interview</p>
                                    <p>Completed <img src="./img/Path 2211.svg"></p>
                                </div>
                                <a href="" class="resumepdfDownload row-flex-jobj"><img src="./img/File.svg" style="margin-right: 10px;width:20px">Resume/Jane.pdf</a>
                                <div class="seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                </div>
                            </a>
                    </div>
                    <div class="single-container-cards-DasboardJobs candidatesjobs-applied completedInterviewDone">
                            <a href="">
                                <p class="candidate-status-jobs unfinished">Unfinished</p>
                                <img src="./img/Ellipse 148-1.png" alt="">
                                <h3 class="job-headingnname">Jane Williams</h3>
                                <p class="skill-job-candiate">Java developer</p>
                                <p class="applied-in-iD">Applied in 2 companies</p>
                                <div class="row-flex-jobj">

                                    <p class="jobStatus-interviewDone notactive"><span></span> GlassDoor</p>
                                    <p class="jobStatus-interviewDone active"><span></span> BuzzLine</p>
                                </div>
                                <div class="upcomingInterviews-p">
                                    <p>Interview</p>
                                    <p>Completed <img src="./img/Path 2211.svg"></p>
                                </div>
                                <a href="" class="resumepdfDownload row-flex-jobj"><img src="./img/File.svg" style="margin-right: 10px;width:20px">Resume/Jane.pdf</a>
                                <div class="seemorebutton-social">
                                    <a href="index.php" class="seemoreButton">See more</a>
                                </div>
                            </a>
                    </div>
                </div>
            </div>
            <div class="right-side-container-DashboardJ">
                <div class="row-flex-jobj justifycontent-flex-end">
                    <p class="sortbyText">Sort By :</p>
                    <select class="sortbySelect">
                        <option value="0">Recent</option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <h2 class="filter-heading">Filter</h2>
                <div class="category-main-first">
                    
                        <label for="jobtitle" class="label-applied-candidates">Job Title</label>
                        <input type="text" id="jobtitle" placeholder="Job Title" class="input-applied-candidates">
                    
                </div>
                <div class="category-main-first">
                    
                        <label for="CompanyName" class="label-applied-candidates">Company Name</label>
                        <input type="text" id="CompanyName" placeholder="Company Name" class="input-applied-candidates">
                    
                </div>
                <div class="category-main-first">
                    <p class="row-flex-jobs-j">
                        <span class="heading-filter-dj" id="filterHeading3">Type of Interviews</span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>

                    </p>
                    <div class="category-filters" id="categoryDiv3">
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Active</label>
                            </span>
                            <p>24</p>
                        </div>
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Completed</label>
                            </span>
                            <p>24</p>
                        </div>
                        <div class="row-flex-jobs-j">
                            <span>
                                <input type="checkbox" id="type">
                                <label for="type">Unfinished</label>
                            </span>
                            <p>24</p>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
<script>
    const filterHeading3 = document.querySelector('#filterHeading3');

    const categoryDiv3 = document.querySelector('#categoryDiv3');

    
    filterHeading3.addEventListener('click',()=>{
        categoryDiv3.classList.toggle('active')
    })


</script>