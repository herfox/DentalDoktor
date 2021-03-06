<?php
/*------------------------------------------------------------------------
 # SM Listing Tabs - Version 2.0.1
 # Copyright (c) 2014 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Listingtabs_Model_System_Config_Source_ColumnSetting
{
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => Mage::helper('listingtabs')->__('1')),
            array('value' => 2, 'label' => Mage::helper('listingtabs')->__('2')),
            array('value' => 3, 'label' => Mage::helper('listingtabs')->__('3')),
            array('value' => 4, 'label' => Mage::helper('listingtabs')->__('4')),
            array('value' => 5, 'label' => Mage::helper('listingtabs')->__('5')),
            array('value' => 6, 'label' => Mage::helper('listingtabs')->__('6'))

        );
    }
}