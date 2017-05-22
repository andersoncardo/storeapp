
<!DOCTYPE html>
<html>
<head>
    <title>Sing - Widgets</title>
    <link href="css/application.min.css" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
    <link href="css/application-ie9-part2.css" rel="stylesheet">
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
</head>
<body>
<!--
  Main sidebar seen on the left. may be static or collapsing depending on selected state.

    * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.
    * Static - stays always open.
-->
<nav id="sidebar" class="sidebar" role="navigation">
    <!-- need this .js class to initiate slimscroll -->
    <div class="js-sidebar-content">
        <header class="logo hidden-sm-down">
            <a href="index.html">sing</a>
        </header>
        <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
             looks good, so adding it and enhancing with notifications -->
        <div class="sidebar-status hidden-md-up">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="thumb-sm avatar pull-xs-right">
                    <img class="img-circle" src="demo/img/people/a5.jpg" alt="...">
                </span>
                <!-- .circle is a pretty cool way to add a bit of beauty to raw data.
                     should be used with bg-* and text-* classes for colors -->
                <span class="circle bg-warning fw-bold text-gray-dark">
                    13
                </span>
                &nbsp;
                Philip <strong>Smith</strong>
                <b class="caret"></b>
            </a>
            <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
        </div>
        <!-- main notification links are placed inside of .sidebar-nav -->
        <ul class="sidebar-nav">
            <li class="active">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="#sidebar-dashboard" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="fa fa-desktop"></i>
                    </span>
                    Dashboard
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-dashboard" class="collapse in">
                    <li><a href="index.html">Dashboard</a></li>
                    <li class="active"><a href="widgets.html">Widgets</a></li>
                </ul>
            </li>
            <li>
                <a href="inbox.html">
                    <span class="icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    Email
                    <span class="label label-danger">
                        9
                    </span>
                </a>
            </li>
            <li>
                <a href="charts.html">
                    <span class="icon">
                        <i class="glyphicon glyphicon-stats"></i>
                    </span>
                    Charts
                </a>
            </li>
            <li>
                <a href="profile.html">
                    <span class="icon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    Profile
                    <sup class="text-warning fw-semi-bold">
                        new
                    </sup>
                </a>
            </li>
        </ul>
        <!-- every .sidebar-nav may have a title -->
        <h5 class="sidebar-nav-title">Template <a class="action-link" href="#"><i class="glyphicon glyphicon-refresh"></i></a></h5>
        <ul class="sidebar-nav">
            <li>
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a class="collapsed" href="#sidebar-forms" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="glyphicon glyphicon-align-right"></i>
                    </span>
                    Forms
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-forms" class="collapse">
                    <li><a href="form_elements.html">Form Elements</a></li>
                    <li><a href="form_validation.html">Form Validation</a></li>
                    <li><a href="form_wizard.html">Form Wizard</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" href="#sidebar-ui" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="glyphicon glyphicon-tree-conifer"></i>
                    </span>
                    UI Elements
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-ui" class="collapse">
                    <li><a href="ui_components.html">Components</a></li>
                    <li><a href="ui_notifications.html">Notifications</a></li>
                    <li><a href="ui_icons.html">Icons</a></li>
                    <li><a href="ui_buttons.html">Buttons</a></li>
                    <li><a href="ui_tabs_accordion.html">Tabs & Accordion</a></li>
                    <li><a href="ui_list_groups.html">List Groups</a></li>
                </ul>
            </li>
            <li>
                <a href="grid.html">
                    <span class="icon">
                        <i class="glyphicon glyphicon-th"></i>
                    </span>
                    Grid
                </a>
            </li>
            <li>
                <a class="collapsed" href="#sidebar-maps" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="glyphicon glyphicon-map-marker"></i>
                    </span>
                    Maps
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-maps" class="collapse">
                    <!-- data-no-pjax turns off pjax loading for this link. Use in case of complicated js loading on the
                         target page -->
                    <li><a href="maps_google.html" data-no-pjax>Google Maps</a></li>
                    <li><a href="maps_vector.html">Vector Maps</a></li>
                </ul>
            </li>
            <li>
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a class="collapsed" href="#sidebar-tables" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="fa fa-table"></i>
                    </span>
                    Tables
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-tables" class="collapse">
                    <li><a href="tables_basic.html">Tables Basic</a></li>
                    <li><a href="tables_dynamic.html">Tables Dynamic</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" href="#sidebar-extra" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="fa fa-leaf"></i>
                    </span>
                    Extra
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-extra" class="collapse">
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="login.html" target="_blank" data-no-pjax>Login Page</a></li>
                    <li><a href="error.html" target="_blank" data-no-pjax>Error Page</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="search.html">Search Results</a></li>
                    <li><a href="time_line.html" data-no-pjax>Time Line</a></li>
                </ul>
            </li>
            <li>
                <a class="collapsed" href="#sidebar-levels" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="fa fa-folder-open"></i>
                    </span>
                    Menu Levels
                    <i class="toggle fa fa-angle-down"></i>
                </a>
                <ul id="sidebar-levels" class="collapse">
                    <li><a href="#">Level 1</a></li>
                    <li>
                        <a class="collapsed" href="#sidebar-sub-levels" data-toggle="collapse" data-parent="#sidebar-levels">
                            Level 2
                            <i class="toggle fa fa-angle-down"></i>
                        </a>
                        <ul id="sidebar-sub-levels" class="collapse">
                            <li><a href="#">Level 3</a></li>
                            <li><a href="#">Level 3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
        <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
        <ul class="sidebar-labels">
            <li>
                <a href="#">
                    <!-- yep, .circle again -->
                    <i class="fa fa-circle text-warning mr-xs"></i>
                    <span class="label-name">My Recent</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle text-gray mr-xs"></i>
                    <span class="label-name">Starred</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle text-danger mr-xs"></i>
                    <span class="label-name">Background</span>
                </a>
            </li>
        </ul>
        <h5 class="sidebar-nav-title">Projects</h5>
        <!-- A place for sidebar notifications & alerts -->
        <div class="sidebar-alerts">
            <div class="alert fade in">
                <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                <span class="text-white fw-semi-bold">Sales Report</span> <br>
                <div class="bg-gray-transparent progress-bar">
                    <progress class="progress progress-xs progress-bar-gray-light mt-xs mb-0" value="100" max="100" style="width: 16%"></progress>
                </div>
                <small>Calculating x-axis bias... 65%</small>
            </div>
            <div class="alert fade in">
                <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
                <div class="bg-gray-transparent progress-bar">
                    <progress class="progress progress-xs progress-danger mt-xs mb-0" value="100" max="100" style="width: 23%"></progress>
                </div>
                <small>Provide required notes</small>
            </div>
        </div>
    </div>
