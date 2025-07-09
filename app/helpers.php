<?php

declare(strict_types=1);

use App\Models\ContentBlock;

if (! function_exists('content_block')) {
    function content_block(string $identifier, string $default = '', bool $strip = false): string
    {
        $content = ContentBlock::identify($identifier)->content ?? $default;

        return $strip ? strip_tags($content) : html_entity_decode($content);
    }
}
