<?php
class LibreNMSIntegrationPlugIn implements iApplicationUIExtension
{
	protected static $m_bIsModified = false;

	public function OnDisplayProperties($oObject, WebPage $oPage, $bEditMode = false)
	{
	}
	
	public function OnDisplayRelations($oObject, WebPage $oPage, $bEditMode = false)
	{
		if (!$bEditMode && ($oObject instanceof ConnectableCI))
		{
			$aTargetClasses = MetaModel::GetModuleSetting('librenms-integration', 'target_classes', array());
		
			$bIsTarget = false;
			foreach($aTargetClasses as $sTargetClass)
			{
				if ($oObject instanceof $sTargetClass)
				{
					$bIsTarget = true;
					break;
				}
			}
			if ($bIsTarget)
			{
				$sStatus = $oObject->Get('status');
				$sName = $oObject->Get('name');
				if ($sStatus == 'production')
				{
					$oPage->SetCurrentTab(Dict::S('UI:MonitoringTab'));
					$sUrl = MetaModel::GetModuleSetting('librenms-integration', 'librenms_url', '');
					$sUrl = MetaModel::ApplyParams($sUrl, array('this->object()' => $oObject));
					$oPage->add("<iframe width=\"100%\" height=\"400\" src=\"$librenms_url\"></iframe>");
				}
			}
		}
	}

	public function OnFormSubmit($oObject, $sFormPrefix = '')
	{
	}

	public function OnFormCancel($sTempId)
	{
	}

	public function EnumUsedAttributes($oObject)
	{
		return array();
	}

	public function GetIcon($oObject)
	{
		return '';
	}

	public function GetHilightClass($oObject)
	{
		// Possible return values are:
		// HILIGHT_CLASS_CRITICAL, HILIGHT_CLASS_WARNING, HILIGHT_CLASS_OK, HILIGHT_CLASS_NONE
		return HILIGHT_CLASS_NONE;
	}

	public function EnumAllowedActions(DBObjectSet $oSet)
	{
		// No action
		return array();
	}
}
