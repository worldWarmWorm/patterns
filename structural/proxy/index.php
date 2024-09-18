<?php

use DesignPatterns\Structural\proxy\pattern\DownloaderProxy;
use DesignPatterns\Structural\proxy\pattern\Downloadable;
use DesignPatterns\Structural\proxy\pattern\Downloader;

function code(Downloadable $subject): void
{
    $result = $subject->download("http://example.com/");
    $result = $subject->download("http://example.com/");
}

echo "<p>Executing client code with real subject:</p>";
$realDownloader = new Downloader();
code($realDownloader);

echo "<p>Executing the same client code with a proxy:</p>";
$proxyDownloader = new DownloaderProxy($realDownloader);
code($proxyDownloader);