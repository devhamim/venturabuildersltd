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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contact</a></li>
                            <li class="breadcrumb-item active">Update Contact</li>
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
                        <form action="{{ route('update.contact',$edit_contacts->id) }}" method="POST" class="needs-validation" novalidate >
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Contact Title</label>
                                            <input  name="contact_title"   type="text" class="form-control" id="validationCustom02"  value="{{ $edit_contacts->contact_title }}" required></input>
                                        <div class="valid-feedback">
                                            Looks good! @error('contact_title') is-invalid @else is-valid @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Contact Mobile</label>
                                            <input  name="contact_mobile"   type="mobile" class="form-control" id="validationCustom02"  value="{{ $edit_contacts->contact_mobile }}" required></input>
                                        <div class="valid-feedback">
                                            Looks good! @error('contact_mobile') is-invalid @else is-valid @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Contact Email</label>
                                            <input  name="contact_email"   type="mobile" class="form-control" id="validationCustom02"  value="{{ $edit_contacts->contact_email }}" required></input>
                                        <div class="valid-feedback">
                                            Looks good! @error('contact_mobile') is-invalid @else is-valid @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Contact Description</label>
                                        <textarea name="contact_description" class="form-control" id="validationCustom02" cols="10" rows="3" required> {{ $edit_contacts->contact_description }}</textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Google Map</label>
                                        <textarea name="contact_google_map" class="form-control" id="validationCustom02" cols="10" rows="3" required> {{ $edit_contacts->contact_google_map }}</textarea>
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
