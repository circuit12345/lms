<?php

class __Mustache_8bc8edccf83ee5050b0811bc948075f3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '.jobboard-grid {
';
        $buffer .= $indent . '    display: grid;
';
        $buffer .= $indent . '    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
';
        $buffer .= $indent . '    gap: 2rem;
';
        $buffer .= $indent . '    padding: 2rem;
';
        $buffer .= $indent . '    background: linear-gradient(120deg, #e0eaff 0%, #faf6ff 100%);
';
        $buffer .= $indent . '    border-radius: 16px;
';
        $buffer .= $indent . '    margin-bottom: 2rem;
';
        $buffer .= $indent . '    justify-items: center;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.local_jobboard-job_card {
';
        $buffer .= $indent . '    background: linear-gradient(135deg, #f5ffd9 0%, #e0f0ff 100%);
';
        $buffer .= $indent . '    border-radius: 18px;
';
        $buffer .= $indent . '    box-shadow: 0 8px 32px rgba(60, 90, 170, 0.13);
';
        $buffer .= $indent . '    padding: 2rem 1.5rem;
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    max-width: 410px;
';
        $buffer .= $indent . '    border: 1px solid #d0eaff;
';
        $buffer .= $indent . '    transition: box-shadow 0.35s cubic-bezier(.25,.8,.25,1), transform 0.35s cubic-bezier(.25,.8,.25,1);
';
        $buffer .= $indent . '    position: relative;
';
        $buffer .= $indent . '    overflow: hidden;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.local_jobboard-job_card::before {
';
        $buffer .= $indent . '    content: \'\';
';
        $buffer .= $indent . '    display: block;
';
        $buffer .= $indent . '    position: absolute;
';
        $buffer .= $indent . '    left: 0;
';
        $buffer .= $indent . '    top: 0;
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    height: 12px;
';
        $buffer .= $indent . '    border-top-left-radius: 18px;
';
        $buffer .= $indent . '    border-top-right-radius: 18px;
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #63b3ed 0%, #c084fc 100%);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.local_jobboard-job_card:hover {
';
        $buffer .= $indent . '    box-shadow: 0 16px 40px rgba(60, 90, 170, 0.25);
';
        $buffer .= $indent . '    transform: translateY(-8px) scale(1.018);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.local_jobboard-job_card h3 {
';
        $buffer .= $indent . '    color: #1640d6;
';
        $buffer .= $indent . '    font-weight: 700;
';
        $buffer .= $indent . '    margin-top: 1.1rem;
';
        $buffer .= $indent . '    margin-bottom: 0.65rem;
';
        $buffer .= $indent . '    font-size: 1.45rem;
';
        $buffer .= $indent . '    letter-spacing: 0.5px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.local_jobboard-job_card .job-meta {
';
        $buffer .= $indent . '    color: #5b678b;
';
        $buffer .= $indent . '    font-size: 1.02rem;
';
        $buffer .= $indent . '    margin-bottom: 1rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.local_jobboard-job_card p {
';
        $buffer .= $indent . '    color: #2a3a5a;
';
        $buffer .= $indent . '    font-size: 1.08rem;
';
        $buffer .= $indent . '    margin-bottom: 1.35rem;
';
        $buffer .= $indent . '    margin-top: 0.5rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.local_jobboard-job_card .btn {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #7f9cf5 0%, #34d399 100%);
';
        $buffer .= $indent . '    color: #fff;
';
        $buffer .= $indent . '    border: none;
';
        $buffer .= $indent . '    font-size: 1rem;
';
        $buffer .= $indent . '    padding: 0.46rem 1.20rem;
';
        $buffer .= $indent . '    border-radius: 8px;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '    box-shadow: 0 2px 8px rgba(60, 90, 170, 0.08);
';
        $buffer .= $indent . '    margin-right: 0.6rem;
';
        $buffer .= $indent . '    margin-bottom: 0.4rem;
';
        $buffer .= $indent . '    transition: background 0.22s, box-shadow 0.22s, transform 0.22s;
';
        $buffer .= $indent . '    cursor: pointer;
';
        $buffer .= $indent . '    text-decoration: none;
';
        $buffer .= $indent . '    display: inline-block;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.local_jobboard-job_card .btn:last-child {
';
        $buffer .= $indent . '    margin-right: 0;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.local_jobboard-job_card .btn:hover {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #34d399 0%, #7f9cf5 100%);
';
        $buffer .= $indent . '    box-shadow: 0 4px 16px rgba(52, 211, 153, 0.11);
';
        $buffer .= $indent . '    transform: scale(1.08);
';
        $buffer .= $indent . '    color: #e0eaff;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h2>';
        $value = $context->find('str');
        $buffer .= $this->section902b0981139d08609a5679ae08b2d03c($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="jobboard-grid">
';
        $value = $context->find('jobs');
        $buffer .= $this->section69aa7f34b76ea1ac194f10bbb5ca367d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('jobs');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="alert alert-info" style="width:100%; text-align:center;">
';
            $buffer .= $indent . '      ';
            $value = $context->find('str');
            $buffer .= $this->sectionC070cadf01b9d01c092feb28bb746a00($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section902b0981139d08609a5679ae08b2d03c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'jobs, local_jobboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'jobs, local_jobboard';
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

    private function sectionD89a1f55a9c861734f2f4dfe47430eaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{applyurl}}" class="btn" role="button">{{#str}}apply, local_jobboard{{/str}}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('applyurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn" role="button">';
                $value = $context->find('str');
                $buffer .= $this->section4e91cf5bfb9522544be7e25cec7c3a8d($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69aa7f34b76ea1ac194f10bbb5ca367d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="local_jobboard-job_card">
      <div class="job-meta">
        {{{status}}} {{{type}}}
      </div>
      <h3>{{{title}}}</h3>
      <div class="job-meta">
        {{{location}}} &middot; {{{jobtype}}} &middot; {{{date}}}
      </div>
      <p>{{{description}}}</p>
      <div>
        <a href="{{viewurl}}" class="btn" role="button">{{#str}}view, local_jobboard{{/str}}</a>
        {{#applyurl}}<a href="{{applyurl}}" class="btn" role="button">{{#str}}apply, local_jobboard{{/str}}</a>{{/applyurl}}
      </div>
    </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="local_jobboard-job_card">
';
                $buffer .= $indent . '      <div class="job-meta">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('status'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <h3>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '      <div class="job-meta">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('location'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' &middot; ';
                $value = $this->resolveValue($context->find('jobtype'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' &middot; ';
                $value = $this->resolveValue($context->find('date'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '      <p>';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '      <div>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn" role="button">';
                $value = $context->find('str');
                $buffer .= $this->sectionE4da9bd06edaf1c51c13702e91fb86eb($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        ';
                $value = $context->find('applyurl');
                $buffer .= $this->sectionD89a1f55a9c861734f2f4dfe47430eaa($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC070cadf01b9d01c092feb28bb746a00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nojobs, local_jobboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nojobs, local_jobboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
