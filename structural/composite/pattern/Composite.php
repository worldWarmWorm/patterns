<?php

namespace DesignPatterns\Structural\composite\pattern;

use DesignPatterns\Structural\composite\pattern\Form\FormElement;

class Composite extends FormElement
{
    /**
     * @var array<FormElement>
     */
    protected array $fields = [];

    public function add(FormElement $element): void
    {
        $this->fields[$element->getName()] = $element;
    }

    public function remove(FormElement $element): void
    {
        $this->fields = array_filter(
            $this->fields,
            function (FormElement $child) use ($element) {
                return $child !== $element;
            }
        );
    }

    public function setData($data): void
    {
        foreach ($this->fields as $name => $field) {
            if (isset($data[$name])) {
                $field->setData($data[$name]);
            }
        }
    }

    public function getData(): array
    {
        foreach ($this->fields as $name => $field) {
            $data[$name] = $field->getData();
        }

        return $data ?? [];
    }

    public function render(): string
    {
        $output = "";

        foreach ($this->fields as $field) {
            $output .= $field->render();
        }

        return $output;
    }
}