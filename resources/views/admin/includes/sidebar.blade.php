<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">

            <li>
                <a class="waves-effect waves-dark" href="{{route('dashboard')}}" aria-expanded="false">
                    <i class="icon-speedometer"></i>
                    <span class="hide-menu">Dashboard</span></a>

            </li>
            <li>
                <a class="waves-effect waves-dark" href="{{route('home')}}" target="_blank" aria-expanded="false">
                    <i class="icon-home" aria-hidden="true"></i>
                    <span class="hide-menu">website</span></a>

            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i>
                    <span class="hide-menu">Section Module</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('add.section')}}"><i class="icon-plus" aria-hidden="true"></i> Add section</a></li>
                    <li><a href="{{route('manage.section')}}"><i class="icon-settings" aria-hidden="true"></i> Manage section</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Carousel Module</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('add.carousel')}}"> <i class="icon-plus" aria-hidden="true"></i> Add carousel</a></li>
                    <li><a href="{{route('manage.carousel')}}"><i class="icon-settings" aria-hidden="true"></i> Manage carousel</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i>
                    <span class="hide-menu">About Module</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('add.about')}}"> <i class="icon-plus" aria-hidden="true"></i> Add About</a></li>
                    <li><a href="{{route('manage.about')}}"><i class="icon-settings" aria-hidden="true"></i> Manage About</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i>
                    <span class="hide-menu">Service Module</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('add.service')}}"><i class="icon-plus" aria-hidden="true"></i> Add service</a></li>
                    <li><a href="{{route('manage.service')}}"><i class="icon-settings" aria-hidden="true"></i> Manage service</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i>
                    <span class="hide-menu">Project Module</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="#">Add project</a></li>
                    <li><a href="#">Manage project</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i>
                    <span class="hide-menu">Team Module</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('add.member')}}"><i class="icon-plus" aria-hidden="true"></i> Add member</a></li>
                    <li><a href="{{route('manage.member')}}"><i class="icon-settings" aria-hidden="true"></i> Manage member</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i>
                    <span class="hide-menu">Blog Module</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('add.blog')}}"><i class="icon-plus" aria-hidden="true"></i> Add Blog</a></li>
                    <li><a href="{{route('manage.blog')}}"><i class="icon-settings" aria-hidden="true"></i> Manage Bloge</a></li>
                </ul>
            </li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i>
                    <span class="hide-menu">Comment Module</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('add.comment')}}"><i class="icon-plus" aria-hidden="true"></i> Add Comment</a></li>
                    <li><a href="{{route('manage.comment')}}"><i class="icon-settings" aria-hidden="true"></i> Manage Comment</a></li>
                </ul>
            </li>

            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i>
                    <span class="hide-menu">Setting Module</span></a>

                <ul aria-expanded="false" class="collapse">
                    <li><a href="#">Company Setting</a></li>

                </ul>
            </li>

        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
