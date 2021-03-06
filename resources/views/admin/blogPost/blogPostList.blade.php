@extends('admin.layouts.master')
@section('content')
@if(Session::has('delete'))
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Success!</strong> {{ Session::get('delete') }}</center>
            </div>
          @endif
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Blog Post List</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Serial No.</th>
                          <th>Title</th>
                          <th>Cover Image</th>
                          <th>Description</th>
                          <th style="width: 23%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $i=1; ?>
                      	@foreach($blogPosts as $blogPost)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$blogPost->title}}</td>
                          <td>
                          	<img src="{{asset($blogPost->photo)}}" width="100px" height="100px">
                          </td>
                          <td>{{Str::words($blogPost->description,15,' ....')}}</td>
                          <td>
                  			<a href="#" class="btn btn-info">View</a>
                  			<a href="{{route('editBlogPost',[$blogPost->id])}}" class="btn btn-warning">Edit</a>
                  			<a href="{{route('deleteBlogPost',[$blogPost->id])}}" onclick="return confirm('are you sure to delete this post?');" class="btn btn-danger">Delete</a>
 	                      </td>
                        </tr> 
                        @endforeach              
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection