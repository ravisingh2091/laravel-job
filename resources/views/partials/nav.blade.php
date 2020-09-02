<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li><a href="{{ URL::route('home') }}"><i class="fa fa-laptop"></i><span>Dashboard</span></a></li>
            <li><a href="{{ URL::route('affirmations.index') }}"><i class="fa fa-inbox"></i><span>Affirmations</span></a></li>
            <li><a href="{{ URL::route('enrollments.index') }}"><i class="fa fa-edit"></i><span>Enrollments</span></a></li>
            <li><a href="{{ URL::route('enrollment-payloads.index') }}"><i class="fa fa-inbox"></i><span>Enrollment Payloads</span></a></li>
            <li class="has-sub expand">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-inbox"></i>
                    <span>Legal Templates</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('legal-templates.index') }}"><i class="fa fa-inbox"></i><span>Legal Templates</span></a></li>
                    <li><a href="{{ URL::route('state-document-urls.index') }}"><i class="fa fa-inbox"></i><span>State Document URLS</span></a></li>
                </ul>
            </li>
            <li><a href="{{ URL::route('products.index') }}"><i class="fa fa-inbox"></i><span>Products</span></a></li>
            <li><a href="{{ URL::route('utility-rates.index') }}"><i class="fa fa-inbox"></i><span>Utility Rates</span></a></li>
            <li><a href="{{ URL::route('utility-territory-document-urls.index') }}"><i class="fa fa-inbox"></i><span>Utility Territory Document URLS</span></a></li>

            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->