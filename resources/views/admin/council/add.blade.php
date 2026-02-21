@extends('admin.common.layout')

@section('content')
    <div class="ttt-toast">
        @include('admin.common.notify')
    </div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Add Councillor</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Jmmunicipality</a></li>
                        <li class="breadcrumb-item active">Add Councillor</li>
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
                    <form action="{{ route('admin.councillors.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Title -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="first_name">First Name <span style="color:red">*</span></label>
                                    <input id="first_name" name="first_name" type="text"
                                        class="form-control @error('first_name') is-invalid @enderror"
                                        placeholder="Enter First Name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="last_name">Last Name <span style="color:red">*</span></label>
                                    <input id="last_name" name="last_name" type="text"
                                        class="form-control @error('last_name') is-invalid @enderror"
                                        placeholder="Enter Last Name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="email">Email Address <span style="color:red">*</span></label>
                                    <input id="email" name="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Enter Email Address" value="{{ old('email') }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="phone">Mobile Number <span style="color:red">*</span></label>
                                    <input id="phone" name="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="Councillor Mobile Number" value="{{ old('phone') }}">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="position">Position <span style="color:red">*</span></label>
                                    <input id="position" name="position" type="text"
                                        class="form-control @error('position') is-invalid @enderror"
                                        placeholder="Councillor Position" value="{{ old('position') }}">
                                    @error('position')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="word_number">Ward Number <span style="color:red">*</span></label>
                                    <input id="word_number" name="word_number" type="text"
                                        class="form-control @error('word_number') is-invalid @enderror"
                                        placeholder="Enter Councillor Ward No." value="{{ old('word_number') }}">
                                    @error('word_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="image">Councillor Image </label>
                                    <input type="file" name="image"
                                        class="form-control @error('image') is-invalid @enderror"
                                        placeholder="Upload Image File">
                                    @error('image')
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
