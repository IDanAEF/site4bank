<section class="home__reviews page__block half">
    <div class="container">
        <div class="page__block-title">
            <h2 class="text_fz36 text_color">Отзывы</h2>
        </div>
        <div class="home__reviews-slider slider" data-pc-vis="5" data-lap-vis="4" data-large-vis="3" data-tablet-vis="2" data-mob-vis="1">
            <span class="global-arrow left">
                <img src="<?=IMAGES_PATH?>icons/arrow.svg" alt="">
            </span>
            <div class="home__reviews-list slider-list">
                <div class="home__reviews-track slider-track lightbox-field">
                    <?php
                        $reviews = CIBlockElement::GetList(
                            ["SORT" => "ASC"],
                            ['IBLOCK_ID' => 8, 'ACTIVE' => 'Y'],
                            false,
                            false,
                            ['PREVIEW_PICTURE']
                        );

                        while($review = $reviews->Fetch()) {
                            $resizeReview = CFile::ResizeImageGet(
                                $review['PREVIEW_PICTURE'], 
                                ['width' => 208, 'height' => 300],
                                BX_RESIZE_IMAGE_EXACT
                            );
                            ?>
                            <a href="<?=CFile::GetPath($review['PREVIEW_PICTURE'])?>" class="home__reviews-item slide lightbox-item">
                                <img src="<?=$resizeReview['src']?>" alt="">
                            </a>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <span class="global-arrow right">
                <img src="<?=IMAGES_PATH?>icons/arrow.svg" alt="">
            </span>
        </div>
    </div>
</section>