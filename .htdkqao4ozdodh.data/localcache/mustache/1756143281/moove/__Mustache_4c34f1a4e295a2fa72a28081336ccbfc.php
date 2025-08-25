<?php

class __Mustache_4c34f1a4e295a2fa72a28081336ccbfc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '.job-card {
';
        $buffer .= $indent . '    max-width: 400px;
';
        $buffer .= $indent . '    background: linear-gradient(145deg, #f0f8ff, #dcebff);
';
        $buffer .= $indent . '    border-radius: 16px;
';
        $buffer .= $indent . '    box-shadow: 0 10px 25px rgba(0, 74, 173, 0.12);
';
        $buffer .= $indent . '    padding: 1.8rem 2rem;
';
        $buffer .= $indent . '    margin: 1rem auto;
';
        $buffer .= $indent . '    font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen,
';
        $buffer .= $indent . '        Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;
';
        $buffer .= $indent . '    color: #1a202c;
';
        $buffer .= $indent . '    transition: box-shadow 0.3s ease, transform 0.3s ease;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card:hover {
';
        $buffer .= $indent . '    box-shadow: 0 20px 40px rgba(0, 74, 173, 0.25);
';
        $buffer .= $indent . '    transform: translateY(-6px);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card__header {
';
        $buffer .= $indent . '    margin-bottom: 1rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.chip {
';
        $buffer .= $indent . '    display: inline-block;
';
        $buffer .= $indent . '    font-size: 0.85rem;
';
        $buffer .= $indent . '    padding: 0.25rem 0.8rem;
';
        $buffer .= $indent . '    border-radius: 9999px;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '    margin-right: 0.6rem;
';
        $buffer .= $indent . '    user-select: none;
';
        $buffer .= $indent . '    color: white;
';
        $buffer .= $indent . '    white-space: nowrap;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.chip--tag {
';
        $buffer .= $indent . '    background: #4299e1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.chip--open {
';
        $buffer .= $indent . '    background: #38a169;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.chip--closed {
';
        $buffer .= $indent . '    background: #e53e3e;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card__title {
';
        $buffer .= $indent . '    font-weight: 700;
';
        $buffer .= $indent . '    font-size: 1.5rem;
';
        $buffer .= $indent . '    margin-bottom: 0.3rem;
';
        $buffer .= $indent . '    color: #2c5282;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card__meta {
';
        $buffer .= $indent . '    font-size: 0.9rem;
';
        $buffer .= $indent . '    color: #4a5568;
';
        $buffer .= $indent . '    margin-bottom: 1rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card__summary {
';
        $buffer .= $indent . '    font-size: 1rem;
';
        $buffer .= $indent . '    color: #2d3748;
';
        $buffer .= $indent . '    margin-bottom: 1.8rem;
';
        $buffer .= $indent . '    line-height: 1.5;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card__footer a.btn {
';
        $buffer .= $indent . '    text-decoration: none;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '    padding: 0.5rem 1.25rem;
';
        $buffer .= $indent . '    border-radius: 8px;
';
        $buffer .= $indent . '    transition: background 0.25s ease, box-shadow 0.25s ease;
';
        $buffer .= $indent . '    cursor: pointer;
';
        $buffer .= $indent . '    display: inline-block;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card__footer a.btn-primary {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #667eea, #764ba2);
';
        $buffer .= $indent . '    color: white;
';
        $buffer .= $indent . '    border: none;
';
        $buffer .= $indent . '    margin-right: 0.7rem;
';
        $buffer .= $indent . '    box-shadow: 0 4px 10px rgba(102, 126, 234, 0.4);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card__footer a.btn-primary:hover {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #764ba2, #667eea);
';
        $buffer .= $indent . '    box-shadow: 0 6px 20px rgba(118, 75, 162, 0.6);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card__footer a.btn-outline-secondary {
';
        $buffer .= $indent . '    border: 2px solid #667eea;
';
        $buffer .= $indent . '    color: #667eea;
';
        $buffer .= $indent . '    background: transparent;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.job-card__footer a.btn-outline-secondary:hover {
';
        $buffer .= $indent . '    background: #667eea;
';
        $buffer .= $indent . '    color: white;
';
        $buffer .= $indent . '    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
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
        $buffer .= '" role="button">';
        $value = $context->find('str');
        $buffer .= $this->sectionE4da9bd06edaf1c51c13702e91fb86eb($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    ';
        $value = $context->find('canapply');
        $buffer .= $this->section0278a1eb8049f74452058ac4f4f7e2db($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
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

    private function sectionE4da9bd06edaf1c51c13702e91fb86eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'view, local_jobboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'view, local_jobboard';
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

    private function section0278a1eb8049f74452058ac4f4f7e2db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-outline-secondary" href="{{view_url}}#apply" role="button">{{#str}}apply, local_jobboard{{/str}}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a class="btn btn-outline-secondary" href="';
                $value = $this->resolveValue($context->find('view_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '#apply" role="button">';
                $value = $context->find('str');
                $buffer .= $this->section4e91cf5bfb9522544be7e25cec7c3a8d($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
