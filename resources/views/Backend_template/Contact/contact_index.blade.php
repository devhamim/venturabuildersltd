@extends('Backend_template.backend_master')
@section('title', 'Contact || Frisk')
@section('maincontent')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Contact Post</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contcat</a></li>
                            <li class="breadcrumb-item active">Contcat Post</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Contact</h4>

                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Google Map</th>
                                        <th>Created At</th>
                                        <th>Update At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $key=>$contact)


                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">{{ $contacts->firstItem()+$loop->index }}</td>
                                        <td data-field="contact_title">{{ $contact->contact_title }}</td>
                                        <td data-field="created_at">{{ $contact->contact_mobile }}</td>
                                        <td data-field="created_at">{{ $contact->contact_email }}</td>
                                        <td data-field="contact_description"> <textarea name=""  cols="30" rows="3">{{ $contact->contact_description }}</textarea> </td>
                                        <td data-field="contact_google_map"> <textarea name=""  cols="30" rows="3"> {{ $contact->contact_google_map }}</textarea> </td>
                                        <td data-field="created_at">{{ $contact->created_at->diffForHumans() }}</td>
                                        <td data-field="updated_at">{{ date('d M Y, h:i A', strtotime($contact->updated_at)) }}</td>
                                        <td style="width: 10px">
                                            <a href="{{ route('contact.edit',$contact->id) }}" class="btn btn-outline-primary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                        <td style="width: 100px">
                                            <a href="{{ route('contact.delete',$contact->id) }}"  class="btn btn-outline-secondary btn-sm edit" id="delete" title="Delete">
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Trash Contcat</h4>

                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Google Map</th>
                                        <th>Deleted At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $trash_contacts as $key=> $trash_contact )


                                    <tr data-id="1">
                                        <td data-field="id" style="width: 80px">{{ $trash_contacts->firstItem()+$loop->index }}</td>
                                        <td data-field="contact_title">{{ $trash_contact->contact_title }}</td>
                                        <td data-field="created_at">{{ $trash_contact->contact_mobile }}</td>
                                        <td data-field="created_at">{{ $trash_contact->contact_email }}</td>
                                        <td data-field="contact_description"><textarea  cols="30" rows="3"> {{ $trash_contact->contact_description }}</textarea> </td>
                                        <td data-field="contact_google_map"><textarea  cols="30" rows="3">{{ $trash_contact->contact_google_map }}</textarea> </td>
                                        <td data-field="deleted_at">{{ $trash_contact->deleted_at->diffForHumans() }}</td>
                                        <td style="width: 10px">
                                            <a href="{{ route('contact.restore',$trash_contact->id) }}" class="btn btn-outline-secondary btn-sm edit" title="Restore contact">
                                                <i class="fas fa-undo-alt"></i>
                                            </a>
                                        </td>
                                        <td style="width: 100px">
                                            <a href="{{ route('contact.parmanent.delete',$trash_contact->id) }}" class="btn btn-outline-danger btn-sm edit" id="delete" title="Permanent Delete">
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
