@extends('admin.common.layout')

@section('content')
    <div class="ttt-toast">
        @include('admin.common.notify')
    </div>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add News & Event</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Jmmunicipality</a></li>
                    <li class="breadcrumb-item active">Add News & Event</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Information</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.news_events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Type -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="control-label">News & Event Type <span style="color:red">*</span></label>
                                <select class="form-control select2 @error('type') is-invalid @enderror" name="type">
                                    <option value="">Select Type</option>
                                    <option value="news" {{ old('type') == 'news' ? 'selected' : '' }}>News</option>
                                    <option value="event" {{ old('type') == 'event' ? 'selected' : '' }}>Event</option>
                                </select>
                                @error('type')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="event_date">News & Event Date <span style="color:red">*</span></label>
                                <input id="event_date" name="event_date" type="date"
                                    class="form-control @error('event_date') is-invalid @enderror"
                                    placeholder="Enter News & Event Date" value="{{ old('event_date') }}">
                                @error('event_date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Title -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="title">News & Event Title <span style="color:red">*</span></label>
                                <input id="title" name="title" type="text"
                                    class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Enter News & Event Title" value="{{ old('title') }}">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="content">News & Event Content <span style="color:red">*</span></label>
                                <input id="content" name="content" type="text"
                                    class="form-control @error('content') is-invalid @enderror"
                                    placeholder="Enter News & Event Content" value="{{ old('content') }}">
                                @error('content')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- PDF Upload -->
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="pdf_path">News & Event PDF <span style="color:red">*</span></label>
                                <input type="file" name="pdf_path"
                                    class="form-control @error('pdf_path') is-invalid @enderror"
                                    placeholder="Upload PDF File">
                                @error('pdf_path')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button Row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content mt-3">
                                <button type="submit" class="btn btn-primary">
                                    Save Changes
                                </button>
                                {{-- <a href="{{ route('admin.news_events.index') }}" class="btn btn-secondary ms-2">Cancel</a> --}}
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->


@section('news_eventsJS')
    <script type="text/javascript">
        $(function() {
            $("[name='title']").on("focus", function() {
                $("[data-error='title']").html("");
                $(this).removeClass("is-invalid");
            });
            $("[name='content']").on("focus", function() {
                $("[data-error='content']").html("");
                $(this).removeClass("is-invalid");
            });

            $("[name='pdf_path']").on("focus", function() {
                $("[data-error='pdf_path']").html("");
                $(this).removeClass("is-invalid");
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var maxField = 4;
            var addButton = $(".add-button");
            var wrapper = $(".increment");
            var fieldHTML = $(".clone").html();
            var x = 1;
            $(addButton).click(function() {
                if (x < maxField) {
                    x++;
                    $(wrapper).after(fieldHTML);
                } else {
                    // alert('Maximum ' + maxField + ' file upload fields are allowed.');

                }
            });
            $("body").on("click", ".remove-button", function() {
                $(this).parents(".input-group").remove();
                x--;
            });
        });
    </script>
@endsection
@endsection
