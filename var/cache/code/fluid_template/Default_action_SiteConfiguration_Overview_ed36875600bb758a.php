<?php
class Default_action_SiteConfiguration_Overview_ed36875600bb758a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
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
'0' => '@typo3/backend/modal.js',
'1' => '@typo3/backend/context-menu.js',
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

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.title',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments4, $renderingContext, $renderChildrenClosure5)]);

$output0 .= '</h1>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array7 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pages'),
];

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments6 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('duplicatedRootPages'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                    <ul>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                            <li>
                                <strong>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('rootPage'),
];

$arguments24 = [
'id' => NULL,
'default' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedRootPage.message',
'arguments' => $array26,
];

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments24, $renderingContext, $renderChildrenClosure25)]);

$output23 .= '
                                </strong>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('duplicateSites'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments27 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                                    <ul>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
$output33 = '';

$output33 .= '
                                            <li>';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('duplicateSite')]);

$output33 .= '</li>
                                        ';
return $output33;
};

$arguments31 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('duplicateSites'),
'as' => 'duplicateSite',
];

$output30 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments31, $renderingContext, $renderChildrenClosure32);

$output30 .= '
                                    </ul>
                                ';
return $output30;
},
];

$output23 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments27, $renderingContext)
;

$output23 .= '
                            </li>
                        ';
return $output23;
};

$arguments21 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('duplicatedRootPages'),
'key' => 'rootPage',
'as' => 'duplicateSites',
];

$output20 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments21, $renderingContext, $renderChildrenClosure22);

$output20 .= '
                    </ul>
                ';
return $output20;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedRootPage',
];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_WARNING',
];

$arguments14 = [
'message' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17),
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments18, $renderingContext, $renderChildrenClosure19),
];
$renderChildrenClosure15 = ($arguments14['message'] !== null) ? function() use ($arguments14) { return $arguments14['message']; } : $renderChildrenClosure15;
$output13 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments14, $renderingContext, $renderChildrenClosure15);

$output13 .= '
            ';
return $output13;
},
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments10, $renderingContext)
;

$output9 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array35 = [
'0' => $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints'),
];

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments34 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output37 = '';

$output37 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output44 = '';

$output44 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints.listing',
];

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments45, $renderingContext, $renderChildrenClosure46)]);

$output44 .= '
                    <ul>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                        <li>
                            <strong>';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item')]);

$output49 .= '</strong>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array51 = [
'0' => $renderingContext->getVariableProvider()->getByPath('schemes'),
];

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments50 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression52(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output53 = '';

$output53 .= '
                                <ul>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
$output56 = '';

$output56 .= '
                                        <li>';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('schema')]);

$output56 .= ' (';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count')]);

$output56 .= ')</li>
                                    ';
return $output56;
};

$arguments54 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('schemes'),
'key' => 'schema',
'as' => 'count',
];

$output53 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments54, $renderingContext, $renderChildrenClosure55);

$output53 .= '
                                </ul>
                            ';
return $output53;
},
];

$output49 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments50, $renderingContext)
;

$output49 .= '
                        </li>
                    ';
return $output49;
};

$arguments47 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints'),
'key' => 'item',
'as' => 'schemes',
];

$output44 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments47, $renderingContext, $renderChildrenClosure48);

$output44 .= '
                    </ul>
                ';
return $output44;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints',
];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$arguments42 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_WARNING',
];

$arguments38 = [
'message' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments40, $renderingContext, $renderChildrenClosure41),
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments42, $renderingContext, $renderChildrenClosure43),
];
$renderChildrenClosure39 = ($arguments38['message'] !== null) ? function() use ($arguments38) { return $arguments38['message']; } : $renderChildrenClosure39;
$output37 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output37 .= '
            ';
return $output37;
},
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments34, $renderingContext)
;

$output9 .= '

            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th colspan="2" class="nowrap align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.site',
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments57, $renderingContext, $renderChildrenClosure58)]);

$output9 .= '</th>
                            <th class="align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.siteIdentifier',
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments59, $renderingContext, $renderChildrenClosure60)]);

$output9 .= '</th>
                            <th class="align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};

$arguments61 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site_language.language',
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments61, $renderingContext, $renderChildrenClosure62)]);

