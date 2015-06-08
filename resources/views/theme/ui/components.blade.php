<div class="page">

<!--     <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Example</div>
        <div class="panel-body">
            
        </div>
    </div> -->


    <!-- Notfify -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Notify</div>
        <div class="panel-body" data-ng-controller="NotifyCtrl">
            <button class="btn btn-w-md btn-gap btn-info" data-ng-click="notify('info')">info message</button>
            <button class="btn btn-w-md btn-gap btn-success" data-ng-click="notify('success')">success message</button>
            <button class="btn btn-w-md btn-gap btn-warning" data-ng-click="notify('warning')">warning message</button>
            <button class="btn btn-w-md btn-gap btn-danger" data-ng-click="notify('error')">error message</button>
            <div class="callout callout-info">
                <p>Notification will show in lower right corner.</p>
            </div>
        </div>
    </section>
    <!-- end Notify -->


    <!-- Bullet -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Bullet</div>
        <div class="panel-body">
            <div class="divider divider-lg"></div>

            <div class="row">
                <div class="col-md-4">
                    <div class="ui-bullet">
                        <div class="ui-bullet-icon round-icon bg-primary">
                            <i class="fa fa-cab"></i>
                        </div>
                        <div class="ui-bullet-content">
                            <h3>This Bullet Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, nesciunt, eius accusamus quam quaerat molestiae voluptas dignissimos tempora non veniam. Sint libero quia repellendus eveniet dolores distinctio amet consectetur suscipit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ui-bullet">
                        <div class="ui-bullet-icon round-icon bg-info">
                            <i class="fa fa-database"></i>
                        </div>
                        <div class="ui-bullet-content">
                            <h3>Another Bullet Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, nesciunt, eius accusamus quam quaerat molestiae voluptas dignissimos tempora non veniam. Sint libero quia repellendus eveniet dolores distinctio amet consectetur suscipit.</p>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-4">
                    <div class="ui-bullet">
                        <div class="ui-bullet-icon round-icon bg-danger">
                            <i class="fa fa-joomla"></i>
                        </div>
                        <div class="ui-bullet-content">
                            <h3>Last Bullet Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, nesciunt, eius accusamus quam quaerat molestiae voluptas dignissimos tempora non veniam. Sint libero quia repellendus eveniet dolores distinctio amet consectetur suscipit.</p>
                        </div>
                    </div>                    
                </div>
            </div>

            <div class="divider divider-lg"></div>
        </div>
    </section>
    <!-- end Bullet -->


    <!-- Alert -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Alerts</div>
        <div class="panel-body" data-ng-controller="AlertDemoCtrl">
            <alert ng-repeat="alert in alerts" type="@{{alert.type}}" close="closeAlert($index)">@{{alert.msg}}</alert>
            <button class='btn btn-primary' ng-click="addAlert()">Add Alert</button>
        </div>
    </section>
    <!-- end Alert -->


    <!-- Ribbons -->
    <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Ribbons</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default ui-ribbon-container">
                        <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                                30% Off
                            </div>
                        </div>
                        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Ribbon</div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti rerum reprehenderit ipsam natus saepe. Recusandae, itaque nulla in illum dolorum ea eveniet quaerat ipsa placeat magni commodi obcaecati mollitia necessitatibus?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default ui-ribbon-container ui-ribbon-primary">
                        <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                                30% Off
                            </div>
                        </div>
                        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Ribbon-primary</div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti rerum reprehenderit ipsam natus saepe. Recusandae, itaque nulla in illum dolorum ea eveniet quaerat ipsa placeat magni commodi obcaecati mollitia necessitatibus?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default ui-ribbon-container ui-ribbon-success">
                        <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                                30% Off
                            </div>
                        </div>
                        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Ribbon-success</div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti rerum reprehenderit ipsam natus saepe. Recusandae, itaque nulla in illum dolorum ea eveniet quaerat ipsa placeat magni commodi obcaecati mollitia necessitatibus?</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default ui-ribbon-container ui-ribbon-info">
                        <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                                30% Off
                            </div>
                        </div>
                        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Ribbon-info</div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti rerum reprehenderit ipsam natus saepe. Recusandae, itaque nulla in illum dolorum ea eveniet quaerat ipsa placeat magni commodi obcaecati mollitia necessitatibus?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default ui-ribbon-container ui-ribbon-warning">
                        <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                                30% Off
                            </div>
                        </div>
                        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Ribbon-warning</div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti rerum reprehenderit ipsam natus saepe. Recusandae, itaque nulla in illum dolorum ea eveniet quaerat ipsa placeat magni commodi obcaecati mollitia necessitatibus?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default ui-ribbon-container ui-ribbon-danger">
                        <div class="ui-ribbon-wrapper">
                            <div class="ui-ribbon">
                                30% Off
                            </div>
                        </div>
                        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Ribbon-danger</div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti rerum reprehenderit ipsam natus saepe. Recusandae, itaque nulla in illum dolorum ea eveniet quaerat ipsa placeat magni commodi obcaecati mollitia necessitatibus?</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end Ribbons -->


    <!-- Progressbar -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Progressbar</div>
        <div class="panel-body" data-ng-controller="ProgressDemoCtrl">
            <div class="page-header">
                <h3>Static Progressbar</h3>
            </div>
            <progressbar class="progressbar-sm" value="34" type="success"></progressbar>
            <progressbar class="progressbar-sm" value="68" type="info"></progressbar>
            <progressbar class="progressbar-sm" value="52" type="warning"></progressbar>
            <progressbar class="progressbar-sm" value="77" type="danger"></progressbar>
            <p class="text-muted">Stacked Progress Bars</p>
            <progress class="progressbar-sm">
                <bar value="40" type="success"></bar>
                <bar value="20" type="warning"></bar>
                <bar value="20" type="danger"></bar>
            </progress>            

            <div class="page-header">
                <h3>Striped Progressbar</h3>
            </div>
            <progressbar class="progressbar-sm progress-striped" value="34" type="success"></progressbar>
            <progressbar class="progressbar-sm progress-striped" value="68" type="info"></progressbar>
            <progressbar class="progressbar-sm progress-striped" value="52" type="warning"></progressbar>
            <progressbar class="progressbar-sm progress-striped" value="77" type="danger"></progressbar>
            <p class="text-muted">Animated Progress Bars</p>
            <progressbar class="progressbar-sm progress-striped active" value="55"></progressbar>
            <progress class="progressbar-sm progress-striped active">
                <bar value="40" type="success"></bar>
                <bar value="20" type="warning"></bar>
                <bar value="20" type="danger"></bar>
            </progress> 

            <div class="page-header">
                <h3>Dynamic Progressbar</h3>
            </div>
            <progressbar max="max" value="dynamic"><span>@{{dynamic}} / @{{max}}</span></progressbar>

            <p class="text-muted">No animation</p>
            <progressbar animate="false" value="dynamic" type="success"><b>@{{dynamic}}%</b></progressbar>

            <p class="text-muted">Object <em>(changes type based on value)</em></p>
            <progressbar class="progress-striped active" value="dynamic" type="@{{type}}">@{{type}} <i ng-show="showWarning">!!! Watch out !!!</i></progressbar>
            <div class="divider"></div>
            <button class="btn btn-sm btn-primary" type="button" ng-click="random()">Randomize</button>
        </div>
    </section>
    <!-- end Progressbar -->


    <!-- Tab -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Tabs</div>
        <div class="panel-body" data-ng-controller="TabsDemoCtrl">

            <div class="row">
                <div class="col-sm-6">
                    <h3>Simple Tabs</h3>
                    <div class="divider"></div>
                    <tabset class="ui-tab">
                        <tab heading="Static title">Static content here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quidem, officiis, et ex laudantium sed cupiditate voluptatum libero nobis sit illum voluptates beatae ab. Ad, repellendus non sequi et at.</tab>
                        <tab ng-repeat="tab in tabs" heading="@{{tab.title}}" active="tab.active" disabled="tab.disabled">
                            @{{tab.content}}
                        </tab>
                    </tabset>

                    <h3>Panel Tabs</h3>
                    <div class="divider"></div>
                    <div class="ui-tab-container">
                        <tabset class="ui-tab">
                            <tab heading="Home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, aspernatur, eum fugit officiis numquam iste aut illo quos pariatur Eligendi, veniam, accusamus. </tab>
                            <tab heading="Quod ea">Quod ea vel dolores earum veritatis quae sunt tempore odit molestias sit optio quaerat cupiditate iure repudiandae illum doloremque consectetur incidunt!</tab>
                            <tab heading="Earum sequi">Blanditiis tenetur harum distinctio voluptate asperiores non magnam delectus. Consequatur, deleniti rem magnam possimus necessitatibus iusto suscipit mollitia rerum.</tab>
                        </tabset>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h3>Justified Tabs</h3>
                    <div class="divider"></div>
                    <tabset justified="true" class="ui-tab">
                        <tab heading="Justified">Justified content</tab>
                        <tab heading="SJ">Short Labeled Justified content</tab>
                        <tab heading="Long Justified">Long Labeled Justified content</tab>
                    </tabset>

                    <div class="divider divider-md"></div>

                    <h3>Justified Panel Tabs</h3>
                    <div class="divider"></div>
                    <div class="ui-tab-container">
                        <tabset justified="true" class="ui-tab">
                            <tab heading="Justified">Justified content</tab>
                            <tab heading="SJ">Short Labeled Justified content</tab>
                            <tab heading="Long Justified">Long Labeled Justified content</tab>
                        </tabset>
                    </div>
                </div>

            </div>

            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="ui-tab-container ui-tab-success">
                        <tabset class="ui-tab">
                            <tab heading="Home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, aspernatur, eum fugit officiis numquam iste aut illo quos pariatur Eligendi, veniam, accusamus. </tab>
                            <tab heading="Quod ea">Quod ea vel dolores earum veritatis quae sunt tempore odit molestias sit optio quaerat cupiditate iure repudiandae illum doloremque consectetur incidunt!</tab>
                            <tab heading="Earum sequi">Blanditiis tenetur harum distinctio voluptate asperiores non magnam delectus. Consequatur, deleniti rem magnam possimus necessitatibus iusto suscipit mollitia rerum.</tab>
                        </tabset>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="ui-tab-container ui-tab-info">
                        <tabset class="ui-tab">
                            <tab heading="Home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, aspernatur, eum fugit officiis numquam iste aut illo quos pariatur Eligendi, veniam, accusamus. </tab>
                            <tab heading="Quod ea">Quod ea vel dolores earum veritatis quae sunt tempore odit molestias sit optio quaerat cupiditate iure repudiandae illum doloremque consectetur incidunt!</tab>
                            <tab heading="Earum sequi">Blanditiis tenetur harum distinctio voluptate asperiores non magnam delectus. Consequatur, deleniti rem magnam possimus necessitatibus iusto suscipit mollitia rerum.</tab>
                        </tabset>
                    </div>                      
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="ui-tab-container ui-tab-warning">
                        <tabset class="ui-tab">
                            <tab heading="Home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, aspernatur, eum fugit officiis numquam iste aut illo quos pariatur Eligendi, veniam, accusamus. </tab>
                            <tab heading="Quod ea">Quod ea vel dolores earum veritatis quae sunt tempore odit molestias sit optio quaerat cupiditate iure repudiandae illum doloremque consectetur incidunt!</tab>
                            <tab heading="Earum sequi">Blanditiis tenetur harum distinctio voluptate asperiores non magnam delectus. Consequatur, deleniti rem magnam possimus necessitatibus iusto suscipit mollitia rerum.</tab>
                        </tabset>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="ui-tab-container ui-tab-danger">
                        <tabset class="ui-tab">
                            <tab heading="Home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, aspernatur, eum fugit officiis numquam iste aut illo quos pariatur Eligendi, veniam, accusamus. </tab>
                            <tab heading="Quod ea">Quod ea vel dolores earum veritatis quae sunt tempore odit molestias sit optio quaerat cupiditate iure repudiandae illum doloremque consectetur incidunt!</tab>
                            <tab heading="Earum sequi">Blanditiis tenetur harum distinctio voluptate asperiores non magnam delectus. Consequatur, deleniti rem magnam possimus necessitatibus iusto suscipit mollitia rerum.</tab>
                        </tabset>
                    </div>                      
                </div>
            </div>
        </div>
    </section>
    <!-- end Tab -->


    <!-- Accordion -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Accordion or Collapse</div>
        <div class="panel-body" data-ng-controller="AccordionDemoCtrl">
            <p>Open only one at a time?</p>
            <label class="switch switch-success"><input type="checkbox" ng-model="oneAtATime"><i></i></label>
            <hr>

            <accordion close-others="oneAtATime" class="ui-accordion">
                <accordion-group heading="Static Header, initially expanded" is-open="status.isFirstOpen">
                    This content is straight in the template.
                </accordion-group>
                <accordion-group heading="@{{group.title}}" ng-repeat="group in groups">
                    @{{group.content}}
                </accordion-group>
            </accordion>
        
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <accordion close-others="oneAtATime" class="ui-accordion ui-accordion-success">
                        <accordion-group heading="Consectetur adipisicing elit" is-open="status.isFirstOpen1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, totam, iusto, quibusdam, voluptates ullam consequuntur facilis odio magni error fugit architecto a.
                        </accordion-group>
                        <accordion-group heading="Temporibus consequatur vel veritatis">
                            Asperiores, natus error eveniet velit id labore quo necessitatibus. Voluptatum, eaque, vel explicabo nobis nulla quasi veritatis reprehenderit quam pariatur culpa magni perferendis voluptas quas.
                        </accordion-group>
                        <accordion-group heading="Vel veritatis corrupti minima">
                             Ab, unde, quasi harum voluptatum voluptate quaerat repudiandae doloremque aut deserunt laborum nisi fugit maiores ex vero quisquam dignissimos recusandae reprehenderit sint illum?
                        </accordion-group>
                    </accordion>
                </div>
                <div class="col-md-6">
                    <accordion close-others="oneAtATime" class="ui-accordion ui-accordion-info">
                        <accordion-group heading="Consectetur adipisicing elit" is-open="status.isFirstOpen2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, totam, iusto, quibusdam, voluptates ullam consequuntur facilis odio magni error fugit architecto a.
                        </accordion-group>
                        <accordion-group heading="Temporibus consequatur vel veritatis">
                            Asperiores, natus error eveniet velit id labore quo necessitatibus. Voluptatum, eaque, vel explicabo nobis nulla quasi veritatis reprehenderit quam pariatur culpa magni perferendis voluptas quas.
                        </accordion-group>
                        <accordion-group heading="Vel veritatis corrupti minima">
                             Ab, unde, quasi harum voluptatum voluptate quaerat repudiandae doloremque aut deserunt laborum nisi fugit maiores ex vero quisquam dignissimos recusandae reprehenderit sint illum?
                        </accordion-group>                    
                    </accordion>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <accordion close-others="oneAtATime" class="ui-accordion ui-accordion-warning">
                        <accordion-group heading="Consectetur adipisicing elit" is-open="status.isFirstOpen3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, totam, iusto, quibusdam, voluptates ullam consequuntur facilis odio magni error fugit architecto a.
                        </accordion-group>
                        <accordion-group heading="Temporibus consequatur vel veritatis">
                            Asperiores, natus error eveniet velit id labore quo necessitatibus. Voluptatum, eaque, vel explicabo nobis nulla quasi veritatis reprehenderit quam pariatur culpa magni perferendis voluptas quas.
                        </accordion-group>
                        <accordion-group heading="Vel veritatis corrupti minima">
                             Ab, unde, quasi harum voluptatum voluptate quaerat repudiandae doloremque aut deserunt laborum nisi fugit maiores ex vero quisquam dignissimos recusandae reprehenderit sint illum?
                        </accordion-group>
                    </accordion>
                </div>
                <div class="col-md-6">
                    <accordion close-others="oneAtATime" class="ui-accordion ui-accordion-danger">
                        <accordion-group heading="Consectetur adipisicing elit" is-open="status.isFirstOpen4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, totam, iusto, quibusdam, voluptates ullam consequuntur facilis odio magni error fugit architecto a.
                        </accordion-group>
                        <accordion-group heading="Temporibus consequatur vel veritatis">
                            Asperiores, natus error eveniet velit id labore quo necessitatibus. Voluptatum, eaque, vel explicabo nobis nulla quasi veritatis reprehenderit quam pariatur culpa magni perferendis voluptas quas.
                        </accordion-group>
                        <accordion-group heading="Vel veritatis corrupti minima">
                             Ab, unde, quasi harum voluptatum voluptate quaerat repudiandae doloremque aut deserunt laborum nisi fugit maiores ex vero quisquam dignissimos recusandae reprehenderit sint illum?
                        </accordion-group>                    
                    </accordion>
                </div>
            </div>
        </div>
    </section>
    <!-- end Accordion -->


    <div class="row">
        <div class="col-md-6">
            <!-- Popover -->
            <section class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Popover</div>
                <div class="panel-body text-center">
                    <button popover-placement="top" popover-title="The title." popover="On the Top!" popover-append-to-body="true" class="btn btn-w-lg btn-primary btn-gap">Popover on Top</button>
                    <br>
                    <button popover-placement="right" popover-title="The title." popover="On the Right!" popover-append-to-body="true" class="btn btn-w-lg btn-info btn-gap">Popover on Right</button>
                    <br>
                    <button popover-placement="bottom" popover-title="The title." popover="On the Bottom!" popover-append-to-body="true" class="btn btn-w-lg btn-success btn-gap">Popover on Bottom</button>
                    <br>
                    <button popover-placement="left" popover-title="The title." popover="On the Left!" popover-append-to-body="true" class="btn btn-w-lg btn-warning btn-gap">Popover on Left</button>
                    <br>
                    <button popover="On mouse enter!" popover-trigger="mouseenter" class="btn btn-w-lg btn-danger btn-gap">Popover on Mouseenter</button>
                    <input type="text" value="Popover on Click" popover="I appeared on focus! Click away and I'll vanish..."  popover-trigger="focus" class="form-control">
                </div>
            </section>
            <!-- Popover -->
        </div>
        <div class="col-md-6">
            <!-- Tooltip -->
            <section class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Tooltip</div>
                <div class="panel-body text-center">
                    <button class="btn btn-w-lg btn-default btn-gap" tooltip-placement="top" tooltip="On the Top!" tooltip-append-to-body="true">Tooltip on Top</button>
                    <br>
                    <button class="btn btn-w-lg btn-primary btn-gap" tooltip-placement="left" tooltip="On the Left!" tooltip-append-to-body="true">Tooltip on Left</button>
                    <br>
                    <button class="btn btn-w-lg btn-success btn-gap" tooltip-placement="right" tooltip="On the Right!" tooltip-append-to-body="true">Tooltip on Right</button>
                    <br>
                    <button class="btn btn-w-lg btn-info btn-gap" tooltip-placement="bottom" tooltip="On the Bottom!" tooltip-append-to-body="true">Tooltip on Bottom</button>
                    <br>
                    <button class="btn btn-w-lg btn-warning btn-gap" tooltip-popup-delay='1000' tooltip='appears with delay' tooltip-append-to-body="true">Tooltip Delayed</button>
                    <br>
                    <button class="btn btn-w-lg btn-danger btn-gap" tooltip-animation="false" tooltip="I don't fade. :-(" tooltip-append-to-body="true">Tooltip without Animation</button>
                </div>
            </section>
            <!-- end Tooltip -->
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <!-- Labels -->
            <section class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Labels</div>
                <div class="panel-body text-center">
                    <p class="text-muted">Labels</p>
                    <span class="label label-default">Default label</span>
                    <div class="space"></div>
                    <span class="label label-primary">Primary</span>
                    <div class="space"></div>
                    <span class="label label-success">Success</span>
                    <div class="space"></div>
                    <span class="label label-info">Info</span>
                    <div class="space"></div>
                    <span class="label label-warning">Warning</span>
                    <div class="space"></div>
                    <span class="label label-danger">Danger</span>
                    <div class="divider"></div>
                    <p class="text-muted">Badges</p>
                    <span class="badge">7</span>
                    <div class="space"></div>
                    <span class="badge badge-primary">1</span>
                    <div class="space"></div>
                    <span class="badge badge-success">2</span>
                    <div class="space"></div>
                    <span class="badge badge-info">4</span>
                    <div class="space"></div>
                    <span class="badge badge-warning">8</span>
                    <div class="space"></div>
                    <span class="badge badge-danger">16</span>
                </div>
            </section>
            <!-- end Labels -->


            <!-- Modal -->
            <section class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Modal</div>
                <div class="panel-body" data-ng-controller="ModalDemoCtrl">
                    <script type="text/ng-template" id="myModalContent.html">
                        <div class="modal-header">
                            <h3>I am a modal!</h3>
                        </div>
                        <div class="modal-body">
                            <span ng-repeat="item in items" class="list-unstyled">
                                <label class="ui-radio"><input name="radio1" type="radio" value="@{{ item }}"  ng-checked="selected.item === item" ng-click="selected.item = item"><span>@{{ item }}</span></label>
                            </span>
                            <br>
                            Selected: <b>@{{ selected.item }}</b>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" ng-click="ok()">OK</button>
                            <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
                        </div>
                    </script>

                    <button class="btn btn-primary" ng-click="open()">Open me!</button>
                    <button class="btn btn-info" ng-click="open()">Open me!</button>
                    <button class="btn btn-success" ng-click="open()">Open me!</button>
                    <button class="btn btn-danger" ng-click="open()">Open me!</button>
                    <div class="divider"></div>
                    <div class="callout callout-info" ng-show="selected">
                        <p>Selection from a modal: @{{ selected }}</p>
                    </div>
                </div>
            </section>
            <!-- end Modal -->

        </div>

        <div class="col-md-6">

            <!-- Collapse -->
            <section class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Collapse</div>
                <div class="panel-body" data-ng-controller="CollapseDemoCtrl">
                    <button class="btn btn-primary" ng-click="isCollapsed = !isCollapsed">Toggle collapse</button>
                    <hr>
                    <div collapse="isCollapsed">
                        <div class="well well-lg">Some content</div> 
                    </div>            
                </div>
            </section>
            <!-- end Collapse -->

        </div>
    </div>



    <!-- Pagination -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Pagination</div>
        <div class="panel-body" data-ng-controller="PaginationDemoCtrl">
            <div class="page-header">
                <h3>Pagination sizing</h3>
            </div>            

            <pagination class="pagination-lg" total-items="totalItems" ng-model="currentPage"></pagination>
            <br>
            <pagination boundary-links="true" total-items="totalItems" ng-model="currentPage" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></pagination>
            <br>
            <pagination class="pagination-sm" direction-links="false" total-items="totalItems" ng-model="currentPage" num-pages="smallnumPages"></pagination>
            <div class="callout callout-info">
                <p>The selected page no: @{{currentPage}}</p>
            </div>
            <button class="btn btn-primary" ng-click="setPage(3)">Set current page to: 3</button>                    
            <div class="page-header">
                <h3>Limit the maximum visible buttons</h3>
            </div>
            <pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true"></pagination>
            <br>
            <pagination total-items="bigTotalItems" ng-model="bigCurrentPage" max-size="maxSize" class="pagination-sm" boundary-links="true" rotate="false" num-pages="numPages"></pagination>
            <div class="callout callout-info">
                <p>Page: @{{bigCurrentPage}} / @{{numPages}}</p>
            </div>                    
        </div>
    </section>
    <!-- end Pagination -->


    <!-- Panels -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Panels</div>
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    Panel content
                </div>
                <div class="panel-footer">Panel footer</div>
            </div>
            <div class="panel panel-dark">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
    </section>
    <!-- end Panels -->



    <!-- Callout -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Callout</div>
        <div class="panel-body">
            <div class="callout callout-success">
                <h4>Callout heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, alias, in accusantium totam adipisci vel et suscipit quidem libero pariatur minus ratione quo doloremque error at nemo incidunt dicta quia?</p>
            </div>
            <div class="callout callout-info">
                <h4>Callout heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, alias, in accusantium totam adipisci vel et suscipit quidem libero pariatur minus ratione quo doloremque error at nemo incidunt dicta quia?</p>
            </div>
            <div class="callout callout-warning">
                <h4>Callout heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, alias, in accusantium totam adipisci vel et suscipit quidem libero pariatur minus ratione quo doloremque error at nemo incidunt dicta quia?</p>
            </div>
            <div class="callout callout-danger">
                <h4>Callout heading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, alias, in accusantium totam adipisci vel et suscipit quidem libero pariatur minus ratione quo doloremque error at nemo incidunt dicta quia?</p>
            </div>
        </div>
    </section>
    <!-- end Callout -->


    <!-- Well -->
    <section class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Well</div>
        <div class="panel-body">
            <div class="well well-sm">Look, I'm in a small well!</div>
            <div class="well">Look, I'm in a well!</div>
            <div class="well well-lg">Look, I'm in a large well!</div>
        </div>
    </section>
    <!-- end Well -->


    <!-- Scrollable Box -->
    <div class="panel panel-default">
        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Scrollable Box</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><span class="glyphicon glyphicon-th"></span> Scrollable Box</div>
                        <div class="panel-body ui-map " data-slim-scroll data-scroll-height="200px">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, tenetur, repellat obcaecati unde esse doloribus accusamus exercitationem vitae corporis blanditiis aspernatur quibusdam porro rerum voluptatum quos eligendi necessitatibus enim! Maiores, doloribus, fuga, perspiciatis cupiditate aperiam repellendus natus nisi recusandae rerum optio consectetur nemo reprehenderit nesciunt molestiae at. Molestiae, nesciunt inventore dignissimos itaque exercitationem vero aliquam provident aperiam repudiandae nostrum. Ipsa, possimus, natus culpa magni rem iusto ut quisquam cupiditate aspernatur nemo sed aliquam quam illum illo quos dolor animi ipsum dolorem sunt beatae officia facere voluptatem omnis! Sapiente, illo voluptatibus amet omnis optio labore nesciunt porro facere praesentium laudantium molestiae voluptas eos incidunt quod nulla. Provident, debitis, odit qui ab facere adipisci laborum ea necessitatibus sapiente voluptatibus minima inventore veritatis unde nemo ipsa quisquam dolorum autem et minus repudiandae nostrum aliquam numquam aperiam similique vero delectus maiores non aliquid laboriosam eius impedit cum vel a corporis consequuntur natus earum suscipit. Repellat, laborum, cupiditate aperiam distinctio vero dolor est quibusdam sit rerum expedita tempore reiciendis quidem quisquam deserunt autem pariatur eos fugiat qui hic temporibus ullam dicta voluptatem sequi at iusto! Accusamus, iure, optio temporibus molestiae ab dolor blanditiis veritatis corporis eius reiciendis sed molestias obcaecati dolorem similique rerum illo excepturi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body ui-map " data-slim-scroll data-scroll-height="240px">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, tenetur, repellat obcaecati unde esse doloribus accusamus exercitationem vitae corporis blanditiis aspernatur quibusdam porro rerum voluptatum quos eligendi necessitatibus enim! Maiores, doloribus, fuga, perspiciatis cupiditate aperiam repellendus natus nisi recusandae rerum optio consectetur nemo reprehenderit nesciunt molestiae at. Molestiae, nesciunt inventore dignissimos itaque exercitationem vero aliquam provident aperiam repudiandae nostrum. Ipsa, possimus, natus culpa magni rem iusto ut quisquam cupiditate aspernatur nemo sed aliquam quam illum illo quos dolor animi ipsum dolorem sunt beatae officia facere voluptatem omnis! Sapiente, illo voluptatibus amet omnis optio labore nesciunt porro facere praesentium laudantium molestiae voluptas eos incidunt quod nulla. Provident, debitis, odit qui ab facere adipisci laborum ea necessitatibus sapiente voluptatibus minima inventore veritatis unde nemo ipsa quisquam dolorum autem et minus repudiandae nostrum aliquam numquam aperiam similique vero delectus maiores non aliquid laboriosam eius impedit cum vel a corporis consequuntur natus earum suscipit. Repellat, laborum, cupiditate aperiam distinctio vero dolor est quibusdam sit rerum expedita tempore reiciendis quidem quisquam deserunt autem pariatur eos fugiat qui hic temporibus ullam dicta voluptatem sequi at iusto! Accusamus, iure, optio temporibus molestiae ab dolor blanditiis veritatis corporis eius reiciendis sed molestias obcaecati dolorem similique rerum illo excepturi.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end Scrollable Box -->


</div>


