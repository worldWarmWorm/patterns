<?php

namespace DesignPatterns\Structural\decorator\pattern\format;

final class StripTags extends Text
{
    private array $dangerousTagPatterns = [
        "|<script.*?>([\s\S]*)?</script>|i",
    ];

    private array $dangerousAttributes = [
        "onclick", "onkeypress",
    ];

    public function format(string $text): string
    {
        $text = parent::format($text);

        foreach ($this->dangerousTagPatterns as $pattern) {
            $text = preg_replace($pattern, '', $text);
        }

        foreach ($this->dangerousAttributes as $attribute) {
            $text = preg_replace_callback(
                '|<(.*?)>|',
                static fn($matches) => "<" . preg_replace("|$attribute=|i", '', $matches[1]) . ">",
                $text
            );
        }

        return $text;
    }
}