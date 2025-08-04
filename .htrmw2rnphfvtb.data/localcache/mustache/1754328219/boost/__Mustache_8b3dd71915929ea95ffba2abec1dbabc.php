<?php

class __Mustache_8b3dd71915929ea95ffba2abec1dbabc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="eb_setup_wordpress_site_details es-w-80">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <div class="eb_setup_conn_url_inp_wrap">
';
        $buffer .= $indent . '            <span>';
        $value = $this->resolveValue($context->find('wpsitedetailsnote'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            <p>
';
        $buffer .= $indent . '                <label class="eb_setup_h2">';
        $value = $this->resolveValue($context->find('namelabel'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <i class="fa-solid fa-info eb-tooltip es-info-icon">
';
        $buffer .= $indent . '                    <span class=\'eb-tooltiptext\'>';
        $value = $this->resolveValue($context->find('wpsitenametip'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </i>
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            <input class="eb_setup_inp eb_setup_site_name" name="eb_setup_site_name" type="text" value="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" disabled>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="eb_setup_conn_url_inp_wrap">
';
        $buffer .= $indent . '            <p>
';
        $buffer .= $indent . '                <label class="eb_setup_h2">';
        $value = $this->resolveValue($context->find('urllabel'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <i class="fa-solid fa-info eb-tooltip es-info-icon">
';
        $buffer .= $indent . '                    <span class=\'eb-tooltiptext\'>';
        $value = $this->resolveValue($context->find('wpsiteurltip'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                </i>
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '            <input class="eb_setup_inp eb_setup_site_url" name="eb_setup_site_url" type="url" value="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" disabled>
';
        $buffer .= $indent . '            <div class="eb_setup_test_conn_resp_msg"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="eb_setup_btn_wrap">
';
        $buffer .= $indent . '            <a class="eb_setup_sec_btn" href="';
        $value = $this->resolveValue($context->find('prevurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('back'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <button class="eb_setup_btn eb_setup_test_connection_btn" data-step="';
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
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('wptestconnbtn'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '            <button class="eb_setup_btn eb_setup_save_and_continue eb_setup_test_connection_continue_btn" data-step="';
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
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('setupcontinuebtn'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
