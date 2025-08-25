<?php

class __Mustache_6f31d793eadf8ef71bafb1de4fd07f21 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '.job-view {
';
        $buffer .= $indent . '    max-width: 720px;
';
        $buffer .= $indent . '    margin: 2rem auto;
';
        $buffer .= $indent . '    background: #fff;
';
        $buffer .= $indent . '    border-radius: 14px;
';
        $buffer .= $indent . '    padding: 2.5rem 3rem;
';
        $buffer .= $indent . '    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.07);
';
        $buffer .= $indent . '    font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen,
';
        $buffer .= $indent . '        Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;
';
        $buffer .= $indent . '    color: #2c3e50;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-view__header h2 {
';
        $buffer .= $indent . '    font-weight: 700;
';
        $buffer .= $indent . '    font-size: 2.3rem;
';
        $buffer .= $indent . '    margin-bottom: 0.5rem;
';
        $buffer .= $indent . '    color: #1a202c;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-view__chips {
';
        $buffer .= $indent . '    margin-bottom: 1rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.chip {
';
        $buffer .= $indent . '    display: inline-block;
';
        $buffer .= $indent . '    padding: 0.25rem 0.8rem;
';
        $buffer .= $indent . '    font-size: 0.87rem;
';
        $buffer .= $indent . '    border-radius: 32px;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '    margin-right: 8px;
';
        $buffer .= $indent . '    color: white;
';
        $buffer .= $indent . '    user-select: none;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.chip--tag {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #38b2ac, #4299e1);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.chip--status {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #3182ce, #2c5282);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-view__meta {
';
        $buffer .= $indent . '    font-size: 1rem;
';
        $buffer .= $indent . '    margin-bottom: 2rem;
';
        $buffer .= $indent . '    color: #718096;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-view__summary,
';
        $buffer .= $indent . '.job-view__description {
';
        $buffer .= $indent . '    margin-bottom: 2rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-view__summary h3,
';
        $buffer .= $indent . '.job-view__description h3 {
';
        $buffer .= $indent . '    font-size: 1.4rem;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '    margin-bottom: 0.6rem;
';
        $buffer .= $indent . '    color: #2d3748;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-view__summary .content,
';
        $buffer .= $indent . '.job-view__description .content {
';
        $buffer .= $indent . '    line-height: 1.6;
';
        $buffer .= $indent . '    font-size: 1rem;
';
        $buffer .= $indent . '    color: #4a5568;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-view__apply {
';
        $buffer .= $indent . '    text-align: center;
';
        $buffer .= $indent . '    margin-top: 3rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-view__apply .btn {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #667eea, #764ba2);
';
        $buffer .= $indent . '    border: none;
';
        $buffer .= $indent . '    color: white;
';
        $buffer .= $indent . '    font-size: 1.15rem;
';
        $buffer .= $indent . '    padding: 0.85rem 2.5rem;
';
        $buffer .= $indent . '    border-radius: 38px;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '    cursor: pointer;
';
        $buffer .= $indent . '    transition: background 0.3s ease, box-shadow 0.3s ease;
';
        $buffer .= $indent . '    text-decoration: none;
';
        $buffer .= $indent . '    display: inline-block;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-view__apply .btn:hover {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #764ba2, #667eea);
';
        $buffer .= $indent . '    box-shadow: 0 8px 15px rgba(118, 75, 162, 0.6);
';
        $buffer .= $indent . '    color: #edf2f7;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
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
        $buffer .= $this->sectionEd7fd50eed7965d44fb6925a21861fdd($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <section class="job-view__description">
';
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->section64d81b8c77b51e72d7ce2fe60f88e2fc($context, $indent, $value);
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
        $buffer .= $this->section6782fc5bdfde8717c77b40ebcc7eb646($context, $indent, $value);
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

    private function section07da9f9bd49589c50918ec23c93d3e32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'summary, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'summary, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd7fd50eed7965d44fb6925a21861fdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <section class="job-view__summary">
      <h3>{{#str}}summary, moodle{{/str}}</h3>
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
                $buffer .= $this->section07da9f9bd49589c50918ec23c93d3e32($context, $indent, $value);
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

    private function section64d81b8c77b51e72d7ce2fe60f88e2fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'description, local_jobboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'description, local_jobboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e91cf5bfb9522544be7e25cec7c3a8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'apply, local_jobboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'apply, local_jobboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6782fc5bdfde8717c77b40ebcc7eb646(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <section id="apply" class="job-view__apply">
    <a class="btn btn-primary" href="{{apply_url}}" role="button">{{#str}}apply, local_jobboard{{/str}}</a>
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
                $buffer .= '" role="button">';
                $value = $context->find('str');
                $buffer .= $this->section4e91cf5bfb9522544be7e25cec7c3a8d($context, $indent, $value);
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
