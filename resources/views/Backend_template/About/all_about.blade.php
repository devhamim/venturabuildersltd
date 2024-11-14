@extends('Backend_template.backend_master')
@section('title', 'About || Frisk')
@section('maincontent')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All About Post</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Editable Table</li>
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

                        <h4 class="card-title">About</h4>

                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_abouts as $key => $about)
                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">{{ $all_abouts->firstItem()+$loop->index }}</td>
                                        <td data-field="about_title">{{ $about->about_title }}</td>
                                        <td data-field="about_description"> <textarea  cols="30" rows="3">{{ $about->about_description }}</textarea> </td>

                                        <td data-field="created_at">{{ $about->created_at->diffForHumans() }}</td>

                                        <td style="width: 10px">
                                            <a href="{{ route('edit.about',$about->id) }}" class="btn btn-outline-primary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                        <td style="width: 100px">
                                            <a href="{{ route('soft.delete.about',$about->id) }}"  class="btn btn-outline-secondary btn-sm edit" id="delete" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                {{ $all_abouts->links() }}
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        {{-- Trash About start --}}
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Trash About</h4>

                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Deleted At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trash_abouts as $key => $trash_about)
                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">{{ $trash_abouts->firstItem()+$loop->index }}</td>
                                        <td data-field="name">{{ $trash_about->about_title }}</td>

                                        <td data-field="age"> <textarea  cols="30" rows="3">{{ $trash_about->about_description }}</textarea> </td>
                                        <td data-field="gender">{{ $trash_about->deleted_at->diffForHumans() }}</td>
                                        <td style="width: 10px">
                                            <a href="{{ route('restore.about',$trash_about->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Restore About">
                                                <i class="fas fa-undo-alt"></i>
                                            </a>
                                        </td>
                                        <td style="width: 100px">
                                            <a href="{{ route('perma.delete',$trash_about->id) }}" class="btn btn-outline-danger btn-sm edit" id="delete" title="Permanent Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                {{ $trash_abouts->links() }}
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>



@endsection