$output9 .= '</th>
                            <th class="align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.baseUrl',
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments63, $renderingContext, $renderChildrenClosure64)]);

$output9 .= '</th>
                            <th class="align-top">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
$output67 = '';

$output67 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};

$arguments68 = [
'name' => 'rootPage',
'value' => $renderingContext->getVariableProvider()->getByPath('page'),
];
$renderChildrenClosure69 = ($arguments68['value'] !== null) ? function() use ($arguments68) { return $arguments68['value']; } : $renderChildrenClosure69;
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments68, $renderingContext, $renderChildrenClosure69)]);

$output67 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
$output72 = '';

$output72 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array74 = [
'0' => $renderingContext->getVariableProvider()->getByPath('rootLinePage.uid'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('page.uid'),
];

$expression75 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments73 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression75(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output76 = '';

$output76 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};

$arguments77 = [
'name' => 'rootPage',
'value' => $renderingContext->getVariableProvider()->getByPath('rootLinePage'),
];
$renderChildrenClosure78 = ($arguments77['value'] !== null) ? function() use ($arguments77) { return $arguments77['value']; } : $renderChildrenClosure78;
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments77, $renderingContext, $renderChildrenClosure78)]);

$output76 .= '
                                ';
return $output76;
},
];

$output72 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments73, $renderingContext)
;

$output72 .= '
                            ';
return $output72;
};

$arguments70 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('page.rootline'),
'as' => 'rootLinePage',
'iteration' => 'rootLinePageIterator',
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments70, $renderingContext, $renderChildrenClosure71);

$output67 .= '
                            <tr>
                                <td class="col-icon align-top">
                                    <button type="button"
                                        class="btn btn-link p-0"
                                        data-contextmenu-trigger="click"
                                        data-contextmenu-table="pages"
                                        data-contextmenu-uid="';

$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootPage.uid')]);

$output67 .= '"
                                        aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return NULL;
};

$arguments79 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.contextMenu.open',
];

$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments79, $renderingContext, $renderChildrenClosure80)]);

$output67 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};

$arguments81 = [
'size' => \TYPO3\CMS\Core\Imaging\IconSize::SMALL,
'alternativeMarkupIdentifier' => NULL,
'table' => 'pages',
'row' => $renderingContext->getVariableProvider()->getByPath('rootPage'),
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::class, $arguments81, $renderingContext, $renderChildrenClosure82);

$output67 .= '
                                    </button>
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array84 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments83 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression85(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output86 = '';

$output86 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
$output92 = '';

$output92 .= '
                                                ';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootPage.title')]);

$output92 .= '
                                            ';
return $output92;
};

$array89 = [
'site' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
return NULL;
};

$arguments90 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.editSiteConfiguration',
];

$arguments87 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'referenceType' => 'absolute',
'route' => 'site_configuration.edit',
'parameters' => $array89,
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments90, $renderingContext, $renderChildrenClosure91),
];

$output86 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::class, $arguments87, $renderingContext, $renderChildrenClosure88);

$output86 .= '
                                        ';
return $output86;
},
'__else' => function() use ($renderingContext) {
$output93 = '';

$output93 .= '
                                            ';

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootPage.title')]);

$output93 .= '
                                        ';
return $output93;
},
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments83, $renderingContext)
;

$output67 .= '
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array95 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments94 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression96(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output97 = '';

$output97 .= '
                                            <code>';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output97 .= '</code>
                                        ';
return $output97;
},
'__else' => function() use ($renderingContext) {
$output98 = '';

$output98 .= '
                                            <div>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
$output102 = '';

$output102 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};

$arguments103 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration',
];

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments103, $renderingContext, $renderChildrenClosure104)]);

$output102 .= '
                                                ';
return $output102;
};

$array101 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('page.uid'),
];

$arguments99 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'referenceType' => 'absolute',
'route' => 'site_configuration.edit',
'parameters' => $array101,
'class' => 'btn btn-primary',
];

$output98 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::class, $arguments99, $renderingContext, $renderChildrenClosure100);

$output98 .= '
                                            </div>
                                        ';
return $output98;
},
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments94, $renderingContext)
;

$output67 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array106 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.invalidSets'),
];

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments105 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression107(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output108 = '';

$output108 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$array111 = [
'site' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration'),
];

$arguments109 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'SiteManagement/InvalidSets',
'arguments' => $array111,
];

