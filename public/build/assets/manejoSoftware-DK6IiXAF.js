import{i as d,D as O,r as G,o as p,c as m,a as o,w as t,d as e,F as U,E as y,b as i,G as H,t as w,f as z,u as J}from"./app-BEv-xz_-.js";import{C as K}from"./index-D96Q7_Um.js";import{M as Q}from"./index-l2ko3gaW.js";import{a as b}from"./index-BBl_DmlE.js";import{B as W}from"./index-C-gWWi9a.js";import{I as X}from"./index-CM6ue_hu.js";import{S as Y}from"./index-uiTClBSa.js";import{_ as Z,F as ee}from"./index-CAsReLeD.js";import{_ as oe,a as te}from"./index-Crbz17nv.js";import{_ as se}from"./index-BJPWbErh.js";import"./compact-item-DLNoSkYQ.js";import"./index-Dvhy9Cfo.js";import"./Col-BSf-gGBJ.js";import"./firstNotUndefined-DLIaKaK4.js";import"./shallowequal-C6RQljXD.js";import"./index-DLDhozMm.js";import"./injectionKey-BXVc-oGP.js";import"./collapseMotion-CLZvXgDd.js";import"./useRefs-DL8MgVK2.js";import"./FormItemContext-kpbbyIf-.js";import"./statusUtils-ZphGMINA.js";import"./index-Bk64toM8.js";import"./EyeOutlined-C4GavBIA.js";import"./useMemo-CYTR-8_Z.js";import"./DownOutlined-CBp-o89S.js";import"./CheckOutlined-Lrstrdux.js";import"./move-DyYspo6b.js";const ae={class:"flex justify-between border-b-2",style:{"border-bottom":"solid 2px #009DD1","padding-bottom":"8px"}},le=e("div",null,[e("span",{style:{"font-weight":"bold","font-size":"1rem",color:"#009DD1"}}," VI. Manejo de software especializado ")],-1),ne={style:{"margin-top":"-5px"}},re={class:"mt-5 mx-2 my-2"},ie={class:"flex justify-between",style:{margin:"-5px -10px"}},de={class:""},ce={class:"font-bold",style:{"font-size":".9rem"}},ue={style:{"font-size":".9rem"}},pe={class:"flex",style:{"margin-top":"0px"}},me=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-eye"},[e("path",{d:"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"}),e("circle",{cx:"12",cy:"12",r:"3"})],-1),_e=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"#1a2843","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-edit-2"},[e("path",{d:"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"})],-1),fe=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-trash"},[e("polyline",{points:"3 6 5 6 21 6"}),e("path",{d:"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"})],-1),ve={class:""},ge=e("label",null,[i("Denominación"),e("span",{style:{color:"red"}},"*")],-1),he=e("label",null,[i("Institución"),e("span",{style:{color:"red"}},"*")],-1),we=e("label",null,[i("Tipo"),e("span",{style:{color:"red"}},"*")],-1),xe=e("label",null,[i("Archivo PDF (Max. 2mb)"),e("span",{style:{color:"red"}},"*")],-1),ye={key:0,class:"mt-2"},be=["src"],ke={class:"flex justify-end"},Ce={key:0,class:"mt-2"},De=["src"],Fe={class:"flex justify-end"},oo={__name:"manejoSoftware",setup(je){const B=window.location.origin,_=d(!1),k=d([]),f=d(!1),v=d(null),n=O({id:null,descripcion:null,institucion:null,id_categoria:null,fileList:[]}),E=()=>{_.value=!0},C=s=>{v.value=s,f.value=!0},P=async s=>{try{(await y.get(`/eliminar-manejo-software/${s}`)).data.estado?await x():console.error("No se pudo eliminar el título.")}catch(a){console.error("Error al eliminar el título:",a)}},x=async()=>{try{const s=await y.get("/get-software-especializado");s.data.estado?k.value=s.data.datos:console.error("No se encontraron títulos.")}catch(s){console.error("Error en la solicitud de títulos:",s)}},S=()=>{v.value=null,n.fileList=[]},c=d(!1),g=d(null),D=d(0),R=s=>{if(s.type==="application/pdf"){const a=new FileReader;a.onload=r=>{g.value=r.target.result},a.readAsDataURL(s),n.fileList=[s]}else b.error("¡Solo puedes cargar archivos PDF!");return!1},V=async()=>{const s=new FormData;s.append("file",n.fileList[0]),s.append("descripcion",n.descripcion),s.append("institucion",n.institucion),s.append("id_categoria",n.id_categoria);try{c.value=!0,D.value=0;const a=await y.post("save-manejo-software",s,{headers:{"Content-Type":"multipart/form-data",Authorization:"Bearer your-auth-token"},onUploadProgress:r=>{D.value=Math.round(r.loaded*100/r.total)}});_.value=!1,c.value=!1,b.success("¡Archivo PDF cargado exitosamente!"),await x()}catch(a){c.value=!1,b.error("Error al cargar el archivo."),console.error("Error en la carga del archivo:",a)}},A=[{value:1,label:"Curso de 60 a más horas"},{value:2,label:"Curso de menos de 60 horas"}];return x(),(s,a)=>{const r=W,N=K,F=X,h=Z,u=oe,$=Y,I=G("upload-outlined"),q=se,j=te,T=ee,L=Q;return p(),m(U,null,[o(N,{class:"mx-2 my-2"},{default:t(()=>[e("div",null,[e("div",ae,[le,e("div",ne,[o(r,{onClick:a[0]||(a[0]=l=>E())},{default:t(()=>[i("Agregar")]),_:1})])]),e("div",re,[(p(!0),m(U,null,H(k.value,l=>(p(),m("div",{class:"mb-6",key:l},[e("div",ie,[e("div",de,[e("div",null,[e("span",ce,w(l.categoria),1)]),e("div",null,[e("span",ue,w(l.descripcion),1)]),e("div",null,w(l.institucion),1)]),e("div",pe,[o(r,{onClick:M=>C(l.url),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:t(()=>[me]),_:2},1032,["onClick"]),o(r,{onClick:M=>C(l.url),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:t(()=>[_e]),_:2},1032,["onClick"]),o(r,{danger:"",onClick:M=>P(l.id),style:{width:"20px",height:"20px","padding-left":"3px"}},{default:t(()=>[fe]),_:2},1032,["onClick"])])])]))),128))])])]),_:1}),e("div",ve,[o(L,{open:_.value,"onUpdate:open":a[4]||(a[4]=l=>_.value=l),title:"Registro de investacion",onOk:s.handleOk},{footer:t(()=>[e("div",ke,[o(r,{type:"primary",disabled:!g.value,loading:c.value,style:{"margin-top":"16px"},onClick:V},{default:t(()=>[i(w(c.value?"Subiendo...":"Comenzar carga"),1)]),_:1},8,["disabled","loading"])])]),default:t(()=>[o(T,{ref:"formDatos",name:"form",model:n,rules:s.formRules},{default:t(()=>[o(j,{gutter:16},{default:t(()=>[o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[ge,o(h,{name:"descripcion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(F,{value:n.descripcion,"onUpdate:value":a[1]||(a[1]=l=>n.descripcion=l),style:{height:"32px"}},{suffix:t(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[he,o(h,{name:"institucion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(F,{value:n.institucion,"onUpdate:value":a[2]||(a[2]=l=>n.institucion=l),style:{height:"32px"}},{suffix:t(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[we,o(h,{name:"id_categoria",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o($,{ref:"select",value:n.id_categoria,"onUpdate:value":a[3]||(a[3]=l=>n.id_categoria=l),style:{width:"100%"},options:A,onFocus:s.focus,onChange:s.selecionarTipo},null,8,["value","onFocus","onChange"])]),_:1})]),_:1}),o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[xe,o(h,{name:"fileList",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(q,{"file-list":n.fileList,"before-upload":R,onRemove:S},{default:t(()=>[o(r,null,{default:t(()=>[o(I),i(" Seleccionar archivo PDF ")]),_:1})]),_:1},8,["file-list"]),g.value?(p(),m("div",ye,[e("iframe",{src:g.value,width:"100%",height:"300px"},null,8,be)])):z("",!0)]),_:1})]),_:1})]),_:1})]),_:1},8,["model","rules"])]),_:1},8,["open","onOk"]),o(L,{open:f.value,"onUpdate:open":a[6]||(a[6]=l=>f.value=l),title:"Registro de título",style:{"min-width":"900px"}},{footer:t(()=>[e("div",Fe,[o(r,{onClick:a[5]||(a[5]=l=>f.value==!1)},{default:t(()=>[i(" Aceptar ")]),_:1})])]),default:t(()=>[o(j,{gutter:16},{default:t(()=>[o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[v.value?(p(),m("div",Ce,[e("iframe",{src:J(B)+"/"+v.value,width:"100%",height:"500px"},null,8,De)])):z("",!0)]),_:1})]),_:1})]),_:1},8,["open"])])],64)}}};export{oo as default};