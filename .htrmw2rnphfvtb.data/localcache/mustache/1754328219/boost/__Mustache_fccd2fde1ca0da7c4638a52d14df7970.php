<?php

class __Mustache_fccd2fde1ca0da7c4638a52d14df7970 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="eb_setup_web_service es-w-80">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <p>';
        $value = $this->resolveValue($context->find('setupwebservicenote1'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '        <div class="eb_setup_p_wrap">
';
        $buffer .= $indent . '            <div class="eb_setup_h2">
';
        $buffer .= $indent . '                <i class="fa-solid fa-circle-chevron-right"></i>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('setupwebserviceh1'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="eb_setup_separator">
';
        $buffer .= $indent . '                <div class="eb_setup_hr"><hr></div>
';
        $buffer .= $indent . '                <div><span>';
        $value = $this->resolveValue($context->find('or'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span></div>
';
        $buffer .= $indent . '                <div class="eb_setup_hr"><hr></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="eb_setup_h2">
';
        $buffer .= $indent . '                <i class="fa-solid fa-circle-chevron-right"></i>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('setupwebserviceh2'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <div class="eb_setup_conn_url_inp_wrap">
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                    <label class="eb_setup_h2">';
        $value = $this->resolveValue($context->find('sumwebservices'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <i class="fa-solid fa-info eb-tooltip es-info-icon">
';
        $buffer .= $indent . '                        <span class=\'eb-tooltiptext\'>';
        $value = $this->resolveValue($context->find('webservicetip'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </i>
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '                <select name="eb_setup_web_service_list" class="eb_setup_inp eb_setup_web_service_list">
';
        $value = $context->find('existingservices');
        $buffer .= $this->section72f4a79179d3ffb7c043afa880b849ee($context, $indent, $value);
        $buffer .= $indent . '                </select>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="eb_setup_conn_url_inp_wrap eb_setup_web_service_name_wrap">
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                    <label class="eb_setup_h2">';
        $value = $this->resolveValue($context->find('newserviceinplbl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <i class="fa-solid fa-info eb-tooltip es-info-icon">
';
        $buffer .= $indent . '                        <span class=\'eb-tooltiptext\'>';
        $value = $this->resolveValue($context->find('namewebservicetip'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </i>
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '                <input class="eb_setup_inp eb_setup_web_service_name" id="eb_setup_web_service_name" name="eb_setup_web_service_name" type="text">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="eb_setup_btn_wrap">
';
        $buffer .= $indent . '                <button class="eb_setup_btn eb_setup_web_service_btn eb_setup_save_and_continue ';
        $value = $this->resolveValue($context->find('disable'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                        data-step=\'';
        $value = $this->resolveValue($context->find('step'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'
';
        $buffer .= $indent . '                        data-next-step=\'';
        $value = $this->resolveValue($context->find('nextstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'
';
        $buffer .= $indent . '                        data-is-next-sub-step=\'';
        $value = $this->resolveValue($context->find('isnextsubstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\' ';
        $value = $this->resolveValue($context->find('disable'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('setupcontinuebtn'), $context);
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

    private function section72f4a79179d3ffb7c043afa880b849ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <option value="{{key}}" {{selected}}>{{value}}</option>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <option value="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $this->resolveValue($context->find('selected'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
