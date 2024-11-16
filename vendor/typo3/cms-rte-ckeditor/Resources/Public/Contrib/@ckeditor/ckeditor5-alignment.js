import{Command as e,Plugin as t,icons as n}from"@ckeditor/ckeditor5-core";import{logWarning as i,CKEditorError as o,first as a}from"@ckeditor/ckeditor5-utils";import{ButtonView as s,createDropdown as l,addToolbarToDropdown as r,MenuBarMenuView as c,MenuBarMenuListView as u,MenuBarMenuListItemView as m,MenuBarMenuListItemButtonView as d}from"@ckeditor/ckeditor5-ui";
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */const g=["left","right","center","justify"];function f(e){return g.includes(e)}function h(e,t){return"rtl"==t.contentLanguageDirection?"right"===e:"left"===e}function b(e){const t=e.map((e=>{let t;return t="string"==typeof e?{name:e}:e,t})).filter((e=>{const t=g.includes(e.name);return t||i("alignment-config-name-not-recognized",{option:e}),t})),n=t.filter((e=>Boolean(e.className))).length;if(n&&n<t.length)throw new o("alignment-config-classnames-are-missing",{configuredOptions:e});return t.forEach(((t,n,i)=>{const a=i.slice(n+1);if(a.some((e=>e.name==t.name)))throw new o("alignment-config-name-already-defined",{option:t,configuredOptions:e});if(t.className){if(a.some((e=>e.className==t.className)))throw new o("alignment-config-classname-already-defined",{option:t,configuredOptions:e})}})),t}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */const p="alignment";class w extends e{refresh(){const e=this.editor.locale,t=a(this.editor.model.document.selection.getSelectedBlocks());this.isEnabled=Boolean(t)&&this._canBeAligned(t),this.isEnabled&&t.hasAttribute("alignment")?this.value=t.getAttribute("alignment"):this.value="rtl"===e.contentLanguageDirection?"right":"left"}execute(e={}){const t=this.editor,n=t.locale,i=t.model,o=i.document,a=e.value;i.change((e=>{const t=Array.from(o.selection.getSelectedBlocks()).filter((e=>this._canBeAligned(e))),i=t[0].getAttribute("alignment");h(a,n)||i===a||!a?function(e,t){for(const n of e)t.removeAttribute(p,n)}(t,e):function(e,t,n){for(const i of e)t.setAttribute(p,n,i)}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(t,e,a)}))}_canBeAligned(e){return this.editor.model.schema.checkAttribute(e,p)}}class v extends t{static get pluginName(){return"AlignmentEditing"}constructor(e){super(e),e.config.define("alignment",{options:g.map((e=>({name:e})))})}init(){const e=this.editor,t=e.locale,n=e.model.schema,i=b(e.config.get("alignment.options")).filter((e=>f(e.name)&&!h(e.name,t))),o=i.some((e=>!!e.className));n.extend("$block",{allowAttributes:"alignment"}),e.model.schema.setAttributeProperties("alignment",{isFormatting:!0}),o?e.conversion.attributeToAttribute(function(e){const t={};for(const n of e)t[n.name]={key:"class",value:n.className};const n={model:{key:"alignment",values:e.map((e=>e.name))},view:t};return n}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(i)):e.conversion.for("downcast").attributeToAttribute(function(e){const t={};for(const{name:n}of e)t[n]={key:"style",value:{"text-align":n}};const n={model:{key:"alignment",values:e.map((e=>e.name))},view:t};return n}(i));const a=function(e){const t=[];for(const{name:n}of e)t.push({view:{key:"style",value:{"text-align":n}},model:{key:"alignment",value:n}});return t}(i);for(const t of a)e.conversion.for("upcast").attributeToAttribute(t);const s=function(e){const t=[];for(const{name:n}of e)t.push({view:{key:"align",value:n},model:{key:"alignment",value:n}});return t}(i);for(const t of s)e.conversion.for("upcast").attributeToAttribute(t);e.commands.add("alignment",new w(e))}}const A=(()=>new Map([["left",n.alignLeft],["right",n.alignRight],["center",n.alignCenter],["justify",n.alignJustify]]))();class y extends t{get localizedOptionTitles(){const e=this.editor.t;return{left:e("Align left"),right:e("Align right"),center:e("Align center"),justify:e("Justify")}}static get pluginName(){return"AlignmentUI"}init(){const e=b(this.editor.config.get("alignment.options"));e.map((e=>e.name)).filter(f).forEach((e=>this._addButton(e))),this._addToolbarDropdown(e),this._addMenuBarMenu(e)}_addButton(e){this.editor.ui.componentFactory.add(`alignment:${e}`,(t=>this._createButton(t,e)))}_createButton(e,t,n={}){const i=this.editor,o=i.commands.get("alignment"),a=new s(e);return a.set({label:this.localizedOptionTitles[t],icon:A.get(t),tooltip:!0,isToggleable:!0,...n}),a.bind("isEnabled").to(o),a.bind("isOn").to(o,"value",(e=>e===t)),this.listenTo(a,"execute",(()=>{i.execute("alignment",{value:t}),i.editing.view.focus()})),a}_addToolbarDropdown(e){const t=this.editor;t.ui.componentFactory.add("alignment",(n=>{const i=l(n),o="rtl"===n.uiLanguageDirection?"w":"e",a=n.t;r(i,(()=>e.map((e=>this._createButton(n,e.name,{tooltipPosition:o})))),{enableActiveItemFocusOnDropdownOpen:!0,isVertical:!0,ariaLabel:a("Text alignment toolbar")}),i.buttonView.set({label:a("Text alignment"),tooltip:!0}),i.extendTemplate({attributes:{class:"ck-alignment-dropdown"}});const s="rtl"===n.contentLanguageDirection?A.get("right"):A.get("left"),c=t.commands.get("alignment");return i.buttonView.bind("icon").to(c,"value",(e=>A.get(e)||s)),i.bind("isEnabled").to(c,"isEnabled"),this.listenTo(i,"execute",(()=>{t.editing.view.focus()})),i}))}_addMenuBarMenu(e){const t=this.editor;t.ui.componentFactory.add("menuBar:alignment",(n=>{const i=t.commands.get("alignment"),o=n.t,a=new c(n),s=new u(n);a.bind("isEnabled").to(i),s.set({ariaLabel:o("Text alignment"),role:"menu"}),a.buttonView.set({label:o("Text alignment")});for(const o of e){const e=new m(n,a),l=new d(n);l.delegate("execute").to(a),l.set({label:this.localizedOptionTitles[o.name],icon:A.get(o.name),role:"menuitemcheckbox",isToggleable:!0}),l.on("execute",(()=>{t.execute("alignment",{value:o.name}),t.editing.view.focus()})),l.bind("isOn").to(i,"value",(e=>e===o.name)),l.bind("isEnabled").to(i,"isEnabled"),e.children.add(l),s.items.add(e)}return a.panelView.children.add(s),a}))}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class x extends t{static get requires(){return[v,y]}static get pluginName(){return"Alignment"}}export{x as Alignment,v as AlignmentEditing,y as AlignmentUI};