<?php /* C:\xampp\htdocs\TIENDAhidalgo\administrator\components\com_akeeba\tmpl\ControlPanel\profile.blade.php */ ?>
<?php
/**
 * @package   akeebabackup
 * @copyright Copyright (c)2006-2023 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

/** @var $this \Akeeba\Backup\Admin\View\ControlPanel\Html */

// Protect from unauthorized access
defined('_JEXEC') || die();

/**
 * Call this template with:
 * [
 * 	'returnURL' => 'index.php?......'
 * ]
 * to set up a custom return URL
 */
?>
<?php echo \Joomla\CMS\HTML\HTMLHelper::_('formbehavior.chosen'); ?>

<div class="akeeba-panel">
	<form action="index.php" method="post" name="switchActiveProfileForm" id="switchActiveProfileForm" class="akeeba-form--inline">
		<input type="hidden" name="option" value="com_akeeba" />
		<input type="hidden" name="view" value="ControlPanel" />
		<input type="hidden" name="task" value="SwitchProfile" />
		<?php if(isset($returnURL)): ?>
		<input type="hidden" name="returnurl" value="<?php echo $returnURL; ?>" />
		<?php endif; ?>
		<input type="hidden" name="<?php echo $this->container->platform->getToken(true); ?>" value="1" />

		<div class="akeeba-form-group">
			<label>
				<?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_PROFILE_TITLE'); ?>: #<?php echo $this->profileId; ?>

			</label>

			<?php /* Joomla 3.x: Chosen does not work with attached event handlers, only with inline event scripts (e.g. onchange) */ ?>
			<?php echo \Joomla\CMS\HTML\HTMLHelper::_('select.genericlist', $this->profileList, 'profileid', ['list.select' => $this->profileId, 'id' => 'comAkeebaControlPanelProfileSwitch', 'list.attr' => ['class' => 'advancedSelect', 'onchange' => 'document.forms.switchActiveProfileForm.submit();']]); ?>
		</div>

		<div class="akeeba-form-group--actions">
			<button class="akeeba-btn akeeba-hidden-phone" type="submit">
				<span class="akion-forward"></span>
				<?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_PROFILE_BUTTON'); ?>
			</button>
		</div>
	</form>
</div>
