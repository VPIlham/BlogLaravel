@extends('admin.layouts.app')
@section('main-content')
<div class="panel-heading clearfix">
  <h4 class="panel-title">Posting baru</h4>
</div>

<div class="panel-body">

 <form role="form" action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PUT') }}

  <div class="form-group">
    <label for="input-Default" class="col-sm-2 control-label">Judul</label>
    
      <input type="text" class="form-control" id="title" name="title" placeholder="masukan judul"
      value="{{ $post->title }}">
    
  </div>
  
  <div class="form-group">
    <label for="input-Default" class="col-sm-2 control-label">Lokasi</label>
    
      <input type="text" class="form-control" id="subtitle" placeholder="masukan Lokasi" name="subtitle" value="{{ $post->subtitle }}">
   
  </div>
  
  <div class="form-group">
    <label for="input-Default" class="col-sm-2 control-label">Harga</label>
   
      <input type="text" class="form-control" id="price" placeholder="Rp .." name="price"
      value="{{ $post->price }}">
   
  </div>
  
  <div class="form-group">
    <label for="input-Default" class="col-sm-2 control-label">Slug</label>
  
      <input type="text" class="form-control" id="slug" placeholder="cnth motor-baru-honda-2017" name="slug"
      value="{{ $post->slug }}">
  
  </div>
  
  <div class="form-group">
    <label for="input-Default" class="col-sm-2 control-label">File Gambar</label>
  
      <input type="file" name="image" id="image">
  
  </div>
  
  <div class="form-group">
    <label for="input-Default" class="col-sm-2 control-label">Status</label>
  
      <input type="checkbox" name="status" value="1"  @if ($post->status == 1)
      {{'checked'}}
      @endif> Publish
  
  </div>

  <h4 class="no-m m-b-sm m-t-lg">Pilih Tags</h4>
  <select class="js-example-tokenizer js-states form-control" multiple="multiple" tabindex="-1" style="display: none; width: 100%"  name="tags[]">
    <optgroup label="Pilih Tags">
     @foreach ($tags as $tag)
     <option value="{{ $tag->id }}"
      @foreach ($post->tags as $postTag)
      @if ($postTag->id == $tag->id)
      selected
      @endif
      @endforeach
      >{{ $tag->name }}</option>
      @endforeach
    </optgroup>
  </select>

  <center><label class="panel-title">Isi</label></center><br>


  <div class="box-body pad">
   <textarea name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1">{{ $post->body }}</textarea>
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