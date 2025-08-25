<?php

class __Mustache_690473feef8c05641053c87c9b4dfc17 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr data-appid="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '  <td>';
        $value = $this->resolveValue($context->find('jobtitle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</td>
';
        $buffer .= $indent . '  <td>';
        $value = $this->resolveValue($context->find('applicant'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</td>
';
        $buffer .= $indent . '  <td><span class="chip chip--status">';
        $value = $this->resolveValue($context->find('status'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span></td>
';
        $buffer .= $indent . '  <td>';
        $value = $this->resolveValue($context->find('submitted'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</td>
';
        $buffer .= $indent . '  <td><a class="btn btn-sm btn-link" href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section49f7520caa373eb618e11897e01b5e46($context, $indent, $value);
        $buffer .= '</a></td>
';
        $buffer .= $indent . '</tr>
';

        return $buffer;
    }

    private function section49f7520caa373eb618e11897e01b5e46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' view, local_jobboard ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' view, local_jobboard ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
