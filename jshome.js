var scrollY;

function mostrarmenu() {
    /* window.onscroll = function () { window.scrollTo(0, 0); window.scroll }; */
    scrollY = window.scrollY;
    window.scrollTo(0,0);
    document.getElementById('html').className="htmlclass";    
    document.getElementById('hamburguesa').className="menu-activo";
    
    
}

function ocultarmenu() {
    document.getElementById('hamburguesa').className = "menu-oculto";
    window.onscroll = function () { }
    document.getElementById('html').className="";
    window.scrollTo(0, scrollY);
}

console.log(window);





