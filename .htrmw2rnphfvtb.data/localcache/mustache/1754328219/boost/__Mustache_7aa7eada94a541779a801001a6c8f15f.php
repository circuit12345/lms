<?php

class __Mustache_7aa7eada94a541779a801001a6c8f15f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="eb_plugin_configuration es-w-80">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <p>';
        $value = $this->resolveValue($context->find('setupmdlpluginnote1'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '        <div class="eb_plugin_configuration_checks">
';
        $value = $context->find('checks');
        $buffer .= $this->section72fbc1c95599d1d85672439cce284d67($context, $indent, $value);
        $buffer .= $indent . '            <div class="eb_setup_settings_success_msg">
';
        $buffer .= $indent . '                <i class="fa-solid fa-circle-check"></i>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('setupmdlsettingssuccessmsg'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div style="';
        $value = $this->resolveValue($context->find('displaynote'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            <span class="eb_enable_plugin_settings_label">';
        $value = $this->resolveValue($context->find('setupmdlpluginnote2'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            <button
';
        $buffer .= $indent . '                class="eb_setup_btn eb_enable_plugin_settings"
';
        $buffer .= $indent . '                data-step=\'';
        $value = $this->resolveValue($context->find('step'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'
';
        $buffer .= $indent . '                data-next-step=\'';
        $value = $this->resolveValue($context->find('nextstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'
';
        $buffer .= $indent . '                data-is-next-sub-step=\'';
        $value = $this->resolveValue($context->find('isnextsubstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('setupenablesettings'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="eb_setup_btn_wrap">
';
        $buffer .= $indent . '            <button
';
        $buffer .= $indent . '                class="eb_setup_btn eb_setup_save_and_continue"
';
        $buffer .= $indent . '                style="';
        $value = $this->resolveValue($context->find('displaycontinue'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                data-step=\'';
        $value = $this->resolveValue($context->find('step'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'
';
        $buffer .= $indent . '                data-next-step=\'';
        $value = $this->resolveValue($context->find('nextstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'
';
        $buffer .= $indent . '                data-is-next-sub-step=\'';
        $value = $this->resolveValue($context->find('isnextsubstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('setupcontinuebtn'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section72fbc1c95599d1d85672439cce284d67(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="eb_setup_h3 es-p-b-10">
                <i class="fa-solid fa-circle-check {{icon_class}}" style="{{style}}"></i>
                {{{check_text}}}
                <i class="fa-solid fa-info eb-tooltip es-info-icon">
                    <span class=\'eb-tooltiptext\'>{{{tooltip_text}}}</span>
                </i>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="eb_setup_h3 es-p-b-10">
';
                $buffer .= $indent . '                <i class="fa-solid fa-circle-check ';
                $value = $this->resolveValue($context->find('icon_class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="';
                $value = $this->resolveValue($context->find('style'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('check_text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                <i class="fa-solid fa-info eb-tooltip es-info-icon">
';
                $buffer .= $indent . '                    <span class=\'eb-tooltiptext\'>';
                $value = $this->resolveValue($context->find('tooltip_text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </i>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
