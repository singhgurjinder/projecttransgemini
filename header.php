<!-- top navigation -->
<nav class="navbar navbar-expand-lg">
	<div class="container-fluid main-header">
		<div class="navbarlogo">
			<a href="index" class="navbar-brand brand-logo">
				<span class="animate-text">TransGemini<!-- <span class="vertical-line"></span> --></span>
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"style="border: 1px solid white;margin-right:15px;line-height:30px;color:#ffffff;padding: 1px 5px;">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
        	<ul class="nav navbar-nav navbar-menu browse-courses">
                <div class="title d-block d-sm-block d-md-block d-lg-none">
                    <span style="margin-left:45%;">Menu</span>                 
                    <a href="#" class="btn-close" style="color:#ffffff;" id="closeNav">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
        		<li class="all-courses">
        			<a href="#" class="" data-toggle="modal" data-target="#fsModal">
        				<i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i>&nbsp;&nbsp;All Courses
        			</a>

        		</li>
                 <li class="search-courses">
                    <!-- <div class="searcharea">
                        <form>
                            <span class="fas fa-ellipsis-v"></span>
                            <input type="search" name="search" class="searchbox">
                        </form>
                    </div> -->
                    <div class="navi-searchform d-none d-sm-none d-md-none d-lg-block">
                        <form class="form-inline" method="post" id="form-beer_v1" name="form-beer_v1">
                            <div class="typeahead__container">
                                <div class="input-group ">
                                    <button class="btn searchbutton" type="submit"><i class="fas fa-search"></i></button>
                                    <input type="search" class="form-control txtbx1 js-typeahead" id="txtSearch" name="q" placeholder="Search" autocomplete="off">
                                </div>
                            </div>
                        </form>     
                    </div>
                    
                 </li>
        	</ul>


        	<ul class="nav navbar-nav navbar-right right-text float-right" id="rightText">
        		<li><a href="class-schedular"><i class="far fa-calendar-alt"></i> Class Schedular</a></li>
                <li><a href="#"><i class="fas fa-street-view" style="font-size: 16px;"></i> My Mentor</a></li>
                <!-- <li><a href="#"><img src="../images/my-mentor.png" class="d-none d-sm-none d-md-none d-lg-inline-block img-fluid" height="25px" width="25px"> My Mentor</a></li> -->
                <li><a href="#"><i class="fas fa-user-graduate"></i> TransCruit</a></li>
        		<li class="dropdown d-none d-sm-none d-md-none d-lg-block"><a href="#" class="dropbtn"><i class="fas fa-user-cog"></i> Services</a>
                    <div class="service-dropdown list-unstyled dropdown-content">
                        <a href="../index" class="first-a">Training Services</a>
                        <a href="http://iwalltechies.org">Testing Services</a>
                        <a href="http://webkru.net">IT Services</a>
                        <a href="http://iwalltechies.org">Visa Immigration Consultants</a>
                        <a href="#">Staffing & Recruitments</a>
                        <a href="#">Medical Tourism</a>
                    </div>
                </li>
                <li class="d-block d-sm-block d-md-block d-lg-none"><a href="#" data-toggle="modal" data-target="#servicesModal"><i class="fas fa-user-cog"></i> Services
                    <span><i class="fas fa-angle-right d-inline-block d-sm-inline-block d-md-inline-block d-lg-none" style="color:#fff;float: right;padding-right:15px;font-size:20px;"></i></span></a></li>
                <li><a href="about-us"><i class="fas fa-file-signature"></i> About Us</a></li>
        		
        		<li><a href="#"><i class="far fa-question-circle"></i> Help</a></li>
        	</ul>
            <div class="navigation-image-mobile d-block d-sm-block d-md-block d-lg-none">
                
            </div>
        </div>
	</div>
