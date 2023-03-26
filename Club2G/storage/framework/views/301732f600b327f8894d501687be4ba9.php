<header id="site-header" class="site-header" role="banner">
    <div class="container">
        <div class="site-logo-wrap">
            <hgroup>
            </hgroup>
        </div>
        <nav id="primary-nav" class="primary-nav" role="navigation">
            <ul id="menu-gd-menu" class="menu">
                <?php if(auth()->guard()->guest()): ?>

                <?php else: ?>

                <?php endif; ?>
            </ul>
        </nav>
        <div class="dt-nav-toggle  dt-mobile-nav-button-wrap"><a href="#primary-nav"><i class="fas fa-bars"></i></a></div>
    </div>
</header><?php /**PATH C:\Users\mavae\OneDrive\Escritorio\2023-1\P2\NesquikProject\Club2G\resources\views/partials/header.blade.php ENDPATH**/ ?>