@extends('layout.app')

@section('content')
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4>Edit AboutUs</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('aboutUs.update', $aboutU->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">About Us in English</label>
                                            <textarea name="aboutUs_en" class="form-control">{{ old('aboutUs_en', $aboutU->aboutUs_en) }}</textarea>
                                            @error('aboutUs_en')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">About Us in Arabic</label>
                                            <textarea name="aboutUs_ar" class="form-control">{{ old('aboutUs_ar', $aboutU->aboutUs_ar) }}</textarea>
                                            @error('aboutUs_ar')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <br/>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@stop
