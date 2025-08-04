<?php

class __Mustache_071560424e86ac71d812bc96106a91ce extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="eb_setup_installation_guide es-w-80">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <p class="eb_setup_p"> ';
        $value = $this->resolveValue($context->find('installationnote1'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </p>
';
        $buffer .= $indent . '        <div class="eb_setup_p_wrap">
';
        $buffer .= $indent . '            <p class="eb_setup_h2"> <i class="fa-solid fa-circle-chevron-right"></i> ';
        $value = $this->resolveValue($context->find('modulenamefreewpplugin'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </p>
';
        $buffer .= $indent . '            <p class="eb_setup_h2"> <i class="fa-solid fa-circle-chevron-right"></i> ';
        $value = $this->resolveValue($context->find('modulenamefreemdlplugin'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <span class="eb_setup_p"> ';
        $value = $this->resolveValue($context->find('installationnote2'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </span>
';
        $buffer .= $indent . '        <div class="eb_setup_btn_wrap">
';
        $buffer .= $indent . '            <button class="eb_setup_btn eb_setup_save_and_continue" data-step=\'';
        $value = $this->resolveValue($context->find('step'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\' data-next-step=\'';
        $value = $this->resolveValue($context->find('nextstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\' data-is-next-sub-step=\'';
        $value = $this->resolveValue($context->find('isnextsubstep'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '\'>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('continuebtn'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <div class=\'es-p-t-10\'>
';
        $buffer .= $indent . '            <div class=\'accordion\'> <i class="fa-solid fa-circle-question"></i> ';
        $value = $this->resolveValue($context->find('installationfaq'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' <i class="fa-solid fa-chevron-down"></i> <i class="fa-solid fa-chevron-up"></i> </div>
';
        $buffer .= $indent . '            <div class="panel">
';
        $buffer .= $indent . '                <div>
';
        $buffer .= $indent . '                    <a class="eb_setup_sec_btn" href=\'https://downloads.wordpress.org/plugin/edwiser-bridge.zip\'> ';
        $value = $this->resolveValue($context->find('faqdownloadplugin'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <p>
';
        $buffer .= $indent . '                    <p class=\'es-p-t-10\'> ';
        $value = $this->resolveValue($context->find('faqsteps'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </p>
';
        $buffer .= $indent . '                    <ol>
';
        $buffer .= $indent . '                        <li class=\'es-p-b-10\'> ';
        $value = $this->resolveValue($context->find('faqstep1'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </li>
';
        $buffer .= $indent . '                        <li class=\'es-p-b-10\'> ';
        $value = $this->resolveValue($context->find('faqstep2'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </li>
';
        $buffer .= $indent . '                        <li class=\'es-p-b-10\'> ';
        $value = $this->resolveValue($context->find('faqstep3'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </li>
';
        $buffer .= $indent . '                        <li class=\'es-p-b-10\'> ';
        $value = $this->resolveValue($context->find('faqstep4'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' </li>
';
        $buffer .= $indent . '                    </ol>
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
