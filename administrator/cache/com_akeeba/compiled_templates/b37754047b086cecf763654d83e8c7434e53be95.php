<?php /* C:\xampp\htdocs\TIENDAhidalgo\administrator\components\com_akeeba\tmpl\ControlPanel\oneclick.blade.php */ ?>
<?php
/**
 * @package   akeebabackup
 * @copyright Copyright (c)2006-2023 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

/** @var $this \Akeeba\Backup\Admin\View\ControlPanel\Html */

// Protect from unauthorized access
defined('_JEXEC') || die();

?>
<section class="akeeba-panel--primary">

    <header class="akeeba-block-header">
        <h3><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_HEADER_QUICKBACKUP'); ?></h3>
    </header>

    <div class=" akeeba-grid">
	    <?php foreach($this->quickIconProfiles as $qiProfile): ?>
            <a class="akeeba-action--green"
               href="index.php?option=com_akeeba&view=Backup&autostart=1&profileid=<?php echo (int) $qiProfile->id; ?>&<?php echo $this->container->platform->getToken(true); ?>=1">
                <span class="akion-play"></span>
                <span><?php echo $this->escape($qiProfile->description); ?></span>
            </a>
	    <?php endforeach; ?>
    </div>

</section>
