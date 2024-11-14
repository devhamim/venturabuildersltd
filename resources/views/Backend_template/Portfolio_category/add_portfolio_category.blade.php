@extends('Backend_template.backend_master')
@section('title', 'Add Work Category || Frisk')
@section('maincontent')


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Portfolio Category</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Portfolio Category</a></li>
                            <li class="breadcrumb-item active">Add Portfolio Category</li>
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
                        <form  action="{{ route('portfolio.category.store') }}" method="POST"  class="needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">Portfolio Category Name</label>
                                        <input type="text" name="portfolio_category_name" class="form-control" id="validationCustom01"
                                            placeholder="Write Category Category Name" required >
                                        @error('portfolio_category_name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
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