$output108 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments109, $renderingContext, $renderChildrenClosure110);

$output108 .= '
                                    ';
return $output108;
},
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments105, $renderingContext)
;

$output67 .= '
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array113 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration'),
];

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments112 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression114(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output115 = '';

$output115 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
$output118 = '';

$output118 .= '
                                            <div class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array120 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteLanguageIterator.isLast'),
];

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments119 = [
'then' => '',
'else' => 'mb-2',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression121(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)),
    $renderingContext
),
];

$output118 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments119, $renderingContext)
;

$output118 .= '">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array123 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteLanguage.enabled'),
];

$expression124 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments122 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression124(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output125 = '';

$output125 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
return NULL;
};

$arguments126 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier'),
];

$output125 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments126, $renderingContext, $renderChildrenClosure127);

$output125 .= ' ';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title')]);

$output125 .= ' <code>[';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId')]);

$output125 .= ']</code>
                                                    ';
return $output125;
},
'__else' => function() use ($renderingContext) {
$output128 = '';

$output128 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return NULL;
};

$arguments129 = [
'size' => 'small',
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier'),
'overlay' => 'overlay-hidden',
];

$output128 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments129, $renderingContext, $renderChildrenClosure130);

$output128 .= '
                                                        <span class="text-body-secondary">';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title')]);

$output128 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
return 'disabled';
};

$arguments131 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled',
];

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments131, $renderingContext, $renderChildrenClosure132)]);

$output128 .= ') <code>[';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId')]);

$output128 .= ']</code></span>
                                                    ';
return $output128;
},
];

$output118 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments122, $renderingContext)
;

$output118 .= '
                                            </div>
                                        ';
return $output118;
};

$arguments116 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages'),
'as' => 'siteLanguage',
'iteration' => 'siteLanguageIterator',
];

$output115 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments116, $renderingContext, $renderChildrenClosure117);

$output115 .= '
                                    ';
return $output115;
},
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments112, $renderingContext)
;

$output67 .= '
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array134 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration'),
];

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments133 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression135(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output136 = '';

$output136 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
$output139 = '';

$output139 .= '
                                            <div class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array141 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteLanguageIterator.isLast'),
];

$expression142 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments140 = [
'then' => '',
'else' => 'mb-2',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression142(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)),
    $renderingContext
),
];

$output139 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments140, $renderingContext)
;

$output139 .= '">
                                                <a href="';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base')]);

$output139 .= '" target="_blank">';

$output139 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base')]);

$output139 .= '</a>
                                            </div>
                                        ';
return $output139;
};

$arguments137 = [
'key' => NULL,
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages'),
'as' => 'siteLanguage',
'iteration' => 'siteLanguageIterator',
];

$output136 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments137, $renderingContext, $renderChildrenClosure138);

$output136 .= '
                                    ';
return $output136;
},
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments133, $renderingContext)
;

$output67 .= '
                                </td>
                                <td class="align-top nowrap col-control">
                                    <div class="btn-group">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array144 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];

$expression145 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments143 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression145(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output146 = '';

$output146 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure148 = function() use ($renderingContext) {
$output152 = '';

$output152 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure154 = function() use ($renderingContext) {
return NULL;
};

$arguments153 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-open',
];

$output152 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments153, $renderingContext, $renderChildrenClosure154);

$output152 .= '
                                            ';
return $output152;
};

$array149 = [
'site' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext) {
return NULL;
};

$arguments150 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.editSiteConfiguration',
];

$arguments147 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'referenceType' => 'absolute',
'route' => 'site_configuration.edit',
'parameters' => $array149,
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments150, $renderingContext, $renderChildrenClosure151),
'class' => 'btn btn-default',
];

$output146 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::class, $arguments147, $renderingContext, $renderChildrenClosure148);

$output146 .= '

                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.sets');
};

$arguments157 = [
'subject' => NULL,
];
$renderChildrenClosure158 = ($arguments157['subject'] !== null) ? function() use ($arguments157) { return $arguments157['subject']; } : $renderChildrenClosure158;
$array156 = [
'0' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::class, $arguments157, $renderingContext, $renderChildrenClosure158),
'1' => ' > 0',
];

