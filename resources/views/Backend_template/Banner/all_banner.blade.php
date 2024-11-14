@extends('Backend_template.backend_master')
@section('title', 'All Banner || Ventura Builders ltd')
@section('maincontent')
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
                                <li class="breadcrumb-item active">All Banner</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-title-desc">

                            </p>

                            <table id="alternative-page-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Banner Name</th>
                                        <th>Created By</th>
                                        <th>Image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $banners as $banner)
                                    <tr>
                                        <td>{{ $banners->firstItem()+$loop->index }}</td>
                                        <td>{{ $banner->banner_name }}</td>
                                        <td>{{ $banner['user']['name'] }}</td>
                                        <td> <img src="{{ asset($banner->banner) }}" alt="" width="70"></td>
                                        <td style="width: 10px">
                                            <a href="" class="btn btn-outline-secondary btn-sm edit" title="View">
                                                <i class=" fas fa-eye"></i>
                                            </a>
                                        </td>
                                        <td style="width: 10px">
                                            <a href="{{ route('banner.edit',$banner->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                        <td style="width: 100px">
                                            <a href="{{ route('banner.delete',$banner->id) }}" class="btn btn-outline-danger btn-sm edit" id="delete" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

@endsection
