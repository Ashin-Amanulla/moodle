<?php

class __Mustache_5c20fdd03fbe47aafada43454e18e912 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li
';
        $buffer .= $indent . '    class="activity activity-wrapper ';
        $value = $this->resolveValue($context->find('module'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' modtype_';
        $value = $this->resolveValue($context->find('module'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' ';
        // 'hasinfo' section
        $value = $context->find('hasinfo');
        $buffer .= $this->section83f4cf4620de8b26d812ca106e959b0f($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    id="';
        $value = $this->resolveValue($context->find('anchor'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-for="cmitem"
';
        $buffer .= $indent . '    data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '>
';
        // 'cmformat' section
        $value = $context->find('cmformat');
        $buffer .= $this->sectionE2df86df6c46955a889c8acf64e40997($context, $indent, $value);
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function section83f4cf4620de8b26d812ca106e959b0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hasinfo';
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
                
                $buffer .= 'hasinfo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2df86df6c46955a889c8acf64e40997(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{$ core_courseformat/local/content/cm}}
        {{> core_courseformat/local/content/cm}}
    {{/ core_courseformat/local/content/cm}}
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
                
                $blockFunction = $context->findInBlock('core_courseformat/local/content/cm');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm')) {
                        $buffer .= $partial->renderInternal($context, $indent . '        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
