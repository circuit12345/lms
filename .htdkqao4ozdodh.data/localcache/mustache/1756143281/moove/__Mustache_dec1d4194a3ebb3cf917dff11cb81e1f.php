<?php

class __Mustache_dec1d4194a3ebb3cf917dff11cb81e1f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="job-view">
';
        $buffer .= $indent . '  <header class="job-view__header">
';
        $buffer .= $indent . '    <h2>';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h2>
';
        $buffer .= $indent . '    <div class="job-view__chips">
';
        $buffer .= $indent . '      ';
        $value = $context->find('tags');
        $buffer .= $this->section8379c1466b170ada8982cd4b834200db($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '      <span class="chip chip--status">';
        $value = $this->resolveValue($context->find('status_label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="job-view__meta">
';
        $buffer .= $indent . '      ';
        $value = $this->resolveValue($context->find('location'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' ';
        $value = $context->find('jobtype');
        $buffer .= $this->section6a792e730c90aef2ed82421f868a10ca($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('salaryrange');
        $buffer .= $this->section237ecc8956dd14d4903f6c061960f62c($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('deadline');
        $buffer .= $this->section3079003459197a1b82f1baf6002dddbf($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </header>
';
        $buffer .= $indent . '
';
        $value = $context->find('summary');
        $buffer .= $this->section14cad0ae4541cb8f026032b4896e9b8c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <section class="job-view__description">
';
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->section56174199df0e4bfa7a619caffb896348($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '    <div class="content">';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '  </section>
';
        $buffer .= $indent . '
';
        $value = $context->find('canapply');
        $buffer .= $this->sectionC11cc188ffe7fc8a353e08da590dae21($context, $indent, $value);
        $buffer .= $indent . '</div>
';

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

    private function section6a792e730c90aef2ed82421f868a10ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '· {{jobtype}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '· ';
                $value = $this->resolveValue($context->find('jobtype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section237ecc8956dd14d4903f6c061960f62c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '· {{salaryrange}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '· ';
                $value = $this->resolveValue($context->find('salaryrange'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3079003459197a1b82f1baf6002dddbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '· {{deadline}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '· ';
                $value = $this->resolveValue($context->find('deadline'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF19d69c5a4708471abf2554253db9efb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' summary, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' summary, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14cad0ae4541cb8f026032b4896e9b8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <section class="job-view__summary">
      <h3>{{#str}} summary, moodle {{/str}}</h3>
      <div class="content">{{{summary}}}</div>
    </section>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <section class="job-view__summary">
';
                $buffer .= $indent . '      <h3>';
                $value = $context->find('str');
                $buffer .= $this->sectionF19d69c5a4708471abf2554253db9efb($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '      <div class="content">';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56174199df0e4bfa7a619caffb896348(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' description, local_jobboard ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' description, local_jobboard ';
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

    private function sectionC11cc188ffe7fc8a353e08da590dae21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <section id="apply" class="job-view__apply">
    <a class="btn btn-primary" href="{{apply_url}}">{{#str}} apply, local_jobboard {{/str}}</a>
  </section>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <section id="apply" class="job-view__apply">
';
                $buffer .= $indent . '    <a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('apply_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section52a00c52ab0623f1e5723e48e414e190($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '  </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
