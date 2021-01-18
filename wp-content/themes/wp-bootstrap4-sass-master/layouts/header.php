<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-8">
                    <?php
                    // Меню
                    get_template_part('components/menu/menu'); ?>
                </div>
                <div class="col-4">
                    <?php
                    // Контакты для шапки
                    get_template_part('components/header-contacts/header-contacts'); ?>
                </div>
            </div>

        </div>
    </div>
    <div class="header__main">
        <div class="container">
            <div class="header__inner">
                <div class="row align-items-center">
                    <div class="col-3">
                        <div class="logo">
                            <?php the_custom_logo(); ?>
                            <a href="/" class="logo__title">Промсервис</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <?php echo get_search_query(); ?>
                    </div>
                    <div class="col-3 text-right">
                        <a href="#" class="button button_transparent justify-content-end">
                            Оплатить услуги
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
