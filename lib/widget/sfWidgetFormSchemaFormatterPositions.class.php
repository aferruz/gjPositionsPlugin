<?php

class sfWidgetFormSchemaFormatterPositions extends sfWidgetFormSchemaFormatterList
{
  protected
    $rowFormat       = "<li>\n  %error%\n  %field%%help%\n%hidden_fields%</li>\n",
    $errorRowFormat  = "<li>\n%errors%</li>\n",
    $helpFormat      = '<br />%help%',
    $decoratorFormat = "<ul id=\"sortable1\" class=\"droptrue\">\n  %content%</ul>";

  public function getDecoratorFormat()
  {
    return "\n<!-- START ".__FILE__." -->\n".$this->decoratorFormat."\n<!-- END ".__FILE__." -->\n";
  }
}
