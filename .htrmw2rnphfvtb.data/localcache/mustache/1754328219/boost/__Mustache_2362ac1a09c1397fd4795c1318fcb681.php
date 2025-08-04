<?php

class __Mustache_2362ac1a09c1397fd4795c1318fcb681 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class=\'eb_setup_check_permalink es-w-80\'>
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <p class="">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('setuppermalinknote1'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '<b>';
        $value = $this->resolveValue($context->find('espostname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</b>
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            <p class="">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('setuppermalinkclick'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <a class="es_text_links" target="_blank" href="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('setuppermalinknote2'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            <div class="">';
        $value = $this->resolveValue($context->find('setuppermalinknote3'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <div class="eb_setup_btn_wrap">
';
        $buffer .= $indent . '                <a class="eb_setup_sec_btn" href="';
        $value = $this->resolveValue($context->find('prevurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('back'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '                <button
';
        $buffer .= $indent . '                    class="eb_setup_btn eb_setup_save_and_continue"
';
        $buffer .= $indent . '                    data-step=\'';
        $value = $this->resolveValue($context->find('step'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'
';
        $buffer .= $indent . '                    data-next-step=\'';
        $value = $this->resolveValue($context->find('nextstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'
';
        $buffer .= $indent . '                    data-is-next-sub-step=\'';
        $value = $this->resolveValue($context->find('isnextsubstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('confirmed'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
