<?php

class __Mustache_2cf0465085752d0afc3d3b7d9ea7b847 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '/* Fade-in & slide-up animation on load */
';
        $buffer .= $indent . '@keyframes fadeSlideUp {
';
        $buffer .= $indent . '  0% {opacity: 0; transform: translateY(30px);}
';
        $buffer .= $indent . '  100% {opacity: 1; transform: translateY(0);}
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Gradient background animation */
';
        $buffer .= $indent . '@keyframes gradientBG {
';
        $buffer .= $indent . '  0% {background-position: 0% 50%;}
';
        $buffer .= $indent . '  50% {background-position: 100% 50%;}
';
        $buffer .= $indent . '  100% {background-position: 0% 50%;}
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'body {
';
        $buffer .= $indent . '  background: linear-gradient(-45deg, #E6FFF5, #F8FFFE, #E0F7FA, #CAF7E3);
';
        $buffer .= $indent . '  background-size: 400% 400%;
';
        $buffer .= $indent . '  animation: gradientBG 15s ease infinite;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Vision container pop effect */
';
        $buffer .= $indent . '.vision_container div {
';
        $buffer .= $indent . '  animation: fadeSlideUp 1.2s ease-out forwards;
';
        $buffer .= $indent . '  transition: transform 0.4s, box-shadow 0.4s;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.vision_container div:hover {
';
        $buffer .= $indent . '  transform: scale(1.03);
';
        $buffer .= $indent . '  box-shadow: 0 12px 25px rgba(0,0,0,0.2);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Login Cards animation */
';
        $buffer .= $indent . '.login-card {
';
        $buffer .= $indent . '  opacity: 0;
';
        $buffer .= $indent . '  transform: translateY(30px);
';
        $buffer .= $indent . '  animation: fadeSlideUp 1s ease forwards;
';
        $buffer .= $indent . '  transition: transform 0.3s, box-shadow 0.3s;
';
        $buffer .= $indent . '  cursor: pointer;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.login-card:nth-child(1) { animation-delay: 0.3s; }
';
        $buffer .= $indent . '.login-card:nth-child(2) { animation-delay: 0.6s; }
';
        $buffer .= $indent . '.login-card:nth-child(3) { animation-delay: 0.9s; }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.login-card:hover {
';
        $buffer .= $indent . '  transform: translateY(-6px) scale(1.02);
';
        $buffer .= $indent . '  box-shadow: 0 12px 18px rgba(0,0,0,0.12);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Button hover effect */
';
        $buffer .= $indent . 'button {
