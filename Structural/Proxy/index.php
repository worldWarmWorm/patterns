<?php

use DesignPatterns\Structural\Proxy\Pattern\DownloaderProxy;
use DesignPatterns\Structural\Proxy\Pattern\Downloadable;
use DesignPatterns\Structural\Proxy\Pattern\Downloader;

function code(Downloadable $subject): void
{
    $result = $subject->download("http://example.com/");
    $result = $subject->download("http://example.com/");
}

echo "<p>Executing client code with real subject:</p>";
$realDownloader = new Downloader();
code($realDownloader);

echo "<p>Executing the same client code with a Proxy:</p>";
$proxyDownloader = new DownloaderProxy($realDownloader);
code($proxyDownloader);