$expression159 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};

$arguments155 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression159(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output160 = '';

$output160 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure162 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure164 = function() use ($renderingContext) {
return NULL;
};

$arguments163 = [
'parameters' => [],
'referenceType' => 'absolute',
'route' => 'site_configuration',
];
return $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::class, $arguments163, $renderingContext, $renderChildrenClosure164);
};

$arguments161 = [
'value' => NULL,
'name' => 'returnUrl',
];
$renderChildrenClosure162 = ($arguments161['value'] !== null) ? function() use ($arguments161) { return $arguments161['value']; } : $renderChildrenClosure162;
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::class, $arguments161, $renderingContext, $renderChildrenClosure162)]);

$output160 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure166 = function() use ($renderingContext) {
$output170 = '';

$output170 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure172 = function() use ($renderingContext) {
return NULL;
};

$arguments171 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-cog',
];

$output170 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments171, $renderingContext, $renderChildrenClosure172);

$output170 .= '
                                                    ';
return $output170;
};

$array167 = [
'site' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext) {
return NULL;
};

$arguments168 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.editSiteSettings',
];

$arguments165 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'referenceType' => 'absolute',
'route' => 'site_settings.edit',
'parameters' => $array167,
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments168, $renderingContext, $renderChildrenClosure169),
'class' => 'btn btn-default',
];

$output160 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::class, $arguments165, $renderingContext, $renderChildrenClosure166);

$output160 .= '
                                                ';
return $output160;
},
'__else' => function() use ($renderingContext) {
$output173 = '';

$output173 .= '
                                                    <button
                                                        disabled
                                                        type="button"
                                                        class="btn btn-default"
                                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext) {
return NULL;
};

$arguments174 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.editSiteSettingsUnavailable',
];

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments174, $renderingContext, $renderChildrenClosure175)]);

$output173 .= '"
                                                    >
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure177 = function() use ($renderingContext) {
return NULL;
};

$arguments176 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-cog',
];

$output173 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments176, $renderingContext, $renderChildrenClosure177);

$output173 .= '
                                                    </button>
                                                ';
return $output173;
},
];

$output146 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments155, $renderingContext)
;

$output146 .= '

                                            <button
                                                type="submit"
                                                class="btn btn-default t3js-modal-trigger"
                                                data-target-form="site_configuration_delete_';

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output146 .= '"
                                                title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext) {
return NULL;
};

$arguments178 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
];

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments178, $renderingContext, $renderChildrenClosure179)]);

$output146 .= '"
                                                data-severity="error"
                                                data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext) {
return NULL;
};

$arguments180 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
];

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments180, $renderingContext, $renderChildrenClosure181)]);

$output146 .= '"
                                                data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext) {
return NULL;
};

$arguments182 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
];

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments182, $renderingContext, $renderChildrenClosure183)]);

$output146 .= '"
                                                data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure185 = function() use ($renderingContext) {
return NULL;
};

$arguments184 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete',
];

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments184, $renderingContext, $renderChildrenClosure185)]);

$output146 .= '"
                                            >
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure187 = function() use ($renderingContext) {
return NULL;
};

$arguments186 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-delete',
];

$output146 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments186, $renderingContext, $renderChildrenClosure187);

$output146 .= '
                                            </button>
                                            <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure189 = function() use ($renderingContext) {
return NULL;
};

$arguments188 = [
'arguments' => [],
'query' => NULL,
'currentUrlParameterName' => NULL,
'route' => 'site_configuration.delete',
];

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::class, $arguments188, $renderingContext, $renderChildrenClosure189)]);

$output146 .= '" name="site_configuration_delete_';

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output146 .= '" id="site_configuration_delete_';

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output146 .= '" method="post">
                                                <input name="site" type="hidden" value="';

$output146 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output146 .= '">
                                            </form>
                                        ';
return $output146;
},
];

$output67 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments143, $renderingContext)
;

$output67 .= '
                                    </div>
                                </td>
                            </tr>
                        ';
return $output67;
};

$arguments65 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('pages'),
'as' => 'page',
];

$output9 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments65, $renderingContext, $renderChildrenClosure66);

