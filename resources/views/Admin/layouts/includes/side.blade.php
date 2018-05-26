<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">Dhaka</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Mirpur
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>





                    <li class="@yield('add_temperature')"><a href="/admin/user/create"><i class="icon-add"></i> <span>Add Temperature</span></a></li>
                    <li class="@yield('view_temperature')"><a href="/admin/user/show"><i class="icon-cloud"></i> <span>View Temperature</span></a></li>
                    <li class="@yield('view_chartline')"><a href="/admin/user/lineGraph"><i class="icon-bubble-lines3"></i> <span>Chart Line</span></a></li>
                    <!-- /main -->



                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>