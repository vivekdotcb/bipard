 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script>
            const nav_main = document.querySelector('.nav-main');
            const menu_l = document.querySelector('.menu_l');
            const close_nav = document.querySelector('.close_nav')
            menu_l.addEventListener('click',()=>{
                nav_main.classList.add('nav-main_active')
            });
            close_nav.addEventListener('click',()=>{
                nav_main.classList.remove('nav-main_active')
            });
        </script>
    <script src="<?= base_url()?>/public/front/app/font.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".pre-col", {
            slidesPerView: 2,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                992: {
                    slidesPerView: 6,
                    spaceBetween: 30
                }
            }
        });
        var swiper = new Swiper(".col-slider", {
            slidesPerView: 2,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                992: {
                    slidesPerView: 5,
                    spaceBetween: 30
                }
            }
        });
    </script>