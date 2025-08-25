<?php

class __Mustache_e6b69372cc88379e929d3190dbc5a82c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '/* Container for the grid - adds padding and a subtle background gradient */
';
        $buffer .= $indent . '.jobboard-grid {
';
        $buffer .= $indent . '    display: grid;
';
        $buffer .= $indent . '    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
';
        $buffer .= $indent . '    gap: 1.5rem;
';
        $buffer .= $indent . '    padding: 1.5rem;
';
        $buffer .= $indent . '    background: linear-gradient(135deg, #f0f4ff 0%, #d9e4ff 100%);
';
        $buffer .= $indent . '    border-radius: 12px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Individual job card partial container */
';
        $buffer .= $indent . '.local_jobboard-job_card {
';
        $buffer .= $indent . '    background: linear-gradient(145deg, #ffffff, #e6f0ff);
';
        $buffer .= $indent . '    border-radius: 10px;
';
        $buffer .= $indent . '    box-shadow: 0 4px 12px rgba(100, 115, 140, 0.15);
';
        $buffer .= $indent . '    padding: 1rem 1.25rem;
';
        $buffer .= $indent . '    transition: transform 0.3s ease, box-shadow 0.3s ease;
';
        $buffer .= $indent . '    border: 1px solid #c3d0f9;
';
        $buffer .= $indent . '    display: flex;
';
        $buffer .= $indent . '    flex-direction: column;
';
        $buffer .= $indent . '    justify-content: space-between;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Hover effect for each job card */
';
        $buffer .= $indent . '.local_jobboard-job_card:hover {
';
        $buffer .= $indent . '    box-shadow: 0 8px 24px rgba(100, 115, 140, 0.3);
';
        $buffer .= $indent . '    transform: translateY(-5px);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Enhance text colors for readability */
';
        $buffer .= $indent . '.local_jobboard-job_card h3 {
';
        $buffer .= $indent . '    color: #003366;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '    margin-bottom: 0.5rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.local_jobboard-job_card p {
';
        $buffer .= $indent . '    color: #2a3a5a;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* Optional: style buttons or links inside cards */
';
        $buffer .= $indent . '.local_jobboard-job_card a.btn {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #5a9fff, #1a64d8);
';
        $buffer .= $indent . '    color: white;
';
        $buffer .= $indent . '    border: none;
';
        $buffer .= $indent . '    padding: 0.5rem 1rem;
';
        $buffer .= $indent . '    border-radius: 6px;
';
        $buffer .= $indent . '    transition: background 0.25s ease;
';
        $buffer .= $indent . '    text-align: center;
';
        $buffer .= $indent . '    text-decoration: none;
';
        $buffer .= $indent . '    font-weight: 600;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.local_jobboard-job_card a.btn:hover {
';
        $buffer .= $indent . '    background: linear-gradient(90deg, #1a64d8, #084cbf);
';
        $buffer .= $indent . '    color: #e0e8ff;
';
        $buffer .= $indent . '}
';

        return $buffer;
    }
}
