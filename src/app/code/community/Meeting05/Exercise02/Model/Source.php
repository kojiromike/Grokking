<?php
/**
 * Created by PhpStorm.
 * User: smithm5
 * Date: 7/7/14
 * Time: 9:43 PM
 */

class Meeting05_Exercise02_Model_Source extends Mage_Eav_Model_Entity_Attribute_Source_Abstract {
    public function getAllOptions() {
        return array(
            'zip' => 'piz',
            'mild' => 'dlim',
            'moderate' => 'etaredom',
            'much' => 'hcum',
            'starving' => 'gnivrats',
        );
    }
}
