                <!-- Breadcrumb -->
                <ol class="breadcrumb hidden-xs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
                
                <h4 class="page-title">DASHBOARD</h4>
                                
                <!-- Shortcuts -->
                <div class="block-area shortcut-area">
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/plus.png" alt="">
                        <small class="t-overflow">Create</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/money.png" alt="">
                        <small class="t-overflow">Purchases</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/twitter.png" alt="">
                        <small class="t-overflow">Tweets</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/calendar.png" alt="">
                        <small class="t-overflow">Calendar</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/stats.png" alt="">
                        <small class="t-overflow">Statistics</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/connections.png" alt="">
                        <small class="t-overflow">Connection</small>
                    </a>
                    <a class="shortcut tile" href="">
                        <img src="img/shortcuts/reports.png" alt="">
                        <small class="t-overflow">Reports</small>
                    </a>
                </div>
                
                <hr class="whiter" />
                <?php include('components/alert.php');?>
                <?php include('components/progress.php');?>

                </div>

                <hr class="whiter" />
                
                <!-- Main Widgets -->
               
                <div class="block-area">
                    <div class="row">

                            <!-- Main Chart -->
                            <div class="tile">
                                <h2 class="tile-title">Statistics</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="" class="tile-menu"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a class="tile-info-toggle" href="">Chart Information</a></li>
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                                <div class="p-10">
                                    <div id="line-chart" class="main-chart" style="height: 250px"></div>

                                    <div class="chart-info">
                                        <ul class="list-unstyled">
                                            <li class="m-b-10">
                                                Total Sales 1200
                                                <span class="pull-left text-muted t-s-0">
                                                    <i class="fa fa-chevron-up"></i>
                                                    +12%
                                                </span>
                                            </li>
                                            <li>
                                                <small>
                                                    Local 640
                                                    <span class="pull-left text-muted t-s-0"><i class="fa m-l-15 fa-chevron-down"></i> -8%</span>
                                                </small>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <small>
                                                    Foreign 560
                                                    <span class="pull-left text-muted t-s-0">
                                                        <i class="fa m-l-15 fa-chevron-up"></i>
                                                        -3%
                                                    </span>
                                                </small>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
    
                            <!-- Pies -->
                            <div class="tile text-center">
                                <div class="tile-dark p-10">
                                    <div class="pie-chart-tiny" data-percent="86">
                                        <span class="percent"></span>
                                        <span class="pie-title">New Visitors <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                    <div class="pie-chart-tiny" data-percent="23">
                                        <span class="percent"></span>
                                        <span class="pie-title">Bounce Rate <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                    <div class="pie-chart-tiny" data-percent="57">
                                        <span class="percent"></span>
                                        <span class="pie-title">Emails Sent <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                    <div class="pie-chart-tiny" data-percent="34">
                                        <span class="percent"></span>
                                        <span class="pie-title">Sales Rate <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                    <div class="pie-chart-tiny" data-percent="81">
                                        <span class="percent"></span>
                                        <span class="pie-title">New Signups <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                </div>
                            </div>

                            <!--  Recent Postings -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tile">
                                        <h2 class="tile-title">Recent Postings</h2>
                                        <div class="tile-config dropdown">
                                            <a data-toggle="dropdown" href="" class="tile-menu"></a>
                                            <ul class="dropdown-menu animated pull-right text-right">
                                                <li><a href="">Refresh</a></li>
                                                <li><a href="">Settings</a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="listview narrow">
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">2 Hours ago by Adrien San</small><br/>
                                                    <a class="t-overflow" href="">Cras molestie fermentum nibh, ac semper</a>
                                                   
                                                </div>
                                            </div>
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">5 Hours ago by David Villa</small><br/>
                                                    <a class="t-overflow" href="">Suspendisse in purus ut nibh placerat</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">On 15/12/2013 by Mitch bradberry</small><br/>
                                                    <a class="t-overflow" href="">Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">On 14/12/2013 by Mitch bradberry</small><br/>
                                                    <a class="t-overflow" href="">Cras pulvinar euismod nunc quis gravida. </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="img/profile-pics/5.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">On 13/12/2013 by Mitch bradberry</small><br/>
                                                    <a class="t-overflow" href="">Integer a eros dapibus, vehicula quam accumsan, tincidunt purus</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="media p-5 text-center l-100">
                                                <a href=""><small>VIEW ALL</small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Tasks to do -->
                                <div class="col-md-6">
                                    <div class="tile">
                                        <h2 class="tile-title">Open Problems</h2>
                                        <div class="tile-config dropdown">
                                            <a data-toggle="dropdown" href="" class="tile-menu"></a>
                                            <ul class="dropdown-menu pull-right text-right">
                                                <li id="todo-add"><a href="">Add New</a></li>
                                                <li id="todo-refresh"><a href="">Refresh</a></li>
                                                <li id="todo-clear"><a href="">Clear All</a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="listview todo-list sortable">
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox">
                                                        Curabitur quis nisi ut nunc gravida suscipis
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox">
                                                        Suscipit at feugiat dewoo
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox">
                                                        Gravida wendy lorem ipsum seen
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox">
                                                        Fedrix quis nisi ut nunc gravida suscipit at feugiat purus
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <h2 class="tile-title">Resolved Problems</h2>
                                        
                                        <div class="listview todo-list sortable">
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox" checked="checked">
                                                        Motor susbect win latictals bin the woodat cool
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox" checked="checked">
                                                        Wendy mitchel susbect win latictals bin the woodat cool
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox" checked="checked">
                                                        Latictals bin the woodat cool for the win
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        
                        

                        <div class="clearfix"></div>
                    </div>
                </div>
                
                <!-- Chat -->
                <div class="chat">
                    
                    <!-- Chat List -->
                    <div class="pull-left chat-list">
                        <div class="listview narrow">
                            <div class="media">
                                <img class="pull-left" src="img/profile-pics/1.jpg" width="30" alt="">
                                <div class="media-body p-t-5">
                                    Alex Bendit
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="img/profile-pics/2.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">David Volla Watkinson</span>
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="img/profile-pics/3.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">Mitchell Christein</span>
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="img/profile-pics/4.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">Wayne Parnell</span>
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="img/profile-pics/5.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">Melina April</span>
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="img/profile-pics/6.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">Ford Harnson</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- Chat Area -->
                    <div class="media-body">
                        <div class="chat-header">
                            <a class="btn btn-sm" href="">
                                <i class="fa fa-circle-o status m-r-5"></i> Chat with Friends
                            </a>
                        </div>
                    
                        <div class="chat-body">
                            <div class="media">
                                <img class="pull-right" src="img/profile-pics/1.jpg" width="30" alt="" />
                                <div class="media-body pull-right">
                                    Hiiii<br/>
                                    How you doing bro?
                                    <small>Me - 10 Mins ago</small>
                                </div>
                            </div>
                            
                            <div class="media pull-left">
                                <img class="pull-left" src="img/profile-pics/2.jpg" width="30" alt="" />
                                <div class="media-body">
                                    I'm doing well buddy. <br/>How do you do?
                                    <small>David - 9 Mins ago</small>
                                </div>
                            </div>
                            
                            <div class="media pull-right">
                                <img class="pull-right" src="img/profile-pics/2.jpg" width="30" alt="" />
                                <div class="media-body">
                                    I'm Fine bro <br/>Thank you for asking
                                    <small>Me - 8 Mins ago</small>
                                </div>
                            </div>
                            
                            <div class="media pull-right">
                                <img class="pull-right" src="img/profile-pics/2.jpg" width="30" alt="" />
                                <div class="media-body">
                                    Any idea for a hangout?
                                    <small>Me - 8 Mins ago</small>
                                </div>
                            </div>
                        
                        </div>
                    
                        <div class="chat-footer media">
                            <i class="chat-list-toggle pull-left fa fa-bars"></i>
                            <i class="pull-right fa fa-picture-o"></i> 
                            <div class="media-body">
                                <textarea class="form-control" placeholder="Type something..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Older IE Message -->
            <!--[if lt IE 9]>
                <div class="ie-block">
                    <h1 class="Ops">Ooops!</h1>
                    <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
                    <ul class="browsers">
                        <li>
                            <a href="https://www.google.com/intl/en/chrome/browser/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Google Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Mozilla Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com/computer/windows">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://safari.en.softonic.com/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                                <img src="img/browsers/ie.png" alt="">
                                <div>Internet Explorer(New)</div>
                            </a>
                        </li>
                    </ul>
                    <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
                </div>   
            <![endif]-->
        </section>
        
