   <div class="sidebar" data-color="black" data-image="../../assets/img/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo">
            <a href="/Admin" class="logo-text">
                Programing Expert
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="/Admin" class="logo-text">
               PE
            </a>
        </div>

        <div class="sidebar-wrapper">

            <div class="user">
                <div class="photo">
                    <img src="../../assets/img/default-avatar.png" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="validation.html#collapseExample" class="collapsed">
                        {{Session::has('username') ? Session::get('username') : 'Username'}}
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li><a href="validation.html#">My Profile</a></li>
                            <li><a href="validation.html#">Edit Profile</a></li>
                            <li><a href="validation.html#">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                <li class="{{ Session::has('page') ? Session::get('page') == 'Dashboard' ? 'active' : '' : '' }}">
                    <a href="/Admin">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <li class="{{ Session::has('page') ? Session::get('page') == 'Blog' ? 'active' : Session::get('page') == 'Add New Blog' ? 'active' : '' : '' }}">
                    <a href="/Admin/blog">
                        <i class="pe-7s-note"></i>
                        <p>Blog Articles</p>
                    </a>
                </li>

                <li>
                    <a href="/Admin">
                        <i class="pe-7s-note2"></i>
                        <p>Edu Articles</p>
                    </a>
                </li>

                <li>
                    <a href="/Admin">
                        <i class="pe-7s-note2"></i>
                        <p>Programs</p>
                    </a>
                </li>

                <li>
                    <a href="/Admin">
                        <i class="pe-7s-note2"></i>
                        <p>Interview Questions</p>
                    </a>
                </li>

                <li>
                    <a href="/Admin">
                        <i class="pe-7s-graph"></i>
                        <p>Statistics</p>
                    </a>
                </li>

                <li>
                    <a href="/Admin">
                        <i class="pe-7s-tools"></i>
                        <p>Settings</p>
                    </a>
                </li>
                
                <li>
                    <a href="/Admin">
                        <i class="pe-7s-clock"></i>
                        <p>Crons</p>
                    </a>
                </li>

                <li>
                    <a href="/Admin">
                        <i class="pe-7s-clock"></i>
                        <p>Crons</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>