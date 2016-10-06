<?php
class FluidCache_Beuser_Permission_action_edit_7fbd0c5ae6000e622f5223bbba03241a486b5c2b extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Permission';
}
public function hasLayout() {
return TRUE;
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments1 = array();
$arguments1['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= ':
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments3 = array();
$arguments3['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Edit';
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	</h1>
';


return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output5 = '';

$output5 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments6 = array();
$arguments6['action'] = 'update';
$arguments6['name'] = 'editform';
$arguments6['id'] = 'PermissionControllerEdit';
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['controller'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['pluginName'] = NULL;
$arguments6['pageUid'] = NULL;
$arguments6['object'] = NULL;
$arguments6['pageType'] = 0;
$arguments6['noCache'] = false;
$arguments6['noCacheHash'] = false;
$arguments6['section'] = '';
$arguments6['format'] = '';
$arguments6['additionalParams'] = array (
);
$arguments6['absolute'] = false;
$arguments6['addQueryString'] = false;
$arguments6['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments6['fieldNamePrefix'] = NULL;
$arguments6['actionUri'] = NULL;
$arguments6['objectName'] = NULL;
$arguments6['hiddenFieldClassName'] = NULL;
$arguments6['enctype'] = NULL;
$arguments6['method'] = NULL;
$arguments6['onreset'] = NULL;
$arguments6['onsubmit'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '

		<div class="form-group">
			<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments11 = array();
$output12 = '';

$output12 .= 'data[pages][';

$output12 .= $currentVariableContainer->getOrNull('id');

$output12 .= '][perms_userid]';
$arguments11['name'] = $output12;
$arguments11['options'] = $currentVariableContainer->getOrNull('beUserData');
$arguments11['value'] = $currentVariableContainer->getOrNull('currentBeUser');
$arguments11['class'] = 'form-control';
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['property'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['size'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['optionValueField'] = NULL;
$arguments11['optionLabelField'] = NULL;
$arguments11['sortByOptionLabel'] = false;
$arguments11['selectAllByDefault'] = false;
$arguments11['errorClass'] = 'f3-form-error';
$arguments11['prependOptionLabel'] = NULL;
$arguments11['prependOptionValue'] = NULL;
$arguments11['multiple'] = false;
$renderChildrenClosure13 = function() {return NULL;};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper14->setArguments($arguments11);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output8 .= $viewHelper14->initializeArgumentsAndRender();

$output8 .= '
		</div>

		<div class="form-group">
			<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments15 = array();
$arguments15['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['htmlEscape'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$renderChildrenClosure16 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output8 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments17 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments18 = array();
$arguments18['subject'] = $currentVariableContainer->getOrNull('beGroupData');
$renderChildrenClosure19 = function() {return NULL;};
$arguments17['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext), 1);
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments22 = array();
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments25 = array();
$output26 = '';

$output26 .= 'data[pages][';

$output26 .= $currentVariableContainer->getOrNull('id');

$output26 .= '][perms_groupid]';
$arguments25['name'] = $output26;
$arguments25['options'] = $currentVariableContainer->getOrNull('beGroupData');
$arguments25['value'] = $currentVariableContainer->getOrNull('currentBeGroup');
$arguments25['class'] = 'form-control';
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['property'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['size'] = NULL;
$arguments25['disabled'] = NULL;
$arguments25['optionValueField'] = NULL;
$arguments25['optionLabelField'] = NULL;
$arguments25['sortByOptionLabel'] = false;
$arguments25['selectAllByDefault'] = false;
$arguments25['errorClass'] = 'f3-form-error';
$arguments25['prependOptionLabel'] = NULL;
$arguments25['prependOptionValue'] = NULL;
$arguments25['multiple'] = false;
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper28->setArguments($arguments25);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output24 .= $viewHelper28->initializeArgumentsAndRender();

$output24 .= '
				';
return $output24;
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments29 = array();
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
					<div class="alert alert-notice">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments32 = array();
$arguments32['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:noGroups';
$arguments32['id'] = NULL;
$arguments32['default'] = NULL;
$arguments32['htmlEscape'] = NULL;
$arguments32['arguments'] = NULL;
$arguments32['extensionName'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '</div>
				';
return $output31;
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output21 .= '
			';
return $output21;
};
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments35 = array();
$output36 = '';

$output36 .= 'data[pages][';

$output36 .= $currentVariableContainer->getOrNull('id');

$output36 .= '][perms_groupid]';
$arguments35['name'] = $output36;
$arguments35['options'] = $currentVariableContainer->getOrNull('beGroupData');
$arguments35['value'] = $currentVariableContainer->getOrNull('currentBeGroup');
$arguments35['class'] = 'form-control';
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['property'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['size'] = NULL;
$arguments35['disabled'] = NULL;
$arguments35['optionValueField'] = NULL;
$arguments35['optionLabelField'] = NULL;
$arguments35['sortByOptionLabel'] = false;
$arguments35['selectAllByDefault'] = false;
$arguments35['errorClass'] = 'f3-form-error';
$arguments35['prependOptionLabel'] = NULL;
$arguments35['prependOptionValue'] = NULL;
$arguments35['multiple'] = false;
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper38->setArguments($arguments35);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output34 .= $viewHelper38->initializeArgumentsAndRender();

$output34 .= '
				';
return $output34;
};
$arguments17['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
					<div class="alert alert-notice">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments40 = array();
$arguments40['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:noGroups';
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['htmlEscape'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$renderChildrenClosure41 = function() {return NULL;};

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '</div>
				';
return $output39;
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure20, $renderingContext);

$output8 .= '
		</div>

		<div class="panel panel-default panel-space">
			<div class="table-fit">
				<table class="table table-striped table-hover" id="typo3-permissionMatrix">
					<thead>
						<tr>
							<th></th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments42 = array();
$arguments42['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['htmlEscape'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$renderChildrenClosure43 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output8 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments44 = array();
$arguments44['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output8 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments46 = array();
$arguments46['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';
$arguments46['id'] = NULL;
$arguments46['default'] = NULL;
$arguments46['htmlEscape'] = NULL;
$arguments46['arguments'] = NULL;
$arguments46['extensionName'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output8 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments48 = array();
$arguments48['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$renderChildrenClosure49 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output8 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments50 = array();
$arguments50['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['htmlEscape'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output8 .= '</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments52 = array();
$arguments52['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['htmlEscape'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output8 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_user][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = $currentVariableContainer->getOrNull('id');
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output8 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output8 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = $currentVariableContainer->getOrNull('id');
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output8 .= (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));

$output8 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments60 = array();
$arguments60['value'] = $currentVariableContainer->getOrNull('id');
$arguments60['keepQuotes'] = false;
$arguments60['encoding'] = NULL;
$arguments60['doubleEncode'] = true;
$renderChildrenClosure61 = function() {return NULL;};
$value62 = ($arguments60['value'] !== NULL ? $arguments60['value'] : $renderChildrenClosure61());

$output8 .= (!is_string($value62) ? $value62 : htmlspecialchars($value62, ($arguments60['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments60['encoding'] !== NULL ? $arguments60['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments60['doubleEncode']));

$output8 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = $currentVariableContainer->getOrNull('id');
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());

$output8 .= (!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode']));

$output8 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments66 = array();
$arguments66['value'] = $currentVariableContainer->getOrNull('id');
$arguments66['keepQuotes'] = false;
$arguments66['encoding'] = NULL;
$arguments66['doubleEncode'] = true;
$renderChildrenClosure67 = function() {return NULL;};
$value68 = ($arguments66['value'] !== NULL ? $arguments66['value'] : $renderChildrenClosure67());

$output8 .= (!is_string($value68) ? $value68 : htmlspecialchars($value68, ($arguments66['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments66['encoding'] !== NULL ? $arguments66['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments66['doubleEncode']));

$output8 .= '][perms_user]\')" /></td>
						</tr>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments69 = array();
$arguments69['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['htmlEscape'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$renderChildrenClosure70 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output8 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_group][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = $currentVariableContainer->getOrNull('id');
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() {return NULL;};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());

$output8 .= (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode']));

$output8 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = $currentVariableContainer->getOrNull('id');
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() {return NULL;};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output8 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode']));

$output8 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = $currentVariableContainer->getOrNull('id');
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = NULL;
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() {return NULL;};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output8 .= (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments77['encoding'] !== NULL ? $arguments77['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments77['doubleEncode']));

$output8 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments80 = array();
$arguments80['value'] = $currentVariableContainer->getOrNull('id');
$arguments80['keepQuotes'] = false;
$arguments80['encoding'] = NULL;
$arguments80['doubleEncode'] = true;
$renderChildrenClosure81 = function() {return NULL;};
$value82 = ($arguments80['value'] !== NULL ? $arguments80['value'] : $renderChildrenClosure81());

$output8 .= (!is_string($value82) ? $value82 : htmlspecialchars($value82, ($arguments80['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments80['encoding'] !== NULL ? $arguments80['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments80['doubleEncode']));

$output8 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments83 = array();
$arguments83['value'] = $currentVariableContainer->getOrNull('id');
$arguments83['keepQuotes'] = false;
$arguments83['encoding'] = NULL;
$arguments83['doubleEncode'] = true;
$renderChildrenClosure84 = function() {return NULL;};
$value85 = ($arguments83['value'] !== NULL ? $arguments83['value'] : $renderChildrenClosure84());

$output8 .= (!is_string($value85) ? $value85 : htmlspecialchars($value85, ($arguments83['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments83['encoding'] !== NULL ? $arguments83['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments83['doubleEncode']));

$output8 .= '][perms_group]\')" /></td>
						</tr>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments86 = array();
$arguments86['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';
$arguments86['id'] = NULL;
$arguments86['default'] = NULL;
$arguments86['htmlEscape'] = NULL;
$arguments86['arguments'] = NULL;
$arguments86['extensionName'] = NULL;
$renderChildrenClosure87 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output8 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_everybody][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments88 = array();
$arguments88['value'] = $currentVariableContainer->getOrNull('id');
$arguments88['keepQuotes'] = false;
$arguments88['encoding'] = NULL;
$arguments88['doubleEncode'] = true;
$renderChildrenClosure89 = function() {return NULL;};
$value90 = ($arguments88['value'] !== NULL ? $arguments88['value'] : $renderChildrenClosure89());

$output8 .= (!is_string($value90) ? $value90 : htmlspecialchars($value90, ($arguments88['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments88['encoding'] !== NULL ? $arguments88['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments88['doubleEncode']));

$output8 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments91 = array();
$arguments91['value'] = $currentVariableContainer->getOrNull('id');
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = NULL;
$arguments91['doubleEncode'] = true;
$renderChildrenClosure92 = function() {return NULL;};
$value93 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure92());

$output8 .= (!is_string($value93) ? $value93 : htmlspecialchars($value93, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments91['encoding'] !== NULL ? $arguments91['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments91['doubleEncode']));

$output8 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments94 = array();
$arguments94['value'] = $currentVariableContainer->getOrNull('id');
$arguments94['keepQuotes'] = false;
$arguments94['encoding'] = NULL;
$arguments94['doubleEncode'] = true;
$renderChildrenClosure95 = function() {return NULL;};
$value96 = ($arguments94['value'] !== NULL ? $arguments94['value'] : $renderChildrenClosure95());

$output8 .= (!is_string($value96) ? $value96 : htmlspecialchars($value96, ($arguments94['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments94['encoding'] !== NULL ? $arguments94['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments94['doubleEncode']));

$output8 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = $currentVariableContainer->getOrNull('id');
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() {return NULL;};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());

$output8 .= (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));

$output8 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = $currentVariableContainer->getOrNull('id');
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() {return NULL;};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output8 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output8 .= '][perms_everybody]\')" /></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="form-group">
			<label for="recursionLevel">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments103 = array();
$arguments103['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['htmlEscape'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$renderChildrenClosure104 = function() {return NULL;};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output8 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments105 = array();
$arguments105['id'] = 'recursionLevel';
$output106 = '';

$output106 .= 'mirror[pages][';

$output106 .= $currentVariableContainer->getOrNull('id');

$output106 .= ']';
$arguments105['name'] = $output106;
$arguments105['options'] = $currentVariableContainer->getOrNull('recursiveSelectOptions');
$arguments105['class'] = 'form-control';
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['value'] = NULL;
$arguments105['property'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['size'] = NULL;
$arguments105['disabled'] = NULL;
$arguments105['optionValueField'] = NULL;
$arguments105['optionLabelField'] = NULL;
$arguments105['sortByOptionLabel'] = false;
$arguments105['selectAllByDefault'] = false;
$arguments105['errorClass'] = 'f3-form-error';
$arguments105['prependOptionLabel'] = NULL;
$arguments105['prependOptionValue'] = NULL;
$arguments105['multiple'] = false;
$renderChildrenClosure107 = function() {return NULL;};
$viewHelper108 = $self->getViewHelper('$viewHelper108', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper108->setArguments($arguments105);
$viewHelper108->setRenderingContext($renderingContext);
$viewHelper108->setRenderChildrenClosure($renderChildrenClosure107);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output8 .= $viewHelper108->initializeArgumentsAndRender();

$output8 .= '
		</div>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments109 = array();
$output110 = '';

$output110 .= 'data[pages][';

$output110 .= $currentVariableContainer->getOrNull('id');

$output110 .= '][perms_user]';
$arguments109['name'] = $output110;
$arguments109['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageInfo'), 'perms_user', $renderingContext);
$arguments109['additionalAttributes'] = NULL;
$arguments109['data'] = NULL;
$arguments109['property'] = NULL;
$arguments109['class'] = NULL;
$arguments109['dir'] = NULL;
$arguments109['id'] = NULL;
$arguments109['lang'] = NULL;
$arguments109['style'] = NULL;
$arguments109['title'] = NULL;
$arguments109['accesskey'] = NULL;
$arguments109['tabindex'] = NULL;
$arguments109['onclick'] = NULL;
$renderChildrenClosure111 = function() {return NULL;};
$viewHelper112 = $self->getViewHelper('$viewHelper112', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper112->setArguments($arguments109);
$viewHelper112->setRenderingContext($renderingContext);
$viewHelper112->setRenderChildrenClosure($renderChildrenClosure111);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output8 .= $viewHelper112->initializeArgumentsAndRender();

$output8 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments113 = array();
$output114 = '';

$output114 .= 'data[pages][';

$output114 .= $currentVariableContainer->getOrNull('id');

$output114 .= '][perms_group]';
$arguments113['name'] = $output114;
$arguments113['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageInfo'), 'perms_group', $renderingContext);
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['property'] = NULL;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$renderChildrenClosure115 = function() {return NULL;};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper116->setArguments($arguments113);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output8 .= $viewHelper116->initializeArgumentsAndRender();

$output8 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments117 = array();
$output118 = '';

$output118 .= 'data[pages][';

$output118 .= $currentVariableContainer->getOrNull('id');

$output118 .= '][perms_everybody]';
$arguments117['name'] = $output118;
$arguments117['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageInfo'), 'perms_everybody', $renderingContext);
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['property'] = NULL;
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
$renderChildrenClosure119 = function() {return NULL;};
$viewHelper120 = $self->getViewHelper('$viewHelper120', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper120->setArguments($arguments117);
$viewHelper120->setRenderingContext($renderingContext);
$viewHelper120->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output8 .= $viewHelper120->initializeArgumentsAndRender();

$output8 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments121 = array();
$arguments121['name'] = 'depth';
$arguments121['value'] = $currentVariableContainer->getOrNull('depth');
$arguments121['additionalAttributes'] = NULL;
$arguments121['data'] = NULL;
$arguments121['property'] = NULL;
$arguments121['class'] = NULL;
$arguments121['dir'] = NULL;
$arguments121['id'] = NULL;
$arguments121['lang'] = NULL;
$arguments121['style'] = NULL;
$arguments121['title'] = NULL;
$arguments121['accesskey'] = NULL;
$arguments121['tabindex'] = NULL;
$arguments121['onclick'] = NULL;
$renderChildrenClosure122 = function() {return NULL;};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper123->setArguments($arguments121);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure122);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output8 .= $viewHelper123->initializeArgumentsAndRender();

$output8 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments124 = array();
$arguments124['name'] = 'redirect';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments125 = array();
$arguments125['action'] = 'index';
// Rendering Array
$array126 = array();
$array126['lastEdited'] = $currentVariableContainer->getOrNull('id');
$array126['id'] = $currentVariableContainer->getOrNull('returnId');
$arguments125['arguments'] = $array126;
$arguments125['controller'] = NULL;
$arguments125['extensionName'] = NULL;
$arguments125['pluginName'] = NULL;
$arguments125['pageUid'] = NULL;
$arguments125['pageType'] = 0;
$arguments125['noCache'] = false;
$arguments125['noCacheHash'] = false;
$arguments125['section'] = '';
$arguments125['format'] = '';
$arguments125['linkAccessRestrictedPages'] = false;
$arguments125['additionalParams'] = array (
);
$arguments125['absolute'] = false;
$arguments125['addQueryString'] = false;
$arguments125['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments125['addQueryStringMethod'] = NULL;
$renderChildrenClosure127 = function() {return NULL;};
$viewHelper128 = $self->getViewHelper('$viewHelper128', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper128->setArguments($arguments125);
$viewHelper128->setRenderingContext($renderingContext);
$viewHelper128->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments124['value'] = $viewHelper128->initializeArgumentsAndRender();
$arguments124['additionalAttributes'] = NULL;
$arguments124['data'] = NULL;
$arguments124['property'] = NULL;
$arguments124['class'] = NULL;
$arguments124['dir'] = NULL;
$arguments124['id'] = NULL;
$arguments124['lang'] = NULL;
$arguments124['style'] = NULL;
$arguments124['title'] = NULL;
$arguments124['accesskey'] = NULL;
$arguments124['tabindex'] = NULL;
$arguments124['onclick'] = NULL;
$renderChildrenClosure129 = function() {return NULL;};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper130->setArguments($arguments124);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output8 .= $viewHelper130->initializeArgumentsAndRender();

$output8 .= '

	';
return $output8;
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper131->setArguments($arguments6);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output5 .= $viewHelper131->initializeArgumentsAndRender();

$output5 .= '

	<hr>
	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments132 = array();
$arguments132['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';
$arguments132['id'] = NULL;
$arguments132['default'] = NULL;
$arguments132['htmlEscape'] = NULL;
$arguments132['arguments'] = NULL;
$arguments132['extensionName'] = NULL;
$renderChildrenClosure133 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output5 .= '</h3>
	<p>
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments134 = array();
$arguments134['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['htmlEscape'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$renderChildrenClosure135 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments136 = array();
$arguments136['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';
$arguments136['id'] = NULL;
$arguments136['default'] = NULL;
$arguments136['htmlEscape'] = NULL;
$arguments136['arguments'] = NULL;
$arguments136['extensionName'] = NULL;
$renderChildrenClosure137 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output5 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments138 = array();
$arguments138['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';
$arguments138['id'] = NULL;
$arguments138['default'] = NULL;
$arguments138['htmlEscape'] = NULL;
$arguments138['arguments'] = NULL;
$arguments138['extensionName'] = NULL;
$renderChildrenClosure139 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments140 = array();
$arguments140['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';
$arguments140['id'] = NULL;
$arguments140['default'] = NULL;
$arguments140['htmlEscape'] = NULL;
$arguments140['arguments'] = NULL;
$arguments140['extensionName'] = NULL;
$renderChildrenClosure141 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output5 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments142 = array();
$arguments142['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';
$arguments142['id'] = NULL;
$arguments142['default'] = NULL;
$arguments142['htmlEscape'] = NULL;
$arguments142['arguments'] = NULL;
$arguments142['extensionName'] = NULL;
$renderChildrenClosure143 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments144 = array();
$arguments144['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['htmlEscape'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$renderChildrenClosure145 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output5 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments146 = array();
$arguments146['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';
$arguments146['id'] = NULL;
$arguments146['default'] = NULL;
$arguments146['htmlEscape'] = NULL;
$arguments146['arguments'] = NULL;
$arguments146['extensionName'] = NULL;
$renderChildrenClosure147 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments148 = array();
$arguments148['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['htmlEscape'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$renderChildrenClosure149 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output5 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments150 = array();
$arguments150['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['htmlEscape'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$renderChildrenClosure151 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments152 = array();
$arguments152['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';
$arguments152['id'] = NULL;
$arguments152['default'] = NULL;
$arguments152['htmlEscape'] = NULL;
$arguments152['arguments'] = NULL;
$arguments152['extensionName'] = NULL;
$renderChildrenClosure153 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output5 .= '
	</p>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments154 = array();
$arguments154['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';
$arguments154['id'] = NULL;
$arguments154['default'] = NULL;
$arguments154['htmlEscape'] = NULL;
$arguments154['arguments'] = NULL;
$arguments154['extensionName'] = NULL;
$renderChildrenClosure155 = function() {return NULL;};

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output5 .= '</p>

	<script type="text/javascript">
		require(["jquery", "TYPO3/CMS/Beuser/Permissions"], function($, Permissions) {
			Permissions.setCheck("check[perms_user]", "tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments156 = array();
$arguments156['value'] = $currentVariableContainer->getOrNull('id');
$arguments156['keepQuotes'] = false;
$arguments156['encoding'] = NULL;
$arguments156['doubleEncode'] = true;
$renderChildrenClosure157 = function() {return NULL;};
$value158 = ($arguments156['value'] !== NULL ? $arguments156['value'] : $renderChildrenClosure157());

$output5 .= (!is_string($value158) ? $value158 : htmlspecialchars($value158, ($arguments156['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments156['encoding'] !== NULL ? $arguments156['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments156['doubleEncode']));

$output5 .= '][perms_user]");
			Permissions.setCheck("check[perms_group]", "tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments159 = array();
$arguments159['value'] = $currentVariableContainer->getOrNull('id');
$arguments159['keepQuotes'] = false;
$arguments159['encoding'] = NULL;
$arguments159['doubleEncode'] = true;
$renderChildrenClosure160 = function() {return NULL;};
$value161 = ($arguments159['value'] !== NULL ? $arguments159['value'] : $renderChildrenClosure160());

$output5 .= (!is_string($value161) ? $value161 : htmlspecialchars($value161, ($arguments159['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments159['encoding'] !== NULL ? $arguments159['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments159['doubleEncode']));

$output5 .= '][perms_group]");
			Permissions.setCheck("check[perms_everybody]", "tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments162 = array();
$arguments162['value'] = $currentVariableContainer->getOrNull('id');
$arguments162['keepQuotes'] = false;
$arguments162['encoding'] = NULL;
$arguments162['doubleEncode'] = true;
$renderChildrenClosure163 = function() {return NULL;};
$value164 = ($arguments162['value'] !== NULL ? $arguments162['value'] : $renderChildrenClosure163());

$output5 .= (!is_string($value164) ? $value164 : htmlspecialchars($value164, ($arguments162['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments162['encoding'] !== NULL ? $arguments162['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments162['doubleEncode']));

$output5 .= '][perms_everybody]");
		});
	</script>

';


return $output5;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output165 = '';

$output165 .= '


';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments166 = array();
$arguments166['name'] = 'Permission';
$renderChildrenClosure167 = function() {return NULL;};
$viewHelper168 = $self->getViewHelper('$viewHelper168', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper168->setArguments($arguments166);
$viewHelper168->setRenderingContext($renderingContext);
$viewHelper168->setRenderChildrenClosure($renderChildrenClosure167);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output165 .= $viewHelper168->initializeArgumentsAndRender();

$output165 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments169 = array();
$arguments169['name'] = 'headline';
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output171 = '';

$output171 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments172 = array();
$arguments172['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['htmlEscape'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= ':
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments174 = array();
$arguments174['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Edit';
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['htmlEscape'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$renderChildrenClosure175 = function() {return NULL;};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output171 .= '
	</h1>
';
return $output171;
};

$output165 .= '';

$output165 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments176 = array();
$arguments176['name'] = 'content';
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output178 = '';

$output178 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments179 = array();
$arguments179['action'] = 'update';
$arguments179['name'] = 'editform';
$arguments179['id'] = 'PermissionControllerEdit';
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['arguments'] = array (
);
$arguments179['controller'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['pluginName'] = NULL;
$arguments179['pageUid'] = NULL;
$arguments179['object'] = NULL;
$arguments179['pageType'] = 0;
$arguments179['noCache'] = false;
$arguments179['noCacheHash'] = false;
$arguments179['section'] = '';
$arguments179['format'] = '';
$arguments179['additionalParams'] = array (
);
$arguments179['absolute'] = false;
$arguments179['addQueryString'] = false;
$arguments179['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments179['fieldNamePrefix'] = NULL;
$arguments179['actionUri'] = NULL;
$arguments179['objectName'] = NULL;
$arguments179['hiddenFieldClassName'] = NULL;
$arguments179['enctype'] = NULL;
$arguments179['method'] = NULL;
$arguments179['onreset'] = NULL;
$arguments179['onsubmit'] = NULL;
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '

		<div class="form-group">
			<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments182 = array();
$arguments182['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['htmlEscape'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$renderChildrenClosure183 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments184 = array();
$output185 = '';

$output185 .= 'data[pages][';

$output185 .= $currentVariableContainer->getOrNull('id');

$output185 .= '][perms_userid]';
$arguments184['name'] = $output185;
$arguments184['options'] = $currentVariableContainer->getOrNull('beUserData');
$arguments184['value'] = $currentVariableContainer->getOrNull('currentBeUser');
$arguments184['class'] = 'form-control';
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['property'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
$arguments184['size'] = NULL;
$arguments184['disabled'] = NULL;
$arguments184['optionValueField'] = NULL;
$arguments184['optionLabelField'] = NULL;
$arguments184['sortByOptionLabel'] = false;
$arguments184['selectAllByDefault'] = false;
$arguments184['errorClass'] = 'f3-form-error';
$arguments184['prependOptionLabel'] = NULL;
$arguments184['prependOptionValue'] = NULL;
$arguments184['multiple'] = false;
$renderChildrenClosure186 = function() {return NULL;};
$viewHelper187 = $self->getViewHelper('$viewHelper187', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper187->setArguments($arguments184);
$viewHelper187->setRenderingContext($renderingContext);
$viewHelper187->setRenderChildrenClosure($renderChildrenClosure186);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output181 .= $viewHelper187->initializeArgumentsAndRender();

$output181 .= '
		</div>

		<div class="form-group">
			<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments188 = array();
$arguments188['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';
$arguments188['id'] = NULL;
$arguments188['default'] = NULL;
$arguments188['htmlEscape'] = NULL;
$arguments188['arguments'] = NULL;
$arguments188['extensionName'] = NULL;
$renderChildrenClosure189 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output181 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments190 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments191 = array();
$arguments191['subject'] = $currentVariableContainer->getOrNull('beGroupData');
$renderChildrenClosure192 = function() {return NULL;};
$arguments190['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext), 1);
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output194 = '';

$output194 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments195 = array();
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output197 = '';

$output197 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments198 = array();
$output199 = '';

$output199 .= 'data[pages][';

$output199 .= $currentVariableContainer->getOrNull('id');

$output199 .= '][perms_groupid]';
$arguments198['name'] = $output199;
$arguments198['options'] = $currentVariableContainer->getOrNull('beGroupData');
$arguments198['value'] = $currentVariableContainer->getOrNull('currentBeGroup');
$arguments198['class'] = 'form-control';
$arguments198['additionalAttributes'] = NULL;
$arguments198['data'] = NULL;
$arguments198['property'] = NULL;
$arguments198['dir'] = NULL;
$arguments198['id'] = NULL;
$arguments198['lang'] = NULL;
$arguments198['style'] = NULL;
$arguments198['title'] = NULL;
$arguments198['accesskey'] = NULL;
$arguments198['tabindex'] = NULL;
$arguments198['onclick'] = NULL;
$arguments198['size'] = NULL;
$arguments198['disabled'] = NULL;
$arguments198['optionValueField'] = NULL;
$arguments198['optionLabelField'] = NULL;
$arguments198['sortByOptionLabel'] = false;
$arguments198['selectAllByDefault'] = false;
$arguments198['errorClass'] = 'f3-form-error';
$arguments198['prependOptionLabel'] = NULL;
$arguments198['prependOptionValue'] = NULL;
$arguments198['multiple'] = false;
$renderChildrenClosure200 = function() {return NULL;};
$viewHelper201 = $self->getViewHelper('$viewHelper201', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper201->setArguments($arguments198);
$viewHelper201->setRenderingContext($renderingContext);
$viewHelper201->setRenderChildrenClosure($renderChildrenClosure200);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output197 .= $viewHelper201->initializeArgumentsAndRender();

$output197 .= '
				';
return $output197;
};

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments202 = array();
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output204 = '';

$output204 .= '
					<div class="alert alert-notice">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments205 = array();
$arguments205['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:noGroups';
$arguments205['id'] = NULL;
$arguments205['default'] = NULL;
$arguments205['htmlEscape'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['extensionName'] = NULL;
$renderChildrenClosure206 = function() {return NULL;};

$output204 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output204 .= '</div>
				';
return $output204;
};

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output194 .= '
			';
return $output194;
};
$arguments190['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output207 = '';

$output207 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments208 = array();
$output209 = '';

$output209 .= 'data[pages][';

$output209 .= $currentVariableContainer->getOrNull('id');

$output209 .= '][perms_groupid]';
$arguments208['name'] = $output209;
$arguments208['options'] = $currentVariableContainer->getOrNull('beGroupData');
$arguments208['value'] = $currentVariableContainer->getOrNull('currentBeGroup');
$arguments208['class'] = 'form-control';
$arguments208['additionalAttributes'] = NULL;
$arguments208['data'] = NULL;
$arguments208['property'] = NULL;
$arguments208['dir'] = NULL;
$arguments208['id'] = NULL;
$arguments208['lang'] = NULL;
$arguments208['style'] = NULL;
$arguments208['title'] = NULL;
$arguments208['accesskey'] = NULL;
$arguments208['tabindex'] = NULL;
$arguments208['onclick'] = NULL;
$arguments208['size'] = NULL;
$arguments208['disabled'] = NULL;
$arguments208['optionValueField'] = NULL;
$arguments208['optionLabelField'] = NULL;
$arguments208['sortByOptionLabel'] = false;
$arguments208['selectAllByDefault'] = false;
$arguments208['errorClass'] = 'f3-form-error';
$arguments208['prependOptionLabel'] = NULL;
$arguments208['prependOptionValue'] = NULL;
$arguments208['multiple'] = false;
$renderChildrenClosure210 = function() {return NULL;};
$viewHelper211 = $self->getViewHelper('$viewHelper211', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper211->setArguments($arguments208);
$viewHelper211->setRenderingContext($renderingContext);
$viewHelper211->setRenderChildrenClosure($renderChildrenClosure210);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output207 .= $viewHelper211->initializeArgumentsAndRender();

$output207 .= '
				';
return $output207;
};
$arguments190['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output212 = '';

$output212 .= '
					<div class="alert alert-notice">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments213 = array();
$arguments213['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:noGroups';
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['htmlEscape'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$renderChildrenClosure214 = function() {return NULL;};

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '</div>
				';
return $output212;
};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure193, $renderingContext);

$output181 .= '
		</div>

		<div class="panel panel-default panel-space">
			<div class="table-fit">
				<table class="table table-striped table-hover" id="typo3-permissionMatrix">
					<thead>
						<tr>
							<th></th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments215 = array();
$arguments215['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['htmlEscape'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$renderChildrenClosure216 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output181 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments217 = array();
$arguments217['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['htmlEscape'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$renderChildrenClosure218 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output181 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments219 = array();
$arguments219['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['htmlEscape'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$renderChildrenClosure220 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output181 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments221 = array();
$arguments221['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['htmlEscape'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$renderChildrenClosure222 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output181 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments223 = array();
$arguments223['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['htmlEscape'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$renderChildrenClosure224 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output181 .= '</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments225 = array();
$arguments225['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';
$arguments225['id'] = NULL;
$arguments225['default'] = NULL;
$arguments225['htmlEscape'] = NULL;
$arguments225['arguments'] = NULL;
$arguments225['extensionName'] = NULL;
$renderChildrenClosure226 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output181 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_user][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments227 = array();
$arguments227['value'] = $currentVariableContainer->getOrNull('id');
$arguments227['keepQuotes'] = false;
$arguments227['encoding'] = NULL;
$arguments227['doubleEncode'] = true;
$renderChildrenClosure228 = function() {return NULL;};
$value229 = ($arguments227['value'] !== NULL ? $arguments227['value'] : $renderChildrenClosure228());

$output181 .= (!is_string($value229) ? $value229 : htmlspecialchars($value229, ($arguments227['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments227['encoding'] !== NULL ? $arguments227['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments227['doubleEncode']));

$output181 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments230 = array();
$arguments230['value'] = $currentVariableContainer->getOrNull('id');
$arguments230['keepQuotes'] = false;
$arguments230['encoding'] = NULL;
$arguments230['doubleEncode'] = true;
$renderChildrenClosure231 = function() {return NULL;};
$value232 = ($arguments230['value'] !== NULL ? $arguments230['value'] : $renderChildrenClosure231());

$output181 .= (!is_string($value232) ? $value232 : htmlspecialchars($value232, ($arguments230['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments230['encoding'] !== NULL ? $arguments230['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments230['doubleEncode']));

$output181 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments233 = array();
$arguments233['value'] = $currentVariableContainer->getOrNull('id');
$arguments233['keepQuotes'] = false;
$arguments233['encoding'] = NULL;
$arguments233['doubleEncode'] = true;
$renderChildrenClosure234 = function() {return NULL;};
$value235 = ($arguments233['value'] !== NULL ? $arguments233['value'] : $renderChildrenClosure234());

$output181 .= (!is_string($value235) ? $value235 : htmlspecialchars($value235, ($arguments233['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments233['encoding'] !== NULL ? $arguments233['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments233['doubleEncode']));

$output181 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments236 = array();
$arguments236['value'] = $currentVariableContainer->getOrNull('id');
$arguments236['keepQuotes'] = false;
$arguments236['encoding'] = NULL;
$arguments236['doubleEncode'] = true;
$renderChildrenClosure237 = function() {return NULL;};
$value238 = ($arguments236['value'] !== NULL ? $arguments236['value'] : $renderChildrenClosure237());

$output181 .= (!is_string($value238) ? $value238 : htmlspecialchars($value238, ($arguments236['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments236['encoding'] !== NULL ? $arguments236['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments236['doubleEncode']));

$output181 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments239 = array();
$arguments239['value'] = $currentVariableContainer->getOrNull('id');
$arguments239['keepQuotes'] = false;
$arguments239['encoding'] = NULL;
$arguments239['doubleEncode'] = true;
$renderChildrenClosure240 = function() {return NULL;};
$value241 = ($arguments239['value'] !== NULL ? $arguments239['value'] : $renderChildrenClosure240());

$output181 .= (!is_string($value241) ? $value241 : htmlspecialchars($value241, ($arguments239['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments239['encoding'] !== NULL ? $arguments239['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments239['doubleEncode']));

$output181 .= '][perms_user]\')" /></td>
						</tr>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments242 = array();
$arguments242['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';
$arguments242['id'] = NULL;
$arguments242['default'] = NULL;
$arguments242['htmlEscape'] = NULL;
$arguments242['arguments'] = NULL;
$arguments242['extensionName'] = NULL;
$renderChildrenClosure243 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output181 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_group][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments244 = array();
$arguments244['value'] = $currentVariableContainer->getOrNull('id');
$arguments244['keepQuotes'] = false;
$arguments244['encoding'] = NULL;
$arguments244['doubleEncode'] = true;
$renderChildrenClosure245 = function() {return NULL;};
$value246 = ($arguments244['value'] !== NULL ? $arguments244['value'] : $renderChildrenClosure245());

$output181 .= (!is_string($value246) ? $value246 : htmlspecialchars($value246, ($arguments244['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments244['encoding'] !== NULL ? $arguments244['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments244['doubleEncode']));

$output181 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments247 = array();
$arguments247['value'] = $currentVariableContainer->getOrNull('id');
$arguments247['keepQuotes'] = false;
$arguments247['encoding'] = NULL;
$arguments247['doubleEncode'] = true;
$renderChildrenClosure248 = function() {return NULL;};
$value249 = ($arguments247['value'] !== NULL ? $arguments247['value'] : $renderChildrenClosure248());

$output181 .= (!is_string($value249) ? $value249 : htmlspecialchars($value249, ($arguments247['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments247['encoding'] !== NULL ? $arguments247['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments247['doubleEncode']));

$output181 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments250 = array();
$arguments250['value'] = $currentVariableContainer->getOrNull('id');
$arguments250['keepQuotes'] = false;
$arguments250['encoding'] = NULL;
$arguments250['doubleEncode'] = true;
$renderChildrenClosure251 = function() {return NULL;};
$value252 = ($arguments250['value'] !== NULL ? $arguments250['value'] : $renderChildrenClosure251());

$output181 .= (!is_string($value252) ? $value252 : htmlspecialchars($value252, ($arguments250['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments250['encoding'] !== NULL ? $arguments250['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments250['doubleEncode']));

$output181 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments253 = array();
$arguments253['value'] = $currentVariableContainer->getOrNull('id');
$arguments253['keepQuotes'] = false;
$arguments253['encoding'] = NULL;
$arguments253['doubleEncode'] = true;
$renderChildrenClosure254 = function() {return NULL;};
$value255 = ($arguments253['value'] !== NULL ? $arguments253['value'] : $renderChildrenClosure254());

$output181 .= (!is_string($value255) ? $value255 : htmlspecialchars($value255, ($arguments253['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments253['encoding'] !== NULL ? $arguments253['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments253['doubleEncode']));

$output181 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments256 = array();
$arguments256['value'] = $currentVariableContainer->getOrNull('id');
$arguments256['keepQuotes'] = false;
$arguments256['encoding'] = NULL;
$arguments256['doubleEncode'] = true;
$renderChildrenClosure257 = function() {return NULL;};
$value258 = ($arguments256['value'] !== NULL ? $arguments256['value'] : $renderChildrenClosure257());

$output181 .= (!is_string($value258) ? $value258 : htmlspecialchars($value258, ($arguments256['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments256['encoding'] !== NULL ? $arguments256['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments256['doubleEncode']));

$output181 .= '][perms_group]\')" /></td>
						</tr>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments259 = array();
$arguments259['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['htmlEscape'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['extensionName'] = NULL;
$renderChildrenClosure260 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output181 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_everybody][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments261 = array();
$arguments261['value'] = $currentVariableContainer->getOrNull('id');
$arguments261['keepQuotes'] = false;
$arguments261['encoding'] = NULL;
$arguments261['doubleEncode'] = true;
$renderChildrenClosure262 = function() {return NULL;};
$value263 = ($arguments261['value'] !== NULL ? $arguments261['value'] : $renderChildrenClosure262());

$output181 .= (!is_string($value263) ? $value263 : htmlspecialchars($value263, ($arguments261['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments261['encoding'] !== NULL ? $arguments261['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments261['doubleEncode']));

$output181 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments264 = array();
$arguments264['value'] = $currentVariableContainer->getOrNull('id');
$arguments264['keepQuotes'] = false;
$arguments264['encoding'] = NULL;
$arguments264['doubleEncode'] = true;
$renderChildrenClosure265 = function() {return NULL;};
$value266 = ($arguments264['value'] !== NULL ? $arguments264['value'] : $renderChildrenClosure265());

$output181 .= (!is_string($value266) ? $value266 : htmlspecialchars($value266, ($arguments264['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments264['encoding'] !== NULL ? $arguments264['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments264['doubleEncode']));

$output181 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments267 = array();
$arguments267['value'] = $currentVariableContainer->getOrNull('id');
$arguments267['keepQuotes'] = false;
$arguments267['encoding'] = NULL;
$arguments267['doubleEncode'] = true;
$renderChildrenClosure268 = function() {return NULL;};
$value269 = ($arguments267['value'] !== NULL ? $arguments267['value'] : $renderChildrenClosure268());

$output181 .= (!is_string($value269) ? $value269 : htmlspecialchars($value269, ($arguments267['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments267['encoding'] !== NULL ? $arguments267['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments267['doubleEncode']));

$output181 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments270 = array();
$arguments270['value'] = $currentVariableContainer->getOrNull('id');
$arguments270['keepQuotes'] = false;
$arguments270['encoding'] = NULL;
$arguments270['doubleEncode'] = true;
$renderChildrenClosure271 = function() {return NULL;};
$value272 = ($arguments270['value'] !== NULL ? $arguments270['value'] : $renderChildrenClosure271());

$output181 .= (!is_string($value272) ? $value272 : htmlspecialchars($value272, ($arguments270['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments270['encoding'] !== NULL ? $arguments270['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments270['doubleEncode']));

$output181 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments273 = array();
$arguments273['value'] = $currentVariableContainer->getOrNull('id');
$arguments273['keepQuotes'] = false;
$arguments273['encoding'] = NULL;
$arguments273['doubleEncode'] = true;
$renderChildrenClosure274 = function() {return NULL;};
$value275 = ($arguments273['value'] !== NULL ? $arguments273['value'] : $renderChildrenClosure274());

$output181 .= (!is_string($value275) ? $value275 : htmlspecialchars($value275, ($arguments273['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments273['encoding'] !== NULL ? $arguments273['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments273['doubleEncode']));

$output181 .= '][perms_everybody]\')" /></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="form-group">
			<label for="recursionLevel">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments276 = array();
$arguments276['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';
$arguments276['id'] = NULL;
$arguments276['default'] = NULL;
$arguments276['htmlEscape'] = NULL;
$arguments276['arguments'] = NULL;
$arguments276['extensionName'] = NULL;
$renderChildrenClosure277 = function() {return NULL;};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output181 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments278 = array();
$arguments278['id'] = 'recursionLevel';
$output279 = '';

$output279 .= 'mirror[pages][';

$output279 .= $currentVariableContainer->getOrNull('id');

$output279 .= ']';
$arguments278['name'] = $output279;
$arguments278['options'] = $currentVariableContainer->getOrNull('recursiveSelectOptions');
$arguments278['class'] = 'form-control';
$arguments278['additionalAttributes'] = NULL;
$arguments278['data'] = NULL;
$arguments278['value'] = NULL;
$arguments278['property'] = NULL;
$arguments278['dir'] = NULL;
$arguments278['lang'] = NULL;
$arguments278['style'] = NULL;
$arguments278['title'] = NULL;
$arguments278['accesskey'] = NULL;
$arguments278['tabindex'] = NULL;
$arguments278['onclick'] = NULL;
$arguments278['size'] = NULL;
$arguments278['disabled'] = NULL;
$arguments278['optionValueField'] = NULL;
$arguments278['optionLabelField'] = NULL;
$arguments278['sortByOptionLabel'] = false;
$arguments278['selectAllByDefault'] = false;
$arguments278['errorClass'] = 'f3-form-error';
$arguments278['prependOptionLabel'] = NULL;
$arguments278['prependOptionValue'] = NULL;
$arguments278['multiple'] = false;
$renderChildrenClosure280 = function() {return NULL;};
$viewHelper281 = $self->getViewHelper('$viewHelper281', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper281->setArguments($arguments278);
$viewHelper281->setRenderingContext($renderingContext);
$viewHelper281->setRenderChildrenClosure($renderChildrenClosure280);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output181 .= $viewHelper281->initializeArgumentsAndRender();

$output181 .= '
		</div>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments282 = array();
$output283 = '';

$output283 .= 'data[pages][';

$output283 .= $currentVariableContainer->getOrNull('id');

$output283 .= '][perms_user]';
$arguments282['name'] = $output283;
$arguments282['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageInfo'), 'perms_user', $renderingContext);
$arguments282['additionalAttributes'] = NULL;
$arguments282['data'] = NULL;
$arguments282['property'] = NULL;
$arguments282['class'] = NULL;
$arguments282['dir'] = NULL;
$arguments282['id'] = NULL;
$arguments282['lang'] = NULL;
$arguments282['style'] = NULL;
$arguments282['title'] = NULL;
$arguments282['accesskey'] = NULL;
$arguments282['tabindex'] = NULL;
$arguments282['onclick'] = NULL;
$renderChildrenClosure284 = function() {return NULL;};
$viewHelper285 = $self->getViewHelper('$viewHelper285', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper285->setArguments($arguments282);
$viewHelper285->setRenderingContext($renderingContext);
$viewHelper285->setRenderChildrenClosure($renderChildrenClosure284);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output181 .= $viewHelper285->initializeArgumentsAndRender();

$output181 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments286 = array();
$output287 = '';

$output287 .= 'data[pages][';

$output287 .= $currentVariableContainer->getOrNull('id');

$output287 .= '][perms_group]';
$arguments286['name'] = $output287;
$arguments286['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageInfo'), 'perms_group', $renderingContext);
$arguments286['additionalAttributes'] = NULL;
$arguments286['data'] = NULL;
$arguments286['property'] = NULL;
$arguments286['class'] = NULL;
$arguments286['dir'] = NULL;
$arguments286['id'] = NULL;
$arguments286['lang'] = NULL;
$arguments286['style'] = NULL;
$arguments286['title'] = NULL;
$arguments286['accesskey'] = NULL;
$arguments286['tabindex'] = NULL;
$arguments286['onclick'] = NULL;
$renderChildrenClosure288 = function() {return NULL;};
$viewHelper289 = $self->getViewHelper('$viewHelper289', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper289->setArguments($arguments286);
$viewHelper289->setRenderingContext($renderingContext);
$viewHelper289->setRenderChildrenClosure($renderChildrenClosure288);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output181 .= $viewHelper289->initializeArgumentsAndRender();

$output181 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments290 = array();
$output291 = '';

$output291 .= 'data[pages][';

$output291 .= $currentVariableContainer->getOrNull('id');

$output291 .= '][perms_everybody]';
$arguments290['name'] = $output291;
$arguments290['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pageInfo'), 'perms_everybody', $renderingContext);
$arguments290['additionalAttributes'] = NULL;
$arguments290['data'] = NULL;
$arguments290['property'] = NULL;
$arguments290['class'] = NULL;
$arguments290['dir'] = NULL;
$arguments290['id'] = NULL;
$arguments290['lang'] = NULL;
$arguments290['style'] = NULL;
$arguments290['title'] = NULL;
$arguments290['accesskey'] = NULL;
$arguments290['tabindex'] = NULL;
$arguments290['onclick'] = NULL;
$renderChildrenClosure292 = function() {return NULL;};
$viewHelper293 = $self->getViewHelper('$viewHelper293', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper293->setArguments($arguments290);
$viewHelper293->setRenderingContext($renderingContext);
$viewHelper293->setRenderChildrenClosure($renderChildrenClosure292);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output181 .= $viewHelper293->initializeArgumentsAndRender();

$output181 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments294 = array();
$arguments294['name'] = 'depth';
$arguments294['value'] = $currentVariableContainer->getOrNull('depth');
$arguments294['additionalAttributes'] = NULL;
$arguments294['data'] = NULL;
$arguments294['property'] = NULL;
$arguments294['class'] = NULL;
$arguments294['dir'] = NULL;
$arguments294['id'] = NULL;
$arguments294['lang'] = NULL;
$arguments294['style'] = NULL;
$arguments294['title'] = NULL;
$arguments294['accesskey'] = NULL;
$arguments294['tabindex'] = NULL;
$arguments294['onclick'] = NULL;
$renderChildrenClosure295 = function() {return NULL;};
$viewHelper296 = $self->getViewHelper('$viewHelper296', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper296->setArguments($arguments294);
$viewHelper296->setRenderingContext($renderingContext);
$viewHelper296->setRenderChildrenClosure($renderChildrenClosure295);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output181 .= $viewHelper296->initializeArgumentsAndRender();

$output181 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$arguments297 = array();
$arguments297['name'] = 'redirect';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments298 = array();
$arguments298['action'] = 'index';
// Rendering Array
$array299 = array();
$array299['lastEdited'] = $currentVariableContainer->getOrNull('id');
$array299['id'] = $currentVariableContainer->getOrNull('returnId');
$arguments298['arguments'] = $array299;
$arguments298['controller'] = NULL;
$arguments298['extensionName'] = NULL;
$arguments298['pluginName'] = NULL;
$arguments298['pageUid'] = NULL;
$arguments298['pageType'] = 0;
$arguments298['noCache'] = false;
$arguments298['noCacheHash'] = false;
$arguments298['section'] = '';
$arguments298['format'] = '';
$arguments298['linkAccessRestrictedPages'] = false;
$arguments298['additionalParams'] = array (
);
$arguments298['absolute'] = false;
$arguments298['addQueryString'] = false;
$arguments298['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments298['addQueryStringMethod'] = NULL;
$renderChildrenClosure300 = function() {return NULL;};
$viewHelper301 = $self->getViewHelper('$viewHelper301', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper');
$viewHelper301->setArguments($arguments298);
$viewHelper301->setRenderingContext($renderingContext);
$viewHelper301->setRenderChildrenClosure($renderChildrenClosure300);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$arguments297['value'] = $viewHelper301->initializeArgumentsAndRender();
$arguments297['additionalAttributes'] = NULL;
$arguments297['data'] = NULL;
$arguments297['property'] = NULL;
$arguments297['class'] = NULL;
$arguments297['dir'] = NULL;
$arguments297['id'] = NULL;
$arguments297['lang'] = NULL;
$arguments297['style'] = NULL;
$arguments297['title'] = NULL;
$arguments297['accesskey'] = NULL;
$arguments297['tabindex'] = NULL;
$arguments297['onclick'] = NULL;
$renderChildrenClosure302 = function() {return NULL;};
$viewHelper303 = $self->getViewHelper('$viewHelper303', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper');
$viewHelper303->setArguments($arguments297);
$viewHelper303->setRenderingContext($renderingContext);
$viewHelper303->setRenderChildrenClosure($renderChildrenClosure302);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper

$output181 .= $viewHelper303->initializeArgumentsAndRender();

$output181 .= '

	';
return $output181;
};
$viewHelper304 = $self->getViewHelper('$viewHelper304', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper304->setArguments($arguments179);
$viewHelper304->setRenderingContext($renderingContext);
$viewHelper304->setRenderChildrenClosure($renderChildrenClosure180);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output178 .= $viewHelper304->initializeArgumentsAndRender();

$output178 .= '

	<hr>
	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments305 = array();
$arguments305['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';
$arguments305['id'] = NULL;
$arguments305['default'] = NULL;
$arguments305['htmlEscape'] = NULL;
$arguments305['arguments'] = NULL;
$arguments305['extensionName'] = NULL;
$renderChildrenClosure306 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output178 .= '</h3>
	<p>
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments307 = array();
$arguments307['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';
$arguments307['id'] = NULL;
$arguments307['default'] = NULL;
$arguments307['htmlEscape'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['extensionName'] = NULL;
$renderChildrenClosure308 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output178 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments309 = array();
$arguments309['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';
$arguments309['id'] = NULL;
$arguments309['default'] = NULL;
$arguments309['htmlEscape'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['extensionName'] = NULL;
$renderChildrenClosure310 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output178 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments311 = array();
$arguments311['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';
$arguments311['id'] = NULL;
$arguments311['default'] = NULL;
$arguments311['htmlEscape'] = NULL;
$arguments311['arguments'] = NULL;
$arguments311['extensionName'] = NULL;
$renderChildrenClosure312 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output178 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments313 = array();
$arguments313['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';
$arguments313['id'] = NULL;
$arguments313['default'] = NULL;
$arguments313['htmlEscape'] = NULL;
$arguments313['arguments'] = NULL;
$arguments313['extensionName'] = NULL;
$renderChildrenClosure314 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output178 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments315 = array();
$arguments315['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';
$arguments315['id'] = NULL;
$arguments315['default'] = NULL;
$arguments315['htmlEscape'] = NULL;
$arguments315['arguments'] = NULL;
$arguments315['extensionName'] = NULL;
$renderChildrenClosure316 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output178 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments317 = array();
$arguments317['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';
$arguments317['id'] = NULL;
$arguments317['default'] = NULL;
$arguments317['htmlEscape'] = NULL;
$arguments317['arguments'] = NULL;
$arguments317['extensionName'] = NULL;
$renderChildrenClosure318 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output178 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments319 = array();
$arguments319['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';
$arguments319['id'] = NULL;
$arguments319['default'] = NULL;
$arguments319['htmlEscape'] = NULL;
$arguments319['arguments'] = NULL;
$arguments319['extensionName'] = NULL;
$renderChildrenClosure320 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output178 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments321 = array();
$arguments321['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';
$arguments321['id'] = NULL;
$arguments321['default'] = NULL;
$arguments321['htmlEscape'] = NULL;
$arguments321['arguments'] = NULL;
$arguments321['extensionName'] = NULL;
$renderChildrenClosure322 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output178 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments323 = array();
$arguments323['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';
$arguments323['id'] = NULL;
$arguments323['default'] = NULL;
$arguments323['htmlEscape'] = NULL;
$arguments323['arguments'] = NULL;
$arguments323['extensionName'] = NULL;
$renderChildrenClosure324 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output178 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments325 = array();
$arguments325['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';
$arguments325['id'] = NULL;
$arguments325['default'] = NULL;
$arguments325['htmlEscape'] = NULL;
$arguments325['arguments'] = NULL;
$arguments325['extensionName'] = NULL;
$renderChildrenClosure326 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output178 .= '
	</p>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments327 = array();
$arguments327['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';
$arguments327['id'] = NULL;
$arguments327['default'] = NULL;
$arguments327['htmlEscape'] = NULL;
$arguments327['arguments'] = NULL;
$arguments327['extensionName'] = NULL;
$renderChildrenClosure328 = function() {return NULL;};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output178 .= '</p>

	<script type="text/javascript">
		require(["jquery", "TYPO3/CMS/Beuser/Permissions"], function($, Permissions) {
			Permissions.setCheck("check[perms_user]", "tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments329 = array();
$arguments329['value'] = $currentVariableContainer->getOrNull('id');
$arguments329['keepQuotes'] = false;
$arguments329['encoding'] = NULL;
$arguments329['doubleEncode'] = true;
$renderChildrenClosure330 = function() {return NULL;};
$value331 = ($arguments329['value'] !== NULL ? $arguments329['value'] : $renderChildrenClosure330());

$output178 .= (!is_string($value331) ? $value331 : htmlspecialchars($value331, ($arguments329['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments329['encoding'] !== NULL ? $arguments329['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments329['doubleEncode']));

$output178 .= '][perms_user]");
			Permissions.setCheck("check[perms_group]", "tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments332 = array();
$arguments332['value'] = $currentVariableContainer->getOrNull('id');
$arguments332['keepQuotes'] = false;
$arguments332['encoding'] = NULL;
$arguments332['doubleEncode'] = true;
$renderChildrenClosure333 = function() {return NULL;};
$value334 = ($arguments332['value'] !== NULL ? $arguments332['value'] : $renderChildrenClosure333());

$output178 .= (!is_string($value334) ? $value334 : htmlspecialchars($value334, ($arguments332['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments332['encoding'] !== NULL ? $arguments332['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments332['doubleEncode']));

$output178 .= '][perms_group]");
			Permissions.setCheck("check[perms_everybody]", "tx_beuser_system_beusertxpermission[data][pages][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments335 = array();
$arguments335['value'] = $currentVariableContainer->getOrNull('id');
$arguments335['keepQuotes'] = false;
$arguments335['encoding'] = NULL;
$arguments335['doubleEncode'] = true;
$renderChildrenClosure336 = function() {return NULL;};
$value337 = ($arguments335['value'] !== NULL ? $arguments335['value'] : $renderChildrenClosure336());

$output178 .= (!is_string($value337) ? $value337 : htmlspecialchars($value337, ($arguments335['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments335['encoding'] !== NULL ? $arguments335['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments335['doubleEncode']));

$output178 .= '][perms_everybody]");
		});
	</script>

';
return $output178;
};

$output165 .= '';

$output165 .= '
';


return $output165;
}


}
#1475741674    109197    