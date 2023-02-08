<?php /* C:\xampp\htdocs\TIENDAhidalgo\administrator\components\com_akeeba\tmpl\ControlPanel\warnings.blade.php */ ?>
<?php
/**
 * @package   akeebabackup
 * @copyright Copyright (c)2006-2023 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

/** @var $this \Akeeba\Backup\Admin\View\ControlPanel\Html */

// Protect from unauthorized access
defined('_JEXEC') || die();

$cloudFlareTestFile = 'CLOUDFLARE::' . $this->getContainer()->template->parsePath('media://com_akeeba/js/ControlPanel.min.js');
$cloudFlareTestFile .= '?' . $this->getContainer()->mediaVersion;

?>
<?php /* Joomla 3 End of Life notice */ ?>
<?php if(time() > 1660683600): ?>
    <details class="akeeba-block--warning">
        <summary>
            Joomla 3 is approaching its End of Life
        </summary>
        <p>
            Joomla 3 will become End of Life on August 17th, 2023. We only guarantee support and software updates for Joomla 3 before that date.
        </p>
        <p>
            Please upgrade your site to the latest Joomla version (Joomla 4 at the time of this writing) as soon as humanly possible. Afterwards, please update Akeeba Backup to the latest released version. The longer you delay the less likely is that there will be an upgrade path for your site.
        </p>
    </details>
<?php elseif(time() > 1692219600): ?>
    <details class="akeeba-block--info">
        <summary>
            Joomla 3 is End of Life
        </summary>
        <p>
            We do <em>not</em> guarantee support and updates for our software on Joomla 3 after Joomla 3 became End of Life on August 17th, 2023. This means that we may not be able to provide security updates, bug fixes, new features, or addressing compatibility issues with third party services and new web server and web browser versions.
        </p>
        <p>
            Please upgrade your site to the latest Joomla version (Joomla 4 at the time of this writing) as soon as humanly possible and update Akeeba Backup to the latest released version. The longer you delay the less likely is that there will be an upgrade path for your site.
        </p>
    </details>
<?php endif; ?>

<?php /* Configuration Wizard pop-up */ ?>
<?php if($this->promptForConfigurationWizard): ?>
    <?php echo $this->loadAnyTemplate('admin:com_akeeba/Configuration/confwiz_modal'); ?>
<?php endif; ?>

<?php /* Stuck database updates warning */ ?>
<?php if($this->stuckUpdates): ?>
    <div class="akeeba-block--warning">
        <p>
            <?php echo \Joomla\CMS\Language\Text::sprintf('COM_AKEEBA_CPANEL_ERR_UPDATE_STUCK', $this->getContainer()->db->getPrefix(), 'index.php?option=com_akeeba&view=ControlPanel&task=forceUpdateDb'); ?>
        </p>
    </div>
<?php endif; ?>

