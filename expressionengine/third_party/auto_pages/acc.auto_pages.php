<?php
class Auto_pages_acc {

    var $name = 'Auto Pages URI';
    var $id  = 'auto_pages';
    var $version = '1.0';
    var $description = 'Makes your Pages URI field, when visible, behave just like the URL title field, auto-filling it from the entry title.';
    var $sections = array();

    /**
     * Constructor
     */
    function __construct()
    {
        $this->EE =& get_instance();
    }
	
	/**
	 * Set Sections
	 *
	 * @access  public
	 * @return  void
	 */
	function set_sections()
	{
		$this->sections['Auto Pages URI'] = '<script type="text/javascript">EE.publish.which=="new"&&$("#title").bind("keyup blur",function(){$("#title").ee_url_title($("#pages__pages_uri:visible"))});</script>Auto Pages URI is enabled for this site.';
	}
}
?>