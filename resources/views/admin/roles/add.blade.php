@extends('admin.common.layout')

@section('content')
<div class="ttt-toast">
    @include('admin.common.notify')
</div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Add Role</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jmmunicipality</a></li>
                        <li class="breadcrumb-item active">Add Role</li>
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
                    <form action="{{ route('admin.roles.create') }}" method="POST"">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Role title <span style="color:red">*</span></label>
                                    <input id="productname" name="name" type="text" class="form-control  @error('name') is-invalid @enderror"
                                        placeholder="Enter role name">

                                        @error('name')
                                        <small class="text-danger" data-error='name'>{{ $message }}</small>
                                        @enderror
                                </div>
                            </div>


                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                Changes</button>
                            {{-- <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button> --}}
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <!-- end row -->

@section('roleJS')

<script type="text/javascript">
    $(function() {
        $("[name='name']").on("focus", function() {
            $("[data-error='name']").html("");
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
