<?php

/**
 * BaseProductPhoto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $product_id
 * @property string $filename
 * @property string $caption
 * @property Product $Product
 * 
 * @method integer      getProductId()  Returns the current record's "product_id" value
 * @method string       getFilename()   Returns the current record's "filename" value
 * @method string       getCaption()    Returns the current record's "caption" value
 * @method Product      getProduct()    Returns the current record's "Product" value
 * @method ProductPhoto setProductId()  Sets the current record's "product_id" value
 * @method ProductPhoto setFilename()   Sets the current record's "filename" value
 * @method ProductPhoto setCaption()    Sets the current record's "caption" value
 * @method ProductPhoto setProduct()    Sets the current record's "Product" value
 * 
 * @package    sf-advanced-forms
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProductPhoto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product_photo');
        $this->hasColumn('product_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('filename', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('caption', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Product', array(
             'local' => 'product_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));
    }
}