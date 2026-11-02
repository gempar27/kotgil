@extends('app.layouts.main')
@section('title','Classes Detail')
@section('content')
<section class="section">
    <div class="r-container">
        <div class="d-flex flex-column gap-3 justify-content-center">
            <div class="row row-cols-1 row-cols-lg-12 d-flex justify-content-between">
                <div class="col d-flex gap-3">
                    <div class="card p-3 with-border-bottom border-0 shadow rounded-3" style="background-color: #e2beff;">
                        <div>
                            <img src="app_assets/image/dummy-img-600x400.jpg" class="card-img-top rounded-3" alt="...">
                        </div>
                    </div>
                    <div>
                        <h4>Kelas 1</h4>
                        <h6 class="font-weight-bold">Rp.1000.000</h6>
                        <p>Kelas Basic Korea cocok untuk Kamu yang mau belajar dari 0.</p>
                        <p>Materi: Hangeul, Basic Grammar, Basic Vocabulary & Basic Conversation</p>
                        <a type="button" href="{{ route('class.show') }}" class="col-6 btn text-white font-2 px-5 rounded-pill d-flex align-items-center justify-content-around" style="background: linear-gradient(90deg, #abff73, #22ff05);"><i class="fa-brands fa-whatsapp"></i>Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
