import{L as H}from"./FormularioLayout-DpTM0Rgx.js";import{i as c,D as Z,r as J,o as f,c as _,a as o,u as k,w as t,F as z,E as x,Z as K,d as e,G as Q,t as u,b as i,f as B}from"./app-Q_3-Ao_u.js";import{a as D}from"./index-DuTkR8vF.js";import{B as W}from"./index-6QXb-wCm.js";import{C as X}from"./index-OQ_TK0Vr.js";import{I as ee}from"./index-DMc2qG6d.js";import{D as oe}from"./dayjs-Cf3fWCgS.js";import{_ as te,F as se}from"./index-bhdxRi8w.js";import{M as ae}from"./index-Cb0qmqF9.js";import{f as P}from"./format-cwXK75ha.js";import{_ as le,a as ne}from"./index-DwHKXQPf.js";import{_ as ie}from"./index-D89vegDn.js";import"./unap-BqpW6IuZ.js";/* empty css                                                                         */import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./index-BamLtfVa.js";import"./compact-item-Z78VztqK.js";import"./Col-CPKWV_BO.js";import"./firstNotUndefined-wHvDY7Z8.js";import"./shallowequal-BKZtUhw6.js";import"./index-8_AQkQAU.js";import"./injectionKey-BXVc-oGP.js";import"./collapseMotion-DVas_xK4.js";import"./index-8uqxJTvE.js";import"./RightOutlined-RBfzBMsO.js";import"./index-BsGYeiIh.js";import"./move-g5z7UrKN.js";import"./FormItemContext-DvseOeOv.js";import"./useRefs-B1plTYKw.js";import"./statusUtils-CPur5UmF.js";import"./index-CYyBPbGM.js";import"./EyeOutlined-fYOyLmCa.js";import"./dayjs.min-9JZSo2wI.js";import"./useMemo-D9xz1Y-O.js";import"./CheckOutlined-DhNylv5v.js";const re={class:"p-4",style:{height:"calc(100vh - 63px)"}},de={class:"flex justify-between",style:{margin:"-15px -10px"}},ce={class:""},ue={class:"font-bold",style:{"font-size":"1rem"}},pe={class:"font-bold",style:{"font-size":".8rem"}},me={class:"font-bold",style:{"font-size":".8rem"}},fe={style:{"font-size":".8rem"}},_e={style:{"font-size":".8rem"}},ge={class:"flex",style:{"margin-top":"0px"}},ve=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"#1a2843","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-edit-2"},[e("path",{d:"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"})],-1),he=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-trash"},[e("polyline",{points:"3 6 5 6 21 6"}),e("path",{d:"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"})],-1),ye=e("div",{class:"flex justify-between",style:{margin:"-15px -10px"}},[e("div",{class:""},[e("div",null,[e("span",{class:"font-regular",style:{"font-size":"1rem"}}," Registrar nuevo ")]),e("div")]),e("div",{class:"flex",style:{"margin-top":"0px"}},[e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-plus-square"},[e("rect",{x:"3",y:"3",width:"18",height:"18",rx:"2",ry:"2"}),e("line",{x1:"12",y1:"8",x2:"12",y2:"16"}),e("line",{x1:"8",y1:"12",x2:"16",y2:"12"})])])],-1),xe=e("label",null,[i("Cargo"),e("span",{style:{color:"red"}},"*")],-1),we=e("label",null,[i("Institucion"),e("span",{style:{color:"red"}},"*")],-1),be=e("label",null,[i("Fec. inicio"),e("span",{style:{color:"red"}},"* "),i("(DD/MM/AAAA)")],-1),ke=e("label",null,[i("Fec. fin"),e("span",{style:{color:"red"}},"* "),i("(DD/MM/AAAA)")],-1),De=e("label",null,[i("Archivo PDF (Max. 2mb)"),e("span",{style:{color:"red"}},"*")],-1),Me={key:0,class:"mt-2"},Ce=["src"],Ae={class:"flex justify-end"},Ee={key:0},Fe=["src"],Le={class:"flex justify-end"},fo={__name:"experienciaNoDocente",setup(Ue){const M=window.location.origin,g=c(!1),C=c([]),R=c([]),v=c(!1),h=c(null),n=Z({id:null,cargo:null,institucion:null,cargo:null,duracion:null,fec_inicio:null,fec_fin:null,fileList:[]}),Y=()=>{n.id=null,n.fileList=[],g.value=!0},j=s=>{h.value=s,v.value=!0},N=async()=>{try{const s=await x.get("/get-tipo-investigacion-publicaicon");s.data.estado?R.value=s.data.datos:console.error("Ocurrió un error al obtener tipos.")}catch(s){console.error("Error en la solicitud de tipos:",s)}},q=async s=>{try{(await x.get(`/eliminar-titulo/${s}`)).data.estado?await w():console.error("No se pudo eliminar el título.")}catch(a){console.error("Error al eliminar el título:",a)}},w=async()=>{try{const s=await x.get("/get-experiencia-no-docente");s.data.estado?C.value=s.data.datos:console.error("No se encontraron títulos.")}catch(s){console.error("Error en la solicitud de títulos:",s)}},S=()=>{h.value=null,n.fileList=[]},p=c(!1),y=c(null),A=c(0),V=s=>{if(s.type==="application/pdf"){const a=new FileReader;a.onload=r=>{y.value=r.target.result},a.readAsDataURL(s),n.fileList=[s]}else D.error("¡Solo puedes cargar archivos PDF!");return!1},I=async()=>{const s=new FormData;s.append("file",n.fileList[0]),s.append("fec_inicio",P(new Date(n.fec_inicio),"yyyy-MM-dd")),s.append("fec_fin",P(new Date(n.fec_fin),"yyyy-MM-dd")),s.append("cargo",n.cargo),s.append("duracion",n.duracion),s.append("institucion",n.institucion);try{p.value=!0,A.value=0;const a=await x.post("subir-experiencia-no-docente",s,{headers:{"Content-Type":"multipart/form-data",Authorization:"Bearer your-auth-token"},onUploadProgress:r=>{A.value=Math.round(r.loaded*100/r.total)}});g.value=!1,p.value=!1,D.success("¡Archivo PDF cargado exitosamente!"),await w()}catch(a){p.value=!1,D.error("Error al cargar el archivo."),console.error("Error en la carga del archivo:",a)}};return w(),N(),(s,a)=>{const r=W,E=X,d=le,b=ne,F=ee,m=te,L=oe,T=J("upload-outlined"),$=ie,O=se,U=ae;return f(),_(z,null,[o(k(K),{title:"Investigaciones"}),o(H,null,{default:t(()=>[e("div",re,[o(b,{gutter:16},{default:t(()=>[o(d,{xs:24,sm:12,md:8,lg:12},{default:t(()=>[(f(!0),_(z,null,Q(C.value,l=>(f(),_("div",{class:"mb-2",key:l},[o(E,{class:"p-0"},{default:t(()=>[e("div",de,[e("div",ce,[e("div",null,[e("span",ue,u(l.institucion),1)]),e("div",null,u(l.cargo),1),e("div",null,[i(" del "),e("span",pe,u(l.fec_inicio),1),i(" al "),e("span",me,u(l.fec_fin),1)]),e("div",null,[e("span",fe," Experiencia "+u(l.descripcion),1)]),e("div",null,[e("span",_e," Experiencia "+u(k(M)),1)])]),e("div",ge,[o(r,{onClick:G=>j(l.url),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:t(()=>[ve]),_:2},1032,["onClick"]),o(r,{danger:"",onClick:G=>q(l.id),style:{width:"20px",height:"20px","padding-left":"3px"}},{default:t(()=>[he]),_:2},1032,["onClick"])])])]),_:2},1024)]))),128)),e("div",null,[o(E,{class:"p-0",onClick:a[0]||(a[0]=l=>Y()),style:{"margin-top":"0px",border:"dotted 1px black",background:"none",cursor:"pointer"}},{default:t(()=>[ye]),_:1})])]),_:1}),o(d,{xs:24,sm:12,md:8,lg:12})]),_:1}),o(U,{class:"lg:w-50",open:g.value,"onUpdate:open":a[5]||(a[5]=l=>g.value=l),title:"Registro de investacion",onOk:s.handleOk},{footer:t(()=>[e("div",Ae,[o(r,{type:"primary",disabled:!y.value,loading:p.value,style:{"margin-top":"16px"},onClick:I},{default:t(()=>[i(u(p.value?"Subiendo...":"Comenzar carga"),1)]),_:1},8,["disabled","loading"])])]),default:t(()=>[o(O,{ref:"formDatos",name:"form",model:n,rules:s.formRules},{default:t(()=>[o(b,{gutter:16},{default:t(()=>[o(d,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[xe,o(m,{name:"cargo",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(F,{value:n.cargo,"onUpdate:value":a[1]||(a[1]=l=>n.cargo=l),style:{height:"32px"}},{suffix:t(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),o(d,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[we,o(m,{name:"institucion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(F,{value:n.institucion,"onUpdate:value":a[2]||(a[2]=l=>n.institucion=l),style:{height:"32px"}},{suffix:t(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),o(d,{xs:24,sm:24,md:12,lg:12},{default:t(()=>[be,o(m,{name:"fec_inicio",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(L,{style:{width:"100%"},placeholder:"Seleccionar fec. publicación",value:n.fec_inicio,"onUpdate:value":a[3]||(a[3]=l=>n.fec_inicio=l),format:"DD/MM/YYYY"},null,8,["value"])]),_:1})]),_:1}),o(d,{xs:24,sm:24,md:12,lg:12},{default:t(()=>[ke,o(m,{name:"fec_fin",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(L,{style:{width:"100%"},placeholder:"Seleccionar fec. publicación",value:n.fec_fin,"onUpdate:value":a[4]||(a[4]=l=>n.fec_fin=l),format:"DD/MM/YYYY"},null,8,["value"])]),_:1})]),_:1}),o(d,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[De,o(m,{name:"fileList",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o($,{"file-list":n.fileList,"before-upload":V,onRemove:S},{default:t(()=>[o(r,null,{default:t(()=>[o(T),i(" Seleccionar archivo PDF ")]),_:1})]),_:1},8,["file-list"]),y.value?(f(),_("div",Me,[e("iframe",{src:y.value,width:"100%",height:"300px"},null,8,Ce)])):B("",!0)]),_:1})]),_:1})]),_:1})]),_:1},8,["model","rules"])]),_:1},8,["open","onOk"]),o(U,{open:v.value,"onUpdate:open":a[7]||(a[7]=l=>v.value=l),title:"Registro de título",style:{"min-width":"900px"}},{footer:t(()=>[e("div",Le,[o(r,{onClick:a[6]||(a[6]=l=>v.value==!1)},{default:t(()=>[i(" Aceptar ")]),_:1})])]),default:t(()=>[o(b,{gutter:16},{default:t(()=>[o(d,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[h.value?(f(),_("div",Ee,[e("iframe",{src:k(M)+"/"+h.value,width:"100%",height:"500px"},null,8,Fe)])):B("",!0)]),_:1})]),_:1})]),_:1},8,["open"])])]),_:1})],64)}}};export{fo as default};
