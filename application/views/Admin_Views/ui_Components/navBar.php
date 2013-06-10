<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pakistanihaider
 * Date: 26/05/13
 * Time: 14:32
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo base_url(); ?>admin#/Dashboard/">PBS Admin</a>
            <!-- .topnav -->
            <div class="btn-toolbar topnav">
                <div class="btn-group">
                    <a id="changeSidebarPos" class="btn btn-success" rel="tooltip"
                       data-original-title="Show / Hide Sidebar" data-placement="bottom">
                        <i class="icon-resize-horizontal"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a class="btn btn-inverse" rel="tooltip" data-original-title="E-mail" data-placement="bottom">
                        <i class="icon-envelope"></i>
                        <span class="label label-warning">5</span>
                    </a>
                    <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Messages"
                       data-placement="bottom">
                        <i class="icon-comments"></i>
                        <span class="label label-important">4</span>
                    </a>
                </div>
                <div class="btn-group">
                    <a class="btn btn-inverse" rel="tooltip" href="#" data-original-title="Document"
                       data-placement="bottom">
                        <i class="icon-file"></i>
                    </a>
                    <a href="#helpModal" class="btn btn-inverse" rel="tooltip" data-placement="bottom"
                       data-original-title="Help" data-toggle="modal">
                        <i class="icon-question-sign"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a class="btn btn-inverse" data-placement="bottom" data-original-title="Logout" rel="tooltip"
                       href="login.html"><i class="icon-off"></i></a></div>
            </div>
            <!-- /.topnav -->
            <div class="nav-collapse collapse">
                <!-- .nav -->
                <ul class="nav">
                    <li class="{active: slug == 'system'}"><a href="<?php echo base_url(); ?>admin#/system">System</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            Users <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="form-general.html">Manage Users</a></li>
                            <li><a href="form-validation.html">User Groups</a></li>
                            <li><a href="form-wysiwyg.html">User Permissions</a></li>
                        </ul>
                    </li>
                    <li><a href="file.html">Components</a></li>
                </ul>
                <!-- /.nav -->
            </div>
        </div>
    </div>
</div>