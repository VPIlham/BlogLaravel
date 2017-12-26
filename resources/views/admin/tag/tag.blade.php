@extends('admin.layouts.app')
@section('main-content')
<div class="panel-heading clearfix">
    <h4 class="panel-title">Posting baru</h4>
</div>

<div class="panel-body">
    
      <form role="form" action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
       
        {{ csrf_field() }}

        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Judul Tags</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="masukan judul tags">
            </div>
        </div>
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" placeholder="masukan slug " name="slug">
            </div>
        </div>
      <center>
        <div class="form-group">
          <input type="submit" class="btn btn-primary">
          <a href='{{ route('tag.index') }}' class="btn btn-warning">Back</a>
      </div>
     </center>  
      </form>
      </div>
      </div>
      </div>
@endsection        