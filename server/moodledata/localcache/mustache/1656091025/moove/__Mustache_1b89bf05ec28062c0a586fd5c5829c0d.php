<?php

class __Mustache_1b89bf05ec28062c0a586fd5c5829c0d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'node' section
        $value = $context->find('node');
        $buffer .= $this->sectionAd7a449c35d53f39ec5eccb6eb853bf1($context, $indent, $value);

        return $buffer;
    }

    private function sectionE4b08b5d95fc9192ab15a617ff292a0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li><a href="{{{action}}}">{{text}}</a></li>
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
                
                $buffer .= $indent . '                    <li><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbc6888f8cc9a8aa623e32c7282bf31f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#display}}
                    <li><a href="{{{action}}}">{{text}}</a></li>
                {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->sectionE4b08b5d95fc9192ab15a617ff292a0c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd7a449c35d53f39ec5eccb6eb853bf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="container-fluid">
    <div class="row">
        <ul class="list-unstyled ml-0">
            {{#node.children}}
                {{#display}}
                    <li><a href="{{{action}}}">{{text}}</a></li>
                {{/display}}
            {{/node.children}}
        </ul>
    </div>
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
                
                $buffer .= $indent . '<div class="container-fluid">
';
                $buffer .= $indent . '    <div class="row">
';
                $buffer .= $indent . '        <ul class="list-unstyled ml-0">
';
                // 'node.children' section
                $value = $context->findDot('node.children');
                $buffer .= $this->sectionDbc6888f8cc9a8aa623e32c7282bf31f($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
