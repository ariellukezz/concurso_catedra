import{_ as p}from"./AuthenticatedLayout-DgkdDybK.js";import{o as s,c as r,d as e,F as l,G as c,q as g,n as h,u as x,j as m,f,a as n,w as i,Z as _,b as w,t as d}from"./app-BeUaVeIi.js";const y={key:0},v={class:"flex flex-wrap -mb-1"},k=["innerHTML"],H={__name:"Pagination",props:{links:Array,required:!0},setup(a){return(u,b)=>a.links.length>3?(s(),r("div",y,[e("div",v,[(s(!0),r(l,null,c(a.links,(t,o)=>(s(),r(l,null,[t.url===null?(s(),r("div",{key:o,class:"px-2 py-1 mr-1 mb-1 text-sm leading-4 text-gray-400 rounded border",innerHTML:t.label},null,8,k)):(s(),g(x(m),{key:o+1,class:h(["px-2 py-1 mr-1 mb-1 text-sm leading-4 rounded border hover:bg-indigo-500 hover:text-white focus:border-indigo-500 focus:text-indigo-500",{"text-white bg-indigo-500":t.active}]),href:t.url,innerHTML:t.label},null,8,["class","href","innerHTML"]))],64))),256))])])):f("",!0)}},V=e("div",{class:"mb-4 inline-flex w-full overflow-hidden rounded-lg bg-white shadow-md"},[e("div",{class:"flex w-12 items-center justify-center bg-blue-500"},[e("svg",{class:"h-6 w-6 fill-current text-white",viewBox:"0 0 40 40",xmlns:"http://www.w3.org/2000/svg"},[e("path",{d:"M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"})])]),e("div",{class:"-mx-3 px-4 py-2"},[e("div",{class:"mx-3"},[e("span",{class:"font-semibold text-blue-500"},"Info"),e("p",{class:"text-sm text-gray-600"},"Sample table page")])])],-1),C={class:"inline-block min-w-full overflow-hidden rounded-lg shadow"},M={class:"w-full whitespace-no-wrap"},B=e("thead",null,[e("tr",{class:"border-b bg-gray-50 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"},[e("th",{class:"border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"}," Name "),e("th",{class:"border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600"}," Email ")])],-1),L={class:"border-b border-gray-200 bg-white px-5 py-5 text-sm"},N={class:"text-gray-900 whitespace-no-wrap"},T={class:"border-b border-gray-200 bg-white px-5 py-5 text-sm"},$={class:"text-gray-900 whitespace-no-wrap"},j={class:"flex flex-col items-center border-t bg-white px-5 py-5 xs:flex-row xs:justify-between"},E={__name:"Index",props:{users:{type:Object}},setup(a){return(u,b)=>(s(),r(l,null,[n(x(_),{title:"Users"}),n(p,null,{header:i(()=>[w(" Users ")]),default:i(()=>[V,e("div",C,[e("table",M,[B,e("tbody",null,[(s(!0),r(l,null,c(a.users.data,t=>(s(),r("tr",{key:t.id,class:"text-gray-700"},[e("td",L,[e("p",N,d(t.name),1)]),e("td",T,[e("p",$,d(t.email),1)])]))),128))])]),e("div",j,[n(H,{links:a.users.links},null,8,["links"])])])]),_:1})],64))}};export{E as default};
