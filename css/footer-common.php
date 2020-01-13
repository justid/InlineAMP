/* common bottom */
footer {
    width: 100vw;
    background: #222222;
    display: flex;
    justify-content: center;
}
.footer-container {
    width: 71.4286vw;
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.footer-container .footer-copyright {
    margin-bottom: 1.1905vw;
    margin-top: 2.893vw;
}

.footer-container .footer-copyright, .footer-container .footer-copyright a{
    text-align: center;
    font-size: 0.8333vw;
    color: #8A8A8A;
    line-height: 0.5952vw;
    text-decoration: none;
}
.menu-footer-menu-container {
    margin-top: 2.893vw;
    margin-bottom: 0.875vw;
}
.menu-footer-menu-container>ul {
    display: flex;
    margin-top: 0;
    margin-bottom: 0;
    display: flex;
    justify-content: center;
}
.menu-footer-menu-container>ul>li {
    font-size: 1.0714vw;
    line-height: 1.0714vw;
    text-transform: uppercase;
    display: flex;
    flex-direction: column;
}
.menu-footer-menu-container>ul>li>a:after {
    display: flex;
    content: '';
    margin-top: 0.7798vw;
    width: 2.381vw;
    height: 0.119vw;
    background: #444444;
}
.menu-footer-menu-container>ul>li>a {
    color: #DBB302;
}
.menu-footer-menu-container a {
    text-decoration: none;
    font-size: 1.0714vw;
}
.menu-footer-menu-container ul, .menu-footer-menu-container li {
    list-style: none;
    justify-content: space-around;
    justify-content: space-evenly;
    display: flex;
    padding-left: 0;
}


.menu-footer-menu-container>ul>li .sub-menu {
    display: flex;
    flex-direction: column;
    text-transform: none;
}
.menu-footer-menu-container>ul>li ul li {
    margin-top: 1.2143vw;
    line-height: 0.9524vw;
    display: flex;
    justify-content: start;
}

.footer-container a:hover {
    color:#DBB302;
}
.menu-footer-menu-container>ul>li ul li:first-child {
    margin-top: 0.893vw;
}
.menu-footer-menu-container>ul>li ul li a{
    font-size: 0.9524vw;
    color: rgba(255,255,255,0.6);
    display: flex;
}

@media only screen and (max-width: 640px){
    /* footer */
    .footer-container {
        width: 100%;
        padding-top: 8.1333vw;
        padding-bottom: 5.3333vw;
    }

    .menu-footer-menu-container>ul>li {
        font-size: 3.7333vw;
        line-height: 3.7333vw;
        margin-bottom: 13.3333vw;
        min-width: 33.4667vw;
        margin-left: 4vw;
        margin-right: 4vw
    }

    .menu-footer-menu-container a {
        font-size: 3.7333vw;
    }
    .menu-footer-menu-container>ul>li>a:after {
        margin-top: 2.8vw;
        width: 8.5467vw;
        height: 0.4267vw;
    }

    .menu-footer-menu-container>ul>li ul li:first-child {
        margin-top: 3.1733vw;
    }

    .menu-footer-menu-container>ul>li ul li {
        margin-top: 4.3067vw;
        font-size: 3.4667vw;
        line-height: 3.4667vw;
    }

    .menu-footer-menu-container>ul>li ul li a {
        font-size: 3.4667vw;
    }

    .menu-footer-menu-container>ul {
        flex-wrap: wrap;
        justify-content: space-between;
        box-sizing: border-box;
        padding: 0 8.5334vw 0 8.5334vw;
    }

    .menu-footer-menu-container {
        margin: 0;
    }

    .footer-container .footer-copyright, .footer-container .footer-copyright a {
        font-size: 2.9333vw;
        line-height: 2.9333vw;
    }

    .footer-container .footer-copyright p {
        margin-top: 0;
    }

    .footer-container .footer-copyright {
        margin-top: 0;
        margin-bottom: 0;
    }

}