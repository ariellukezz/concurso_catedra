import{bo as de,I as A,g as ue,m as ce,_ as y,u as N,i as ge,c as W,a as V,P as p,aF as X}from"./styleChecker-Df-oH1eW.js";import{K as O,m as Y,p as fe,V as pe,a as g,J as B,i as me,R as q,g as he,P as ve,l as U,L as be}from"./app-BeUaVeIi.js";import{a as K,S as ye}from"./injectionKey-BXVc-oGP.js";function Ae(){const e=O({});let t=null;const r=de();return Y(()=>{t=r.value.subscribe(n=>{e.value=n})}),fe(()=>{r.value.unsubscribe(t)}),e}function Ne(e){const t=O();return pe(()=>{t.value=e()},{flush:"sync"}),t}const xe=e=>!isNaN(parseFloat(e))&&isFinite(e);var Se={icon:{tag:"svg",attrs:{viewBox:"64 64 896 896",focusable:"false"},children:[{tag:"path",attrs:{d:"M765.7 486.8L314.9 134.7A7.97 7.97 0 00302 141v77.3c0 4.9 2.3 9.6 6.1 12.6l360 281.1-360 281.1c-3.9 3-6.1 7.7-6.1 12.6V883c0 6.7 7.7 10.4 12.9 6.3l450.8-352.1a31.96 31.96 0 000-50.4z"}}]},name:"right",theme:"outlined"};function Z(e){for(var t=1;t<arguments.length;t++){var r=arguments[t]!=null?Object(arguments[t]):{},n=Object.keys(r);typeof Object.getOwnPropertySymbols=="function"&&(n=n.concat(Object.getOwnPropertySymbols(r).filter(function(o){return Object.getOwnPropertyDescriptor(r,o).enumerable}))),n.forEach(function(o){Oe(e,o,r[o])})}return e}function Oe(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}var w=function(t,r){var n=Z({},t,r.attrs);return g(A,Z({},n,{icon:Se}),null)};w.displayName="RightOutlined";w.inheritAttrs=!1;var $e={icon:{tag:"svg",attrs:{viewBox:"64 64 896 896",focusable:"false"},children:[{tag:"path",attrs:{d:"M724 218.3V141c0-6.7-7.7-10.4-12.9-6.3L260.3 486.8a31.86 31.86 0 000 50.3l450.8 352.1c5.3 4.1 12.9.4 12.9-6.3v-77.3c0-4.9-2.3-9.6-6.1-12.6l-360-281 360-281.1c3.8-3 6.1-7.7 6.1-12.6z"}}]},name:"left",theme:"outlined"};function G(e){for(var t=1;t<arguments.length;t++){var r=arguments[t]!=null?Object(arguments[t]):{},n=Object.keys(r);typeof Object.getOwnPropertySymbols=="function"&&(n=n.concat(Object.getOwnPropertySymbols(r).filter(function(o){return Object.getOwnPropertyDescriptor(r,o).enumerable}))),n.forEach(function(o){Ce(e,o,r[o])})}return e}function Ce(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}var H=function(t,r){var n=G({},t,r.attrs);return g(A,G({},n,{icon:$e}),null)};H.displayName="LeftOutlined";H.inheritAttrs=!1;const we=e=>{const{componentCls:t,colorBgContainer:r,colorBgBody:n,colorText:o}=e;return{[`${t}-sider-light`]:{background:r,[`${t}-sider-trigger`]:{color:o,background:r},[`${t}-sider-zero-width-trigger`]:{color:o,background:r,border:`1px solid ${n}`,borderInlineStart:0}}}},He=e=>{const{antCls:t,componentCls:r,colorText:n,colorTextLightSolid:o,colorBgHeader:f,colorBgBody:d,colorBgTrigger:l,layoutHeaderHeight:u,layoutHeaderPaddingInline:h,layoutHeaderColor:v,layoutFooterPadding:a,layoutTriggerHeight:s,layoutZeroTriggerSize:b,motionDurationMid:S,motionDurationSlow:i,fontSize:m,borderRadius:c}=e;return{[r]:y(y({display:"flex",flex:"auto",flexDirection:"column",color:n,minHeight:0,background:d,"&, *":{boxSizing:"border-box"},[`&${r}-has-sider`]:{flexDirection:"row",[`> ${r}, > ${r}-content`]:{width:0}},[`${r}-header, &${r}-footer`]:{flex:"0 0 auto"},[`${r}-header`]:{height:u,paddingInline:h,color:v,lineHeight:`${u}px`,background:f,[`${t}-menu`]:{lineHeight:"inherit"}},[`${r}-footer`]:{padding:a,color:n,fontSize:m,background:d},[`${r}-content`]:{flex:"auto",minHeight:0},[`${r}-sider`]:{position:"relative",minWidth:0,background:f,transition:`all ${S}, background 0s`,"&-children":{height:"100%",marginTop:-.1,paddingTop:.1,[`${t}-menu${t}-menu-inline-collapsed`]:{width:"auto"}},"&-has-trigger":{paddingBottom:s},"&-right":{order:1},"&-trigger":{position:"fixed",bottom:0,zIndex:1,height:s,color:o,lineHeight:`${s}px`,textAlign:"center",background:l,cursor:"pointer",transition:`all ${S}`},"&-zero-width":{"> *":{overflow:"hidden"},"&-trigger":{position:"absolute",top:u,insetInlineEnd:-b,zIndex:1,width:b,height:b,color:o,fontSize:e.fontSizeXL,display:"flex",alignItems:"center",justifyContent:"center",background:f,borderStartStartRadius:0,borderStartEndRadius:c,borderEndEndRadius:c,borderEndStartRadius:0,cursor:"pointer",transition:`background ${i} ease`,"&::after":{position:"absolute",inset:0,background:"transparent",transition:`all ${i}`,content:'""'},"&:hover::after":{background:"rgba(255, 255, 255, 0.2)"},"&-right":{insetInlineStart:-b,borderStartStartRadius:c,borderStartEndRadius:0,borderEndEndRadius:0,borderEndStartRadius:c}}}}},we(e)),{"&-rtl":{direction:"rtl"}})}},Be=ue("Layout",e=>{const{colorText:t,controlHeightSM:r,controlHeight:n,controlHeightLG:o,marginXXS:f}=e,d=o*1.25,l=ce(e,{layoutHeaderHeight:n*2,layoutHeaderPaddingInline:d,layoutHeaderColor:t,layoutFooterPadding:`${r}px ${d}px`,layoutTriggerHeight:o+f*2,layoutZeroTriggerSize:o});return[He(l)]},e=>{const{colorBgLayout:t}=e;return{colorBgHeader:"#001529",colorBgBody:t,colorBgTrigger:"#002140"}}),_=()=>({prefixCls:String,hasSider:{type:Boolean,default:void 0},tagName:String});function L(e){let{suffixCls:t,tagName:r,name:n}=e;return o=>B({compatConfig:{MODE:3},name:n,props:_(),setup(d,l){let{slots:u}=l;const{prefixCls:h}=N(t,d);return()=>{const v=y(y({},d),{prefixCls:h.value,tagName:r});return g(o,v,u)}}})}const I=B({compatConfig:{MODE:3},props:_(),setup(e,t){let{slots:r}=t;return()=>g(e.tagName,{class:e.prefixCls},r)}}),Le=B({compatConfig:{MODE:3},inheritAttrs:!1,props:_(),setup(e,t){let{slots:r,attrs:n}=t;const{prefixCls:o,direction:f}=N("",e),[d,l]=Be(o),u=me([]);q(K,{addSider:a=>{u.value=[...u.value,a]},removeSider:a=>{u.value=u.value.filter(s=>s!==a)}});const v=he(()=>{const{prefixCls:a,hasSider:s}=e;return{[l.value]:!0,[`${a}`]:!0,[`${a}-has-sider`]:typeof s=="boolean"?s:u.value.length>0,[`${a}-rtl`]:f.value==="rtl"}});return()=>{const{tagName:a}=e;return d(g(a,y(y({},n),{class:[v.value,n.class]}),r))}}}),T=L({suffixCls:"layout",tagName:"section",name:"ALayout"})(Le),C=L({suffixCls:"layout-header",tagName:"header",name:"ALayoutHeader"})(I),E=L({suffixCls:"layout-footer",tagName:"footer",name:"ALayoutFooter"})(I),R=L({suffixCls:"layout-content",tagName:"main",name:"ALayoutContent"})(I);var Pe={icon:{tag:"svg",attrs:{viewBox:"0 0 1024 1024",focusable:"false"},children:[{tag:"path",attrs:{d:"M912 192H328c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h584c4.4 0 8-3.6 8-8v-56c0-4.4-3.6-8-8-8zm0 284H328c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h584c4.4 0 8-3.6 8-8v-56c0-4.4-3.6-8-8-8zm0 284H328c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h584c4.4 0 8-3.6 8-8v-56c0-4.4-3.6-8-8-8zM104 228a56 56 0 10112 0 56 56 0 10-112 0zm0 284a56 56 0 10112 0 56 56 0 10-112 0zm0 284a56 56 0 10112 0 56 56 0 10-112 0z"}}]},name:"bars",theme:"outlined"};function J(e){for(var t=1;t<arguments.length;t++){var r=arguments[t]!=null?Object(arguments[t]):{},n=Object.keys(r);typeof Object.getOwnPropertySymbols=="function"&&(n=n.concat(Object.getOwnPropertySymbols(r).filter(function(o){return Object.getOwnPropertyDescriptor(r,o).enumerable}))),n.forEach(function(o){ke(e,o,r[o])})}return e}function ke(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}var M=function(t,r){var n=J({},t,r.attrs);return g(A,J({},n,{icon:Pe}),null)};M.displayName="BarsOutlined";M.inheritAttrs=!1;const Q={xs:"479.98px",sm:"575.98px",md:"767.98px",lg:"991.98px",xl:"1199.98px",xxl:"1599.98px",xxxl:"1999.98px"},ze=()=>({prefixCls:String,collapsible:{type:Boolean,default:void 0},collapsed:{type:Boolean,default:void 0},defaultCollapsed:{type:Boolean,default:void 0},reverseArrow:{type:Boolean,default:void 0},zeroWidthTriggerStyle:{type:Object,default:void 0},trigger:p.any,width:p.oneOfType([p.number,p.string]),collapsedWidth:p.oneOfType([p.number,p.string]),breakpoint:p.oneOf(X("xs","sm","md","lg","xl","xxl","xxxl")),theme:p.oneOf(X("light","dark")).def("dark"),onBreakpoint:Function,onCollapse:Function}),Te=(()=>{let e=0;return function(){let t=arguments.length>0&&arguments[0]!==void 0?arguments[0]:"";return e+=1,`${t}${e}`}})(),j=B({compatConfig:{MODE:3},name:"ALayoutSider",inheritAttrs:!1,props:ge(ze(),{collapsible:!1,defaultCollapsed:!1,reverseArrow:!1,width:200,collapsedWidth:80}),emits:["breakpoint","update:collapsed","collapse"],setup(e,t){let{emit:r,attrs:n,slots:o}=t;const{prefixCls:f}=N("layout-sider",e),d=ve(K,void 0),l=O(!!(e.collapsed!==void 0?e.collapsed:e.defaultCollapsed)),u=O(!1);U(()=>e.collapsed,()=>{l.value=!!e.collapsed}),q(ye,l);const h=(i,m)=>{e.collapsed===void 0&&(l.value=i),r("update:collapsed",i),r("collapse",i,m)},v=O(i=>{u.value=i.matches,r("breakpoint",i.matches),l.value!==i.matches&&h(i.matches,"responsive")});let a;function s(i){return v.value(i)}const b=Te("ant-sider-");d&&d.addSider(b),Y(()=>{U(()=>e.breakpoint,()=>{try{a==null||a.removeEventListener("change",s)}catch{a==null||a.removeListener(s)}if(typeof window<"u"){const{matchMedia:i}=window;if(i&&e.breakpoint&&e.breakpoint in Q){a=i(`(max-width: ${Q[e.breakpoint]})`);try{a.addEventListener("change",s)}catch{a.addListener(s)}s(a)}}},{immediate:!0})}),be(()=>{try{a==null||a.removeEventListener("change",s)}catch{a==null||a.removeListener(s)}d&&d.removeSider(b)});const S=()=>{h(!l.value,"clickTrigger")};return()=>{var i,m;const c=f.value,{collapsedWidth:D,width:ee,reverseArrow:P,zeroWidthTriggerStyle:te,trigger:$=(i=o.trigger)===null||i===void 0?void 0:i.call(o),collapsible:F,theme:re}=e,k=l.value?D:ee,x=xe(k)?`${k}px`:String(k),z=parseFloat(String(D||0))===0?g("span",{onClick:S,class:W(`${c}-zero-width-trigger`,`${c}-zero-width-trigger-${P?"right":"left"}`),style:te},[$||g(M,null,null)]):null,ne={expanded:P?g(w,null,null):g(H,null,null),collapsed:P?g(H,null,null):g(w,null,null)},oe=l.value?"collapsed":"expanded",ae=ne[oe],ie=$!==null?z||g("div",{class:`${c}-trigger`,onClick:S,style:{width:x}},[$||ae]):null,le=[n.style,{flex:`0 0 ${x}`,maxWidth:x,minWidth:x,width:x}],se=W(c,`${c}-${re}`,{[`${c}-collapsed`]:!!l.value,[`${c}-has-trigger`]:F&&$!==null&&!z,[`${c}-below`]:!!u.value,[`${c}-zero-width`]:parseFloat(x)===0},n.class);return g("aside",V(V({},n),{},{class:se,style:le}),[g("div",{class:`${c}-children`},[(m=o.default)===null||m===void 0?void 0:m.call(o)]),F||u.value&&z?ie:null])}}}),_e=C,Ie=y(T,{Header:C,Footer:E,Content:R,Sider:j,install:e=>(e.component(T.name,T),e.component(C.name,C),e.component(E.name,E),e.component(j.name,j),e.component(R.name,R),e)});export{H as L,w as R,Ie as _,_e as a,Ne as e,Ae as u};
