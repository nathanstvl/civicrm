<?php /* Smarty version 2.6.30, created on 2018-03-16 16:20:18
         compiled from string:%7Bstrip%7D%7Bif+%24idHash%7D%5Bcase+%23%7B%24idHash%7D%5D%7B/if%7D+%7B%24activitySubject%7D%0A%7B/strip%7D */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:{strip}{if $idHash}[case #{$idHash}]{/if} {$activitySubject}
{/strip}', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['idHash']): ?><?php echo '[case #'; ?><?php echo $this->_tpl_vars['idHash']; ?><?php echo ']'; ?><?php endif; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['activitySubject']; ?><?php echo ''; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>