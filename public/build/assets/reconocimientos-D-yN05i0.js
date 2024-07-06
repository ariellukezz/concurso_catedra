import{i,D as O,r as G,o as p,c as u,a as o,w as t,d as e,F as R,E as w,b as d,G as H,t as y,f as U,u as Q}from"./app-CM4qF5Mh.js";import{C as J}from"./index-C7-iRoWi.js";import{M as K}from"./index-Dt6_vk1N.js";import{a as b}from"./index-DowZ0jtg.js";import{B as W}from"./index-Ch1tnbtJ.js";import{I as X}from"./index-BvCjgTVp.js";import{S as Y}from"./index-BUSCL0Jf.js";import{_ as Z,F as ee}from"./index-6pUwLxd9.js";import{_ as oe,a as te}from"./index-BzSoxssN.js";import{_ as se}from"./index-C1SlcFe-.js";import"./compact-item-DUQbUYEe.js";import"./index-DQ38BaY5.js";import"./Col-BH05Pm7P.js";import"./firstNotUndefined-Be8Tj-9n.js";import"./shallowequal-Z3j61R7b.js";import"./index-DjYGw9Ck.js";import"./injectionKey-BXVc-oGP.js";import"./collapseMotion-xIomzb1j.js";import"./useRefs-BxddWkqV.js";import"./FormItemContext-Mw1CmCCY.js";import"./statusUtils-D4gmIbEh.js";import"./index-CC8guYNk.js";import"./EyeOutlined-fSaQJHtN.js";import"./useMemo-BaSzLHlE.js";import"./DownOutlined-v2yC7F82.js";import"./CheckOutlined-ZZAj1O78.js";import"./move-DMrzH_4-.js";const le={class:"flex justify-between border-b-2",style:{"border-bottom":"solid 2px #009DD1","padding-bottom":"8px"}},ae=e("div",null,[e("span",{style:{"font-weight":"bold","font-size":"1rem",color:"#009DD1"}}," VIII. Reconocimiento al mérito ")],-1),ne={style:{"margin-top":"-5px"}},re={class:"mt-3 mx-2"},ie={class:"flex justify-between",style:{margin:"-5px -10px"}},de={class:""},ce={class:"font-bold"},pe={style:{"font-size":"0.9rem"}},ue={class:"flex",style:{"margin-top":"0px"}},me=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-eye"},[e("path",{d:"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"}),e("circle",{cx:"12",cy:"12",r:"3"})],-1),_e=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"#1a2843","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-edit-2"},[e("path",{d:"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"})],-1),fe=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-trash"},[e("polyline",{points:"3 6 5 6 21 6"}),e("path",{d:"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"})],-1),ve={class:"px-4"},he=e("label",null,[d("Descripción"),e("span",{style:{color:"red"}},"*")],-1),ge=e("label",null,[d("Tipo"),e("span",{style:{color:"red"}},"*")],-1),xe=e("label",null,[d("Archivo PDF (Max. 2mb)"),e("span",{style:{color:"red"}},"*")],-1),we={key:0,class:"mt-2"},ye=["src"],be={class:"flex justify-end"},ke={key:0,class:"mt-2"},Ce=["src"],De={class:"flex justify-end"},eo={__name:"reconocimientos",setup(Fe){const E=window.location.origin,m=i(!1),k=i([]),M=i([{value:1,label:"Quinto superior de su promoción"},{value:2,label:"Tercio superior de su promoción"},{value:3,label:"Ayudante de Cátedra"}]),_=i(!1),f=i(null),n=O({id:null,titulo:null,autor:null,fec_publicacion:null,tipo:null,fileList:[]}),P=()=>{n.id=null,n.descripcion="",n.tipo=null,n.fileList=[],m.value=!0},C=s=>{f.value=s,_.value=!0},j=async s=>{try{(await w.get(`/eliminar-reconocimiento/${s}`)).data.estado?await g():console.error("No se pudo eliminar el título.")}catch(l){console.error("Error al eliminar el título:",l)}},g=async()=>{try{const s=await w.get("/get-reconocimientos");s.data.estado?k.value=s.data.datos:console.error("No se encontraron títulos.")}catch(s){console.error("Error en la solicitud de títulos:",s)}},A=()=>{f.value=null,n.fileList=[]},c=i(!1),v=i(null),D=i(0),V=s=>{if(s.type==="application/pdf"){const l=new FileReader;l.onload=r=>{v.value=r.target.result},l.readAsDataURL(s),n.fileList=[s]}else b.error("¡Solo puedes cargar archivos PDF!");return!1},z=async()=>{const s=new FormData;s.append("file",n.fileList[0]),s.append("descripcion",n.descripcion),s.append("tipo",n.tipo);try{c.value=!0,D.value=0;const l=await w.post("save-reconocimiento",s,{headers:{"Content-Type":"multipart/form-data",Authorization:"Bearer your-auth-token"},onUploadProgress:r=>{D.value=Math.round(r.loaded*100/r.total)}});m.value=!1,c.value=!1,b.success("¡Archivo PDF cargado exitosamente!"),await g()}catch(l){c.value=!1,b.error("Error al cargar el archivo."),console.error("Error en la carga del archivo:",l)}};return g(),(s,l)=>{const r=W,I=J,N=X,x=Z,h=oe,S=Y,T=G("upload-outlined"),$=se,F=te,q=ee,L=K;return p(),u(R,null,[o(I,{class:"mx-2 my-2"},{default:t(()=>[e("div",null,[e("div",le,[ae,e("div",ne,[o(r,{onClick:l[0]||(l[0]=a=>P())},{default:t(()=>[d("Agregar")]),_:1})])]),e("div",re,[(p(!0),u(R,null,H(k.value,a=>(p(),u("div",{class:"mb-2 mt-5",key:a},[e("div",ie,[e("div",de,[e("div",null,[e("span",ce,y(a.tipo),1)]),e("div",null,[e("span",pe,y(a.descripcion),1)])]),e("div",ue,[o(r,{onClick:B=>C(a.url),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:t(()=>[me]),_:2},1032,["onClick"]),o(r,{onClick:B=>C(a.url),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:t(()=>[_e]),_:2},1032,["onClick"]),o(r,{danger:"",onClick:B=>j(a.id),style:{width:"20px",height:"20px","padding-left":"3px"}},{default:t(()=>[fe]),_:2},1032,["onClick"])])])]))),128))])])]),_:1}),e("div",ve,[o(L,{open:m.value,"onUpdate:open":l[3]||(l[3]=a=>m.value=a),width:"600px",title:"Registro de reconocimiento",onOk:s.handleOk},{footer:t(()=>[e("div",be,[o(r,{type:"primary",disabled:!v.value,loading:c.value,style:{"margin-top":"16px"},onClick:z},{default:t(()=>[d(y(c.value?"Subiendo...":"Comenzar carga"),1)]),_:1},8,["disabled","loading"])])]),default:t(()=>[o(q,{ref:"formDatos",name:"form",model:n,rules:s.formRules},{default:t(()=>[o(F,{gutter:16},{default:t(()=>[o(h,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[he,o(x,{name:"descripcion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(N,{value:n.descripcion,"onUpdate:value":l[1]||(l[1]=a=>n.descripcion=a),style:{height:"32px"}},{suffix:t(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),o(h,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[ge,o(x,{name:"tipo",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(S,{ref:"select",value:n.tipo,"onUpdate:value":l[2]||(l[2]=a=>n.tipo=a),style:{width:"100%"},options:M.value,onFocus:s.focus,onChange:s.selecionarTipo},null,8,["value","options","onFocus","onChange"])]),_:1})]),_:1}),o(h,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[xe,o(x,{name:"fileList",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o($,{"file-list":n.fileList,"before-upload":V,onRemove:A},{default:t(()=>[o(r,null,{default:t(()=>[o(T),d(" Seleccionar archivo PDF ")]),_:1})]),_:1},8,["file-list"]),v.value?(p(),u("div",we,[e("iframe",{src:v.value,width:"100%",height:"300px"},null,8,ye)])):U("",!0)]),_:1})]),_:1})]),_:1})]),_:1},8,["model","rules"])]),_:1},8,["open","onOk"]),o(L,{open:_.value,"onUpdate:open":l[5]||(l[5]=a=>_.value=a),title:"Registro de título",style:{"min-width":"900px"}},{footer:t(()=>[e("div",De,[o(r,{onClick:l[4]||(l[4]=a=>_.value==!1)},{default:t(()=>[d(" Aceptar ")]),_:1})])]),default:t(()=>[o(F,{gutter:16},{default:t(()=>[o(h,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[f.value?(p(),u("div",ke,[e("iframe",{src:Q(E)+"/"+f.value,width:"100%",height:"500px"},null,8,Ce)])):U("",!0)]),_:1})]),_:1})]),_:1},8,["open"])])],64)}}};export{eo as default};