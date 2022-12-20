<div class="sidebar-menu">
    <ul class="menu">


            <li class='sidebar-title'>Main Menu</li>



            <li class="sidebar-item active ">
                <a href="{{ route ('home') }}" class='sidebar-link'>
                    <i data-feather="home" width="20"></i>
                    <span>Dashboard</span>
                </a>

            </li>

            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i data-feather="file-text" width="20"></i>
                    <span>Companies</span>
                </a>

                <ul class="submenu ">

                    <li>
                        <a href="{{ route ('company') }}">Add Company</a>
                    </li>

                    <li>
                        <a href="{{ route ('view.company') }}">View Companies</a>
                    </li>


                </ul>

            </li>


            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i data-feather="file-text" width="20"></i>
                    <span>Emplyees</span>
                </a>

                <ul class="submenu ">

                    <li>
                        <a href="{{ route ('employee') }}">Add Emplyee</a>
                    </li>

                    <li>
                        <a href="{{ route ('view.employee') }}">View Emplyees</a>
                    </li>


                </ul>

            </li>




                </ul>

            </li>




    </ul>
</div>
