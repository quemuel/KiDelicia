<!-- Start optional size modal element -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-theme">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-theme">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--/ End optional size modal element -->

<!-- Start tabs in modal element -->
<div class="modal fade bs-example-modal-tabs" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="panel panel-tab panel-tab-double">
                <!-- Start tabs heading -->
                <div class="panel-heading no-padding">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab2-1" data-toggle="tab">
                                <i class="fa fa-user"></i>
                                <div>
                                    <span class="text-strong">Step 1</span>
                                    <span class="hidden-xs">Personal details</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab2-2" data-toggle="tab">
                                <i class="fa fa-file-text"></i>
                                <div>
                                    <span class="text-strong">Step 2</span>
                                    <span class="hidden-xs">Billing details</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab2-3" data-toggle="tab">
                                <i class="fa fa-credit-card"></i>
                                <div>
                                    <span class="text-strong">Step 3</span>
                                    <span class="hidden-xs">Payment</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab2-4" data-toggle="tab">
                                <i class="fa fa-check-circle"></i>
                                <div>
                                    <span class="text-strong">Step 4</span>
                                    <span class="hidden-xs">Confirmation</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/ End tabs heading -->

                <!-- Start tabs content -->
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab2-1">
                            <h4>Personal details content</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="tab2-2">
                            <h4>Billing details content</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="tab2-3">
                            <h4>Payment content</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="tab2-4">
                            <h4>Confirmation content</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
                <!--/ End tabs content -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-theme">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--/ End tabs in modal element -->

<!-- Start accordion in modal element -->
<div class="modal fade bs-example-modal-accordion" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="panel-group" id="accordion1">
                <div class="panel panel-default">
                    <div class="panel-heading no-border">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-1">
                                Collapsible Group Item #1
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1-1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading no-border">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-2">
                                Collapsible Group Item #2
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1-2" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading no-border">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-3">
                                Collapsible Group Item #3
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1-3" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-theme">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--/ End accordion in modal element -->

<!-- Start multiple modal overlay element -->
<!-- First modal -->
<div class="modal fade bs-example-modal-multiple" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-theme" data-toggle="modal" data-target=".bs-example-modal-multiple2">Launch modal 2</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Second modal -->
<div class="modal fade bs-example-modal-multiple2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Second Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-theme">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--/ End multiple modal overlay element -->

<!-- Start table in modal element -->
<div class="modal fade bs-example-modal-table" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Sample Table</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body no-padding">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center border-right">No.</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Position</th>
                                    <th class="text-center">Rating</th>
                                    <th class="text-center">Progress</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center border-right">1</td>
                                    <td>
                                        <img src="{{$assetUrl}}global/img/avatar/35/2.png" class="img-circle img-bordered-theme" alt="...">
                                        <span>John Kribo</span>
                                    </td>
                                    <td>United State</td>
                                    <td>Senior Web Designer</td>
                                    <td class="text-center">
                                        <div class="rating">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="progress progress-xs no-margin">
                                            <div class="progress-bar progress-bar-theme" style="width: 45%;"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center border-right">2</td>
                                    <td>
                                        <img src="{{$assetUrl}}global/img/avatar/35/3.png" class="img-circle img-bordered-theme" alt="...">
                                        <span>Jennifer Poiyem</span>
                                    </td>
                                    <td>Spain</td>
                                    <td>Senior UX Designer</td>
                                    <td class="text-center">
                                        <div class="rating">
                                            <span class="star"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="progress progress-xs no-margin">
                                            <div class="progress-bar progress-bar-theme" style="width: 78%;"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center border-right">3</td>
                                    <td>
                                        <img src="{{$assetUrl}}global/img/avatar/35/4.png" class="img-circle img-bordered-theme" alt="...">
                                        <span>Clara Wati</span>
                                    </td>
                                    <td>United State</td>
                                    <td>Developer</td>
                                    <td class="text-center">
                                        <div class="rating">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="progress progress-xs no-margin">
                                            <div class="progress-bar progress-bar-theme" style="width: 45%;"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center border-right">4</td>
                                    <td>
                                        <img src="{{$assetUrl}}global/img/avatar/35/5.png" class="img-circle img-bordered-theme" alt="...">
                                        <span>Toni Mriang</span>
                                    </td>
                                    <td>Germany</td>
                                    <td>Assistant</td>
                                    <td class="text-center">
                                        <div class="rating">
                                            <span class="star"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="progress progress-xs no-margin">
                                            <div class="progress-bar progress-bar-theme" style="width: 78%;"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center border-right">5</td>
                                    <td>
                                        <img src="{{$assetUrl}}global/img/avatar/35/6.png" class="img-circle img-bordered-theme" alt="...">
                                        <span>Bella negoro</span>
                                    </td>
                                    <td>England</td>
                                    <td>Developer</td>
                                    <td class="text-center">
                                        <div class="rating">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="progress progress-xs no-margin">
                                            <div class="progress-bar progress-bar-theme" style="width: 23%;"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center border-right">6</td>
                                    <td>
                                        <img src="{{$assetUrl}}global/img/avatar/35/7.png" class="img-circle img-bordered-theme" alt="...">
                                        <span>Kim Mbako</span>
                                    </td>
                                    <td>Angola</td>
                                    <td>Project Manager</td>
                                    <td class="text-center">
                                        <div class="rating">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star active"></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="progress progress-xs no-margin">
                                            <div class="progress-bar progress-bar-theme" style="width: 56%;"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center border-right">7</td>
                                    <td>
                                        <img src="{{$assetUrl}}global/img/avatar/35/8.png" class="img-circle img-bordered-theme" alt="...">
                                        <span>Pack Suparman</span>
                                    </td>
                                    <td>Indonesian</td>
                                    <td>CEO</td>
                                    <td class="text-center">
                                        <div class="rating">
                                            <span class="star active"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="progress progress-xs no-margin">
                                            <div class="progress-bar progress-bar-theme" style="width: 90%;"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-theme">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--/ End table in modal element -->

<!-- Start photo viewer modal element -->
<div class="modal fade bs-example-modal-photo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-photo-viewer">
        <div class="modal-content">
            <div class="row">

                <div class="col-md-8 col-sm-12 modal-photo-left">
                    <div class="modal-photo">
                        <img src="{{$assetUrl}}global/img/animals/2.jpg" class="photo img-responsive" alt="...">
                    </div>
                </div><!-- /.modal-photo-left -->

                <div class="col-md-4 col-sm-12 modal-photo-right">
                    <div class="media-details">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>

                        <span class="category">Dog Album</span>
                        <h3 class="media-title">Just looking my face</h3>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>

                        <div class="details">
                            <h4>Photo Details</h4>
                            <ul class="list-group no-margin">
                                <li class="list-group-item">
                                    <span class="badge">December 8, 2013</span>
                                    <i class="fa fa-rocket"></i> Published
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">3,532</span>
                                    <i class="fa fa-eye"></i> View
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">17</span>
                                    <i class="fa fa-comments"></i> Comments
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">17</span>
                                    <i class="fa fa-thumbs-up"></i> Like
                                </li>
                            </ul>
                        </div><!-- /.details -->

                    </div><!-- /.media-details -->
                </div><!-- /.modal-photo-right -->

            </div><!-- /.row -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--/ End photo viewer modal element -->
