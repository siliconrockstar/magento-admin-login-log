<?php

class Siliconrockstar_Adminloginlog_Model_Resource_Log_Collection extends
Mage_Core_Model_Resource_Db_Collection_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('siliconrockstar_adminloginlog/log');
    }

}