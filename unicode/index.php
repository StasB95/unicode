<?php get_header() ?>
    <main>
        <section class="post">
            <div class="post-wrapper">
                <div class="post-content">
                    <h2 class="post-content-title"><?= CFS()->get('post-content-title') ?></h2>
                    <p class="post-content-text"><?= CFS()->get('post-content-text') ?></p>
                    <ul class="post-content-list">
                        <li class="post-content-item"></li>
                        <li class="post-content-item"></li>
                        <li class="post-content-item"></li>
                        <li class="post-content-item"></li>
                        <li class="post-content-item"></li>
                        <li class="post-content-item"></li>
                    </ul>
                </div>
                <div class="post-card">
                    <div class="post-card-img" style="background-image: url(<?= CFS()->get('post-card-img'); ?>); background-size: contain;"></div>
                    <h3 class="post-card-title"><?= CFS()->get('post-card-title') ?></h3>
                    <p class="post-card-text"><?= CFS()->get('post-card-text') ?></p>
                </div>
            </div>
        </section>
        <section class="info1">
            <h2 class="info1-text"><?= CFS()->get('info1-text') ?></h2>
            <div class="info1-icon"></div>
            <p class="info1-inf"><?= CFS()->get('info1-inf') ?></p>
        </section>
        <section class="info2">
            <div class="info2-inner">
                <h2 class="info2-text"><?= CFS()->get('info2-text') ?></h2>
                <div class="info2-content">
                    <span class="info2-icon"></span>
                    <p class="info2-inf"><?= CFS()->get('info2-text') ?></p>
                </div>
            </div>
            <img src="../img/sqare.svg" alt="" class="info2-img">
        </section>
    </main>
<?php get_footer() ?>