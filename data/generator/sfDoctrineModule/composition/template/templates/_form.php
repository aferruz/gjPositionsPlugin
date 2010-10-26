[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]

<div id="container">
  <div class="body-container-left">

    <h3><?php echo $this->params['model_class']; ?></h3>
      <div class="sf_admin_form">
        [?php echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>') ?]
          [?php echo $form->renderHiddenFields(false) ?]

          [?php if ($form->hasGlobalErrors()): ?]
            [?php echo $form->renderGlobalErrors() ?]
          [?php endif; ?]

          [?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?]
            [?php include_partial('<?php echo $this->getModuleName() ?>/form_fieldset', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?]
          [?php endforeach; ?]

          [?php include_partial('<?php echo $this->getModuleName() ?>/form_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
        </form>
      </div>

  </div>

  <div id="tabs" class="body-container-right">
    <ul>
      <li><a href="#fragment-1"><span>Design Elements</span></a></li>
      <li><a href="#fragment-2"><span>Contents</span></a></li>
    </ul>
    <div id="fragment-1">

      <h3>Design Elements</h3>
      <div class="sf_admin_form auto-scroll-y" id="accordion1">
        [?php include_component('<?php echo $this->getModuleName() ?>', 'designelements_list', array('canvas' => $gj_page)); ?]
      </div>

    </div>
    <div id="fragment-2">

      <h3>Contents</h3>
      <div class="sf_admin_form" id="accordion2">
        [?php include_component('<?php echo $this->getModuleName() ?>', 'contentelements_list', array('page' => $gj_page)); ?]
      </div>

    </div>
  </div>
  <div id="clearing"></div>
</div>
