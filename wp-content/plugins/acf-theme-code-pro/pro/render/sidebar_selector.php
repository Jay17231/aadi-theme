<?php
// Sidebar Selector field

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Support for sidebar_selector field
echo $this->indent . htmlspecialchars("<?php \$".$this->name. ' = ' . $this->get_field_method . "( '" . $this->name ."' ); ?>")."\n";
echo $this->indent . htmlspecialchars("<?php dynamic_sidebar( \$".$this->name. " ); ?>")."\n";