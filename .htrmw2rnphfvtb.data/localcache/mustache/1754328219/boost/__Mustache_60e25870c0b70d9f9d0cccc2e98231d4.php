<?php

class __Mustache_60e25870c0b70d9f9d0cccc2e98231d4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="eb_setup_wordpress_site_details es-w-80">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <div class="eb_setup_conn_url_inp_wrap">
';
        $buffer .= $indent . '                <p>';
        $value = $this->resolveValue($context->find('setupwpsitenote1'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                    <label class="eb_setup_h2">';
        $value = $this->resolveValue($context->find('setupwpsitedropdown'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <i class="fa-solid fa-info eb-tooltip es-info-icon">
';
        $buffer .= $indent . '                        <span class=\'eb-tooltiptext\'>';
        $value = $this->resolveValue($context->find('wpsitetip'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </i>
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '                <select name="eb_setup_wp_sites" class="eb_setup_inp eb_setup_wp_sites">
';
        $buffer .= $indent . '                    <option value="">';
        $value = $this->resolveValue($context->find('select'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                    <option value="create">';
        $value = $this->resolveValue($context->find('createwpsite'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</option>
';
        $value = $context->find('sites');
        $buffer .= $this->sectionE8ebd22dca3aaff9dd1fa5f44ee21fa2($context, $indent, $value);
        $buffer .= $indent . '                </select>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="eb_setup_wp_site_details_inp eb_setup_conn_url_inp_wrap ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <span>';
        $value = $this->resolveValue($context->find('setupwpsitenote2'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                    <label class="eb_setup_h2">';
        $value = $this->resolveValue($context->find('namelabel'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <i class="fa-solid fa-info eb-tooltip es-info-icon">
';
        $buffer .= $indent . '                        <span class=\'eb-tooltiptext\'>';
        $value = $this->resolveValue($context->find('wpsitenametip'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </i>
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '                <input class="eb_setup_inp eb_setup_site_name" id="eb_setup_site_name" name="eb_setup_site_name" type="text" value="';
        $value = $this->resolveValue($context->find('selectedname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="eb_setup_wp_site_details_inp eb_setup_conn_url_inp_wrap ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                    <label class="eb_setup_h2">';
        $value = $this->resolveValue($context->find('urllabel'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <i class="fa-solid fa-info eb-tooltip es-info-icon">
';
        $buffer .= $indent . '                        <span class=\'eb-tooltiptext\'>';
        $value = $this->resolveValue($context->find('wpsiteurltip'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </i>
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '                <input class="eb_setup_inp eb_setup_site_url" id="eb_setup_site_url" name="eb_setup_site_url" type="text" value="';
        $value = $this->resolveValue($context->find('selectedurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="eb_setup_btn_wrap">
';
        $buffer .= $indent . '                <a class="eb_setup_sec_btn" href="';
        $value = $this->resolveValue($context->find('prevurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('back'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                <button class="eb_setup_btn eb_setup_wp_details_btn eb_setup_save_and_continue ';
        $value = $this->resolveValue($context->find('btnclass'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-step="';
        $value = $this->resolveValue($context->find('step'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-next-step="';
        $value = $this->resolveValue($context->find('nextstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-is-next-sub-step="';
        $value = $this->resolveValue($context->find('isnextsubstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('setupcontinuebtn'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE8ebd22dca3aaff9dd1fa5f44ee21fa2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <option data-name="{{name}}" data-url="{{url}}" value="{{key}}" {{selected}}>{{name}}</option>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <option data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-url="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $this->resolveValue($context->find('selected'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
