@csrf
<div class="card-body">
    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Title" value="{{ $blog->name  ?? old('name')  }}">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Enter description" value="{{ $blog->description  ?? old('description')  }}"></textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image" >
        @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
        @endif
    </div>
    @if (isset($blog) && $blog->image)
        <img src="{{asset('storage/'.$blog->image)}}" style="max-height:100px" />
    @endif
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
