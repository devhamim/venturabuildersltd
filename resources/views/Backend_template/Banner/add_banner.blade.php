@extends('Backend_template.backend_master')
@section('title', 'Add Banner || Ventura Builders ltd')
@section('maincontent')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Banner</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Banner</a></li>
                                <li class="breadcrumb-item active">Add Banner</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-title-desc"></p>

                            <form action="{{ route('banner.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data" >
                               @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="validationCustom01" class="form-label">Banner Name</label>
                                            <input type="text" name="banner_name" class="form-control" id="validationCustom01"
                                                placeholder="Enter Banner Name" required >
                                                <div class="invalid-feedback">
                                                    @error('banner_name')
                                                    {{ $message }}
                                                    @enderror
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Image</label>
                                                    <div>
                                                        <input type="file" name="banner" id="image" multiple="" class="form-control-file" required
                                                            placeholder="Enter alphanumeric value" />
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('banner')
                                                        {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <Label>Image Preview</Label>
                                                <img id="showImage" src="{{ asset('uploads/no_image.jpg') }}" alt=""
                                                    class="rounded avatar-lg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <div class="row">

                                            <div class="mb-3">
                                                <label>Banner Details</label>
                                                <div>
                                                    <textarea id="elm1" name="banner_details"></textarea>
                                                </div>
                                            </div>
                                            <div class="com-md-6">
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->


            </div> <!-- end row -->


            <script type="text/javascript">

                $(document).ready(function(){
                    $('#image').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#showImage').attr('src',e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });
                });

            </script>
        @endsection
