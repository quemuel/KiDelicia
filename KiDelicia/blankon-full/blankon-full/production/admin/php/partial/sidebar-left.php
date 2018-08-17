<aside id="sidebar-left" class="{sidebar}">

<!-- Start left navigation - profile shortcut -->
<div class="sidebar-content">
    <div class="media">
        <a class="pull-left has-notif avatar" href="page-profile.html">
            <img src="../../../assets/global/img/avatar/50/1.png" alt="admin">
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
<li {menuDashboard}>
    <a href="{url}production/admin/php/index.php">
        <span class="icon"><i class="fa fa-home"></i></span>
        <span class="text">Dashboard</span>
        <span {selectDashboard}></span>
    </a>
</li>
<!--/ End navigation - dashboard -->

<!-- Start navigation - frontend themes -->
<li {menuFrontend}>
    <a href="{url}production/admin/php/index.php?v=frontend">
        <span class="icon"><i class="fa fa-leaf"></i></span>
        <span class="text">Frontend themes</span>
        <span {selectFrontend}></span>
    </a>
</li>
<!--/ End navigation - frontend themes -->

<!-- Start navigation - blankon versions -->
<li {menuVersions}>
    <a href="{url}production/admin/php/index.php?v=versions">
        <span class="icon"><i class="fa fa-dropbox"></i></span>
        <span class="text">Blankon Versions</span>
        <span {selectVersions}></span>
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
<li class="submenu {menuGrid} {menuList} {menuSingle}">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-globe"></i></span>
        <span class="text">Blog</span>
        <span class="arrow"></span>
        <span {selectGrid} {selectList} {selectSingle}></span>
    </a>
    <ul>
        <li class="{menuGrid}"><a href="{url}production/admin/php/index.php?v=blog-grid">Grid</a></li>
        <li class="{menuList}"><a href="{url}production/admin/php/index.php?v=blog-list">List</a></li>
        <li class="{menuSingle}"><a href="{url}production/admin/php/index.php?v=blog-single">Single</a></li>
    </ul>
</li>
<!--/ End navigation - blog -->

<!-- Start navigation - mail -->
<li class="submenu {menuInbox} {menuCompose} {menuView}">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-envelope"></i></span>
        <span class="text">Mail</span>
        <span class="arrow"></span>
        <span {selectInbox} {selectCompose} {menuView}></span>
    </a>
    <ul>
        <li class="{menuInbox}"><a href="{url}production/admin/php/index.php?v=mail-inbox">Inbox</a></li>
        <li class="{menuCompose}"><a href="{url}production/admin/php/index.php?v=mail-compose">Compose mail</a></li>
        <li class="{menuView}"><a href="{url}production/admin/php/index.php?v=mail-view">View mail</a></li>
    </ul>
</li>
<!--/ End navigation - mail -->

