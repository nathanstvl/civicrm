<?php /* Smarty version 2.6.30, created on 2018-03-16 16:20:43
         compiled from CRM%5CEvent%5CPage%5CTab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM\\Event\\Page\\Tab.tpl', 1, false),array('block', 'ts', 'CRM\\Event\\Page\\Tab.tpl', 35, false),array('function', 'crmURL', 'CRM\\Event\\Page\\Tab.tpl', 31, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 8): ?>     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/Participant.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['action'] == 4): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/ParticipantView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?><?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/view/participant",'q' => "reset=1&action=add&cid=".($this->_tpl_vars['contactId'])."&context=participant"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('newEventURL', ob_get_contents());ob_end_clean(); ?>
    <?php endif; ?>

    <div class="help">
        <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['displayName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This page lists all event registrations for %1 since inception.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php ob_start(); ?>class="action-item" href="<?php echo $this->_tpl_vars['newEventURL']; ?>
"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean(); ?>
        <?php if ($this->_tpl_vars['permission'] == 'edit'): ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['link'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <a %1>Add Event Registration</a> to register this contact for an event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
        <?php if ($this->_tpl_vars['accessContribution'] && $this->_tpl_vars['newCredit']): ?>
            <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/view/participant",'q' => "reset=1&action=add&cid=".($this->_tpl_vars['contactId'])."&context=participant&mode=live"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('newCreditURL', ob_get_contents());ob_end_clean(); ?>
            <?php ob_start(); ?>class="action-item" href="<?php echo $this->_tpl_vars['newCreditURL']; ?>
"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean(); ?>
            <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['link'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <a %1>Submit Credit Card Event Registration</a> to process a new New Registration on behalf of the participant using their credit card.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
        </p>
    </div>
    <?php if ($this->_tpl_vars['action'] == 16 && $this->_tpl_vars['permission'] == 'edit'): ?>
       <div class="action-link">
           <a accesskey="N" href="<?php echo $this->_tpl_vars['newEventURL']; ?>
" class="button"><span><i class="crm-i fa-plus-circle"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Event Registration<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
            <?php if ($this->_tpl_vars['accessContribution'] && $this->_tpl_vars['newCredit']): ?>
                <a accesskey="N" href="<?php echo $this->_tpl_vars['newCreditURL']; ?>
" class="button"><span><i class="crm-i fa-credit-card"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit Credit Card Event Registration<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
            <?php endif; ?>
            <br/ ><br/ >
       </div>
   <?php endif; ?>

    <?php if ($this->_tpl_vars['rows']): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/Selector.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
       <div class="messages status no-popup">
           <table class="form-layout">
             <tr><div class="icon inform-icon"></div>
                   <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No event registrations have been recorded for this contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
             </tr>
           </table>
       </div>
    <?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>