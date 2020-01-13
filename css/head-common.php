header {
    width: 100vw;
    background: #222222;
    display: flex;
    justify-content: center;
}
.top-container {
    width: 71.4286vw;
    height: 100%;
}
.title-menus-area {
    display: flex;
    width: 100%;
    height: 5.8095vw;
    justify-content: space-between;
}
.blog-title {
    display: flex;
    font-size: 1.6667vw;
    font-weight: bold;
    color: white;
    margin-top: 1.2857vw;
    white-space: nowrap;
    text-decoration: none;
    line-height: 1.6667vw;
}

.tagline {
    display: flex;
    width: 100%;
    flex-direction: column;
    align-items: center;
}
.tagline-main {
    color: white;
    font-size: 2.9286vw;
    margin-bottom: 1.6667vw;
    line-height: 2.9286vw;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.tagline-main:after {
    content: '';
    display: flex;
    background: #F6F8FA;
    width: 4.7619vw;
    height: 0.2381vw;
    margin-top: 1.6667vw;
}

.tagline-sub {
    color: #8A8A8A;
    font-size: 0.9524vw;
    line-height: 1.6667vw;
    margin-bottom: 3.5119vw;
}

.tagline-sub a {
    text-decoration: none;
    color: unset;
}

.tagline-sub a:hover {
    color: #DBB302;
}

/* go top button */
.scrolltop-wrap {
    box-sizing: border-box;
    position: absolute;
    top: 11.6667vw;
    right: -3.9048vw;
    bottom: 0;
}

.go-top {
    width: 2.9762vw;
    height: 2.9762vw;
    font-size: 1.1905vw;
    text-decoration: none;
    background: #DBB302;
    border-radius: 100%;
    color: white;
    justify-content: center;
    align-items: center;
    display: flex;
    cursor: pointer;
    
    position: fixed;
    position: -webkit-sticky;
    position: sticky;
    top: -5.9524vw;
    transform: translateY(100vh);
    overflow: hidden;
}

@media only screen and (max-width: 640px){
    .top-container {
        width: 100%;
    }
    .title-menus-area {
        padding-top: 4.6667vw;
        height: auto;
        position: relative;
    }
    .blog-title { 
        margin-top: 0;
        margin-left: 5.3333vw;
        font-size: 3.7333vw;
        line-height: 3.7333vw;
    }
    .tagline {
        margin: 6vw auto 0 auto;
        width:89.3333vw;
    }
    .tagline-main {
        font-size: 5.0667vw;
        line-height: 5.0667vw;
        margin-bottom: 2vw;
    }
    .tagline-main:after {
        width: 8.8vw;
        height: 0.44vw;
        margin-top: 3.0667vw;
    }
    .tagline-sub {
        font-size: 2.9333vw;
        line-height: 5.1333vw;
    }
    .scrolltop-wrap {
        display: none;      
    }
}