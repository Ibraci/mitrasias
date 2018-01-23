<!DOCTYPE html>
<html lang="en">
<head>

        <!-- Title -->
        <title>Afra Group</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/plugins/materialize/css/materialize.min.css')}}"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{asset('assets/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Theme Styles -->
        <link href="{{asset('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="red darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">
                            <span class="chapter-title">Afra Group</span>
                        </div>
                    </div>
                </nav>
            </header>
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/afra.png" class="circle" alt="" >
                            <br>
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>Admin<i class="material-icons right">arrow_drop_down</i></p>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>

                            <li class="divider"></li>
                            <li class="no-padding">
                                <a href="logout.php" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding active"><a class="waves-effect waves-grey " href="home.php"><i class="material-icons">settings_input_svideo</i>Home</a></li>
                    <li class="no-padding">
                        <a href="form-wizard.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>New Barcode</a>

                    </li>
                    <li class="no-padding">
                        <a  href="adduser.php" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>Add New User</a>

                    </li>
                </ul>
                <div class="footer">
                    <p class="copyright">Tech Cloud Ltd. ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
                </div>
            </aside>
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                    <div class="row">
                                        <form class="col s12" method="GET" action="">
                                            <div class="row">

                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">phone</i>
                                                    <input id="icon_telephone" type="text" class="validate" name="phone">
                                                    <label for="icon_telephone">Telephone</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">email</i>
                                                    <input id="icon_telephone" type="email" class="validate" name="email">
                                                    <label for="icon_telephone">Email</label>
                                                </div>

                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="icon_prefix" type="text" class="validate" name="f_name">
                                                    <label for="icon_prefix">First Name</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="icon_prefix" type="text" class="validate" name="m_name">
                                                    <label for="icon_prefix">Middle Name</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="icon_prefix" type="text" class="validate" name="l_name">
                                                    <label for="icon_prefix">Last Name</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <i class="material-icons prefix">book</i>
                                                    <select name="course">
                                                        <option value="" disabled selected>Choose your option</option>
                                                        <option value="#id">course</option>
                                                    </select>
                                                    <label>Courses</label>
                                                </div>
                                                <button class="btn waves-effect waves-light" type="submit" onclick="viewData()" name="submit">Submit
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <div class="page-footer">
                <div class="footer-grid container">
                    <div class="footer-l white">&nbsp;</div>
                    <div class="footer-grid-l white">
                    </div>
                    <div class="footer-r white">&nbsp;</div>

                </div>
            </div>
        </div>

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>

        <script>
        function deletedc(x1) {

        if(confirm("Are you sure you want to delete this?"))
        {
        btn2 = $(x1).data('panel-id');

        $.ajax({
        url:"delectbarcode.php",
        method:"POST",
        data:{id:btn2},
        dataType:"text",
        success:function(data){
        alert(data);
        window.location="home.php"
        }
        });


        }
        }
        </script>
    </body>
</html>