<?php /* Potentially web accessible output directory */ ?>
<?php if($this->isOutputDirectoryUnderSiteRoot): ?>
    <!--
    Oh, hi there! It looks like you got curious and are peeking around your browser's developer tools – or just the
    source code of the page that loaded on your browser. Cool! May I explain what we are seeing here?

    Just to let you know, the next three DIVs (outDirSystem, insecureOutputDirectory and missingRandomFromFilename) are
    HIDDEN and their existence doesn't mean that your site has an insurmountable security issue. To the contrary.
    Whenever Akeeba Backup detects that the backup output directory is under your site's root it will CHECK its security
    i.e. if it's really accessible over the web. This check is performed with an AJAX call to your browser so if it
    takes forever or gets stuck you won't see a frustrating blank page in your browser. If AND ONLY IF a problem is
    detected said JavaScript will display one of the following DIVs, depending on what is applicable.

    So, to recap. These hidden DIVs? They don't indicate a problem with your site. If one becomes visible then – and
    ONLY then – should you do something about it, as instructed. But thank you for being curious. Curiosity is how you
    get involved with and better at web development. Stay curious!
    -->
    <?php /* Web accessible output directory that coincides with or is inside in a CMS system folder */ ?>
    <details class="akeeba-block--failure" id="outDirSystem" style="display: none">
        <summary><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_HEAD_OUTDIR_INVALID'); ?></summary>
        <p>
            <?php echo \Joomla\CMS\Language\Text::sprintf('COM_AKEEBA_CPANEL_LBL_OUTDIR_LISTABLE', realpath($this->getModel()->getOutputDirectory())); ?>
        </p>
        <p>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_LBL_OUTDIR_ISSYSTEM'); ?>
        </p>
        <p>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_LBL_OUTDIR_ISSYSTEM_FIX'); ?>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_LBL_OUTDIR_DELETEORBEHACKED'); ?>
        </p>
    </details>

    <?php /* Output directory can be listed over the web */ ?>
    <details class="akeeba-block--<?php echo $this->hasOutputDirectorySecurityFiles ? 'failure' : 'warning'; ?>" id="insecureOutputDirectory" style="display: none">
        <summary>
            <?php if($this->hasOutputDirectorySecurityFiles): ?>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_HEAD_OUTDIR_UNFIXABLE'); ?>
            <?php else: ?>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_HEAD_OUTDIR_INSECURE'); ?>
            <?php endif; ?>
        </summary>
        <p>
            <?php echo \Joomla\CMS\Language\Text::sprintf('COM_AKEEBA_CPANEL_LBL_OUTDIR_LISTABLE', realpath($this->getModel()->getOutputDirectory())); ?>
        </p>
        <?php if(!$this->hasOutputDirectorySecurityFiles): ?>
        <p>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_LBL_OUTDIR_CLICKTHEBUTTON'); ?>
        </p>
        <p>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_LBL_OUTDIR_FIX_SECURITYFILES'); ?>
        </p>

        <form action="index.php" method="POST" class="akeeba-form--inline">
            <input type="hidden" name="option" value="com_akeeba">
            <input type="hidden" name="view" value="ControlPanel">
            <input type="hidden" name="task" value="fixOutputDirectory">
            <input type="hidden" name="<?php echo $this->container->platform->getToken(true); ?>" value="1">

            <button type="submit" class="akeeba-btn--block--green">
                <span class="akion-hammer"></span>
                <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_BTN_FIXSECURITY'); ?>
            </button>
        </form>
        <?php else: ?>
        <p>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_LBL_OUTDIR_TRASHHOST'); ?>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_LBL_OUTDIR_DELETEORBEHACKED'); ?>
        </p>
        <?php endif; ?>
    </details>

    <?php /* Output directory cannot be listed over the web but I can download files */ ?>
    <details class="akeeba-block--warning" id="missingRandomFromFilename" style="display: none">
        <summary>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_HEAD_OUTDIR_INSECURE_ALT'); ?>
        </summary>
        <p>
            <?php echo \Joomla\CMS\Language\Text::sprintf('COM_AKEEBA_CPANEL_LBL_OUTDIR_FILEREADABLE', realpath($this->getModel()->getOutputDirectory())); ?>
        </p>
        <p>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_LBL_OUTDIR_CLICKTHEBUTTON'); ?>
        </p>
        <p>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_LBL_OUTDIR_FIX_RANDOM'); ?>
        </p>

        <form action="index.php" method="POST" class="akeeba-form--inline">
            <input type="hidden" name="option" value="com_akeeba">
            <input type="hidden" name="view" value="ControlPanel">
            <input type="hidden" name="task" value="addRandomToFilename">
            <input type="hidden" name="<?php echo $this->container->platform->getToken(true); ?>" value="1">

            <button type="submit" class="akeeba-btn--block--green">
                <span class="akion-hammer"></span>
                <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_BTN_FIXSECURITY'); ?>
            </button>
        </form>
    </details>

<?php endif; ?>

<?php /* mbstring warning */ ?>
<?php if ( ! ($this->checkMbstring)): ?>
    <div class="akeeba-block--warning">
        <?php echo \Joomla\CMS\Language\Text::sprintf('COM_AKEEBA_CPANL_ERR_MBSTRING', PHP_VERSION); ?>
    </div>
<?php endif; ?>

