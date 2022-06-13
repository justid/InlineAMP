/* top menu */
.top-menus {
    display: flex;
    padding-right: 1.7619vw;
    padding-top: 1.5833vw;
    height: 0.9524vw;
}

.top-menus>nav>ul>li {
    display: flex;
    list-style: none;
    margin-left: 2.393vw;
    margin-bottom: 0.2976vw;
    position: relative;
    height: 1.9644vw;
}

.top-menus>nav>ul>li>a{
    color: white;
    font-size: 0.9524vw;
    line-height: 0.9524vw;
    text-decoration: none;
}

.top-menus .menu {
    display: flex;
    margin: 0;
    padding: 0;
    white-space: nowrap;
    list-style: none;
    justify-content: flex-end;
    flex-wrap: wrap;
}

/* sub menu */
.top-menus>nav>ul>li.menu-item-has-children>a:after {
    font-family: "iconfont";
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: '\e62b';
    margin-left: 0.5952vw;
    font-size: 0.9524vw;
}
.top-menus>nav>ul>li:hover a {
    color: #DBB302;
}
.top-menus>nav>ul>li:hover>ul {
    opacity: 1;
    visibility: visible;
    transition: 0.2s all ease;
}
.top-menus>nav>ul>li>.sub-menu {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    margin-top:1.9345vw;
    display: flex;
    flex-direction: column;
    background: #2A2A2A;
    border: #4A4A4A 0.0595vw solid;
    padding-top: 0.4167vw;
    padding-bottom: 0.4167vw;
    padding-left: 1.2501vw;
    padding-right: 1.2501vw;
    z-index: 1;
    overflow:hidden;   
    opacity: 0;
    visibility: hidden;
    transition: 0.2s all ease; 
}

.top-menus>nav>ul>li>.sub-menu>li {
    list-style:none;
    border-bottom: #4A4A4A 0.0595vw solid;
}

.top-menus>nav>ul>li>.sub-menu>li:last-child {
    border-bottom: 0
}

.top-menus ul>li>.sub-menu>li>a {
    font-size: 0.8333vw;
    line-height: 0.8333vw;
    color: white;
    text-decoration: none;
    width: 100%;
    min-height: 2.4405vw;
    display: flex;
    align-items: center;
}

/* third level menu */
.top-menus>nav>ul>li>.sub-menu>li ul {
    padding-left: 0.893vw;
}
.top-menus>nav>ul>li>.sub-menu>li>ul li {
    list-style:none;
}

.top-menus>nav>ul>li>.sub-menu>li ul li a{
    color: rgba(255,255,255,0.4);
    min-height: unset;
    margin-bottom: 0.6548vw;
}
.top-menus>nav>ul>li>.sub-menu>li ul li a:before {
    content: '-';
    margin-right: 0.2976vw;
}

.top-menus>nav>ul>li>.sub-menu>li a:hover {
    color: #DBB302;
}

#header-menu-button {
    display: none;
}

@media only screen and (max-width: 640px){
    /* expand menu */
    #header-menu-button + header .top-menus {
        display: flex;
        position: absolute;
        width: 100%;
        padding: 0;
        height: auto;
        top: 0;
        z-index: 1;
        pointer-events: none;
    }

    #header-menu-button:checked + header .top-menus {
        pointer-events: auto;
    }

    #header-menu-button:checked + header .top-menus nav>ul{
        padding-left: 4vw;
        padding-right: 4vw;
        opacity: 1;
        visibility: visible;
        padding-bottom: 16vw;
    }

    #header-menu-button + header .top-menus nav>ul {
        min-height: 100vh;
        position:fixed;
        top: 0;
        bottom: 0;
        overflow: scroll;
        flex-wrap: nowrap;

        opacity: 0;
        transition: 0.6s all ease;
        visibility: hidden;

        display: flex;
        width: 100%;
        flex-direction: column;
        background: #222222;
        justify-content: start;
        padding-top: 0;
        padding-bottom: 4.1333vw;
        box-sizing: border-box;
    }
    #header-menu-button + header .top-menus nav>ul>li{
        margin: 0;
        height: auto;
        padding-left: 1.3333vw;
        padding-right: 1.3333vw;
        border-bottom: 0.1333vw #4A4A4A solid;
        flex-direction: column;
        padding-top: 4.0667vw;
        padding-bottom: 4.0667vw;
    }
    #header-menu-button + header .top-menus nav>ul>li:first-child>a {
        padding-top: 0;
    }
    #header-menu-button + header .top-menus nav>ul>li:last-child {
        border-bottom: none;
    }
    #header-menu-button + header .top-menus nav>ul>li>a {
        font-size: 3.7333vw;
        line-height: 3.7333vw;

    }
    .top-menus>nav>ul>li.menu-item-has-children>a:after {
        display: none;
    }

    ul#menu-top-menu li {
        display: inline-flex;
        white-space: normal;
    }

    .top-menus>nav>ul>li>.sub-menu {
        display: flex;
        transform: none;
        position: relative;
        left: 0;
        margin-top: 0;
        margin-bottom: 4vw;
        background: inherit;
        border: none;
        padding: 0;
        padding-left: 3vw;
        opacity: 1;
        visibility: visible;
    }

    .top-menus>nav>ul>li:hover a {
        color: white;
    }

    .top-menus>nav>ul li a:hover {
        color: #DBB302;
    }

    .top-menus>nav>ul>li>.sub-menu>li {
        border: none;
        margin-top: 3.7067vw;
        flex-direction: column;
    }

    .top-menus>nav>ul>li>.sub-menu>li>a:before {
        content: '-';
        margin-right: 0.8vw;
        color: rgba(255,255,255,0.4);
    }

    .top-menus>nav>ul>li>.sub-menu>li ul {
        padding-left: 3vw;
    }

    .top-menus>nav>ul>li>.sub-menu>li ul li a {
        margin-bottom: 0;
        margin-top: 3.7067vw;
    }

    .top-menus ul>li>.sub-menu>li>a {
        font-size: 3.7333vw;
        line-height: 3.7333vw;
        color: rgba(255,255,255,0.4);
    }


    #header-menu-button{
        display:flex;
        margin: 0;
        -webkit-appearance: none;
        appearance: none;
        line-height: 3.7333vw;
        width: 4vw;
        height: 4vw;
        z-index: 2;
        position: absolute;
        right: 4vw;
        top: 4vw;
        border: none;
        background: transparent;
    }

    /* hide for menu scroll */
    #header-menu-button:checked + header + main {
        animation: mainhide 2s ease;
        animation-fill-mode: forwards; 
        -webkit-animation-fill-mode: forwards; 
        overflow: hidden;
    }
    @keyframes mainhide {
        from {
            max-height: auto;
        }

        to {
            overflow: hidden;
            max-height: 0;
        }
    }

    #header-menu-button:checked {
        position: fixed;
    }

    #header-menu-button:checked:after{
        display: flex;
        content: '\e63c';
        transform: scale(0.7);
    }

    #header-menu-button:after{
        content: '';  
        color: white;
        font-family: "iconfont";
        font-size: 5.3333vw;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        content: '\e63e';
    }
}