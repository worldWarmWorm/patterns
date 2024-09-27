<?php

namespace DesignPatterns\Structural\Proxy\Pattern;

class Downloader implements Downloadable
{
    public function download(string $url): string
    {
        echo "Downloading a file from the Internet.\n";
        $result = file_get_contents($url);
        echo "Downloaded bytes: " . strlen($result) . "\n";

        return $result;
    }
}