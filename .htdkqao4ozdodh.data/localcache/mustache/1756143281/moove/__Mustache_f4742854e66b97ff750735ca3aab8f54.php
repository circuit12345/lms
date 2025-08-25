<?php

class __Mustache_f4742854e66b97ff750735ca3aab8f54 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<footer id="page-footer" class="footer-popover" style="background: linear-gradient(to right, #1F4C8C, #50C878); color: #fff; padding: 32px 0;">
';
        $buffer .= $indent . '    <div class="moove-container-fluid footer-columns">
';
        $buffer .= $indent . '        <div class="row align-items-center">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Logo Left Side -->
';
        $buffer .= $indent . '            <div class="col-md-3 column-left text-left">
';
        $buffer .= $indent . '                <a href="https://www.circuitmakers.in" target="_blank" style="display:inline-block">
';
        $buffer .= $indent . '                    <img src="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/moove/pix/logo_circuitmakers.svg" alt="CML Tech Solutions" style="height:56px;">
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Center: Company Name & Contact -->
';
        $buffer .= $indent . '            <div class="col-md-6 column-center text-center">
';
        $buffer .= $indent . '                <h3 style="font-weight:700; font-size: 1.45rem; margin:0 0 10px 0; letter-spacing:1px; color: #fff;">
';
        $buffer .= $indent . '                    CML TECH SOLUTIONS PVT LTD
';
        $buffer .= $indent . '                </h3>
';
        $buffer .= $indent . '                <a href="https://www.circuitmakers.in"
';
        $buffer .= $indent . '                    style="color:#E6FFF5;font-size:1.05rem;font-weight:500;text-decoration:none;">
';
        $buffer .= $indent . '                    www.circuitmakers.in
';
        $buffer .= $indent . '                </a>
';
        $value = $context->findDot('output.supportemail');
        $buffer .= $this->sectionF22106ea6c9ba537cbcca113089f96ca($context, $indent, $value);
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Right: Social Icons -->
';
        $buffer .= $indent . '            <div class="col-md-3 column-right text-right">
';
        $buffer .= $indent . '                <div class="socialnetworks" style="display:flex; justify-content:flex-end; gap:18px;">
';
        $buffer .= $indent . '                    <a href="https://facebook.com/circuitmakers" target="_blank" title="Facebook"
';
        $buffer .= $indent . '                        style="width:40px; height:40px; background:linear-gradient(135deg,#50C878,#00cc99);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;">
';
        $buffer .= $indent . '                        <i class="fa fa-facebook"></i>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a href="https://linkedin.com/company/circuitmakers" target="_blank" title="LinkedIn"
';
        $buffer .= $indent . '                        style="width:40px; height:40px; background:linear-gradient(135deg,#1F4C8C,#50C878);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;">
';
        $buffer .= $indent . '                        <i class="fa fa-linkedin"></i>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a href="https://instagram.com/circuitmakers.in" target="_blank" title="Instagram"
';
        $buffer .= $indent . '                        style="width:40px; height:40px; background:linear-gradient(135deg,#00cc99,#7a32c2);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;">
';
        $buffer .= $indent . '                        <i class="fa fa-instagram"></i>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="footer-content-debugging footer-dark bg-dark text-light">
';
        $buffer .= $indent . '        <div class="moove-container-fluid footer-dark-inner">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="footer-content-popover container" data-region="footer-content-popover">
';
        $value = $context->findDot('output.has_popover_links');
        $buffer .= $this->sectionAec1d704347ada333883110d729ce6b2($context, $indent, $value);
        $buffer .= $indent . '        <div class="footer-section p-3">
';
        $buffer .= $indent . '            <div>';
        $value = $context->find('str');
        $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
        $buffer .= '</div>
';
        $value = $context->findDot('output.moodle_release');
        $buffer .= $this->section73bb8cb2a5e4cb71f2710d52886fa70e($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionC5c9acbda84371a26728b95ffedeca56($context, $indent, $value);
        $buffer .= $indent . '</footer>
';

        return $buffer;
    }

    private function sectionF22106ea6c9ba537cbcca113089f96ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="supportemail mt-2" style="color:#09bc87;font-size:1rem;">{{{ output.supportemail }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="supportemail mt-2" style="color:#09bc87;font-size:1rem;">';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section235cbcf578914b3b2a1ce102d5fef450(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{{ output.page_doc_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62a09bf45708b66afa4d9ff4a387ec76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{{ output.services_support_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAec1d704347ada333883110d729ce6b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-section p-3 border-bottom">
                {{# output.page_doc_link }}
                    <div>{{{ output.page_doc_link }}}</div>
                {{/ output.page_doc_link }}
                {{# output.services_support_link }}
                    <div>{{{ output.services_support_link }}}</div>
                {{/ output.services_support_link }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->section235cbcf578914b3b2a1ce102d5fef450($context, $indent, $value);
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->section62a09bf45708b66afa4d9ff4a387ec76($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73bb8cb2a5e4cb71f2710d52886fa70e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>
                    {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
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

    private function sectionC5c9acbda84371a26728b95ffedeca56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'theme_boost/footer-popover\'], function(FooterPopover) {
            FooterPopover.init();
        });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '            FooterPopover.init();
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
