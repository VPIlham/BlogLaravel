@extends('admin.layouts.app')

@section('main-content')
{{-- 
                    <a class='btn btn-success btn-addon m-b-sm' href="">
                        Tambah Baru</a> --}}
                        
                        <a class="btn btn-success btn-addon m-b-sm" href="{{ route('tag.create') }}"><i class="fa fa-plus"></i>Tambah Baru</a>
                        
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Table Tags</h4>
                        </div>
                        <div class="panel-body">
                         <div class="table-responsive">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Tags</th>
                                        <th>Slug</th>
                                        <th>Dibuat</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Tags</th>
                                        <th>Slug</th>
                                        <th>Dibuat</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                 @foreach($tags as $tag)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->slug }}</td>
                                        <td>{{ $tag->created_at }}</td>
                                        <td><a href="{{ route('tag.edit',$tag->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                <td>
                                 <form id="delete-form-{{ $tag->id }}" method="post" action="{{ route('tag.destroy',$tag->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                </form>
                                  <a href="" onclick="
                                 if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $tag->id }}').submit();
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
