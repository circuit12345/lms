<?php

class __Mustache_872cb2c9cec58ad9fd1b9df301796b75 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="jobboard-grid">
';
        $value = $context->find('jobs');
        $buffer .= $this->sectionF163b4f5c398ed89fae358be6c161770($context, $indent, $value);
        $value = $context->find('jobs');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="alert alert-info">';
            $value = $context->find('str');
            $buffer .= $this->section09dc0bda6e7e0c72da30d727a459c75d($context, $indent, $value);
            $buffer .= '</div>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF163b4f5c398ed89fae358be6c161770(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> local_jobboard/job_card }}
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('local_jobboard/job_card')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09dc0bda6e7e0c72da30d727a459c75d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nojobs, local_jobboard ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nojobs, local_jobboard ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
