<?php

/**
 * Product form.
 *
 * @package    sf-advanced-forms
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductForm extends BaseProductForm
{
  public function configure()
  {
    $subForm = new sfForm();

    for ($i = 0; $i < 2; $i++)
    {
      $productPhoto = new ProductPhoto();
      $productPhoto->Product = $this->getObject();

      $form = new ProductPhotoForm($productPhoto);

      $subForm->embedForm($i, $form);
    }

    $this->embedForm('newPhotos', $subForm);
  }
}
