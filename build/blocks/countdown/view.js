(()=>{"use strict";function t(t){const e={};let o;const n=()=>{e.countDownEl=t,e.dateAttributeValue=e.countDownEl.getAttribute("data-countdown-datetime"),e.actionAfterExpire=e.countDownEl.getAttribute("data-action-after-expire"),e.actionAfterExpireMessage=e.countDownEl.getAttribute("data-action-after-expire-message")};return(t=>{t.length<=0?console.error('No element with the class "cmblocks-countdown__ticker" found.'):(n(),(()=>{let t=new Date(e.dateAttributeValue).getTime();o=setInterval((function(){let n=(new Date).getTime(),c=t-n;const[i,r,l,s]=(t=>[Math.floor(t/864e5).toLocaleString("en-US",{minimumIntegerDigits:2}),Math.floor(t%864e5/36e5).toLocaleString("en-US",{minimumIntegerDigits:2}),Math.floor(t%36e5/6e4).toLocaleString("en-US",{minimumIntegerDigits:2}),Math.floor(t%6e4/1e3).toLocaleString("en-US",{minimumIntegerDigits:2})])(c);[{digit:i,selector:".cmblocks-countdown__ticker-days"},{digit:r,selector:".cmblocks-countdown__ticker-hours"},{digit:l,selector:".cmblocks-countdown__ticker-minutes"},{digit:s,selector:".cmblocks-countdown__ticker-seconds"}].forEach((({digit:t,selector:o})=>{let n=e.countDownEl.querySelector(o);n&&(n.querySelector(".cmblocks-countdown__ticker-digit").innerHTML=t)})),c<0&&clearInterval(o)}),1e3)})())})(t)}document.addEventListener("DOMContentLoaded",(()=>{let e=document.getElementsByClassName("cmblocks-countdown__ticker");e.length>0?[...e].forEach((e=>{t(e)})):console.error('No element with the class "cm-blocks__countdown" found.')}))})();