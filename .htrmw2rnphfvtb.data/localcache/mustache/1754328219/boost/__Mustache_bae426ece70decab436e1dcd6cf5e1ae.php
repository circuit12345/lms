<?php

class __Mustache_bae426ece70decab436e1dcd6cf5e1ae extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<footer class=\'eb-setup-wizard-footer\'>
';
        $buffer .= $indent . '    <div class=\'eb-setup-footer-copyright\'>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('footertext'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class=\'eb-setup-footer-button\'>
';
        $buffer .= $indent . '        <a href=\'https://edwiser.org/contact-us/\' target=\'_blank\'>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('contactustext'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div>';
        $value = $this->resolveValue($context->find('closesetup'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
