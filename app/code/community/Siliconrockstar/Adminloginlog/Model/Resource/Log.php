<?php

class Siliconrockstar_Adminloginlog_Model_Resource_Log extends Mage_Core_Model_Resource_Db_Abstract {

    protected function _construct() {
        $this->_init('siliconrockstar_adminloginlog/log', 'admin_login_id');
    }

}
