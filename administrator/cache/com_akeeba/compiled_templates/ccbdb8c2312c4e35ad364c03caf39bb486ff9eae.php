<?php /* C:\xampp\htdocs\TIENDAhidalgo\administrator\components\com_akeeba\tmpl\ControlPanel\sidebar_backup.blade.php */ ?>
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
<div class="akeeba-panel">
    <header class="akeeba-block-header">
        <h3><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_BACKUP_STATS'); ?></h3>
    </header>
    <div><?php echo $this->latestBackupCell; ?></div>
</div>
