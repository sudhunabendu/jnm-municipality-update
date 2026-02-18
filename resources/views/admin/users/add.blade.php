@extends('admin.common.layout')

@section('content')
    <div class="ttt-toast">
        @include('admin.common.notify')
    </div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Add User</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Jmmunicipality</a></li>
                        <li class="breadcrumb-item active">Add User</li>
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
                    <form action="{{ route('admin.users.create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Title -->
                            <!-- Type -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Role Type <span style="color:red">*</span></label>
                                    <select class="form-control select2 @error('role') is-invalid @enderror" name="role">
                                        <option value="">Select Role</option>
                                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="employee" {{ old('role') == 'employee' ? 'selected' : '' }}>Employee
                                        </option>
                                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                                    </select>
                                    @error('role')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="name">Full Name <span style="color:red">*</span></label>
                                    <input id="name" name="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter Last Name" value="{{ old('name') }}">
                                    @error('name')
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


                            {{-- <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="password">Password <span style="color:red">*</span></label>
                                    <input id="password" name="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Enter User Password" value="{{ old('password') }}">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="password">Password <span style="color:red">*</span></label>

                                    <div class="input-group">
                                        <input id="password" name="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Enter User Password" value="{{ old('password') }}">

                                        <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
                                            <i id="toggleIcon" class="fa fa-eye"></i>
                                        </button>
                                    </div>

                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="control-label">Select Permissions</label>

                                <div class="row">
                                    @foreach ($permissions as $permission)
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="permissions[]"
                                                    value="{{ $permission->name }}" id="perm_{{ $permission->id }}"
                                                    {{ in_array($permission->name, old('permissions', [])) ? 'checked' : '' }}>

                                                <label class="form-check-label" for="perm_{{ $permission->id }}">
                                                    {{ ucfirst(str_replace('-', ' ', $permission->name)) }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
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

    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            const icon = document.getElementById("toggleIcon");

            if (password.type === "password") {
                password.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                password.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
@endsection
@endsection
