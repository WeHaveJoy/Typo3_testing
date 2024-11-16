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
var __decorate=function(t,e,i,o){var n,r=arguments.length,a=r<3?e:null===o?o=Object.getOwnPropertyDescriptor(e,i):o;if("object"==typeof Reflect&&"function"==typeof Reflect.decorate)a=Reflect.decorate(t,e,i,o);else for(var l=t.length-1;l>=0;l--)(n=t[l])&&(a=(r<3?n(a):r>3?n(e,i,a):n(e,i))||a);return r>3&&a&&Object.defineProperty(e,i,a),a};import{html,css,LitElement,nothing}from"lit";import{customElement,property,state}from"lit/decorators.js";import"@typo3/backend/element/icon-element.js";import AjaxDataHandler from"@typo3/backend/ajax-data-handler.js";let EditablePageTitle=class extends LitElement{constructor(){super(...arguments),this.pageTitle="",this.pageId=0,this.localizedPageId=0,this.editable=!1,this._isEditing=!1,this._isSubmitting=!1,this.labels={input:TYPO3?.lang?.["editablePageTitle.input.field.label"]||"Field",edit:TYPO3?.lang?.["editablePageTitle.button.edit.label"]||"Edit",save:TYPO3?.lang?.["editablePageTitle.button.save.label"]||"Save",cancel:TYPO3?.lang?.["editablePageTitle.button.cancel.label"]||"Cancel"}}async startEditing(){this.isEditable()&&(this._isEditing=!0,await this.updateComplete,this.shadowRoot.querySelector("input")?.focus())}render(){if(""===this.pageTitle)return nothing;if(!this.isEditable())return html`<div class="wrapper"><h1>${this.pageTitle}</h1></div>`;let t;return t=this._isEditing?this.composeEditForm():html`
        <div class="wrapper">
          <h1 @dblclick="${()=>{this.startEditing()}}">${this.pageTitle}</h1>
          ${this.composeEditButton()}
        </div>`,t}isEditable(){return this.editable&&this.pageId>0}endEditing(){this.isEditable()&&(this._isEditing=!1)}updatePageTitle(t){t.preventDefault();const e=new FormData(t.target),i=Object.fromEntries(e).newPageTitle.toString();if(this.pageTitle===i)return void this.endEditing();this._isSubmitting=!0;let o=this.pageId;this.localizedPageId>0&&(o=this.localizedPageId);const n={data:{pages:{[o]:{title:i}}}};AjaxDataHandler.process(n).then((()=>{this.pageTitle=i,top.document.dispatchEvent(new CustomEvent("typo3:pagetree:refresh"))})).finally((()=>{this.endEditing(),this._isSubmitting=!1}))}composeEditButton(){return html`
      <button
        data-action="edit"
        type="button"
        title="${this.labels.edit}"
        @click="${()=>{this.startEditing()}}"
      >
        <typo3-backend-icon identifier="actions-open" size="small"></typo3-backend-icon>
        <span class="screen-reader">${this.labels.edit}</span>
      </button>`}composeEditForm(){return html`
      <form class="wrapper" @submit="${this.updatePageTitle}">
        <label class="screen-reader" for="input">${this.labels.input}</label>
        <input
          autocomplete="off"
          id="input"
          name="newPageTitle"
          required
          value="${this.pageTitle}"
          ?disabled="${this._isSubmitting}"
          @keydown="${t=>{"Escape"===t.key&&this.endEditing()}}"
        >
        <button
          data-action="save"
          type="submit"
          title="${this.labels.save}"
          ?disabled="${this._isSubmitting}"
        >
          <typo3-backend-icon identifier="actions-check" size="small"></typo3-backend-icon>
          <span class="screen-reader">${this.labels.save}</span>
        </button>
        <button
          data-action="close"
          type="button"
          title="${this.labels.cancel}"
          ?disabled="${this._isSubmitting}"
          @click="${()=>{this.endEditing()}}"
        >
          <typo3-backend-icon identifier="actions-close" size="small"></typo3-backend-icon>
          <span class="screen-reader">${this.labels.cancel}</span>
        </button>
      </form>`}};EditablePageTitle.styles=css`
    :host {
      display: block;
      --input-border-color: #bebebe;
      --input-hover-border-color: #bebebe;
      --input-focus-border-color: #bebebe;
      --button-border-radius:
      --button-color: inherit;
      --button-bg: transparent;
      --button-border-color: transparent;
      --button-hover-color: inherit;
      --button-hover-bg: #cacaca;
      --button-hover-border-color: #bebebe;
      --button-focus-color: inherit;
      --button-focus-bg: #cacaca;
      --button-focus-border-color: #bebebe;
    }

    h1 {
      display: block;
      font-weight: inherit;
      font-size: inherit;
      font-family: inherit;
      line-height: inherit;
      white-space: nowrap;
      text-overflow: ellipsis;
      overflow: hidden;
      padding: 1px 0;
      margin: 0;
    }

    input {
      outline: none;
      background: transparent;
      font-weight: inherit;
      font-size: inherit;
      font-family: inherit;
      line-height: inherit;
      padding: 0;
      border: 0;
      border-top: 1px solid transparent;
      border-bottom: 1px dashed var(--input-border-color);
      margin: 0;
      width: 100%;
      outline-offset: 0;
    }

    input:hover {
      --input-border-color: var(--input-hover-border-color);
    }

    input:focus {
      --input-border-color: var(--input-focus-border-color);
    }

    input:focus-visible {
      outline: .25rem solid color-mix(in srgb, var(--input-border-color), transparent 25%);
    }

    .wrapper {
      position: relative;
      margin: -1px 0;
    }

    div.wrapper {
      padding-inline-end: 1.5em;
    }

    form.wrapper {
      padding-inline-end: 2.5em;
    }

    button {
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: inherit;
      line-height: inherit;
      border: 0;
      padding: 0;
      height: 100%;
      width: 1em;
      position: absolute;
      top: 0;
      border-radius: 2px;
      overflow: hidden;
      outline: none;
      color: var(--button-color);
      background: var(--button-bg);
      border: 1px solid var(--button-border-color);
      opacity: .3;
      outline-offset: 0;
      transition: all .2s ease-in-out;
    }

    button:hover {
      opacity: 1;
      --button-color: var(--button-hover-color);
      --button-bg: var(--button-hover-bg);
      --button-border-color: var(--button-hover-border-color);
    }

    button:focus {
      opacity: 1;
      --button-color: var(--button-focus-color);
      --button-bg: var(--button-focus-bg);
      --button-border-color: var(--button-focus-border-color);
    }

    button:focus-visible {
      outline: .25rem solid color-mix(in srgb, var(--button-border-color), transparent 25%);
    }

    button[data-action="edit"] {
      inset-inline-end: 0;
    }

    button[data-action="save"] {
      inset-inline-end: calc(1em + 2px);
    }

    button[data-action="close"] {
      inset-inline-end: 0;
    }

    .screen-reader {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0,0,0,0);
      white-space: nowrap;
      border: 0
    }
    `,__decorate([property({type:String})],EditablePageTitle.prototype,"pageTitle",void 0),__decorate([property({type:Number})],EditablePageTitle.prototype,"pageId",void 0),__decorate([property({type:Number})],EditablePageTitle.prototype,"localizedPageId",void 0),__decorate([property({type:Boolean})],EditablePageTitle.prototype,"editable",void 0),__decorate([state()],EditablePageTitle.prototype,"_isEditing",void 0),__decorate([state()],EditablePageTitle.prototype,"_isSubmitting",void 0),EditablePageTitle=__decorate([customElement("typo3-backend-editable-page-title")],EditablePageTitle);export{EditablePageTitle};