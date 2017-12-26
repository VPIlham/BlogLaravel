<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">

                <div class="sidebar-profile-image">
                    <img src="{{asset('admin/images/user.png')}}" class="img-circle img-responsive" alt="">
                </div>
                <div class="sidebar-profile-details">
                <span> {{ Auth::user()->name }} 
                <br><small>{{ Auth::user()->email}} </small></span>
                </div>
            </a>
        </div>
    </div>
</div>

<ul class="menu accordion-menu">

    <li class="droplink"><a class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p>
        <span class="arrow"></span></a>
        <ul class="sub-menu">
            <li><a href="{{ route('post.index') }}">Post</a></li>
            <li><a href="{{ route('tag.index') }}">Tags</a></li>
            <li><a href="{{ route('user.index')}}">Lihat Data pengguna</a></li>
        </ul>
    </li>

</ul>
</div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->

<div class="page-inner">

    <div class="page-title">
        <h3>Dashboard</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">

                    @section('sidebar')
                    @show