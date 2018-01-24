<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
        <div class="sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="{{asset('assets/images/profile-image.png')}}" class="circle" alt="" >
                <br>
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>John Doe<i class="material-icons right">arrow_drop_down</i></p>
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
        <li class="no-padding active"><a class="waves-effect waves-grey " href="home.php"><i class="material-icons">search</i>Search</a></li>
        <li class="no-padding">
            <a href="/enquiry" class="collapsible-header waves-effect waves-grey"><i class="material-icons">mail_outline</i>Enquiry</a>
        </li>
        <li class="no-padding">
            <a  href="/new-registration" class="collapsible-header waves-effect waves-grey"><i class="material-icons">add</i>New Registration</a>
        </li>
        <li class="no-padding">
            <a  href="sms-email" class="collapsible-header waves-effect waves-grey"><i class="material-icons">email</i>SMS and Email</a>
        </li>
    </ul>
    <div class="footer">
        <p class="copyright">Mitras IAS. © {{ date('Y') }}</p>
    </div>
    </div>
</aside>