<!-- Start navigation - pages -->
<li class="submenu {menuGallery} {menuFaq} {menuInvoice} {menuMessages} {menuTimeline} {menuProfile}
{menuSearch} {menuError403T2} {menuError404T2} {menuError500T2}">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-file-o"></i></span>
        <span class="text">Pages</span>
        <span class="arrow"></span>
        <span {selectGallery} {selectInvoice} {selectMessages} {selectTimeline}
              {selectProfile} {selectSearch} {selectError403T2} {selectError404T2} {selectError500T2}></span>
    </a>
    <ul>
        <li class="{menuGallery}"><a href="{url}production/admin/php/index.php?v=page-gallery">Gallery</a></li>
        <li class="{menuFaq}"><a href="{url}production/admin/php/index.php?v=page-faq">FAQ <span class="label label-danger pull-right">New</span></a></li>
        <li class="{menuInvoice}"><a href="{url}production/admin/php/index.php?v=page-invoice">Invoice</a></li>
        <li class="{menuMessages}"><a href="{url}production/admin/php/index.php?v=page-messages">Messages</a></li>
        <li class="{menuTimeline}"><a href="{url}production/admin/php/index.php?v=page-timeline">Timeline</a></li>
        <li class="{menuProfile}"><a href="{url}production/admin/php/index.php?v=page-profile">Profile</a></li>
        <li class="submenu {menuSearch}">
            <a href="javascript:void(0);">Search<span class="arrow"></span></a>
            <ul>
                <li class="{menuSearch}"><a href="{url}production/admin/php/index.php?v=page-search-course">Courses</a></li>
            </ul>
        </li>
        <li class="submenu {menuError403T2} {menuError404T2} {menuError500T2}">
            <a href="javascript:void(0);">Error <span class="arrow"></span></a>
            <ul>
                <li><a href="{url}production/admin/php/index.php?v=page-error-403">Error 403</a></li>
                <li class="{menuError403T2}"><a href="{url}production/admin/php/index.php?v=page-error-403-type-2">Error 403 Type 2</a></li>
                <li><a href="{url}production/admin/php/index.php?v=page-error-404">Error 404</a></li>
                <li class="{menuError404T2}"><a href="{url}production/admin/php/index.php?v=page-error-404-type-2"">Error 404 Type 2</a></li>
                <li><a href="{url}production/admin/php/index.php?v=page-error-500">Error 500</a></li>
                <li class="{menuError500T2}"><a href="{url}production/admin/php/index.php?v=page-error-500-type-2">Error 500 Type 2</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="javascript:void(0);">Account <span class="arrow"></span></a>
            <ul>
                <li><a href="{url}production/admin/php/index.php?v=page-signin">Sign In</a></li>
                <li><a href="{url}production/admin/php/index.php?v=page-signin-type-2">Sign In Type 2</a></li>
                <li><a href="{url}production/admin/php/index.php?v=page-signup">Sign Up</a></li>
                <li><a href="{url}production/admin/php/index.php?v=page-lost-password">Lost password</a></li>
                <li><a href="{url}production/admin/php/index.php?v=page-lock-screen">Lock Screen</a></li>
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
<li class="submenu {menuFormElement} {menuFormAdvanced} {menuFormLayout} {menuFormValidation} {menuFormWizard} {menuWysiwyg}  {menuEditable}"">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-list-alt"></i></span>
        <span class="text">Forms</span>
        <span class="arrow"></span>
        <span {selectFormElement} {selectFormAdvanced} {selectFormLayout} {selectFormValidation} {selectFormWizard} {selectWysiwyg} {selectEditable}></span>
    </a>
    <ul>
        <li class="{menuFormElement}"><a href="{url}production/admin/php/index.php?v=form-elements">Element</a></li>
        <li class="{menuFormAdvanced}"><a href="{url}production/admin/php/index.php?v=form-advanced">Advanced</a></li>
        <li class="{menuFormLayout}"><a href="{url}production/admin/php/index.php?v=form-layout">Layout</a></li>
        <li class="{menuFormValidation}"><a href="{url}production/admin/php/index.php?v=form-validation">Validation</a></li>
        <li class="{menuFormWizard}"><a href="{url}production/admin/php/index.php?v=form-wizard">Wizard</a></li>
        <li class="{menuWysiwyg}"><a href="{url}production/admin/php/index.php?v=form-wysiwyg">Text Editor</a></li>
        <li class="{menuEditable}"><a href="{url}production/admin/php/index.php?v=form-xeditable">X-Editable</a></li>
    </ul>
</li>
<!--/ End navigation - forms -->

<!-- Start navigation - tables -->
<li class="submenu {menuTableDefault} {menuTableColor} {menuDatatable}">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-table"></i></span>
        <span class="text">Tables</span>
        <span class="arrow"></span>
        <span {selectTableDefault} {selectTableColor} {selectDatatable}></span>
    </a>
    <ul>
        <li class="{menuTableDefault}"><a href="{url}production/admin/php/index.php?v=table-default">Default</a></li>
        <li class="{menuTableColor}"><a href="{url}production/admin/php/index.php?v=table-color">Color</a></li>
        <li class="{menuDatatable}"><a href="{url}production/admin/php/index.php?v=table-datatable">Datatable</a></li>
    </ul>
</li>
<!--/ End navigation - tables -->

<!-- Start navigation - maps -->
<li class="submenu {menuMapsGoogle} {menuMapsVector}">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-map-marker"></i></span>
        <span class="text">Maps</span>
        <span class="arrow"></span>
        <span {selectMapsGoogle} {selectMapsVector}></span>
    </a>
    <ul>
        <li class="{menuMapsGoogle}"><a href="{url}production/admin/php/index.php?v=maps-google">Google</a></li>
        <li class="{menuMapsVector}"><a href="{url}production/admin/php/index.php?v=maps-vector">Vector</a></li>
    </ul>
</li>
<!--/ End navigation - maps -->

