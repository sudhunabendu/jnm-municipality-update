@extends('frontend.master')

@section('content')

    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/10-contact.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/09-breadcrumb-section.css') }}">
@section('contact-us')
@endsection
<!--Start Breadcrumb Style1-->
<section class="breadcrumb-style1">
    <div class="breadcrumb-style1__bg"
        style="background-image: url('{{ asset('public/frontend/assets/images/backgrounds/breadcrumb-v1-bg.jpg') }}');">
    </div>
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-style1__inner text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-style1__bottom">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-style1__bottom-menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Style1-->


<!--Start Contact Page-->
<section class="contact-page">
    <div class="auto-container">
        <div class="row">
            <!--Start Contact Page Content-->
            <div class="col-xl-4 col-lg-4">
                <div class="contact-page__content">
                    <div class="title-box">
                        <h2>Chairman Office</h2>
                        <p>Mauris magna sit elementum elit facilis <br> lacusacphar.</p>
                    </div>

                    <ul class="contact-page__contact-info">
                        <li>
                            <div class="icon-box">
                                <span class="icon-pin"></span>
                            </div>

                            <div class="text-box">
                                <h4>Chairman Office:</h4>
                                <p>14, N.S.C. Road, South 24 Parganas, Jaynagar Mazilpur, West Bengal 743337</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-telephone"></span>
                            </div>

                            <div class="text-box">
                                <h4>Phone No:</h4>
                                <p><a href="tel:913336660021">(+91) 333 666 0021</a></p>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-mail-1"></span>
                            </div>

                            <div class="text-box">
                                <h4>Email:</h4>
                                <p><a href="mailto:info@jmmunicipality.co.in">info@jmmunicipality.co.in</a></p>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-wall-clock"></span>
                            </div>

                            <div class="text-box">
                                <h4>Opening Hours:</h4>
                                <p>Mon - Fri: 8:00AM - 6:00PM</p>
                            </div>
                        </li>
                    </ul>


                    <ul class="contact-page__social-links">
                        <li><a href="#"><span class="icon-facebook-app-symbol"></span></a></li>
                        <li><a href="#" class="bg2"><span class="icon-twitter"></span></a></li>
                        <li><a href="#" class="bg3"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#" class="bg4"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <!--End Contact Page Content-->

            <!--Start Contact Page Form-->
            <div class="col-xl-8 col-lg-8">
                <div class="contact-page__form">
                    <div class="add-comment-box">
                        {{-- <div class="inner-title">
                                <h2>Leave A Comments</h2>
                            </div> --}}
                        @include('frontend.layouts.notify')

                        <form action="{{ route('contact-us.store') }}" method="post">
                            @csrf

                            <div class="row">
                                <!-- Name Field -->
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <label for="formName" class="form-label">Your Name <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="name" id="formName"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter your name">
                                    @error('name')
                                        <small class="text-danger" data-error='name'>{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Email Field -->
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <label for="formEmail" class="form-label">Your Email <span
                                            style="color:red">*</span></label>
                                    <input type="email" name="email" id="formEmail"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Enter your email">
                                    @error('email')
                                        <small class="text-danger" data-error='email'>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <!-- Phone Field -->
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <label for="formPhone" class="form-label">Phone Number <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="phone" id="formPhone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="e.g. (123) 456-7890">
                                    @error('phone')
                                        <small class="text-danger" data-error='phone'>{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Subject Field -->
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-3">
                                    <label for="formSubject" class="form-label">Subject <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="subject" id="formSubject"
                                        class="form-control @error('subject') is-invalid @enderror"
                                        placeholder="Message subject">
                                    @error('subject')
                                        <small class="text-danger" data-error='subject'>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Message Field -->
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="formMessage" class="form-label">Message <span
                                            style="color:red">*</span></label>
                                    <textarea name="message" id="formMessage" class="form-control @error('message') is-invalid @enderror" rows="5"
                                        placeholder="Type your message here..."></textarea>
                                    @error('message')
                                        <small class="text-danger" data-error='message'>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Hidden Bot Field -->
                            <input type="hidden" id="form_botcheck" name="form_botcheck" value="">

                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-2 btn-lg"
                                        data-loading-text="Please wait...">
                                        <span class="txt">Send Message</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Form Result (will be injected by JS) -->
                            <div id="form-result" class="mt-3 alert d-none" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!--End Contact Page Form-->
        </div>
    </div>
</section>
<!--End Contact Page-->

<!--Start Google Map-->
{{-- <section class="google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
        class="contact-page-map" allowfullscreen></iframe>
</section> --}}
<section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3694.71037252614!2d88.41762037506548!3d22.17509417977673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0241733b7835b7%3A0x3a5d967e1950da11!2sJaynagar%20Majilpur%20Municipality!5e0!3m2!1sen!2sin!4v1756816404526!5m2!1sen!2sin" class="contact-page-map" allowfullscreen></iframe>
</section>
<!--End Google Map-->
@section('contact_js')
    <script>
        submitHandler: function(form) {
            var $form = $(form);
            var form_btn = $form.find('button[type="submit"]');
            var form_btn_old_msg = form_btn.html();
            form_btn.prop('disabled', true).html(form_btn.data('loading-text') || 'Sending...');

            $form.ajaxSubmit({
                dataType: 'json',
                success: function(response) {
                    if (response.status === true || response.status === 'success') {
                        // ✅ Show SweetAlert on success
                        Swal.fire({
                            title: 'Success!',
                            text: response.message || 'Message sent successfully!',
                            icon: 'success',
                            timer: 3500,
                            showConfirmButton: false
                        });

                        // Reset form
                        $form[0].reset();
                        $('.is-invalid').removeClass('is-invalid');
                        $('.text-danger').remove();

                    } else {
                        // ❌ Show error
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message || 'An error occurred.',
                            timer: 2500,
                            showConfirmButton: false
                        });
                    }

                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                },
                error: function(xhr) {
                    let message = 'An error occurred. Please try again.';
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;
                    } else if (xhr.status === 422) {
                        message = 'Please fix the errors and try again.';
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: message,
                        timer: 2500,
                        showConfirmButton: false
                    });

                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                }
            });
        }
    </script>

    <script type="text/javascript">
    $(function() {
       
        $("[name='name']").on("focus", function() {
            $("[data-error='name']").html("");
            $(this).removeClass("is-invalid");
        });
        $("[name='email']").on("focus", function() {
            $(this).numeric();
            $("[data-error='email']").html("");
            $(this).removeClass("is-invalid");
        });
        $("[name='phone']").on("focus", function() {
            $(this).numeric();
            $("[data-error='phone']").html("");
            $(this).removeClass("is-invalid");
        });
        
        $("[name='subject']").on("focus", function() {
            $("[data-error='subject']").html("");
            $(this).removeClass("is-invalid");
        });

        $("[name='message']").on("focus", function() {
            $("[data-error='message']").html("");
            $(this).removeClass("is-invalid");
        });
      
    });
    
</script>
@endsection

@endsection
