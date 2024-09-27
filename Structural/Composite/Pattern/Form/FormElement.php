<?php

namespace DesignPatterns\Structural\Composite\Pattern\Form;

abstract class FormElement
{
    protected $data;

    public function __construct(protected string $name, protected string $title)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    abstract public function render(): string;
}