<?php /* Front-end backup secret word reminder */ ?>
<?php if ( ! (empty($this->frontEndSecretWordIssue))): ?>
    <details class="akeeba-block--failure">
        <summary><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_ERR_FESECRETWORD_HEADER'); ?></summary>
        <p><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_ERR_FESECRETWORD_INTRO'); ?></p>
        <p><?php echo $this->frontEndSecretWordIssue; ?></p>
        <p>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_ERR_FESECRETWORD_WHATTODO_JOOMLA'); ?>
            <?php echo \Joomla\CMS\Language\Text::sprintf('COM_AKEEBA_CPANEL_ERR_FESECRETWORD_WHATTODO_COMMON', $this->newSecretWord); ?>
        </p>
        <p>
            <a class="akeeba-btn--green akeeba-btn--big"
               href="index.php?option=com_akeeba&view=ControlPanel&task=resetSecretWord&<?php echo $this->container->platform->getToken(true); ?>=1">
                <span class="akion-refresh"></span>
                <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_BTN_FESECRETWORD_RESET'); ?>
            </a>
        </p>
    </details>
<?php endif; ?>

<?php /* Wrong media directory permissions */ ?>
<?php if ( ! ($this->areMediaPermissionsFixed)): ?>
    <details id="notfixedperms" class="akeeba-block--failure">
        <summary><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CONTROLPANEL_WARN_WARNING'); ?></summary>
        <p><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CONTROLPANEL_WARN_PERMS_L1'); ?></p>
        <p><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CONTROLPANEL_WARN_PERMS_L2'); ?></p>
        <ol>
            <li><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CONTROLPANEL_WARN_PERMS_L3A'); ?></li>
            <li><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CONTROLPANEL_WARN_PERMS_L3B'); ?></li>
        </ol>
        <p><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CONTROLPANEL_WARN_PERMS_L4'); ?></p>
    </details>
<?php endif; ?>

<?php /* You need to enter your Download ID */ ?>
<?php if($this->needsDownloadID): ?>
    <details class="akeeba-block--warning">
        <summary>
            <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_MSG_MUSTENTERDLID'); ?>
        </summary>
        <p>
            <?php echo \Joomla\CMS\Language\Text::sprintf('COM_AKEEBA_LBL_CPANEL_NEEDSDLID','https://www.akeeba.com/download/official/add-on-dlid.html'); ?>
        </p>
        <form name="dlidform" action="index.php" method="post" class="akeeba-form--inline">
            <input type="hidden" name="option" value="com_akeeba" />
            <input type="hidden" name="view" value="ControlPanel" />
            <input type="hidden" name="task" value="applydlid" />
            <input type="hidden" name="<?php echo $this->container->platform->getToken(true); ?>" value="1" />
            <div class="akeeba-form-group">
                <label for="dlid"><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_MSG_PASTEDLID'); ?></label>
                <input type="text" name="dlid" placeholder="<?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CONFIG_DOWNLOADID_LABEL'); ?>"
                       class="akeeba-input--wide">

                <button type="submit" class="akeeba-btn--green">
                    <span class="akion-checkmark-round"></span>
                    <?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_MSG_APPLYDLID'); ?>
                </button>
            </div>
        </form>
    </details>
<?php endif; ?>

<?php /* You have CORE; you need to upgrade, not just enter a Download ID */ ?>
<?php if($this->coreWarningForDownloadID): ?>
    <div class="akeeba-block--warning">
        <?php echo \Joomla\CMS\Language\Text::sprintf('COM_AKEEBA_LBL_CPANEL_NEEDSUPGRADE','http://akee.ba/abcoretopro'); ?>
    </div>
<?php endif; ?>

<?php /* Warn about CloudFlare Rocket Loader */ ?>
<details class="akeeba-block--failure" style="display: none;" id="cloudFlareWarn">
    <summary><?php echo \Joomla\CMS\Language\Text::_('COM_AKEEBA_CPANEL_MSG_CLOUDFLARE_WARN'); ?></summary>
    <p><?php echo \Joomla\CMS\Language\Text::sprintf('COM_AKEEBA_CPANEL_MSG_CLOUDFLARE_WARN1', 'https://support.cloudflare.com/hc/en-us/articles/200169456-Why-is-JavaScript-or-jQuery-not-working-on-my-site-'); ?></p>
</details>
<?php
/**
 * DO NOT USE INLINE JAVASCRIPT FOR THIS SCRIPT. DO NOT REMOVE THE ATTRIBUTES.
 *
 * This is a specialised test which looks for CloudFlare's completely broken RocketLoader feature and warns the user
 * about it.
 */
?>
<script type="text/javascript" data-cfasync="true">
    var test = localStorage.getItem('<?php echo $cloudFlareTestFile?>');
    if (test)
    {
        document.getElementById("cloudFlareWarn").style.display = "block";
    }
</script>
