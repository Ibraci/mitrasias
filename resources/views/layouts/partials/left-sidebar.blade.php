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
            <li class="no-padding active"><a class="waves-effect waves-grey " href="/"><i class="material-icons">search</i>Search</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="#"><i class="material-icons">add_to_queue</i>Enquiry<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="sub-menu">
                    <li><a href="/leads">Leads</a></li>
                    <li><a href="/enquiry">Enquiry</a></li>
                </ul>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="/students"><i class="material-icons">people</i>Students</a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="#registrations"><i class="material-icons">note_add</i>Registrations</a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="#courses"><i class="material-icons">book</i>Courses</a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="/new-registration"><i class="material-icons">bookmark</i>Batch</a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="#"><i class="material-icons">email</i>Communication<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="sub-menu">
                    <li><a href="/leads">SMS</a></li>
                    <li><a href="/enquiry">E-Mail</a></li>
                </ul>
            </li>
        </ul>
        <div class="footer">
            <p class="copyright">Mitras IAS. © {{ date('Y') }}</p>
        </div>
    </div>
</aside>
