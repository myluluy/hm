<?php
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
class  FM {

    var $smarty;
    var $db;
    var $cfg;

    
    function FM(){
    }

    function __construct() {
        global $cfg;
        $this->cfg = $cfg;
        $this->db = $this->db_init();
        $this->smarty = $this->smarty_init();

    }

    private function db_init() {
        @$db = new MySQL($this->cfg['mysql_database'], $this->cfg['mysql_user'], $this->cfg['mysql_password'],$this->cfg['mysql_host'].':'.$this->cfg['mysql_port']);
        if(!is_null($db->lastError)) {
            exit($db->lastError);
        }
        $db->ExecuteSQL('SET NAMES"'.$this->cfg['mysql_charset'].'"');
        return $db;
    }

    private function smarty_init() {
        $smarty = new Smarty;
        if(is_array($this->cfg['smarty_cfg'])) {
            foreach($this->cfg['smarty_cfg'] as $key => $value) {
                $smarty->{$key} = $value;
            }
        }
        return $smarty;
    }
}
?>
