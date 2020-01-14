/* body content */
main {
    width: 71.4286vw;
    display: flex;
    margin: 0 auto;
    justify-content: space-between;
    padding-top: 2.9762vw;
    position: relative;
}
.main-container {
    width: 48.2143vw;
}
.list-box {
    width: 100%;
    display: flex;
    flex-direction: column;
    margin-bottom: 2.9762vw;
}

.title-img {
    width: 48.2143vw;
    height: 17.8571vw;
    position: relative;
}

.title-img amp-img.contain img {
    object-fit: cover;
    object-position: top;
    transition: all .5s;
}
a.title-img:hover amp-img.contain img {
    object-fit: cover;
    transform: scale(1.08);
    -webkit-transform: scale(1.08);
    -moz-transform: scale(1.08);
}

.post-info {
    position: relative;
    padding-left: 1.7857vw;
    padding-top: 1.5119vw;
    padding-right: 1.7857vw;
    padding-bottom: 1.7857vw;
    width: 48.2143vw;
    border: 0.0595vw solid #E6E6E6;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
}


.post-cate {
    font-size: 0.9524vw;
    line-height: 1.5476vw;
    color: #DBB302;
    text-decoration: none;
    margin-right: 0.9644vw;  
    display: flex;
    align-items: center;
}

.sticky-tag {
    display: flex;
    align-items: center;  
    color: #DBB302;
}

.post-cate:before,
.sticky-tag:before {
    display: flex;
    content: '';
    width:0.0595vw;
    min-width: 1px;
    height: 0.6548vw;
    background: #DBB302; 
    margin-right: 0.9524vw;       
}

.post-cate:first-child:before {
    display: none;
}

.sticky-tag .sticky-text {
    font-size: 0.9524vw;
    text-transform: uppercase;
}

.sticky-tag .sticky-text:before {
    font-family: "iconfont";
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: '\e63f';
    font-size: 0.9524vw;
    margin-right: 0.4167vw;
}

.post-title {
    font-size: 1.3613vw;
    line-height: 2.381vw;
    margin-top: 0.5952vw;
    margin-bottom: 0;
    width: 39.881vw;
    word-break: break-all;
}

.post-title:after {
    display: flex;
    content: '';
    width: 4.1667vw;
    height: 0.2976vw;
    background: #DBB302;
    margin-top: 0.7321vw;
}

.post-title a {
    text-decoration: none;
    color: #000000;
}

.post-excerpt {
    margin-top: 1.4286vw;
    margin-bottom: 1.1905vw;
    font-size: 0.9524vw;
    line-height: 1.6667vw;
    color: #8A8A8A;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
}

.flex-box {
    display: flex;
    align-items: center;
}

.meta-category {
    flex-wrap: wrap;
    padding-right: 4.1667vw;
}

.justify-between {
    justify-content: space-between;
}

.read-more {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 0.8333vw;
    line-height: 0.8333vw;
    text-decoration: none;
    min-width: 9.1667vw;
    min-height: 2.1429vw;
    box-sizing: border-box;
    padding-left: 1.1905vw;
    padding-right: 1.1905vw;
    padding-top: 0.7143vw;
    padding-bottom: 0.7143vw;
    color: #DBB302;
    border: 0.0595vw #DBB302 solid;
    transition: all .2s;
    text-transform: uppercase;
}

.read-more:hover {
    background: #DBB302;
    color: white;
}

.icon-ml-readmore {
    margin-left: 0.625vw;
    font-size: 1.1905vw;
}

.post-meta-box {
    margin-top: 0.7143vw;
    font-size: 0.8333vw;
}
.post-meta {
    font-size: 0.8333vw;
    color: #1A1A1A;
    text-decoration: none;
    margin-left: 1.4881vw;
    display: inline-flex;
    align-items: center;
}
.icon-mr-postmeta {
    margin-right: 0.5952vw;
    font-size: 1.4881vw;
}

.post-meta .icon-like-sp {
    font-size: 1.1905vw;
}


.post-meta-box a.edit-link:after {
    content: '';
    display: flex;
    background: #979797;
    margin-left: 1.4881vw;
    width: 0.0595vw;
    height: 0.6548vw;
}

