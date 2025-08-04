<?php

class __Mustache_80d15f5226d3523f52520290e0343ca9 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="eb_setup_popup_content_wrap" style="display: none;">
';
        $buffer .= $indent . '    <div class="eb_setup_popup_content">
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <p><i class="fa-solid fa-triangle-exclamation eb_setup_pupup_warning_icon"></i></p>
';
        $buffer .= $indent . '            <p class="eb_setup_h2">';
        $value = $this->resolveValue($context->find('closequest'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            <div class="eb_setup_user_sync_btn_wrap">
';
        $buffer .= $indent . '                <a href="';
        $value = $this->resolveValue($context->find('wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="eb_setup_sec_btn">';
        $value = $this->resolveValue($context->find('yes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                <button class="eb_setup_sec_btn eb_setup_do_not_close">';
        $value = $this->resolveValue($context->find('no'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <fieldset>
';
        $buffer .= $indent . '                <legend>';
        $value = $this->resolveValue($context->find('note'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</legend>
';
        $buffer .= $indent . '                <div>';
        $value = $this->resolveValue($context->find('closenote'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '            </fieldset>
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
