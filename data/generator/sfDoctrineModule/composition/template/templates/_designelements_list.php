<!-- START [?php echo __FILE__; ?] -->
  <ol id="design_element_source_list" class="interaction">
[?php foreach($elements as $name => $config): ?]
    <li id="[?php echo $name; ?]">
[?php include_component('<?php echo $this->getModuleName() ?>', 'designelements_show', array('name' => $name, 'config' => $config, 'collapsed' => true)); ?]
    </li>
[?php endforeach; ?]
  </ol>
<!-- END [?php echo __FILE__; ?] -->
