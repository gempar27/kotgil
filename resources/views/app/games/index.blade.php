@extends('app.layouts.main')
@section('title','Games')
@section('content')
<section class="section">
    <div class="r-container">
        <div class="d-flex flex-column mb-3">
            <h3 class="font-1 fw-bold" style="color: #ecc8fa;">Bermain Games Sambil Belajar</h3>
            <p>
                Kegiatan belajar yang dilakukan oleh orang terkadang harus diselingi dengan permainan (game) edukasi untuk membantu menstimulasi kreativitasnya. Selain menyenangkan, hal itu dilakukan agar anak tidak merasa bosan dengan rutinitas belajar.
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
                                Play
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
                                Play
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
                                Play
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
                                Play
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bg-overlay" id="videomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-small">
            <div class="modal-content p-5" style="background-color: #fff">
                <div class="position-relative text-center">
                    <h4 style="color: #ecc8fa;" class="fw-bold">Tebak Gambar</h4>
                    <p>Tebak gambar adalah permainan teka-teki yang mengharuskan pemain menebak objek atau konsep dari gambar yang diberikan.</p>
                    <img src="{{ asset('app_assets/image/dummy-img-600x400.jpg') }}" alt="" class="img-fluid">
                    <a type="button" href="{{ route('class.show') }}" class="mt-4 col-6 mx-auto btn text-white font-2 px-5 rounded-pill d-flex align-items-center justify-content-center" style="background: linear-gradient(90deg, #ffa010, #ff4500);">Play Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
