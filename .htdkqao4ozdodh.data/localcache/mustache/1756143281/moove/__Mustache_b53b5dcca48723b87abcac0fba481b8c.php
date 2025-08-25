<?php

class __Mustache_b53b5dcca48723b87abcac0fba481b8c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="loginform row ';
        $value = $context->find('hastwocolumns');
        $buffer .= $this->section1831ec93a455edb6208a4d5438e8a9c0($context, $indent, $value);
        $buffer .= '" style="background: linear-gradient(to right, #1F4C8C, #00cc99); min-height: 100vh; align-items: center; padding: 40px 20px;">
';
        $buffer .= $indent . '    <div class="';
        $value = $context->find('hastwocolumns');
        $buffer .= $this->section13b44ac94167f3136edfaf1435af46a2($context, $indent, $value);
        $value = $context->find('hastwocolumns');
        if (empty($value)) {
            
            $buffer .= 'col';
        }
        $buffer .= '" style="background: rgba(255, 255, 255, 0.85); border-radius: 12px; padding: 40px; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);">
';
        $value = $context->find('logourl');
        $buffer .= $this->section1834582cf47cb8c7df01c981649da5f5($context, $indent, $value);
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '            <h1 class="login-heading mb-4 text-center" style="color: #1F4C8C; font-weight: 700; font-size: 2.5rem; letter-spacing: 1.5px;">
';
            $buffer .= $indent . '                ';
            $value = $context->find('str');
            $buffer .= $this->section80a4d1690ff171d23b2097c3acda60e4($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </h1>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('maintenance');
        $buffer .= $this->section6d5381d6491689b58f8946091ec0a71e($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('error');
        $buffer .= $this->section6ffd9c9ca38d660f73862c85ffa49bc3($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('info');
        $buffer .= $this->section02260a22fb6781a715ab076ac96680ff($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('cansignup');
        $buffer .= $this->section3711229547d96929b8004a563b4f9cb0($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('showloginform');
        $buffer .= $this->sectionBb2d49145900fd968f76bcf38cedf6c1($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasidentityproviders');
        $buffer .= $this->sectionC321d00e004b6c2290d4d4939aaf77e5($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hastwocolumns');
        if (empty($value)) {
            
            $value = $context->find('canloginasguest');
            $buffer .= $this->section1e01b68d2a7f05cc75904f81a225d162($context, $indent, $value);
            $buffer .= $indent . '            <div class="login-divider mt-5"></div>
';
            $buffer .= $indent . '            <div class="d-flex justify-content-center">
';
            $value = $context->find('languagemenu');
            $buffer .= $this->section31568b13f586f5122acc1e6d91195e8e($context, $indent, $value);
            $buffer .= $indent . '                <button type="button" class="btn btn-outline-secondary" data-modal="alert" data-modal-title-str=\'["cookiesenabled", "core"]\' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\' style="font-weight: 600;">
';
            $buffer .= $indent . '                    ';
            $value = $context->find('str');
            $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </button>
';
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('hastwocolumns');
        $buffer .= $this->section375a35319501996b44a13edb0d72bdb1($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionDd70118972f2aa9f3ba2fe4ac8b9b9d1($context, $indent, $value);

        return $buffer;
    }

    private function section1831ec93a455edb6208a4d5438e8a9c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hastwocolumns';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hastwocolumns';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13b44ac94167f3136edfaf1435af46a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-lg-6 col-md-12 left-column';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'col-lg-6 col-md-12 left-column';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80a4d1690ff171d23b2097c3acda60e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loginto, core, {{sitename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loginto, core, ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1834582cf47cb8c7df01c981649da5f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="loginlogo" class="login-logo text-center mb-4">
                <img id="logoimage" src="{{logourl}}" class="img-fluid" alt="{{sitename}}" style="max-height: 100px;"/>
                <h1 class="login-heading visually-hidden">{{#str}} loginto, core, {{sitename}} {{/str}}</h1>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="loginlogo" class="login-logo text-center mb-4">
';
                $buffer .= $indent . '                <img id="logoimage" src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="img-fluid" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="max-height: 100px;"/>
';
                $buffer .= $indent . '                <h1 class="login-heading visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->section80a4d1690ff171d23b2097c3acda60e4($context, $indent, $value);
                $buffer .= '</h1>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d5381d6491689b58f8946091ec0a71e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="alert alert-danger login-maintenance">
                {{{maintenance}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="alert alert-danger login-maintenance">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('maintenance'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ffd9c9ca38d660f73862c85ffa49bc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#" id="loginerrormessage" class="visually-hidden">{{error}}</a>
            <div class="alert alert-danger" role="alert">{{error}}</div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#" id="loginerrormessage" class="visually-hidden">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '            <div class="alert alert-danger" role="alert">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02260a22fb6781a715ab076ac96680ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#" id="logininfomessage" class="visually-hidden">{{info}}</a>
            <div class="alert alert-info" role="alert">{{info}}</div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#" id="logininfomessage" class="visually-hidden">';
                $value = $this->resolveValue($context->find('info'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '            <div class="alert alert-info" role="alert">';
                $value = $this->resolveValue($context->find('info'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3711229547d96929b8004a563b4f9cb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{signupurl}}" class="d-block mb-3 text-center text-primary fw-semibold">{{#str}} tocreatenewaccount {{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="d-block mb-3 text-center text-primary fw-semibold">';
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0920b145adae674c451ff70da37d63dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#str}}usernameemail{{/str}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118ece6c412804f669c845b43ecc9a01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#cleanstr}}usernameemail{{/cleanstr}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('cleanstr');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf1da6f9fe22c1933500f298626264fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="login-form-recaptcha mb-4">
                        {{{recaptcha}}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="login-form-recaptcha mb-4">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('recaptcha'), $context);
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

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3afea308016df7243ba8871f7081e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotaccount';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'forgotaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb2d49145900fd968f76bcf38cedf6c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <form class="login-form" action="{{loginurl}}" method="post" id="login" novalidate>
                <input id="anchor" type="hidden" name="anchor" value="">
                <script>document.getElementById(\'anchor\').value = location.hash;</script>
                <input type="hidden" name="logintoken" value="{{logintoken}}">

                <div class="login-form-username mb-4">
                    <label for="username" class="form-label visually-hidden">
                        {{^canloginbyemail}}
                            {{#str}}username{{/str}}
                        {{/canloginbyemail}}
                        {{#canloginbyemail}}
                            {{#str}}usernameemail{{/str}}
                        {{/canloginbyemail}}
                    </label>
                    <input type="text" name="username" id="username" class="form-control form-control-lg border-primary shadow-sm" value="{{username}}" placeholder="{{^canloginbyemail}}{{#cleanstr}}username{{/cleanstr}}{{/canloginbyemail}}{{#canloginbyemail}}{{#cleanstr}}usernameemail{{/cleanstr}}{{/canloginbyemail}}" autocomplete="username" required autofocus>
                </div>

                <div class="login-form-password mb-4">
                    <label for="password" class="form-label visually-hidden">{{#str}}password{{/str}}</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg border-primary shadow-sm" placeholder="{{#cleanstr}}password{{/cleanstr}}" autocomplete="current-password" required>
                </div>

                {{#recaptcha}}
                    <div class="login-form-recaptcha mb-4">
                        {{{recaptcha}}}
                    </div>
                {{/recaptcha}}

                <div class="d-grid">
                    <button class="btn btn-gradient-primary btn-lg fw-bold text-white" type="submit" id="loginbtn" style="background: linear-gradient(to right, #1F4C8C, #00cc99); border: none; box-shadow: 0 4px 12px rgba(0, 204, 153, 0.6);">
                        {{#str}}login{{/str}}
                    </button>
                </div>
            </form>

            <div class="login-divider my-4" style="text-align:center; font-size: 1rem; color: #666;">- OR -</div>

            <div class="login-form-forgotpassword text-center mb-3">
                <a href="{{forgotpasswordurl}}" class="text-decoration-none text-primary" style="font-weight: 600;">{{#str}}forgotaccount{{/str}}</a>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <form class="login-form" action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="login" novalidate>
';
                $buffer .= $indent . '                <input id="anchor" type="hidden" name="anchor" value="">
';
                $buffer .= $indent . '                <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
                $buffer .= $indent . '                <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="login-form-username mb-4">
';
                $buffer .= $indent . '                    <label for="username" class="form-label visually-hidden">
';
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                    $buffer .= '
';
                }
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section0920b145adae674c451ff70da37d63dc($context, $indent, $value);
                $buffer .= $indent . '                    </label>
';
                $buffer .= $indent . '                    <input type="text" name="username" id="username" class="form-control form-control-lg border-primary shadow-sm" value="';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" placeholder="';
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $value = $context->find('cleanstr');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                }
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section118ece6c412804f669c845b43ecc9a01($context, $indent, $value);
                $buffer .= '" autocomplete="username" required autofocus>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="login-form-password mb-4">
';
                $buffer .= $indent . '                    <label for="password" class="form-label visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                    <input type="password" name="password" id="password" class="form-control form-control-lg border-primary shadow-sm" placeholder="';
                $value = $context->find('cleanstr');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $buffer .= '" autocomplete="current-password" required>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('recaptcha');
                $buffer .= $this->sectionBf1da6f9fe22c1933500f298626264fa($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="d-grid">
';
                $buffer .= $indent . '                    <button class="btn btn-gradient-primary btn-lg fw-bold text-white" type="submit" id="loginbtn" style="background: linear-gradient(to right, #1F4C8C, #00cc99); border: none; box-shadow: 0 4px 12px rgba(0, 204, 153, 0.6);">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </button>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </form>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="login-divider my-4" style="text-align:center; font-size: 1rem; color: #666;">- OR -</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="login-form-forgotpassword text-center mb-3">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="text-decoration-none text-primary" style="font-weight: 600;">';
                $value = $context->find('str');
                $buffer .= $this->sectionE3afea308016df7243ba8871f7081e79($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bbbdcd269f855dece13c83bfaedd9d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'potentialidps, auth';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'potentialidps, auth';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section806ab45b08fd0900e21dc9d3ce3493d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{iconurl}}" alt="" width="24" height="24" class="me-2 align-text-bottom"/>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="" width="24" height="24" class="me-2 align-text-bottom"/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3483d15b00d4b19bba20ee69513526a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="btn login-identityprovider-btn w-100 mb-2 btn-outline-primary fw-semibold" href="{{url}}" style="font-size: 1.125rem;">
                        {{#iconurl}}<img src="{{iconurl}}" alt="" width="24" height="24" class="me-2 align-text-bottom"/>{{/iconurl}}
                        {{name}}
                    </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a class="btn login-identityprovider-btn w-100 mb-2 btn-outline-primary fw-semibold" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="font-size: 1.125rem;">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('iconurl');
                $buffer .= $this->section806ab45b08fd0900e21dc9d3ce3493d0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC321d00e004b6c2290d4d4939aaf77e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="login-divider"></div>
            <div class="login-identityproviders text-center">
                <h2 class="login-heading" style="font-size: 1.5rem; margin-bottom: 1rem;">{{#str}}potentialidps, auth{{/str}}</h2>
                {{#identityproviders}}
                    <a class="btn login-identityprovider-btn w-100 mb-2 btn-outline-primary fw-semibold" href="{{url}}" style="font-size: 1.125rem;">
                        {{#iconurl}}<img src="{{iconurl}}" alt="" width="24" height="24" class="me-2 align-text-bottom"/>{{/iconurl}}
                        {{name}}
                    </a>
                {{/identityproviders}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="login-divider"></div>
';
                $buffer .= $indent . '            <div class="login-identityproviders text-center">
';
                $buffer .= $indent . '                <h2 class="login-heading" style="font-size: 1.5rem; margin-bottom: 1rem;">';
                $value = $context->find('str');
                $buffer .= $this->section3bbbdcd269f855dece13c83bfaedd9d9($context, $indent, $value);
                $buffer .= '</h2>
';
                $value = $context->find('identityproviders');
                $buffer .= $this->section3483d15b00d4b19bba20ee69513526a3($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93e4b62aaf677bf7878b06c5ac540671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'someallowguest';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'someallowguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e01b68d2a7f05cc75904f81a225d162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="login-divider"></div>
                <div class="text-center">
                    <h2 class="login-heading mb-3">{{#str}}someallowguest{{/str}}</h2>
                    <form action="{{loginurl}}" method="post" id="guestlogin">
                        <input type="hidden" name="logintoken" value="{{logintoken}}">
                        <input type="hidden" name="username" value="guest" />
                        <input type="hidden" name="password" value="guest" />
                        <button class="btn btn-secondary btn-lg px-5 fw-bold" type="submit" id="loginguestbtn">{{#str}}loginguest{{/str}}</button>
                    </form>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="login-divider"></div>
';
                $buffer .= $indent . '                <div class="text-center">
';
                $buffer .= $indent . '                    <h2 class="login-heading mb-3">';
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                        <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                        <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                        <button class="btn btn-secondary btn-lg px-5 fw-bold" type="submit" id="loginguestbtn">';
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                    </form>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31568b13f586f5122acc1e6d91195e8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="login-languagemenu">
                        {{>core/action_menu}}
                    </div>
                    <div class="divider border-start align-self-center mx-3"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="login-languagemenu">
';
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="divider border-start align-self-center mx-3"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb729cc74d31bce5e3746aa60b79a2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cookiesnotice';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cookiesnotice';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf2e3defecc35d84a091ece31c5fc7e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mb-3';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'mb-3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB681534bda1faeeb31506c30e72ff16e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firsttime';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'firsttime';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8befa192d97b59930ea8f608e9ca6156(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="login-divider mb-4"></div>
                <div class="login-instructions {{#cansignup}}mb-3{{/cansignup}}" style="font-size: 1.125rem; line-height: 1.5;">
                    <h2 class="login-heading mb-3" style="font-weight: 700; font-size: 2rem;">{{#str}}firsttime{{/str}}</h2>
                    {{{instructions}}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="login-divider mb-4"></div>
';
                $buffer .= $indent . '                <div class="login-instructions ';
                $value = $context->find('cansignup');
                $buffer .= $this->sectionEf2e3defecc35d84a091ece31c5fc7e0($context, $indent, $value);
                $buffer .= '" style="font-size: 1.125rem; line-height: 1.5;">
';
                $buffer .= $indent . '                    <h2 class="login-heading mb-3" style="font-weight: 700; font-size: 2rem;">';
                $value = $context->find('str');
                $buffer .= $this->sectionB681534bda1faeeb31506c30e72ff16e($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('instructions'), $context);
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

    private function sectionD251f081e0b3ae5fe7e3176215e6576f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="login-divider my-4"></div>
                <h2 class="login-heading mb-1">{{#str}}someallowguest{{/str}}</h2>
                <form action="{{loginurl}}" method="post" id="guestlogin">
                    <input type="hidden" name="logintoken" value="{{logintoken}}">
                    <input type="hidden" name="username" value="guest" />
                    <input type="hidden" name="password" value="guest" />
                    <button class="btn btn-outline-light btn-lg fw-semibold mt-2 px-5" type="submit" id="loginguestbtn">{{#str}}loginguest{{/str}}</button>
                </form>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="login-divider my-4"></div>
';
                $buffer .= $indent . '                <h2 class="login-heading mb-1">';
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                    <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                    <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                    <button class="btn btn-outline-light btn-lg fw-semibold mt-2 px-5" type="submit" id="loginguestbtn">';
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section375a35319501996b44a13edb0d72bdb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-lg-6 col-md-12 right-column text-white px-5" style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;">
            {{#hasinstructions}}
                <div class="login-divider mb-4"></div>
                <div class="login-instructions {{#cansignup}}mb-3{{/cansignup}}" style="font-size: 1.125rem; line-height: 1.5;">
                    <h2 class="login-heading mb-3" style="font-weight: 700; font-size: 2rem;">{{#str}}firsttime{{/str}}</h2>
                    {{{instructions}}}
                </div>
            {{/hasinstructions}}

            {{#canloginasguest}}
                <div class="login-divider my-4"></div>
                <h2 class="login-heading mb-1">{{#str}}someallowguest{{/str}}</h2>
                <form action="{{loginurl}}" method="post" id="guestlogin">
                    <input type="hidden" name="logintoken" value="{{logintoken}}">
                    <input type="hidden" name="username" value="guest" />
                    <input type="hidden" name="password" value="guest" />
                    <button class="btn btn-outline-light btn-lg fw-semibold mt-2 px-5" type="submit" id="loginguestbtn">{{#str}}loginguest{{/str}}</button>
                </form>
            {{/canloginasguest}}

            <div class="login-divider my-4"></div>
            <div class="d-flex justify-content-center gap-3">
                {{#languagemenu}}
                    <div class="login-languagemenu">
                        {{>core/action_menu}}
                    </div>
                    <div class="divider border-start align-self-center mx-3"></div>
                {{/languagemenu}}
                <button type="button" class="btn btn-outline-light fw-semibold" data-modal="alert" data-modal-title-str=\'["cookiesenabled", "core"]\' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'>
                    {{#str}}cookiesnotice{{/str}}
                </button>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="col-lg-6 col-md-12 right-column text-white px-5" style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;">
';
                $value = $context->find('hasinstructions');
                $buffer .= $this->section8befa192d97b59930ea8f608e9ca6156($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('canloginasguest');
                $buffer .= $this->sectionD251f081e0b3ae5fe7e3176215e6576f($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="login-divider my-4"></div>
';
                $buffer .= $indent . '            <div class="d-flex justify-content-center gap-3">
';
                $value = $context->find('languagemenu');
                $buffer .= $this->section31568b13f586f5122acc1e6d91195e8e($context, $indent, $value);
                $buffer .= $indent . '                <button type="button" class="btn btn-outline-light fw-semibold" data-modal="alert" data-modal-title-str=\'["cookiesenabled", "core"]\' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb316c033dbb6434eebf557c64e10bf5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            require([\'core_form/events\'], function(FormEvent) {
                function autoFocus() {
                    const userNameField = document.getElementById(\'username\');
                    if (userNameField.value.length == 0) {
                        userNameField.focus();
                    } else {
                        document.getElementById(\'password\').focus();
                    }
                }
                autoFocus();
                window.addEventListener(FormEvent.eventTypes.fieldStructureChanged, autoFocus);
            });
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            require([\'core_form/events\'], function(FormEvent) {
';
                $buffer .= $indent . '                function autoFocus() {
';
                $buffer .= $indent . '                    const userNameField = document.getElementById(\'username\');
';
                $buffer .= $indent . '                    if (userNameField.value.length == 0) {
';
                $buffer .= $indent . '                        userNameField.focus();
';
                $buffer .= $indent . '                    } else {
';
                $buffer .= $indent . '                        document.getElementById(\'password\').focus();
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                autoFocus();
';
                $buffer .= $indent . '                window.addEventListener(FormEvent.eventTypes.fieldStructureChanged, autoFocus);
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb31e0a905855a4df03d13e2bbd239e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        document.getElementById(\'loginerrormessage\').focus();
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        document.getElementById(\'loginerrormessage\').focus();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf8ed2a653223b955509959d51115f73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'core/togglesensitive\'], function(ToggleSensitive) {
            ToggleSensitive.init("password", {{smallscreensonly}});
        });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        require([\'core/togglesensitive\'], function(ToggleSensitive) {
';
                $buffer .= $indent . '            ToggleSensitive.init("password", ';
                $value = $this->resolveValue($context->find('smallscreensonly'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF134befbc907907019eac63cfee377f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            Submit.init("loginguestbtn");
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            Submit.init("loginguestbtn");
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd70118972f2aa9f3ba2fe4ac8b9b9d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^error}}
        {{#autofocusform}}
            require([\'core_form/events\'], function(FormEvent) {
                function autoFocus() {
                    const userNameField = document.getElementById(\'username\');
                    if (userNameField.value.length == 0) {
                        userNameField.focus();
                    } else {
                        document.getElementById(\'password\').focus();
                    }
                }
                autoFocus();
                window.addEventListener(FormEvent.eventTypes.fieldStructureChanged, autoFocus);
            });
        {{/autofocusform}}
    {{/error}}
    {{#error}}
        document.getElementById(\'loginerrormessage\').focus();
    {{/error}}
    {{#togglepassword}}
        require([\'core/togglesensitive\'], function(ToggleSensitive) {
            ToggleSensitive.init("password", {{smallscreensonly}});
        });
    {{/togglepassword}}
    require([\'core_form/submit\'], function(Submit) {
        Submit.init("loginbtn");
        {{#canloginasguest}}
            Submit.init("loginguestbtn");
        {{/canloginasguest}}
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('error');
                if (empty($value)) {
                    
                    $value = $context->find('autofocusform');
                    $buffer .= $this->sectionFb316c033dbb6434eebf557c64e10bf5($context, $indent, $value);
                }
                $value = $context->find('error');
                $buffer .= $this->sectionEb31e0a905855a4df03d13e2bbd239e8($context, $indent, $value);
                $value = $context->find('togglepassword');
                $buffer .= $this->sectionAf8ed2a653223b955509959d51115f73($context, $indent, $value);
                $buffer .= $indent . '    require([\'core_form/submit\'], function(Submit) {
';
                $buffer .= $indent . '        Submit.init("loginbtn");
';
                $value = $context->find('canloginasguest');
                $buffer .= $this->sectionF134befbc907907019eac63cfee377f3($context, $indent, $value);
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
