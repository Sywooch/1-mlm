<ul class="nav nav-tabs">
    <li class="active">
        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
            <span class="badge badge-danger">2</span>
        </a>
    </li>
    <li>
        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
            <span class="badge badge-success">7</span>
        </a>
    </li>
    <li class="dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
            <i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu pull-right">
            <li>
                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-bell"></i> Alerts </a>
            </li>
            <li>
                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-info"></i> Notifications </a>
            </li>
            <li>
                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-speech"></i> Activities </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-settings"></i> <?php echo \nodge\eauth\Widget::widget(['action' => 'site/login']); ?> </a>
            </li>
        </ul>
    </li>
</ul>