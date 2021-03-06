<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
        <div class="sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="{{asset('assets/images/profile-image.png')}}" class="circle" alt="" >
                <br>
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>
                        {{ Auth::user()->first_name }}
                        <i class="material-icons right">arrow_drop_down</i>
                    </p>
                </a>
            </div>
        </div>
        <div class="sidebar-account-settings">
            <ul>
                <li class="divider"></li>
                <li class="no-padding">
                    <a href="/profile" class="waves-effect waves-grey"><i class="material-icons">person</i>Profile</a>
                </li>
                <li class="no-padding">
                    <a href="/logout" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                </li>
            </ul>
        </div>
        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
            <li class="no-padding active"><a class="waves-effect waves-grey " href="/enquiry"><i class="material-icons">search</i>Search</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="#"><i class="material-icons">add_to_queue</i>Enquiry<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="sub-menu">
                    <li><a href="/leads">Leads</a></li>
                    <li><a href="/enquiry">Enquiry</a></li>
                </ul>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="{{ route('students.index') }}"><i class="material-icons">people</i>Students</a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="{{ route('students.create') }}"><i class="material-icons">note_add</i>Admission</a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="{{ route('courses.index') }}"><i class="material-icons">book</i>Courses</a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="{{ route('batches.index') }}"><i class="material-icons">bookmark</i>Batches</a>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey" href="#"><i class="material-icons">email</i>Communication<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="sub-menu">
                    <li><a href="{{ route('sms.create') }}">SMS</a></li>
                    <li><a href="{{ route('emails.create') }}">E-Mail</a></li>
                </ul>
            </li>
        </ul>
        <div class="footer">
            <p class="copyright">Mitras IAS. © {{ date('Y') }}</p>
        </div>
    </div>
</aside>
