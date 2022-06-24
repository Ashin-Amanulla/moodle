<?php

class __Mustache_f6171b4d43752ff7a548ad74e785d1ad extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card dashboard-card" role="listitem" data-region="course-content" data-course-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/course/view.php?id=';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= $value;
        $buffer .= '" tabindex="-1">
';
        $buffer .= $indent . '        <div class="card-img dashboard-card-img" style="background-image: url(';
        $value = $this->resolveValue($context->find('image'), $context);
        $buffer .= $value;
        $buffer .= ');">
';
        $buffer .= $indent . '            <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section770d421ad5e692e1604f4cccb1a279f2($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '            <div class="course-category">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('category'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        // 'hasenrolmenticons' section
        $value = $context->find('hasenrolmenticons');
        $buffer .= $this->section3ea3abe39496fefcbc05321aa2ccdf40($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <div class="card-body pr-1 course-info-container">
';
        $buffer .= $indent . '        <div class="d-flex align-items-start">
';
        $buffer .= $indent . '            <div class="w-100 text-truncate">
';
        $buffer .= $indent . '                <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/course/view.php?id=';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= $value;
        $buffer .= '" class="aalink coursename mr-2 mb-1">
';
        $buffer .= $indent . '                    <span class="sr-only">';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '                    <span class="multiline">';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="course-summary">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('summary'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        // 'hasprogress' section
        $value = $context->find('hasprogress');
        $buffer .= $this->section5a9ddcee6db160db0cb9728cf5b7e266($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hascontacts' section
        $value = $context->find('hascontacts');
        $buffer .= $this->sectionB561c2445ac2358b636a5b7eb8be65c4($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section770d421ad5e692e1604f4cccb1a279f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:courseimage, core_course';
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
                
                $buffer .= 'aria:courseimage, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7aa3e36a640faac36e04bd6f6e7e5aa1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="enrolmenticon">
                            {{{.}}}
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
                
                $buffer .= $indent . '                        <div class="enrolmenticon">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ea3abe39496fefcbc05321aa2ccdf40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="enrolmenticons d-flex">
                    {{#enrolmenticons}}
                        <div class="enrolmenticon">
                            {{{.}}}
                        </div>
                    {{/enrolmenticons}}
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
                
                $buffer .= $indent . '                <div class="enrolmenticons d-flex">
';
                // 'enrolmenticons' section
                $value = $context->find('enrolmenticons');
                $buffer .= $this->section7aa3e36a640faac36e04bd6f6e7e5aa1($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a9ddcee6db160db0cb9728cf5b7e266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="d-flex align-items-start">
            <div class="card-footer dashboard-card-footer border-0 bg-white w-100">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{{progress}}}" style="width: {{{progress}}}%" aria-valuemin="0" aria-valuemax="{{{progress}}}"></div>
                </div>
                <p class="mb-0">{{{progress}}}% completo</p>
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
                
                $buffer .= $indent . '        <div class="d-flex align-items-start">
';
                $buffer .= $indent . '            <div class="card-footer dashboard-card-footer border-0 bg-white w-100">
';
                $buffer .= $indent . '                <div class="progress">
';
                $buffer .= $indent . '                    <div class="progress-bar" role="progressbar" aria-valuenow="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= $value;
                $buffer .= '" style="width: ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= $value;
                $buffer .= '%" aria-valuemin="0" aria-valuemax="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= $value;
                $buffer .= '"></div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <p class="mb-0">';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= $value;
                $buffer .= '% completo</p>
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

    private function section7cae97fd79b23c5908910c0acb121909(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{config.wwwroot}}/user/profile.php?id={{{id}}}" class="contact" data-toggle="tooltip" title="{{{fullname}}}">
                    <img src="{{{userpicture}}}" class="rounded-circle" alt="{{{fullname}}}">
                    <span>{{{fullname}}}</span>
                </a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/user/profile.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= $value;
                $buffer .= '" class="contact" data-toggle="tooltip" title="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('userpicture'), $context);
                $buffer .= $value;
                $buffer .= '" class="rounded-circle" alt="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                    <span>';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB561c2445ac2358b636a5b7eb8be65c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="course-contacts">
            {{#contacts}}
                <a href="{{config.wwwroot}}/user/profile.php?id={{{id}}}" class="contact" data-toggle="tooltip" title="{{{fullname}}}">
                    <img src="{{{userpicture}}}" class="rounded-circle" alt="{{{fullname}}}">
                    <span>{{{fullname}}}</span>
                </a>
            {{/contacts}}
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
                
                $buffer .= $indent . '        <div class="course-contacts">
';
                // 'contacts' section
                $value = $context->find('contacts');
                $buffer .= $this->section7cae97fd79b23c5908910c0acb121909($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
