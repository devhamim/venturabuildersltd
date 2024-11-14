@extends('Backend_template.backend_master')
@section('title', 'Edit Portfolio || Ventura Builders ltd')
@section('maincontent')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Portfolio</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Portfolio</a></li>
                                <li class="breadcrumb-item active">Add Portfolio</li>
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

                            <form action="{{ route('update.portfolio',$edite_portfolio->id) }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data" >
                               @csrf
                               <input type="hidden" name="old_image" value="{{ $edite_portfolio->image }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Category Name</label>
                                            <select name="portfolio_category_id" id="" class="form-control" >
                                                @foreach ( $edite_port_cats as $cat)
                                                <option value="{{ $cat->id }}" {{$cat->id == $edite_portfolio->portfolio_category_id ? 'Selected' : '' }} >{{ $cat->portfolio_category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Portfolio Name</label>
                                            <div>
                                                <input type="text" name="portfolio_name"  value="{{ $edite_portfolio->portfolio_name }}" class="form-control"
                                                    placeholder="Enter Portfolio Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Client Name</label>
                                            <div>
                                                <input type="text" name="client_name" value="{{ $edite_portfolio->client_name }}" class="form-control"
                                                    placeholder="Enter Client Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Project Date</label>
                                            <div class="input-group" id="datepicker2">
                                                <input type="text" name="project_date" value="{{ $edite_portfolio->project_date }}" class="form-control" placeholder="dd M yyyy"
                                                    data-date-format="yyyy-m-dd" data-date-container='#datepicker2'
                                                    data-provide="datepicker" data-date-autoclose="true">

                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Project URL</label>
                                                <div>
                                                    <input name="project_url" value="{{ $edite_portfolio->project_url }}" type="text" class="form-control"
                                                        placeholder="Project URl" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label>Image</label>
                                                        <div>
                                                            <input type="file" name="image" id="image" multiple="" class="form-control-file"
                                                                placeholder="Enter alphanumeric value" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <Label>Image Preview</Label>
                                                    <img id="showImage" src="{{ asset($edite_portfolio->image) }}" alt=""
                                                        class="rounded avatar-lg">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="mb-3">
                                                <label>Details</label>
                                                <div>
                                                    <textarea id="elm1" name="details">{{ $edite_portfolio->details }}</textarea>
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
