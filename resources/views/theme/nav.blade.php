
<div class="nav-wrapper">
    <ul id="nav"
        class="nav"
        data-ng-controller="NavCtrl"
        data-slim-scroll
        data-collapse-nav
        data-highlight-active>
        <li><a href="/theme/ui.dashboard"> <i class="fa fa-dashboard"></i><span>Dashboard</span> </a></li>
        <li>
            <a href="#/ui"><i class="fa fa-magic"></i><span>UI Kit</span></a>
            <ul>
                <li><a href="/theme/ui.buttons"><i class="fa fa-caret-right"></i><span>Buttons</span></a></li>
                <li><a href="/theme/ui.typography"><i class="fa fa-caret-right"></i><span data-i18n="Typography"></span></a></li>
                <li><a href="/theme/ui.widgets"><i class="fa fa-caret-right"></i><span data-i18n="Widgets"></span> <span class="badge badge-success">13</span></a></li>
                <li><a href="/theme/ui.grids"><i class="fa fa-caret-right"></i><span data-i18n="Grids"></span></a></li>
                <li><a href="/theme/ui.icons"><i class="fa fa-caret-right"></i><span data-i18n="Icons"></span></a></li>
                <li><a href="/theme/ui.components"><i class="fa fa-caret-right"></i><span data-i18n="Components"></span> <span class="badge badge-danger">18</span></a></li>
                <li><a href="/theme/ui.timeline"><i class="fa fa-caret-right"></i><span data-i18n="Timeline"></span></a></li>
                <li><a href="/theme/ui.nested-lists"><i class="fa fa-caret-right"></i><span data-i18n="Nested Lists"></span></a></li>
                <li><a href="/theme/ui.pricing-tables"><i class="fa fa-caret-right"></i><span data-i18n="Pricing Tables"></span></a></li>
                <li><a href="/theme/ui.maps"><i class="fa fa-caret-right"></i><span data-i18n="Maps"></span>  <span class="badge badge-warning">2</span></a></li>
            </ul>
        </li>
        <li>
            <a href="#/pages"><i class="fa fa-file-text-o"></i><span data-i18n="Pages"></span></a>
            <ul>
                <li><a href="http://iarouse.com/admin-transform-alt/landing/index.html" target="_blank"><i class="fa fa-caret-right"></i><span data-i18n="Landing Page"></span></a></li>
                <li><a href="/theme/pages.signin"><i class="fa fa-caret-right"></i><span data-i18n="Sign in"></span></a></li>
                <li><a href="/theme/pages.signup"><i class="fa fa-caret-right"></i><span data-i18n="Sign Up"></span></a></li>
                <li><a href="/theme/pages.forgot-password"><i class="fa fa-caret-right"></i><span data-i18n="Forgot Password"></span></a></li>
                <li><a href="/theme/pages.lock-screen"><i class="fa fa-caret-right"></i><span data-i18n="Lock Screen"></span></a></li>
                <li><a href="/theme/pages.profile"><i class="fa fa-caret-right"></i><span data-i18n="User Profile"></span></a></li>
                <li><a href="/theme/pages.404"><i class="fa fa-caret-right"></i>404 <span data-i18n="Error"></span></a></li>
                <li><a href="/theme/pages.500"><i class="fa fa-caret-right"></i>500 <span data-i18n="Error"></span></a></li>
                <li><a href="/theme/pages.blank"><i class="fa fa-caret-right"></i><span data-i18n="Blank Page"></span></a></li>
                <li><a href="/theme/pages.invoice"><i class="fa fa-caret-right"></i><span data-i18n="Invoice"></span></a></li>
            </ul>
        </li>
        <li>
            <a href="#/table"><i class="fa fa-table"></i><span data-i18n="Tables"></span></a>
            <ul>
                <li><a href="/theme/tables.static"><i class="fa fa-caret-right"></i><span data-i18n="Static Tables"></span></a></li>
                <li><a href="/theme/tables.responsive"><i class="fa fa-caret-right"></i><span data-i18n="Responsive Tables"></span></a></li>
                <li><a href="/theme/tables.dynamic"><i class="fa fa-caret-right"></i><span data-i18n="Dynamic Tables"></span></a></li>
            </ul>
        </li>
        <li>
            <a href="#/form"><i class="fa fa-pencil"></i><span data-i18n="Forms"></span></a>
            <ul>
                <li><a href="/theme/forms.elements"><i class="fa fa-caret-right"></i><span data-i18n="Form Elements"></span> <span class="badge badge-warning">14</span></a></li>
                <li><a href="/theme/forms.validation"><i class="fa fa-caret-right"></i><span data-i18n="Form Validation"></span></a></li>
                <li><a href="/theme/forms.wizard"><i class="fa fa-caret-right"></i><span data-i18n="Form Wizard"></span></a></li>
                <li><a href="/theme/forms.layouts"><i class="fa fa-caret-right"></i><span data-i18n="Form Layouts"></span></a></li>
            </ul>
        </li>
        <li>
            <a href="#/charts"><i class="fa fa-bar-chart-o"></i><span data-i18n="Charts"></span></a>
            <ul>
                <li><a href="/theme/charts.flot"><i class="fa fa-caret-right"></i>Flot <span data-i18n="Charts"></span></a></li>
                <li><a href="/theme/charts.morris"><i class="fa fa-caret-right"></i>Morris <span data-i18n="Charts"></span></a></li>
                <li><a href="/theme/charts.charts"><i class="fa fa-caret-right"></i>Other <span data-i18n="Charts"></span></a></li>
            </ul>
        </li>
        <li class="nav-task">
            <a href="#/tasks/tasks">
                <i class="fa fa-tasks"></i><span data-i18n="Tasks"></span>
                <span class="badge badge-danger main-badge"
                      data-ng-show="taskRemainingCount > 0"></span>
            </a>
        </li>
        <li>
            <a href="#/mail"><i class="fa fa-envelope-o"></i><span data-i18n="Mail"></span></a>
            <ul>
                <li><a href="/theme/mail.inbox"><i class="fa fa-caret-right"></i><span data-i18n="Inbox"></span></a></li>
                <li><a href="/theme/mail.compose"><i class="fa fa-caret-right"></i><span data-i18n="Compose"></span></a></li>
                <li><a href="/theme/mail.single"><i class="fa fa-caret-right"></i><span data-i18n="Single Mail"></span></a></li>
            </ul>
        </li>
    </ul>
</div>