import{J as j,i as V,l as le,g as se,a as p,K as re,V as ie,h as ce,s as de,x as Ae,o as y,c as Y,d as D,F as Ee,G as ue,q,w as P,u as pe}from"./app-DjzP6Xc8.js";/* empty css                                                                         */import{d as Ce,B as Ie}from"./index-B-NKoIPa.js";import{t as F,o as I,q as T,P as U,v as G,g as De,m as Ne,_ as v,r as Oe,Q as Re,i as Z,u as ee,c as w,a as _,aV as fe,x as xe,z as Se,e as ge}from"./compact-item-C3MMsdSX.js";import{f as me,c as W}from"./firstNotUndefined-By4c3kmV.js";import{R as ve}from"./RightOutlined-CWcE8ZaM.js";import{g as Te,c as be}from"./collapseMotion-v82YJKL-.js";const he=()=>({prefixCls:String,activeKey:F([Array,Number,String]),defaultActiveKey:F([Array,Number,String]),accordion:I(),destroyInactivePanel:I(),bordered:I(),expandIcon:T(),openAnimation:U.object,expandIconPosition:G(),collapsible:G(),ghost:I(),onChange:T(),"onUpdate:activeKey":T()}),oe=()=>({openAnimation:U.object,prefixCls:String,header:U.any,headerClass:String,showArrow:I(),isActive:I(),destroyInactivePanel:I(),disabled:I(),accordion:I(),forceRender:I(),expandIcon:T(),extra:U.any,panelKey:F(),collapsible:G(),role:String,onItemClick:T()}),Le=o=>{const{componentCls:e,collapseContentBg:n,padding:d,collapseContentPaddingHorizontal:c,collapseHeaderBg:i,collapseHeaderPadding:l,collapsePanelBorderRadius:A,lineWidth:E,lineType:C,colorBorder:O,colorText:R,colorTextHeading:N,colorTextDisabled:f,fontSize:S,lineHeight:x,marginSM:g,paddingSM:t,motionDurationSlow:a,fontSizeIcon:s}=o,r=`${E}px ${C} ${O}`;return{[e]:v(v({},Oe(o)),{backgroundColor:i,border:r,borderBottom:0,borderRadius:`${A}px`,"&-rtl":{direction:"rtl"},[`& > ${e}-item`]:{borderBottom:r,"&:last-child":{[`
            &,
            & > ${e}-header`]:{borderRadius:`0 0 ${A}px ${A}px`}},[`> ${e}-header`]:{position:"relative",display:"flex",flexWrap:"nowrap",alignItems:"flex-start",padding:l,color:N,lineHeight:x,cursor:"pointer",transition:`all ${a}, visibility 0s`,[`> ${e}-header-text`]:{flex:"auto"},"&:focus":{outline:"none"},[`${e}-expand-icon`]:{height:S*x,display:"flex",alignItems:"center",paddingInlineEnd:g},[`${e}-arrow`]:v(v({},Re()),{fontSize:s,svg:{transition:`transform ${a}`}}),[`${e}-header-text`]:{marginInlineEnd:"auto"}},[`${e}-header-collapsible-only`]:{cursor:"default",[`${e}-header-text`]:{flex:"none",cursor:"pointer"},[`${e}-expand-icon`]:{cursor:"pointer"}},[`${e}-icon-collapsible-only`]:{cursor:"default",[`${e}-expand-icon`]:{cursor:"pointer"}},[`&${e}-no-arrow`]:{[`> ${e}-header`]:{paddingInlineStart:t}}},[`${e}-content`]:{color:R,backgroundColor:n,borderTop:r,[`& > ${e}-content-box`]:{padding:`${d}px ${c}px`},"&-hidden":{display:"none"}},[`${e}-item:last-child`]:{[`> ${e}-content`]:{borderRadius:`0 0 ${A}px ${A}px`}},[`& ${e}-item-disabled > ${e}-header`]:{"\n          &,\n          & > .arrow\n        ":{color:f,cursor:"not-allowed"}},[`&${e}-icon-position-end`]:{[`& > ${e}-item`]:{[`> ${e}-header`]:{[`${e}-expand-icon`]:{order:1,paddingInlineEnd:0,paddingInlineStart:g}}}}})}},$e=o=>{const{componentCls:e}=o,n=`> ${e}-item > ${e}-header ${e}-arrow svg`;return{[`${e}-rtl`]:{[n]:{transform:"rotate(180deg)"}}}},ye=o=>{const{componentCls:e,collapseHeaderBg:n,paddingXXS:d,colorBorder:c}=o;return{[`${e}-borderless`]:{backgroundColor:n,border:0,[`> ${e}-item`]:{borderBottom:`1px solid ${c}`},[`
        > ${e}-item:last-child,
        > ${e}-item:last-child ${e}-header
      `]:{borderRadius:0},[`> ${e}-item:last-child`]:{borderBottom:0},[`> ${e}-item > ${e}-content`]:{backgroundColor:"transparent",borderTop:0},[`> ${e}-item > ${e}-content > ${e}-content-box`]:{paddingTop:d}}}},Pe=o=>{const{componentCls:e,paddingSM:n}=o;return{[`${e}-ghost`]:{backgroundColor:"transparent",border:0,[`> ${e}-item`]:{borderBottom:0,[`> ${e}-content`]:{backgroundColor:"transparent",border:0,[`> ${e}-content-box`]:{paddingBlock:n}}}}}},Ue=De("Collapse",o=>{const e=Ne(o,{collapseContentBg:o.colorBgContainer,collapseHeaderBg:o.colorFillAlter,collapseHeaderPadding:`${o.paddingSM}px ${o.padding}px`,collapsePanelBorderRadius:o.borderRadiusLG,collapseContentPaddingHorizontal:16});return[Le(e),ye(e),Pe(e),$e(e),Te(e)]});function Q(o){let e=o;if(!Array.isArray(e)){const n=typeof e;e=n==="number"||n==="string"?[e]:[]}return e.map(n=>String(n))}const b=j({compatConfig:{MODE:3},name:"ACollapse",inheritAttrs:!1,props:Z(he(),{accordion:!1,destroyInactivePanel:!1,bordered:!0,expandIconPosition:"start"}),slots:Object,setup(o,e){let{attrs:n,slots:d,emit:c}=e;const i=V(Q(me([o.activeKey,o.defaultActiveKey])));le(()=>o.activeKey,()=>{i.value=Q(o.activeKey)},{deep:!0});const{prefixCls:l,direction:A,rootPrefixCls:E}=ee("collapse",o),[C,O]=Ue(l),R=se(()=>{const{expandIconPosition:t}=o;return t!==void 0?t:A.value==="rtl"?"end":"start"}),N=t=>{const{expandIcon:a=d.expandIcon}=o,s=a?a(t):p(ve,{rotate:t.isActive?90:void 0},null);return p("div",{class:[`${l.value}-expand-icon`,O.value],onClick:()=>["header","icon"].includes(o.collapsible)&&S(t.panelKey)},[ge(Array.isArray(a)?s[0]:s)?W(s,{class:`${l.value}-arrow`},!1):s])},f=t=>{o.activeKey===void 0&&(i.value=t);const a=o.accordion?t[0]:t;c("update:activeKey",a),c("change",a)},S=t=>{let a=i.value;if(o.accordion)a=a[0]===t?[]:[t];else{a=[...a];const s=a.indexOf(t);s>-1?a.splice(s,1):a.push(t)}f(a)},x=(t,a)=>{var s,r,m;if(Se(t))return;const u=i.value,{accordion:h,destroyInactivePanel:M,collapsible:L,openAnimation:K}=o,J=K||be(`${E.value}-motion-collapse`),$=String((s=t.key)!==null&&s!==void 0?s:a),{header:te=(m=(r=t.children)===null||r===void 0?void 0:r.header)===null||m===void 0?void 0:m.call(r),headerClass:ne,collapsible:X,disabled:z}=t.props||{};let k=!1;h?k=u[0]===$:k=u.indexOf($)>-1;let H=X??L;(z||z==="")&&(H="disabled");const ae={key:$,panelKey:$,header:te,headerClass:ne,isActive:k,prefixCls:l.value,destroyInactivePanel:M,openAnimation:J,accordion:h,onItemClick:H==="disabled"?null:S,expandIcon:N,collapsible:H};return W(t,ae)},g=()=>{var t;return xe((t=d.default)===null||t===void 0?void 0:t.call(d)).map(x)};return()=>{const{accordion:t,bordered:a,ghost:s}=o,r=w(l.value,{[`${l.value}-borderless`]:!a,[`${l.value}-icon-position-${R.value}`]:!0,[`${l.value}-rtl`]:A.value==="rtl",[`${l.value}-ghost`]:!!s,[n.class]:!!n.class},O.value);return C(p("div",_(_({class:r},fe(n)),{},{style:n.style,role:t?"tablist":null}),[g()]))}}}),we=j({compatConfig:{MODE:3},name:"PanelContent",props:oe(),setup(o,e){let{slots:n}=e;const d=re(!1);return ie(()=>{(o.isActive||o.forceRender)&&(d.value=!0)}),()=>{var c;if(!d.value)return null;const{prefixCls:i,isActive:l,role:A}=o;return p("div",{class:w(`${i}-content`,{[`${i}-content-active`]:l,[`${i}-content-inactive`]:!l}),role:A},[p("div",{class:`${i}-content-box`},[(c=n.default)===null||c===void 0?void 0:c.call(n)])])}}}),B=j({compatConfig:{MODE:3},name:"ACollapsePanel",inheritAttrs:!1,props:Z(oe(),{showArrow:!0,isActive:!1,onItemClick(){},headerClass:"",forceRender:!1}),slots:Object,setup(o,e){let{slots:n,emit:d,attrs:c}=e;Ce(o.disabled===void 0,"Collapse.Panel",'`disabled` is deprecated. Please use `collapsible="disabled"` instead.');const{prefixCls:i}=ee("collapse",o),l=()=>{d("itemClick",o.panelKey)},A=E=>{(E.key==="Enter"||E.keyCode===13||E.which===13)&&l()};return()=>{var E,C;const{header:O=(E=n.header)===null||E===void 0?void 0:E.call(n),headerClass:R,isActive:N,showArrow:f,destroyInactivePanel:S,accordion:x,forceRender:g,openAnimation:t,expandIcon:a=n.expandIcon,extra:s=(C=n.extra)===null||C===void 0?void 0:C.call(n),collapsible:r}=o,m=r==="disabled",u=i.value,h=w(`${u}-header`,{[R]:R,[`${u}-header-collapsible-only`]:r==="header",[`${u}-icon-collapsible-only`]:r==="icon"}),M=w({[`${u}-item`]:!0,[`${u}-item-active`]:N,[`${u}-item-disabled`]:m,[`${u}-no-arrow`]:!f,[`${c.class}`]:!!c.class});let L=p("i",{class:"arrow"},null);f&&typeof a=="function"&&(L=a(o));const K=ce(p(we,{prefixCls:u,isActive:N,forceRender:g,role:x?"tabpanel":null},{default:n.default}),[[de,N]]),J=v({appear:!1,css:!1},t);return p("div",_(_({},c),{},{class:M}),[p("div",{class:h,onClick:()=>!["header","icon"].includes(r)&&l(),role:x?"tab":"button",tabindex:m?-1:0,"aria-expanded":N,onKeypress:A},[f&&L,p("span",{onClick:()=>r==="header"&&l(),class:`${u}-header-text`},[O]),s&&p("div",{class:`${u}-extra`},[s])]),p(Ae,J,{default:()=>[!S||N?K:null]})])}}});b.Panel=B;b.install=function(o){return o.component(b.name,b),o.component(B.name,B),o};const _e={class:"container my-12 lg:px-24"},Be=D("div",{class:"flex justify-center mb-2"},[D("span",{class:"font-bold",style:{"font-size":"1.6rem",color:"#333"}},"ANEXOS")],-1),Me=D("div",{class:"flex justify-center mb-5"},[D("div",{style:{width:"60px","border-bottom":"3px solid #00a0c8"}})],-1),Ke=D("svg",{xmlns:"http://www.w3.org/2000/svg",width:"16",height:"16",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-download"},[D("path",{d:"M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"}),D("polyline",{points:"7 10 12 15 17 10"}),D("line",{x1:"12",y1:"15",x2:"12",y2:"3"})],-1),Je=["src"],ze={__name:"anexos",setup(o){const e=window.location.origin,n=V(null),d=V([{titulo:"ANEXO 1",anexo:"MODELO DE SOLICITUD PARA CONTRATO DOCENTE",url:"storage/anexos/01.pdf"},{titulo:"ANEXO 2",anexo:"DECLARACIÓN JURADA DE HABER CUMPLIDO CON EL SERVICIO RURAL URBANO MARGINAL DE SALUD (SERUMS)",url:"storage/anexos/02.pdf"},{titulo:"ANEXO 3",anexo:"DECLARACIÓN JURADA DE NO ESTAR INCURSO EN NINGUNA DE LAS INCOMPATIBILIDADES ESTABLECIDAS EN LA LEY, EL ESTATUTO O SUS NORMAS CONEXAS",url:"storage/anexos/03.pdf"},{titulo:"ANEXO 4",anexo:"DECLARACIÓN JURADA DE NO ESTAR IMPEDIDO PARA EL EJERCICIO DE LA FUNCIÓN PÚBLICA",url:"storage/anexos/04.pdf"},{titulo:"ANEXO 5",anexo:"DECLARACIÓN JURADA DE NO HABER SIDO SENTENCIADO POR DELITO DOLOSO MEDIANTE SENTENCIA JUDICIAL EN LA CONDICIÓN DE FIRME, CONSENTIDA O EJECUTORIADA",url:"storage/anexos/05.pdf"},{titulo:"ANEXO 6",anexo:"DECLARACIÓN JURADA DE NO HABER SIDO SANCIONADO POR EL INSTITUTO NACIONAL DE DEFENSA DE LA COMPETENCIA Y DE LA PROTECCIÓN DE LA PROPIEDAD INTELECTUAL (INDECOPI) POR PLAGIO Y OTRAS FALTAS CONTRA LA PROPIEDAD INTELECTUAL",url:"storage/anexos/06.pdf"},{titulo:"ANEXO 7",anexo:"DECLARACIÓN JURADA NO TENER ANTECEDENTES JUDICIALES NI PENALES",url:"storage/anexos/07.pdf"},{titulo:"ANEXO 8",anexo:"DECLARACIÓN JURADA DE NO HABER SIDO CONDENADO, SENTENCIADO O ESTAR PROCESADO JUDICIALMENTE POR LOS DELITOS DE TERRORISMO, APOLOGÍA DEL TERRORISMO, VIOLACIÓN DE LA LIBERTAD SEXUAL Y TRÁFICO ILÍCITO DE DROGAS LEY No29988",url:"storage/anexos/08.pdf"},{titulo:"ANEXO 9",anexo:"DECLARACIÓN JURADA DE NO ENCONTRARSE INSCRITO EN EL REGISTRO DE DEUDORES ALIMENTARIOS MOROSOS-REDAM",url:"storage/anexos/09.pdf"},{titulo:"ANEXO 10",anexo:"DECLARACIÓN JURADA DE NO HABER SIDO DESTITUIDO, DESPEDIDO O HABÉRSELE RESUELTO CONTRATO POR FALTA ADMINISTRATIVA GRAVE (LEY N.°26488)",url:"storage/anexos/10.pdf"},{titulo:"ANEXO 11",anexo:"DECLARACIÓN JURADA DE NO HABER INCURRIDO EN INASISTENCIAS INJUSTIFICADAS A SU FUNCIÓN DOCENTE",url:"storage/anexos/11.pdf"},{titulo:"ANEXO 12",anexo:"DECLARACIÓN JURADA DE NO HABER SIDO DESAPROBADO EN LA EVALUACIÓN DE DESEMPEÑO DOCENTE DE PARTE DE LOS ESTUDIANTES, REGLAMENTO DE EVALUACIÓN DE DESEMPEÑO DOCENTE UNA - PUNO",url:"storage/anexos/12.pdf"},{titulo:"ANEXO 13",anexo:"DECLARACIÓN JURADA DE NO ADEUDAR AL ESTADO POR CONCEPTO DE REPARACIÓN CIVIL",url:"storage/anexos/13.pdf"},{titulo:"ANEXO 14",anexo:"DECLARACIÓN JURADA DE AUTENTICIDAD DE LOS DOCUMENTOS",url:"storage/anexos/14.pdf"},{titulo:"ANEXO 15",anexo:"DECLARACIÓN JURADA DE NO ESTAR COMPRENDIDO EN EL REGISTRO NACIONAL DE SANCIONES CONTRA SERVIDORES CIVILES (RNSSC)",url:"storage/anexos/15.pdf"},{titulo:"ANEXO 16",anexo:"DECLARACIÓN JURADA DE NO TENER RELACIÓN DE CONSANGUINIDAD NI AFINIDAD",url:"storage/anexos/16.pdf"},{titulo:"ANEXO 17",anexo:"DECLARACIÓN JURADA DE HABILIDAD PROFESIONAL",url:"storage/anexos/17.pdf"},{titulo:"ANEXO 18",anexo:"DECLARACIÓN JURADA DE SERVICIO MILITAR",url:"storage/anexos/18.pdf"}]);return(c,i)=>{const l=Ie,A=B,E=b;return y(),Y("div",_e,[Be,Me,D("div",null,[(y(!0),Y(Ee,null,ue(d.value,(C,O)=>(y(),q(E,{activeKey:n.value,"onUpdate:activeKey":i[0]||(i[0]=R=>n.value=R)},{default:P(()=>[(y(),q(A,{class:"mb-2",key:O,header:C.titulo+". "+C.anexo},{extra:P(()=>[p(l,{style:{width:"30px","padding-left":"7px",background:"white",border:"none",color:"green"}},{icon:P(()=>[Ke]),_:1})]),default:P(()=>[D("iframe",{src:pe(e)+"/"+C.url,width:"100%",height:"400px"},null,8,Je)]),_:2},1032,["header"]))]),_:2},1032,["activeKey"]))),256))])])}}};export{ze as default};
