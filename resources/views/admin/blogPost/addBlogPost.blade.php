@extends('admin.layouts.master')
@section('pageJs')
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
        tinymce.init({
            selector: '#mytextarea'
        });
</script>
@endsection
@section('content')
          <div class="">
            <div class="page-title">
                <center><h3>Add Blog Post</h3><center>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <form action="{{route('saveBlogPost')}}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  @csrf
                  
                  <label for="fullname">Title</label>
                  <input type="text" class="blogForm-control" name="title" required />
                  <br>
                  <label for="fullname">Upload Photo</label>
                  <input type="file" class="blogForm-control" name="photo" required />
                  <br>
                  <label for="fullname">Description</label>
                  <textarea id="mytextarea" name="description"></textarea>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
            </form>
            </div>
          </div>
@endsection

