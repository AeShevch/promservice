<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <?php
                    // Меню
                    get_template_part('../components/menu/menu'); ?>
                </div>
                <div class="col-4">
                    <?php
                    // Контакты для шапки
                    get_template_part('../components/header-contacts/header-contacts'); ?>
                </div>
            </div>

        </div>
    </div>
    <div class="header__main">
        <div class="col-3">
            <?php the_custom_logo(); ?>
        </div>
        <div class="col-6">
            <?php echo get_search_query(); ?>
        </div>
        <div class="col-2">
            <a href="#" class="button">
                Оплатить услуги
            </a>
        </div>
    </div>
</header>
