<?php
class layout_Layout_html_3f9c67f858c214b9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'disabled' => NULL,
'useNonce' => false,
'priority' => false,
'inline' => false,
'identifier' => 'main',
'href' => 'EXT:site_package/Resources/Public/Css/main.css',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '  
<main>  
    <div style="width: 100vw;  
        min-height: 100px;  
        background-color: blue;  
        color: white;  
        text-align: center;  
        font-size: 30px;  
    ">  
        Header  
    </div>  
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Main',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);

$output0 .= '  
    <div class="footer"  
         style="width: 100vw;  
            min-height: 100px;  
            background-color: red;  
            color: white;  
            text-align: center;  
            font-size: 30px;  
    ">Footer</div>  
</main>';

    return $output0;
}

}

#