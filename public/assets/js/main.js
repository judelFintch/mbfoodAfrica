(function(){const s=document.createElement("link").relList;if(s&&s.supports&&s.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))a(e);new MutationObserver(e=>{for(const t of e)if(t.type==="childList")for(const o of t.addedNodes)o.tagName==="LINK"&&o.rel==="modulepreload"&&a(o)}).observe(document,{childList:!0,subtree:!0});function i(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerpolicy&&(t.referrerPolicy=e.referrerpolicy),e.crossorigin==="use-credentials"?t.credentials="include":e.crossorigin==="anonymous"?t.credentials="omit":t.credentials="same-origin",t}function a(e){if(e.ep)return;e.ep=!0;const t=i(e);fetch(e.href,t)}})();const l=document.querySelector("[data-nav-bar]"),d=document.querySelector("[data-toggle-nav]"),n=document.querySelector("[data-overlay]"),u=document.querySelector("[data-header]");if(l&&d&&n&&u){let a=function(){const t=window.pageYOffset;s.forEach(o=>{const p=o.offsetHeight,r=o.offsetTop-50,L=o.getAttribute("id");console.log(L),t>r&&t<=r+p&&i(L)})};var scrollActive=a;const c=document.querySelectorAll("[data-nav-link]"),s=document.querySelectorAll("section[id]"),i=t=>{c.forEach(o=>{o.classList.remove("active-link")}),document.querySelector(`[data-nav-link][data-target='${t}']`).classList.add("active-link")};window.addEventListener("scroll",function(){u.classList.toggle("sticky-bar",window.scrollY>40),a()}),d.addEventListener("click",t=>{t.preventDefault(),n.classList.toggle("invisible"),n.classList.toggle("opacity-0"),l.classList.toggle("invisible"),l.classList.toggle("-translate-y-40"),document.body.classList.contains("hidden-scroll")?(document.body.classList.remove("hidden-scroll"),d.classList.remove("toggleHumberger"),u.querySelector("[data-header-sub]").classList.remove("addBgOnOpen")):(document.body.classList.add("hidden-scroll"),d.classList.add("toggleHumberger"),u.querySelector("[data-header-sub]").classList.add("addBgOnOpen"))});const e=()=>{document.body.classList.remove("hidden-scroll"),n.classList.add("invisible"),n.classList.add("opacity-0"),l.classList.add("invisible"),l.classList.add("-translate-y-40"),d.classList.remove("toggleHumberger"),u.querySelector("[data-header-sub]").classList.remove("addBgOnOpen")};n.addEventListener("click",t=>{t.preventDefault(),e()}),c&&c.forEach(t=>{t.addEventListener("click",()=>{e()})})}const g=document.querySelectorAll("[data-filter-btn]"),f=document.querySelector("[data-products]"),y=document.querySelector("[data-indicator]");if(g&&f&&y){let c=function(e){e.forEach(t=>{t.classList.add("hide"),t.classList.remove("show")})},s=function(e){e.forEach(t=>{t.classList.remove("hide"),t.classList.add("show")})};var hideAllDeactive=c,showItems=s;const i=e=>{e.classList.remove("text-gray-dark"),e.classList.add("activeTxt"),y.style.width=`${e.getBoundingClientRect().width}px`,y.style.left=`${e.getBoundingClientRect().left-e.parentElement.getBoundingClientRect().left}px`,y.style.top=`${e.getBoundingClientRect().top-e.parentElement.getBoundingClientRect().top}px`};(()=>{const e=f.querySelectorAll("[data-product]");i(g[0]),y.style.height=`${g[0].getBoundingClientRect().height}px`,s(e)})(),g.forEach(e=>{e.addEventListener("click",function(){let t=e.getAttribute("data-target"),o=f.querySelectorAll(`[data-product]:not([data-category='${t}'])`),p=f.querySelectorAll(`[data-product][data-category='${t}']`);t=="all"&&(o=[],p=f.querySelectorAll("[data-product]")),g.forEach(r=>{r.classList.contains("activeTxt")&&r.classList.remove("activeTxt")}),c(o),i(e),s(p)})})}const m=document.querySelector("#year");m&&(m.innerHTML=new Date().getFullYear().toString());