';
        $buffer .= $indent . '  transition: background 0.3s, transform 0.2s, box-shadow 0.2s;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . 'button:hover {
';
        $buffer .= $indent . '  background: #f1f1f1;
';
        $buffer .= $indent . '  transform: translateY(-3px);
';
        $buffer .= $indent . '  box-shadow: 0 6px 14px rgba(0,0,0,0.15);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div id="page-wrapper">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Heading Section -->
';
        $buffer .= $indent . '        <div style="text-align: center; padding: 30px; background:transparent;">
';
        $buffer .= $indent . '            <h1 style="background:linear-gradient(to right,#1F4C8C,#00cc99);
';
        $buffer .= $indent . '                       -webkit-background-clip:text; -webkit-text-fill-color:transparent;
';
        $buffer .= $indent . '                       font-size: 36px; font-weight: bold;
';
        $buffer .= $indent . '                       margin-bottom: 15px; animation: fadeSlideUp 1s;">
';
        $buffer .= $indent . '                Circuit Makers Laboratory
';
        $buffer .= $indent . '            </h1>
';
        $buffer .= $indent . '            <p style="font-size:16px; color:#333; margin:0; animation: fadeSlideUp 1.2s;">
';
        $buffer .= $indent . '                A gamified renewable energy learning ecosystem powered by AI, <br>
';
        $buffer .= $indent . '                designed to inspire the next generation of sustainable technology leaders.
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Split Layout -->
';
        $buffer .= $indent . '        <div style="display:grid; grid-template-columns:1.2fr 1fr; min-height:130vh;">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Left Side (Vision Box) -->
';
        $buffer .= $indent . '            <div class="vision_container">
';
        $buffer .= $indent . '                <div style="background-color:#50C878; width:640px; padding:30px;
';
        $buffer .= $indent . '                            border-radius:12px; color:white; margin:40px 0 0 45px;">
';
        $buffer .= $indent . '                    <h3 style="padding-left:8px; border-left:6px solid #fff;
';
        $buffer .= $indent . '                               font-size:22px; font-weight:bold; margin-bottom:18px;">
';
        $buffer .= $indent . '                        Our Vision
';
        $buffer .= $indent . '                    </h3>
';
        $buffer .= $indent . '                    <p>...</p>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Right Side (Login Options + Tabs + Main Content) -->
';
        $buffer .= $indent . '            <div style="padding:40px;">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <div class="page-heading-menu" style="margin-bottom:20px;">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <h2 style="background:linear-gradient(to right,#1F4C8C,#00cc99);
';
        $buffer .= $indent . '                           -webkit-background-clip:text; -webkit-text-fill-color:transparent;
';
        $buffer .= $indent . '                           font-size:28px; font-weight:bold; margin-top: -50px;">
';
        $buffer .= $indent . '                    Choose Your Access
';
        $buffer .= $indent . '                </h2>
';
        $buffer .= $indent . '                <p style="color:#808080; font-size:14px; margin-bottom:30px;">
';
        $buffer .= $indent . '                    Select your preferred way to explore SCIENTIA
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <!-- Login Cards -->
';
        $buffer .= $indent . '                <div style="display:flex; flex-direction:column; gap:20px;">
';
        $buffer .= $indent . '                    
';
        $buffer .= $indent . '                    <!-- Student -->
';
        $buffer .= $indent . '                    <div class="login-card"
';
        $buffer .= $indent . '                         onclick="window.location.href=\'https://lms2.circuitmakers.in/login/\';"
';
        $buffer .= $indent . '                         style="background:#F6FEF5; border:1px solid #50C878;
';
        $buffer .= $indent . '                                border-radius:8px; padding:20px; max-width:480px;">
';
        $buffer .= $indent . '                        <h3 style="color:#00a67c; font-size:18px; font-weight:bold; margin-bottom:10px;">
';
        $buffer .= $indent . '                            👩‍🎓 Student Login
';
        $buffer .= $indent . '                        </h3>
';
        $buffer .= $indent . '                        <ul style="font-size:14px; color:#444; padding-left:18px; 
';
        $buffer .= $indent . '                                   line-height:1.6; display: grid; grid-template-columns: repeat(2, 1fr); gap: 8px;">
';
        $buffer .= $indent . '                            <li>Progress tracking & badges</li>
';
        $buffer .= $indent . '                            <li>Community participation</li>
';
        $buffer .= $indent . '                            <li>School leaderboards</li>
';
        $buffer .= $indent . '                            <li>AI-powered learning assistant</li>
';
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <!-- Industry -->
';
        $buffer .= $indent . '                    <div class="login-card"
';
        $buffer .= $indent . '                         onclick="window.location.href=\'https://lms2.circuitmakers.in/login/\';"
';
        $buffer .= $indent . '                         style="background: #F6FEF5; border:1px solid #2b4cbc;
';
        $buffer .= $indent . '                                border-radius:12px; padding:20px; max-width:480px;">
';
        $buffer .= $indent . '                        <h3 style="color:#2b4cbc; font-size:18px; font-weight:bold; margin-bottom:10px;">
';
        $buffer .= $indent . '                            🏭 Industry Login
';
        $buffer .= $indent . '                        </h3>
';
        $buffer .= $indent . '                        <ul>
';
        $buffer .= $indent . '                            <li>Talent discovery & recruitment</li>
';
        $buffer .= $indent . '                            <li>Workshop facilitation</li>
';
        $buffer .= $indent . '                            <li>CSR impact tracking</li>
';
        $buffer .= $indent . '                            <li>Content collaboration</li>
';
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <!-- College -->
';
        $buffer .= $indent . '                    <div class="login-card"
';
        $buffer .= $indent . '                         onclick="window.location.href=\'https://lms2.circuitmakers.in/login/\';"
';
        $buffer .= $indent . '                         style="background:#F0FFF8; border:1px solid #7a32c2;
';
        $buffer .= $indent . '                                border-radius:12px; padding:20px; max-width:480px;">
';
        $buffer .= $indent . '                        <h3 style="color:#7a32c2; font-size:18px; font-weight:bold; margin-bottom:10px;">
';
        $buffer .= $indent . '                            🎓 College Login
';
        $buffer .= $indent . '                        </h3>
';
        $buffer .= $indent . '                        <ul>
';
        $buffer .= $indent . '                            <li>Curriculum integration</li>
';
        $buffer .= $indent . '                            <li>Faculty collaboration tools</li>
';
        $buffer .= $indent . '                            <li>Student progress analytics</li>
';
        $buffer .= $indent . '                            <li>Certification management</li>
';
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <!-- Guest -->
';
        $buffer .= $indent . '                <button>
';
        $buffer .= $indent . '                    Continue as Guest →
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '                <div style="margin-top:8px; font-size:12px; color:#888;">
';
        $buffer .= $indent . '                    Explore the platform with limited features
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="main-content-block" style="margin-top:40px;">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
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
        if ($partial = $this->mustache->loadPartial('theme_boost/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</body>
';

        return $buffer;
    }
}
