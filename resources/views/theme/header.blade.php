<header class="top-header clearfix">

    <!-- Logo -->
    <div class="logo">
        <a href="#/">
            <!-- <span class="logo-icon glyphicon glyphicon-fire"></span> -->
            <span>LOGO</span>
        </a>
    </div>

    <!-- needs to be put after logo to make it working-->
    <div class="menu-button" toggle-off-canvas>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>

    <div class="top-nav">
        <ul class="nav-left list-unstyled">
            <li>
                <a href="#/" data-toggle-nav-collapsed-min
                   class="toggle-min"
                   id="step4"
                        ><i class="fa fa-bars"></i></a>
            </li>
            <li class="dropdown hidden-xs" dropdown is-open="isopenSetting">
                <a href="javascript:;" class="dropdown-toggle" dropdown-toggle ng-disabled="disabled"><i class="fa fa-cogs"></i></a>
                <div class="dropdown-menu with-arrow panel panel-default admin-options" ui-not-close-on-click>
                    <div class="panel-heading"> Admin Options </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p>Layouts Style</p>
                            <label class="ui-radio"><input name="layout" type="radio" value="boxed" ng-model="admin.layout"><span>Boxed</span></label>
                            <label class="ui-radio"><input name="layout" type="radio" value="wide" ng-model="admin.layout"><span>Wide</span></label>
                        </li>
                        <li class="list-group-item">
                            <p>Menu Style</p>
                            <label class="ui-radio"><input name="menu" type="radio" value="vertical" ng-model="admin.menu"><span>Vertical</span></label>
                            <label class="ui-radio"><input name="menu" type="radio" value="horizontal" ng-model="admin.menu"><span>Horizontal</span></label>
                        </li>
                        <li class="list-group-item">
                            <p>Additional</p>
                            <label class="ui-checkbox"><input name="checkbox1" type="checkbox" value="option1" ng-model="admin.fixedHeader"><span>Fixed Top Header</span></label>
                            <br>
                            <label class="ui-checkbox"><input name="checkbox1" type="checkbox" value="option1" ng-model="admin.fixedSidebar"><span>Fixed Sidebar Menu</span></label>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown text-normal nav-profile" dropdown is-open="status.isopenProfile">
                <a href="javascript:;" class="dropdown-toggle" dropdown-toggle ng-disabled="disabled">
                    <img src="images/g1.jpg" alt="" class="img-circle img30_30">
                    <span class="hidden-xs">
                        <span data-i18n="Lisa Doe"></span>
                    </span>
                </a>
                <ul class="dropdown-menu with-arrow">
                    <li>
                        <a href="#/pages/profile">
                            <i class="fa fa-user"></i>
                            <span data-i18n="My Profile"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#/tasks/tasks">
                            <i class="fa fa-check"></i>
                            <span data-i18n="My Tasks"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#/pages/lock-screen">
                            <i class="fa fa-lock"></i>
                            <span data-i18n="Lock"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#/pages/signin">
                            <i class="fa fa-sign-out"></i>
                            <span data-i18n="Log Out"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="nav-right pull-right list-unstyled">
            <li class="dropdown" dropdown is-open="isopenComment">
                <a href="javascript:;" class="dropdown-toggle bg-info" dropdown-toggle ng-disabled="disabled">
                    <i class="fa fa-comment-o"></i>
                    <span class="badge badge-info">2</span>
                </a>
                <div class="dropdown-menu pull-right with-arrow panel panel-default">
                    <div class="panel-heading">
                        You have 2 messages.
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="round-icon sm bg-info"><i class="fa fa-comment-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Jane sent you a message</span>
                                    <span class="text-muted">3 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="round-icon sm bg-danger"><i class="fa fa-comment-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Lynda sent you a mail</span>
                                    <span class="text-muted">9 hours ago</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a href="javascript:;">Show all messages.</a>
                    </div>
                </div>
            </li>
            <li class="dropdown" dropdown is-open="isopenEmail">
                <a href="javascript:;" class="dropdown-toggle bg-success" dropdown-toggle ng-disabled="disabled">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge badge-info">3</span>
                </a>
                <div class="dropdown-menu pull-right with-arrow panel panel-default">
                    <div class="panel-heading">
                        You have 3 mails.
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="round-icon sm bg-warning"><i class="fa fa-envelope-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Lisa sent you a mail</span>
                                    <span class="text-muted block">2min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="round-icon sm bg-info"><i class="fa fa-envelope-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Jane sent you a mail</span>
                                    <span class="text-muted">3 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="round-icon sm bg-success"><i class="fa fa-envelope-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Lynda sent you a mail</span>
                                    <span class="text-muted">9 hours ago</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a href="javascript:;">Show all mails.</a>
                    </div>
                </div>
            </li>
            <li class="dropdown" dropdown is-open="isopeBell">
                <a href="javascript:;" class="dropdown-toggle bg-warning" dropdown-toggle ng-disabled="disabled">
                    <i class="fa fa-bell-o nav-icon"></i>
                    <span class="badge badge-info">3</span>
                </a>
                <div class="dropdown-menu pull-right with-arrow panel panel-default">
                    <div class="panel-heading">
                        You have 3 notifications.
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="round-icon sm bg-success"><i class="fa fa-bell-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">New tasks needs to be done</span>
                                    <span class="text-muted block">2min ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="round-icon sm bg-info"><i class="fa fa-bell-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">Change your password</span>
                                    <span class="text-muted">3 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" class="media">
                                <span class="media-left media-icon">
                                    <span class="round-icon sm bg-danger"><i class="fa fa-bell-o"></i></span>
                                </span>
                                <div class="media-body">
                                    <span class="block">New feature added</span>
                                    <span class="text-muted">9 hours ago</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a href="javascript:;">Show all notifications.</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="#/tasks/tasks" class="bg-danger" id="step3">
                    <i class="fa fa-tasks"></i>
                </a>
            </li>
        </ul>
    </div>

</header>
