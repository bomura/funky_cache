<?php
/*
 * Funky Cache plugin for Wolf CMS. <http://www.wolfcms.org>
 * 
 * Copyright (C) 2012 Martijn van der Kleijn <martijn.niji@gmail.com>
 * Copyright (c) 2008-2009 Mika Tuupola
 *
 * This file is part of the Funky Cache plugin for Wolf CMS. It is licensed
 * under the MIT license.
 * 
 * For details, see:  http://www.opensource.org/licenses/mit-license.php
 */
?>
<p class="button"><a href="<?php echo get_url('plugin/funky_cache/'); ?>"><img src="<?php echo ICONS_URI; ?>/file-folder-32.png" align="middle" alt="folder icon" /><?php echo __('Cached pages'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/funky_cache/documentation/'); ?>"><img src="<?php echo ICONS_URI; ?>/file-unknown-32.png" align="middle" alt="page icon" /><?php echo __('Example rewrite rules'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/funky_cache/settings'); ?>"><img src="<?php echo ICONS_URI; ?>/settings-32.png" align="middle" alt="settings icon" /><?php echo __('Settings'); ?></a></p>
<div class="box">
    <h2><?php echo __('About Funky Cache'); ?></h2>
    <p>
        <?php echo __('The Funky Cache plugin allows you to cache pages on the filesystem. It works by using mod_rewrite or equivalent rewrite functionality.'); ?>
    </p>
    <p>
        <?php echo __('Homepage'); ?>: <a href="http://vanderkleijn.net/software/funky-cache.html">vanderkleijn.net</a>
    </p>
</div>