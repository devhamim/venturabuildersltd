@extends('Backend_template.backend_master')
@section('title', 'All Portfolio || Ventura Builders ltd')
@section('maincontent')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Porfolio Page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Portfolio</a></li>
                                <li class="breadcrumb-item active">All Portfolio</li>
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
                                        <th>Portfolio Name</th>
                                        <th>Category </th>
                                        <th>Created By</th>
                                        <th>Image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $portfolios as $portfolio)
                                    <tr>
                                        <td>{{ $portfolios->firstItem()+$loop->index }}</td>
                                        <td>{{ $portfolio->portfolio_name }}</td>
                                        <td>{{ $portfolio['call_to_port_cat']['portfolio_category_name'] }}</td>
                                        <td>{{ $portfolio['user']['name'] }}</td>
                                        <td> <img src="{{ asset($portfolio->image) }}" alt="" width="70"></td>
                                        <td style="width: 10px">
                                            <a href="" class="btn btn-outline-secondary btn-sm edit" title="View">
                                                <i class=" fas fa-eye"></i>
                                            </a>
                                        </td>
                                        <td style="width: 10px">
                                            <a href="{{ route('edit.portfolio',$portfolio->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                        <td style="width: 100px">
                                            <a href="{{ route('delete.portfolio',$portfolio->id) }}" class="btn btn-outline-danger btn-sm edit" id="delete" title="Delete">
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
