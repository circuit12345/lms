<?php

class __Mustache_430e409c33ff97cfec0a96b8a11a3008 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('is_edit_mode');
        if (empty($value)) {
            
            $value = $context->find('logging_enabled');
            $buffer .= $this->sectionE68f5e5ced4571cf8fc81accc5aaecfa($context, $indent, $value);
            $buffer .= $indent . '    <button class=\'openai_input_popout_btn\' title="';
            $value = $context->find('str');
            $buffer .= $this->sectionD71c307d72916db492e98af592f12929($context, $indent, $value);
            $buffer .= '" id="popout">
';
            $buffer .= $indent . '        <img src="';
            $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
            $buffer .= ($value === null ? '' : $value);
            $value = $this->resolveValue($context->find('pix_popout'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" alt="';
            $value = $context->find('str');
            $buffer .= $this->sectionD71c307d72916db492e98af592f12929($context, $indent, $value);
            $buffer .= '" class=\'openai_input_popout_btn_icon\' />
';
            $buffer .= $indent . '    </button>
';
        }
        $buffer .= $indent . '<div id="control_bar">
';
        $buffer .= $indent . '    <div class="openai_input_bar" id="input_bar">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <textarea aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section51da3dd2de80c910b70e3caf5cf98ed0($context, $indent, $value);
        $buffer .= '" rows=1 id="openai_input" placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section51da3dd2de80c910b70e3caf5cf98ed0($context, $indent, $value);
        $buffer .= '" type="text" name="message"></textarea>
';
        $buffer .= $indent . '        <button class=\'openai_input_submit_btn\' title="';
        $value = $context->find('str');
        $buffer .= $this->section51da3dd2de80c910b70e3caf5cf98ed0($context, $indent, $value);
        $buffer .= '" id="go">
';
        $buffer .= $indent . '            <img src="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $value = $this->resolveValue($context->find('pix_arrow_right'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" alt="';
        $value = $context->find('str');
        $buffer .= $this->section51da3dd2de80c910b70e3caf5cf98ed0($context, $indent, $value);
        $buffer .= '" class=\'openai_input_submit_btn_icon\'/>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <button class=\'openai_input_refresh_btn\' title="';
        $value = $context->find('str');
        $buffer .= $this->section675734792f13b89173af642919d750c2($context, $indent, $value);
        $buffer .= '" id="refresh">
';
        $buffer .= $indent . '        <img src="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $value = $this->resolveValue($context->find('pix_refresh'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class=\'openai_input_refresh_btn_icon\' alt="';
        $value = $context->find('str');
        $buffer .= $this->section675734792f13b89173af642919d750c2($context, $indent, $value);
        $buffer .= '" />
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section33d09207f2c27e0a6dee8e059057a812(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loggingenabled, block_openai_chat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loggingenabled, block_openai_chat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE68f5e5ced4571cf8fc81accc5aaecfa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div title=\'{{#str}}loggingenabled, block_openai_chat{{/str}}\' class=\'recording\'></div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div title=\'';
                $value = $context->find('str');
                $buffer .= $this->section33d09207f2c27e0a6dee8e059057a812($context, $indent, $value);
                $buffer .= '\' class=\'recording\'></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD71c307d72916db492e98af592f12929(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'popout, block_openai_chat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'popout, block_openai_chat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51da3dd2de80c910b70e3caf5cf98ed0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'askaquestion, block_openai_chat';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'askaquestion, block_openai_chat';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section675734792f13b89173af642919d750c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'new_chat, block_openai_chat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'new_chat, block_openai_chat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
