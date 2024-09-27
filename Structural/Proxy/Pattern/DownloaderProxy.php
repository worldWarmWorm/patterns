<?php

namespace DesignPatterns\Structural\Proxy\Pattern;

final class DownloaderProxy implements Downloadable
{
    private array $cache = [];

    public function __construct(private readonly Downloader $downloader)
    {
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }

        return $this->cache[$url];
    }
}