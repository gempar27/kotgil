@extends('app.layouts.main')
@section('title','Classes')
@section('content')
<section class="section">
    <div class="r-container">
        <div class="d-flex flex-column gap-3 justify-content-center">
            <div class="row row-cols-1 row-cols-lg-4 d-flex justify-content-around">
                <div class="col">
                    <div class="card p-3 with-border-bottom border-0 shadow rounded-3" style="background-color: #e2beff;">
                        <img src="app_assets/image/dummy-img-600x400.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="font-1 fw-bold">Kelas 1</h5>
                            <p class="text-white">Kelas maksimum 10 orang setiap kelas, fun dan interaktif</p>
                            <p style="background: linear-gradient(90deg, #ffa010, #ff4500); -webkit-background-clip: text; color: transparent; font-weight: bold; text-align:center;">Rp. 1000.0000</p>
                            <a type="button" href="{{ route('class.show') }}" class="btn text-white font-2 px-5 rounded-pill d-flex align-items-center justify-content-center" style="background: linear-gradient(90deg, #ffa010, #ff4500);">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3 with-border-bottom border-0 shadow rounded-3" style="background-color: #e2beff;">
                        <img src="app_assets/image/dummy-img-600x400.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="font-1 fw-bold">Kelas 1</h5>
                            <p class="text-white">Kelas maksimum 10 orang setiap kelas, fun dan interaktif</p>
                            <p style="background: linear-gradient(90deg, #ffa010, #ff4500); -webkit-background-clip: text; color: transparent; font-weight: bold; text-align:center;">Rp. 1000.0000</p>
                            <a type="button" href="{{ route('class.show') }}" class="btn text-white font-2 px-5 rounded-pill d-flex align-items-center justify-content-center" style="background: linear-gradient(90deg, #ffa010, #ff4500);">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-3 with-border-bottom border-0 shadow rounded-3" style="background-color: #e2beff;">
                        <img src="app_assets/image/dummy-img-600x400.jpg" class="card-img-top rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="font-1 fw-bold">Kelas 1</h5>
                            <p class="text-white">Kelas maksimum 10 orang setiap kelas, fun dan interaktif</p>
                            <p style="background: linear-gradient(90deg, #ffa010, #ff4500); -webkit-background-clip: text; color: transparent; font-weight: bold; text-align:center;">Rp. 1000.0000</p>
                            <a type="button" href="{{ route('class.show') }}" class="btn text-white font-2 px-5 rounded-pill d-flex align-items-center justify-content-center" style="background: linear-gradient(90deg, #ffa010, #ff4500);">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
