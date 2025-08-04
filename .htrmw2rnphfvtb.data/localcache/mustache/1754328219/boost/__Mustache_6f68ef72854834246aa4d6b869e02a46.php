<?php

class __Mustache_6f68ef72854834246aa4d6b869e02a46 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form method="post">
';
        $buffer .= $indent . '    <input type="text" class="eb_pro_license_input" name="eb_license_key" placeholder="License key" value="';
        $value = $this->resolveValue($context->find('licensekey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" />
';
        $value = $context->find('isvalidlicense');
        $buffer .= $this->section3d6c15dd6861619f3259e7c3f0732862($context, $indent, $value);
        $value = $context->find('isvalidlicense');
        if (empty($value)) {
            
            $buffer .= $indent . '        <span class="eb_pro_license_not_active">';
            $value = $this->resolveValue($context->find('licensestatus'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</span>
';
            $buffer .= $indent . '        <input type="submit" name="eb_license_activate" class="eb_pro_license_btn" value="';
            $value = $this->resolveValue($context->find('activate'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" />
';
        }
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function section3d6c15dd6861619f3259e7c3f0732862(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="eb_pro_license_active">{{{ ebactive }}}</span>
        <input type="submit" name="eb_license_deactivate" class="eb_pro_license_btn" value="{{ deactivate }}" />
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="eb_pro_license_active">';
                $value = $this->resolveValue($context->find('ebactive'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        <input type="submit" name="eb_license_deactivate" class="eb_pro_license_btn" value="';
                $value = $this->resolveValue($context->find('deactivate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