</nav>
<!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
<nav class="page-controls navbar navbar-dashboard">
    <div class="container-fluid">
        <!-- .navbar-header contains links seen on xs & sm screens -->
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->
                    <a class="hidden-md-down nav-link" id="nav-state-toggle" href="#" data-toggle="tooltip" data-html="true" data-original-title="Turn<br>on/off<br>sidebar<br>collapsing" data-placement="bottom">
                        <i class="fa fa-bars fa-lg"></i>
                    </a>
                    <!-- shown on xs & sm screen. collapses and expands navigation -->
                    <a class="hidden-lg-up nav-link" id="nav-collapse-toggle" href="#" data-html="true" title="Show/hide<br>sidebar" data-placement="bottom">
                        <span class="rounded rounded-lg bg-gray text-white hidden-md-up"><i class="fa fa-bars fa-lg"></i></span>
                        <i class="fa fa-bars fa-lg hidden-sm-down"></i>
                    </a>
                </li>
                <li class="nav-item hidden-sm-down"><a href="#" class="nav-link"><i class="fa fa-refresh fa-lg"></i></a></li>
                <li class="nav-item ml-n-xs hidden-sm-down"><a href="#" class="nav-link"><i class="fa fa-times fa-lg"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-md-up">
                <li>
                    <!-- toggles chat -->
                    <a href="#" data-toggle="chat-sidebar">
                        <span class="rounded rounded-lg bg-gray text-white"><i class="fa fa-globe fa-lg"></i></span>
                    </a>
                </li>
            </ul>
            <!-- xs & sm screen logo -->
            <a class="navbar-brand hidden-md-up" href="index.html">
                <i class="fa fa-circle text-gray mr-n-sm"></i>
                <i class="fa fa-circle text-warning"></i>
                &nbsp;
                sing
                &nbsp;
                <i class="fa fa-circle text-warning mr-n-sm"></i>
                <i class="fa fa-circle text-gray"></i>
            </a>
        </div>

        <!-- this part is hidden for xs screens -->
        <div class="collapse navbar-collapse">
            <!-- search form! link it to your search server -->
            <form class="navbar-form pull-xs-left" role="search">
                <div class="form-group">
                    <div class="input-group input-group-no-border">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                        <input class="form-control" type="text" placeholder="Search Dashboard">
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav pull-xs-right">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle dropdown-toggle-notifications nav-link" id="notifications-dropdown-toggle" data-toggle="dropdown">
                        <span class="thumb-sm avatar pull-xs-left">
                            <img class="img-circle" src="demo/img/people/a5.jpg" alt="...">
                        </span>
                        &nbsp;
                        Philip <strong>Smith</strong>&nbsp;
                        <span class="circle bg-warning fw-bold">
                            13
                        </span>
                        <b class="caret"></b></a>
                    <!-- ready to use notifications dropdown.  inspired by smartadmin template.
                         consists of three components:
                         notifications, messages, progress. leave or add what's important for you.
                         uses Sing's ajax-load plugin for async content loading. See #load-notifications-btn -->
                    <div class="dropdown-menu dropdown-menu-right animated fadeInUp" id="notifications-dropdown-menu">
                        <section class="card notifications">
                            <header class="card-header">
                                <div class="text-xs-center mb-sm">
                                    <strong>You have 13 notifications</strong>
                                </div>
                                <div class="btn-group btn-group-sm btn-group-justified" id="notifications-toggle" data-toggle="buttons">
                                    <label class="btn btn-secondary active">
                                        <!-- ajax-load plugin in action. setting data-ajax-load & data-ajax-target is the
                                             only requirement for async reloading -->
                                        <input type="radio" checked
                                               data-ajax-trigger="change"
                                               data-ajax-load="demo/ajax/notifications.html"
                                               data-ajax-target="#notifications-list"> Notifications
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio"
                                               data-ajax-trigger="change"
                                               data-ajax-load="demo/ajax/messages.html"
                                               data-ajax-target="#notifications-list"> Messages
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio"
                                               data-ajax-trigger="change"
                                               data-ajax-load="demo/ajax/progress.html"
                                               data-ajax-target="#notifications-list"> Progress
                                    </label>
                                </div>
                            </header>
                            <!-- notification list with .thin-scroll which styles scrollbar for webkit -->
                            <div id="notifications-list" class="list-group thin-scroll">
                                <div class="list-group-item">
                                <span class="thumb-sm pull-xs-left mr clearfix">
                                    <img class="img-circle" src="demo/img/people/a3.jpg" alt="...">
                                </span>
                                    <p class="no-margin overflow-hidden">
                                        1 new user just signed up! Check out
                                        <a href="#">Monica Smith</a>'s account.
                                        <time class="help-block no-margin">
                                            2 mins ago
                                        </time>
                                    </p>
                                </div>
                                <a class="list-group-item" href="#">
                                <span class="thumb-sm pull-xs-left mr">
                                    <i class="glyphicon glyphicon-upload fa-lg"></i>
                                </span>
                                    <p class="text-ellipsis no-margin">
                                        2.1.0-pre-alpha just released. </p>
                                    <time class="help-block no-margin">
                                        5h ago
                                    </time>
                                </a>
                                <a class="list-group-item" href="#">
                                <span class="thumb-sm pull-xs-left mr">
                                    <i class="fa fa-bolt fa-lg"></i>
                                </span>
                                    <p class="text-ellipsis no-margin">
                                        Server load limited. </p>
                                    <time class="help-block no-margin">
                                        7h ago
                                    </time>
                                </a>
                                <div class="list-group-item">
                                <span class="thumb-sm pull-xs-left mr clearfix">
                                    <img class="img-circle" src="demo/img/people/a5.jpg" alt="...">
                                </span>
                                    <p class="no-margin overflow-hidden">
                                        User <a href="#">Jeff</a> registered
                                        &nbsp;&nbsp;
                                        <a class="label label-success">Allow</a>
                                        <a class="label label-danger">Deny</a>
                                        <time class="help-block no-margin">
                                            12:18 AM
                                        </time>
                                    </p>
                                </div>
                                <div class="list-group-item">
                                    <span class="thumb-sm pull-xs-left mr">
                                        <i class="fa fa-shield fa-lg"></i>
                                    </span>
                                    <p class="no-margin overflow-hidden">
                                        Instructions for changing your Envato Account password. Please
                                        check your account <a href="#">security page</a>.
                                        <time class="help-block no-margin">
                                            12:18 AM
                                        </time>
                                    </p>
                                </div>
                                <a class="list-group-item" href="#">
                                <span class="thumb-sm pull-xs-left mr">
                                    <span class="rounded bg-primary rounded-lg">
                                        <i class="fa fa-facebook text-white"></i>
                                    </span>
                                </span>
                                    <p class="text-ellipsis no-margin">
                                        New <strong>76</strong> facebook likes received.</p>
                                    <time class="help-block no-margin">
                                        15 Apr 2014
                                    </time>
                                </a>
                                <a class="list-group-item" href="#">
                                <span class="thumb-sm pull-xs-left mr">
                                    <span class="circle circle-lg bg-gray-dark">
                                        <i class="fa fa-circle-o text-white"></i>
                                    </span>
                                </span>
                                    <p class="text-ellipsis no-margin">
                                        Dark matter detected.</p>
                                    <time class="help-block no-margin">
                                        15 Apr 2014
                                    </time>
                                </a>
                            </div>
                            <footer class="card-footer text-sm">
                                <!-- ajax-load button. loads demo/ajax/notifications.php to #notifications-list
                                     when clicked -->
                                <button class="btn-label btn-link pull-xs-right"
                                        id="load-notifications-btn"
                                        data-ajax-load="demo/ajax/notifications.php"
                                        data-ajax-target="#notifications-list"
                                        data-loading-text="<i class='fa fa-refresh fa-spin mr-xs'></i> Loading...">
                                    <i class="fa fa-refresh"></i>
                                </button>
                                <span>Synced at: 21 Apr 2014 18:36</span>
                            </footer>
                        </section>
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-cog fa-lg"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="profile.html"><i class="glyphicon glyphicon-user"></i> &nbsp; My Account</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="calendar.html">Calendar</a></li>
                        <li><a class="dropdown-item" href="inbox.html">Inbox &nbsp;&nbsp;<span class="label label-pill label-danger animated bounceIn">9</span></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.html"><i class="fa fa-sign-out"></i> &nbsp; Log Out</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="chat-sidebar">
                        <i class="fa fa-globe fa-lg"></i>
                    </a>
                    <div id="chat-notification" class="chat-notification hide">
                        <div class="chat-notification-inner">
                            <h6 class="title">
                                <span class="thumb-xs">
                                    <img src="demo/img/people/a6.jpg" class="img-circle mr-xs pull-xs-left">
                                </span>
                                Jess Smith
                            </h6>
                            <p class="text">Hey! What's up?</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="chat-sidebar" id="chat">
    <div class="chat-sidebar-content">
        <header class="chat-sidebar-header">
            <h5 class="chat-sidebar-title">Contacts</h5>
            <div class="form-group no-margin">
                <div class="input-group input-group-dark">
                    <input class="form-control fs-mini" id="chat-sidebar-search" type="text" placeholder="Search...">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
        </header>
        <div class="chat-sidebar-contacts chat-sidebar-panel open">
            <h5 class="sidebar-nav-title">Today</h5>
            <div class="list-group chat-sidebar-user-group">
                <a class="list-group-item" href="#chat-sidebar-user-1">
                    <i class="fa fa-circle text-success pull-xs-right"></i>
                    <span class="thumb-sm pull-xs-left mr">
                        <img class="img-circle" src="demo/img/people/a2.jpg" alt="...">
                    </span>
                    <h6 class="message-sender">Chris Gray</h6>
                    <p class="message-preview">Hey! What's up? So many times since we</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-2">
                    <i class="fa fa-circle text-gray-light pull-xs-right"></i>
                    <span class="thumb-sm pull-xs-left mr">
                    <img class="img-circle" src="img/avatar.png" alt="...">
                </span>
                    <h6 class="message-sender">Jamey Brownlow</h6>
                    <p class="message-preview">Good news coming tonight. Seems they agreed to proceed</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-3">
                    <i class="fa fa-circle text-danger pull-xs-right"></i>
                    <span class="thumb-sm pull-xs-left mr">
                    <img class="img-circle" src="demo/img/people/a1.jpg" alt="...">
                </span>
                    <h6 class="message-sender">Livia Walsh</h6>
                    <p class="message-preview">Check out my latest email plz!</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-4">
                    <i class="fa fa-circle text-gray-light pull-xs-right"></i>
                    <span class="thumb-sm pull-xs-left mr">
                    <img class="img-circle" src="img/avatar.png" alt="...">
                </span>
                    <h6 class="message-sender">Jaron Fitzroy</h6>
                    <p class="message-preview">What about summer break?</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-5">
                    <i class="fa fa-circle text-success pull-xs-right"></i>
                    <span class="thumb-sm pull-xs-left mr">
                    <img class="img-circle" src="demo/img/people/a4.jpg" alt="...">
                </span>
                    <h6 class="message-sender">Mike Lewis</h6>
                    <p class="message-preview">Just ain't sure about the weekend now. 90% I'll make it.</p>
                </a>
            </div>
            <h5 class="sidebar-nav-title">Last Week</h5>
            <div class="list-group chat-sidebar-user-group">
                <a class="list-group-item" href="#chat-sidebar-user-6">
                    <i class="fa fa-circle text-gray-light pull-xs-right"></i>
                    <span class="thumb-sm pull-xs-left mr">
                    <img class="img-circle" src="demo/img/people/a6.jpg" alt="...">
                </span>
                    <h6 class="message-sender">Freda Edison</h6>
                    <p class="message-preview">Hey what's up? Me and Monica going for a lunch somewhere. Wanna join?</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-7">
                    <i class="fa fa-circle text-success pull-xs-right"></i>
                    <span class="thumb-sm pull-xs-left mr">
                    <img class="img-circle" src="demo/img/people/a5.jpg" alt="...">
                </span>
                    <h6 class="message-sender">Livia Walsh</h6>
                    <p class="message-preview">Check out my latest email plz!</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-8">
                    <i class="fa fa-circle text-warning pull-xs-right"></i>
                    <span class="thumb-sm pull-xs-left mr">
                    <img class="img-circle" src="demo/img/people/a3.jpg" alt="...">
                </span>
                    <h6 class="message-sender">Jaron Fitzroy</h6>
                    <p class="message-preview">What about summer break?</p>
                </a>
                <a class="list-group-item" href="#chat-sidebar-user-9">
                    <i class="fa fa-circle text-gray-light pull-xs-right"></i>
                    <span class="thumb-sm pull-xs-left mr">
                    <img class="img-circle" src="img/avatar.png" alt="...">
                </span>
                    <h6 class="message-sender">Mike Lewis</h6>
                    <p class="message-preview">Just ain't sure about the weekend now. 90% I'll make it.</p>
                </a>
            </div>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-1">
            <h6 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Chris Gray
                </a>
            </h6>
            <ul class="message-list">
                <li class="message">
                    <span class="thumb-sm">
                        <img class="img-circle" src="demo/img/people/a2.jpg" alt="...">
                    </span>
                    <div class="message-body">
                        Hey! What's up?
                    </div>
                </li>
                <li class="message">
                    <span class="thumb-sm">
                        <img class="img-circle" src="demo/img/people/a2.jpg" alt="...">
                    </span>
                    <div class="message-body">
                        Are you there?
                    </div>
                </li>
                <li class="message">
                    <span class="thumb-sm">
                        <img class="img-circle" src="demo/img/people/a2.jpg" alt="...">
                    </span>
                    <div class="message-body">
                        Let me know when you come back.
                    </div>
                </li>
                <li class="message from-me">
                    <span class="thumb-sm">
                        <img class="img-circle" src="img/avatar.png" alt="...">
                    </span>
                    <div class="message-body">
                        I am here!
                    </div>
                </li>
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-2">
            <h6 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Jamey Brownlow
                </a>
            </h6>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-3">
            <h6 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Livia Walsh
                </a>
            </h6>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-4">
            <h6 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Jaron Fitzroy
                </a>
            </h6>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-5">
            <h6 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Mike Lewis
                </a>
            </h6>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-6">
            <h6 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Freda Edison
                </a>
            </h6>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-7">
            <h6 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Livia Walsh
                </a>
            </h6>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-8">
            <h6 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Jaron Fitzroy
                </a>
            </h6>
            <ul class="message-list">
            </ul>
        </div>
        <div class="chat-sidebar-chat chat-sidebar-panel" id="chat-sidebar-user-9">
            <h6 class="title">
                <a class="js-back" href="#">
                    <i class="fa fa-angle-left mr-xs"></i>
                    Mike Lewis
                </a>
            </h6>
            <ul class="message-list">
            </ul>
        </div>
        <footer class="chat-sidebar-footer form-group">
            <input class="form-control input-dark" id="chat-sidebar-input" type="text"  placeholder="Type your message">
        </footer>
    </div>
