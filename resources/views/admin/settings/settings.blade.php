@extends('admin.layouts.master')
@section('content')
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Settings</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" action="{{route('updateSettings')}}" method="post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$setting->id}}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Footer Text <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="footerText" class="form-control col-md-7 col-xs-12" value="{{$setting->footerText}}">
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Existing Cover Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img src="" width="120px" height="120px">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Update carousel Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="carouselImage" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection