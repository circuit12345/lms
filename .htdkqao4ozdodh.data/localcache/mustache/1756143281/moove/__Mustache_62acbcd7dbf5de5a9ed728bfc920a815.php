<?php

class __Mustache_62acbcd7dbf5de5a9ed728bfc920a815 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="page-header" class="moove-container-fluid py-4" 
';
        $buffer .= $indent . '    style="background: rgba(255, 255, 255, 0.85);
';
        $buffer .= $indent . '           backdrop-filter: blur(12px);
';
        $buffer .= $indent . '           box-shadow: 0 8px 24px rgba(31, 76, 140, 0.15);
';
        $buffer .= $indent . '           border-radius: 10px;
';
        $buffer .= $indent . '           border: 1px solid rgba(80, 200, 120, 0.3);
';
        $buffer .= $indent . '           margin: 1rem;
';
        $buffer .= $indent . '           text-align: center;">
';
        $buffer .= $indent . '    <div class="w-100 d-flex flex-column align-items-center justify-content-center">
';
        $buffer .= $indent . '        <div class="mb-3" style="font-weight: 600; font-size: 1.25rem; color: #1F4C8C;">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('courseheader'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('welcomemessage');
        if (empty($value)) {
            
            $value = $context->find('contextheader');
            $buffer .= $this->section97835033a9e082e12c94f2ba28924bad($context, $indent, $value);
        }
        if ($partial = $this->mustache->loadPartial('core/welcome')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <div class="header-actions-container d-flex align-items-center justify-content-center" data-region="header-actions-container" style="gap: 0.5rem; margin-top: 0.5rem;">
';
        $value = $context->find('headeractions');
        $buffer .= $this->sectionF0fc552edd24a2c78d41dd9be155fa35($context, $indent, $value);
        $value = $context->find('hasnavbar');
        $buffer .= $this->sectionC23d4728053548e00c9f9930d7cbf515($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</header>
';

        return $buffer;
    }

    private function section97835033a9e082e12c94f2ba28924bad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div style="color: #2E7D32; font-weight: 500; font-size: 1rem; margin-bottom: 0.75rem;">
                    {{{contextheader}}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div style="color: #2E7D32; font-weight: 500; font-size: 1rem; margin-bottom: 0.75rem;">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0fc552edd24a2c78d41dd9be155fa35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="header-action" style="color: #388E3C; font-weight: 600;">{{{.}}}</div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="header-action" style="color: #388E3C; font-weight: 600;">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC23d4728053548e00c9f9930d7cbf515(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div id="page-navbar">
                    {{{navbar}}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div id="page-navbar">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
