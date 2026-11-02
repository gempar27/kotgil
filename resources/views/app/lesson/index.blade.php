@extends('app.layouts.main')
@section('title','Free Lesson')
@section('content')
<section class="section">
    <div class="r-container">
        <div class="d-flex flex-column mb-3">
            <h3 class="font-1 fw-bold" style="color: #ecc8fa;">Free Lesson</h3>
            <p>
                Belajar Bahasa Korea dapat menjadi pengalaman yang lebih mengasyikkan dengan Free Lesson Kami. Pelajaran ini dirancang untuk membantu meningkatkan pemahaman Anda dengan cara yang menyenangkan. Kami percaya bahwa belajar Bahasa Korea tidak hanya harus efektif, tetapi juga menghibur. Oleh karena itu, Kami menyediakan pelajaran gratis ini, sehingga Anda tidak akan pernah merasa jenuh dengan proses pembelajaran.
            </p>
        </div>
        <div class="d-flex flex-column gap-3 justify-content-center">
            <div class="row row-cols-1 row-cols-lg-4">
                <div class="col">
                    <div class="position-relative">
                        <img src="{{ asset('app_assets/image/dummy-img-600x400.jpg') }}" alt="" class="img-fluid">
                        <div
                            class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                data-bs-target="#videomodal">
                                <i class="fa-solid fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative">
                        <img src="{{ asset('app_assets/image/dummy-img-600x400.jpg') }}" alt="" class="img-fluid">
                        <div
                            class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                data-bs-target="#videomodal">
                                <i class="fa-solid fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative">
                        <img src="{{ asset('app_assets/image/dummy-img-600x400.jpg') }}" alt="" class="img-fluid">
                        <div
                            class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                data-bs-target="#videomodal">
                                <i class="fa-solid fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative">
                        <img src="{{ asset('app_assets/image/dummy-img-600x400.jpg') }}" alt="" class="img-fluid">
                        <div
                            class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                            <button type="button" class="btn request-loader" data-bs-toggle="modal"
                                data-bs-target="#videomodal">
                                <i class="fa-solid fa-play"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bg-overlay" id="videomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark-color">
                <iframe class="ifr-video" src="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"
                    frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
