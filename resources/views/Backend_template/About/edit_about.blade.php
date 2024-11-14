@extends('Backend_template.backend_master')
@section('title', 'Update About || Frisk')
@section('maincontent')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Update Page</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">About</a></li>
                            <li class="breadcrumb-item active">Update About</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('update.about',$edit_abouts->id) }}" method="POST" class="needs-validation" novalidate >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">About Title</label>
                                        <input type="text" name="about_title" class="form-control" id="validationCustom01"
                                            value="{{ $edit_abouts->about_title }}"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">About Description</label>
                                        <textarea name="about_description" class="form-control" id="validationCustom02" cols="10" rows="3" required> {{ $edit_abouts->about_description }}</textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
@endsection
