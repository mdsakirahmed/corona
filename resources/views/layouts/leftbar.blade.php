<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{ route('BackendControllerDashboard') }}" class="logo logo-large"><img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="logo"></a>
            <a href="{{ route('BackendControllerDashboard') }}" class="logo logo-small"><img src="{{ asset('assets/images/small_logo.svg') }}" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Profilebar -->
        <div class="profilebar text-center">
            <img src="{{ asset('assets/images/users/profile.svg') }}" class="img-fluid" alt="profile">
            <div class="profilename">
              <h5 class="text-red"><b>{{ Auth::user()->name }}</b></h5>
              <p>{{ Auth::user()->email }}</p>
              <p>{{ Auth::user()->phone }}</p>
            </div>
            <div class="userbox">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="{{ asset('assets/images/svg-icon/user.svg') }}" class="img-fluid" alt="user"></a></li>
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="{{ asset('assets/images/svg-icon/email.svg') }}" class="img-fluid" alt="email"></a></li>
                    <li class="list-inline-item">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"
                           class="profile-icon">
                            <img src="{{ asset('assets/images/svg-icon/logout.svg') }}" class="img-fluid" alt="logout">
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
              </div>
        </div>
        <!-- End Profilebar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li class="vertical-header">Main</li>
                <li>
                    <a href="{{ route('BackendControllerDashboard') }}">
                      <img src="{{ asset('assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Dashboard</span><i class="feather"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('BackendControllerQuestionAnswer') }}">
                        <img src="{{ asset('assets/images/svg-icon/layouts.svg') }}" class="img-fluid" alt="layouts"><span>Question</span><i class="feather"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('BackendControllerUser') }}">
                        <img src="{{ asset('assets/images/svg-icon/layouts.svg') }}" class="img-fluid" alt="layouts"><span>User</span><i class="feather"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('BackEndControllerSetting') }}">
                        <img src="{{ asset('assets/images/svg-icon/layouts.svg') }}" class="img-fluid" alt="layouts"><span>Setting</span><i class="feather"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('CertificateSetupControllerCertificateSetup') }}">
                        <img src="{{ asset('assets/images/svg-icon/layouts.svg') }}" class="img-fluid" alt="layouts"><span>Certificate Setup</span><i class="feather"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
