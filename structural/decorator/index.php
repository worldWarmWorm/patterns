<?php

use DesignPatterns\Structural\decorator\pattern\formatter\DangerousHtmlTagsFilter;
use DesignPatterns\Structural\decorator\pattern\formatter\InputFormat;
use DesignPatterns\Structural\decorator\pattern\formatter\MarkdownFormat;
use DesignPatterns\Structural\decorator\pattern\formatter\PlainTextFilter;
use DesignPatterns\Structural\decorator\pattern\TextInput;

function displayCommentAsAWebsite(InputFormat $format, string $text): void
{
    print_r($format->formatText($text));
}

//$dangerousComment = <<<HERE
//Hello! Nice blog post!
//Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
//<script src="http://www.iwillhackyou.com/script.js">
//  performXSSAttack();
//</script>
//HERE;
//
//$naiveInput = new TextInput();
//print_r("<p>Website renders comments without filtering (unsafe):</p>");
//displayCommentAsAWebsite($naiveInput, $dangerousComment);
//
//$filteredInput = new PlainTextFilter($naiveInput);
//print_r("<p>Website renders comments after stripping all tags (safe):</p>");
//displayCommentAsAWebsite($filteredInput, $dangerousComment);


$dangerousForumPost = <<<HERE
# Welcome<br>This is my first post on this **gorgeous** forum.<br><script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

//$naiveInput = new TextInput();
//print_r("<p>Website renders a forum post without filtering and formatting (unsafe, ugly):</p>");
//displayCommentAsAWebsite($naiveInput, $dangerousForumPost);

$text = new TextInput();
$markdown = new MarkdownFormat($text);
$filteredInput = new DangerousHtmlTagsFilter($markdown);
//echo "<p>Website renders a forum post after translating markdown markup and filtering some dangerous HTML tags and attributes (safe, pretty):</p>";
displayCommentAsAWebsite($filteredInput, $dangerousForumPost);
