<?php

class __Mustache_f7f493346ea2b98709f1eb97bd90dba5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class=\'eb-setup-content-area\'>
';
        $buffer .= $indent . '    <!-- Sidebar -->
';
        $buffer .= $indent . '    <div class=\'eb-setup-sidebar\'>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('sidebar'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <!-- Content -->
';
        $buffer .= $indent . '    <div class="eb-setup-content ';
        $value = $this->resolveValue($context->find('contentclass'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
