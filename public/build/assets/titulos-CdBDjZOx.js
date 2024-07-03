import{i as r,D as ee,r as oe,o as v,c as h,a as t,w as s,d as e,F as N,E as w,b as d,G as te,t as _,f as P,u as se,H as ae,I as le}from"./app-BEv-xz_-.js";import{d as R,D as ne}from"./dayjs-Ddw8W7uJ.js";import"./es-Df54g_xw.js";import{_ as ie}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{C as re}from"./index-D96Q7_Um.js";import{M as de}from"./index-l2ko3gaW.js";import{a as C}from"./index-BBl_DmlE.js";import{B as ue}from"./index-C-gWWi9a.js";import{I as ce}from"./index-CM6ue_hu.js";import{S as pe}from"./index-uiTClBSa.js";import{_ as me,F as _e}from"./index-CAsReLeD.js";import{f as fe}from"./format-cwXK75ha.js";import{_ as ge,a as ve}from"./index-Crbz17nv.js";import{_ as he}from"./index-BJPWbErh.js";import"./compact-item-DLNoSkYQ.js";import"./Col-BSf-gGBJ.js";import"./firstNotUndefined-DLIaKaK4.js";import"./index-DLDhozMm.js";import"./FormItemContext-kpbbyIf-.js";import"./useMemo-CYTR-8_Z.js";import"./shallowequal-C6RQljXD.js";import"./statusUtils-ZphGMINA.js";import"./index-Bk64toM8.js";import"./move-DyYspo6b.js";import"./index-Dvhy9Cfo.js";import"./injectionKey-BXVc-oGP.js";import"./collapseMotion-CLZvXgDd.js";import"./useRefs-DL8MgVK2.js";import"./EyeOutlined-C4GavBIA.js";import"./DownOutlined-CBp-o89S.js";import"./CheckOutlined-Lrstrdux.js";const u=x=>(ae("data-v-843ebad4"),x=x(),le(),x),xe={class:"flex justify-between border-b-2",style:{"border-bottom":"solid 2px #009DD1","padding-bottom":"8px"}},ye=u(()=>e("div",null,[e("span",{style:{"font-weight":"bold","font-size":"1rem",color:"#009DD1"}},"I. Títulos y grados ")],-1)),we={style:{"margin-top":"-5px"}},be={class:"mt-3"},ke={class:"flex justify-between",style:{}},De={class:""},Ce={style:{"margin-bottom":"-5px","margin-top":"-2px"}},Ue={style:{"font-size":".8rem"}},Fe={class:"font-bold",style:{"font-size":"1rem"}},Se={style:{"font-style":"italic",color:"#009DD1"}},Ee={class:"flex",style:{"margin-top":"0px"}},Me=u(()=>e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-eye"},[e("path",{d:"M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"}),e("circle",{cx:"12",cy:"12",r:"3"})],-1)),Ie=u(()=>e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"#1a2843","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-edit-2"},[e("path",{d:"M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"})],-1)),Le=u(()=>e("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-trash"},[e("polyline",{points:"3 6 5 6 21 6"}),e("path",{d:"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"})],-1)),je={class:""},Be=u(()=>e("label",null,[d("Denominación"),e("span",{style:{color:"red"}},"*")],-1)),Ne=u(()=>e("label",null,[d("Institucion"),e("span",{style:{color:"red"}},"*")],-1)),Pe=u(()=>e("label",null,[d("Tipo"),e("span",{style:{color:"red"}},"*")],-1)),Re=u(()=>e("label",null,[d("Reg en SUNEDU"),e("span",{style:{color:"red"}},"*")],-1)),Te=u(()=>e("label",null,[d("fec expedición"),e("span",{style:{color:"red"}},"*")],-1)),Ve=u(()=>e("label",null,[d("Archivo PDF (Max. 2mb)"),e("span",{style:{color:"red"}},"*")],-1)),qe={key:0,class:"mt-2"},ze=["src"],Ae={class:"flex justify-end"},Oe={key:0,class:"mt-2"},$e=["src"],Ye={class:"flex justify-end"},Ge={__name:"titulos",setup(x){const U=window.location.origin;R.locale("es");const T=()=>{f.value=!0},V=o=>{a.id=o.id,a.descripcion=o.denominacion,a.institucion=o.institucion,o.fec_expedicion&&(a.fec_expedicion=R(o.fec_expedicion)),p.value=U+"/"+o.url,a.reg_sunedu=o.reg_sunedu,a.tipo=o.id_tipo,f.value=!0},f=r(!1),F=r([]),S=r([]),q=r([{value:1,label:"SI"},{value:0,label:"NO"}]),y=r(!1),b=r(null),z=o=>{b.value=o,y.value=!0},A=r(),a=ee({id:null,descripcion:"",institucion:"",fec_expedicion:"",reg_sunedu:0,tipo:null,fileList:[]}),O=async()=>{let o=await w.get("/get-tipo-titulos");o.data.estado==!0?S.value=o.data.datos:console.log("Ocurrió un error")},E=o=>{console.log(`selected ${o}`)},$=async o=>{(await w.get("/eliminar-titulo/"+o)).data.estado==!0?k():console.log("Ocurrió un error")},g=r(!1),p=r(null),M=r(0),Y=o=>{if(o.type==="application/pdf"){const l=new FileReader;l.onload=i=>{p.value=i.target.result},l.readAsDataURL(o),a.fileList=[o]}else C.error("¡Solo puedes cargar archivos PDF!");return!1},k=async()=>{const o=await w.get("/get-titulos-usuario");o.data.estado==!0?F.value=o.data.datos:console.log("No se encontraron datos")},G=()=>{p.value=null,a.fileList=[]},H=async()=>{const o=new FormData;a.fileList[0]&&o.append("file",a.fileList[0]),a.id!=null&&o.append("id",a.id),o.append("descripcion",a.descripcion),o.append("reg_sunedu",a.reg_sunedu),o.append("institucion",a.institucion),o.append("fec_expedicion",fe(new Date(a.fec_expedicion),"yyyy-MM-dd")),o.append("tipo",a.tipo);try{g.value=!0,M.value=0;const l=await w.post("cargar-titulos",o,{headers:{"Content-Type":"multipart/form-data",Authorization:"Bearer your-auth-token"},onUploadProgress:i=>{M.value=Math.round(i.loaded*100/i.total)}});f.value=!1,g.value=!1,a.value=!1,C.success("¡Archivo PDF cargado exitosamente!"),await k()}catch(l){g.value=!1,C.error("Error al cargar el archivo."),console.error("File upload failed:",l)}},J=o=>{var l=o.split("-"),i=l.reverse().join("/");return i};return k(),O(),(o,l)=>{const i=ue,c=ge,D=ve,K=re,I=ce,m=me,L=pe,Q=ne,W=oe("upload-outlined"),X=he,Z=_e,j=de;return v(),h(N,null,[t(K,{class:"mx-2 my-2 mt-2"},{default:s(()=>[e("div",null,[e("div",xe,[ye,e("div",we,[t(i,{onClick:l[0]||(l[0]=n=>T())},{default:s(()=>[d("Agregar")]),_:1})])]),e("div",be,[(v(!0),h(N,null,te(F.value,n=>(v(),h("div",{class:"mb-2",key:n},[t(D,{gutter:16},{default:s(()=>[t(c,{xs:24,sm:4,md:4,lg:2},{default:s(()=>[e("div",null,_(J(n.fec_expedicion)),1)]),_:2},1024),t(c,{xs:24,sm:20,md:20,lg:22},{default:s(()=>[e("div",ke,[e("div",De,[e("div",Ce,[e("span",Ue,_(n.tipo_nombre),1)]),e("div",null,[e("span",Fe,_(n.denominacion),1)]),e("div",null,_(n.institucion),1),e("div",null,[e("span",Se,_(n.reg_sunedu==0?"Sin registro":"Registrado en SUNEDU"),1)])]),e("div",Ee,[t(i,{onClick:B=>z(n.url),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:s(()=>[Me]),_:2},1032,["onClick"]),t(i,{onClick:B=>V(n),class:"mr-2",style:{width:"20px",height:"20px","padding-left":"3px",border:"solid #1a2843 1px"}},{default:s(()=>[Ie]),_:2},1032,["onClick"]),t(i,{danger:"",onClick:B=>$(n.id),style:{width:"20px",height:"20px","padding-left":"3px"}},{default:s(()=>[Le]),_:2},1032,["onClick"])])])]),_:2},1024)]),_:2},1024)]))),128))])])]),_:1}),e("div",je,[t(j,{open:f.value,"onUpdate:open":l[6]||(l[6]=n=>f.value=n),width:"800px",class:"w-full md:w-3/4",title:"Registro de título",onOk:o.handleOk},{footer:s(()=>[e("div",Ae,[t(i,{type:"primary",disabled:!p.value,loading:g.value,style:{"margin-top":"16px"},onClick:H},{default:s(()=>[d(_(g.value?"Subiendo...":"Guardar datos"),1)]),_:1},8,["disabled","loading"])])]),default:s(()=>[t(Z,{ref_key:"formDatos",ref:A,name:"form",model:a,rules:o.formRules},{default:s(()=>[t(D,{gutter:16},{default:s(()=>[t(c,{xs:24,sm:24,md:24,lg:12},{default:s(()=>[Be,t(m,{name:"descripcion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:s(()=>[t(I,{value:a.descripcion,"onUpdate:value":l[1]||(l[1]=n=>a.descripcion=n),style:{height:"32px"}},{suffix:s(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),t(c,{xs:24,sm:24,md:24,lg:12},{default:s(()=>[Ne,t(m,{name:"institucion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:s(()=>[t(I,{value:a.institucion,"onUpdate:value":l[2]||(l[2]=n=>a.institucion=n),style:{height:"32px"}},{suffix:s(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),t(c,{xs:24,sm:24,md:24,lg:12},{default:s(()=>[Pe,t(m,{name:"tipo",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:s(()=>[t(L,{ref:"select",value:a.tipo,"onUpdate:value":l[3]||(l[3]=n=>a.tipo=n),style:{width:"100%"},options:S.value,onFocus:o.focus,onChange:E},null,8,["value","options","onFocus"])]),_:1})]),_:1}),t(c,{xs:24,sm:24,md:24,lg:6},{default:s(()=>[Re,t(m,{name:"reg_sunedu",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:s(()=>[t(L,{ref:"select",value:a.reg_sunedu,"onUpdate:value":l[4]||(l[4]=n=>a.reg_sunedu=n),style:{width:"100%"},options:q.value,onFocus:o.focus,onChange:E},null,8,["value","options","onFocus"])]),_:1})]),_:1}),t(c,{xs:24,sm:24,md:24,lg:6},{default:s(()=>[Te,t(m,{name:"fec_expedicion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:s(()=>[t(Q,{style:{width:"100%"},value:a.fec_expedicion,"onUpdate:value":l[5]||(l[5]=n=>a.fec_expedicion=n),format:"DD/MM/YYYY"},null,8,["value"])]),_:1})]),_:1}),t(c,{xs:24,sm:24,md:24,lg:24},{default:s(()=>[Ve,t(m,{name:"fileList",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:s(()=>[t(X,{"file-list":a.fileList,"before-upload":Y,onRemove:G},{default:s(()=>[t(i,null,{default:s(()=>[t(W),d(" Seleccionar archivo PDF ")]),_:1})]),_:1},8,["file-list"]),p.value?(v(),h("div",qe,[e("iframe",{src:p.value,width:"100%",height:"300px"},null,8,ze)])):P("",!0)]),_:1})]),_:1})]),_:1})]),_:1},8,["model","rules"])]),_:1},8,["open","onOk"]),t(j,{open:y.value,"onUpdate:open":l[8]||(l[8]=n=>y.value=n),title:"Registro de título",style:{"min-width":"1000px"}},{footer:s(()=>[e("div",Ye,[t(i,{onClick:l[7]||(l[7]=n=>y.value==!1)},{default:s(()=>[d(" Aceptar ")]),_:1})])]),default:s(()=>[t(D,{gutter:16},{default:s(()=>[t(c,{xs:24,sm:24,md:24,lg:24},{default:s(()=>[b.value?(v(),h("div",Oe,[e("iframe",{src:se(U)+"/"+b.value,width:"100%",height:"500px"},null,8,$e)])):P("",!0)]),_:1})]),_:1})]),_:1},8,["open"])])],64)}}},Co=ie(Ge,[["__scopeId","data-v-843ebad4"]]);export{Co as default};