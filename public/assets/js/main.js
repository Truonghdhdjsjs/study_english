import { Lazyloading } from "../js/component/lazyload.js";
import { ButtonMenu } from "../js/component/button/OpenCloseMenu.js";
    window.addEventListener("load",()=>{
        // xử lý ảnh loading
        Lazyloading();
       
    });

    window.addEventListener('load',ButtonMenu())
    // Hadel event form