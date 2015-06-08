@extends('theme.index')

@section('content')
<div class="page">

    <div class="panel panel-default">
        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Buttons</strong></div>
        <div class="panel-body">
            <h4>Buttons Styles</h4>
            <dl class="dl-horizontal">
                <dt>Normal version</dt>
                <dd>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-default">Default</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-primary">Primary</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-success">Success</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-info">Info</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-warning">Warning</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-danger">Danger</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-dark">Dark</button>
                </dd>

                <div class="divider"></div>
                <dt>Rounded version</dt>
                <dd>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-default">Default</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-primary">Primary</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-success">Success</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-info">Info</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-warning">Warning</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-danger">Danger</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-dark">Dark</button>
                </dd>
            </dl>

            <h4>Disabled Buttons</h4>
            <dl class="dl-horizontal">
                <dt>Normal version</dt>
                <dd>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-default" disabled>Default</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-primary" disabled>Primary</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-success" disabled>Success</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-info" disabled>Info</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-warning" disabled>Warning</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-danger" disabled>Danger</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-dark" disabled>Dark</button>
                </dd>

                <div class="divider"></div>
                <dt>Rounded version</dt>
                <dd>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-default" disabled>Default</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-primary" disabled>Primary</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-success" disabled>Success</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-info" disabled>Info</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-warning" disabled>Warning</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-danger" disabled>Danger</button>
                    <button type="button" class="btn btn-w-md btn-gap-v btn-round btn-dark" disabled>Dark</button>
                </dd>
            </dl>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Button Width</strong></div>
        <div class="panel-body text-center">
            <p>
                <button type="button" class="btn btn-primary btn-w-xs">xs</button>
                <button type="button" class="btn btn-primary btn-w-sm">small</button>
                <button type="button" class="btn btn-primary btn-w-md">middle</button>
                <button type="button" class="btn btn-primary btn-w-lg">large</button>
            </p>

            <p>
                <button type="button" class="btn btn-default btn-w-xs">xs</button>
                <button type="button" class="btn btn-default btn-w-sm">small</button>
                <button type="button" class="btn btn-default btn-w-md">middle</button>
                <button type="button" class="btn btn-default btn-w-lg">large</button>
            </p>

            <p>
                <button type="button" class="btn btn-success btn-w-xs">xs</button>
                <button type="button" class="btn btn-warning btn-w-sm">small</button>
                <button type="button" class="btn btn-danger btn-w-md">middle</button>
                <button type="button" class="btn btn-info btn-w-lg">large</button>
            </p>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Button Sizes</strong></div>
        <div class="panel-body text-center">
            <p>
                <button type="button" class="btn btn-primary btn-lg">Large button</button>
                <button type="button" class="btn btn-primary">Default button</button>
                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
            </p>

            <p>
                <button type="button" class="btn btn-default btn-lg">Large button</button>
                <button type="button" class="btn btn-default">Default button</button>
                <button type="button" class="btn btn-default btn-sm">Small button</button>
                <button type="button" class="btn btn-default btn-xs">Extra small button</button>
            </p>

            <p>
                <button type="button" class="btn btn-success btn-lg">Large button</button>
                <button type="button" class="btn btn-info">Default button</button>
                <button type="button" class="btn btn-warning btn-sm">Small button</button>
                <button type="button" class="btn btn-danger btn-xs">Extra small button</button>
            </p>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Button with direction</strong></div>
        <div class="panel-body text-center">
            <div class="row">
                <div class="col-md-4">
                    <p><a href="javascript:;" class="btn btn-w-md btn-primary btn-direction btn-up">Up</a></p>
                    <p><a href="javascript:;" class="btn btn-w-md btn-success btn-direction btn-up">Up</a></p>
                    <p><a href="javascript:;" class="btn btn-w-md btn-info btn-direction btn-up">Up</a></p>
                    <p><a href="javascript:;" class="btn btn-w-md btn-warning btn-direction btn-up">Up</a></p>
                    <p><a href="javascript:;" class="btn btn-w-md btn-danger btn-direction btn-up">Up</a></p>
                </div>
                <div class="col-md-4">
                    <p>
                        <a href="javascript:;" class="btn btn-primary btn-direction btn-left">Left</a>
                        <a href="javascript:;" class="btn btn-primary btn-direction">Middle</a>
                        <a href="javascript:;" class="btn btn-primary btn-direction btn-right">RIght</a>
                    </p>
                    <p>
                        <a href="javascript:;" class="btn btn-default btn-direction btn-left">Left</a>
                        <a href="javascript:;" class="btn btn-default btn-direction">Middle</a>
                        <a href="javascript:;" class="btn btn-default btn-direction btn-right">RIght</a>
                    </p>
                    <p>
                        <a href="javascript:;" class="btn btn-success btn-direction btn-left">Left</a>
                        <a href="javascript:;" class="btn btn-info btn-direction">Middle</a>
                        <a href="javascript:;" class="btn btn-danger btn-direction btn-right">RIght</a>
                    </p>
                    <p>
                        <a href="javascript:;" class="btn btn-warning btn-direction btn-left">Left</a>
                        <a href="javascript:;" class="btn btn-success btn-direction">Middle</a>
                        <a href="javascript:;" class="btn btn-info btn-direction btn-right">RIght</a>
                    </p>
                    <p>
                        <a href="javascript:;" class="btn btn-info btn-direction btn-left">Left</a>
                        <a href="javascript:;" class="btn btn-danger btn-direction">Middle</a>
                        <a href="javascript:;" class="btn btn-success btn-direction btn-right">RIght</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <p><a href="javascript:;" class="btn btn-w-md btn-primary btn-direction btn-down">Down</a></p>
                    <p><a href="javascript:;" class="btn btn-w-md btn-success btn-direction btn-down">Down</a></p>
                    <p><a href="javascript:;" class="btn btn-w-md btn-info btn-direction btn-down">Down</a></p>
                    <p><a href="javascript:;" class="btn btn-w-md btn-warning btn-direction btn-down">Down</a></p>
                    <p><a href="javascript:;" class="btn btn-w-md btn-danger btn-direction btn-down">Down</a></p>
                </div>
            </div>

        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Block buttons</strong></div>
            <div class="panel-body">
                <button type="button" class="btn btn-default btn-block">Default</button>
                <button type="button" class="btn btn-primary btn-block">Primary</button>
                <button type="button" class="btn btn-success btn-block">Success</button>
                <button type="button" class="btn btn-info btn-block">Info</button>
                <button type="button" class="btn btn-warning btn-block">Warning</button>
                <button type="button" class="btn btn-danger btn-block">Danger</button>
                <button type="button" class="btn btn-inverse btn-block">Inverse</button>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Button groups</strong></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Button Group</h5>
                        <div class="btn-group">
                            <button type="button" class="btn btn-line-primary">Left</button>
                            <button type="button" class="btn btn-line-primary">Middle</button>
                            <button type="button" class="btn btn-line-primary">Right</button>
                        </div>
                        <div class="space"></div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>

                        <h5>Button toolbar</h5>
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">1</button>
                                <button type="button" class="btn btn-default">2</button>
                                <button type="button" class="btn btn-default">3</button>
                                <button type="button" class="btn btn-default">4</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">5</button>
                                <button type="button" class="btn btn-default">6</button>
                                <button type="button" class="btn btn-default">7</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">8</button>
                            </div>
                        </div>
                        <h5>Sizing</h5>
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group btn-group-lg">
                                <button type="button" class="btn btn-primary">Left</button>
                                <button type="button" class="btn btn-primary">Middle</button>
                                <button type="button" class="btn btn-primary">Right</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h5>Nesting</h5>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">1</button>
                            <button type="button" class="btn btn-default">2</button>

                            <div class="btn-group" dropdown is-open="status.isopen">
                                <button type="button" class="btn btn-default dropdown-toggle" dropdown-toggle ng-disabled="disabled">
                                    Dropdown <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="javascript:;">Dropdown link</a></li>
                                    <li><a href="javascript:;">Dropdown link</a></li>
                                </ul>
                            </div>
                        </div>

                        <h5>Vertical variation</h5>
                        <div class="btn-group-vertical">
                            <button type="button" class="btn btn-default">Top</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Bottom</button>
                        </div>

                    </div>
                </div>

                <h5 class="text-center">Justified link variation</h5>
                <div class="btn-group btn-group-justified">
                    <a class="btn btn-default" role="button">Left</a>
                    <a class="btn btn-default" role="button">Middle</a>
                    <a class="btn btn-default" role="button">Right</a>
                </div>
                <br>
                <div class="btn-group btn-group-justified">
                    <a class="btn btn-info" role="button">Left</a>
                    <a class="btn btn-success" role="button">Middle</a>
                    <a class="btn btn-warning" role="button">Right</a>
                </div>
                <br>
                <div class="btn-group btn-group-justified">
                    <a class="btn btn-success" role="button">Left</a>
                    <a class="btn btn-info" role="button">Middle</a>
                    <a class="btn btn-warning" role="button">Middle</a>
                    <a class="btn btn-danger" role="button">Right</a>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Button with icons</strong></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-center">Button with icons</h5>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-arrow-down"></span> Go down</button>
                        <button class="btn btn-success"><span class="glyphicon glyphicon-briefcase"></span> Briefcase</button>
                        <button class="btn btn-info"><span class="glyphicon glyphicon-calendar"></span> Calendar</button>
                        <button class="btn btn-default"><span class="glyphicon glyphicon-camera"></span> Camera</button>
                        <button class="btn btn-danger"><span class="glyphicon glyphicon-off"></span> Off</button>

                        <div class="divider"></div>
                        <h5 class="text-center">Social buttons</h5>
                        <a href="javascript:;" class="btn btn-default btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                        <a href="javascript:;" class="btn btn-default btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="javascript:;" class="btn btn-default btn-gplus"><i class="fa fa-google-plus"></i> Google+</a>
                    </div>

                    <div class="col-md-6">
                        <h5 class="text-center">Icon buttons</h5>
                        <p>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-instagram"><i class="fa fa-instagram"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-rss"><i class="fa fa-rss"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-tumblr"><i class="fa fa-tumblr"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-dribbble"><i class="fa fa-dribbble"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-youtube"><i class="fa fa-youtube"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-github"><i class="fa fa-github"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-skype"><i class="fa fa-skype"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm btn-viemo"><i class="fa fa-viemo"></i></a>
                        </p>
                        <p>
                            <a href="javascript:;" class="btn-icon btn-icon-sm bg-primary"><i class="fa fa-bell"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm bg-success"><i class="fa fa-cloud"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm bg-info"><i class="fa fa-inbox"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm bg-warning"><i class="fa fa-mail-reply"></i></a>
                            <a href="javascript:;" class="btn-icon btn-icon-sm bg-danger"><i class="fa fa-rocket"></i></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Button dropdowns</strong></div>
            <div class="panel-body">

                <div class="btn-group" dropdown is-open="status.isopen1">
                    <button type="button" class="btn btn-default dropdown-toggle" dropdown-toggle ng-disabled="disabled"> Action <span class="caret"></span> </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:;">Action</a></li>
                        <li><a href="javascript:;">Another action</a></li>
                        <li><a href="javascript:;">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group" dropdown is-open="status.isopen2">
                    <button type="button" class="btn btn-primary dropdown-toggle" dropdown-toggle ng-disabled="disabled"> Action <span class="caret"></span> </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:;">Action</a></li>
                        <li><a href="javascript:;">Another action</a></li>
                        <li><a href="javascript:;">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group" dropdown is-open="status.isopen3">
                    <button type="button" class="btn btn-success dropdown-toggle" dropdown-toggle ng-disabled="disabled"> Action <span class="caret"></span> </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:;">Action</a></li>
                        <li><a href="javascript:;">Another action</a></li>
                        <li><a href="javascript:;">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group" dropdown is-open="status.isopen4">
                    <button type="button" class="btn btn-info dropdown-toggle" dropdown-toggle ng-disabled="disabled"> Action <span class="caret"></span> </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:;">Action</a></li>
                        <li><a href="javascript:;">Another action</a></li>
                        <li><a href="javascript:;">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group" dropdown is-open="status.isopen5">
                    <button type="button" class="btn btn-warning dropdown-toggle" dropdown-toggle ng-disabled="disabled"> Action <span class="caret"></span> </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:;">Action</a></li>
                        <li><a href="javascript:;">Another action</a></li>
                        <li><a href="javascript:;">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group" dropdown is-open="status.isopen6">
                    <button type="button" class="btn btn-danger dropdown-toggle" dropdown-toggle ng-disabled="disabled"> Action <span class="caret"></span> </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:;">Action</a></li>
                        <li><a href="javascript:;">Another action</a></li>
                        <li><a href="javascript:;">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group" dropdown is-open="status.isopen7">
                    <button type="button" class="btn btn-dark dropdown-toggle" dropdown-toggle ng-disabled="disabled"> Action <span class="caret"></span> </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="javascript:;">Action</a></li>
                        <li><a href="javascript:;">Another action</a></li>
                        <li><a href="javascript:;">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Separated link</a></li>
                    </ul>
                </div>

                <h5>Dropup variation</h5>
                <div class="btn-group dropup" dropdown is-open="status.isopen11">
                    <button type="button" class="btn btn-default">Dropup</button>
                    <button type="button" class="btn btn-default dropdown-toggle" dropdown-toggle ng-disabled="disabled">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:;">Action</a></li>
                        <li><a href="javascript:;">Another action</a></li>
                        <li><a href="javascript:;">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Separated link</a></li>
                    </ul>
                </div>

                <div class="btn-group dropup" dropdown is-open="status.isopen12">
                    <button type="button" class="btn btn-primary">Right Dropup</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" dropdown-toggle ng-disabled="disabled">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:;">Action</a></li>
                        <li><a href="javascript:;">Another action</a></li>
                        <li><a href="javascript:;">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop