<?php include('recruiter_header.php')?>
<link rel="stylesheet" href="./css/dashboard.css">
<link rel="stylesheet" href="./css/circle.css">
<div class="floating-divand-button-dashboard-recruiter">
    <ul class="floating-div-ul-dashboard-recruiter">
        <li><a href="#">Add Client</a></li>
        <li><a href="#">Add Contact</a></li>
        <li><a href="#">Candidate</a></li>
        <li><a href="#">Schedule Interview</a></li>
        <li><a href="#">Create Job</a></li>
        <li><a href="#">Create Task</a></li>
    </ul>
    <button class="floating-button-bottom-left-recruiter-db"><i class="fa fa-plus" aria-hidden="true"></i></button>
</div>
<div class="small_container-1">
            <div class="heading_dash">
                <h1 class="mainHeadingDash">Quick access</h1>
                <p class="mainParaDash">Navigate with ease to essential pages</p>
            </div>
            <div class="row-recruiter quickaccess-links-container">
                <a href="#" class="quickaccess-links-recruiter">My Schedule <i class="fa fa-calendar-check-o" aria-hidden="true"></i></a>
                <a href="#" class="quickaccess-links-recruiter">My Mails <i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                <a href="#" class="quickaccess-links-recruiter">My Files <i class="fa fa-file-code-o" aria-hidden="true"></i></a>
                <a href="#" class="quickaccess-links-recruiter">My Tasks <i class="fa fa-check" aria-hidden="true"></i></a>
            </div>
            <div class="main-dashboard-container-recruiter">
                <div class="heading_dash">
                    <h1 class="mainHeadingDash">Dashboard</h1>
                    <p class="mainParaDash">Welcome back John Doe!</p>
                </div>
                <section class="cards_recruiter-items row-recruiter">
                    <div class="cardItemDash_recruiter">
                        <section class="numberSection">
                            <p class="cardItemDash_recruiterheadingCards">Jobs Created</p>
                            <h3 class="cardItemDash_recruiternumberCards">140</h3>
                            </section>
                            <div class="c100 p25" style="background-color: #EC45512E;">
                            <span style="color: #EC4551!important;">+4%</span>
                            <div class="slice" >
                                <div class="bar" style="border-color: #EC4551!important;"></div>
                                <div class="fill" style="border-color: #EC4551!important;"></div>
                            </div>
                            </div>
                    </div>
                    <div class="cardItemDash_recruiter">
                        <section class="numberSection">
                            <p class="cardItemDash_recruiterheadingCards">Applied candidattes</p>
                            <h3 class="cardItemDash_recruiternumberCards">250</h3>
                            </section>
                            <div class="c100 p65" style="background-color: #FFC73C40;">
                            <span style="color: #FDCA3B!important;">+5%</span>
                            <div class="slice" >
                                <div class="bar" style="border-color: #FDCA3B!important;"></div>
                                <div class="fill" style="border-color: #FDCA3B!important;"></div>
                            </div>
                            </div>
                    </div>
                    <div class="cardItemDash_recruiter">
                        <section class="numberSection">
                            <p class="cardItemDash_recruiterheadingCards">Interviews done</p>
                            <h3 class="cardItemDash_recruiternumberCards">310</h3>
                            </section>
                            <div class="c100 p29" style="background-color: #E0FADC;">
                            <span style="color: #0F9D58!important;">+14%</span>
                            <div class="slice" >
                                <div class="bar" style="border-color: #0F9D58!important;"></div>
                                <div class="fill" style="border-color: #0F9D58!important;"></div>
                            </div>
                            </div>
                    </div>
                    <div class="cardItemDash_recruiter">
                        <section class="numberSection">
                            <p class="cardItemDash_recruiterheadingCards">Hired candidates</p>
                            <h3 class="cardItemDash_recruiternumberCards">321</h3>
                            </section>
                            <div class="c100 p29" style="background-color: #D3EEFF;">
                            <span style="color: #3598DB!important;">+14%</span>
                            <div class="slice" >
                                <div class="bar" style="border-color: #3598DB!important;"></div>
                                <div class="fill" style="border-color: #3598DB!important;"></div>
                            </div>
                            </div>
                    </div>
                    <div class="cardItemDash_recruiter">
                        <section class="numberSection">
                            <p class="cardItemDash_recruiterheadingCards">Tasks Created</p>
                            <h3 class="cardItemDash_recruiternumberCards">437</h3>
                            </section>
                            <div class="c100 p29" style="background-color: #8C60EB4F;">
                            <span style="color:#8C60EB!important;">+14%</span>
                            <div class="slice" >
                                <div class="bar" style="border-color: #8C60EB!important;"></div>
                                <div class="fill" style="border-color: #8C60EB!important;"></div>
                            </div>
                            </div>
                    </div>
                    <div class="cardItemDash_recruiter">
                        <section class="numberSection">
                            <p class="cardItemDash_recruiterheadingCards">Other stat</p>
                            <h3 class="cardItemDash_recruiternumberCards">427</h3>
                            </section>
                            <div class="c100 p29" style="background-color: #E84BC42B;">
                            <span style="color: #E84BC4!important;">+14%</span>
                            <div class="slice" >
                                <div class="bar" style="border-color: #E84BC4!important;"></div>
                                <div class="fill" style="border-color: #E84BC4!important;"></div>
                            </div>
                            </div>
                    </div>
                </section>
                <section class="active-jobs_recruiter row-recruiter">
                    <div class="chart-div_active-jobs_recruiter">
                        <span class="row-recruiter chart-span_active-jobs_recruiter">
                            <p>Active Jobs</p>
                            <a href="#">Last 30 days</a>
                        </span>
                        <div id="chart"></div>
                        <div class="jobtitles_chart-div_active-jobs_recruiter">
                            <span>
                                <p>Job title</p>
                                <p>Applications</p>
                            </span>
                            <span>
                                <p>MERN stack developer</p>
                                <p>506</p>
                            </span>
                            <span>
                                <p>MEAN stack developer</p>
                                <p>114</p>
                            </span>
                            <span>
                                <p>Django developer</p>
                                <p>678</p>
                            </span>
                            <span>
                                <p>React-native front end developer</p>
                                <p>89</p>
                            </span>
                        </div>
                    </div>
                    <div class="applications-new-applications_active-jobs_recruiter">
                        <div class="applications_active-jobs_recruiter_div">
                            <span class="row-recruiter chart-span_active-jobs_recruiter">
                                <p>Applications</p>
                                <a href="#">Last 30 days</a>
                            </span>
                            <div class="linebar_spanwidth_applications row-recruiter">
                                <span style="background-color:#51C46D;height:5px;width:4%;display:inline-block"> </span>
                                <span style="background-color:#6EC5FF;height:5px;width:13%;display:inline-block"> </span>
                                <span style="background-color:#FDCA3B;height:5px;width:27%;display:inline-block"> </span>
                                <span style="background-color:#EC4551;height:5px;width:56%;display:inline-block"> </span>
                            </div>
                            <div class="linebar_description_applications row-recruiter">
                                <span style="padding:10px 0px;">
                                    <span style="background-color:#51C46D;height:10px;width:10px;border-radius:100%;display:inline-block"></span>
                                    Approved
                                </span>
                                <p>4%</p>
                            </div>
                            <div class="linebar_description_applications row-recruiter">
                                <span style="padding:10px 0px;">
                                    <span style="background-color:#6EC5FF;height:10px;width:10px;border-radius:100%;display:inline-block"></span>
                                    Shortlisted
                                </span>
                                <p>13%</p>
                            </div>
                            <div class="linebar_description_applications row-recruiter">
                                <span style="padding:10px 0px;">
                                    <span style="background-color:#FDCA3B;height:10px;width:10px;border-radius:100%;display:inline-block"></span>
                                    On-hold
                                </span>
                                <p>27%</p>
                            </div>
                            <div class="linebar_description_applications row-recruiter">
                                <span style="padding:10px 0px;">
                                    <span style="background-color:#EC4551;height:10px;width:10px;border-radius:100%;display:inline-block"></span>
                                    Rejected
                                </span>
                                <p>56%</p>
                            </div>


                        </div>
                        <div class="newapplications_active-jobs_recruiter_div">
                            <span class="row-recruiter chart-span_active-jobs_recruiter">
                                <p>New applicants</p>
                                <a href="#">Today</a>
                            </span>
                            <div class="row-recruiter applicant_single_recruiter_div">
                                <img src="./img/Ellipse -1.png" />
                                <span>
                                    <p>Jean Gray</p>
                                    <span>Android Studio Developer</span>
                                </span>
                            </div>
                            <div class="row-recruiter applicant_single_recruiter_div">
                                <img src="./img/Ellipse -3.png" />
                                <span>
                                    <p>Jean Gray</p>
                                    <span>Android Studio Developer</span>
                                </span>
                            </div>
                            <div class="row-recruiter applicant_single_recruiter_div">
                                <img src="./img/Ellipse -3.png" />
                                <span>
                                    <p>Jean Gray</p>
                                    <span>Android Studio Developer</span>
                                </span>
                            </div>
                            <div class="row-recruiter applicant_single_recruiter_div">
                                <img src="./img/Ellipse -2.png" />
                                <span>
                                    <p>Jean Gray</p>
                                    <span>Android Studio Developer</span>
                                </span>
                            </div>
                            <div class="row-recruiter applicant_single_recruiter_div">
                                <img src="./img/Ellipse -4.png" />
                                <span>
                                    <p>Jean Gray</p>
                                    <span>Android Studio Developer</span>
                                </span>
                            </div>
                        </div>
                        
                    </div>
                </section>
                <section class="upcoming_interviews_recruiter_div ">
                <span class="row-recruiter upcoming_interview_top_span">
                            <p>Upcoming Interviews</p>
                            <a href="#">Schedule an Interview +</a>
                </span>
                <div class="row-recruiter tableheading_upcoming_interview">
                    <span>NAME</span>
                    <span>DATE</span>
                    <span>POSITION</span>
                </div>
                    <div class="singleCompany_upcomingInterview row-recruiter">
                        <div class="companyDetails_upcomingInterview row-recruiter">
                            <img src="./img/Ellipse -1.png">
                            <span class="name_upcomingInterviews"><p>John Smith</p>
                            <p class="designationInterview">Company</p></span>
                        </div>
                        <span>
                            <p>12th May, 2020</p>
                            <span>5pm</span>
                        </span>
                        <span>
                            <p>Full stack web developer</p>
                            <span>Company</span>
                        </span>
                    </div>
                    <div class="singleCompany_upcomingInterview row-recruiter">
                        <div class="companyDetails_upcomingInterview row-recruiter">
                            <img src="./img/Ellipse -1.png">
                            <span class="name_upcomingInterviews"><p>John Smith</p>
                            <p class="designationInterview">Company</p></span>
                        </div>
                        <span>
                            <p>12th May, 2020</p>
                            <span>5pm</span>
                        </span>
                        <span>
                            <p>Full stack web developer</p>
                            <span>Company</span>
                        </span>
                    </div>
                    <div class="singleCompany_upcomingInterview row-recruiter">
                        <div class="companyDetails_upcomingInterview row-recruiter">
                            <img src="./img/Ellipse -1.png">
                            <span class="name_upcomingInterviews"><p>John Smith</p>
                            <p class="designationInterview">Company</p></span>
                        </div>
                        <span>
                            <p>12th May, 2020</p>
                            <span>5pm</span>
                        </span>
                        <span>
                            <p>Full stack web developer</p>
                            <span>Company</span>
                        </span>
                    </div>
                    <div class="singleCompany_upcomingInterview row-recruiter">
                        <div class="companyDetails_upcomingInterview row-recruiter">
                            <img src="./img/Ellipse -1.png">
                            <span class="name_upcomingInterviews"><p>John Smith</p>
                            <p class="designationInterview">Company</p></span>
                        </div>
                        <span>
                            <p>12th May, 2020</p>
                            <span>5pm</span>
                        </span>
                        <span>
                            <p>Full stack web developer</p>
                            <span>Company</span>
                        </span>
                    </div>
                </section>
                
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
        var options = {
        chart: {
            type: 'area'
        },
        zoom: {
            enabled: false
        },
        series: [{
            name: 'Applications',
            data: [30,40,45,50,49,60,70,91,125]
        },
        {
            name: 'Shortlisted',
            data: [10,20,25,60,39,50,60,81,15]
        }],
        yaxis: {
            categories: [10,20,30,40,50,60,70, 80,90]
        }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
        </script>
        <script src="./js/dashboard.js"></script>