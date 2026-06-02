<div class="preloader">
    <style>
        /* Safety: If JS fails, this will hide the preloader after 5 seconds automatically */
        @keyframes forceHide {
            0% { opacity: 1; visibility: visible; }
            90% { opacity: 1; visibility: visible; }
            100% { opacity: 0; visibility: hidden; display: none; }
        }
        .preloader {
            animation: forceHide 5s forwards;
        }
        .preloader.loaded {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
        }
    </style>
</div>