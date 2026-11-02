@extends('app.layouts.main')
@section('title','Home')
@section('content')
    {{-- Banner --}}
    <section class="section image-infinite-bg position-relative"
        style="background-size: cover; background-position: center ;padding: 15em 1em 15em 1em;"
        data-images='["app_assets/image/dummy-img-1920x900.jpg" , "app_assets/image/dummy-img-1920x900.jpg"]'>
        <div class="r-container h-100">
            <div class="image-overlay"></div>
            <div class="d-flex flex-column justify-content-center gap-3 h-100 position-relative"
                style="max-width: 768px; z-index: 2;">
                <h3 class="text-title text-white fw-bold font-1 lh-1">Kursus Les Bahasa Korea Online</h3>
                <p class="text-white f-18 text-font">Kotgil adalah tempat kursus/les Bahasa Korea online yang interaktif,
                    dibimbing dengan pengajar berpengalaman. Belajar Bahasa Korea jadi mudah dan menyenangkan.
                </p>
                <div>
                    <a type="button" href="#"
                        class="btn bg-accent-color text-font rounded-pill">Join Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Tipe Kelas --}}
    <section class="section" style="background-color: #ecc8fa">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 justify-content-center text-center">
                <h3 class="text-black font-1 lh-1 fw-semibold">Pilih Tipe Kelas Anda</h3>
                <div class="row row-cols-1 row-cols-lg-4">
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="app_assets/image/dummy-img-600x400.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold">Reguler</h5>
                                <p class="text-gray">Kelas maksimum 10 orang setiap kelas, fun dan interaktif</p>
                                    <a type="button" href="#"
                                    class="btn bg-accent-color text-white font-2  px-5 rounded-pill">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="app_assets/image/dummy-img-600x400.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold">Intensif</h5>
                                <p class="text-gray">Kelas maksimum 10 orang setiap kelas, fun dan interaktif</p>
                                    <a type="button" href="#"
                                    class="btn bg-accent-color text-white font-2  px-5 rounded-pill">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="app_assets/image/dummy-img-600x400.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold">Private</h5>
                                <p class="text-gray">Kelas private jadwal yang bisa menyesuaikan kebutuhan murid</p>
                                    <a type="button" href="#"
                                    class="btn bg-accent-color text-white font-2  px-5 rounded-pill">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="app_assets/image/dummy-img-600x400.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold">Private Group</h5>
                                <p class="text-gray">Kelas private bareng temanmu jadwal bisa menyesuaikan kebutuhan</p>
                                <a type="button" href="#"
                                    class="btn bg-accent-color text-white font-2 px-5 rounded-pill">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Mentor --}}
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h3 class="text-black font-1 lh-1 fw-semibold">Ssaem Proffesional</h3>
                <h6 class="lh-1 mb-3">Daftar sekarang untuk di ajar oleh tutor Kami</h6>
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col mb-3">
                        <div class="position-relative overflow-hidden rounded-3">
                            <img src="app_assets/image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                            <div class="position-absolute bottom-0 px-3 pb-5 w-100">
                                <div class="w-100 position-relative overflow-hidden rounded-3">
                                    <div class="image-overlay-2"></div>
                                    <div class="d-flex flex-column p-3 position-relative" style="z-index: 2;">
                                        <h4 class="text-white font-1 fw-bold m-0 ">Dyas Kardinal</h4>
                                        <span class="text-white">Expert Team</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="position-relative overflow-hidden rounded-3">
                            <img src="app_assets/image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                            <div class="position-absolute bottom-0 px-3 pb-5 w-100">
                                <div class="w-100 position-relative overflow-hidden rounded-3">
                                    <div class="image-overlay-2"></div>
                                    <div class="d-flex flex-column p-3 position-relative" style="z-index: 2;">
                                        <h4 class="text-white font-1 fw-bold m-0 ">Kelvin</h4>
                                        <span class="text-white">Expert Team</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="position-relative overflow-hidden rounded-3">
                            <img src="app_assets/image/dummy-img-600x800.jpg" alt="" class="img-fluid">
                            <div class="position-absolute bottom-0 px-3 pb-5 w-100">
                                <div class="w-100 position-relative overflow-hidden rounded-3">
                                    <div class="image-overlay-2"></div>
                                    <div class="d-flex flex-column p-3 position-relative" style="z-index: 2;">
                                        <h4 class="text-white font-1 fw-bold m-0 ">Elsa verina</h4>
                                        <span class="text-white">Expert Team</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BG Join --}}
    <section class="py-5 position-relative" style="background-image: url(app_assets/image/korean-bg.webp); background-size: cover;">
        <div class="r-container">
            <div class="position-relative" style="z-index: 2;">
                <div class="row row-cols-1 text-center px-lg-0 px-3 d-flex align-items-center justify-content-center flex-column">
                    <div class="col">
                        <h5 class="text-white text-center font-1 fw-bold fs-1">
                            Ayo Belajar Bahasa Indonesia Sekarang Untuk Mengejar Impianmu
                        </h5>
                    </div>
                    <div class="col" style="margin-top: 40px">
                        <div class="d-flex justify-content-lg-center justify-content-center h-100 align-items-center">
                            <a href="#" type="button" class="btn bg-accent-color text-white font-2 px-5 rounded-pill">Join Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- List --}}
    <section class="section" style="background-color: #ecc8fa">
        <div>
            <h6>Manfaat Belajar Bahasa Korea</h6>
            <p>Banyaknya orang yang mempelajari bahasa ini, tentunya tak terlepas dari manfaat yang diberikan. Belajar Bahasa Korea sendiri dapat memberikan banyak manfaat untuk Kamu, misalnya saja seperti.</p>
        </div>
        <div>
            <h6>Mengetahui Lebih Banyak Tentang Budaya Korea</h6>
            <p>Dengan belajar Bahasa Korea, Kamu akan memahami lebih banyak tentang budaya Korea dan cara berfikir orang-orang Korea. Ini dapat membantumu menjadi lebih terbuka terhadap budaya yang berbeda dan menghargai keunikan setiap orang.</p>
        </div>
        <div>
            <h6>Tidak Membutuhkan Translator Saat Ingin Bepergian Ke Korea</h6>
            <p>Jika Kamu berencana untuk pergi ke Korea, maka belajar Bahasa Korea akan sangat membantu Kamu nantinya selama berada disana. Dengan menguasai Bahasa Korea, Kamu akan lebih mudah berkomunikasi dengan orang lokal dan menikmati pengalaman Kamu disana.</p>
        </div>
        <div>
            <h6>Membuka Peluang Kerja</h6>
            <p>Jika Kamu berada di industri yang terkait dengan Korea, seperti perdagangan, pariwisata, atau hiburan, maka menguasai Bahasa Korea dapat menjadi keuntungan bagi Kamu. Kemampuan berbahasa Korea dapat membuka peluang kerja yang lebih baik dan dapat meningkatkan karir Kamu.</p>
        </div>
    </section>
@endsection