</div>

<div class="content-wrap">
    <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
    <main id="content" class="content" role="main">
        <!--<ol class="breadcrumb">-->
        <!--<li>YOU ARE HERE</li>-->
        <!--<li class="active">Widgets</li>-->
        <!--</ol>-->
        <!--<h2 class="page-title">Widgets - <span class="fw-semi-bold">Options</span></h2>-->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <section class="widget widget-card bg-primary text-white">
                    <div class="widget-body clearfix">
                        <div class="row">
                            <div class="col-xs-3">
                                <span class="widget-icon">
                                    <i class="glyphicon glyphicon-globe"></i>
                                </span>
                            </div>
                            <div class="col-xs-9">
                                <h6 class="no-margin">USERS GROWTH</h6>
                                <p class="h2 no-margin fw-normal">4,332</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <h6 class="no-margin">Registrations</h6>
                                <p class="value5">+830</p>
                            </div>
                            <div class="col-xs-6 fs-sm">
                                <h6 class="no-margin">Bounce Rate</h6>
                                <p class="value5">4.5%</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-md-6">
                <section class="widget widget-card bg-info text-white">
                    <div class="widget-body clearfix">
                        <div class="row">
                            <div class="col-xs-3">
                                <span class="widget-icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                            </div>
                            <div class="col-xs-9">
                                <div class="live-tile" data-mode="carousel" data-speed="750" data-delay="3000" data-height="57">
                                    <div>
                                        <h6 class="no-margin">VISITS TODAY</h6>
                                        <p class="h2 no-margin fw-normal">12,324</p>
                                    </div>
                                    <div>
                                        <h6 class="no-margin">VISITS YESTERDAY</h6>
                                        <p class="h2 no-margin fw-normal">11,885</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <h6 class="no-margin">New Visitors</h6>
                                <div class="live-tile" data-mode="carousel" data-speed="750" data-delay="3000" data-height="24">
                                    <div>
                                        <p class="value5">1,332</p>
                                    </div>
                                    <div>
                                        <p class="value5">20.1%</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <h6 class="no-margin">Bounce Rate</h6>
                                <div class="live-tile" data-mode="carousel" data-speed="750" data-delay="3000" data-height="24">
                                    <div>
                                        <p class="value5">217</p>
                                    </div>
                                    <div>
                                        <p class="value5">2.3%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-md-6">
                <section class="widget widget-card bg-gray">
                    <div class="widget-body clearfix">
                        <div class="live-tile" data-mode="fade" data-speed="750" data-delay="4000" data-height="100">
                            <div class="bg-gray text-white">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <span class="widget-icon">
                                            <i class="glyphicon glyphicon-globe"></i>
                                        </span>
                                    </div>
                                    <div class="col-xs-9">
                                        <h6 class="no-margin">ORDERS</h6>
                                        <p class="h2 no-margin fw-normal">82,765</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h6 class="no-margin">Avg. Time</h6>
                                        <p class="value5">2:56</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <h6 class="no-margin">Last Week</h6>
                                        <p class="value5">374</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-white">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <span class="widget-icon">
                                            <i class="glyphicon glyphicon-certificate"></i>
                                        </span>
                                    </div>
                                    <div class="col-xs-9">
                                        <h6 class="no-margin">PICKED ORDERS</h6>
                                        <p class="h2 no-margin fw-normal">13.8%</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h6 class="no-margin">Basic</h6>
                                        <p class="value5">3,692</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <h6 class="no-margin">Advanced</h6>
                                        <p class="value5">1,441</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-md-6">
                <section class="widget widget-card bg-success text-white">
                    <div class="widget-body clearfix">
                        <div class="row">
                            <div class="col-xs-3">
                                <span class="widget-icon">
                                    <i class="glyphicon glyphicon-usd"></i>
                                </span>
                            </div>
                            <div class="col-xs-9">
                                <h6 class="no-margin">TOTAL PROFIT</h6>
                                <p class="h2 no-margin fw-normal">$7,448</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <h6 class="no-margin">Last Month</h6>
                                <p class="value5">$83,541</p>
                            </div>
                            <div class="col-xs-6">
                                <h6 class="no-margin">Last Week</h6>
                                <p class="value5">$17,926</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <section class="widget widget-chart-stats-simple">
                    <header>
                        <div class="row">
                            <div class="col-xs-3">
                                <h6>
                                    Total Sales
                                </h6>
                                <p class="value5">
                                    January, 2014
                                </p>
                            </div>
                            <div class="col-xs-3">
                                <h5>
                                    <small>Best</small>
                                </h5>
                                <p class="value6 fs-sm">
                                    March, 2013 + 1
                                </p>
                            </div>
                        </div>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div class="chart-stats">
                            <p class="text-muted fs-mini mt-xs">
                                <i class="fa fa-map-marker fa-5x pull-left"></i>
                                <span class="fw-semi-bold text-gray-dark">Jess:</span> Seems like statically it's getting impossible to achieve any sort of
                                results in nearest future. The only thing we can hope for is pressing one of these two buttons:
                            </p>
                            <div class="btn-toolbar">
                                <button class="btn btn-xs btn-success">Accept</button>
                                <button class="btn btn-xs btn-secondary">Reject</button>
                            </div>
                        </div>
                        <div class="chart bg-body-light">
                            <div id="chart-stats-simple" class="chart-inner"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="widget widget-chart-stats-simple">
                    <header>
                        <h6 class="m-b-0">
                            <span class="fw-semi-bold">Budget</span> <span class="label label-pill label-danger">2017</span>
                        </h6>
                        <span class="text-muted fs-mini">monthly report will be available in <a href="#">6 hours</a></span>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <div class="chart-stats">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="clearfix m-t-1">
                                        <h6 class="pull-xs-left fs-mini text-muted mb-xs">
                                            Income
                                        </h6>
                                        <p class="pull-xs-right h6 mb-xs">
                                            <span class="fw-semi-bold">$14,595</span>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                        <h6 class="pull-xs-left fs-mini no-margin text-muted">
                                            Recent
                                        </h6>
                                        <p class="pull-xs-right h6">
                                            <span class="fw-semi-bold">$7,647</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 text-xs-right m-t-1">
                                    <h6 class="text-muted fs-mini mb-xs">Inqueries</h6>
                                    <p class="fw-semi-bold h6">73 at 14am</p>
                                </div>
                                <div class="col-md-4 text-xs-right m-t-1">
                                    <h6 class="text-muted fs-mini mb-xs">Last Updated</h6>
                                    <p class="fw-semi-bold h6">23.06.2013</p>
                                </div>
                            </div>
                        </div>
                        <div class="chart bg-body-light">
                            <div id="chart-stats-simple-2" class="chart-inner"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <section class="widget">
                    <div class="widget-controls">
                        <a href="#"><i class="fa fa-refresh"></i></a>
                        <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                    <div class="widget-body">
                        <div class="widget-top-overflow windget-padding-md clearfix bg-warning text-white">
                            <h3 class="mt-lg mb-lg">Sing - <span class="fw-semi-bold">Next Generation</span> Admin Dashboard
                                Template</h3>
                            <ul class="tags text-white pull-xs-right">
                                <li><a href="#">features</a></li>
                            </ul>
                        </div>
                        <div class="post-user mt-n-lg">
                            <span class="thumb-lg pull-xs-left mr">
                                <img class="img-circle" src="demo/img/people/a4.jpg" alt="...">
                            </span>
                            <h6 class="mt-s m-b-1 fw-normal text-white">Jeremy <small class="text-white text-light">@sing</small></h6>
                            <p class="fs-mini text-muted"><time>25 mins</time> &nbsp; <i class="fa fa-map-marker"></i> &nbsp; near Amsterdam</p>
                        </div>
                        <p class="text-light fs-mini">Lots of cool stuff is happening around you. Just calm down for a sec and listen. Colors, sounds,
                            thoughts, ideas. </p>
                    </div>
                    <footer class="bg-body-light">
                        <ul class="post-links">
                            <li><a href="#">1 hour</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Comment</a></li>
                        </ul>
                        <ul class="post-comments mt mb-0">
                            <li>
                                <span class="thumb-xs avatar pull-xs-left mr-sm">
                                    <img class="img-circle" src="demo/img/people/a1.jpg" alt="...">
                                </span>
                                <div class="comment-body">
                                    <h6 class="author fs-sm fw-semi-bold">Ignacio Abad <small>6 mins ago</small></h6>
                                    <p class="fs-mini">Hey, have you heard anything about that?</p>
                                </div>
                            </li>
                            <li>
                                <span class="thumb-xs avatar pull-xs-left mr-sm">
                                    <img class="img-circle" src="img/avatar.png" alt="...">
                                </span>
                                <div class="comment-body">
                                    <input class="form-control form-control-sm" type="text" placeholder="Write your comment...">
                                </div>
                            </li>
                        </ul>
                    </footer>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="widget">
                    <div class="widget-controls">
                        <a href="#"><i class="fa fa-refresh"></i></a>
                        <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                    <div class="widget-body">
                        <div class="widget-top-overflow text-white">
                            <img src="demo/img/pictures/17.jpg">
                            <ul class="tags text-white pull-xs-right">
                                <li><a href="#">design</a></li>
                                <li><a href="#">white</a></li>
                            </ul>
                        </div>
                        <div class="post-user mt-sm">
                            <span class="thumb pull-xs-left mr">
                                <img class="img-circle" src="demo/img/people/a6.jpg" alt="...">
                            </span>
                            <h6 class="mb-xs mt-xs"><span class="fw-semi-bold">Maryna</span> Nilson</h6>
                            <p class="fs-mini text-muted"><time>25 mins</time> &nbsp; <i class="fa fa-map-marker"></i> &nbsp; near Amsterdam</p>
                        </div>
                        <p class="text-light fs-mini m">Lots of cool stuff is happening around you. Just calm down for a sec and listen. Colors, sounds,
                            thoughts, ideas. </p>
                    </div>
                    <footer class="bg-body-light">
                        <ul class="post-links no-separator">
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> 427</span></a></li>
                            <li><a href="#"><i class="fa fa-comment"></i> 98</a></li>
                        </ul>
                    </footer>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="widget">
                    <div class="widget-controls">
                        <a href="#"><i class="fa fa-refresh"></i></a>
                        <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                    <div class="widget-body">
                        <div class="post-user mt-n-xs">
                            <span class="thumb pull-xs-left mr">
                                <img class="img-circle" src="demo/img/people/a2.jpg" alt="...">
                            </span>
                            <h6 class="mb-xs mt-xs">Jess <span class="fw-semi-bold">@jessica</span></h6>
                            <p class="fs-mini text-muted"><time>25 mins</time> &nbsp; <i class="fa fa-map-marker"></i> &nbsp; near Amsterdam</p>
                        </div>
                        <div class="widget-middle-overflow windget-padding-md clearfix bg-danger text-white">
                            <h3 class="mt-lg mb-lg">Sing - <span class="fw-semi-bold">Next Generation</span> Admin Dashboard
                                Template</h3>
                            <ul class="tags text-white pull-xs-right">
                                <li><a href="#">design</a></li>
                            </ul>
                        </div>
                        <p class="text-light fs-mini mt-sm">Lots of cool stuff is happening around you. Just calm down for a sec and listen. Colors, sounds,
                            thoughts, ideas. </p>
                    </div>
                    <footer class="bg-body-light">
                        <ul class="post-links">
                            <li><a href="#">1 hour</a></li>
                            <li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a></li>
                            <li><a href="#">Comment</a></li>
                        </ul>
                    </footer>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <section class="widget">
                    <div class="widget-image text-white">
                        <img src="demo/img/pictures/18.jpg">
                        <h4 class="title">
                            <span class="fw-normal">Sunnyvale</span>, CA
                        </h4>
                        <div class="info text-xs-right">
                            <i class="fa fa-map-marker h2 no-margin mr-xs"></i>
                            <h6 class="no-margin mt-xs fs-mini">FLORIDA, USA</h6>
                            <p class="fs-smaller">9:41 am</p>
                        </div>
                        <div class="forecast">
                            <div class="row">
                                <div class="col-xs-6 col-md-4">
                                    <div class="row mt-xs">
                                        <div class="col-xs-6 no-padding">
                                            <canvas id="clear-day" width="40" height="40"></canvas>
                                            <p class="no-margin fw-normal mt-n-xs">sunny</p>
                                        </div>
                                        <div class="col-xs-6 no-padding">
                                            <h6 class="fw-semi-bold no-margin">SUNDAY</h6>
                                            <p class="value2 ">29&deg;</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-md-2 no-padding">
                                    <h6 class="no-margin">TOMMOROW</h6>
                                    <canvas class="mt-xs" id="partly-cloudy-day" width="28" height="28"></canvas>
                                    <p class="no-margin fw-semi-bold">32&deg;</p>
                                </div>
                                <div class="col-xs-3 col-md-2 no-padding">
                                    <h6 class="no-margin">TUE</h6>
                                    <canvas class="mt-xs" id="rain" width="28" height="28"></canvas>
                                    <p class="no-margin fw-semi-bold">25&deg;</p>
                                </div>
                                <div class="col-xs-3 col-md-2 no-padding">
                                    <h6 class="no-margin">WED</h6>
                                    <canvas class="mt-xs" id="clear-day-3" width="28" height="28"></canvas>
                                    <p class="no-margin fw-semi-bold">28&deg;</p>
                                </div>
                                <div class="col-xs-3 col-md-2 no-padding">
                                    <h6 class="no-margin">THU</h6>
                                    <canvas class="mt-xs" id="partly-cloudy-day-3" width="28" height="28"></canvas>
                                    <p class="no-margin fw-semi-bold">17&deg;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-md-6">
                        <section class="widget no-padding text-xs-center">
                            <div class="row no-margin display-flex">
                                <div class="col-xs-5 bg-danger btlr bblr">
                                    <canvas class="m-t-2" id="clear-day-1" width="62" height="62"></canvas>
                                    <h6 class="text-white display-inline-block fw-normal">FRIDAY</h6>
                                </div>
                                <div class="col-xs-7">
                                    <p class="value0 text-danger mt-n-xs mr-n-xs">
                                        33&deg;
                                    </p>
                                    <p class="mt-n-sm fw-normal fs-smaller text-muted no-margin">WINDY</p>
                                    <div class="row">
                                        <div class="col-xs-6 no-padding">
                                            <canvas id="wind-1" width="20" height="20"></canvas>
                                            <div class="display-inline-block">
                                                <p class="value6">4</p>
                                                <p class="fs-sm no-margin mt-n-xs text-muted fw-normal">MPS</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 no-padding">
                                            <canvas id="rain-1" width="20" height="20"></canvas>
                                            <div class="display-inline-block">
                                                <p class="value6">52</p>
                                                <p class="fs-sm no-margin mt-n-xs text-muted fw-normal">MM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-6">
                        <section class="widget no-padding text-xs-center">
                            <div class="row no-margin">
                                <div class="col-xs-7 bg-success btlr bblr">
                                    <p class="value0 text-white mt-sm mr-n-xs">
                                        20&deg;
                                    </p>
                                    <p class="text-white display-inline-block fw-normal display-inline-block mb">SUNDAY</p>
                                </div>
                                <div class="col-xs-5">
                                    <canvas class="mt" id="partly-cloudy-day-1" width="60" height="60"></canvas>
                                    <p class="fw-normal fs-smaller text-muted">WINDY</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <section class="widget widget-chart-simple widget-sm">
                            <div class="widget-body">
                                <h6 class="mb-xs fw-normal">
                                    Nasdaq
                                </h6>
                                <div class="chart-value">
                                    355 <span class="fw-semi-bold">USD</span>
                                </div>
                                <p>Last Sale 354.94 USD</p>
                                <div class="chart">
                                    <div id="chart-simple"></div>
                                </div>
                            </div>
                        </section>
                        <section class="widget widget-sm bg-primary text-white">
                            <div class="widget-body">
                                <p class="mb-xs"><i class="fa fa-arrow-circle-up fa-3x opacity-50"></i></p>
                                <p class="text-light mb"><time>10 June</time></p>
                                <h3>
                                    Lots of <span class="fw-semi-bold">new</span> amazing possibilities
                                </h3>
                                <p class="fs-mini mt">
                                    <span class="fw-semi-bold">214</span> likes
                                    &nbsp;
                                    <span class="fw-semi-bold">96</span> comments
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-6">
                        <section class="widget widget-sm bg-success text-white">
                            <div class="widget-body">
                                <p class="mb-xs"><i class="fa fa-comments fa-2x"></i></p>
                                <h5>
                                    Lots of <span class="fw-semi-bold">possibilities</span> to customize your
                                    new <span class="fw-semi-bold">admin template</span>
                                </h5>
                                <p class="fs-mini mt-sm">
                                    <span class="fw-semi-bold">83</span> likes
                                    &nbsp;
                                    <span class="fw-semi-bold">96</span> comments
                                    &nbsp;
                                    <span class="fw-semi-bold">7</span> shares
                                </p>
                                <p class="text-light fs-smaller mt-lg"><time>10 June</time></p>
                            </div>
                        </section>
                        <section class="widget widget-sm">
                            <header>
                                <h6>Server <span class="fw-semi-bold">Overview</span></h6>
                            </header>
                            <div class="widget-body">
                                <div class="clearfix fs-mini">
                                    <span class="pull-xs-right no-margin fw-semi-bold">CPU</span>
                                    <span class="fs-mini">60% / 37°C / 3.3 Ghz</span>
                                </div>
                                <div class="bg-gray-lighter progress-bar">
                                    <progress class="progress progress-primary progress-xs" value="100" max="100" style="width: 70%"></progress>
                                </div>
                                <div class="clearfix fs-mini mt">
                                    <span class="pull-xs-right no-margin fw-semi-bold">Mem</span>
                                    <span class="fs-mini">29% / 4GB (16 GB)</span>
                                </div>
                                <div class="bg-gray-lighter progress-bar">
                                    <progress class="progress progress-xs progress-warning" value="100" max="100" style="width: 29%"></progress>
                                </div>
                                <div class="clearfix fs-mini mt">
                                    <span class="pull-xs-right no-margin fw-semi-bold">LAN</span>
                                    <span class="fs-mini">6 Mb/s <i class="fa fa-caret-down"></i> &nbsp; 3 Mb/s <i class="fa fa-caret-up"></i></span>
                                </div>
                                <div class="bg-gray-lighter progress-bar">
                                    <progress class="progress progress-xs progress-danger" value="100" max="100" style="width: 48%"></progress>
                                </div>
                                <div class="clearfix fs-mini mt">
                                    <span class="pull-xs-right no-margin fw-semi-bold">Access</span>
                                    <span class="fs-mini">17 Mb/s <i class="fa fa-caret-up"></i> &nbsp; (+18%)</span>
                                </div>
                                <div class="bg-gray-lighter progress-bar">
                                    <progress class="progress progress-xs progress-success" value="100" max="100" style="width: 64%"></progress>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <section class="widget">
                    <div class="widget-body">
                        <div id="map-years-mapael" class="mapael">
                            <div class="stats">
                                <h6 class="text-gray-dark">YEARLY <span class="fw-semi-bold">DISTRIBUTIONS</span></h6>
                                <span class="pull-xs-left mr-xs">
                                            <small><span class="circle bg-warning text-gray-dark"><i class="fa fa-plus"></i></span></small>
                                        </span>
                                <p class="h5 no-margin">
                                    <strong>17% last year</strong>
                                </p>
                            </div>
                            <div class="map">
                                <span>Alternative content for the map</span>
                            </div>
                            <ul class="map-controls nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-years-map-year="2008">2008</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="#" class="nav-link" data-years-map-year="2009">2009</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-years-map-year="2010">2010</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-years-map-year="2011">2011</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-years-map-year="2012">2012</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-years-map-year="2013">2013</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="widget">
                    <header class="bb">
                        <h6>Recent <span class="fw-semi-bold">Chats</span></h6>
                    </header>
                    <div class="widget-body">
                        <div class="widget-middle-overflow">
                            <ul class="list-group widget-chat-list-group">
                                <li class="list-group-item">
                                <span class="thumb">
                                    <img class="img-circle" src="demo/img/people/a6.jpg" alt="...">
                                </span>
                                    <time class="time">10 sec ago</time>
                                    <h6 class="sender">Chris Gray</h6>
                                    <p class="body">Hey! What's up? So much time since we saw each other there</p>
                                </li>
                                <li class="list-group-item on-right">
                                <span class="thumb">
                                    <img class="img-circle" src="img/avatar.png" alt="...">
                                </span>
                                    <time class="time">10 sec ago</time>
                                    <h6 class="sender">John Doe</h6>
                                    <p class="body">True! Totally makes sense. But how do we find that?</p>
                                </li>
                                <li class="list-group-item">
                                <span class="thumb">
                                    <img class="img-circle" src="demo/img/people/a6.jpg" alt="...">
                                </span>
                                    <time class="time">10 sec ago</time>
                                    <h6 class="sender">Chris Gray</h6>
                                    <p class="body">OK, but so now what? What should we do now? Not sure actually.</p>
                                </li>
                                <li class="list-group-item on-right">
                                <span class="thumb">
                                    <img class="img-circle" src="img/avatar.png" alt="...">
                                </span>
                                    <time class="time">10 sec ago</time>
                                    <h6 class="sender">John Doe</h6>
                                    <p class="body">Hey guys, didn't you notice this conversation is sort of jubberish?</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <footer class="bg-body-light bt">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Your message">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-secondary">
                                    Send
                                </button>
                            </span>
                        </div>
                    </footer>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="widget bg-gray-dark text-white">
                    <div class="widget-body">
                        <h5 class="mb-lg">Recent <span class="fw-semi-bold">Update</span></h5>
                        <h6>Node.js <span class="fw-semi-bold">4.0.1 distribution</span></h6>
                        <div class="bg-gray-lighter progress-bar">
                            <progress class="progress progress-xs progress-danger" value="100" max="100" style="width: 77%"></progress>
                        </div>
                        <p class="mt-sm mb">
                            <small><span class="circle bg-warning text-gray-dark"><i class="glyphicon glyphicon-chevron-up"></i></span></small>
                            <strong>17% higher</strong>
                            than last month</p>
                        <p class="fs-smaller text-gray-lighter mb-0">Remaining hours</p>
                        <a class="btn btn-sm btn-gray pull-xs-right ml-xs" href="#">
                            <i class="fa fa-compress"></i> track
                        </a>
                        <a class="btn btn-sm btn-gray pull-xs-right" href="#">
                            <i class="fa fa-pause"></i> pause
                        </a>
                        <p class="value5">2h 56m</p>
                        <br>
                        <div id="realtime1" class="chart-overflow-bottom text-gray-dark"></div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <section class="widget windget-padding-lg">
                    <div class="widget-body clearfix">
                        <div class="live-tile" data-mode="carousel" data-speed="750" data-delay="3000" data-height="313">
                            <div>
                                <h3 class="m-t-1">Basic & <span class="fw-semi-bold">Advanced</span> Features</h3>
                                <p class="value5 mt-lg">All you need in one app</p>
                                <div class="h5 mt-lg mb-lg">
                                    <i class="fa fa-quote-left opacity-50"></i>
                                    That's awesome!
                                    <i class="fa fa-quote-right opacity-50"></i>
                                </div>
                                <div class="widget-footer-bottom">
                                    <p>Attention to what's really important</p>
                                    <button class="btn btn-info btn-block mt">Order Now!</button>
                                </div>
                            </div>
                            <div>
                                <h3 class="m-t-1">Beautiful <span class="fw-semi-bold">Thing</span></h3>
                                <p class="value5 mt-lg">Life-time package support</p>
                                <div class="h5 mt-lg mb-lg">
                                    <i class="fa fa-quote-left opacity-50"></i>
                                    That's awesome!
                                    <i class="fa fa-quote-right opacity-50"></i>
                                </div>
                                <div class="widget-footer-bottom">
                                    <p>Attention to what's really important</p>
                                    <button class="btn btn-inverse btn-block mt"><span class="fw-semi-bold text-warning">Ready?</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-3">
                <section class="widget widget-chart-changes">
                    <div class="widget-controls">
                        <a href="#"><i class="fa fa-refresh"></i></a>
                        <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                    <div class="widget-body">
                        <div class="chart bg-success btlr btrr">
                            <p class="chart-value"><i class="fa fa-caret-up"></i> 352.79</p>
                            <p class="chart-value-change">+2.04 (1.69%)</p>
                            <div id="chart-changes"></div>
                        </div>
                        <h5 class="chart-title"><span class="fw-normal">Salt Lake City</span>, Utah</h5>
                        <p class="deemphasize">Today 13:34</p>
                        <div class="mt">
                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="h5 no-margin">18.7M</p>
                                    <p class="deemphasize">Shares Traded</p>
                                </div>
                                <div class="col-xs-6 text-xs-right">
                                    <p class="h5 no-margin">19.9B</p>
                                    <p class="deemphasize">Market Cap</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt">
                            <div class="row">
                                <div class="col-xs-6">
                                    <p class="h3 no-margin text-success fw-semi-bold">+120.93</p>
                                    <p class="deemphasize">Yearly Change</p>
                                </div>
                                <div class="col-xs-6 text-xs-right">
                                    <span id="chart-changes-year"></span>
                                    <p class="deemphasize">GOOG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-3">
                <section class="widget windget-padding-lg bg-primary text-white">
                    <div class="widget-body clearfix">
                        <div class="live-tile" data-mode="carousel" data-speed="300" data-delay="3000" data-height="313">
                            <div>
                                <p class="h5 mt-xs">
                                    <i class="fa fa-quote-left opacity-50"></i>
                                    Thanks for the awesome support. That's awesome!
                                    <i class="fa fa-quote-right opacity-50"></i>
                                </p>
                                <div class="widget-footer-bottom">
                                    <span class="thumb pull-xs-left mr">
                                        <img class="img-circle" src="demo/img/people/a4.jpg" alt="...">
                                    </span>
                                    <h5 class="no-margin mb-xs"><span class="fw-semi-bold">Miha</span> Koshir</h5>
                                    <p class="text-light">@miha</p>
                                </div>
                            </div>
                            <div>
                                <div class="clearfix mt-xs">
                                    <span class="thumb pull-xs-left mr">
                                        <img class="img-circle" src="demo/img/people/a3.jpg" alt="...">
                                    </span>
                                    <h5 class="no-margin mb-xs"><span class="fw-semi-bold">Maryna</span> Ess</h5>
                                    <p class="text-light">@ess</p>
                                </div>
                                <div class="widget-footer-bottom">
                                    <p class="h5">
                                        <i class="fa fa-quote-left opacity-50"></i>
                                        Could have never imagined it would be so great!
                                        <i class="fa fa-quote-right opacity-50"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-3">
                <div class="live-tile" data-mode="flip" data-direction="horizontal"
                     data-speed="600" data-delay="3000" data-height="373"
                     data-play-onhover="true">
                    <div>
                        <section class="widget windget-padding-lg widget-md bg-gray-dark text-white">
                            <div class="widget-body widget-body-container">
                                <div class="text-xs-center">
                                    <i class="fa fa-child text-warning fa-5x"></i>
                                </div>
                                <h4 class="fw-normal m-t-1">Sing Web App</h4>
                                <div class="widget-footer-bottom">
                                    <div class="mb-sm">Cutting-edge tech and design delivered</div>
                                    <p><button class="btn btn-secondary btn-block">Hover over me!</button></p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div>
                        <section class="widget windget-padding-lg widget-md">
                            <div class="widget-body widget-body-container">
                                <div class="text-xs-center">
                                    <i class="fa fa-globe text-primary fa-5x"></i>
                                </div>
                                <h4 class="fw-normal m-t-1">Join The Web Now!</h4>
                                <div class="widget-footer-bottom">
                                    <div class="mb-sm">Cutting-edge tech and design delivered</div>
                                    <p><button class="btn btn-gray btn-block">Join now!</button></p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
