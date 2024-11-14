@extends('Backend_template.backend_master')
@section('title', 'Experience Category || Frisk')
@section('maincontent')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Experience Category Page</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Experience Category</a></li>
                            <li class="breadcrumb-item active">All Experience Category</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Experience Category</h4>

                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Created By</th>
                                        <th>Category Name</th>
                                        <th>Created At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ( $experience_categories as $key=>$experience_category )



                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">{{ $experience_categories->firstItem()+$loop->index }}</td>
                                        <td data-field="created_by">{{ $experience_category['user']['name'] }}</td>
                                        <td data-field="created_by">{{ $experience_category->experience_category_name }}</td>
                                        <td data-field="created_by">{{ $experience_category->created_at->diffforhumans() }}</td>
                                        <td style="width: 10px">
                                            <a href="{{ route('experience.category.edit',$experience_category->id) }}" class="btn btn-outline-primary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                        <td style="width: 100px">
                                            <a href="{{ route('experience.category.delete',$experience_category->id) }}"  class="btn btn-outline-secondary btn-sm edit" id="delete" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        {{-- Trash contact start --}}
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Trash Contcat</h4>

                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Created By</th>
                                        <th>Category Name</th>
                                        <th>Deleted At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>




                                    @foreach ( $trashed_experience_cats as $key=>$trashed_experience_cat )


                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">{{ $trashed_experience_cats->firstItem()+$loop->index }}</td>
                                        <td data-field="created_by">{{ $trashed_experience_cat['user']['name'] }}</td>
                                        <td data-field="created_by">{{ $trashed_experience_cat->experience_category_name }}</td>
                                        <td data-field="created_by">{{ $trashed_experience_cat->deleted_at->diffforhumans() }}</td>

                                        <td style="width: 10px">
                                            <a href="{{ route('experience.category.restore',$trashed_experience_cat->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Restore contact">
                                                <i class="fas fa-undo-alt"></i>
                                            </a>
                                        </td>
                                        <td style="width: 100px">
                                            <a href="{{ route('experience.category.parmanent.delete',$trashed_experience_cat->id) }}" class="btn btn-outline-danger btn-sm edit" id="delete" title="Permanent Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>



@endsection