</nav>
<div class="bottom-submenu">
  <div class="container bottom-submenu-text">
    <a href="../index" class="d-none d-sm-none d-md-block d-lg-block " style="float:left;"><i class="fas fa-home"></i></a>
    <a href="common-header/index" target="_blank">Resources</a>
    <a href="corporate-training" target="_blank">Corporate Training</a>
    <a href="https://blog.transgemini.com" target="_blank">Blog</a>
    <a href="signin" target="_blank"><span><i class="fas fa-user" style="font-size:15px;"></i></span></a>
  </div>
</div>

<!-- top navigation ends-->



<!-- modal -->
<div id="fsModal" class="modal animated bounceIn course-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- dialog -->
    <div class="modal-dialog course-dialog">
        <!-- content -->
        <div class="modal-content course-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;text-align:left;padding-top:10px;padding-left:15px;">
                <span aria-hidden="true"><i class="fas fa-arrow-left" id="arrows-btn"></i></span>
            </button>
            <!-- <img src="images/map-bg.png"> -->
            <!-- header -->
            <div class="modal-header course-header">
                <h1 id="myModalLabel" class="modal-title course-title">All Courses</h1>
            </div>
            <!-- header -->
            <!-- body -->
            <div class="modal-body course-body">
                <div class="modal-header-content">
                    <div class="container">
                        <div class="modal-header-content-course-categories">
                            <ul class="nav course-categories-slider owl-carousel owl-theme" id="myTab">
                                <!-- <div class="swipe-wrap"> -->
                            <div class="item">
                                <li class="nav-item">
                                    <a class="nav-link" id="project-management" data-toggle="tab" href="#projectManagement" role="tab" aria-controls="home" aria-selected="true">Project Management</a>
                                </li>
                            </div>
                            <div class="item">
                                <li class="nav-item">
                                    <a class="nav-link" id="agile-scrum" data-toggle="tab" href="#agileScrum" role="tab" aria-controls="profile" aria-selected="false">Agile & Methodology</a>
                                </li>
                            </div>
                            <div class="item">
                                <li class="nav-item">
                                    <a class="nav-link" id="it-services" data-toggle="tab" href="#itServices" role="tab" aria-controls="contact" aria-selected="false">IT Services & Architecture</a>
                                </li>
                            </div>
                            <div class="item">
                                <li class="nav-item">
                                    <a class="nav-link" id="quality-management" data-toggle="tab" href="#qualityManagement" role="tab" aria-controls="contact" aria-selected="false">Quality Management</a>
                                </li>
                            </div>
                            <div class="item">
                                <li class="nav-item">
                                    <a class="nav-link" id="sales-marketing" data-toggle="tab" href="#salesMarketing" role="tab" aria-controls="contact" aria-selected="false">Sales & Marketing</a>
                                </li>
                            </div>
                            <div class="item">
                                <li class="nav-item">
                                    <a class="nav-link" id="software-development" data-toggle="tab" href="#softwareDevelopment" role="tab" aria-controls="contact" aria-selected="false">Software Development</a>
                                </li>
                            </div>
                            <div class="item">
                                <li class="nav-item">
                                    <a class="nav-link" id="cloud-management" data-toggle="tab" href="#cloudManagement" role="tab" aria-controls="contact" aria-selected="false">Cloud Management</a>
                                </li>
                            </div>
                            <div class="item">
                                <li class="nav-item">
                                    <a class="nav-link" id="big-data" data-toggle="tab" href="#bigData" role="tab" aria-controls="contact" aria-selected="false">BigData</a>
                                </li>
                            </div>
                            <!-- </div> -->
                            </ul>
                           <!--  <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <div class="item" style="width: 240px;margin-bottom:10px;">  
                                    <li class="nav-item">              
                                        <a class="nav-link active" href="#prjManagement" role="tab" data-toggle="tab" aria-selected="true" aria-controls="prjManagement" id="prj-management">Project Management</a>                                    
                                    </li>
                                </div>
                                <div class="item"style="width: 240px;margin-bottom:10px;">
                                    <li class="nav-item">                                   
                                        <a class="nav-link" href="#agileScrum" role="tab" data-toggle="tab" id="agile-scrum" aria-selected="false" aria-controls="agileScrum">Agile & Scrum</a>
                                    </li>
                                </div> 
                                <div class="item"style="width: 240px;margin-bottom:10px;">
                                    <li class="nav-item">                                    
                                        <a class="nav-link" href="#itServices" role="tab" data-toggle="tab" id="it-services" aria-selected="false" aria-controls="itServices">IT Services & Architecture</a>
                                    </li>
                                </div>
                                <div class="item"style="width: 240px;margin-bottom:10px;">
                                    <li class="nav-item">                                    
                                        <a class="nav-link" href="#qualityManagement" role="tab" data-toggle="tab" id="quality-management" aria-selected="false" aria-controls="qualityManagement">Quality Management</a>
                                    </li>
                                </div>
                                <div class="item"style="width: 240px;margin-bottom:10px;">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#salesMarketing" role="tab" data-toggle="tab" id="sales-marketing" aria-selected="false" aria-controls="salesMarketing">Sales & Marketing</a>                         
                                    </li>
                                </div>
                                <div class="item"style="width: 240px;margin-bottom:10px;">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#softwareDevelopment" role="tab" data-toggle="tab" id="software-development" aria-selected="false" aria-controls="softwareDevelopment">Software Development</a>
                                    </li>
                                </div>
                                <div class="item"style="width: 240px;margin-bottom:10px;">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#cloudManagement" role="tab" data-toggle="tab" id="cloud-management" aria-selected="false" aria-controls="cloudManagement">Cloud Management</a>
                                    </li>
                                </div>
                                <div class="item"style="width: 240px;margin-bottom:10px;">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#bigData" role="tab" data-toggle="tab" id="big-data" aria-selected="false" aria-controls="bigData">Big Data</a>
                                    </li>
                                </div>                              
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="modal-bottom-content">
                    <div class="container">               
                        <div class="tab-content modal-bottom-content-course-list" id="myTabContent">
                            <div class="tab-pane fade show active" id="projectManagement" role="tabpanel" aria-labelledby="project-management">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="prince2-foundation">Prince2 Foundation</a>
                                                </li>
                                                <li>
                                                    <a href="prince2-practitioner">Prince2 Practitioner</a>
                                                </li>
                                                <li>
                                                    <a href="prince2">Prince2 Foundation & Practitioner</a>
                                                </li>
                                                <li>
                                                    <a href="pmp">PMP</a>
                                                </li>
                                                <li>
                                                    <a href="capm">CAPM</a>
                                                </li>
                                                <li>
                                                    <a href="msp">MSP Foundation & Practitioner</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="agileScrum" role="tabpanel" aria-labelledby="agile-scrum">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="scrum-fundamental-certified">Scrum Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="scrum-developer-certification">Scrum Developer</a>
                                                </li>
                                                <li>
                                                    <a href="scrum-master-certified">Scrum Master</a>
                                                </li>
                                                <li>
                                                    <a href="scrum-product-owner-certified">Scrum Product Owner</a>
                                                </li>
                                                <li>
                                                    <a href="scrum-agile-master-certified">Scrum Agile Certified</a>
                                                </li>
                                                <li>
                                                    <a href="scaled-scrum-master-certified">Scaled Scrum Master</a>
                                                </li>
                                                <li>
                                                    <a href="scaled-scrum-product-owner-certified">Scaled Scrum Product Owner</a>
                                                </li>
                                                <li>
                                                    <a href="expert-scrum-master-certified">Expert Scrum Master</a>
                                                </li>
                                                <li>
                                                    <a href="pmi-acp">PMI-ACP Certification</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="itServices" role="tabpanel" aria-labelledby="it-services">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="itil">ITIL® V3 Foundation</a>
                                                </li>
                                                <li>
                                                    <a href="itilv3-intermediateosa">ITIL® V3 Intermediate OSA</a>
                                                </li>
                                                <li>
                                                    <a href="itilv3-intermediatecsi">ITIL® V3 Intermediate CSI</a>
                                                </li>
                                                <li>
                                                    <a href="itilv3-intermediatest">ITIL® V3 Intermediate ST</a>
                                                </li>
                                                <li>
                                                    <a href="itilv3-blended">ITIL® V3 Blended</a>
                                                </li>
                                                <li>
                                                    <a href="itilv4-foundation">ITIL® V4 Foundation</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="qualityManagement" role="tabpanel" aria-labelledby="quality-management">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="six-sigma-yellow-belt">Six Sigma Yellow Belt</a>
                                                </li>
                                                <li>
                                                    <a href="six-sigma-green-belt">Six Sigma Green Belt</a>
                                                </li>
                                                <li>
                                                    <a href="lean-six-sigma-green-belt">Lean Six Sigma Green Belt</a>
                                                </li>
                                                <li>
                                                    <a href="six-sigma-black-belt">Six Sigma Black Belt</a>
                                                </li>
                                                <li>
                                                    <a href="lean-six-sigma-black-belt">Lean Six Sigma Black Belt</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="salesMarketing" role="tabpanel" aria-labelledby="sales-marketing">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li><h4>Marketing Strategy</h4></li>
                                                <li>
                                                    <a href="marketing-strategy-fundamental">Marketing Strategy Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-strategy-professional"> Marketing Strategy Professional</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-strategy-specialist">Marketing Strategy Specialist</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-strategy-expert">Marketing Strategy Expert</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                 <li><h4>Digital Marketing</h4></li>
                                                <li>
                                                    <a href="digital-marketing-fundamental">Digital Marketing Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="digital-marketing-professional">Digital Marketing Professional</a>
                                                </li>
                                                <li>
                                                    <a href="digital-marketing-specialist">Digital Marketing Specialist</a>
                                                </li>
                                                <li>
                                                    <a href="digital-marketing-expert">Digital Marketing Expert</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                 <li><h4>Marketing Research</h4></li>
                                                <li>
                                                    <a href="marketing-research-fundamental">Marketing Research Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-research-professional">Marketing Research Professional</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-research-specialist">Marketing Research Specialist</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-research-expert">Marketing Research Expert</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="row modal-row2" style="margin:3% 15%;">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li><h4>Corporate Sales</h4></li>
                                                <li>
                                                    <a href="corporate-sales-fundamental">Corporate Sales Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="corporate-sales-professional">Corporate Sales Professional</a>
                                                </li>
                                                <li>
                                                    <a href="corporate-sales-specialist">Corporate Sales Specialist</a>
                                                </li>
                                                <li>
                                                    <a href="corporate-sales-expert">Corporate Sales Expert</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li><h4>Other Elements Of Digital Marketing</h4></li>
                                                <li>
                                                    <a href="affiliate-marketing-professional">Affiliate Marketing Professional</a>
                                                </li>
                                                <li>
                                                    <a href="email-marketing-professional">Email Marketing Professional</a>
                                                </li>
                                                <li>
                                                    <a href="search-engine-optimization-professional">Search Engine Optimization Professional</a>
                                                </li>
                                                <li>
                                                    <a href="social-media-marketing-professional">Social Media Marketing Professional</a>
                                                </li>
                                                <li>
                                                    <a href="web-analytics-professional">Web Analytics Professional</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="softwareDevelopment" role="tabpanel" aria-labelledby="software-development">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="java">Java Certification Training</a>
                                                </li>
                                                <li>
                                                    <a href="php">PHP Training</a>
                                                </li>
                                                <li>
                                                    <a href="python">Python Training</a>
                                                </li>
                                                <li>
                                                    <a href="nodejs">Node.js Training</a>
                                                </li>
                                                <li>
                                                    <a href="selenium">Selenium 3.0 Training</a>
                                                </li>
                                                <li>
                                                    <a href="certified-android-app-developer">Certified Android App Developer</a>
                                                </li>
                                                <li>
                                                    <a href="certified-ios-app-developer">Certified iOS App Developer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="cloudManagement" role="tabpanel" aria-labelledby="cloud-management">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="aws-cloud-practitioner">AWS Cloud Practitioner</a>
                                                </li>
                                                <li>
                                                    <a href="aws-solutions-architect-associate">AWS Solutions Architect Associate</a>
                                                </li>
                                                <li>
                                                    <a href="aws-developer-associate">AWS Developer Associate</a>
                                                </li>
                                                <li>
                                                    <a href="aws-devops-engineer">AWS Developer Engineer Professional</a>
                                                </li>
                                                <li>
                                                    <a href="aws-sysops-administrator-associate">AWS SysOps Administrator Associate</a>
                                                </li>
                                                <li>
                                                    <a href="advanced-networking-speciality">AWS Advanced Networking Speciality</a>
                                                </li>
                                                 <li>
                                                    <a href="bigdata-speciality">AWS Big Data Speciality</a>
                                                </li>
                                                 <li>
                                                    <a href="security-speciality">AWS Security Speciality</a>
                                                </li>
                                                <li>
                                                    <a href="blockchain">Blockchain Developer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bigData" role="tabpanel" aria-labelledby="big-data">
                                 <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="bigdata-architect">Big Data Architect Masters Program</a>
                                                </li>
                                                <li>
                                                    <a href="bigdata-and-hadoop">Big Data Hadoop Certification</a>
                                                </li>
                                                <li>
                                                    <a href="apache-spark-and-scala">Apache Spark and Scala Certification</a>
                                                </li>
                                                <li>
                                                    <a href="python-spark-using-pyspark">Python Spark Certification Using Pyspark</a>
                                                </li>
                                                <li>
                                                    <a href="hadoop-administration">Hadoop Administration Certification</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="tab-content modal-bottom-content-course-list" id="myTabContent">
                            <div id="prjManagement" class="tab-pane fade show active" aria-labelledby="prj-management" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="prince2-foundation">Prince2 Foundation</a>
                                                </li>
                                                <li>
                                                    <a href="prince2-practitioner">Prince2 Practitioner</a>
                                                </li>
                                                <li>
                                                    <a href="prince2">Prince2 Foundation & Practitioner</a>
                                                </li>
                                                <li>
                                                    <a href="pmp">PMP</a>
                                                </li>
                                                <li>
                                                    <a href="capm">CAPM</a>
                                                </li>
                                                <li>
                                                    <a href="msp">MSP Foundation & Practitioner</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>

                            <div id="agileScrum" class="tab-pane fade" aria-labelledby="agile-scrum" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="scrum-fundamental-certified">Scrum Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="scrum-developer-certification">Scrum Developer</a>
                                                </li>
                                                <li>
                                                    <a href="scrum-master-certified">Scrum Master</a>
                                                </li>
                                                <li>
                                                    <a href="scrum-product-owner-certified">Scrum Product Owner</a>
                                                </li>
                                                <li>
                                                    <a href="scrum-agile-master-certified">Scrum Agile Certified</a>
                                                </li>
                                                <li>
                                                    <a href="scaled-scrum-master-certified">Scaled Scrum Master</a>
                                                </li>
                                                <li>
                                                    <a href="scaled-scrum-product-owner-certified">Scaled Scrum Product Owner</a>
                                                </li>
                                                <li>
                                                    <a href="expert-scrum-master-certified">Expert Scrum Master</a>
                                                </li>
                                                <li>
                                                    <a href="pmi-acp">PMI-ACP Certification</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>


                            <div id="itServices" class="tab-pane fade" aria-labelledby="it-services" role="tabpanel" >
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="itil">ITIL® V3 Foundation</a>
                                                </li>
                                                <li>
                                                    <a href="itilv3-intermediateosa">ITIL® V3 Intermediate OSA</a>
                                                </li>
                                                <li>
                                                    <a href="itilv3-intermediatecsi">ITIL® V3 Intermediate CSI</a>
                                                </li>
                                                <li>
                                                    <a href="itilv3-intermediatest">ITIL® V3 Intermediate ST</a>
                                                </li>
                                                <li>
                                                    <a href="itilv3-blended">ITIL® V3 Blended</a>
                                                </li>
                                                <li>
                                                    <a href="itilv4-foundation">ITIL® V4 Foundation</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>

                            <div id="qualityManagement" class="tab-pane fade" aria-labelledby="quality-management" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="six-sigma-yellow-belt">Six Sigma Yellow Belt</a>
                                                </li>
                                                <li>
                                                    <a href="six-sigma-green-belt">Six Sigma Green Belt</a>
                                                </li>
                                                <li>
                                                    <a href="lean-six-sigma-green-belt">Lean Six Sigma Green Belt</a>
                                                </li>
                                                <li>
                                                    <a href="six-sigma-black-belt">Six Sigma Black Belt</a>
                                                </li>
                                                <li>
                                                    <a href="lean-six-sigma-black-belt">Lean Six Sigma Black Belt</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>

                            <div id="salesMarketing" class="tab-pane fade" aria-labelledby="sales-marketing" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li><h4>Marketing Strategy</h4></li>
                                                <li>
                                                    <a href="marketing-strategy-fundamental">Marketing Strategy Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-strategy-professional"> Marketing Strategy Professional</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-strategy-specialist">Marketing Strategy Specialist</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-strategy-expert">Marketing Strategy Expert</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                 <li><h4>Digital Marketing</h4></li>
                                                <li>
                                                    <a href="digital-marketing-fundamental">Digital Marketing Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="digital-marketing-professional">Digital Marketing Professional</a>
                                                </li>
                                                <li>
                                                    <a href="digital-marketing-specialist">Digital Marketing Specialist</a>
                                                </li>
                                                <li>
                                                    <a href="digital-marketing-expert">Digital Marketing Expert</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                 <li><h4>Marketing Research</h4></li>
                                                <li>
                                                    <a href="marketing-research-fundamental">Marketing Research Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-research-professional">Marketing Research Professional</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-research-specialist">Marketing Research Specialist</a>
                                                </li>
                                                <li>
                                                    <a href="marketing-research-expert">Marketing Research Expert</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="row modal-row2" style="margin:3% 15%;">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li><h4>Corporate Sales</h4></li>
                                                <li>
                                                    <a href="corporate-sales-fundamental">Corporate Sales Fundamentals</a>
                                                </li>
                                                <li>
                                                    <a href="corporate-sales-professional">Corporate Sales Professional</a>
                                                </li>
                                                <li>
                                                    <a href="corporate-sales-specialist">Corporate Sales Specialist</a>
                                                </li>
                                                <li>
                                                    <a href="corporate-sales-expert">Corporate Sales Expert</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li><h4>Other Elements Of Digital Marketing</h4></li>
                                                <li>
                                                    <a href="affiliate-marketing-professional">Affiliate Marketing Professional</a>
                                                </li>
                                                <li>
                                                    <a href="email-marketing-professional">Email Marketing Professional</a>
                                                </li>
                                                <li>
                                                    <a href="search-engine-optimization-professional">Search Engine Optimization Professional</a>
                                                </li>
                                                <li>
                                                    <a href="social-media-marketing-professional">Social Media Marketing Professional</a>
                                                </li>
                                                <li>
                                                    <a href="web-analytics-professional">Web Analytics Professional</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="softwareDevelopment" class="tab-pane fade" aria-labelledby="software-development" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="java">Java Certification Training</a>
                                                </li>
                                                <li>
                                                    <a href="php">PHP Training</a>
                                                </li>
                                                <li>
                                                    <a href="python">Python Training</a>
                                                </li>
                                                <li>
                                                    <a href="nodejs">Node.js Training</a>
                                                </li>
                                                <li>
                                                    <a href="selenium">Selenium 3.0 Training</a>
                                                </li>
                                                <li>
                                                    <a href="certified-android-app-developer">Certified Android App Developer</a>
                                                </li>
                                                <li>
                                                    <a href="certified-ios-app-developer">Certified iOS App Developer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>

                            <div id="cloudManagement" class="tab-pane fade" aria-labelledby="cloud-management" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="aws-cloud-practitioner">AWS Cloud Practitioner</a>
                                                </li>
                                                <li>
                                                    <a href="aws-solutions-architect-associate">AWS Solutions Architect Associate</a>
                                                </li>
                                                <li>
                                                    <a href="aws-developer-associate">AWS Developer Associate</a>
                                                </li>
                                                <li>
                                                    <a href="aws-devops-engineer">AWS Developer Engineer Professional</a>
                                                </li>
                                                <li>
                                                    <a href="aws-sysops-administrator-associate">AWS SysOps Administrator Associate</a>
                                                </li>
                                                <li>
                                                    <a href="advanced-networking-speciality">AWS Advanced Networking Speciality</a>
                                                </li>
                                                 <li>
                                                    <a href="bigdata-speciality">AWS Big Data Speciality</a>
                                                </li>
                                                 <li>
                                                    <a href="security-speciality">AWS Security Speciality</a>
                                                </li>
                                                <li>
                                                    <a href="blockchain">Blockchain Developer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>

                            <div id="bigData" class="tab-pane fade" aria-labelledby="big-data" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="course-list-view">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="bigdata-architect">Big Data Architect Masters Program</a>
                                                </li>
                                                <li>
                                                    <a href="bigdata-and-hadoop">Big Data Hadoop Certification</a>
                                                </li>
                                                <li>
                                                    <a href="apache-spark-and-scala">Apache Spark and Scala Certification</a>
                                                </li>
                                                <li>
                                                    <a href="python-spark-using-pyspark">Python Spark Certification Using Pyspark</a>
                                                </li>
                                                <li>
                                                    <a href="hadoop-administration">Hadoop Administration Certification</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6"></div>
                                </div>
                            </div>


                        </div> -->
                    </div>
                </div>
            </div>
            <!-- body -->
        </div>
        <!-- content -->
    </div>
    <!-- dialog -->
