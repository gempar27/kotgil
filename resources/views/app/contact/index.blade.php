@extends('app.layouts.main')
@section('title','Contact')
@section('content')
<section class="section">
    <div class="r-container">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col mb-3">
                <div class="rounded-4" style="background-color: #ecc8fa;">
                    <div class="h-100 d-flex flex-column p-5">
                        <h6 class="font-1 lh-1 fw-bold fs-1">Contact Information</h6>
                        <p>Kirimkan pesan kepada Kami!</p>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <div class="bg-accent-color rounded-3 p-2 text-white" style="aspect-ratio: 1/1;">
                                    <h4 class="lh-1 m-0 p-0 fw-bold font-1">
                                        <i class="fa-solid fa-envelope"></i>
                                    </h4>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-4 fw-bold font-1">kotgil.korea@gmail.com</span>
                                </div>
                            </div>
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <div class="bg-accent-color rounded-3 p-2 text-white" style="aspect-ratio: 1/1;">
                                    <h4 class="lh-1 m-0 p-0 fw-bold font-1">
                                        <i class="fa-solid fa-map-location-dot"></i>
                                    </h4>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-4 fw-bold font-1">Jalan Kapten Samadikun GG  Empang 1 No. 198, Kel. Kebonbaru, Kec. Kejaksan, Kota Cirebon, Prov. Jawa Barat</span>
                                </div>
                            </div>
                            <div class="d-flex flex-row gap-3 align-items-center justify-content-center">
                                <div class="social-container">
                                    <div class="bg-accent-color rounded-circle p-2 text-white" style="aspect-ratio: 1/1;">
                                        <a href="https://www.instagram.com" class="social-item">
                                            <h4 class="lh-1 m-0 p-0 fw-bold font-2">
                                                <i class="fa-brands fa-instagram"></i>
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="bg-accent-color rounded-circle p-2 text-white" style="aspect-ratio: 1/1;">
                                        <a href="https://www.facebook.com" class="social-item">
                                            <h4 class="lh-1 m-0 p-0 fw-bold font-2">
                                                <i class="fa-brands fa-facebook"></i>
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="bg-accent-color rounded-circle p-2 text-white" style="aspect-ratio: 1/1;">
                                        <a href="https://www.linkedin.com" class="social-item">
                                            <h4 class="lh-1 m-0 p-0 fw-bold font-2">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="bg-accent-color rounded-circle p-2 text-white" style="aspect-ratio: 1/1;">
                                        <a href="https://www.tiktok.com" class="social-item">
                                            <h4 class="lh-1 m-0 p-0 fw-bold font-2">
                                                <i class="fa-brands fa-tiktok"></i>
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="d-flex flex-column gap-3 h-100 justify-content-center">
                        <div class="success_msg toast align-items-center w-100 shadow-none mb-3 border border-success rounded-0 my-4"
                            role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex p-2">
                                <div
                                    class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                                    <i class="fa-solid fa-check f-36 text-success"></i>
                                    Your Message Successfully Send.
                                </div>
                                <button type="button"
                                    class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
                                    data-bs-dismiss="toast" aria-label="Close"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                        <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 my-4 border rounded-0"
                            role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex p-2">
                                <div
                                    class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                                    <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                                    Something Wrong ! Send Form Failed.
                                </div>
                                <button type="button"
                                    class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
                                    data-bs-dismiss="toast" aria-label="Close"><i
                                        class="fa-solid fa-xmark"></i></button>
                            </div>
                        </div>
                        <form action="" class="d-flex flex-column h-100 justify-content-center w-100 needs-validation mb-3 form" novalidate>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control py-2 px-4 border-bottom" name="name" id="name"
                                            placeholder="First Name" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control py-2 px-4 border-bottom" name="name" id="name"
                                            placeholder="Last Name" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control py-2 px-4 border-bottom" name="email" id="email"
                                            placeholder="Email" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control py-2 px-4 border-bottom" name="subject" id="subject"
                                            placeholder="WA Number" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <textarea class="form-control py-2 px-4 border-bottom" id="message" name="message" rows="2"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <button type="submit" class="btn submit_form py-3" style="background-color: #ecc8fa;">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
