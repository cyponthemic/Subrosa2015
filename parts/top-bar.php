<div class=" contain-to-grid show-for-large-only" style="position:fixed; z-index:99999;">
    <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
        
        <section class="top-bar-section">
        <?php if(is_front_page()): ?>
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
        <?php else: ?>    
             <?php foundationpress_top_bar_lWOO(); ?>
            <?php foundationpress_top_bar_rWOO(); ?>
       <?php endif; ?>
        </section>
    </nav>
</div>
