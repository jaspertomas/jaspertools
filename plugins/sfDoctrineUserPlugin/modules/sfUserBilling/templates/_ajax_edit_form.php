<?php
// auto-generated by sfDoctrineAdmin
// date: 2008/03/28 14:59:23
?>
<?php use_helper('Javascript', 'Form') ?>
<?php echo form_remote_tag(array(
    'complete'   => "$('overlay', 'lightbox').invoke('hide')",
    'update'   => "sfUserBilling",
    'url'      => 'sfUserBilling/ajaxSave',
), array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($sf_user_billing, 'getid') ?>
<?php echo input_hidden_tag('sf_user_billing[User]', $sf_user_billing['user_id']) ?>

<fieldset id="sf_fieldset_details" class="">
<h2><?php echo __('Details') ?></h2>

<div class="form-row">
  <?php echo label_for('sf_user_billing[rank]', __($labels['sf_user_billing{rank}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{rank}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{rank}')): ?>
    <?php echo form_error('sf_user_billing{rank}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'rank',
  ),
), array (
  'size' => 7,
  'control_name' => 'sf_user_billing[rank]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[name]', __($labels['sf_user_billing{name}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{name}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{name}')): ?>
    <?php echo form_error('sf_user_billing{name}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'name',
  ),
), array (
  'size' => 48,
  'control_name' => 'sf_user_billing[name]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[address1]', __($labels['sf_user_billing{address1}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{address1}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{address1}')): ?>
    <?php echo form_error('sf_user_billing{address1}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'address1',
  ),
), array (
  'size' => 48,
  'control_name' => 'sf_user_billing[address1]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[address2]', __($labels['sf_user_billing{address2}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{address2}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{address2}')): ?>
    <?php echo form_error('sf_user_billing{address2}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'address2',
  ),
), array (
  'size' => 48,
  'control_name' => 'sf_user_billing[address2]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[city]', __($labels['sf_user_billing{city}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{city}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{city}')): ?>
    <?php echo form_error('sf_user_billing{city}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'city',
  ),
), array (
  'size' => 32,
  'control_name' => 'sf_user_billing[city]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[state]', __($labels['sf_user_billing{state}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{state}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{state}')): ?>
    <?php echo form_error('sf_user_billing{state}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'state',
  ),
), array (
  'size' => 2,
  'control_name' => 'sf_user_billing[state]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[zip]', __($labels['sf_user_billing{zip}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{zip}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{zip}')): ?>
    <?php echo form_error('sf_user_billing{zip}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'zip',
  ),
), array (
  'size' => 20,
  'control_name' => 'sf_user_billing[zip]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[method]', __($labels['sf_user_billing{method}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{method}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{method}')): ?>
    <?php echo form_error('sf_user_billing{method}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_enum_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'method',
  ),
), array (
  'enumValues' => 
  array (
    0 => 'CREDIT',
    1 => 'VIRTUAL_CHECK',
    2 => 'PAPER_CHECK',
  ),
  'control_name' => 'sf_user_billing[method]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[rejects]', __($labels['sf_user_billing{rejects}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{rejects}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{rejects}')): ?>
    <?php echo form_error('sf_user_billing{rejects}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'rejects',
  ),
), array (
  'size' => 7,
  'control_name' => 'sf_user_billing[rejects]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>
<fieldset id="sf_fieldset_credit_card" class="">
<h2><?php echo __('Credit Card') ?></h2>


<div class="form-row">
  <?php echo label_for('sf_user_billing[credit_card_number]', __($labels['sf_user_billing{credit_card_number}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{credit_card_number}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{credit_card_number}')): ?>
    <?php echo form_error('sf_user_billing{credit_card_number}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'credit_card_number',
  ),
), array (
  'size' => 20,
  'control_name' => 'sf_user_billing[credit_card_number]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[credit_card_exp_month]', __($labels['sf_user_billing{credit_card_exp_month}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{credit_card_exp_month}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{credit_card_exp_month}')): ?>
    <?php echo form_error('sf_user_billing{credit_card_exp_month}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'credit_card_exp_month',
  ),
), array (
  'size' => 7,
  'control_name' => 'sf_user_billing[credit_card_exp_month]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[credit_card_exp_year]', __($labels['sf_user_billing{credit_card_exp_year}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{credit_card_exp_year}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{credit_card_exp_year}')): ?>
    <?php echo form_error('sf_user_billing{credit_card_exp_year}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'credit_card_exp_year',
  ),
), array (
  'size' => 7,
  'control_name' => 'sf_user_billing[credit_card_exp_year]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[credit_card_cvm]', __($labels['sf_user_billing{credit_card_cvm}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{credit_card_cvm}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{credit_card_cvm}')): ?>
    <?php echo form_error('sf_user_billing{credit_card_cvm}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'credit_card_cvm',
  ),
), array (
  'size' => 7,
  'control_name' => 'sf_user_billing[credit_card_cvm]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>
<fieldset id="sf_fieldset_check" class="">
<h2><?php echo __('Check') ?></h2>


<div class="form-row">
  <?php echo label_for('sf_user_billing[check_type]', __($labels['sf_user_billing{check_type}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{check_type}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{check_type}')): ?>
    <?php echo form_error('sf_user_billing{check_type}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_enum_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'check_type',
  ),
), array (
  'enumValues' => 
  array (
    0 => 'Personal',
    1 => 'Business',
  ),
  'control_name' => 'sf_user_billing[check_type]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[check_number]', __($labels['sf_user_billing{check_number}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{check_number}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{check_number}')): ?>
    <?php echo form_error('sf_user_billing{check_number}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'check_number',
  ),
), array (
  'size' => 20,
  'control_name' => 'sf_user_billing[check_number]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[check_routing_number]', __($labels['sf_user_billing{check_routing_number}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{check_routing_number}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{check_routing_number}')): ?>
    <?php echo form_error('sf_user_billing{check_routing_number}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'check_routing_number',
  ),
), array (
  'size' => 20,
  'control_name' => 'sf_user_billing[check_routing_number]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[check_account_number]', __($labels['sf_user_billing{check_account_number}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{check_account_number}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{check_account_number}')): ?>
    <?php echo form_error('sf_user_billing{check_account_number}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'check_account_number',
  ),
), array (
  'size' => 20,
  'control_name' => 'sf_user_billing[check_account_number]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[check_bank_name]', __($labels['sf_user_billing{check_bank_name}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{check_bank_name}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{check_bank_name}')): ?>
    <?php echo form_error('sf_user_billing{check_bank_name}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'check_bank_name',
  ),
), array (
  'size' => 35,
  'control_name' => 'sf_user_billing[check_bank_name]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[check_branch_state]', __($labels['sf_user_billing{check_branch_state}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{check_branch_state}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{check_branch_state}')): ?>
    <?php echo form_error('sf_user_billing{check_branch_state}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'check_branch_state',
  ),
), array (
  'size' => 20,
  'control_name' => 'sf_user_billing[check_branch_state]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[dl_number]', __($labels['sf_user_billing{dl_number}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{dl_number}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{dl_number}')): ?>
    <?php echo form_error('sf_user_billing{dl_number}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'dl_number',
  ),
), array (
  'size' => 20,
  'control_name' => 'sf_user_billing[dl_number]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[dl_state]', __($labels['sf_user_billing{dl_state}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{dl_state}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{dl_state}')): ?>
    <?php echo form_error('sf_user_billing{dl_state}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($sf_user_billing, array (
  0 => 'get',
  1 => 
  array (
    0 => 'dl_state',
  ),
), array (
  'size' => 20,
  'control_name' => 'sf_user_billing[dl_state]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>
<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('sf_user_billing[updated_at]', __($labels['sf_user_billing{updated_at}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{updated_at}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{updated_at}')): ?>
    <?php echo form_error('sf_user_billing{updated_at}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = ($sf_user_billing->updated_at !== null && $sf_user_billing->updated_at !== '') ? format_date($sf_user_billing->updated_at, "MM/dd/yy hh:mm a") : ''; echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[UpdatedBy]', __($labels['sf_user_billing{UpdatedBy}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{UpdatedBy}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{UpdatedBy}')): ?>
    <?php echo form_error('sf_user_billing{UpdatedBy}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = $sf_user_billing->UpdatedBy; echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[created_at]', __($labels['sf_user_billing{created_at}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{created_at}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{created_at}')): ?>
    <?php echo form_error('sf_user_billing{created_at}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = ($sf_user_billing->created_at !== null && $sf_user_billing->created_at !== '') ? format_date($sf_user_billing->created_at, "MM/dd/yy hh:mm a") : ''; echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_user_billing[CreatedBy]', __($labels['sf_user_billing{CreatedBy}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_user_billing{CreatedBy}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_user_billing{CreatedBy}')): ?>
    <?php echo form_error('sf_user_billing{CreatedBy}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = $sf_user_billing->CreatedBy; echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('ajax_edit_actions', array('sf_user_billing' => $sf_user_billing)) ?>

</form>
