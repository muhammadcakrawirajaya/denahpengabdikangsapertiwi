<?php
include 'partial/header.php';
?>
<section class="login">
    <div class="login-container">
        <div class="login-form">
            <div class="login-form-inner">
                <div class="logo"><img src="#" alt=""></div>
                <h1>Login</h1>
                <p class="body-text">Silakan Masuk</p>

                <a href="#" class="rounded-button google-login-button">
                    <span class="google-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M113.47 309.408L95.648 375.94l-65.139 1.378C11.042 341.211 0 299.9 0 256c0-42.451 10.324-82.483 28.624-117.732h.014L86.63 148.9l25.404 57.644c-5.317 15.501-8.215 32.141-8.215 49.456.002 18.792 3.406 36.797 9.651 53.408z"
                                fill="#fbbb00" />
                            <path
                                d="M507.527 208.176C510.467 223.662 512 239.655 512 256c0 18.328-1.927 36.206-5.598 53.451-12.462 58.683-45.025 109.925-90.134 146.187l-.014-.014-73.044-3.727-10.338-64.535c29.932-17.554 53.324-45.025 65.646-77.911h-136.89V208.176h245.899z"
                                fill="#518ef8" />
                            <path
                                d="M416.253 455.624l.014.014C372.396 490.901 316.666 512 256 512c-97.491 0-182.252-54.491-225.491-134.681l82.961-67.91c21.619 57.698 77.278 98.771 142.53 98.771 28.047 0 54.323-7.582 76.87-20.818l83.383 68.262z"
                                fill="#28b446" />
                            <path
                                d="M419.404 58.936l-82.933 67.896C313.136 112.246 285.552 103.82 256 103.82c-66.729 0-123.429 42.957-143.965 102.724l-83.397-68.276h-.014C71.23 56.123 157.06 0 256 0c62.115 0 119.068 22.126 163.404 58.936z"
                                fill="#f14336" />
                        </svg></span>
                    <span>masuk dengan google</span>
                </a>

                <div class="sign-in-seperator">
                    <span>atau masuk dengan email</span>
                </div>

                <div class="login-form-group">
                    <label for="email">Email <span class="required-star">*</span></label>
                    <input type="text" placeholder="email@example.com" id="email">
                </div>
                <div class="login-form-group">
                    <label for="pwd">Password <span class="required-star">*</span></label>
                    <input autocomplete="off" type="text" placeholder="Minimal 8 Karakter" id="pwd">
                </div>

                <div class="login-form-group single-row">
                    <div class="custom-check">
                        <input autocomplete="off" type="checkbox" checked id="remember"><label for="remember">Ingat Saya</label>
                    </div>

                    <a href="#" class="link forgot-link">Lupa Password ?</a>
                </div>

                <a href="#" class="rounded-button login-cta">Login</a>

                <div class="register-div">Belum punya akun? <a href="#" class="link create-account" -link>daftar di sini</a></div>
            </div>

        </div>
        <div class="onboarding">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide color-1">
                        <div class="slide-image">
                            <img src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/startup-launch.png"
                                loading="lazy" alt="" />
                        </div>
                        <div class="slide-content">
                            <h2>Turn your ideas into reality.</h2>
                            <p>Consistent quality and eperience across all platform and devices</p>
                        </div>
                    </div>
                    <div class="swiper-slide color-1">
                        <div class="slide-image">
                            <img src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/cloud-storage.png"
                                loading="lazy" alt="" />
                        </div>
                        <div class="slide-content">
                            <h2>Turn your ideas into reality.</h2>
                            <p>Consistent quality and eperience across all platform and devices</p>
                        </div>
                    </div>
                    <div class="swiper-slide color-1">
                        <div class="slide-image">
                            <img src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/cloud-storage.png"
                                loading="lazy" alt="" />
                        </div>
                        <div class="slide-content">
                            <h2>Turn your ideas into reality.</h2>
                            <p>Consistent quality and eperience across all platform and devices</p>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<?php
include './partial/footer.php';
?>