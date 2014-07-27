<?php

class KokenYandexMetrika extends KokenPlugin {

  function __construct()
  {
    $this->require_setup = true;
    $this->register_hook('before_closing_head', 'render');
  }

  function render()
  {

    echo <<<OUT

{$this->data->html_code}

OUT;
  }
}