/**
 * Created by john@jfmacdonald.com on 3/3/17.
 */
(function ($) {
    'use strict';

    $(function () {
        $('.an_image_toggler__component').each(function () {
            var $images = $(this).find('.an_image_toggler__image');
            $images.last().hide();
            $(this).find('.an_image_toggler__button > button').click(function () {
                $images.toggle('slow');
            });
        });
    });
})
(jQuery);
