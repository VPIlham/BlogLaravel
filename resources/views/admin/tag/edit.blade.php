@extends('admin.layouts.app')
@section('main-content')
<div class="panel-heading clearfix">
    <h4 class="panel-title">Posting baru</h4>
</div>

<div class="panel-body">
  
  <form role="form" action="{{ route('tag.update', $tags->id) }}" method="post" enctype="multipart/form-data">
  
  {{ csrf_field() }}
  {{ method_field('PUT') }}

        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Judul Tags</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="masukan judul tags" value="{{$tags->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" placeholder="masukan slug" name="slug" value="{{$tags->slug}}">
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