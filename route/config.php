<?php
/**
 * The key of the returned array is the specific URL for which a error reporting level should be set. 
 * The value is the setting itself. Please see 
 * http://files.zend.com/help/Zend-Server/content/zendserverapi/zend_monitor-php_api.htm#function-zend_monitor_event_reporting
 * for further information about the error reporting level.
 * 
 * Example:
 * return array(
 *   'http://172.17.0.2/disable/monitor/with/route/plugin/mem.php' => ZEND_MONITOR_ETBM_ALL & ~ZEND_MONITOR_ETBM_REQ_LARGE_MEM_USAGE
 * );
 * 
 * This configuration sets the monitoring to get all events except for 'High Memory Usage', 
 * but just for the given URL resp. script
 **/
return array(
    'http://172.17.0.2/disable/monitor/with/route/plugin/mem.php' => ZEND_MONITOR_ETBM_ALL & ~ZEND_MONITOR_ETBM_REQ_LARGE_MEM_USAGE
);
