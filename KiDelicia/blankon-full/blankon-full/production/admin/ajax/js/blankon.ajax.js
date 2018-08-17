var BlankonAjax = function () {

    // Setting variable
    var default_content='',
        lasturl='';

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonAjax.actionAJAX();
            BlankonAjax.handleCallbackAJAX();
        },

        // =========================================================================
        // ACTION AJAX
        // =========================================================================
        actionAJAX: function () {
            BlankonAjax.checkURL();
            $('#sign-wrapper a').click(function (){
                BlankonAjax.checkURL(this.hash);
            });
            $('#sidebar-left ul.sidebar-menu li a').click(function (event){

                // Check submenu
                if($(this).closest('li').hasClass('submenu')){
                    $(this).append('<span class="selected"></span>');
                    $(this).closest('li').addClass('active').siblings().removeClass('active').find('.selected').remove();
                    $(this).closest('li').siblings().find('ul').find('li').removeClass('active');
                }else{
                    // Close another submenu
                    $(this).closest('li').siblings().find('ul').hide();
                }

                BlankonAjax.checkURL(this.hash);
            });
            //filling in the default content
            default_content = $('#body-content-ajax').html();
        },

        // =========================================================================
        // CHECK URL
        // =========================================================================
        checkURL: function (hash) {
            if(!hash) hash = window.location.hash;
            if(hash != lasturl)
            {
                lasturl=hash;
                // FIX - if we've used the history buttons to return to the homepage,
                // fill the pageContent with the default_content
                if(hash==""){
                    $('#body-content-ajax').html(default_content);
                }else{
                    BlankonAjax.loadPage(hash);
                }
            }
        },

        // =========================================================================
        // SET ACTIVE MENU
        // =========================================================================
        activeMenu: function (url) {
            // Get current url
            // Select an a element that has the matching href and apply a class of 'active'.
            $('#sidebar-left .sidebar-menu a[href="'+url+'"]')
                .append('<span class="selected"></span>')
                .closest('li')
                .addClass('active')
                .siblings()
                .removeClass('active')
                .find('.selected')
                .remove();

            // Submenu
            $('#sidebar-left .sidebar-menu a[href="'+url+'"]')
                .append('<span class="selected"></span>')
                .closest('.submenu')
                .addClass('active')
                .siblings()
                .removeClass('active')
                .find('.selected')
                .remove();
        },

        // =========================================================================
        // DYNAMIC LINK CSS & JS
        // =========================================================================
        dynamicResources: function (url) {

            // Setting global path
            var pluginPath           = '../../../assets/global/plugins/bower_components/',
                pluginCommercialPath = '../../../assets/commercial/plugins/',
                jsPath               = '../../../assets/admin/js/pages/',
                cssPath              = '../../../assets/admin/css/pages/',
                cssCommercialPath    = '../../../assets/commercial/plugins/';

            // Sign in type 2 page
            if(url == 'sign/page-signin-type-2'){
                // Get css files
                $.getCSS({href:cssPath+'sign-type-2.css', rel:'stylesheet'});
                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'jquery-backstretch/jquery.backstretch.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.sign.type2.js');
                    });
            }

            // Dashboard page
            if(url == 'dashboard'){
                // Get css files
                $.getCSS({href:pluginPath+'dropzone/downloads/css/dropzone.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'jquery.gritter/css/jquery.gritter.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js'),
                    $.getScript(pluginPath+'flot/jquery.flot.pack.js'),
                    $.getScript(pluginPath+'dropzone/downloads/dropzone.min.js'),
                    $.getScript(pluginPath+'jquery.gritter/js/jquery.gritter.min.js'),
                    $.getScript(pluginPath+'skycons-html5/skycons.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.dashboard.js');
                    });
            }

            // Frontend themes page
            if(url == 'frontend-themes'){
                // Get css files
                $.getCSS({href:cssPath+'frontend-themes.css', rel:'stylesheet'});
            }

            // Blog grid page
            if(url == 'blog/blog-grid'){
                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'masonry/dist/masonry.pkgd.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.blog.js');
                    });
            }

            // Blog single page
            if(url == 'blog/blog-single'){
                // Get css files
                $.getCSS({href:pluginPath+'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js'),
                    $.getScript(pluginPath+'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.blog.js');
                    });
            }

            // Mail inbox page
            if(url == 'mail/mail-inbox'){
                // Get css files
                $.getCSS({href:cssPath+'mail.css', rel:'stylesheet'});

                // Get js level scripts
                $.getScript(jsPath+'blankon.mail.js');
            }

            // Mail compose page
            if(url == 'mail/mail-compose'){
                // Get css files
                $.getCSS({href:pluginPath+'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'bootstrap-fileupload/css/bootstrap-fileupload.min.css', rel:'stylesheet'});
                $.getCSS({href:cssPath+'mail.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js'),
                    $.getScript(pluginPath+'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js'),
                    $.getScript(pluginPath+'bootstrap-fileupload/js/bootstrap-fileupload.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.mail.js');
                    });
            }

            // Mail view page
            if(url == 'mail/mail-view'){
                // Get css files
                $.getCSS({href:cssPath+'mail.css', rel:'stylesheet'});
            }

            // Gallery page
            if(url == 'pages/page-gallery'){
                // Get css files
                $.getCSS({href:cssPath+'gallery.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'masonry/dist/masonry.pkgd.min.js'),
                    $.getScript(pluginPath+'mixitup/build/jquery.mixitup.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.gallery.js');
                    });
            }

            // FAQ page
            if(url == 'pages/page-faq'){
                // Get css files
                $.getCSS({href:pluginCommercialPath+'cube-portfolio/cubeportfolio/css/cubeportfolio.css', rel:'stylesheet'});
                $.getCSS({href:cssPath+'faq.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginCommercialPath+'cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.faq.js');
                    });
            }

            // Invoice page
            if(url == 'pages/page-invoice'){
                // Get css files
                $.getCSS({href:cssPath+'invoice.css', rel:'stylesheet'});
            }

            // Messages page
            if(url == 'pages/page-messages'){
                // Get css files
                $.getCSS({href:cssPath+'messages.css', rel:'stylesheet'});
            }

            // Timeline page
            if(url == 'pages/page-timeline'){

                // Get css files
                $.getCSS({href:cssPath+'timeline.css', rel:'stylesheet'});

                // Call Google map API
                window.mapapiloaded = function () {
                    // Get js level plugins
                    $.when(
                        $.getScript(pluginPath+'gmap3/dist/gmap3.min.js'),
                        $.Deferred(function( deferred ){
                            $( deferred.resolve );
                        })
                    ).done(function(){
                            // Get js level scripts
                            $.getScript(jsPath+'blankon.timeline.js');
                        });
                };

                $.ajax({
                    url: 'http://maps.googleapis.com/maps/api/js?sensor=false&async=2&callback=mapapiloaded',
                    dataType: 'script',
                    success: function () {
                        console.log('$.ajax progress: waiting for mapapiloaded callback');
                    },
                    error: function () {
                        console.log('$.ajax fail: use osm instead of google.maps');
                    }
                });
                return false;
            }

            // Search course page
            if(url == 'pages/page-search-course'){
                // Get css files
                $.getCSS({href:cssPath+'search.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'chosen_v1.2.0/chosen.min.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'chosen_v1.2.0/chosen.jquery.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.search.js');
                    });
            }

            // Error 403, 404, 500 page
            if(url == 'error/error-403' || url == 'error/error-404' || url == 'error/error-405'){
                // Get css files
                $.getCSS({href:cssPath+'error-page.css', rel:'stylesheet'});

                // Get js level scripts
                $.getScript(jsPath+'blankon.layout.js');
            }

            // Form element page
            if(url == 'forms/form-element'){
                // Get css files
                $.getCSS({href:pluginPath+'bootstrap-tagsinput/dist/bootstrap-tagsinput.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'chosen_v1.2.0/chosen.min.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'),
                    $.getScript(pluginPath+'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js'),
                    $.getScript(pluginPath+'holderjs/holder.js'),
                    $.getScript(pluginPath+'bootstrap-maxlength/bootstrap-maxlength.min.js'),
                    $.getScript(pluginPath+'jquery-autosize/jquery.autosize.min.js'),
                    $.getScript(pluginPath+'chosen_v1.2.0/chosen.jquery.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.form.element.js');
                    });
            }

            // Form advanced page
            if(url == 'forms/form-advanced'){
                // Get css files
                $.getCSS({href:pluginPath+'dropzone/downloads/css/dropzone.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'bootstrap-datepicker-vitalets/css/datepicker.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'dropzone/downloads/dropzone.min.js'),
                    $.getScript(pluginPath+'bootstrap-switch/dist/js/bootstrap-switch.min.js'),
                    $.getScript(pluginPath+'jquery.inputmask/dist/jquery.inputmask.bundle.min.js'),
                    $.getScript(pluginPath+'bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.form.advanced.js');
                    });
            }

            // Form layout page
            if(url == 'forms/form-layout'){
                // Get css files
                $.getCSS({href:pluginPath+'bootstrap-fileupload/css/bootstrap-fileupload.min.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'chosen_v1.2.0/chosen.min.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'bootstrap-fileupload/js/bootstrap-fileupload.min.js'),
                    $.getScript(pluginPath+'chosen_v1.2.0/chosen.jquery.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.form.layout.js');
                    });
            }

            // Form validation page
            if(url == 'forms/form-validation'){
                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'chosen_v1.2.0/chosen.jquery.min.js'),
                    $.getScript(pluginPath+'jquery-mockjax/jquery.mockjax.js'),
                    $.getScript(pluginPath+'jquery-validation/dist/jquery.validate.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.form.validation.js');
                    });
            }

            // Form wizard page
            if(url == 'forms/form-wizard'){
                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'jquery-validation/dist/jquery.validate.min.js'),
                    $.getScript(pluginPath+'twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.form.wizard.js');
                    });
            }

            // Form wysiwyg page
            if(url == 'forms/form-wysiwyg'){
                // Get css files
                $.getCSS({href:pluginPath+'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'summernote/dist/summernote.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js'),
                    $.getScript(pluginPath+'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js'),
                    $.getScript(pluginPath+'summernote/dist/summernote.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.form.wysiwyg.js');
                    });
            }

            // Form x-editable page
            if(url == 'forms/form-xeditable'){
                // Get css files
                $.getCSS({href:pluginPath+'select2-ng/select2.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'select2-ng/select2-bootstrap.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'x-editable/dist/inputs-ext/address/address.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'jquery-mockjax/jquery.mockjax.js'),
                    $.getScript(pluginPath+'moment/min/moment.min.js'),
                    $.getScript(pluginPath+'select2-ng/select2.min.js'),
                    $.getScript(pluginPath+'smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'),
                    $.getScript(pluginPath+'x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js'),
                    $.getScript(pluginPath+'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js'),
                    $.getScript(pluginPath+'x-editable/dist/inputs-ext/typeaheadjs/typeaheadjs.js'),
                    $.getScript(pluginPath+'x-editable/dist/inputs-ext/address/address.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.form.xeditable.js');
                    });
            }

            // Table datatable page
            if(url == 'tables/table-datatable'){
                // Get css files
                $.getCSS({href:pluginPath+'datatables/css/dataTables.bootstrap.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'datatables/css/datatables.responsive.css', rel:'stylesheet'});
                $.getCSS({href:pluginPath+'fuelux/dist/css/fuelux.min.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'datatables/js/jquery.dataTables.min.js'),
                    $.getScript(pluginPath+'datatables/js/dataTables.bootstrap.js'),
                    $.getScript(pluginPath+'datatables/js/datatables.responsive.js'),
                    $.getScript(pluginPath+'fuelux/dist/js/fuelux.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.table.js');
                    });
            }

            // Map Google page
            if(url == 'maps/maps-google'){

                // Call Google map API
                window.mapapiloaded = function () {
                    // Get js level plugins
                    $.when(
                        $.getScript(pluginPath+'gmap3/dist/gmap3.min.js'),
                        $.Deferred(function( deferred ){
                            $( deferred.resolve );
                        })
                    ).done(function(){
                            // Get js level scripts
                            $.getScript(jsPath+'blankon.maps.google.js');
                        });
                };

                $.ajax({
                    url: 'http://maps.googleapis.com/maps/api/js?sensor=false&async=2&callback=mapapiloaded',
                    dataType: 'script',
                    success: function () {
                        console.log('$.ajax progress: waiting for mapapiloaded callback');
                    },
                    error: function () {
                        console.log('$.ajax fail: use osm instead of google.maps');
                    }
                });
                return false;
            }

            // Map vector page
            if(url == 'maps/maps-vector'){
                // Get css files
                $.getCSS({href:pluginPath+'jqvmap/jqvmap.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'jqvmap/jquery.vmap.min.js'),
                    $.getScript(pluginPath+'jqvmap/maps/jquery.vmap.world.js'),
                    $.getScript(pluginPath+'jqvmap/maps/jquery.vmap.usa.js'),
                    $.getScript(pluginPath+'jqvmap/maps/jquery.vmap.russia.js'),
                    $.getScript(pluginPath+'jqvmap/maps/jquery.vmap.algeria.js'),
                    $.getScript(pluginPath+'jqvmap/maps/jquery.vmap.germany.js'),
                    $.getScript(pluginPath+'jqvmap/maps/continents/jquery.vmap.africa.js'),
                    $.getScript(pluginPath+'jqvmap/maps/continents/jquery.vmap.asia.js'),
                    $.getScript(pluginPath+'jqvmap/maps/continents/jquery.vmap.australia.js'),
                    $.getScript(pluginPath+'jqvmap/maps/continents/jquery.vmap.europe.js'),
                    $.getScript(pluginPath+'jqvmap/maps/continents/jquery.vmap.north-america.js'),
                    $.getScript(pluginPath+'jqvmap/maps/continents/jquery.vmap.south-america.js'),
                    $.getScript(pluginPath+'jqvmap/data/jquery.vmap.sampledata.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.maps.vector.js');
                    });
            }

            // Chart flot page
            if(url == 'charts/chart-flot'){
                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'flot/jquery.flot.js'),
                    $.getScript(pluginPath+'flot/jquery.flot.spline.min.js'),
                    $.getScript(pluginPath+'flot/jquery.flot.tooltip.min.js'),
                    $.getScript(pluginPath+'flot/jquery.flot.resize.js'),
                    $.getScript(pluginPath+'flot/jquery.flot.categories.js'),
                    $.getScript(pluginPath+'flot/jquery.flot.pie.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.chart.flot.js');
                    });
            }

            // Chart morris page
            if(url == 'charts/chart-morris'){
                // Get css files
                $.getCSS({href:pluginPath+'morrisjs/morris.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'raphael/raphael-min.js'),
                    $.getScript(pluginPath+'morrisjs/morris.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.chart.morris.js');
                    });
            }

            // Chart chartjs page
            if(url == 'charts/chart-chartjs'){
                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'chartjs/Chart.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.chart.chartjs.js');
                    });
            }

            // Chart c3js page
            if(url == 'charts/chart-c3js'){
                // Get css files
                $.getCSS({href:pluginPath+'c3js-chart/c3.min.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'d3/d3.min.js'),
                    $.getScript(pluginPath+'c3js-chart/c3.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.chart.c3.js');
                    });
            }

            // Animate
            if(url == 'animate'){
                // Get js level scripts
                $.getScript(jsPath+'blankon.animate.js');
            }

            // Component typography page
            if(url == 'components/component-typography'){
                // Get css files
                $.getCSS({href:pluginPath+'google-code-prettify/bin/prettify.min.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'google-code-prettify/bin/prettify.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                    $.getScript(jsPath+'blankon.typography.js');
                    });
            }

            // Component sliders page
            if(url == 'components/component-sliders'){
                // Get css files
                $.getCSS({href:pluginPath+'ion.rangeSlider/css/ion.rangeSlider.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'ion.rangeSlider/js/ion.rangeSlider.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.slider.js');
                    });
            }

            // Component glyphicons icon page
            if(url == 'components/component-glyphicons'){
                // Get css files
                $.getCSS({href:cssPath+'glyphicons.css', rel:'stylesheet'});
            }

            // Component glyphicons PRO icon page
            if(url == 'components/component-glyphicons-pro'){
                // Get css files
                $.getCSS({href:cssPath+'glyphicons.css', rel:'stylesheet'});
                $.getCSS({href:cssCommercialPath+'glyphicons/web/html_css/css/glyphicons.css', rel:'stylesheet'});
            }

            // Component weather icon page
            if(url == 'components/component-weather-icons'){
                // Get css files
                $.getCSS({href:pluginPath+'weather-icons/css/weather-icons.min.css', rel:'stylesheet'});
                $.getCSS({href:cssPath+'weather-icons.css', rel:'stylesheet'});
            }

            // Component map icon page
            if(url == 'components/component-map-icons'){
                // Get css files
                $.getCSS({href:pluginPath+'map-icons/css/map-icons.css', rel:'stylesheet'});
            }

            // Component weather icon page
            if(url == 'components/component-simple-line-icons'){
                // Get css files
                $.getCSS({href:pluginPath+'simple-line-icons/css/simple-line-icons.css', rel:'stylesheet'});
                $.getCSS({href:cssPath+'icon.css', rel:'stylesheet'});
            }

            // Widget overview page
            if(url == 'widget/widget-overview'){
                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'raphael/raphael-min.js'),
                    $.getScript(pluginPath+'flot/jquery.flot.pack.js'),
                    $.getScript(pluginPath+'morrisjs/morris.min.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.widgets.js');
                    });
            }

            // Widget social page
            if(url == 'widget/widget-social'){
                // Get css files
                $.getCSS({href:cssPath+'timeline.css', rel:'stylesheet'});
            }

            // Widget weather icons page
            if(url == 'widget/widget-weather'){
                // Get css files
                $.getCSS({href:pluginPath+'weather-icons/css/weather-icons.min.css', rel:'stylesheet'});

                // Get js level plugins
                $.when(
                    $.getScript(pluginPath+'skycons-html5/skycons.js'),
                    $.Deferred(function( deferred ){
                        $( deferred.resolve );
                    })
                ).done(function(){
                        // Get js level scripts
                        $.getScript(jsPath+'blankon.widget.weather.js');
                    });
            }

        },

        // =========================================================================
        // LOAD PAGE
        // =========================================================================
        loadPage : function (url) {

            // Set active menu on sidebar left
            BlankonAjax.activeMenu(url);

            // Remove hashtag URL
            url=url.replace('#','');

            $.ajax({
                type: "POST",
                url: "php/load_page.php",
                cache: true,
                data: {
                    page : url
                },
                dataType: "html",
                beforeSend: function () {
                    $('#page-content').block({
                        message: '<h1><img src="../../../assets/global/img/loader/general/2.gif" alt="Please wait..." /> Please wait...</h1>',
                        centerY: false,
                        css: {
                            top: '265px',
                            width: '15%'
                        }
                    });
                },
                success: function(msg){
                    // Check dynamic css
                    BlankonAjax.dynamicResources(url);
                    if(parseInt(msg)!=0)
                    {
                        $('#body-content-ajax').html(msg);
                        $('.footer-content').show();
                    }
                    $('#page-content').unblock();
                }
            });
        },

        // =========================================================================
        // HANDLE TRIGGER AFTER AJAX ACTION
        // =========================================================================
        handleCallbackAJAX : function () {
            $(document).ajaxComplete(function() {
                BlankonAjax.handlePanelScroll();
                BlankonAjax.handleTooltip();
                BlankonAjax.handlePopover();
                BlankonAjax.handlePanelToolAction();
            });
        },

        // =========================================================================
        // PANEL NICESCROLL
        // =========================================================================
        handlePanelScroll: function () {
            if($('.panel-scrollable').length){
                $('.panel-scrollable .panel-body').niceScroll({
                    cursorwidth: '10px',
                    cursorborder: '0px'
                });
            }
        },

        // =========================================================================
        // TOOLTIP
        // =========================================================================
        handleTooltip: function () {
            if($('[data-toggle=tooltip]').length){
                $('[data-toggle=tooltip]').tooltip({
                    animation: 'fade'
                });
            }
        },

        // =========================================================================
        // POPOVER
        // =========================================================================
        handlePopover: function () {
            if($('[data-toggle=popover]').length){
                $('[data-toggle=popover]').popover();
            }
        },

        // =========================================================================
        // PANEL TOOL ACTION
        // =========================================================================
        handlePanelToolAction: function () {
            // Collapse panel
            $('[data-action=collapse]').on('click', function(e){
                var targetCollapse = $(this).parents('.panel').find('.panel-body'),
                    targetCollapse2 = $(this).parents('.panel').find('.panel-sub-heading'),
                    targetCollapse3 = $(this).parents('.panel').find('.panel-footer')
                if((targetCollapse.is(':visible'))) {
                    $(this).find('i').removeClass('fa-angle-up').addClass('fa-angle-down');
                    targetCollapse.slideUp();
                    targetCollapse2.slideUp();
                    targetCollapse3.slideUp();
                }else{
                    $(this).find('i').removeClass('fa-angle-down').addClass('fa-angle-up');
                    targetCollapse.slideDown();
                    targetCollapse2.slideDown();
                    targetCollapse3.slideDown();
                }
                e.stopImmediatePropagation();
            });

            // Remove panel
            $('[data-action=remove]').on('click', function(){
                $(this).parents('.panel').fadeOut();
                // Remove backdrop element panel full size
                if($('body').find('.panel-fullsize').length)
                {
                    $('body').find('.panel-fullsize-backdrop').remove();
                }
            });

            // Refresh panel
            $('[data-action=refresh]').on('click', function(){
                var targetElement = $(this).parents('.panel').find('.panel-body');
                targetElement.append('<div class="indicator"><span class="spinner"></span></div>');
                setInterval(function(){
                    $.getJSON(globalDataPath+'/reload-sample.json', function(json) {
                        $.each(json, function() {
                            // Retrieving data from json...
                            console.log('Retrieving data from json...');
                        });
                        targetElement.find('.indicator').hide();
                    });
                },5000);
            });

            // Expand panel
            $('[data-action=expand]').on('click', function(){
                if($(this).parents(".panel").hasClass('panel-fullsize'))
                {
                    $('body').find('.panel-fullsize-backdrop').remove();
                    $(this).data('bs.tooltip').options.title = 'Expand';
                    $(this).find('i').removeClass('fa-compress').addClass('fa-expand');
                    $(this).parents(".panel").removeClass('panel-fullsize');
                }
                else
                {
                    $('body').append('<div class="panel-fullsize-backdrop"></div>');
                    $(this).data('bs.tooltip').options.title = 'Minimize';
                    $(this).find('i').removeClass('fa-expand').addClass('fa-compress');
                    $(this).parents(".panel").addClass('panel-fullsize');
                }
            });

            // Search panel
            $('[data-action=search]').on('click', function(){
                $(this).parents('.panel').find('.panel-search').toggle(100);
                return false;
            });

        }

    };

}();

// Call main app init
BlankonAjax.init();