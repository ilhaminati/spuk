<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ URL::to('/') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ URL::to('/lihat') }}"><i class="fa fa-bar-chart-o fa-fw"></i>Lihat Penilaian</a>
            </li>
            <li>
                <a href="{{ URL::to('/tambah') }}"><i class="fa fa-edit fa-fw"></i>Form Penilaian</a>
            </li>
      </div>
    <!-- /.sidebar-collapse -->
