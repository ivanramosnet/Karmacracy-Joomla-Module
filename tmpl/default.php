<?php
/**
 * Karmacracy module
 *
 * Karmacracy module enables you to show and configure easily Karmacracy widget.
 *
 * @package     Joomla.site
 * @subpackage  mod_karmacracy
 * @author      Iván Ramos <info@ivan.ramos.name>
 * @copyright   Copyright (C) 2013 Iván Ramos Jiménez. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// No direct access
defined('_JEXEC') or die;
?>
<div class="karmacracy<?php echo $moduleclass_sfx; ?>">
	<div class="kcy_karmacracy_widget_h_ID">
	</div>
	<script defer="defer" src="http://rodney.karmacracy.com/widget-2.0/?id=ID&type=h&width=<?php echo $width; ?>&sc=0&rb=<?php echo $rb; ?>&c1=<?php echo $c1; ?>&c2=<?php echo $c2; ?>&c3=<?php echo $c3; ?>&c4=<?php echo $c4; ?>&c5=<?php echo $c5; ?>&c6=<?php echo $c6; ?>&c7=<?php echo $c7; ?>&c8=undefined&c9=<?php echo $c9; ?><?php echo $medio_id ? "medio-id=".$medio_id : ''; ?>&url=http://karmacracy.com"></script>
</div>
