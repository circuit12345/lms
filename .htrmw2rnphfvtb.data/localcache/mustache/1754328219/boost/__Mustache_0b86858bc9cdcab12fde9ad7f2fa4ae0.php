<?php

class __Mustache_0b86858bc9cdcab12fde9ad7f2fa4ae0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul class="eb-setup-steps">
';
        $value = $context->find('steps');
        $buffer .= $this->section60678be739ee72e56a7333e77dc8d398($context, $indent, $value);
        $buffer .= $indent . '</ul>
';

        return $buffer;
    }

    private function sectionBb398907d9cae1b139bf81ae4def1bdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'eb-setup-step-completed';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'eb-setup-step-completed';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c0fa264ca23776f9814535be98b557e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'eb-setup-step-active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'eb-setup-step-active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ee08d18b92e7eb3cff0444d96aa9cc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="eb-setup-step eb-setup-step-{{key}} {{#iscompleted}}eb-setup-step-completed{{/iscompleted}}{{#isactive}}eb-setup-step-active{{/isactive}}-wrap">
                {{{htmlicon}}}
                <span class="eb-setup-steps-title {{#iscompleted}}eb-setup-step-completed{{/iscompleted}}" data-step="{{key}}">
                    {{name}}
                </span>
            </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="eb-setup-step eb-setup-step-';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $value = $context->find('iscompleted');
                $buffer .= $this->sectionBb398907d9cae1b139bf81ae4def1bdd($context, $indent, $value);
                $value = $context->find('isactive');
                $buffer .= $this->section3c0fa264ca23776f9814535be98b557e($context, $indent, $value);
                $buffer .= '-wrap">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('htmlicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                <span class="eb-setup-steps-title ';
                $value = $context->find('iscompleted');
                $buffer .= $this->sectionBb398907d9cae1b139bf81ae4def1bdd($context, $indent, $value);
                $buffer .= '" data-step="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60678be739ee72e56a7333e77dc8d398(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#toplevel}}
            <li class="eb-setup-step eb-setup-step-{{key}} {{#iscompleted}}eb-setup-step-completed{{/iscompleted}}{{#isactive}}eb-setup-step-active{{/isactive}}-wrap">
                {{{htmlicon}}}
                <span class="eb-setup-steps-title {{#iscompleted}}eb-setup-step-completed{{/iscompleted}}" data-step="{{key}}">
                    {{name}}
                </span>
            </li>
        {{/toplevel}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('toplevel');
                $buffer .= $this->section6ee08d18b92e7eb3cff0444d96aa9cc5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
