import{g as G,y as J,i as Q,_ as r,a2 as U,u as X,o as Y,a1 as Z,c as ee,bu as oe,a as O,Q as ne,aG as m,x as te,F as I}from"./styleChecker-Df-oH1eW.js";import{P as ae}from"./index-BUZI-vWb.js";import{A as le,D as se,E as ie,t as j,B as re}from"./index-C9fHJQYV.js";import{u as ce}from"./Col-BXR5Jqji.js";import{o as ue,K as pe}from"./slide-Crjdf57_.js";import{A as de}from"./index-DQ-AD_lV.js";import{J as me,i as fe,O as ve,g as z,a as i}from"./app-BeUaVeIi.js";const ge=o=>{const{componentCls:l,iconCls:t,zIndexPopup:a,colorText:s,colorWarning:C,marginXS:p,fontSize:c,fontWeightStrong:x,lineHeight:d}=o;return{[l]:{zIndex:a,[`${l}-inner-content`]:{color:s},[`${l}-message`]:{position:"relative",marginBottom:p,color:s,fontSize:c,display:"flex",flexWrap:"nowrap",alignItems:"start",[`> ${l}-message-icon ${t}`]:{color:C,fontSize:c,flex:"none",lineHeight:1,paddingTop:(Math.round(c*d)-c)/2},"&-title":{flex:"auto",marginInlineStart:p},"&-title-only":{fontWeight:x}},[`${l}-description`]:{position:"relative",marginInlineStart:c+p,marginBottom:p,color:s,fontSize:c},[`${l}-buttons`]:{textAlign:"end",button:{marginInlineStart:p}}}}},ye=G("Popconfirm",o=>ge(o),o=>{const{zIndexPopupBase:l}=o;return{zIndexPopup:l+60}});var Ce=function(o,l){var t={};for(var a in o)Object.prototype.hasOwnProperty.call(o,a)&&l.indexOf(a)<0&&(t[a]=o[a]);if(o!=null&&typeof Object.getOwnPropertySymbols=="function")for(var s=0,a=Object.getOwnPropertySymbols(o);s<a.length;s++)l.indexOf(a[s])<0&&Object.prototype.propertyIsEnumerable.call(o,a[s])&&(t[a[s]]=o[a[s]]);return t};const xe=()=>r(r({},se()),{prefixCls:String,content:m(),title:m(),description:m(),okType:te("primary"),disabled:{type:Boolean,default:!1},okText:m(),cancelText:m(),icon:m(),okButtonProps:I(),cancelButtonProps:I(),showCancel:{type:Boolean,default:!0},onConfirm:Function,onCancel:Function}),Pe=me({compatConfig:{MODE:3},name:"APopconfirm",inheritAttrs:!1,props:Q(xe(),r(r({},le()),{trigger:"click",placement:"top",mouseEnterDelay:.1,mouseLeaveDelay:.1,arrowPointAtCenter:!1,autoAdjustOverflow:!0,okType:"primary",disabled:!1})),slots:Object,setup(o,l){let{slots:t,emit:a,expose:s,attrs:C}=l;const p=fe();U(o.visible===void 0),s({getPopupDomNode:()=>{var e,n;return(n=(e=p.value)===null||e===void 0?void 0:e.getPopupDomNode)===null||n===void 0?void 0:n.call(e)}});const[c,x]=ce(!1,{value:ve(o,"open")}),d=(e,n)=>{o.open===void 0&&x(e),a("update:open",e),a("openChange",e,n)},D=e=>{d(!1,e)},T=e=>{var n;return(n=o.onConfirm)===null||n===void 0?void 0:n.call(o,e)},A=e=>{var n;d(!1,e),(n=o.onCancel)===null||n===void 0||n.call(o,e)},E=e=>{e.keyCode===pe.ESC&&c&&d(!1,e)},F=e=>{const{disabled:n}=o;n||d(e)},{prefixCls:u,getPrefixCls:k}=X("popconfirm",o),R=z(()=>k()),K=z(()=>k("btn")),[L]=ye(u),[S]=Y("Popconfirm",Z.Popconfirm),V=()=>{var e,n,f,v,g;const{okButtonProps:y,cancelButtonProps:P,title:b=(e=t.title)===null||e===void 0?void 0:e.call(t),description:_=(n=t.description)===null||n===void 0?void 0:n.call(t),cancelText:W=(f=t.cancel)===null||f===void 0?void 0:f.call(t),okText:H=(v=t.okText)===null||v===void 0?void 0:v.call(t),okType:h,icon:B=((g=t.icon)===null||g===void 0?void 0:g.call(t))||i(ie,null,null),showCancel:M=!0}=o,{cancelButton:w,okButton:N}=t,$=r({onClick:A,size:"small"},P),q=r(r(r({onClick:T},j(h)),{size:"small"}),y);return i("div",{class:`${u.value}-inner-content`},[i("div",{class:`${u.value}-message`},[B&&i("span",{class:`${u.value}-message-icon`},[B]),i("div",{class:[`${u.value}-message-title`,{[`${u.value}-message-title-only`]:!!_}]},[b])]),_&&i("div",{class:`${u.value}-description`},[_]),i("div",{class:`${u.value}-buttons`},[M?w?w($):i(re,$,{default:()=>[W||S.value.cancelText]}):null,N?N(q):i(de,{buttonProps:r(r({size:"small"},j(h)),y),actionFn:T,close:D,prefixCls:K.value,quitOnNullishReturnValue:!0,emitEvent:!0},{default:()=>[H||S.value.okText]})])])};return()=>{var e;const{placement:n,overlayClassName:f,trigger:v="click"}=o,g=Ce(o,["placement","overlayClassName","trigger"]),y=ue(g,["title","content","cancelText","okText","onUpdate:open","onConfirm","onCancel","prefixCls"]),P=ee(u.value,f);return L(i(ae,O(O(O({},y),C),{},{trigger:v,placement:n,onOpenChange:F,open:c.value,overlayClassName:P,transitionName:ne(R.value,"zoom-big",o.transitionName),ref:p,"data-popover-inject":!0}),{default:()=>[oe(((e=t.default)===null||e===void 0?void 0:e.call(t))||[],{onKeydown:b=>{E(b)}},!1)],content:V}))}}}),Be=J(Pe);export{Be as _};