.post-publish-date {
    width: 4.1667vw;
    height: 4.7619vw;
    background: #F6F6F7;
    position: absolute;
    right: 1.2501vw;
    top: -0.8333vw;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.post-publish-date .post-date {
    color: #DBB302;
    font-size: 1.3095vw;
    line-height: 2.2916vw;
    font-weight: bold;
}

.post-publish-date .post-month {
    color: #000000;
    font-size: 0.8333vw;
    line-height: 1.4583vw;
    text-transform: uppercase;
}

.list-box:last-child {
    margin-bottom: 2.381vw;
}
.pagination .screen-reader-text {
    display: none;
}
.nav-links {
    margin-bottom: 2.9762vw;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.nav-links .page-numbers,.nav-links .post-page-numbers {
    min-width: 2.1429vw;
    height: 2.1429vw;
    border: 0.0595vw #DBB302 solid;
    color: #DBB302;
    font-size: 1.0714vw;
    line-height: 1.0714vw;
    text-decoration: none;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin-left: 0.4762vw;
    margin-right: 0.4762vw;
    margin-bottom: 0.4762vw;
    box-sizing: border-box;
}

.nav-links .current, .nav-links a.page-numbers:hover,.nav-links a.post-page-numbers:hover {
    background: #DBB302;
    color: white;
}

.pagination>.nav-links>.dots {
    border: none;
    padding-bottom: 0.5714vw;
}

@media only screen and (max-width: 640px){
    /* main body */
    main {
        width: 100%;
        flex-direction: column;
        align-items: center;
        padding-top: 6.6667vw;
    }
    .main-container {
        width: 92vw;
    }

    .title-img {
        width: 92vw;
        height: 34.1333vw;
    }

    .post-info {
        width: 92vw;
        padding: 3.4667vw;
        border: 0.2667vw solid #E6E6E6;
    }

    .post-publish-date {
        width: 10.6667vw;
        height: 12.1333vw;
        top: -2vw;
        right: 2.8vw;
    }

    .post-publish-date .post-date {
        font-size: 3.4667vw;
        line-height: 6.0667vw;
    }

    .post-publish-date .post-month {
        font-size: 2.1333vw;
        line-height: 3.7333vw;
    }

    .post-cate {
        font-size: 3.4667vw;
        line-height: 4.8vw;
        margin-right: 2.2133vw;
    }

    .post-cate:before,
    .sticky-tag:before {
        width: 0.1333vw;
        height: 1.8933vw;
        margin-right: 2.2vw;
    }

    .sticky-tag .sticky-text {
        font-size: 2.9333vw;
        line-height: 2.9333vw;
    }

    .sticky-tag .sticky-text:before {
        font-size: 2.8vw;
        margin-right: 2vw;
    }

    .post-title {
        margin-top: 2.5333vw;
        margin-bottom: 0;
        font-size: 4.8vw;
        line-height: 6.6667vw;
        width: 74.4vw;
    }

    .post-title:after {
        width: 9.3333vw;
        height: 0.8vw;
        margin-top: 2.2667vw;
    }

    .post-excerpt {
        margin-top:3.3333vw;
        margin-bottom: 3.3333vw;
        font-size: 4vw;
        line-height: 5.6vw;
    }

    .read-more {
        font-size: 2.4533vw;
        line-height: 2.4533vw;
        min-width: 26.4933vw;
        min-height: 6.1333vw;
        padding-left: 3.7333vw;
        padding-right: 3.7333vw;
        padding-top: 2vw;
        padding-bottom: 2vw;
        border: 0.1333vw #DBB302 solid;
    }

    .icon-ml-readmore {
        margin-left: 1.3333vw;
        font-size: 3.3333vw;
    }


    .post-meta {
        font-size: 2.1333vw;
        margin-left: 3.2vw;
    }

    .icon-mr-postmeta {
        margin-right: 1.8667vw;
        font-size: 3.4667vw;
    }

    .post-meta-box a.edit-link:after {
        margin-left: 3.2133vw;
        width: 0.1333vw;
        height: 1.68vw;
    }

    .post-meta .icon-like-sp {
        font-size: 2.4vw;
    }

    .list-box {
        margin-bottom: 5.3333vw;
    }

    .nav-links .page-numbers,.nav-links .post-page-numbers {
        min-width: 8vw;
        height: 8vw;
        border: 0.1333vw #DBB302 solid;
        font-size: 4vw;
        line-height: 4vw;
        margin-left: 1.7733vw;
        margin-right: 1.7733vw;
        margin-bottom: 1.7733vw;
    }

    .pagination>.nav-links>.dots {
        padding-bottom: 2.6667vw;
    }

    .list-box:last-child {
        margin-bottom: 5.3333vw;
    }

    .meta-category {
        flex-wrap: wrap;
        padding-right: 10.6667vw;
    }
}