(function ($, root, undefined) {

    $(document).ready(function () {

        function btnMenu(){
            const btn = $(".btn-menu");
            const mobileMenu = $(".mobileMenu");
            const body = $('body');
            if (btn.length > 0) {
                btn.click(function() {
                    btn.toggleClass('active');
                    mobileMenu.toggleClass('show');
                    body.toggleClass('t-overflow');
                });
            }
        }

        function subMenu(){
            $("ul.menu li.menu-item-has-children a[href='/']").click(function (e) {
                e.preventDefault();
            });
            $(".menu-item-has-children").each(function () {
                const menuItem = $(this);
                const caret = menuItem.find(".caret");

                // Открытие/закрытие подменю при клике на caret
                caret.on("click", function (e) {
                    e.stopPropagation(); // Остановить всплытие события

                    const subMenu = menuItem.find(".sub-menu");

                    // Закрыть другие подменю
                    $(".menu-item-has-children .sub-menu.show").not(subMenu).removeClass("show");

                    // Показать/скрыть текущее подменю
                    subMenu.toggleClass("show");
                });

                // Скрыть подменю при потере фокуса
                menuItem.on("focusout", function (e) {
                    const isInside = $(e.relatedTarget).closest(menuItem).length > 0; // Проверяем, куда переместился фокус
                    if (!isInside) {
                        menuItem.find(".sub-menu").removeClass("show");
                    }
                });
            });

            // Скрыть все подменю при клике вне меню
            $(document).on("click", function () {
                $(".menu-item-has-children .sub-menu.show").removeClass("show");
            });
        }
        function mobileSubMenu(){
            $(".menu-mobile li.menu-item-has-children").on('click', function (e) {
                e.preventDefault();
                $(this).toggleClass('show');
            });
            $("ul.menu li.menu-item-has-children a[href='/']").click(function (e) {
                e.preventDefault();
            });
        }

        btnMenu();
        subMenu();
       // mobileSubMenu();
    });
})(jQuery);

