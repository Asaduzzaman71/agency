@extends('layouts.admin')
@section('content')


<!-- Main content -->
<div class="content mt-4">
    <div class="container-fluid">
        <div>
            <div style="margin:10px 35px">
                @include('include.flash_message')
            </div>
            <!-- form start -->
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                       <h3 class="card-title">All blogs </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>name</th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if( count($blogs)>0 )
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$blog->id}}</td>
                                 <td><img height="50" width="50" src="{{asset('storage/'.$blog->image)}}"></td>
                                <td>{{$blog->name}}</td>
                                <td>{{$blog->description}}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.blogs.edit', $blog->id) }}"><i class="uil-pen"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="uil-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>

            <!-- Dark Header Modal -->
            <div class="modal fade show" :class="{show: showModal}" tabindex="-1" aria-labelledby="dark-header-modalLabel" style="background: #3333335c;backdrop-filter: blur(1px);" :style="showModal ? 'display: block;' : ''">
                <div class="modal-dialog">
                    <div class="modal-content" style="transform: translateY(250px);">
                        <div class="modal-header modal-colored-header bg-dark">
                            <h4 class="modal-title" id="dark-header-modalLabel">Modal Heading</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>There are many orderes of under this compnay.</p>
                            <h5>Please confirm to delete</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger">Delete Now</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>

            <!-- /.card -->
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

