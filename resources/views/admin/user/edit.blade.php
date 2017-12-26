@extends('admin.layouts.app')
@section('main-content')
<div class="panel-heading clearfix">
    <h4 class="panel-title">Posting baru</h4>
</div>

<div class="panel-body">
    
       <form role="form" action="{{ route('user.update', $admins->id) }}" method="post" >      
       {{ csrf_field() }}
        
            {{ method_field('PUT') }}
        

        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="masukan nama" value="@if (old('name')){{ old('name') }}@else{{ $admins->name }}@endif">
            </div>
        </div>
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="admin@gmail.com" name="email"
                value="@if (old('email')){{ old('email') }}@else{{ $admins->email }}@endif">
            </div>
        </div>
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="*********" name="password">
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Confrim Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password_confirmation" placeholder="*********" name="password_confirmation">
            </div>
        </div> --}}
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">No Telp</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="phone" name="phone" placeholder="masukan nomor telp"  value="@if (old('phone')){{ old('phone') }}@else{{ $admins->phone }}@endif">
            </div>
        </div>
        <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" name="address" placeholder="masukan alamat lengkap">
            </div>
        </div>
         {{-- <div class="form-group">
            <label for="input-Default" class="col-sm-2 control-label">Status</label>
            <div class="col-sm-3">
                <input type="checkbox" name="status" value="1">
            </div>
        </div>
 --}}
          <div class="form-group">
                  <label for="confirm_passowrd">Status</label>
                  <div class="checkbox">
                    <label ><input type="checkbox" name="status" @if (old('status') == 1)
                      checked
                    @endif value="1">Status</label>
                  </div>
                </div>

      <center>
        <div class="form-group">
          <input type="submit" class="btn btn-primary">
          <a href='{{ route('user.index') }}' class="btn btn-warning">Back</a>
      </div>
     </center>  
      </form>
      </div>
      </div>
      </div>
@endsection        