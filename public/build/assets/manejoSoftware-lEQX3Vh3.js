import{L as H}from"./FormularioLayout-DpTM0Rgx.js";import{i as d,D as Z,r as J,o as m,c as f,a as o,u as k,w as t,F as B,E as y,Z as K,d as e,G as Q,t as x,b as i,f as P}from"./app-Q_3-Ao_u.js";import{a as D}from"./index-DuTkR8vF.js";import{B as W}from"./index-6QXb-wCm.js";import{C as X}from"./index-OQ_TK0Vr.js";import{I as ee}from"./index-DMc2qG6d.js";import{D as oe}from"./dayjs-Cf3fWCgS.js";import{S as te}from"./index-C2ZM5AhM.js";import{_ as ae,F as le}from"./index-bhdxRi8w.js";import{M as se}from"./index-Cb0qmqF9.js";import{f as re}from"./format-cwXK75ha.js";import{_ as ne,a as ie}from"./index-DwHKXQPf.js";import{_ as ue}from"./index-D89vegDn.js";import"./unap-BqpW6IuZ.js";/* empty css                                                                         */import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./index-BamLtfVa.js";import"./compact-item-Z78VztqK.js";import"./Col-CPKWV_BO.js";import"./firstNotUndefined-wHvDY7Z8.js";import"./shallowequal-BKZtUhw6.js";import"./index-8_AQkQAU.js";import"./injectionKey-BXVc-oGP.js";import"./collapseMotion-DVas_xK4.js";import"./index-8uqxJTvE.js";import"./RightOutlined-RBfzBMsO.js";import"./index-BsGYeiIh.js";import"./move-g5z7UrKN.js";import"./FormItemContext-DvseOeOv.js";import"./useRefs-B1plTYKw.js";import"./statusUtils-CPur5UmF.js";import"./index-CYyBPbGM.js";import"./EyeOutlined-fYOyLmCa.js";import"./dayjs.min-9JZSo2wI.js";import"./useMemo-D9xz1Y-O.js";import"./DownOutlined-D0euq62q.js";import"./CheckOutlined-DhNylv5v.js";const de={class:"p-4",style:{height:"calc(100vh - 63px)"}},pe={class:"flex justify-between",style:{margin:"-15px -10px"}},ce={class:""},me={class:"font-bold",style:{"font-size":"1rem"}},fe={class:"flex",style:{"margin-top":"0px"}},_e=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"#1a2843","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-edit-2"},[e("path",{d:"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"})],-1),ve=e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-trash"},[e("polyline",{points:"3 6 5 6 21 6"}),e("path",{d:"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"})],-1),ge=e("div",{class:"flex justify-between",style:{margin:"-15px -10px"}},[e("div",{class:""},[e("div",null,[e("span",{class:"font-regular",style:{"font-size":"1rem"}}," Registrar nuevo ")]),e("div")]),e("div",{class:"flex",style:{"margin-top":"0px"}},[e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"1","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-plus-square"},[e("rect",{x:"3",y:"3",width:"18",height:"18",rx:"2",ry:"2"}),e("line",{x1:"12",y1:"8",x2:"12",y2:"16"}),e("line",{x1:"8",y1:"12",x2:"16",y2:"12"})])])],-1),he=e("label",null,[i("Título"),e("span",{style:{color:"red"}},"*")],-1),ye=e("label",null,[i("Autor"),e("span",{style:{color:"red"}},"*")],-1),xe=e("label",null,[i("Fec. publicacion"),e("span",{style:{color:"red"}},"* "),i("(DD/MM/AAAA)")],-1),we=e("label",null,[i("Tipo"),e("span",{style:{color:"red"}},"*")],-1),be=e("label",null,[i("Archivo PDF (Max. 2mb)"),e("span",{style:{color:"red"}},"*")],-1),ke={key:0,class:"mt-2"},De=["src"],Ce={class:"flex justify-end"},Fe={key:0,class:"mt-2"},Le=["src"],Me={class:"flex justify-end"},fo={__name:"manejoSoftware",setup(Ee){const C=window.location.origin,_=d(!1),F=d([]),L=d([]),v=d(!1),g=d(null),s=Z({id:null,titulo:null,autor:null,fec_publicacion:null,tipo:null,fileList:[]}),j=()=>{s.id=null,s.descripcion="",s.tipo=null,s.fileList=[],_.value=!0},R=a=>{g.value=a,v.value=!0},S=async()=>{try{const a=await y.get("/get-tipo-investigacion-publicaicon");a.data.estado?L.value=a.data.datos:console.error("Ocurrió un error al obtener tipos.")}catch(a){console.error("Error en la solicitud de tipos:",a)}},T=async a=>{try{(await y.get(`/eliminar-titulo/${a}`)).data.estado?await w():console.error("No se pudo eliminar el título.")}catch(l){console.error("Error al eliminar el título:",l)}},w=async()=>{try{const a=await y.get("/get-publicaciones");a.data.estado?F.value=a.data.datos:console.error("No se encontraron títulos.")}catch(a){console.error("Error en la solicitud de títulos:",a)}},q=()=>{g.value=null,s.fileList=[]},p=d(!1),h=d(null),M=d(0),N=a=>{if(a.type==="application/pdf"){const l=new FileReader;l.onload=n=>{h.value=n.target.result},l.readAsDataURL(a),s.fileList=[a]}else D.error("¡Solo puedes cargar archivos PDF!");return!1},V=async()=>{const a=new FormData;a.append("file",s.fileList[0]),a.append("fec_publicacion",re(new Date(s.fec_publicacion),"yyyy-MM-dd")),a.append("autor",s.autor),a.append("titulo",s.titulo),a.append("tipo",s.tipo);try{p.value=!0,M.value=0;const l=await y.post("subir-publicaciones",a,{headers:{"Content-Type":"multipart/form-data",Authorization:"Bearer your-auth-token"},onUploadProgress:n=>{M.value=Math.round(n.loaded*100/n.total)}});_.value=!1,p.value=!1,D.success("¡Archivo PDF cargado exitosamente!"),await w()}catch(l){p.value=!1,D.error("Error al cargar el archivo."),console.error("Error en la carga del archivo:",l)}};return w(),S(),(a,l)=>{const n=W,E=X,u=ne,b=ie,U=ee,c=ae,z=oe,$=te,I=J("upload-outlined"),O=ue,Y=le,A=se;return m(),f(B,null,[o(k(K),{title:"Investigaciones"}),o(H,null,{default:t(()=>[e("div",de,[o(b,{gutter:16},{default:t(()=>[o(u,{xs:24,sm:12,md:8,lg:12},{default:t(()=>[(m(!0),f(B,null,Q(F.value,r=>(m(),f("div",{class:"mb-2",key:r},[o(E,{class:"p-0"},{default:t(()=>[e("div",pe,[e("div",ce,[e("div",null,[e("span",me,x(r.titulo)+" "+x(k(C)),1)]),e("div",null,x(r.autor),1)]),e("div",fe,[o(n,{onClick:G=>R(r.url),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:t(()=>[_e]),_:2},1032,["onClick"]),o(n,{danger:"",onClick:G=>T(r.id),style:{width:"20px",height:"20px","padding-left":"3px"}},{default:t(()=>[ve]),_:2},1032,["onClick"])])])]),_:2},1024)]))),128)),e("div",null,[o(E,{class:"p-0",onClick:l[0]||(l[0]=r=>j()),style:{"margin-top":"0px",border:"dotted 1px black",background:"none",cursor:"pointer"}},{default:t(()=>[ge]),_:1})])]),_:1}),o(u,{xs:24,sm:12,md:8,lg:12})]),_:1}),o(A,{open:_.value,"onUpdate:open":l[5]||(l[5]=r=>_.value=r),title:"Registro de investacion",onOk:a.handleOk},{footer:t(()=>[e("div",Ce,[o(n,{type:"primary",disabled:!h.value,loading:p.value,style:{"margin-top":"16px"},onClick:V},{default:t(()=>[i(x(p.value?"Subiendo...":"Comenzar carga"),1)]),_:1},8,["disabled","loading"])])]),default:t(()=>[o(Y,{ref:"formDatos",name:"form",model:s,rules:a.formRules},{default:t(()=>[o(b,{gutter:16},{default:t(()=>[o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[he,o(c,{name:"titulo",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(U,{value:s.titulo,"onUpdate:value":l[1]||(l[1]=r=>s.titulo=r),style:{height:"32px"}},{suffix:t(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[ye,o(c,{name:"autor",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(U,{value:s.autor,"onUpdate:value":l[2]||(l[2]=r=>s.autor=r),style:{height:"32px"}},{suffix:t(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[xe,o(c,{name:"fec_publicacion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(z,{style:{width:"100%"},placeholder:"Seleccionar fec. publicación",value:s.fec_publicacion,"onUpdate:value":l[3]||(l[3]=r=>s.fec_publicacion=r),format:"DD/MM/YYYY"},null,8,["value"])]),_:1})]),_:1}),o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[we,o(c,{name:"tipo",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o($,{ref:"select",value:s.tipo,"onUpdate:value":l[4]||(l[4]=r=>s.tipo=r),style:{width:"100%"},options:L.value,onFocus:a.focus,onChange:a.selecionarTipo},null,8,["value","options","onFocus","onChange"])]),_:1})]),_:1}),o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[be,o(c,{name:"fileList",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:t(()=>[o(O,{"file-list":s.fileList,"before-upload":N,onRemove:q},{default:t(()=>[o(n,null,{default:t(()=>[o(I),i(" Seleccionar archivo PDF ")]),_:1})]),_:1},8,["file-list"]),h.value?(m(),f("div",ke,[e("iframe",{src:h.value,width:"100%",height:"300px"},null,8,De)])):P("",!0)]),_:1})]),_:1})]),_:1})]),_:1},8,["model","rules"])]),_:1},8,["open","onOk"]),o(A,{open:v.value,"onUpdate:open":l[7]||(l[7]=r=>v.value=r),title:"Registro de título",style:{"min-width":"900px"}},{footer:t(()=>[e("div",Me,[o(n,{onClick:l[6]||(l[6]=r=>v.value==!1)},{default:t(()=>[i(" Aceptar ")]),_:1})])]),default:t(()=>[o(b,{gutter:16},{default:t(()=>[o(u,{xs:24,sm:24,md:24,lg:24},{default:t(()=>[g.value?(m(),f("div",Fe,[e("iframe",{src:k(C)+"/"+g.value,width:"100%",height:"500px"},null,8,Le)])):P("",!0)]),_:1})]),_:1})]),_:1},8,["open"])])]),_:1})],64)}}};export{fo as default};
