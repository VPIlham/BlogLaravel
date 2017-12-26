@extends('admin.layouts.app')
@section('main-content')
<div class="panel-heading clearfix">
    <h4 class="panel-title">Posting baru</h4>
</div>

<div class="panel-body">
    
      <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
       
        {{ csrf_field() }}

        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="masukan judul">
            </div>
        </div>
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="subtitle" placeholder="masukan Lokasi" name="subtitle">
            </div>
        </div>
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Harga</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="price" placeholder="Rp .." name="price">
            </div>
        </div>
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="slug" placeholder="cnth motor-baru-honda-2017" name="slug">
            </div>
        </div>
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">File Gambar</label>
            <div class="col-sm-3">
                <input type="file" name="image" id="image">
            </div>
        </div>
       <div class="form-group">
          <label for="input-Default" class="col-sm-2 control-label">Status</label>
          <div class="col-sm-3">
              <input type="checkbox" name="status" value="1"> Publish
          </div>
      </div>
        <h4 class="no-m m-b-sm m-t-lg">Pilih Tags</h4>
        <select class="js-example-tokenizer js-states form-control" multiple="multiple" tabindex="-1" style="display: none; width: 100%" name="tags[]">
            <optgroup label="Pilih Tags">
            @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
            </optgroup>
        </select>
        
        <center><label  class="panel-title">Isi</label></center><br>
        

        <div class="box-body pad">
           <textarea name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
       </div>
       <div class="box-footer">
          <input type="submit" class="btn btn-primary">
          <a href='{{ route('post.index') }}' class="btn btn-warning">Back</a>
      </div>

  </form>


</div>
</div>
</div>



@endsection
@section('footer')
<script src="{{asset('admin/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('admin/js/modern.min.js')}}"></script>
<script src="{{asset('admin/js/pages/form-select2.js')}}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
  });
</script>
@endsection