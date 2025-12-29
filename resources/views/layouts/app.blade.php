<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">

@include('layouts.partials.head')
<!-- Floating WhatsApp Button -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<a href="https://wa.me/6282337274550" class="whatsapp-float d-flex align-items-center text-white text-decoration-none">
    <i class="bi bi-whatsapp fs-2"></i>
    <span class="whatsapp-text ms-2">Chat Kami</span>
</a>


<body>
    <div class="index-page">

        @include('layouts.partials.header')

        <main class="hero">
            @yield('content')
            @yield('modal')
        </main>

        @include('layouts.partials.footer')
        @vite(['resources/js/app.js'])

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


    @yield('js')
</body>

</html>
