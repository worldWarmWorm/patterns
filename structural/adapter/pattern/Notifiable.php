<?php

interface Notifiable
{
    public function notification(string $theme, string $content);
}