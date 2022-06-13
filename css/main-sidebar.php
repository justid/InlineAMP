.sidebar {
    width: 19.6429vw;
    min-height: 29.7619vw;
}

.sidebar>aside:first-child {
    margin-top: 0;
}
.widget {
    width: 100%;
}
.widget-title {
    color: black;
    font-size: 1.0714vw;
    line-height: 1.0714vw;
    margin-top: 0;
    margin-bottom: 1.6667vw;
    text-transform: uppercase;
}

.widget-title:after {
    display: flex;
    margin-top: 1.1131vw;
    content: '';
    width: 3.7501vw;
    height: 0.119vw;
    min-height: 1.5px;
    background: #DEDEDE;
}

.widget {
    border-bottom: 0.0595vw #EBEBEB solid;
    padding-bottom: 2.1429vw;
    margin-bottom: 2.9762vw;
}

.widget:last-child {
    margin-bottom: 0;
    border-bottom: none;
}

.widget>ul {
    overflow-wrap: break-word;
    margin: 0;
    padding-left: 0;
    
}

/* common widgets */
.widget ul li{
    font-size: 0.9524vw;
    line-height: 1.5476vw;
    margin-top: 1.25vw;
    list-style: none;
    position: relative;
    padding-left: 1.6667vw;
}

.widget ul li:first-child {
    margin-top: 0;
}

.widget ul li a {
    color: black;
    text-decoration: none;
}

.widget ul li a:hover {
    color: #DBB302;
}


.widget>ul>li:before {
    content: '\e62d';
    font-family: "iconfont";
    color: #DBB302;
    font-size: 0.893vw;
    margin-right: 0.7143vw;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    position: absolute;
    left: 0;
}

.widget .screen-reader-text {
    display: none;
}


/* search widgets */
.widget_search form {
    display: flex;
    position: relative;
    align-items: center;
}

.widget_search {
    border-bottom: none;
    padding-bottom: 0;
}

.widget_search form input[type='text'] {
    width: 19.5833vw;
    height: 2.6787vw;
    border: 0.0595vw #E6E6E6 solid;
    border-radius: 0.2381vw;
    padding-left: 1.1905vw;
    padding-right: 2.9762vw;
    font-size: 0.8333vw;
}

.widget_search form input[type='text']::placeholder {
    font-size: 0.8333vw;
    color: #8A8A8A;
}

.widget_search form button[type='submit'] {
    position: absolute;
    right: 0;
    padding: 0;
    border: none;
    background: unset;
    z-index: 1;
    cursor:pointer;
}
.widget_search form button[type='submit']:before {
    content: '\e62c';
    font-family: "iconfont";
    color: #B0B0B0;
    font-size: 1.7857vw;
    margin-right: 0.7143vw;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* profile widgets */
.widget_profile {
    padding-bottom: 0;
    border-bottom: 0;
}

.widget_profile .profile-box {
    width:19.6429vw;
    min-height:9.2262vw;
    border:0.0595vw #E6E6E6 solid;
    display: flex;
    justify-content: center;
    position: relative;
    margin-top: 2.6787vw;
}

.widget_profile .profile-avatar {
    width: 5.3571vw;
    height: 5.3571vw;
    position: absolute;
    top: -2.6787vw;
}

.widget_profile .profile-avatar img {
    border-radius: 100%;
}

.widget_profile .profile-content {
    font-size: 0.9524vw;
    padding: 2.9762vw 1.6667vw 1.9048vw 1.6667vw;
    width: 100%;
    box-sizing: border-box;
    word-break: break-word;
    line-height: 1.8;
}

.widget_profile .profile-content li {
    margin-top: 0.5952vw;
}

.widget_profile  ol, .widget_profile ul {
    padding-left: 0.9524vw;
    margin-top: 0.5952vw;
    margin-bottom: 0.5952vw;
}

.widget_profile  .profile-content p {
    margin-block-start: auto;
    margin-block-end: auto;
    margin-top: 0.5952vw;
}

.widget_profile img {
    max-width: 100%;
    height: auto;
}

.widget_profile .wp-video, .widget_profile .wp-video video{
    max-width: 100%;
    height: auto;
}

.widget_profile a {
    font-size: 0.9524vw;
    color: #DBB302;
    text-decoration: none;
}

.widget ul li span, .widget ul li a {
    color: black;
}

.widget ul li span.post-date {
    color: #888888;
    font-style: italic;
}

li.recentcomments {
    color: #888888;
}

@media only screen and (max-width: 640px){
    /* side bar */
    .sidebar {
        width: 92vw;
        margin-top: 8vw;
    }

    .widget_profile .profile-box {
        width: 92vw;
        margin-top: 12.5333vw;
        border: 0.2667vw #E6E6E6 solid;
    }

    .widget_profile .profile-avatar {
        width: 25.0667vw;
        height: 25.0667vw;
        top: -12.5333vw;
    }

    .widget_profile .profile-content{
        font-size: 4vw;
        line-height: 5.8667vw;
        padding: 17.8667vw 8.0667vw 4.8267vw 8.0667vw;
    }

    .widget_profile .profile-content li {
        font-size: 4vw;
        line-height: 5.8667vw;
        margin-top: 1.3333vw;
        list-style: unset;
    }

    .widget_profile  ol, .widget_profile ul {
        padding-left: 2.1333vw;
        margin-top: 1.3333vw;
        margin-bottom: 1.3333vw;
    }

    .widget_profile  .profile-content p {
        margin-block-start: auto;
        margin-block-end: auto;
        margin-top: 1.3333vw;
    }

    .widget_profile img {
        max-width: 100%;
        height: auto;
    }

    .widget_profile a {
        font-size: 4vw;
        color: #DBB302;
        text-decoration: none;
    }

    .widget_search {
        margin-top: 8vw;
        margin-bottom: 8vw;
    }

    .widget_search form input[type='text'] {
        width: 92vw;
        height: 10.6667vw;
        border: 0.2667vw #E6E6E6 solid;
        border-radius: 0.5333vw;
        padding-left: 5.3333vw;
        padding-right: 6.6667vw;
        font-size: 4vw;
    }

    .widget_search form input[type='text']::placeholder {
        font-size: 4vw;
    }

    .widget_search form button[type='submit']:before {
        font-size: 6.4vw;
        margin-right: 4.1333vw;
    }
    .widget {
        border-bottom: 0.2667vw #EBEBEB solid;
        padding-bottom: 8.0667vw;
        margin-bottom: 8.0667vw;
    }

    .widget_search,.widget_profile {
        border-bottom: none;
        padding-bottom: 0;
    }

    .widget:last-child {
        margin-bottom: 0;
        border-bottom: none;
    }

    .widget-title {
        font-size: 4.5333vw;
        line-height: 4.5333vw;
        margin-bottom: 7.4133vw;
    }
    .widget-title:after {
        margin-top: 4.5067vw;
        width: 15.2133vw;
        height: 0.48vw;
    }
    .widget ul li {
        font-size: 4vw;
        line-height: 6.6667vw;
        margin-top: 4vw;
        padding-left: 6.6667vw;
    }
    .widget>ul>li:before {
        font-size: 3.6vw;
        margin-right: 2.5333vw;
    }
}