@extends('admin.common.layout')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Gallery List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Gallery</a></li>
                        <li class="breadcrumb-item active">Gallery List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title">Gallery List <span class="text-muted fw-normal ms-2">(834)</span>
                                </h5>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                <div>
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="apps-contacts-list.html"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i
                                                    class="bx bx-list-ul"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-contacts-grid.html" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="{{route('admin.gallery.add')}}" class="btn btn-success"><i class="bx bx-plus me-1"></i> Add New</a>
                                </div>

                                {{-- <div class="dropdown">
                                    <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="table-responsive mb-4">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th scope="col">Banner Image</th>
                                    <th scope="col">Banner Title</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Updated Date</th>
                                    <th scope="col">Status</th>
                                    <th style="width: 80px; min-width: 80px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                                <label class="form-check-label" for="contacusercheck1"></label>
                                            </div>
                                        </th>
                                        @php
                                            // $image = json_decode($gallery->image_path, true);
                                        @endphp
                                        <td>
                                            @if (!empty($gallery->image_path))
                                            <img src="{{ asset('public/images/gallery_images/' . $gallery->image_path) }}" alt=""
                                                class="avatar-sm rounded-circle me-2">
                                            @endif
                                        </td>
                                        <td>{{ $gallery->title }}</td>
                                        @php
                                            $created_at = \Carbon\Carbon::parse($gallery->created_at);
                                            $updated_at = \Carbon\Carbon::parse($gallery->updated_at);
                                        @endphp
                                        {{-- <td>{{ $created_at->diffForHumans() }}</td> --}}
                                        <td>{{ $created_at->format('d M, Y') }}</td>
                                        <td>{{ $updated_at->format('d M, Y') }}</td>
                                        <td>
                                            @if ($gallery->status == 'Active')
                                                <span class="badge badge-pill badge-soft-success font-size-11">Active</span>
                                            @else
                                                <span class="badge badge-pill badge-soft-danger font-size-11">Inactive</span>
                                            @endif
                                        </td>
                                        <td>


                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="{{ route('admin.banners.edit', $gallery->id) }}"
                                                class="px-3 text-primary"><i class="bx bx-pencil font-size-18">Edit</i></a></li>
                                                    <li><a href="{{ route('admin.banners.delete', $gallery->id) }}"
                                                class="px-3 text-danger"><i class="bx bx-trash font-size-18">Trash</i></a></li>
                                                    {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>
            </div>
        </div>
    </div>
@endsection
