import{a2 as Q,i,D as W,m as X,l as U,o as h,c as Y,a,w as n,F as Z,E as j,d as o,b as r,t as m,f as q,q as ee,u as oe}from"./app-BeUaVeIi.js";import{a as se,d as k,D as te}from"./dayjs-DJnUF1AS.js";import{C as ae}from"./index-BMEngZwh.js";import{M as ne}from"./index-DQ-AD_lV.js";import{D as le}from"./DownOutlined-C7-akdR9.js";import{b as re,B as ie,_ as de}from"./index-C9fHJQYV.js";import{_ as ue}from"./index-DgUB73CJ.js";import{a as ce,S as _e}from"./index-CaazX8tX.js";import{I as me}from"./index-DeCWgIQf.js";import{_ as pe,F as fe}from"./index-DSfBoDRF.js";import{_ as ge,a as ve}from"./index-BBTCXYlR.js";import{_ as be}from"./index-DCrhuYS4.js";import"./styleChecker-Df-oH1eW.js";import"./slide-Crjdf57_.js";import"./Col-BXR5Jqji.js";import"./useMemo-CDQeG1YS.js";import"./index-DxAxxOeY.js";import"./move-CJ9wQcwx.js";import"./index-BwEd6jp4.js";import"./injectionKey-BXVc-oGP.js";import"./useRefs-BX3m5628.js";import"./index-BUZI-vWb.js";import"./CheckOutlined-f9rKsAdo.js";import"./EyeOutlined-BheDrf74.js";var xe={exports:{}};(function(S,N){(function(g,p){S.exports=p(se)})(Q,function(g){function p(c){return c&&typeof c=="object"&&"default"in c?c:{default:c}}var b=p(g),x={name:"es",monthsShort:"ene_feb_mar_abr_may_jun_jul_ago_sep_oct_nov_dic".split("_"),weekdays:"domingo_lunes_martes_miércoles_jueves_viernes_sábado".split("_"),weekdaysShort:"dom._lun._mar._mié._jue._vie._sáb.".split("_"),weekdaysMin:"do_lu_ma_mi_ju_vi_sá".split("_"),months:"enero_febrero_marzo_abril_mayo_junio_julio_agosto_septiembre_octubre_noviembre_diciembre".split("_"),weekStart:1,formats:{LT:"H:mm",LTS:"H:mm:ss",L:"DD/MM/YYYY",LL:"D [de] MMMM [de] YYYY",LLL:"D [de] MMMM [de] YYYY H:mm",LLLL:"dddd, D [de] MMMM [de] YYYY H:mm"},relativeTime:{future:"en %s",past:"hace %s",s:"unos segundos",m:"un minuto",mm:"%d minutos",h:"una hora",hh:"%d horas",d:"un día",dd:"%d días",M:"un mes",MM:"%d meses",y:"un año",yy:"%d años"},ordinal:function(c){return c+"º"}};return b.default.locale(x,null,!0),x})})(xe);const ye={class:"flex justify-between border-b-2",style:{"border-bottom":"solid 2px #009DD1","padding-bottom":"8px"}},he=o("div",null,[o("span",{style:{"font-weight":"bold","font-size":"1rem",color:"#009DD1"}},"Datos personales ")],-1),De={style:{"margin-top":"-5px"}},Me={class:"mt-3"},Ye={style:{"text-align":"justify"}},ke={key:0},we=o("div",null,[o("span",{class:"font-bold"},"Tipo Doc"),o("span",{class:"mx-2"},":"),o("span",null,"DNI")],-1),Ce=o("span",{class:"font-bold"},"N° Documento",-1),je=o("span",{class:"mx-2"},":",-1),Se=o("span",{class:"font-bold"},"Apellidos y nombres",-1),Ne=o("span",{class:"mx-2"},":",-1),Ee=o("div",null,[o("span",{class:"font-bold"},"Procedencia"),o("span",{class:"mx-2"},":"),r(" Puno/Puno/Ilave ")],-1),Fe=o("span",{class:"font-bold"},"Dirección",-1),Ue=o("span",{class:"mx-2"},":",-1),qe=o("span",{class:"font-bold"},"Sexo",-1),Le=o("span",{class:"mx-2"},":",-1),Ie=o("span",{class:"font-bold"},"Fecha Nac.",-1),Oe=o("span",{class:"mx-2"},":",-1),Pe=o("div",null,[o("span")],-1),Ae={class:"flex justify-center mt-6",style:{}},Ve={class:"flex justify-center"},Be=o("label",null,"Sexo",-1),Te={key:0},$e=o("span",{style:{color:"red"}},"*",-1),He={key:1},Re=o("label",null,[r("Nombres"),o("span",{style:{color:"red"}},"*")],-1),Ke=o("label",null,[r("Primer Apellido"),o("span",{style:{color:"red"}},"*")],-1),ze=o("label",null,[r("Segundo Apellido"),o("span",{style:{color:"red"}},"*")],-1),Ge=o("label",null,"Fec. Nacimiento",-1),Je=o("span",{style:{color:"red"}},"*",-1),Qe=o("label",null,[r("Dirección"),o("span",{style:{color:"red"}},"*")],-1),We=o("label",null,[r("celular"),o("span",{style:{color:"red"}},"*")],-1),Xe=o("label",null,[r("Correo"),o("span",{style:{color:"red"}},"*")],-1),Ze={class:"flex justify-end"},ko={__name:"datos_personales",setup(S){k.locale("es");const N=i(null),g=i(null),p=i(null),b=i([]);i(null),i(null);const x=i(null);i([]);const c=i(!1),w=i(!1),L=i(null);i([]);const E=i();i(!1),i(!1),i([]);const I=i(!1),e=W({id:null,tipo_doc:1,nro_doc:"",paterno:"",materno:"",nombres:"",sexo:null,fec_nac:"",celular:"",correo:"",ubigeo_residencia:"",terminos:!1}),O=t=>{e.nro_doc=t.target.value.replace(/\D/g,"")},P=async()=>{try{const t=await E.value.validateFields(),s=await j.post("/save-candidato",e);s.status===202?console.log(s.data.errors):(I.value=!0,F(),$(),V("success",s.data.titulo,s.data.mensaje))}catch(t){console.error(t)}},F=async()=>{const t=await j.get("/get-candidato");t.data.estado==!0?(t.data.datos.id&&(e.id=t.data.datos.id),e.tipo_doc=t.data.datos.tipo_doc,e.nro_doc=t.data.datos.nro_doc,e.celular=t.data.datos.celular,e.paterno=t.data.datos.paterno,e.materno=t.data.datos.materno,e.nombres=t.data.datos.nombres,e.sexo=t.data.datos.sexo,t.data.datos.fec_nac&&(e.fec_nac=k(t.data.datos.fec_nac)),e.correo=t.data.datos.correo,e.ubigeo_residencia=t.data.datos.ubigeo_residencia,e.direccion=t.data.datos.direccion,e.correo=t.data.datos.correo,e.terminos=!0):c.value=!0};X(()=>{F()}),U(L,(t,s)=>{getColegios()}),U(p,(t,s)=>{t.length>=3&&B()});const A=(t,s)=>{g.value=s.key,e.ubigeo_residencia=s.key},V=(t,s,f)=>{re[t]({message:s,description:f})},B=async()=>{j.post("/get-ubigeo",{term:p.value}).then(t=>{b.value=t.data.datos.data,console.log("Datos recibidos:",b)}).catch(t=>{t.response?console.error("Error de servidor:",t.response.data):t.request?console.error("Error de red:",t.request):console.error("Error de configuración:",t.message)})};function T(t,s){return new Promise((f,D)=>{if(!s)D(new Error(""));else{const M=new Date(s),v=new Date,y=new Date;v.setFullYear(v.getFullYear()-100),y.setFullYear(y.getFullYear()-18),M>y||M<v?D(new Error("Debes tener entre 18 y 100 años")):f()}})}const $=()=>{e.tipo_doc=1,e.paterno="",e.materno="",e.nombres="",e.sexo=null,e.fec_nac="",e.celular="",e.correo="",e.pais=1,e.ubigeo_residencia="",e.grado=1,e.ubigeo_colegio=null,e.id_colegio=null,e.terminos=!1,e.id_pago=null,g.valu=!0,N.value=null,g.value=null,p.value=null},H=t=>(k.locale("es"),k(t).format("DD MMMM YYYY"));return(t,s)=>{const f=ie,D=ue,M=ae,v=ce,y=_e,u=pe,d=ge,_=me,R=te,K=de,z=be,C=ve,G=fe,J=ne;return h(),Y(Z,null,[a(M,{class:"mx-2 my-2 mt-2"},{default:n(()=>[o("div",null,[o("div",ye,[he,o("div",De,[a(f,{onClick:s[0]||(s[0]=l=>w.value=!0)},{default:n(()=>[r("Agregar")]),_:1})])]),o("div",Me,[o("p",Ye,[e.id?(h(),Y("div",ke,[o("div",null,[we,o("div",null,[Ce,je,r(m(e.nro_doc),1)]),o("div",null,[Se,Ne,r(m(e.paterno)+" "+m(e.materno)+" "+m(e.nombres),1)]),Ee,o("div",null,[Fe,Ue,r(m(e.direccion),1)]),o("div",null,[qe,Le,r(m(e.nro_doc==1?"Femenino":"Masculino"),1)]),o("div",null,[Ie,Oe,r(m(H(e.fec_nac)),1)])]),Pe])):q("",!0),a(D,{title:"¿Seguro de eliminar？","ok-text":"Si","cancel-text":"No",onConfirm:s[1]||(s[1]=l=>t.eliminar(t.descripcion.id))})])])])]),_:1}),a(J,{visible:w.value,"onUpdate:visible":s[15]||(s[15]=l=>w.value=l),title:"Datos personales",centered:"",footer:!1,maskClosable:!1,onOk:t.handleOk,onAfterOpen:t.handleModalOpen},{default:n(()=>[o("div",Ae,[o("div",Ve,[a(C,{style:{display:"flex","justify-content":"center"}},{default:n(()=>[a(d,{span:24,class:""},{default:n(()=>[a(G,{ref_key:"formDatos",ref:E,name:"form",model:e,rules:t.formRules},{default:n(()=>[a(C,{gutter:16},{default:n(()=>[a(d,{xs:24,sm:12,md:8,lg:12},{default:n(()=>[o("div",null,[Be,a(u,{name:"sexo",rules:[{required:!0,message:"Seleccione sexo",trigger:"change"}]},{default:n(()=>[o("div",null,[a(y,{value:e.sexo,"onUpdate:value":s[2]||(s[2]=l=>e.sexo=l),style:{}},{default:n(()=>[a(v,{value:1},{default:n(()=>[r("Masculino")]),_:1}),a(v,{value:2},{default:n(()=>[r("Femenino")]),_:1})]),_:1},8,["value"])])]),_:1})])]),_:1}),a(d,{xs:24,sm:12,md:8,lg:12},{default:n(()=>[e.tipo_doc===1?(h(),Y("label",Te,[r("N° documento "),$e])):(h(),Y("label",He,"N° Carnet Ext.")),a(u,{name:"nro_doc",rules:[{required:!0,message:"Ingrese el N° de documento"},{min:8,message:"El dni debe tener 8 digitos",trigger:"blur"}]},{default:n(()=>[e.tipo_doc==1?(h(),ee(_,{key:0,value:e.nro_doc,"onUpdate:value":s[3]||(s[3]=l=>e.nro_doc=l),onInput:O,maxlength:8,style:{height:"32px"}},{suffix:n(()=>[]),_:1},8,["value"])):q("",!0)]),_:1})]),_:1}),a(d,{xs:24,sm:12,md:12,lg:12},{default:n(()=>[Re,a(u,{name:"nombres",rules:[{required:!0,message:"Ingrese los nombres"}]},{default:n(()=>[a(_,{value:e.nombres,"onUpdate:value":s[4]||(s[4]=l=>e.nombres=l),style:{height:"32px"}},{suffix:n(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),a(d,{xs:24,sm:12,md:12,lg:12},{default:n(()=>[Ke,a(u,{name:"paterno",rules:[{required:!0,message:"Ingrese los nombres"}]},{default:n(()=>[a(_,{value:e.paterno,"onUpdate:value":s[5]||(s[5]=l=>e.paterno=l),style:{height:"32px"}},{suffix:n(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),a(d,{xs:24,sm:12,md:12,lg:12},{default:n(()=>[ze,a(u,{name:"materno",rules:[{required:!0,message:"Ingrese segundo apellido"}]},{default:n(()=>[a(_,{value:e.materno,"onUpdate:value":s[6]||(s[6]=l=>e.materno=l),style:{height:"32px"}},{suffix:n(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),a(d,{xs:24,sm:12,md:12,lg:12},{default:n(()=>[Ge,a(u,{name:"fec_nac",rules:[{required:!0,message:"Ingresa tu fecha de nacimiento",trigger:"change"},{validator:T,trigger:"change"}]},{default:n(()=>[a(R,{style:{width:"100%"},placeholder:"Seleccionar fec. nacimiento",value:e.fec_nac,"onUpdate:value":s[7]||(s[7]=l=>e.fec_nac=l),format:"DD/MM/YYYY"},null,8,["value"])]),_:1},8,["rules"])]),_:1}),a(d,{xs:24,sm:24,md:12,lg:24},{default:n(()=>[o("label",null,[r("Ubigeo (dep/prov/dist) "+m(e.ubigeo_residencia),1),Je]),a(u,{name:"ubigeo_residencia",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:n(()=>[a(z,{value:e.ubigeo_residencia,"onUpdate:value":s[9]||(s[9]=l=>e.ubigeo_residencia=l),options:b.value,onSelect:A},{default:n(()=>[a(_,{placeholder:"Procedencia del Colegio",value:x.value,"onUpdate:value":s[8]||(s[8]=l=>x.value=l),onKeypress:t.handleKeyPress},{suffix:n(()=>[a(K,{title:"Extra information"},{default:n(()=>[a(oe(le))]),_:1})]),_:1},8,["value","onKeypress"])]),_:1},8,["value","options"])]),_:1})]),_:1}),a(d,{xs:24,sm:12,md:12,lg:24},{default:n(()=>[Qe,a(u,{name:"direccion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:n(()=>[a(_,{value:e.direccion,"onUpdate:value":s[10]||(s[10]=l=>e.direccion=l),style:{height:"32px"}},{suffix:n(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),a(d,{xs:24,sm:12,md:8,lg:8},{default:n(()=>[We,a(u,{name:"celular",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:n(()=>[a(_,{value:e.celular,"onUpdate:value":s[11]||(s[11]=l=>e.celular=l),style:{height:"32px"}},{suffix:n(()=>[]),_:1},8,["value"])]),_:1})]),_:1}),a(d,{xs:24,sm:12,md:16,lg:16},{default:n(()=>[Xe,a(u,{name:"correo",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:n(()=>[a(_,{value:e.correo,"onUpdate:value":s[12]||(s[12]=l=>e.correo=l),style:{height:"32px"}},{suffix:n(()=>[]),_:1},8,["value"])]),_:1})]),_:1})]),_:1}),a(C,null,{default:n(()=>[a(d,{span:24},{default:n(()=>[o("div",Ze,[a(f,{class:"mr-4",onClick:s[13]||(s[13]=l=>t.Cancelar())},{default:n(()=>[r(" Cancelar ")]),_:1}),a(f,{type:"primary",style:{width:"90px",background:"blue",color:"white","border-radius":"4px",border:"none"},onClick:s[14]||(s[14]=l=>P())},{default:n(()=>[r("Guardar")]),_:1})])]),_:1})]),_:1})]),_:1},8,["model","rules"])]),_:1})]),_:1})])])]),_:1},8,["visible","onOk","onAfterOpen"])],64)}}};export{ko as default};