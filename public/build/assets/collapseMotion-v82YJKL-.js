import{z as n}from"./app-DjzP6Xc8.js";const r=t=>({[t.componentCls]:{[`${t.antCls}-motion-collapse-legacy`]:{overflow:"hidden","&-active":{transition:`height ${t.motionDurationMid} ${t.motionEaseInOut},
        opacity ${t.motionDurationMid} ${t.motionEaseInOut} !important`}},[`${t.antCls}-motion-collapse`]:{overflow:"hidden",transition:`height ${t.motionDurationMid} ${t.motionEaseInOut},
        opacity ${t.motionDurationMid} ${t.motionEaseInOut} !important`}}});function e(t,s){return t.classList?t.classList.contains(s):` ${t.className} `.indexOf(` ${s} `)>-1}function a(t,s){t.classList?t.classList.add(s):e(t,s)||(t.className=`${t.className} ${s}`)}function l(t,s){if(t.classList)t.classList.remove(s);else if(e(t,s)){const i=t.className;t.className=` ${i} `.replace(` ${s} `," ")}}const c=function(){let t=arguments.length>0&&arguments[0]!==void 0?arguments[0]:"ant-motion-collapse",s=arguments.length>1&&arguments[1]!==void 0?arguments[1]:!0;return{name:t,appear:s,css:!0,onBeforeEnter:i=>{i.style.height="0px",i.style.opacity="0",a(i,t)},onEnter:i=>{n(()=>{i.style.height=`${i.scrollHeight}px`,i.style.opacity="1"})},onAfterEnter:i=>{i&&(l(i,t),i.style.height=null,i.style.opacity=null)},onBeforeLeave:i=>{a(i,t),i.style.height=`${i.offsetHeight}px`,i.style.opacity=null},onLeave:i=>{setTimeout(()=>{i.style.height="0px",i.style.opacity="0"})},onAfterLeave:i=>{i&&(l(i,t),i.style&&(i.style.height=null,i.style.opacity=null))}}};export{c,r as g};
