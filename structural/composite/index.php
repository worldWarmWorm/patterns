<?php

use DesignPatterns\Structural\composite\pattern\Form\Fieldset;
use DesignPatterns\Structural\composite\pattern\Form\Form;
use DesignPatterns\Structural\composite\pattern\Form\FormElement;
use DesignPatterns\Structural\composite\pattern\Form\Input;

function getProductForm(): FormElement
{
    $form = new Form('product', 'Add product', '/product/add');

    $form->add(new Input('name', 'Name', 'text'));
    $form->add(new Input('description', 'Description', 'text'));

    $picture = new Fieldset('photo', 'Product photo');

    $picture->add(new Input('caption', 'Caption', 'text'));
    $picture->add(new Input('image', 'Image', 'file'));
    $form->add($picture);

    return $form;
}

function loadProductData(FormElement $form): void
{
    $form->setData([
        'name' => 'Apple MacBook',
        'description' => 'A decent laptop.',
        'photo' => [
            'caption' => 'Front photo.',
            'image' => 'photo1.png',
        ],
    ]);
}

function renderProduct(FormElement $form): void
{
    echo $form->render();
}

$form = getProductForm();
loadProductData($form);
renderProduct($form);