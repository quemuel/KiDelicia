<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-ban"></i>{page} <span>{info}</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="dashboard.html">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Pages</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">{page}</li>
        </ol>
    </div>
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-12">

            <!-- START @ERROR PAGE -->
            <div class="error-wrapper">
                <h1>500</h1>
                <h3>Internal Server Error.</h3>
                <h4>Sorry, something went wrong.</h4>
                <a href="{url}frontend/start-page/html/index.html" class="btn btn-sm btn-theme">Return to Home</a>
                <a href="{url}production/admin/php/index.php" class="btn btn-sm btn-theme">Go to Dashboard</a>
            </div>
            <!--/ END ERROR PAGE -->

        </div>
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->
