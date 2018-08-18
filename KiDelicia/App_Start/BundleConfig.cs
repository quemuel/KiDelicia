using System.Web;
using System.Web.Optimization;

namespace KiDelicia
{
    public class BundleConfig
    {
        public static void RegisterBundles(BundleCollection bundles)
        {

            bundles.Add(new ScriptBundle("~/bundles/jquery").Include(
                        "~/Scripts/jquery-{version}.js"));

            bundles.Add(new StyleBundle("~/Content/favicons").Include(
                "~/Content/global/img/ico/yii/apple-touch-icon-144x144-precomposed.png",
                "~/Content/global/img/ico/yii/apple-touch-icon-114x114-precomposed.png",
                "~/Content/global/img/ico/yii/apple-touch-icon-72x72-precomposed.png",
                "~/Content/global/img/ico/yii/apple-touch-icon-57x57-precomposed.png",
                "~/Content/global/img/ico/yii/apple-touch-icon.png"
            ));

            bundles.Add(new StyleBundle("~/Content/styleCore").Include(
                "~/Content/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css",
                "~/Content/global/plugins/bower_components/fontawesome/css/font-awesome.min.css",
                "~/Content/global/plugins/bower_components/animate.css/animate.min.css",
                "~/Content/global/plugins/bower_components/dropzone/downloads/css/dropzone.css",
                "~/Content/global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css"
            ));

            bundles.Add(new StyleBundle("~/Content/styleThemeBlankon").Include(
                "~/Content/admin/css/reset.css",
                "~/Content/admin/css/layout.css",
                "~/Content/admin/css/components.css",
                "~/Content/admin/css/plugins.css",
                //"~/Content/admin/css/yii-custom.css",
                "~/Content/admin/css/themes/default.theme.css",
                "~/Content/admin/css/site.css"
            ));

            bundles.Add(new ScriptBundle("~/bundles/scriptCoreBlankon").Include(
                "~/Content/global/plugins/bower_components/jquery/dist/jquery.min.js",
                //"~/Scripts/jquery-{version}.js",
                "~/Content/global/plugins/bower_components/jquery-cookie/jquery.cookie.js",
                "~/Content/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js",
                "~/Content/global/plugins/bower_components/typehead.js/dist/handlebars.js",
                "~/Content/global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js",
                "~/Content/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js",
                "~/Content/global/plugins/bower_components/jquery.sparkline.min/index.js",
                "~/Content/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js",
                "~/Content/global/plugins/bower_components/bootbox/bootbox.js"
            ));

            bundles.Add(new ScriptBundle("~/bundles/scriptPageLevelBlankon").Include(
                "~/Content/global/plugins/bower_components/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js",
                "~/Content/global/plugins/bower_components/flot/jquery.flot.js",
                "~/Content/global/plugins/bower_components/flot/jquery.flot.spline.min.js",
                "~/Content/global/plugins/bower_components/flot/jquery.flot.categories.js",
                "~/Content/global/plugins/bower_components/flot/jquery.flot.tooltip.min.js",
                "~/Content/global/plugins/bower_components/flot/jquery.flot.resize.js",
                "~/Content/global/plugins/bower_components/flot/jquery.flot.pie.js",
                "~/Content/global/plugins/bower_components/dropzone/downloads/dropzone.min.js",
                "~/Content/global/plugins/bower_components/jquery.gritter/js/jquery.gritter.min.js",
                "~/Content/global/plugins/bower_components/skycons-html5/skycons.js",
                "~/Content/admin/js/apps.js",
                "~/Content/admin/js/pages/blankon.dashboard.js",
                "~/Content/admin/js/demo.js",
                "~/Scripts/inputmask/inputmask.js",
                "~/Scripts/inputmask/jquery.inputmask.js",
                "~/Scripts/inputmask/inputmask.extensions.js",
                "~/Scripts/inputmask/inputmask.date.extensions.js",
                "~/Scripts/inputmask/inputmask.numeric.extensions.js",
                "~/Content/admin/js/site.js"
            ));

            //bundles.Add(new ScriptBundle("~/bundles/inputmask").Include(
            //    "~/Scripts/inputmask/inputmask.js",
            //    "~/Scripts/inputmask/jquery.inputmask.js",
            //    "~/Scripts/inputmask/inputmask.extensions.js",
            //    "~/Scripts/inputmask/inputmask.date.extensions.js",
            //    //and other extensions you want to include
            //    "~/Scripts/inputmask/inputmask.numeric.extensions.js"
            //));

            bundles.Add(new StyleBundle("~/Content/bootstrapDatepicker").Include(
                "~/Content/global/plugins/bower_components/dropzone/downloads/css/dropzone.css",
                "~/Content/global/plugins/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css",
                "~/Content/global/plugins/bower_components/bootstrap-datepicker-vitalets/css/bootstrap-datepicker.css"
            ));

            bundles.Add(new ScriptBundle("~/bundles/bootstrapDatepicker").Include(
                "~/Content/global/plugins/bower_components/dropzone/downloads/dropzone.min.js",
                "~/Content/global/plugins/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js",
                "~/Content/global/plugins/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.min.js",
                "~/Content/global/plugins/bower_components/bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js",
                "~/Content/global/plugins/bower_components/bootstrap-datepicker-vitalets/locales/bootstrap-datepicker.pt-BR.min.js",
                "~/Content/admin/js/pages/blankon.form.advanced.js"
            ));

            //bundles.Add(new ScriptBundle("~/Script/bootstrapDatepickerOriginal").Include(
            //    "~/Script/bootstrap-datepicker.js",
            //    "~/Script/locales/bootstrap-datepicker.pt-BR.min.js"
            //));

            bundles.Add(new ScriptBundle("~/bundles/advanced").Include(
                "~/Content/admin/js/pages/blankon.form.advanced.js"
            ));
        }
    }
}