</div>
<!-- modal-->

<!-- services modal start -->
<div class="modal fade course-modal" id="servicesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog course-dialog" role="document">
    <div class="modal-content course-content" style="background-image:url('images/wallpaper-find-exam.png');">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;text-align:left;padding-top:10px;padding-left:15px;color:#fff;opacity:1;">
          <span aria-hidden="true"><i class="fas fa-arrow-left servicesarrow" id="arrows-btn"></i></span>
        </button>
      <!-- </div> -->
       <div class="modal-header course-header">
            <h1 id="myModalLabel" class="modal-title course-title" style="color:#fff;">Services</h1>
        </div>
      <div class="modal-body course-body">
        <div class="service-dropdown-modal">
            <div class="container-fluid">
                <div class="row">
                    <a href="index" class="first-a" style="border-bottom:1px solid #fff;">Training Services</a>
                    <a href="http://iwalltechies.org" style="border-bottom:1px solid #fff;">Testing Services</a>
                    <a href="http://webkru.net" style="border-bottom:1px solid #fff;">IT Services</a>
                    <a href="http://iwalltechies.org" style="border-bottom:1px solid #fff;">Visa Immigration Consultants</a>
                    <a href="#" style="border-bottom:1px solid #fff;">Staffing & Recruitments</a>
                    <a href="#" style="border-bottom:1px solid #fff;">Medical Tourism</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>