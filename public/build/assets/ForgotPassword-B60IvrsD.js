import{T as d,r as f,o as i,c as m,a as e,u as t,w as o,F as p,Z as _,t as w,f as g,d as a,n as y,b,e as x}from"./app-BeUaVeIi.js";import{G as k,A as h}from"./ApplicationLogo-C9Rvc-g1.js";import{_ as v,a as V,b as F}from"./TextInput-C5qZE4wT.js";import{_ as L}from"./PrimaryButton-DLlIGUv-.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./unap-BqpW6IuZ.js";const N=a("div",{class:"mb-4 text-sm text-gray-600"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),C={key:0,class:"mb-4 text-sm font-medium text-green-600"},$={class:"flex justify-end items-center mt-4"},T={__name:"ForgotPassword",props:{status:{type:String}},setup(l){const s=d({email:""}),n=()=>{s.post(route("password.email"))};return(B,r)=>{const u=f("Link");return i(),m(p,null,[e(t(_),{title:"Forgot Password"}),e(k,null,{default:o(()=>[e(u,{href:"/",class:"flex justify-center items-center mb-4"},{default:o(()=>[e(h,{class:"w-20 h-20 text-gray-500 fill-current"})]),_:1}),N,l.status?(i(),m("div",C,w(l.status),1)):g("",!0),a("form",{onSubmit:x(n,["prevent"])},[a("div",null,[e(v,{for:"email",value:"Email"}),e(V,{id:"email",type:"email",class:"block mt-1 w-full",modelValue:t(s).email,"onUpdate:modelValue":r[0]||(r[0]=c=>t(s).email=c),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),e(F,{class:"mt-2",message:t(s).errors.email},null,8,["message"])]),a("div",$,[e(L,{class:y(["w-full",{"opacity-25":t(s).processing}]),disabled:t(s).processing},{default:o(()=>[b(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],32)]),_:1})],64)}}};export{T as default};
