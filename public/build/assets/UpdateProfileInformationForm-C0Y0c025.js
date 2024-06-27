import{Q as y,T as g,o as n,c as r,d as s,a,u as e,b as m,w as u,h as x,s as h,f,x as V,e as b,j as k}from"./app-BeUaVeIi.js";import{a as p,b as v,_}from"./TextInput-C5qZE4wT.js";import{_ as w}from"./PrimaryButton-DLlIGUv-.js";const S=s("header",null,[s("h2",{class:"text-lg font-medium text-gray-900"},"Profile Information"),s("p",{class:"mt-1 text-sm text-gray-600"}," Update your account's profile information and email address. ")],-1),N={key:0},$={class:"text-sm mt-2 text-gray-800"},B={class:"mt-2 font-medium text-sm text-green-600"},E={class:"flex items-center gap-4"},U={key:0,class:"text-sm text-gray-600"},I={__name:"UpdateProfileInformationForm",props:{mustVerifyEmail:{type:Boolean},status:{type:String}},setup(d){const l=y().props.auth.user,t=g({name:l.name,email:l.email});return(c,o)=>(n(),r("section",null,[S,s("form",{onSubmit:o[2]||(o[2]=b(i=>e(t).patch(c.route("profile.update")),["prevent"])),class:"mt-6 space-y-6"},[s("div",null,[a(_,{for:"name",value:"Name"}),a(p,{id:"name",type:"text",class:"mt-1 block w-full",modelValue:e(t).name,"onUpdate:modelValue":o[0]||(o[0]=i=>e(t).name=i),required:"",autofocus:"",autocomplete:"name"},null,8,["modelValue"]),a(v,{class:"mt-2",message:e(t).errors.name},null,8,["message"])]),s("div",null,[a(_,{for:"email",value:"Email"}),a(p,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:e(t).email,"onUpdate:modelValue":o[1]||(o[1]=i=>e(t).email=i),required:"",autocomplete:"username"},null,8,["modelValue"]),a(v,{class:"mt-2",message:e(t).errors.email},null,8,["message"])]),d.mustVerifyEmail&&e(l).email_verified_at===null?(n(),r("div",N,[s("p",$,[m(" Your email address is unverified. "),a(e(k),{href:c.route("verification.send"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"},{default:u(()=>[m(" Click here to re-send the verification email. ")]),_:1},8,["href"])]),x(s("div",B," A new verification link has been sent to your email address. ",512),[[h,d.status==="verification-link-sent"]])])):f("",!0),s("div",E,[a(w,{disabled:e(t).processing},{default:u(()=>[m("Save")]),_:1},8,["disabled"]),a(V,{"enter-active-class":"transition ease-in-out","enter-from-class":"opacity-0","leave-active-class":"transition ease-in-out","leave-to-class":"opacity-0"},{default:u(()=>[e(t).recentlySuccessful?(n(),r("p",U,"Saved.")):f("",!0)]),_:1})])],32)]))}};export{I as default};
