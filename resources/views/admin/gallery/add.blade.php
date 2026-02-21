@extends('admin.common.layout')

@section('content')
    <div class="ttt-toast">
        @include('admin.common.notify')
    </div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Add Gallery</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jmmunicipality</a></li>
                        <li class="breadcrumb-item active">Add Gallery</li>
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
                    {{-- <p class="card-title-desc">Fill all information below</p> --}}
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Gallery title <span style="color:red">*</span></label>
                                    <input id="productname" name="title" type="text"
                                        class="form-control  @error('title') is-invalid @enderror"
                                        placeholder="Enter gallery title">

                                    @error('title')
                                        <small class="text-danger" data-error='title'>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="">Gallery Image <span style="color:red">*</span></label>
                                        <div class="input-group">
                                            <input type="file" name="image_path"
                                                class="form-control @error('image_path') is-invalid @enderror"
                                                placeholder="Upload Gallery Image">
                                        </div>
                                        @error('image_path')
                                            <small class="text-danger" data-error='image_path'>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="productname">Gallery decription</label>
                                    <textarea name="description" id="" cols="30" rows="10"
                                        class="form-control @error('description') is-invalid @enderror">
                                    </textarea>

                                    @error('description')
                                        <small class="text-danger" data-error='description'>{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="manufacturername">Manufacturer Name</label>
                                    <input id="manufacturername" name="manufacturername" type="text"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="manufacturerbrand">Manufacturer Brand</label>
                                    <input id="manufacturerbrand" name="manufacturerbrand" type="text"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="price">Price</label>
                                    <input id="price" name="price" type="text" class="form-control">
                                </div> --}}
                            </div>

                            {{-- <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Category</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="control-label">Features</label>

                                    <select class="select2 form-control select2-multiple" multiple="multiple"
                                        data-placeholder="Choose ...">
                                        <option value="WI">Wireless</option>
                                        <option value="BE">Battery life</option>
                                        <option value="BA">Bass</option>
                                    </select>

                                </div>
                                <div class="mb-3">
                                    <label for="productdesc">Product Description</label>
                                    <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                </div>

                            </div> --}}
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                Changes</button>
                            {{-- <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button> --}}
                        </div>
                    </form>

                </div>
            </div>

            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Product Images</h4>
                </div>
                <div class="card-body">
                    <form action="https://themesbrand.com/" method="post" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>

                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>

                            <h4>Drop files here or click to upload.</h4>
                        </div>
                    </form>
                </div>

            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Meta Data</h4>
                    <p class="card-title-desc">Fill all information below</p>
                </div>
                <div class="card-body">

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="metatitle">Meta title</label>
                                    <input id="metatitle" name="productname" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="metakeywords">Meta Keywords</label>
                                    <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="metadescription">Meta Description</label>
                                    <textarea class="form-control" id="metadescription" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                Changes</button>
                            <button type="submit" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                        </div>
                    </form>

                </div>
            </div> --}}
        </div>
    </div>
    <!-- end row -->

@section('bannerJS')
    <script type="text/javascript">
        $(function() {
            $("[name='title']").on("focus", function() {
                $("[data-error='title']").html("");
                $(this).removeClass("is-invalid");
            });

            $("[name='image_path']").on("focus", function() {
                $("[data-error='image_path']").html("");
                $(this).removeClass("is-invalid");
            });

        });
    </script>
@endsection
@endsection