$output9 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output9;
},
'__else' => function() use ($renderingContext) {
$output190 = '';

$output190 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure192 = function() use ($renderingContext) {
$output197 = '';

$output197 .= '
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext) {
return NULL;
};

$arguments198 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.message',
];

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments198, $renderingContext, $renderChildrenClosure199)]);

$output197 .= '</p>
            ';
return $output197;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper
$renderChildrenClosure194 = function() use ($renderingContext) {
return NULL;
};

$arguments193 = [
'name' => 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Be\\InfoboxViewHelper::STATE_INFO',
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext) {
return NULL;
};

$arguments195 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.title',
];

$arguments191 = [
'message' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'state' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ConstantViewHelper::class, $arguments193, $renderingContext, $renderChildrenClosure194),
'title' => $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments195, $renderingContext, $renderChildrenClosure196),
];
$renderChildrenClosure192 = ($arguments191['message'] !== null) ? function() use ($arguments191) { return $arguments191['message']; } : $renderChildrenClosure192;
$output190 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::class, $arguments191, $renderingContext, $renderChildrenClosure192);

$output190 .= '
        ';
return $output190;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments6, $renderingContext)
;

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array201 = [
'0' => $renderingContext->getVariableProvider()->getByPath('unassignedSites'),
];

$expression202 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments200 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression202(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array201)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output203 = '';

$output203 .= '
        <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure205 = function() use ($renderingContext) {
return NULL;
};

$arguments204 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.title',
];

$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments204, $renderingContext, $renderChildrenClosure205)]);

$output203 .= '</h2>
        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure207 = function() use ($renderingContext) {
return NULL;
};

$arguments206 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.description',
];

$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments206, $renderingContext, $renderChildrenClosure207)]);

$output203 .= '</p>

        <div class="table-fit">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext) {
return NULL;
};

$arguments208 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.siteIdentifier',
];

$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments208, $renderingContext, $renderChildrenClosure209)]);

$output203 .= '</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure211 = function() use ($renderingContext) {
$output212 = '';

$output212 .= '
                        <tr>
                            <td><code>';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output212 .= '</code></td>
                            <td class="col-control">
                                <div class="btn-group">
                                    <button
                                        type="submit"
                                        class="btn btn-default t3js-modal-trigger"
                                        data-target-form="site_configuration_delete_';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output212 .= '"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure214 = function() use ($renderingContext) {
return NULL;
};

$arguments213 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
];

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments213, $renderingContext, $renderChildrenClosure214)]);

$output212 .= '"
                                        data-severity="error"
                                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext) {
return NULL;
};

$arguments215 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
];

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments215, $renderingContext, $renderChildrenClosure216)]);

$output212 .= '"
                                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext) {
return NULL;
};

$arguments217 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
];

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments217, $renderingContext, $renderChildrenClosure218)]);

$output212 .= '"
                                        data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext) {
return NULL;
};

$arguments219 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete',
];

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments219, $renderingContext, $renderChildrenClosure220)]);

$output212 .= '"
                                    >
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure222 = function() use ($renderingContext) {
return NULL;
};

$arguments221 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-delete',
];

$output212 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Core\ViewHelpers\IconViewHelper::class, $arguments221, $renderingContext, $renderChildrenClosure222);

$output212 .= '
                                    </button>
                                    <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure224 = function() use ($renderingContext) {
return NULL;
};

$arguments223 = [
'arguments' => [],
'query' => NULL,
'currentUrlParameterName' => NULL,
'route' => 'site_configuration.delete',
];

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::class, $arguments223, $renderingContext, $renderChildrenClosure224)]);

$output212 .= '" name="site_configuration_delete_';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output212 .= '" id="site_configuration_delete_';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output212 .= '" method="post">
                                        <input name="site" type="hidden" value="';

$output212 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output212 .= '">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ';
return $output212;
};

$arguments210 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('unassignedSites'),
'as' => 'unassignedSite',
];

$output203 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments210, $renderingContext, $renderChildrenClosure211);

$output203 .= '
                </tbody>
            </table>
        </div>
    ';
return $output203;
},
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments200, $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output225 = '';

$output225 .= '

';

$output225 .= '';

$output225 .= '

';

$output225 .= '';

$output225 .= '


';

    return $output225;
}

}

#