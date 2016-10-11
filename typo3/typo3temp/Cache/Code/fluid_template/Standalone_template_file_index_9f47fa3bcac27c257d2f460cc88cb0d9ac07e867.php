<?php
class FluidCache_Standalone_template_file_index_9f47fa3bcac27c257d2f460cc88cb0d9ac07e867 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '<div id="header-wrapper">
    <div id="triangle-up"></div>
  </div>

<div id="menu-wrapper">
    <div id="menu">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = 'lib.topnav';
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
    </div>
</div>
<div id="wrapper">
  <div id="featured-wrapper">
  
    <div class="extra2 container">
      <div class="ebox1">
        <div class="hexagon"><span class="icon icon-lightbulb"></span></div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments4 = array();
$arguments4['typoscriptObjectPath'] = 'lib.content_left';
$arguments4['data'] = NULL;
$arguments4['currentValueKey'] = NULL;
$arguments4['table'] = '';
$renderChildrenClosure5 = function() {return NULL;};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '              
      </div>    

      <div class="ebox2">
        <div class="hexagon"><span class="icon icon-bullhorn"></span></div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments7 = array();
$arguments7['typoscriptObjectPath'] = 'lib.content_middle';
$arguments7['data'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$renderChildrenClosure8 = function() {return NULL;};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '
      </div>  
      
      
      <div class="ebox3">
        <div class="hexagon"><span class="icon icon-user"></span></div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments10 = array();
$arguments10['typoscriptObjectPath'] = 'lib.content_right';
$arguments10['data'] = NULL;
$arguments10['currentValueKey'] = NULL;
$arguments10['table'] = '';
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '            
      </div>          

    </div>  

  </div>
</div>
<div id="stamp" class="container">
  <div class="hexagon"><span class="icon icon-square"></span></div>
</div>

';


return $output0;
}


}
#1476193557    4556      