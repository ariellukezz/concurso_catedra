import{i as m,D as A,o as _,c as u,a as o,w as n,F as R,E as f,d as s,b as g,f as w,t as F}from"./app-BeUaVeIi.js";import{b as S,B as U}from"./index-C9fHJQYV.js";import{C as B}from"./index-BMEngZwh.js";import{M}from"./index-DQ-AD_lV.js";import{_ as O}from"./index-DeCWgIQf.js";import{_ as V,F as T}from"./index-DSfBoDRF.js";import{_ as $}from"./index-DgUB73CJ.js";import{_ as j,a as L}from"./index-BBTCXYlR.js";import"./styleChecker-Df-oH1eW.js";import"./slide-Crjdf57_.js";import"./index-BwEd6jp4.js";import"./injectionKey-BXVc-oGP.js";import"./useRefs-BX3m5628.js";import"./Col-BXR5Jqji.js";import"./index-DxAxxOeY.js";import"./EyeOutlined-BheDrf74.js";import"./index-BUZI-vWb.js";const P={class:"flex justify-between border-b-2",style:{"border-bottom":"solid 2px #009DD1","padding-bottom":"8px"}},G=s("div",null,[s("span",{style:{"font-weight":"bold","font-size":"1rem",color:"#009DD1"}},"Descripción breve")],-1),q={key:0,style:{"margin-top":"-5px"}},z={key:0,class:"mt-3"},H={style:{"text-align":"justify"}},Z=s("svg",{xmlns:"http://www.w3.org/2000/svg",width:"12",height:"12",viewBox:"0 0 24 24",fill:"none",stroke:"red","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round",class:"feather feather-trash"},[s("polyline",{points:"3 6 5 6 21 6"}),s("path",{d:"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"})],-1),J={class:"flex justify-end"},_e={__name:"descripcion",setup(K){const d=m(!1),v=m(null),r=A({id:null,descripcion:null}),y=async()=>{await v.value.validateFields();try{await f.post("save-descripcion",r),d.value=!1,r.id==null?l("","DESCRIPCIÓN GUARDADA","background:#90EE90DF; font-weight:bold;"):l("","DESCRIPCIÓN ACTUALIZADA","background:#009DD1DF; font-weight:bold;"),await p()}catch{}},x=async t=>{try{(await f.get(`/delete-descripcion/${t}`)).data.estado&&l("","DESCRIPCIÓN ELIMINADA","background:#DC143CDF; color:white;"),await p()}catch{l("","NO SE PUDO ELIMINAR","background:#DC143CDF; color:white;")}},i=m([]),p=async()=>{try{const t=await f.get("/get-descripcion");t.data.estado===!0&&(i.value=t.data.datos)}catch(t){l("","OCURRIO UN ERRO INTENTELO MÁS TARDE","background:#Da143CbF; color:white;"),console.error("Error en la solicitud de tipos:",t)}},l=(t,e,c)=>{S.open({message:t,description:e,style:c})};return p(),(t,e)=>{const c=U,h=$,b=B,C=O,k=V,D=j,E=L,N=T,I=M;return _(),u(R,null,[o(b,{class:"mx-2 my-2"},{default:n(()=>[s("div",null,[s("div",P,[G,i.value.descripcion?w("",!0):(_(),u("div",q,[o(c,{onClick:e[0]||(e[0]=a=>d.value=!0)},{default:n(()=>[g("Agregar")]),_:1})]))]),i.value.descripcion?(_(),u("div",z,[s("p",H,[g(F(i.value.descripcion)+" ",1),o(h,{title:"¿Seguro de eliminar？","ok-text":"Si","cancel-text":"No",onConfirm:e[1]||(e[1]=a=>x(i.value.id))},{default:n(()=>[o(c,{text:"",style:{width:"20px",height:"20px","padding-left":"3px"}},{default:n(()=>[Z]),_:1})]),_:1})])])):w("",!0)])]),_:1}),o(I,{open:d.value,"onUpdate:open":e[4]||(e[4]=a=>d.value=a),title:"Descripción breve",footer:!1},{default:n(()=>[o(N,{ref_key:"formDatos",ref:v,name:"form",model:r,rules:t.formRules},{default:n(()=>[o(E,{gutter:16},{default:n(()=>[o(D,{xs:24,sm:24,md:24,lg:24},{default:n(()=>[o(k,{name:"descripcion",rules:[{required:!0,message:"Este campo es obligatorio"}]},{default:n(()=>[o(C,{rows:6,maxlength:800,"show-count":"",value:r.descripcion,"onUpdate:value":e[2]||(e[2]=a=>r.descripcion=a)},null,8,["value"])]),_:1})]),_:1}),o(D,{xs:24,sm:24,md:24,lg:24},{default:n(()=>[s("div",J,[o(c,{onClick:e[3]||(e[3]=a=>y()),type:"primary",style:{"margin-top":"0px"}},{default:n(()=>[g(" Guardar descripción ")]),_:1})])]),_:1})]),_:1})]),_:1},8,["model","rules"])]),_:1},8,["open"])],64)}}};export{_e as default};
