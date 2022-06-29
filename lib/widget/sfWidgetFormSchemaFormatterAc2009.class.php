<?php

class sfWidgetFormSchemaFormatterAc2009 extends sfWidgetFormSchemaFormatter
{
  protected $rowFormat = "<div class=\"form-row%row_class%\">
  %label% \n %field% \n %error%
  %help% %hidden_fields%\n</div>\n";
  protected $errorListFormatInARow = "  <ul class=\"form-error\">\n%errors%  </ul>\n";
  protected $errorRowFormatInARow = "    <li class=\"form-error-item\">%error%</li>\n";
  protected $decoratorFormat = "<div>\n  %content%</div>";

  public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
  {
    $row = parent::formatRow(
      $label,
      $field,
      $errors,
      $help,
      $hiddenFields
    );

    return strtr($row, array(
      '%row_class%' => (count($errors) > 0) ? ' form-row--error' : '',
    ));
  }
}
