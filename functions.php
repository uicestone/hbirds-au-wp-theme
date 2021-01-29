<?php

add_theme_support('post-thumbnails');

add_image_size('news', 521, 291, true);
add_image_size('wines', 300, 876, true);
add_image_size('wine-detail', 1920, 1067, true);

add_filter( 'big_image_size_threshold', '__return_false' );


