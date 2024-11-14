
@extends('Backend_template.backend_master')
@section('title', 'All Setings || Ventura Builders ltd')
@section('maincontent')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Form Validation</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Validation</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('logo.store') }}" method="POST" class="custom-validation" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <img id="showImage" src="{{ asset('uploads/no_image.jpg') }}" alt=""
                                class="img-thumbnail" width="150">
                            </div>

                            <div class="mb-3">
                                <label>Upload Logo Here</label>
                                <div>
                                    <input type="file" name="logo_image" id="image" multiple="" class="form-control-file"
                                        placeholder="Enter alphanumeric value" />
                                </div>

                            </div>


                            <div class="mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Update
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

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
