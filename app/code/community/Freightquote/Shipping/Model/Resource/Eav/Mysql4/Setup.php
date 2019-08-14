<?php
/*
  Freightquote.com Shipping Module for Magento Commerce

  Copyright (c) 2010 Freightquote.com
  
  Developed by Dynamo Effects - sales [at] dynamoeffects.com

  Released under the Open Software License (OSL 3.0)
*/

  class Freightquote_Shipping_Model_Resource_Eav_Mysql4_Setup extends Mage_Eav_Model_Entity_Setup {
  
    public function getDefaultEntities() {
        return array(
            'catalog_product' => array(
                'entity_model'      => 'catalog/product',
                'attribute_model'   => 'catalog/resource_eav_attribute',
                'table'             => 'catalog/product',
                'additional_attribute_table' => 'catalog/eav_attribute',
                'entity_attribute_collection' => 'catalog/product_attribute_collection',
                'attributes'        => array(
                  'freightquote_enable' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'int',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'Ship with Freightquote.com',
                    'input'             => 'select',
                    'class'             => '',
                    'source'            => 'eav/entity_attribute_source_boolean',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => true,
                    'user_defined'      => false,
                    'default'           => '0',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  ),
                  'freightquote_class' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'varchar',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'Freight Class',
                    'input'             => 'select',
                    'class'             => '',
                    'source'            => 'Freightquote_Shipping_Model_Carrier_Source_Class',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => true,
                    'user_defined'      => false,
                    'default'           => '50',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  ),
                  'freightquote_length' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'int',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'Length (inches)',
                    'input'             => 'text',
                    'width'             => '50',
                    'class'             => '',
                    'source'            => '',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => true,
                    'user_defined'      => false,
                    'default'           => '0',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  ),
                  'freightquote_width' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'int',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'Width (inches)',
                    'input'             => 'text',
                    'class'             => '',
                    'source'            => '',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => true,
                    'user_defined'      => false,
                    'default'           => '0',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  ),
                  'freightquote_height' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'int',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'Height (inches)',
                    'input'             => 'text',
                    'class'             => '',
                    'source'            => '',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => true,
                    'user_defined'      => false,
                    'default'           => '0',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  ),
                  'freightquote_nmfc' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'varchar',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'NMFC (optional)',
                    'input'             => 'text',
                    'class'             => '',
                    'source'            => '',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => false,
                    'user_defined'      => false,
                    'default'           => '',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  ),
                  'freightquote_hzmt' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'int',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'Hazardous Material',
                    'input'             => 'select',
                    'class'             => '',
                    'source'            => 'eav/entity_attribute_source_boolean',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => true,
                    'user_defined'      => false,
                    'default'           => '0',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  ),
                  'freightquote_packaging' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'varchar',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'Packaging Type',
                    'input'             => 'select',
                    'class'             => '',
                    'source'            => 'Freightquote_Shipping_Model_Carrier_Source_Packaging',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => true,
                    'user_defined'      => false,
                    'default'           => 'Boxes',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  ),
                  'freightquote_commodity' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'varchar',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'Commodity Type',
                    'input'             => 'select',
                    'class'             => '',
                    'source'            => 'Freightquote_Shipping_Model_Carrier_Source_Commodity',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => true,
                    'user_defined'      => false,
                    'default'           => 'GeneralMerchandise',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  ),
                  'freightquote_content' => array(
                    'group'             => 'Freightquote.com',
                    'type'              => 'varchar',
                    'backend'           => '',
                    'frontend'          => '',
                    'label'             => 'Contents Type',
                    'input'             => 'select',
                    'class'             => '',
                    'source'            => 'Freightquote_Shipping_Model_Carrier_Source_Content',
                    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible'           => true,
                    'required'          => true,
                    'user_defined'      => false,
                    'default'           => 'NewCommercialGoods',
                    'searchable'        => false,
                    'filterable'        => false,
                    'comparable'        => false,
                    'visible_on_front'  => false,
                    'unique'            => false,
                    'apply_to'          => 'simple'
                  )
               )
           )
      );
    }
  }
?>