<!-- The Loader. Is shown when pjax happens -->
<div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
</div>

<!-- common libraries. required for every page-->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-pjax/jquery.pjax.js"></script>
<script src="vendor/tether/dist/js/tether.js"></script>
<script src="vendor/bootstrap/js/dist/util.js"></script>
<script src="vendor/bootstrap/js/dist/collapse.js"></script>
<script src="vendor/bootstrap/js/dist/dropdown.js"></script>
<script src="vendor/bootstrap/js/dist/button.js"></script>
<script src="vendor/bootstrap/js/dist/tooltip.js"></script>
<script src="vendor/bootstrap/js/dist/alert.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/widgster/widgster.js"></script>
<script src="vendor/pace.js/pace.js" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
<script src="vendor/jquery-touchswipe/jquery.touchSwipe.js"></script>
<script src="js/bootstrap-fix/button.js"></script>

<!-- common app js -->
<script src="js/settings.js"></script>
<script src="js/app.js"></script>

<!-- page specific libs -->
<script src="vendor/underscore/underscore.js"></script>
<script src="vendor/jquery.sparkline/index.js"></script>
<script src="vendor/d3/d3.min.js"></script>
<script src="vendor/rickshaw/rickshaw.min.js"></script>
<script src="vendor/raphael/raphael-min.js"></script>
<script src="vendor/jQuery-Mapael/js/jquery.mapael.js"></script>
<script src="vendor/jQuery-Mapael/js/maps/usa_states.js"></script>
<script src="vendor/jQuery-Mapael/js/maps/world_countries.js"></script>
<script src="vendor/flot/jquery.flot.js"></script>
<script src="vendor/MetroJS/release/MetroJs.Full/MetroJs.js"></script>
<script src="vendor/skycons/skycons.js"></script>

<!-- page specific js -->
<script src="demo/js/_fake-world-data.js"></script>
<script src="js/widgets.js"></script>

</body>
</html>