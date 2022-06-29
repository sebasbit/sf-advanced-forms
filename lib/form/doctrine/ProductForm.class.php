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
    $form = new ProductPhotoCollectionForm(null, array(
      'product' => $this->getObject(),
      'size'    => 2,
    ));

    $this->embedForm('newPhotos', $form);
  }

  public function saveEmbeddedForms($con = null, $forms = null)
  {
    if (null === $forms)
    {
      $photos = $this->getValue('newPhotos');
      $forms = $this->embeddedForms;
      foreach ($this->embeddedForms['newPhotos'] as $name => $form)
      {
        if (!isset($photos[$name]))
        {
          unset($forms['newPhotos'][$name]);
        }
      }
    }

    return parent::saveEmbeddedForms($con, $forms);
  }
}
