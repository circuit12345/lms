<?php

class __Mustache_b6ff33b06d569af776538addedb61609 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="job-card" data-jobid="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '  <div class="job-card__header">
';
        $buffer .= $indent . '    <span class="chip chip--';
        $value = $this->resolveValue($context->find('status_class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('status_label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '    ';
        $value = $context->find('tags');
        $buffer .= $this->section8379c1466b170ada8982cd4b834200db($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <h3 class="job-card__title">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h3>
';
        $buffer .= $indent . '  <p class="job-card__meta">';
        $value = $this->resolveValue($context->find('location'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' · ';
        $value = $this->resolveValue($context->find('jobtype'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' · ';
        $value = $this->resolveValue($context->find('posted_relative'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>
';
        $buffer .= $indent . '  <p class="job-card__summary">';
        $value = $this->resolveValue($context->find('summary'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '  <div class="job-card__footer">
';
        $buffer .= $indent . '    <a class="btn btn-primary" href="';
        $value = $this->resolveValue($context->find('view_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section49f7520caa373eb618e11897e01b5e46($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    ';
        $value = $context->find('canapply');
        $buffer .= $this->section0efc33a9690174d6d477652cfeb7fc00($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section8379c1466b170ada8982cd4b834200db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="chip chip--tag">{{.}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="chip chip--tag">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
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

    private function section52a00c52ab0623f1e5723e48e414e190(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' apply, local_jobboard ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' apply, local_jobboard ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0efc33a9690174d6d477652cfeb7fc00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-outline-secondary" href="{{view_url}}#apply">{{#str}} apply, local_jobboard {{/str}}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a class="btn btn-outline-secondary" href="';
                $value = $this->resolveValue($context->find('view_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '#apply">';
                $value = $context->find('str');
                $buffer .= $this->section52a00c52ab0623f1e5723e48e414e190($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
