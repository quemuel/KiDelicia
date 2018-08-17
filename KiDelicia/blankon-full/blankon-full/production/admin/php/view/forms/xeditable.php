<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-th-list"></i> {page} <span>{info}</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="dashboard.html">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Forms</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">{page}</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-info mb-20">
                <a href="http://vitalets.github.io/x-editable/" target="_blank">X-editable</a> library allows you to create editable elements on your page. It can be used with any engine (bootstrap, jquery only) and includes both popup and inline modes. Please try out demo to see how it works.
            </div>
        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-12">

            <!-- Start X-Editable -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Click to edit</h3>
                    </div><!-- /.pull-left -->
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div><!-- /.pull-right -->
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-sub-heading inner-all">
                    <div class="pull-right">
                        <button id="enable" class="btn btn-primary">enable / disable</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                        <tbody>
                        <tr>
                            <td width="35%">Simple text field</td>
                            <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
                        </tr>
                        <tr>
                            <td>Empty text field, required</td>
                            <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
                        </tr>
                        <tr>
                            <td>Select, local array, custom display</td>
                            <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
                        </tr>
                        <tr>
                            <td>Select, remote array, no buttons</td>
                            <td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a></td>
                        </tr>
                        <tr>
                            <td>Select, error while loading</td>
                            <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
                        </tr>

                        <tr>
                            <td>Datepicker</td>
                            <td>

                                <span class="notready">not implemented for Bootstrap 3 yet</span>

                            </td>
                        </tr>
                        <tr>
                            <td>Combodate (date)</td>
                            <td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
                        </tr>
                        <tr>
                            <td>Combodate (datetime)</td>
                            <td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
                        </tr>



                        <tr>
                            <td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
                            <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
                        </tr>




                        <tr>
                            <td>Twitter typeahead.js</td>
                            <td><a href="#" id="state2" data-type="typeaheadjs" data-pk="1" data-placement="right" data-title="Start typing State.."></a></td>
                        </tr>


                        <tr>
                            <td>Checklist</td>
                            <td><a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
                        </tr>

                        <tr>
                            <td>Select2 (tags mode)</td>
                            <td><a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags">html, javascript</a></td>
                        </tr>

                        <tr>
                            <td>Select2 (dropdown mode)</td>
                            <td><a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a></td>
                        </tr>

                        <tr>
                            <td>Custom input, several fields</td>
                            <td><a href="#" id="address" data-type="address" data-pk="1" data-title="Please, fill address"></a></td>
                        </tr>


                        </tbody>
                    </table>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End X-Editable -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <h3>Console <small>(all ajax requests here are emulated)</small></h3>
            <div><textarea id="console" class="form-control" rows="8" autocomplete="off"></textarea></div>
        </div>
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->