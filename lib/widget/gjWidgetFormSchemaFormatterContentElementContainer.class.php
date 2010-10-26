<?php

class gjWidgetFormSchemaFormatterContentElementContainer extends sfWidgetFormSchemaFormatterList
{
  protected
    $rowFormat       = "<li class=\"content_element_item\">\n  %error%\n  %field%%help%\n%hidden_fields%</li>\n",
    $errorRowFormat  = "<li>\n%errors%</li>\n",
    $helpFormat      = '<br />%help%',
    $decoratorFormat = "<ol class=\"positions_container inner\">\n  %content%</ol>";

  public function getDecoratorFormat()
  {
    return "\n<!-- START ".__FILE__." -->\n".$this->decoratorFormat."\n<!-- END ".__FILE__." -->\n";
  }
}
