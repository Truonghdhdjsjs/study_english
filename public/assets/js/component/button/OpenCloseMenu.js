export function ButtonMenu()
{
    let ButtonOpenMneu = document.querySelector(".fa-bars");
    let ButtonCloseMenu = document.querySelector(".fa-x");
    ButtonOpenMneu.addEventListener("click",HandelOpenMenu);
    ButtonCloseMenu.addEventListener("click",HandelCloseMenu);
    document.addEventListener("keydown",HandelLisentKeyBoard)
}
function HandelOpenMenu()
{
    const BorderMneu = document.querySelector(".border-menu");
    BorderMneu.classList.remove("active_menu")
}
function HandelCloseMenu(){
    const BorderMneu = document.querySelector(".border-menu");
    BorderMneu.classList.add("active_menu")
}
function HandelLisentKeyBoard()
{
    const BorderMneu = document.querySelector(".border-menu");
    document.addEventListener("keydown",(e)=>{
        if(e.key ==="Escape")
        {
            BorderMneu.classList.remove("active_menu")
        }
    })
}