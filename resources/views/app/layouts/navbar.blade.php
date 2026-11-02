<section class="sticky-top" style="background-color: #ecc8fa;">
    <div class="r-container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <div class="logo-container">
                        <img src="{{ asset('app_assets/image/logo.png') }}" alt="" class="img-fluid">
                    </div>
                </a>
                <button class="navbar-toggler accent-color border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 font-2 fw-semibold gap-lg-3">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('class.*') ? 'active' : '' }}" href="{{ route('class.index') }}">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('games.*') ? 'active' : ''}}" href="{{ route('games.index') }}">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('free-lesson.*') ? 'active' : '' }}" href="{{ route('free-lesson.index') }}">Free Lesson</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">Contact</a>
                        </li>
                    </ul>
                    <a href="" type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#auth">Masuk</a>
                </div>
            </div>
        </nav>
    </div>
</section>
<!-- Modal -->
<div class="modal fade bg-overlay" id="auth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-small">
        <div class="modal-content p-5 login-page" style="background-color: #fff;">
            <div class="position-relative">
                <h5 class="fw-bold mb-5 text-center">Login</h5>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email">Username</label>
                        <input type="text" class="form-control py-2 px-4 border-bottom" autocomplete="username" name="email" id="email"
                            placeholder="Username" required value="{{ old('email') }}">
                        <div class="invalid-feedback">
                            The field is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control py-2 px-4 border-bottom" name="password" id="password" autocomplete="current-password"
                            placeholder="Password" required>
                        <div class="invalid-feedback">
                            The field is required.
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <input type="checkbox" name="remember" id="remember_me">
                            <label for="remember_me">Ingat Saya</label>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Lupa Password</a>
                            @endif
                        </div>
                    </div>
                    <button type="submit" style="background-color: #ecc8fa;" class="mt-4 col-6 mx-auto btn text-white font-2 px-5 rounded-3 d-flex align-items-center justify-content-center">Masuk</button>
                </form>
                <a href="javascript:void(0);" onclick="showRegister()" class="d-flex align-items-center justify-content-center mt-3 fw-bold" style="color: #d56cff;">Daftar disini</a>
            </div>
        </div>
        <div class="modal-content p-5 register-page" style="background-color: #fff; display:none;">
            <div class="position-relative">
                <h5 class="fw-bold mb-5 text-center">Daftar</h5>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control py-2 px-4 border-bottom" name="name" id="name"
                            placeholder="Nama Lengkap" required>
                        <div class="invalid-feedback">
                            The field is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp">No. Telepon</label>
                        <input type="text" class="form-control py-2 px-4 border-bottom" name="no_hp" id="no_hp"
                            placeholder="No. Telepon" required>
                        <div class="invalid-feedback">
                            The field is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control py-2 px-4 border-bottom" name="username" id="username"
                            placeholder="Username" required>
                        <div class="invalid-feedback">
                            The field is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control py-2 px-4 border-bottom" name="password" id="password"
                            placeholder="Password" required>
                        <div class="invalid-feedback">
                            The field is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" class="form-control py-2 px-4 border-bottom" name="password_confirmation" id="password_confirmation"
                            placeholder="Konfirmasi Password" required>
                        <div class="invalid-feedback">
                            The field is required.
                        </div>
                    </div>
                    <button type="submit" style="background-color: #ecc8fa;" class="mt-4 col-6 mx-auto btn text-white font-2 px-5 rounded-3 d-flex align-items-center justify-content-center">Daftar</button>
                </form>
                <a href="javascript:void(0);" onclick="showLogin()" class="d-flex align-items-center justify-content-center mt-3 fw-bold" style="color: #d56cff;">Masuk disini</a>
            </div>
        </div>
    </div>
</div>
<script>
    function showRegister() {
        var classLogin = document.querySelector('.login-page');
        var classRegister = document.querySelector('.register-page');

        if (classLogin) {
            classLogin.style.display = 'none';
        }
        if (classRegister) {
            classRegister.style.display = 'block';
        }
    }

    function showLogin() {
        var classLogin = document.querySelector('.login-page');
        var classRegister = document.querySelector('.register-page');

        if (classRegister) {
            classRegister.style.display = 'none';
        }
        if (classLogin) {
            classLogin.style.display = 'block';
        }
    }
</script>