<!-- Start navigation - charts -->
<li class="submenu {menuChartFlot} {menuChartMorris} {menuChartChartjs} {menuChartC3js}">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-signal"></i></span>
        <span class="text">Charts</span>
        <span class="arrow"></span>
        <span {selectChartFlot} {selectChartMorris} {selectChartChartjs} {selectChartC3js}}></span>
    </a>
    <ul>
        <li class="{menuChartFlot}"><a href="{url}production/admin/php/index.php?v=chart-flot">Flot</a></li>
        <li class="{menuChartMorris}"><a href="{url}production/admin/php/index.php?v=chart-morris">Morris</a></li>
        <li class="{menuChartChartjs}"><a href="{url}production/admin/php/index.php?v=chart-chartjs">Chartjs</a></li>
        <li class="{menuChartC3js}"><a href="{url}production/admin/php/index.php?v=chart-c3js">C3js</a></li>
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
<li class="submenu {menuGridSystem} {menuButtons} {menuTypography} {menuPanels} {menuAlerts} {menuModals} {menuVideo} {menuTabsAccordion} {menuSliders}
{menuGlyphicons} {menuGlyphiconsPro} {menuFontAwesome} {menuWeatherIcons} {menuMapIcons} {menuSimpleLineIcons} {menuOthers} ">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-cube"></i></span>
        <span class="text">Components</span>
        <span class="plus"></span>
        <span {selectGridSystem} {selectButtons} {selectTypography} {selectPanels} {selectModals} {selectTabsAccordion}
        {selectSliders} ></span>
    </a>
    <ul>
        <li class="{menuGridSystem}"><a href="{url}production/admin/php/index.php?v=grid-system">Grid System</a></li>
        <li class="{menuButtons}"><a href="{url}production/admin/php/index.php?v=buttons">Buttons</a></li>
        <li class="{menuTypography}"><a href="{url}production/admin/php/index.php?v=typography">Typography</a></li>
        <li class="{menuPanels}"><a href="{url}production/admin/php/index.php?v=panels">Panels</a></li>
        <li class="{menuAlerts}"><a href="{url}production/admin/php/index.php?v=alerts">Alerts</a></li>
        <li class="{menuModals}"><a href="{url}production/admin/php/index.php?v=modals">Modals</a></li>
        <li class="{menuVideo}"><a href="{url}production/admin/php/index.php?v=video">Video <span class="label label-danger pull-right">New</span></a></li>
        <li class="{menuTabsAccordion}"><a href="{url}production/admin/php/index.php?v=tabs-accordion">Tabs & Accordion</a></li>
        <li class="{menuSliders}"><a href="{url}production/admin/php/index.php?v=sliders">Sliders</a></li>
        <li class="submenu {menuGlyphicons} {menuGlyphiconsPro} {menuFontAwesome} {menuWeatherIcons} {menuMapIcons} {menuSimpleLineIcons}">
            <a href="javascript:void(0);">
                <span class="text">Icons</span>
                <span class="count label label-danger">6</span>
                <span class="arrow"></span>
                <span {selectGlyphicons} {selectGlyphiconsPro} {selectFontAwesome} {selectWeatherIcons} {selectMapIcons} {selectSimpleLineIcons} ></span>
            </a>
            <ul>
                <li class="{menuGlyphicons}"><a href="{url}production/admin/php/index.php?v=glyphicons">Glyphicons</a></li>
                <li class="{menuGlyphiconsPro}"><a href="{url}production/admin/php/index.php?v=glyphicons-pro">Glyphicons PRO</a></li>
                <li class="{menuFontAwesome}"><a href="{url}production/admin/php/index.php?v=font-awesome">Font Awesome</a></li>
                <li class="{menuWeatherIcons}"><a href="{url}production/admin/php/index.php?v=weather-icon">Weather Icons</a></li>
                <li class="{menuMapIcons}"><a href="{url}production/admin/php/index.php?v=map-icons">Map Icons</a></li>
                <li class="{menuSimpleLineIcons}"><a href="{url}production/admin/php/index.php?v=simple-line-icons">Simple Line Icons</a></li>
            </ul>
        </li>
        <li class="{menuOthers}"><a href="{url}production/admin/php/index.php?v=others">Other</a></li>
    </ul>
</li>
<!--/ End development - components -->

