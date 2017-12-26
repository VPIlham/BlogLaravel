@extends('admin.layouts.app')

@section('main-content')
{{-- 
                    <a class='btn btn-success btn-addon m-b-sm' href="">
                        Tambah Baru</a> --}}
                        
                        <a class="btn btn-success btn-addon m-b-sm" href="{{ route('user.create') }}"><i class="fa fa-plus"></i>Tambah Baru</a>
                        
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Table Tags</h4>
                        </div>
                        <div class="panel-body">
                         <div class="table-responsive">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Dibuat</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Dibuat</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                 @foreach($admins as $admin)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->phone }}</td>
                                        <td>{{ $admin->address }}</td>
                                        <td>{{ $admin->phone }}</td>
                                        <td>{{ $admin->created_at }}</td>
                                        <td><a href="{{ route('user.edit',$admin->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                <td>
                                <form id="delete-form-{{ $admin->id }}" method="post" action="{{ route('user.destroy',$admin->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                </form>
                                  <a href="" onclick="
                                 if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $admin->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>  
                        </div>
                    </div>
                </div>
            </div>
            @endsection
