import{T as f,o as _,c as w,a as s,u as e,w as l,F as g,Z as V,j as d,d as t,n as b,b as u,e as x}from"./app-Q_3-Ao_u.js";import{G as v,A as y}from"./ApplicationLogo-09ma4vd2.js";import{_ as i,a as m,b as n}from"./TextInput-CUHflzT1.js";import{_ as h}from"./PrimaryButton-CrOd5QSY.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./unap-BqpW6IuZ.js";const C={class:"mt-3"},k={class:"mt-3"},$={class:"mt-3"},q={class:"mt-4 flex flex-col items-end"},G={__name:"Register",setup(B){const a=f({email:"",password:"",password_confirmation:"",terms:!1}),c=()=>{a.post(route("register"),{onFinish:()=>a.reset("password","password_confirmation")})};return(p,o)=>(_(),w(g,null,[s(e(V),{title:"Crear Cuenta"}),s(v,null,{default:l(()=>[s(e(d),{href:"/",class:"flex items-center justify-center"},{default:l(()=>[s(y,{class:"h-20 w-20 fill-current text-gray-500"})]),_:1}),t("form",{onSubmit:x(c,["prevent"])},[t("div",C,[s(i,{for:"Dni",value:"Dni"}),s(m,{id:"email",class:"mt-1 block w-full",modelValue:e(a).email,"onUpdate:modelValue":o[0]||(o[0]=r=>e(a).email=r),required:"",autocomplete:"username"},null,8,["modelValue"]),s(n,{class:"mt-2",message:e(a).errors.email},null,8,["message"])]),t("div",k,[s(i,{for:"Password",value:"Contraseña"}),s(m,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:e(a).password,"onUpdate:modelValue":o[1]||(o[1]=r=>e(a).password=r),required:"",autocomplete:"new-password"},null,8,["modelValue"]),s(n,{class:"mt-2",message:e(a).errors.password},null,8,["message"])]),t("div",$,[s(i,{for:"password_confirmation",value:"Confirmar contraseña"}),s(m,{id:"password_confirmation",type:"password",class:"mt-1 block w-full",modelValue:e(a).password_confirmation,"onUpdate:modelValue":o[2]||(o[2]=r=>e(a).password_confirmation=r),required:"",autocomplete:"new-password"},null,8,["modelValue"]),s(n,{class:"mt-2",message:e(a).errors.password_confirmation},null,8,["message"])]),t("div",q,[s(h,{class:b(["w-full",{"opacity-25":e(a).processing}]),disabled:e(a).processing},{default:l(()=>[u(" Registrarme ")]),_:1},8,["class","disabled"]),s(e(d),{href:p.route("login"),class:"mt-4 mb-2 text-sm text-gray-600 underline hover:text-gray-900"},{default:l(()=>[u(" ¿Ya estas registrado? ")]),_:1},8,["href"])])],32)]),_:1})],64))}};export{G as default};
