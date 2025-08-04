<?php

class __Mustache_9835865aa53ca18b047a0f0134c326bf extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>
';
        $buffer .= $indent . '<html>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->find('pagetitle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</title>
';
        $buffer .= $indent . '    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width" />
';
        $buffer .= $indent . '    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<body class="wc-setup wp-core-ui ">
';
        $buffer .= $indent . '    <header class="eb-setup-wizard-header">
';
        $buffer .= $indent . '        <div class="eb-setup-header-logo">
';
        $buffer .= $indent . '            <div class="eb-setup-header-logo-img-wrap">
';
        $buffer .= $indent . '                <img src="';
        $value = $this->resolveValue($context->find('logosrc'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" />
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="eb-setup-header-title-wrap">
';
        $buffer .= $indent . '            <div class="eb-setup-header-title">';
        $value = $this->resolveValue($context->find('headertitle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '            <div class=\'eb-setup-close-icon\'> <i class="fa-solid fa-xmark"></i> </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </header>';

        return $buffer;
    }
}
