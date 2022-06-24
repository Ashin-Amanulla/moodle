<?php

class __Mustache_fe9cbf620085456bf2dca22cb3e6317c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="loading-placeholder-content" aria-hidden="true">
';
        // 'cards' section
        $value = $context->find('cards');
        $buffer .= $this->sectionEec4b2783155f8f3af3abf56ae08ce8f($context, $indent, $value);
        // 'list' section
        $value = $context->find('list');
        $buffer .= $this->sectionC17006aea523256ae596d7d23e916da4($context, $indent, $value);
        // 'summary' section
        $value = $context->find('summary');
        $buffer .= $this->sectionC17006aea523256ae596d7d23e916da4($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionEec4b2783155f8f3af3abf56ae08ce8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
            {{> core_course/placeholder-course }}
            {{> core_course/placeholder-course }}
            {{> core_course/placeholder-course }}
            {{> core_course/placeholder-course }}
        </div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
';
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC17006aea523256ae596d7d23e916da4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul class="list-group">
            {{> block_myoverview/placeholder-course-list-item }}
            {{> block_myoverview/placeholder-course-list-item }}
            {{> block_myoverview/placeholder-course-list-item }}
            {{> block_myoverview/placeholder-course-list-item }}
        </ul>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <ul class="list-group">
';
                if ($partial = $this->mustache->loadPartial('block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
