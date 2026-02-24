@extends('admin.common.layout')

@section('content')
@section('newsCSS')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">News Events List</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">News Eventss</a></li>
                    <li class="breadcrumb-item active">News Events List</li>
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
                            <h5 class="card-title">News Events List <span
                                    class="text-muted fw-normal ms-2">{{ $newsEvents->count() ?? 0 }}</span>
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
                                <a href="{{ route('admin.news_events.add') }}" class="btn btn-success"><i
                                        class="bx bx-plus me-1"></i> Add New</a>
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
                                <th scope="col">SL No.</th>
                                <th scope="col">News Event Title</th>
                                <th scope="col">News Event Content</th>
                                <th scope="col">News Event Date</th>
                                <th scope="col">News Event Type</th>
                                <th scope="col">Status</th>
                                <th style="width: 80px; min-width: 80px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($newsEvents as $news_event)
                                <tr>
                                    <th scope="row">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                            <label class="form-check-label" for="contacusercheck1"></label>
                                        </div>
                                    </th>

                                    <td>
                                    <td>{{ $newsEvents->firstItem() + $loop->index }}</td>
                                    </td>
                                    <td>{{ $news_event->title }}</td>
                                    <td>{{ $news_event->content }}</td>
                                    @php
                                        $created_at = \Carbon\Carbon::parse($news_event->created_at);
                                        $updated_at = \Carbon\Carbon::parse($news_event->updated_at);
                                    @endphp
                                    {{-- <td>{{ $created_at->diffForHumans() }}</td> --}}
                                    <td>{{ $created_at->format('d M, Y') }}</td>
                                    {{-- <td>{{ $updated_at->format('d M, Y') }}</td> --}}
                                    <td>
                                        @if ($news_event->type == 'news')
                                            <span class="badge badge-pill badge-soft-success font-size-11">News</span>
                                        @else
                                            <span class="badge badge-pill badge-soft-danger font-size-11">Event</span>
                                        @endif
                                    </td>
                                    {{-- <td>
                                             @if ($news_event->status == 'Active')
                                                <span class="badge badge-pill badge-soft-success font-size-11">Active</span>
                                            @else
                                                <span class="badge badge-pill badge-soft-danger font-size-11">Inactive</span>
                                            @endif
                                        </td> --}}
                                    @php
                                        if ($news_event->status == 'Active'):
                                            $color = 'success';
                                        else:
                                            $color = 'danger';
                                        endif;
                                    @endphp
                                    <td>
                                        <div class="switch">
                                            <input type="checkbox" name="toogle" value="{{ $news_event->id }}"
                                                {{ $news_event->status == 'Active' ? 'checked' : '' }}
                                                data-toggle="toggle" data-on="Active" data-off="Inactive"
                                                data-onstyle="success" data-offstyle="danger">
                                        </div>
                                    </td>
                                    <td>


                                        <div class="dropdown">
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="{{ route('admin.banners.edit', $news_event->id) }}"
                                                        class="px-3 text-primary"><i
                                                            class="bx bx-pencil font-size-18">Edit</i></a></li>
                                                {{-- <li><a href="{{ route('admin.banners.delete', $news_event->id) }}"
                                                        class="px-3 text-danger"><i
                                                            class="bx bx-trash font-size-18">Trash</i></a></li> --}}
                                                            <li>
<form action="{{ route('admin.news_events.destroy', $news_event->id) }}" method="POST" class="d-inline px-3 text-danger">
    @csrf
    @method('DELETE')
    <button type="submit" class="dropdown-item text-danger"
        onclick="return confirm('Move this item to trash?')">
        Trash
    </button>
</form>
                                                            </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{-- <div class="mt-3">
                        {{ $newsEvents->links('pagination::simple-bootstrap-5') }}
                    </div> --}}
                    <div class="mt-3 d-flex justify-content-center justify-content-md-end">
                        {{ $newsEvents->links('pagination::simple-bootstrap-5') }}
                    </div>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>
@section('newsJS')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
        $('input[name=toogle]').change(function() {
            var mode = $(this).prop('checked');
            var id = $(this).val();
            console.log(id);
            $.ajax({
                url: "{{ route('admin.news.status_change') }}",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    mode: mode,
                    id: id,
                },
                success: function(response) {
                    console.log(response.status)
                    if (response.status) {
                        Swal.fire({
                            title: "Success!",
                            // text: response.status,
                            // text: "{{ session('success') }}",
                            text: "Status changed successfully",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        // alert(response.msg)
                        console.log(response.msg)
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Please try again later",
                            showConfirmButton: false,
                            timer: 2500
                        });
                        // alert('Please try again later');
                    }
                }
            })
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
@endsection
