<?php

/**
 * ProductPhoto form.
 *
 * @package    sf-advanced-forms
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductPhotoForm extends BaseProductPhotoForm
{
  public function configure()
  {
    $this->useFields(array('filename', 'caption'));

    $this->setWidget('filename', new sfWidgetFormInputFile());
    $this->setValidator('filename', new sfValidatorFile(array(
      'mime_types' => 'web_images',
      'path' => sfConfig::get('sf_upload_dir').'/products',
      'required' => false,
    )));

    $this->validatorSchema['caption']->setOption('required', false);
  }
}
