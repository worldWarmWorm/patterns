<?php

namespace DesignPatterns\Structural\Decorator\Pattern\Format;

final class Markdown extends Text
{
    public function format(string $text): string
    {
        $text = parent::format($text);
        $chunks = explode('<br>', $text);

        foreach ($chunks as &$chunk) {
            $chunk = preg_match('|^#+|', $chunk)
                ? preg_replace_callback(
                    '|^(#+)(.*?)$|',
                    static function ($matches) {
                        $h = strlen($matches[1]);
                        return "<h$h>" . trim($matches[2]) . "</h$h>";
                    },
                    $chunk
                )
                : "<p>$chunk</p>";
        }

        $text = implode("<br>", $chunks);
        $text = preg_replace("|__(.*?)__|", '<strong>$1</strong>', $text);
        $text = preg_replace("|\*\*(.*?)\*\*|", '<strong>$1</strong>', $text);
        $text = preg_replace("|_(.*?)_|", '<em>$1</em>', $text);
        $text = preg_replace("|\*(.*?)\*|", '<em>$1</em>', $text);

        return $text;
    }
}