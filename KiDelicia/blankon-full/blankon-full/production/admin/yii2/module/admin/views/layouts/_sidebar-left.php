 
<aside id="sidebar-left" class="<?php echo !empty($classLeft)? $classLeft : 'sidebar-circle' ?>">

    <!-- Start left navigation - profile shortcut -->
    <div class="sidebar-content">
        <div class="media">
            <a class="pull-left has-notif avatar" href="<?= Yii::$app->getUrlManager()->createUrl('admin/page/profile') ?>">
                <img src="<?= \Yii::getAlias('@asset') ?>/global/img/avatar/50/1.png" alt="admin">
                <i class="online"></i>
            </a>
            <div class="media-body">
                <h4 class="media-heading">Hello, <span>Lee</span></h4>
                <small>Web Designer</small>
            </div>
        </div>
    </div><!-- /.sidebar-content -->
    <!--/ End left navigation -  profile shortcut -->

    <!-- Start left navigation - menu -->
    <ul class="sidebar-menu">

        <!-- Start navigation - dashboard -->
        <li class="<?= (Yii::$app->controller->id == 'dashboard') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/dashboard/index') ?>">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Dashboard</span>
                <?= (Yii::$app->controller->id == 'dashboard') ? '<span class="selected"></span>' : '' ?>
            </a>
        </li>
        <!--/ End navigation - dashboard -->

        <!-- Start navigation - frontend themes -->
        <li class="<?= (Yii::$app->controller->id == 'frontend') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/frontend/themes') ?>">
                <span class="icon"><i class="fa fa-leaf"></i></span>
                <span class="text">Frontend themes</span>
                <?= (Yii::$app->controller->id == 'frontend') ? '<span class="selected"></span>' : '' ?>
            </a>
        </li>
        <!--/ End navigation - frontend themes -->

        <!-- Start navigation - blankon versions -->
        <li class="<?= (Yii::$app->controller->action->id == 'versions') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/blankon/versions') ?>">
                <span class="icon"><i class="fa fa-dropbox"></i></span>
                <span class="text">Blankon Versions</span>
                <?= (Yii::$app->controller->action->id == 'versions') ? '<span class="selected"></span>' : '' ?>
            </a>
        </li>
        <!--/ End navigation - blankon versions -->

        <!-- Start category apps -->
        <li class="sidebar-category">
            <span>APPS</span>
            <span class="pull-right"><i class="fa fa-trophy"></i></span>
        </li>
        <!--/ End category apps -->

        <!-- Start navigation - blog -->
        <li class="submenu <?= (Yii::$app->controller->id == 'blog') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-globe"></i></span>
                <span class="text">Blog</span>
                <span class="arrow"></span>
                <?= (Yii::$app->controller->id == 'blog') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'grid') ? 'active' : '' ?>">
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/blog/grid') ?>">Grid</a>
                </li>
                <li class="<?= (Yii::$app->controller->action->id == 'list') ? 'active' : '' ?>">
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/blog/list') ?>">List</a>
                </li>
                <li class="<?= (Yii::$app->controller->action->id == 'single') ? 'active' : '' ?>">
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/blog/single') ?>">Single</a>
                </li>
            </ul>
        </li>
        <!--/ End navigation - blog -->

        <!-- Start navigation - mail -->
        <li class="submenu <?= (Yii::$app->controller->id == 'mail') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-envelope"></i></span>
                <span class="text">Mail</span>
                <span class="arrow"></span>
                <?= (Yii::$app->controller->id == 'mail') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'inbox') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/mail/inbox') ?>">Inbox</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'compose') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/mail/compose') ?>">Compose mail</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'view') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/mail/view') ?>">View mail</a></li>
            </ul>
        </li>
        <!--/ End navigation - mail -->

        <!-- Start navigation - pages -->
        <li class="submenu <?= (Yii::$app->controller->id == 'page') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-file-o"></i></span>
                <span class="text">Pages</span>
                <span class="arrow"></span>
                <?= (Yii::$app->controller->id == 'page') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'gallery') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/gallery') ?>">Gallery</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'faq') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/faq') ?>">FAQ <span class="label label-danger pull-right">New</span></a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'invoice') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/invoice') ?>">Invoice</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'messages') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/messages') ?>">Messages</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'timeline') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/timeline') ?>">Timeline</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'profile') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/profile') ?>">Profile</a></li>
                
                
                <?php $searchSubs = ['searchcourse']?>
                
                <li class="submenu <?= (in_array(Yii::$app->controller->action->id, $searchSubs)) ? 'active' : '' ?>">
                    <a href="javascript:void(0);">Search<span class="arrow"></span></a>
                    <ul>
                        <li class="<?= (Yii::$app->controller->action->id == 'searchcourse') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/searchcourse') ?>">Courses</a></li>
                    </ul>
                </li>
                
                
                <li class="submenu">
                    <a href="javascript:void(0);">Error <span class="arrow"></span></a>
                    <ul>
                        <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/error403') ?>">Error 403</a></li>
                        <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/error404') ?>">Error 404</a></li>
                        <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/error500') ?>">Error 500</a></li>
                    </ul>
                </li>
                
                
                
                <li class="submenu">
                    <a href="javascript:void(0);">Account <span class="arrow"></span></a>
                    <ul>
                        <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/signin') ?>">Sign In</a></li>
                        <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/signintype2') ?>">Sign In Type 2</a></li>
                        <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/signup') ?>">Sign Up</a></li>
                        <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/lostpassword') ?>">Lost password</a></li>
                        <li><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/page/lockscreen') ?>">Lock Screen</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!--/ End navigation - pages -->

        <!-- Start category ui kit-->
        <li class="sidebar-category">
            <span>UI KIT</span>
            <span class="pull-right"><i class="fa fa-magic"></i></span>
        </li>
        <!--/ End category ui kit-->

        <!-- Start navigation - forms -->
        <li class="submenu <?= (Yii::$app->controller->id == 'form') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-list-alt"></i></span>
                <span class="text">Forms</span>
                <span class="arrow"></span>
                <?= (Yii::$app->controller->id == 'form') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'element') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/element') ?>">Element</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'advanced') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/advanced') ?>">Advanced</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'layout') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/layout') ?>">Layout</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'validation') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/validation') ?>">Validation</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'wizard') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/wizard') ?>">Wizard</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'wysiwyg') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/wysiwyg') ?>">Text Editor</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'xeditable') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/xeditable') ?>">X-Editable</a></li>
            </ul>
        </li>
        <!--/ End navigation - forms -->

        <!-- Start navigation - tables -->
        <li class="submenu <?= (Yii::$app->controller->id == 'table') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-table"></i></span>
                <span class="text">Tables</span>
                <span class="arrow"></span>
                <?= (Yii::$app->controller->id == 'table') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'default') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/table/default') ?>">Default</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'color') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/table/color') ?>">Color</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'datatable') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/table/datatable') ?>">Datatable</a></li>
            </ul>
        </li>
        <!--/ End navigation - tables -->

        <!-- Start navigation - maps -->
        <li class="submenu <?= (Yii::$app->controller->id == 'maps') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-map-marker"></i></span>
                <span class="text">Maps</span>
                <span class="arrow"></span>
                <?= (Yii::$app->controller->id == 'maps') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'google') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/maps/google') ?>">Google</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'vector') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/maps/vector') ?>">Vector</a></li>
            </ul>
        </li>
        <!--/ End navigation - maps -->

        <!-- Start navigation - charts -->
        <li class="submenu <?= (Yii::$app->controller->id == 'chart') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-signal"></i></span>
                <span class="text">Charts</span>
                <span class="arrow"></span>
                <?= (Yii::$app->controller->id == 'chart') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'flot') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/chart/flot') ?>">Flot</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'morris') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/chart/morris') ?>">Morris</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'chartjs') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/chart/chartjs') ?>">Chartjs</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'c3js') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/chart/c3js') ?>">C3js</a></li>
            </ul>
        </li>
        <!--/ End navigation - charts -->

        <!-- Start category development -->
        <li class="sidebar-category">
            <span>DEVELOP</span>
            <span class="pull-right"><i class="fa fa-code"></i></span>
        </li>
        <!--/ End category development -->

        <!-- Start development - components -->
        <li class="submenu <?= (Yii::$app->controller->id == 'component') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-cube"></i></span>
                <span class="text">Components</span>
                <span class="plus"></span>
                <?= (Yii::$app->controller->id == 'component') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'gridsystem') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/gridsystem') ?>">Grid System</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'buttons') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/buttons') ?>">Buttons</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'typography') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/typography') ?>">Typography</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'panels') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/panels') ?>">Panels</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'alerts') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/alerts') ?>">Alerts</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'modals') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/modals') ?>">Modals</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'video') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/video') ?>">Video <span class="label label-danger pull-right">New</span></a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'tabs') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/tabs') ?>">Tabs & Accordion</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'sliders') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/sliders') ?>">Sliders</a></li>
                
                
                <?php $subIcons = ['glyphicons','glyphiconspro','fontawesome','weathericons','mapicons','simplelineicons'] ?>
                <li class="submenu <?= (in_array(Yii::$app->controller->action->id,$subIcons)) ? 'active' : '' ?>">
                    <a href="javascript:void(0);">
                        <span class="text">Icons</span>
                        <span class="count label label-danger">6</span>
                        <span class="arrow"></span>
                    </a>
                    <ul>
                        <li class="<?= (Yii::$app->controller->action->id == 'glyphicons') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('admin/component/glyphicons') ?>">Glyphicons</a></li>
                        <li class="<?= (Yii::$app->controller->action->id == 'glyphiconspro') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('admin/component/glyphiconspro') ?>">Glyphicons PRO</a></li>
                        <li class="<?= (Yii::$app->controller->action->id == 'fontawesome') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('admin/component/fontawesome') ?>">Font Awesome</a></li>
                        <li class="<?= (Yii::$app->controller->action->id == 'weathericons') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('admin/component/weathericons') ?>">Weather Icons</a></li>
                        <li class="<?= (Yii::$app->controller->action->id == 'mapicons') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('admin/component/mapicons') ?>">Map Icons</a></li>
                        <li class="<?= (Yii::$app->controller->action->id == 'simplelineicons') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('admin/component/simplelineicons') ?>">Simple Line Icons <span class="label label-danger pull-right">NEW</span></a></li>
                    </ul>
                </li>
                <li class="<?= (Yii::$app->controller->action->id == 'other') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/component/other') ?>">Other</a></li>
            </ul>
        </li>
        <!--/ End development - components -->

        <!-- Start development - layouts -->
        <li class="submenu <?= (Yii::$app->controller->id == 'layout') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-columns"></i></span>
                <span class="text">Layouts</span>
                <span class="plus"></span>
                <?= (Yii::$app->controller->id == 'layout') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'blank') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/blank') ?>">Blank Page</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'boxed') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/boxed') ?>">Boxed Page</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'headerfixed') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/headerfixed') ?>">Header Fixed Page</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'sidebarfixed') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/sidebarfixed') ?>">Sidebar Fixed Page</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'sidebarminimize') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/sidebarminimize') ?>">Sidebar Minimize Page</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'sidebardefault') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/sidebardefault') ?>">Sidebar Default Page</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'sidebarboxed') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/sidebarboxed') ?>">Sidebar Box Page</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'sidebarrounded') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/sidebarrounded') ?>">Sidebar Rounded Page</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'sidebarcircle') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/sidebarcircle') ?>">Sidebar Circle Page</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'footerfixed') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/layout/footerfixed') ?>">Footer Fixed Page</a></li>
            </ul>
        </li>
        <!--/ End development - layouts -->

        <!-- Start development - sub menu -->
        <li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-align-left"></i></span>
                <span class="text">Sub Menu</span>
                <span class="plus"></span>
            </a>
            <ul>
                <!-- Start level 1 -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Level 1</span>
                        <span class="arrow"></span>
                    </a>
                    <ul>
                        <!-- Start level 2 -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <span class="text">Level 2</span>
                                <span class="fa fa-angle-double-right pull-right arrow"></span>
                            </a>
                            <ul>
                                <!-- Start level 3 -->
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <span class="text">Level 3</span>
                                        <span class="fa fa-angle-double-right pull-right arrow"></span>
                                    </a>
                                    <ul>
                                        <!-- Start level 4 -->
                                        <li class="submenu">
                                            <a href="javascript:void(0);">
                                                <span class="text">Level 4</span>
                                                <span class="fa fa-angle-double-right pull-right arrow"></span>
                                            </a>
                                            <ul>
                                                <!-- Start level 5 -->
                                                <li>
                                                    <a href="javascript:void(0);">Level 5</a>
                                                </li>
                                                <!--/ End level 5 -->
                                                <li>
                                                    <a href="javascript:void(0);">Level 5</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Level 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End level 4 -->
                                        <li>
                                            <a href="javascript:void(0);">Level 4</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Level 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End level 3 -->
                                <li>
                                    <a href="javascript:void(0);">Level 3</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Level 3</a>
                                </li>
                            </ul>
                        </li>
                        <!--/ End level 2 -->
                        <li>
                            <a href="javascript:void(0);">Level 2</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Level 2</a>
                        </li>
                    </ul>
                </li>
                <!--/ End level 1 -->
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Level 1</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Level 1</span>
                    </a>
                </li>
            </ul>
        </li>
        <!--/ End development - sub menu -->

        <!-- Start development - animate.css -->
        <li class="<?= (Yii::$app->controller->action->id == 'animate') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/animate/animate') ?>">
                <span class="icon"><i class="fa fa-forumbee"></i></span>
                <span class="text">Animate.css</span>
                <span class="label label-danger pull-right">New</span>
            </a>
        </li>
        <!--/ End development - animate.css -->

        <!-- Start category widget -->
        <li class="sidebar-category">
            <span>WIDGET</span>
            <span class="pull-right"><i class="fa fa-cubes"></i></span>
        </li>
        <!--/ End category widget -->

        <!-- Start widget - overview -->
        <li class="<?= (Yii::$app->controller->action->id == 'overview') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/widget/overview') ?>">
                <span class="icon"><i class="fa fa-desktop"></i></span>
                <span class="text">Overview</span>
                <span class="label label-primary pull-right rounded">10</span>
                <?= (Yii::$app->controller->action->id == 'overview') ? '<span class="selected"></span>' : '' ?>
            </a>
        </li>
        <!--/ End widget - overview -->

        <!-- Start widget - social -->
        <li class="<?= (Yii::$app->controller->action->id == 'social') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/widget/social') ?>">
                <span class="icon"><i class="fa fa-group"></i></span>
                <span class="text">Social</span>
                <span class="label label-success pull-right rounded">28</span>
                <?= (Yii::$app->controller->action->id == 'social') ? '<span class="selected"></span>' : '' ?>
            </a>
        </li>
        <!--/ End widget - social -->

        <!-- Start widget - blog -->
        <li class="<?= (Yii::$app->controller->action->id == 'blog') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/widget/blog') ?>">
                <span class="icon"><i class="fa fa-pencil"></i></span>
                <span class="text">Blog</span>
                <span class="label label-info pull-right rounded">15</span>
                <?= (Yii::$app->controller->action->id == 'blog') ? '<span class="selected"></span>' : '' ?>
            </a>
        </li>
        <!--/ End widget - blog -->

        <!-- Start widget - weather -->
        <li class="<?= (Yii::$app->controller->action->id == 'weather') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/widget/weather') ?>">
                <span class="icon"><i class="fa fa-sun-o"></i></span>
                <span class="text">Weather</span>
                <span class="label label-warning pull-right rounded">6</span>
                <?= (Yii::$app->controller->action->id == 'weather') ? '<span class="selected"></span>' : '' ?>
            </a>
        </li>
        <!--/ End widget - weather -->

        <!-- Start widget - misc -->
        <li class="<?= (Yii::$app->controller->action->id == 'misc') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/widget/misc') ?>">
                <span class="icon"><i class="fa fa-puzzle-piece"></i></span>
                <span class="text">Misc</span>
                <span class="label label-danger pull-right rounded">9</span>
                <?= (Yii::$app->controller->action->id == 'misc') ? '<span class="selected"></span>' : '' ?>
            </a>
        </li>
        <!--/ End widget - misc -->

        <!-- Start category documentation -->
        <li class="sidebar-category">
            <span><span class="hidden-sidebar-minimize">BLANKON</span> CORE</span>
            <span class="pull-right"><i class="fa fa-coffee"></i></span>
        </li>
        <!--/ End category documentation -->

        <!-- Start documentation - api documentation -->
        <li>
            <a href="../../../../documentation/admin/yii2/live-preview-documentation.html" target="_blank">
                <span class="icon"><i class="fa fa-book"></i></span>
                <span class="text">API Documentation</span>
            </a>
        </li>
        <!--/ End documentation - api documentation -->

    </ul><!-- /.sidebar-menu -->
    <!--/ End left navigation - menu -->

    <!-- Start left navigation - footer -->
    <div class="sidebar-footer hidden-xs hidden-sm hidden-md">
        <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
        <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
        <a id="lock-screen" data-url="index.php?r=admin%2Fpage%2Flockscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
        <a id="logout" data-url="index.php?r=admin%2Fpage%2Fsignin" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
    </div><!-- /.sidebar-footer -->
    <!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left -->
