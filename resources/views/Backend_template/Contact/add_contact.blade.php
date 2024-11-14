@extends('Backend_template.backend_master')
@section('title', 'Add Contact || Frisk')
@section('maincontent')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Contact</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contact</a></li>
                            <li class="breadcrumb-item active">Add Contact</li>
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
                        <form action="{{ route('contact.store') }}" method="POST" class="needs-validation" novalidate >
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Contact Title</label>
                                        <input type="text" name="contact_title" class="form-control" id="validationCustom01"
                                            placeholder="Contact  Title" required >

                                            <div class="invalid-feedback">
                                                @error('contact_title')
                                                {{ $message }}
                                                @enderror
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Mobile</label>
                                            <input  name="contact_mobile"   type="mobile" class="form-control" id="validationCustom02"  placeholder="Contact  Mobile" required></input>
                                        <div class="invalid-feedback">
                                             @error('contact_mobile') {{ $message }} @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Email</label>
                                            <input name="contact_email" type="email" class="form-control" id="validationCustom02"  placeholder="Contact  Email" ></input>
                                        <div class="valid-feedback">
                                            @error('contact_email') {{ $message }} @enderror
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Contact Description</label>
                                            <textarea name="contact_description" class="form-control" id="validationCustom02"  placeholder="Contact  Description" ></textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Google Map</label>
                                            <textarea name="contact_google_map" class="form-control" id="validationCustom02"  placeholder="Google Map Link" required></textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-primary" type="submit">Save</button>
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
