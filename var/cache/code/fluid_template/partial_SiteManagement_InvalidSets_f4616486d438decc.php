<?php
class partial_SiteManagement_InvalidSets_f4616486d438decc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
    }
    /**
 * section infobox
 */
public function section_3e6f2e8fce058b65(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
        <ul class="alert-message">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
                <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('invalidSet.name'),
'1' => $renderingContext->getVariableProvider()->getByPath('invalidSet.context'),
];

$arguments9 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('invalidSet.error.label'),
'arguments' => $array11,
];

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10)]);

$output8 .= '</li>
            ';
return $output8;
};

$arguments6 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('site.invalidSets'),
'as' => 'invalidSet',
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7);

$output5 .= '
        </ul>
    ';
return $output5;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_ERROR',
];

$arguments1 = [
'message' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4),
'title' => $renderingContext->getVariableProvider()->getByPath('title'),
];
$renderChildrenClosure2 = ($arguments1['message'] !== null) ? function() use ($arguments1) { return $arguments1['message']; } : $renderChildrenClosure2;
$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
';

    return $output0;
}
/**
 * section alert
 */
public function section_f4d1a2430d6e3a17(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output12 = '';

$output12 .= '
    <div class="alert alert-danger mt-2">
        <div class="alert-inner">
            <div class="alert-content">
                <div class="alert-title">';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title')]);

$output12 .= '</div>
                <ul class="alert-message">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '
                        <li>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('invalidSet.name'),
'1' => $renderingContext->getVariableProvider()->getByPath('invalidSet.context'),
];

$arguments16 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('invalidSet.error.label'),
'arguments' => $array18,
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17)]);

$output15 .= '</li>
                    ';
return $output15;
};

$arguments13 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('site.invalidSets'),
'as' => 'invalidSet',
];

$output12 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments13, $renderingContext, $renderChildrenClosure14);

$output12 .= '
                </ul>
            </div>
        </div>
    </div>
';

    return $output12;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output19 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array21 = [
'0' => $renderingContext->getVariableProvider()->getByPath('site.invalidSets'),
];

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments20 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression22(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output23 = '';

$output23 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array27 = [
'0' => $renderingContext->getVariableProvider()->getByPath('renderMode'),
'1' => ' == "infobox"',
];

$expression28 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "infobox");};

$arguments26 = [
'then' => 'infobox',
'else' => 'alert',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression28(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)),
    $renderingContext
),
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments26, $renderingContext)
;
};

$arguments24 = [
'value' => NULL,
'name' => 'renderMode',
];
$renderChildrenClosure25 = ($arguments24['value'] !== null) ? function() use ($arguments24) { return $arguments24['value']; } : $renderChildrenClosure25;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25)]);

$output23 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:error.site.invalidSetDependencies',
];

$array31 = [
'site' => $renderingContext->getVariableProvider()->getByPath('site'),
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33),
];

$arguments29 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => $renderingContext->getVariableProvider()->getByPath('renderMode'),
'arguments' => $array31,
];

$output23 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments29, $renderingContext, $renderChildrenClosure30);

$output23 .= '
';
return $output23;
},
];

$output19 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments20, $renderingContext)
;

$output19 .= '

';

$output19 .= '';

$output19 .= '

';

$output19 .= '';

$output19 .= '
';

    return $output19;
}

}

#