<!-- Start development - layouts -->
<li class="submenu {menuBlankPage} {menuBoxedPage} {menuHeaderFixedPage} {menuSidebarFixedPage} {menuSidebarMinimizePage}
{menuSidebarDefaultPage} {menuSidebarBoxPage} {menuLayoutSidebarRounded} {menuLayoutSidebarCircle} {menuLayoutFooterFixed}">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-columns"></i></span>
        <span class="text">Layouts</span>
        <span class="plus"></span>
        <span {selectBlankPage} {selectBoxedPage} {selectBoxedPage} {selectSidebarFixedPage} {selectSidebarMinimizePage}
        {selectSidebarDefaultPage} {selectSidebarBoxPage} {selectLayoutSidebarRounded} {menuLayoutFooterFixed}></span>
    </a>
    <ul>
        <li class="{menuBlankPage}"><a href="{url}production/admin/php/index.php?v=blank-page">Blank Page</a></li>
        <li class="{menuBoxedPage}"><a href="{url}production/admin/php/index.php?v=boxed-page">Boxed Page</a></li>
        <li class="{menuHeaderFixedPage}"><a href="{url}production/admin/php/index.php?v=header-fixed-page">Header Fixed Page</a></li>
        <li class="{menuSidebarFixedPage}"><a href="{url}production/admin/php/index.php?v=sidebar-fixed-page">Sidebar Fixed Page</a></li>
        <li class="{menuSidebarMinimizePage}"><a href="{url}production/admin/php/index.php?v=sidebar-minimize-page">Sidebar Minimize Page</a></li>
        <li class="{menuSidebarDefaultPage}"><a href="{url}production/admin/php/index.php?v=sidebar-default-page">Sidebar Default Page</a></li>
        <li class="{menuSidebarBoxPage}"><a href="{url}production/admin/php/index.php?v=sidebar-box-page">Sidebar Box Page</a></li>
        <li class="{menuLayoutSidebarRounded}"><a href="{url}production/admin/php/index.php?v=layout-sidebar-rounded">Sidebar Rounded Page</a></li>
        <li class="{menuLayoutSidebarCircle}"><a href="{url}production/admin/php/index.php?v=layout-sidebar-circle">Sidebar Circle Page</a></li>
        <li class="{menuLayoutFooterFixed}"><a href="{url}production/admin/php/index.php?v=layout-footer-fixed">Footer Fixed Page</a></li>
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
<li {menuAnimate}>
    <a href="{url}production/admin/php/index.php?v=animate">
        <span class="icon"><i class="fa fa-forumbee"></i></span>
        <span class="text">Animate.css</span>
        <span class="label label-danger pull-right">New</span>
        <span {selectAnimate}></span>
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
<li class="{menuOverview}">
    <a href="{url}production/admin/php/index.php?v=overview">
        <span class="icon"><i class="fa fa-desktop"></i></span>
        <span class="text">Overview</span>
        <span class="label label-primary pull-right rounded">10</span>
        <span {selectOverview}></span>
    </a>
</li>
<!--/ End widget - overview -->

<!-- Start widget - social -->
<li class="{menuSocial}">
    <a href="{url}production/admin/php/index.php?v=social">
        <span class="icon"><i class="fa fa-group"></i></span>
        <span class="text">Social</span>
        <span class="label label-success pull-right rounded">28</span>
        <span {selectSocial}></span>
    </a>
</li>
<!--/ End widget - social -->

<!-- Start widget - blog -->
<li class="{menuBlog}">
    <a href="{url}production/admin/php/index.php?v=blog">
        <span class="icon"><i class="fa fa-pencil"></i></span>
        <span class="text">Blog</span>
        <span class="label label-info pull-right rounded">15</span>
        <span {selectBlog}></span>
    </a>
</li>
<!--/ End widget - blog -->

<!-- Start widget - weather -->
<li class="{menuWeather}">
    <a href="{url}production/admin/php/index.php?v=weather">
        <span class="icon"><i class="fa fa-sun-o"></i></span>
        <span class="text">Weather</span>
        <span class="label label-warning pull-right rounded">6</span>
        <span {selectWeather}></span>
    </a>
</li>
<!--/ End widget - weather -->

<!-- Start widget - misc -->
<li class="{menuMisc}">
    <a href="{url}production/admin/php/index.php?v=misc">
        <span class="icon"><i class="fa fa-puzzle-piece"></i></span>
        <span class="text">Misc</span>
        <span class="label label-danger pull-right rounded">9</span>
        <span {selectMisc}></span>
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
    <a href="../../../documentation/admin/php/live-preview-documentation.html" target="_blank">
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
    <a id="lock-screen" data-url="index.php?v=page-lock-screen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
    <a id="logout" data-url="index.php?v=page-signin" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
</div><!-- /.sidebar-footer -->
<!--/ End left navigation - footer -->

</aside>