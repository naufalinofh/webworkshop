<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
        <!-- Sidebar user panel (optional) -->
        @if (Auth::check())
        <div class="user-panel">
            <div class="pull-left image">
                <img src='{{ asset("customer_assets/Logo.png") }}' class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                {{--  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>  --}}
            </div>
        </div>
        @endif
    
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            @foreach($sidebar as $list)
                <li class="{{ $list['state'] }}"><a href="{{ $list['link'] }}"><i class="{{ $list['fa'] }}"></i> <span>{{ $list['text'] }}</span></a></li>
            @endforeach
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
