import{i as r,D as q,r as G,o as p,c as u,a as o,w as t,d as e,F as R,E as A,b as d,G as H,t as x,f as B,u as X}from"./app-DjzP6Xc8.js";import{C as J}from"./index-D0HqagQ7.js";import{M as K}from"./index-D4hYEUdR.js";import{a as w}from"./index-C6cJBKTJ.js";import{B as O}from"./index-B-NKoIPa.js";import{I as Q}from"./index-DX_P1xWU.js";import{S as W}from"./index-CllVJQ-s.js";import{_ as Y,F as Z}from"./index-BVPH4-rA.js";import{_ as ee,a as oe}from"./index-DVqLySPe.js";import{_ as te}from"./index-Dz-7ay72.js";import"./compact-item-C3MMsdSX.js";import"./index-C9tvn3ls.js";import"./Col-D9pf7s4-.js";import"./firstNotUndefined-By4c3kmV.js";import"./shallowequal-Bw13IqAx.js";import"./index-CZlnR-fw.js";import"./injectionKey-BXVc-oGP.js";import"./collapseMotion-v82YJKL-.js";import"./useRefs-CY2EYO9G.js";import"./FormItemContext-BStwt122.js";import"./statusUtils-DDrkrFt_.js";import"./index-D7UOKjLm.js";import"./EyeOutlined-C0haTXOK.js";import"./useMemo-BDnbGG_P.js";import"./DownOutlined-BjpBAteB.js";import"./CheckOutlined-C91lsFFN.js";import"./move-DKmVe9rK.js";const ae={class:"flex justify-between border-b-2",style:{"border-bottom":"solid 2px #009DD1","padding-bottom":"8px"}},se=e("div",null,[e("span",{style:{"font-weight":"bold","font-size":"1rem",color:"#009DD1"}}," IX. Actividades de extensión cultural, proyección y responsabilidad social en la especialidad ")],-1),le={style:{"margin-top":"-5px"}},ie={class:"mt-5 mx-2 my-2"},ne={class:"flex justify-between",style:{margin:"-5px -10px"}},re={class:""},de={class:"font-bold",style:{"font-size":".9rem"}},ce={class:"italic"},pe={class:"flex",style:{"margin-top":"0px"}},ue=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-eye"},[e("path",{d:"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"}),e("circle",{cx:"12",cy:"12",r:"3"})],-1),me=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"#1a2843","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-edit-2"},[e("path",{d:"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"})],-1),_e=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-trash"},[e("polyline",{points:"3 6 5 6 21 6"}),e("path",{d:"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"})],-1),fe={class:"px-4"},ve=e("label",null,[d("Actividad"),e("span",{style:{color:"red"}},"*")],-1),he=e("label",null,[d("Tipo"),e("span",{style:{color:"red"}},"*")],-1),ge=e("label",null,[d("Archivo PDF (Max. 2mb)"),e("span",{style:{color:"red"}},"*")],-1),xe={key:0,class:"mt-2"},we=["src"],ye={class:"flex justify-end"},be={key:0,class:"mt-2"},ke=["src"],Ce={class:"flex justify-end"},Ze={__name:"proyeccion",setup(De){const U=window.location.origin,m=r(!1),y=r([]),j=r([{value:1,label:"Resolución Rectoral"},{value:2,label:"Resolución Directoral"},{value:3,label:"Resolución Decanal"}]),_=r(!1),f=r(null),n=q({id:null,actividad:null,tipo:null,fileList:[]}),M=()=>{m.value=!0},b=a=>{f.value=a,_.value=!0},k=async()=>{try{const a=await A.get("/get-actividades  ");a.data.estado?y.value=a.data.datos:console.error("No se encontraron títulos.")}catch(a){console.error("Error en la solicitud de títulos:",a)}},P=()=>{f.value=null,n.fileList=[]},c=r(!1),v=r(null),C=r(0),E=a=>{if(a.type==="application/pdf"){const s=new FileReader;s.onload=i=>{v.value=i.target.result},s.readAsDataURL(a),n.fileList=[a]}else w.error("¡Solo puedes cargar archivos PDF!");return!1},V=async()=>{const a=new FormData;a.append("file",n.fileList[0]),a.append("actividad",n.actividad),a.append("tipo",n.tipo);try{c.value=!0,C.value=0;const s=await A.post("save-actividad-proyeccion",a,{headers:{"Content-Type":"multipart/form-data",Authorization:"Bearer your-auth-token"},onUploadProgress:i=>{C.value=Math.round(i.loaded*100/i.total)}});m.value=!1,c.value=!1,w.success("¡Archivo PDF cargado exitosamente!"),await k()}catch(s){c.value=!1,w.error("Error al cargar el archivo."),console.error("Error en la carga del archivo:",s)}};return k(),(a,s)=>{const i=O,z=J,S=Q,g=Y,h=ee,N=W,T=G("upload-outlined"),$=te,D=oe,I=Z,F=K;return p(),u(R,null,[o(z,{class:"mx-2 my-2"},{default:t(()=>[e("div",null,[e("div",ae,[se,e("div",le,[o(i,{onClick:s[0]||(s[0]=l=>M())},{default:t(()=>[d("Agregar")]),_:1})])]),e("div",ie,[(p(!0),u(R,null,H(y.value,l=>(p(),u("div",{class:"mb-5",key:l},[e("div",ne,[e("div",re,[e("div",null,[e("span",de,x(l.actividad),1)]),e("div",null,[e("span",ce,"( "+x(l.resolucion)+" )",1)])]),e("div",pe,[o(i,{onClick:L=>b(l.url),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:t(()=>[ue]),_:2},1032,["onClick"]),o(i,{onClick:L=>b(l.url),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:t(()=>[me]),_:2},1032,["onClick"]),o(i,{danger:"",onClick:L=>a.eliminarTitulo(l.id),style:{width:"20px",height:"20px","padding-left":"3px"}},{default:t(()=>[_e]),_:2},1032,["onClick"])])])]))),128))])])]),_:1}),e("div",fe,[o(F,{open:m.value,"onUpdate:open":s[3]||(s[3]=l=>m.value=l),width:"580px",title:"Registro de actividad"},{footer:t(()=>[e("div",ye,[o(i,{type:"primary",disabled:!v.value,loading:c.value,style:{"margin-top":"16px"},onClick:V},{default:t(()=>[d(x(c.value?"Subiendo...":"Comenzar carga"),1)]),_:1},8,["disabled","loading"])])]),default:t(()=>[o(I,{ref:"formDatos",name:"form",model:n,rules:a.formRules},{default:t(()=>[o(D,{gutter:16},{default:t(()=>[o(h,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[ve,o(g,{name:"actividad",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(S,{value:n.actividad,"onUpdate:value":s[1]||(s[1]=l=>n.actividad=l),style:{height:"32px"}},{suffix:t(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),o(h,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[he,o(g,{name:"tipo",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(N,{ref:"select",value:n.tipo,"onUpdate:value":s[2]||(s[2]=l=>n.tipo=l),style:{width:"100%"},options:j.value,onFocus:a.focus,onChange:a.selecionarTipo},null,8,["value","options","onFocus","onChange"])]),_:1})]),_:1}),o(h,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[ge,o(g,{name:"fileList",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o($,{"file-list":n.fileList,"before-upload":E,onRemove:P},{default:t(()=>[o(i,null,{default:t(()=>[o(T),d(" Seleccionar archivo PDF ")]),_:1})]),_:1},8,["file-list"]),v.value?(p(),u("div",xe,[e("iframe",{src:v.value,width:"100%",height:"300px"},null,8,we)])):B("",!0)]),_:1})]),_:1})]),_:1})]),_:1},8,["model","rules"])]),_:1},8,["open"]),o(F,{open:_.value,"onUpdate:open":s[5]||(s[5]=l=>_.value=l),width:"800px",title:"Ver adjunto"},{footer:t(()=>[e("div",Ce,[o(i,{onClick:s[4]||(s[4]=l=>_.value==!1)},{default:t(()=>[d(" Aceptar ")]),_:1})])]),default:t(()=>[o(D,{gutter:16},{default:t(()=>[o(h,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[f.value?(p(),u("div",be,[e("iframe",{src:X(U)+"/"+f.value,width:"100%",height:"500px"},null,8,ke)])):B("",!0)]),_:1})]),_:1})]),_:1},8,["open"])])],64)}}};export{Ze as default};