@extends('admin.layouts.app')

@section('main-content')

<ul class="menu accordion-menu">
</ul>
</div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->
<div class="panel-heading clearfix">
  <center>
  <h3 class="panel-title">Halo <h1>{{ ucfirst(Auth::user()->name) }}</h1> Selamat Datang  ! </h3>
  </center>
</div>

@endsection