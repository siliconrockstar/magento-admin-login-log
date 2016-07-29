<?php

class Siliconrockstar_Adminloginlog_Model_Observer extends Mage_Core_Model_Observer {
    
    public function onAdminLogin($observer){
        
        $userData = $observer->getUser()->getData();
        
        $logData = array(
            'admin_user_id' => $userData['user_id'],
            'username' => $userData['username'],
            'firstname' => $userData['firstname'],
            'lastname' => $userData['lastname'],
            'email' => $userData['email'],
            'success' => 1,
            'remote_ip' => Mage::helper('core/http')->getRemoteAddr()
        );
        
        Mage::getModel('siliconrockstar_adminloginlog/log')->setData($logData)->save();

    }
    
    public function onAdminLoginFailed($observer){
        
        $logData = array(
            'username' => $observer->getUserName(),
            'remote_ip' => Mage::helper('core/http')->getRemoteAddr()
        );
        
        Mage::getModel('siliconrockstar_adminloginlog/log')->setData($logData)->save();
        
    }
}