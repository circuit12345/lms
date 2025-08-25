<?php

class __Mustache_b6225d62e87a5702440a490013176cfc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="page-header" class="moove-container-fluid py-4" style="background: linear-gradient(to right, #1F4C8C, #00cc99); border-bottom: 3px solid #50C878;">
';
        $buffer .= $indent . '    <div class="w-100">
';
        $buffer .= $indent . '        <div class="d-flex flex-wrap align-items-center">
';
        $buffer .= $indent . '            <div class="ms-auto d-flex">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div id="course-header" style="font-weight: 600; font-size: 1.25rem; color: #E6FFF5;">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('courseheader'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="d-flex align-items-center mt-2">
';
        $value = $context->find('welcomemessage');
        if (empty($value)) {
            
            $value = $context->find('contextheader');
            $buffer .= $this->sectionA536f7a1846713d501136dd0e745767b($context, $indent, $value);
        }
        if ($partial = $this->mustache->loadPartial('core/welcome')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '            <div class="header-actions-container ms-auto d-flex align-items-center" data-region="header-actions-container" style="gap: 0.5rem;">
';
        $value = $context->find('headeractions');
        $buffer .= $this->section1cd5292abb64a61e1aa1846e38490586($context, $indent, $value);
        $value = $context->find('hasnavbar');
        $buffer .= $this->section4899635b40f43c8b5b826f2c33005739($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</header>
';

        return $buffer;
    }

    private function sectionA536f7a1846713d501136dd0e745767b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="me-auto" style="color: #D0F0E0; font-weight: 500; font-size: 1rem;">
                        {{{contextheader}}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="me-auto" style="color: #D0F0E0; font-weight: 500; font-size: 1rem;">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cd5292abb64a61e1aa1846e38490586(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="header-action ms-2" style="color: #B3F2D0; font-weight: 600;">{{{.}}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="header-action ms-2" style="color: #B3F2D0; font-weight: 600;">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4899635b40f43c8b5b826f2c33005739(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="d-none d-md-block" id="page-navbar">
                        {{{navbar}}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="d-none d-md-block" id="page-navbar">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
