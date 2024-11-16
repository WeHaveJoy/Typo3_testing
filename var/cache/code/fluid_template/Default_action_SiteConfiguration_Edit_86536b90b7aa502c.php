<?php
class Default_action_SiteConfiguration_Edit_86536b90b7aa502c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'Module';
    }
    public function hasLayout(): bool {
        return true;
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
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/context-menu.js',
'1' => '@typo3/backend/modal.js',
'2' => '@typo3/backend/site-inline-actions.js',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addJsInlineLabels' => NULL,
'addInlineSettings' => NULL,
'includeJavaScriptModules' => $array3,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$array6 = [
'site' => $renderingContext->getVariableProvider()->getByPath('site'),
];

$arguments4 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'SiteManagement/InvalidSets',
'arguments' => $array6,
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5);

$output0 .= '

<form
    action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'parameters' => [],
'referenceType' => 'absolute',
'route' => 'site_configuration.save',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8)]);

$output0 .= '"
    method="post"
    enctype="multipart/form-data"
    name="editform"
    id="siteConfigurationController"
>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('formEngineHtml');
};

$arguments9 = [
'value' => NULL,
];

$output0 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output0 .= '

    <input type="hidden" name="returnUrl" value="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('returnUrl');
};

$arguments11 = [
'value' => NULL,
];

$output0 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output0 .= '" />
    <input type="hidden" name="closeDoc" value="0" />
    <input type="hidden" name="doSave" value="0" />
    <input type="hidden" name="rootPageId" value="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootPageId')]);

$output0 .= '" />

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('formEngineFooter');
};

$arguments13 = [
'value' => NULL,
];

$output0 .= isset($arguments13['value']) ? $arguments13['value'] : $renderChildrenClosure14();

$output0 .= '
</form>

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output15 = '';

$output15 .= '

';

$output15 .= '';

$output15 .= '

';

$output15 .= '';

$output15 .= '


';

    return $output15;
}

}

#