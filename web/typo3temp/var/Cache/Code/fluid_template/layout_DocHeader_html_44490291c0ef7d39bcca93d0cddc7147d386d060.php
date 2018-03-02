<?php

class layout_DocHeader_html_44490291c0ef7d39bcca93d0cddc7147d386d060 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
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
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['pageTitle'] = '';
$arguments1['loadExtJs'] = false;
$arguments1['loadExtJsTheme'] = true;
$arguments1['enableExtJsDebug'] = false;
$arguments1['loadJQuery'] = false;
$arguments1['includeCssFiles'] = NULL;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['jQueryNamespace'] = NULL;
$arguments1['addInlineSettings'] = NULL;
// Rendering Array
$array3 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['path'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['absolute'] = false;
$arguments4['path'] = 'Css/ui-lightness/jquery-ui-1.10.3.custom.min.css';
$array3['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
$arguments1['includeCssFiles'] = $array3;
// Rendering Array
$array6 = array();
$array6['0'] = 'TYPO3/CMS/Viewpage/Main';
$arguments1['includeRequireJsModules'] = $array6;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
<div class="tx_viewpage">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
		<h1>';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageTitle', $array13)]);

$output12 .= '</h1>
	';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('pageTitle', $array10);

$expression11 = function($context) {return ($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
	<div class="panel panel-default">
		<div class="panel-body">
			<form class="form-inline">
				<div class="form-group">
					<label for="width">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['key'] = 'width';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output0 .= '</label>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['name'] = NULL;
$arguments16['value'] = NULL;
$arguments16['property'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['size'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['options'] = NULL;
$arguments16['optionsAfterContent'] = false;
$arguments16['optionValueField'] = NULL;
$arguments16['optionLabelField'] = NULL;
$arguments16['sortByOptionLabel'] = false;
$arguments16['selectAllByDefault'] = false;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['prependOptionLabel'] = NULL;
$arguments16['prependOptionValue'] = NULL;
$arguments16['multiple'] = false;
$array18 = array (
);$arguments16['options'] = $renderingContext->getVariableProvider()->getByPath('widths', $array18);
$arguments16['id'] = 'width';
$arguments16['name'] = 'width';
$arguments16['class'] = 'form-control';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
					<div class="form-group">
						<label for="language">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['key'] = 'language';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '</label>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['name'] = NULL;
$arguments29['value'] = NULL;
$arguments29['property'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['size'] = NULL;
$arguments29['disabled'] = NULL;
$arguments29['options'] = NULL;
$arguments29['optionsAfterContent'] = false;
$arguments29['optionValueField'] = NULL;
$arguments29['optionLabelField'] = NULL;
$arguments29['sortByOptionLabel'] = false;
$arguments29['selectAllByDefault'] = false;
$arguments29['errorClass'] = 'f3-form-error';
$arguments29['prependOptionLabel'] = NULL;
$arguments29['prependOptionValue'] = NULL;
$arguments29['multiple'] = false;
$array31 = array (
);$arguments29['options'] = $renderingContext->getVariableProvider()->getByPath('languages', $array31);
$arguments29['id'] = 'language';
$arguments29['name'] = 'language';
$arguments29['class'] = 'form-control';

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output26 .= '
					</div>
				';
return $output26;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('languages', $array24);
};
$arguments22 = array();
$arguments22['subject'] = NULL;
$renderChildrenClosure23 = ($arguments22['subject'] !== null) ? function() use ($arguments22) { return $arguments22['subject']; } : $renderChildrenClosure23;$array21['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);
$array21['1'] = ' > 1';

$expression25 = function($context) {return (($context["node0"]) > 1);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = $renderChildrenClosure20;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
			</form>
		</div>
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['section'] = NULL;
$arguments32['partial'] = NULL;
$arguments32['delegate'] = NULL;
$arguments32['renderable'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['optional'] = false;
$arguments32['default'] = NULL;
$arguments32['contentAs'] = NULL;
$arguments32['section'] = 'Content';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output0 .= '
</div>
';

return $output0;
}


}
#