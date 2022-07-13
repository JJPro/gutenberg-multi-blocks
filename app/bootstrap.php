<?php

namespace app;

use app\inc\gutenberg\Blocks;

add_action('init', [Blocks::class, 'registerBlockTypes']);
