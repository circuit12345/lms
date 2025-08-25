<?php

class __Mustache_c3181d4d26876f8ad2cbb08a93ed2f7a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
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
        $buffer .= $indent . '        <div style="text-align: center; padding: 20px; background-color: #E6FFF5;">
';
        $buffer .= $indent . '            <h1 style="background:linear-gradient(to right,#1F4C8C,#00cc99); -webkit-background-clip:text; -webkit-text-fill-color:transparent; font-size: 28px; font-weight: bold;  margin-bottom: 10px;">
';
        $buffer .= $indent . '                SCIENTIA
';
        $buffer .= $indent . '            </h1>
';
        $buffer .= $indent . '            <p style="font-size: 16px; color: #333; margin: 0;">
';
        $buffer .= $indent . '                A gamified renewable energy learning ecosystem powered by AI, designed <br>
';
        $buffer .= $indent . '                to inspire the next generation of sustainable technology leaders.
';
        $buffer .= $indent . '            </p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Split Layout -->
';
        $buffer .= $indent . '        <div style="display:grid; grid-template-columns:1.2fr 1fr; min-height:130vh; background:linear-gradient(#E6FFF5, #F8FFFE);">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Left Side (Vision Box) -->
';
        $buffer .= $indent . '            <div class="vision_container">
';
        $buffer .= $indent . '                <div style="background-color:#50C878; width:640px; padding:30px; border-radius:12px; color:white; box-shadow:0 6px 12px rgba(0,0,0,0.15); margin:40px 0 0 45px;">
';
        $buffer .= $indent . '                    <h3 style="padding-left:8px; border-left:6px solid #fff; font-size:22px; font-weight:bold; margin-bottom:18px;">Our Vision</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <p style="font-size:15px; line-height:1.5; margin-bottom:14px;">
';
        $buffer .= $indent . '                        SCIENTIA transforms renewable energy education through innovative technology and community
';
        $buffer .= $indent . '                        collaboration, empowering students and industry professionals with cutting-edge knowledge and practical skills.
';
        $buffer .= $indent . '                    </p>
';
        $buffer .= $indent . '                    <p style="font-size:15px; line-height:1.5; margin-bottom:14px;">
';
        $buffer .= $indent . '                        Our platform bridges academic learning with industry application, creating a dynamic ecosystem where
';
        $buffer .= $indent . '                        AI-driven personalization and gamified experiences build tomorrow\'s renewable energy leaders for India\'s green transformation.
';
        $buffer .= $indent . '                    </p>
';
        $buffer .= $indent . '                    <p style="font-size:15px; line-height:1.5;">
';
        $buffer .= $indent . '                        Join us in democratizing renewable energy education and creating sustainable solutions for tomorrow\'s challenges.
';
        $buffer .= $indent . '                    </p>
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
        $buffer .= $indent . '                <!-- Access Section -->
';
        $buffer .= $indent . '                <h2 style="background:linear-gradient(to right,#1F4C8C,#00cc99); -webkit-background-clip:text; -webkit-text-fill-color:transparent; font-size:28px; font-weight:bold;margin-top : -50px;">
';
        $buffer .= $indent . '                    Choose Your Access
';
        $buffer .= $indent . '                </h2>
';
        $buffer .= $indent . '                <p style="color:#808080; font-size:14px; margin-bottom:30px;">Select your preferred way to explore SCIENTIA</p>
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
        $buffer .= $indent . '                    <div onclick="window.location.href=\'https://lms2.circuitmakers.in/login/\';" 
';
        $buffer .= $indent . '                        style="background: #F6FEF5; border:1px solid #50C878; border-radius:8px; padding:20px; max-width:480px; cursor:pointer; box-shadow:0 4px 10px rgba(0,0,0,0.05);">
';
        $buffer .= $indent . '                        <h3 style="color:#00a67c; font-size:18px; font-weight:bold; margin-bottom:10px;">👩‍🎓 Student Login</h3>
';
        $buffer .= $indent . '                        <ul style="font-size:14px; color:#444; padding-left:18px; line-height:1.6; display: grid; grid-template-columns: repeat(2, 1fr); gap: 8px;">
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
        $buffer .= $indent . '                    <div onclick="window.location.href=\'https://lms2.circuitmakers.in/login/\';" 
';
        $buffer .= $indent . '                        style="background: #F6FEF5; border:1px solid #2b4cbc; border-radius:12px; padding:20px; max-width:480px; cursor:pointer; box-shadow:0 4px 10px rgba(0,0,0,0.05);">
';
        $buffer .= $indent . '                        <h3 style="color:#2b4cbc; font-size:18px; font-weight:bold; margin-bottom:10px;">🏭 Industry Login</h3>
';
        $buffer .= $indent . '                        <ul style="font-size:14px; color:#444; padding-left:18px; line-height:1.6; display: grid; grid-template-columns: repeat(2, 1fr); gap: 8px;">
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
        $buffer .= $indent . '                    <div onclick="window.location.href=\'https://lms2.circuitmakers.in/login/\';" 
';
        $buffer .= $indent . '                        style="background: #F0FFF8; border:1px solid #7a32c2; border-radius:12px; padding:20px; max-width:480px; cursor:pointer; box-shadow:0 4px 10px rgba(0,0,0,0.05);">
';
        $buffer .= $indent . '                        <h3 style="color: #7a32c2; font-size:18px; font-weight:bold; margin-bottom:10px;">🎓 College Login</h3>
';
        $buffer .= $indent . '                        <ul style="font-size:14px; color:#444; padding-left:18px; line-height:1.6; display: grid; grid-template-columns: repeat(2, 1fr); gap: 8px;">
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
        $buffer .= $indent . '                <button style="margin-top:20px; background:#fff; border:1px solid #ccc; padding:10px 18px; border-radius:8px; cursor:pointer; font-size:14px; color:#333; box-shadow:0 3px 6px rgba(0,0,0,0.05);">
';
        $buffer .= $indent . '                    Continue as Guest →
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '                <div style="margin-top:8px; font-size:12px; color:#888;">Explore the platform with limited features</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <!-- Main Content -->
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
