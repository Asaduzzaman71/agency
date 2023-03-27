@extends('layouts.admin')
@section('content')


<!-- Main content -->
<div class="content mt-4">
    <div class="container-fluid">
        <div>
            <!-- general form elements -->
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit blog</h3>
            </div>
            <!-- /.card-header -->
            <div style="margin:15px 35px">
                @include('include.flash_message')
            </div>
            <!-- form start -->
            <form role="form" action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('admin.blog.form')
            </form>
            </div>
            <!-- /.card -->
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection




