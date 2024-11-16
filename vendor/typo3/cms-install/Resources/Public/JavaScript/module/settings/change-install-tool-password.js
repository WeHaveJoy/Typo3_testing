/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
import Modal from"@typo3/backend/modal.js";import Notification from"@typo3/backend/notification.js";import AjaxRequest from"@typo3/core/ajax/ajax-request.js";import Router from"@typo3/install/router.js";import PasswordStrength from"@typo3/install/module/password-strength.js";import{AbstractInteractableModule}from"@typo3/install/module/abstract-interactable-module.js";import RegularEvent from"@typo3/core/event/regular-event.js";var Identifiers;!function(t){t.changeButton=".t3js-changeInstallToolPassword-change"}(Identifiers||(Identifiers={}));class ChangeInstallToolPassword extends AbstractInteractableModule{initialize(t){super.initialize(t),this.getData(),new RegularEvent("click",(t=>{t.preventDefault(),this.change()})).delegateTo(t,Identifiers.changeButton)}getData(){const t=this.getModalBody();new AjaxRequest(Router.getUrl("changeInstallToolPasswordGetData")).get({cache:"no-cache"}).then((async e=>{const s=await e.resolve();!0===s.success?(t.innerHTML=s.html,PasswordStrength.initialize(t.querySelector(".t3-install-form-password-strength")),Modal.setButtons(s.buttons)):Notification.error("Something went wrong","The request was not processed successfully. Please check the browser's console and TYPO3's log.")}),(e=>{Router.handleAjaxError(e,t)}))}change(){this.setModalButtonsState(!1);const t=this.getModalBody(),e=this.getModuleContent().dataset.installToolToken;new AjaxRequest(Router.getUrl()).post({install:{action:"changeInstallToolPassword",token:e,password:this.findInModal(".t3js-changeInstallToolPassword-password").value,passwordCheck:this.findInModal(".t3js-changeInstallToolPassword-password-check").value}}).then((async t=>{const e=await t.resolve();!0===e.success&&Array.isArray(e.status)?e.status.forEach((t=>{Notification.showMessage(t.title,t.message,t.severity)})):Notification.error("Something went wrong","The request was not processed successfully. Please check the browser's console and TYPO3's log.")}),(e=>{Router.handleAjaxError(e,t)})).finally((()=>{this.findInModal(".t3js-changeInstallToolPassword-password").value="",this.findInModal(".t3js-changeInstallToolPassword-password-check").value="",this.setModalButtonsState(!0)}))}}export default new ChangeInstallToolPassword;