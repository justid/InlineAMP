    .content {
        word-break: break-word;
    }
    .content * {
        max-width: 100%;
    }
    hr {
        border: none;
        background: #e6e6e6;
        width: 100%;
        height: 0.0595vw;
        margin-top: 2.381vw;
        margin-bottom: 2.381vw;
    }

    .post-password-form>p>label>input {
        margin-left: 0.893vw;
        margin-right: 0.8333vw;
        width: 19.0476vw;
        height: 2.381vw;
        border-radius: 0.2381vw;
        border: 0.0595vw #E6E6E6 solid;
        padding-left: 1.1905vw;
        padding-right: 1.1905vw;
        vertical-align: middle
    } 

    .post-password-form>p>input {
        font-size: 0.9524vw;
        color: white;
        background: #464646;
        border-radius: 0.2381vw;
        padding: 0.8452vw 1.131vw 0.8452vw 1.131vw;
        border: none;
    }

    .content figure{
        margin: 0;
    }
    h2.article-title {
        margin-top: 1.3095vw;
        font-size: 1.9048vw;
        line-height: 2.8571vw;
        margin-bottom: 1.9048vw;
    }
    h2.article-title a {
        color: black;
        text-decoration: none;
    }

    .article-info .post-meta-box {
        margin-top: 0;
    }

    .article-info .post-meta-box a.edit-link:after {
        display: none;
    }

    .article-info .post-meta-box a.edit-link:before {
        content: '';
        display: flex;
        background: #979797;
        margin-right: 1.4881vw;
        width: 0.0595vw;
        height: 0.6548vw;
    }

    .article-info .post-meta:first-child {
        margin-left: 0;
    }

    .article-info .post-meta-box {
        margin-bottom: 0.9524vw;
    }

    .content blockquote {
        margin-left:0;
        margin-right:0;
        margin-top: 1.4286vw;
        margin-bottom: 1.4286vw;
        position: relative;
        padding-left: 3.5714vw;
    }

    .content blockquote p {
        margin: 0;
        font-size: 1.3095vw;
        line-height: 1.9048vw;
        color: black;
    }

    .content blockquote:before {
        content: '\e648';
        font-family: "iconfont";
        color: #E6E6E6;
        font-size: 2.1072vw;
        margin-right: 1.6667vw;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        position: absolute;
        left: 0;
    }

    .content h1,
    .content h2,
    .content h3,
    .content h4,
    .content h5,
    .content h6 {
        margin-top: 1.7857vw;
        margin-bottom: 1.7857vw;
    }

    .content h1 {
        font-size: 1.6667vw;
    }
    .content h2 {
        font-size: 1.5476vw;
    }
    .content h3 {
        font-size: 1.4286vw;
    }
    .content h4 {
        font-size: 1.3095vw;
    }
    .content h5 {
        font-size: 1.1905vw;
    }
    .content h6 {
        font-size: 1.0714vw;
    }  

    .content p {
        margin-top: 2.0238vw;
        margin-bottom: 2.0238vw;
        font-size: 1.0714vw;
        line-height: 1.9048vw;
        color: #666666;
    } 

    .content>figure {
        margin: 2.0238vw 0 2.0238vw 0;
    }
	
	.blocks-gallery-item figure img{
		display: flex;
	}

    .content ul, .content ol {
        padding-left: 1.4881vw;
        font-size: 1.0714vw;
        line-height: 1.9048vw;
        margin-top: 2.0238vw;  
        margin-bottom: 2.0238vw;  
    }

    .content figcaption {
        font-size: 1.1905vw;
        color: #666666;
        text-align: center;
        margin-top: 0.2976vw;
    }

    .wp-block-cover {
        margin: 2.0238vw 0 2.0238vw 0;
    }
    .wp-block-cover-image, .wp-block-cover {
        position: relative;
        background-color: #000;
        background-size: cover;
        background-position: center center;
        min-height: 25.5952vw;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .wp-block-cover-image.has-background-dim::before, 
    .wp-block-cover.has-background-dim::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: inherit;
        opacity: 0.5;
        z-index: 1;
    }

    .wp-block-cover .wp-block-cover__inner-container p {
        margin: 0;
        text-align: center;
    }
    .wp-block-cover-image .wp-block-cover__inner-container, .wp-block-cover .wp-block-cover__inner-container {
        z-index: 1;
        color: #f8f9f9;
    }

    .wp-block-cover__inner-containe,.wp-block-cover__inner-container p {
        color:white;
        font-size:1.7857vw;
    }

    figure.wp-block-gallery ul{
        list-style: none;
        padding: 0;
        margin: 0;
        max-width: 100%;
        display: flex;
        justify-content: space-between;
    }

    li.blocks-gallery-item {
        max-width: 100%;
    }

    .wp-block-gallery ul li figure {
        margin: 0;
        position: relative;
    }

    .wp-block-gallery ul li figure>figcaption {
        position: absolute;
        bottom: 0;
        width: 100%;
        font-size: 1.1905vw;
        line-height: 1.7857vw;
        padding-top: 1.3542%;
        padding-bottom: 1.0417%;
        margin: 0;
        color: white;
        background: linear-gradient(to top, rgba(13,13,13,0.85), transparent);
    }

    .wp-block-gallery, .blocks-gallery-grid {
        display: flex;
        flex-wrap: wrap;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .wp-block-gallery ul>li {
        margin-bottom: 0.9524vw;
    }
    
    .wp-block-gallery ul>li:first-child:last-child
    {
        width: 100%;
    }

    .wp-block-gallery ul>li:first-child:nth-last-child(n+2),
    .wp-block-gallery ul>li:first-child:nth-last-child(n+2) ~ li
    {
        width: calc((100% - 3%) / 2);
    }

    .wp-block-gallery ul>li:first-child:nth-last-child(3n),
    .wp-block-gallery ul>li:first-child:nth-last-child(3n) ~ li
    {
        width: calc((100% - 3%) / 3);
    }

    .wp-block-file {
        background: #F6F6F7;
        padding-left: 1.4881vw;
        padding-right: 1.0119vw;
        padding-top: 1.0714vw;
        padding-bottom: 1.0714vw;
        margin: 2.0238vw 0 2.0238vw 0;
        font-size: 0.9524vw;
        line-height: 2.381vw;
    }

    .wp-block-file:before {
        content: 'Download:';
        color: black;
        margin-right: 0.5952vw;
    }

    .wp-block-file a:last-child,
    a.wp-block-file__button {
        float: right;
        display:flex;
        padding: 0.7143vw 1.131vw 0.7143vw 1.131vw;
        border: 0.0595vw #DBB302 solid;
        line-height: 0.7619vw;
    }

    .wp-block-file a:last-child:hover,
    a.wp-block-file__button:hover {
        background: #DBB302;
        color: white;
    }

    .wp-block-file a:last-child:after,
    a.wp-block-file__button:after {
        content: '\e645';
        font-family: "iconfont";
        font-size: 0.9524vw;
        margin-left: 0.8333vw;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .content a {
        color: #DBB302;
        text-decoration: none;
    }

    .content .wp-block-code {
        width: 100%;
        background: #F6F6F7;
        padding: 0.9524vw;
        font-size: 1.1905vw;
        line-height: 1.7857vw;
        color: #666666;
        box-sizing: border-box;
    }

    .wp-block-table table {
        width: 100%;
        border-collapse: collapse;
        font-size: 1.1905vw;
    }

    .wp-block-table table td {
        color: #666666;
        border: 0.0595vw #cccccc solid;
        padding: 0.4762vw;
    }

    .wp-block-button {
        margin: 2.0238vw 0 2.0238vw 0;
    }
    .wp-block-button a {
        text-decoration: underline;
    }

    .wp-block-media-text {
        display: flex;
        margin: 2.0238vw 0 2.0238vw 0;
    }

    .wp-block-media-text figure {
        width: 50%;
        margin: 0;
    }

    .wp-block-media-text .wp-block-media-text__content {
        margin-left: 0.893vw;
    }
    
    .wp-block-column {
        flex-grow: 1;
        min-width: 0;
        word-break: break-word;
        overflow-wrap: break-word;
    }
    .wp-block-columns {
        flex-wrap: nowrap;
        display: flex;
    }

    .likes-form {
        text-align: center;
        margin-bottom: 3.5714vw;
    }

    .likes-button {
        width: 4.7619vw;
        height: 4.7619vw;
        border-radius: 100%;
        border: 0.0595vw solid #C4C4C4;
        background: white;
        color: #1A1A1A;
        font-size: 0.8333vw;
        display: inline-flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .likes-button:hover,.likes-button-active{
        color: #DBB302;
    }

    .likes-button:before {
        content: '\e64a';
        font-family: "iconfont";
        font-size: 1.9048vw;
        margin-bottom: 0.3571vw;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .likes-form .likes-button-active:before {
        content: '\e63d';
    }

    .post-nav {
        display: flex;
        justify-content: space-between; 
        margin-bottom: 4.5238vw;           
    }

    .post-nav .nav-previous a,.post-nav .nav-next a {
        color: #c5c5c5;
        font-size: 1.0714vw;
        text-decoration: none;
        font-weight: bold;
        display: inline-flex;
    }

    .post-nav a.post-nav-link-active {
        color: black;
    }
    .post-nav a.post-nav-link-active:hover {
        color: #DBB302;
    }
    .post-nav .nav-previous a:before {
        content: '\e640';
        font-family: "iconfont";
        font-size: 1.5476vw;
        margin-right: 0.875vw;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;         
    }
    .post-nav .nav-next a:after {
        content: '\e649';
        font-family: "iconfont";
        font-size: 1.5476vw;
        margin-left: 0.875vw;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;         
    }

    .social-share {
        display: flex;
        max-width: 100%;
    }

    .social-share-box {
        width: 2.9762vw;
        height: 2.9762vw;
        margin-right: 1.7857vw;
    }

    amp-social-share.rounded {
        display: flex;
        border-radius: 50%;
        background-size: 60%;
        color: #fff;
        background-color: black;
    }

    amp-social-share.rounded:hover {
        background-color: #DBB302;
    }

    .post-tags {
        display: flex;
        margin-top: 1.9644vw;
    }
    .post-tags a{
        display: inline-flex;
        background: #F2F2F2;
        padding-left: 1.3393vw;
        padding-right: 1.3393vw;
        padding-top: 0.6548vw;
        padding-bottom: 0.6548vw;
        margin-right: 0.3571vw;
        color: #666666;
        font-size: 0.8333vw;
        line-height: 0.8333vw;
        text-decoration: none;
        text-transform: uppercase;
    }

    #comments {
        margin-top: 4.7619vw;
    }

    .comments>h2 {
        text-align: center;
        margin-bottom: 3.5714vw;
        font-size: 1.0714vw;
        line-height: 1.0714vw;
        text-transform: uppercase;
    }

    .comments>ul {
        list-style: none;
        padding-left: 0.9524vw;
        margin-top: 0;
        margin-bottom: 1.7857vw;
    }

    .comments>ul .comment-author .avatar {
        border-radius: 100%;
        width: 4.7619vw;
        height: 4.7619vw;
        position: absolute;
        left: 0.9524vw;
    }

    .comments>ul cite.fn a {
        font-weight: bold;
        font-size: 1.0714vw;
        color: black;
        font-style: normal;
    }

    .comments>ul span.says {
        display: none;
    }

    .comments>ul cite.fn {
        font-weight: bold;
        font-style: normal;
    }

    .comments>ul .comment-meta a:first-child{
        color: #B5B5B5;
        font-size: 0.9524vw;
        line-height: 0.9524vw;
        font-style: italic;
    }

    .comments>ul .comment-meta {
        margin-bottom: 1.9048vw;
    }

    .comments>ul .comment-body {
        position: relative;
        padding-left: 7.7381vw;
        padding-bottom: 0.5952vw;
        padding-top: 2.381vw;
        
    }

    #comments>ul>li.comment ul {
        list-style: none;
    }

    #comments>ul>li.comment ul .comment-body:before {
        content: ' ';
        height: 2.9762vw;
        width: 0.2381vw;
        background: #EEEEEE;
        display: flex;
        position: absolute;
        left: -0.5952vw;
        top: 3.2738vw;
    }

    #comments>ul>li.comment {
        border-bottom: 0.0595vw solid #E6E6E6;
    }

    #comments>ul>li.comment:last-child {
        border-bottom: none;
    }

    .comments>ul .comment-body .reply {
        text-transform: uppercase;
        position: absolute;
        right: 0;
        top: 2.381vw;
        font-size: 1.0714vw;
    }

    .comment-respond .comment-reply-title{
        font-size: 1.0714vw;
        text-transform: uppercase;
    }

    .comment-respond .comment-reply-title>small {
        text-transform: uppercase;
        float: right
    }

    .comment-form {
        font-size: 0;  /* css hack for fix blank position */
    }

    .comment-form>.logged-in-as a:first-child {
        color: #666666;
    }

    .comment-form>.logged-in-as {
        margin-bottom: 1.7857vw;
    }

    .comment-form>.form-submit {
        margin-bottom: 4.7619vw
    }

    .comment-form .comment-error {
        color: red;
        font-size: 1.0714vw;
        margin-bottom: 0.2976vw;
    }

    .comment-form-comment .comment-content {
        width: 48.2143vw;
        height: 11.9048vw;
        resize: none;
        border: 0.0595vw #E6E6E6 solid;
        padding: 1.1905vw 1.3095vw 1.1905vw 1.3095vw;
        font-size: 1.0952vw;
        line-height: 1.0952vw;
        box-sizing: border-box;
    }

    .comment-form-comment .comment-content::placeholder {
        font-size: 1.0952vw;
        line-height: 1.0952vw;
    }

    .comment-form>.form-submit>.submit {
        border: 0.0595vw solid #DBB302;
        text-transform: uppercase;
        color: #DBB302;
        font-size: 1.0952vw;
        line-height: 1.0952vw;
        background: white;
        box-sizing: border-box;
        padding: 0.9644vw 1.5059vw 0.9644vw 1.5059vw;
        cursor: pointer;
    }

    .comment-form>.form-submit>.submit:hover {
        background: #DBB302;
        color: white; 
    }

    .comment-form-author {
        margin-right: 1.3095vw;
    }
    .comment-form-author,
    .comment-form-email,
    .comment-form-url
    {
        display: inline-flex;
    }
    .comment-form-author input,
    .comment-form-email input,
    .comment-form-url input
    {
        width: 23.4524vw;
        height: 3.4524vw;
        border: 0.0595vw solid #E6E6E6;
        padding:  1.369vw;
        font-size: 0.9524vw;
        line-height: 0.9524vw;
        color: #333333;
        box-sizing: border-box;
    }

    .comment-form-url input {
        width: 48.2143vw;
    }

    #wp-comment-cookies-consent {
        width: 1.0714vw;
        height: 1.0714vw;
        margin: 0;
        vertical-align: middle;
        margin-right: 0.2976vw;
    } 
    .comment-form-cookies-consent>label {
        color: #B5B5B5;
        font-size: 0.9524vw;
        line-height: 0.9524vw;
    }


    @media only screen and (max-width: 640px){
        .likes-form {
            margin-bottom: 8vw;
        }
        .article-info .post-meta-box a.edit-link:before {
            margin-right: 3.2133vw;
            width: 0.1333vw;
            height: 1.68vw;
        }

        h2.article-title {
            margin-top: 5.3333vw;
            font-size: 5.0667vw;
            line-height: 6.9334vw;
            margin-bottom: 5.3333vw;
        }
        .article-info .post-meta-box {
            margin-bottom: 0;
        }

        .content blockquote {
			margin-top: 6.4666vw;
            margin-bottom: 6.4666vw;
            padding-left: 8vw;   
        }

        .content blockquote:before {
            font-size: 4.7201vw;
            margin-right: 3.7333vw;
        }

        .content blockquote p {
            font-size: 4vw;
            line-height: 5.6vw;
        }
        .content h1, .content h2, .content h3, .content h4, .content h5, .content h6 {
			margin-top: 5.3333vw;
            margin-bottom: 5.3333vw;
        }
        .content h1 {
            font-size: 5.6vw;
        }
        .content h2 {
            font-size: 5.3333vw;
        }  
        .content h3 {
            font-size: 5.0667vw;
        } 
        .content h4 {
            font-size: 4.8vw;
        } 
        .content h5 {
            font-size: 4.5333vw;
        } 
        .content h6 {
            font-size: 4.2667vw;
        } 
        .content p {
			margin-top: 4.5333vw;
            margin-bottom: 4.5333vw;
            font-size: 4vw;
            line-height: 5.8667vw;
        }

        .content ul, .content ol {
            padding-left: 3.3333vw;
            font-size: 4vw;
			line-height: 5.8667vw;  
			margin-top: 5.3333vw;    
            margin-bottom: 5.3333vw;    
        }

        .content figcaption {
            font-size: 3.2vw;
            margin-top: 0.6666vw;
        }

        .content>figure {
            margin: 4.5333vw 0 4.5333vw 0;
        }

        .wp-block-cover-image, .wp-block-cover {
            min-height: 50vw;
            margin: 4.5333vw 0 4.5333vw 0;
        }

        .wp-block-gallery ul>li {
            margin-bottom: 2.1333vw;
        }

        .content .wp-block-code {
            padding: 2.1333vw;
            font-size: 3.3vw;
            line-height: 4.2667vw; 
        }

        .wp-block-table table {
            font-size: 3.4667vw;
        }

        .wp-block-file {
            padding-left: 3.4667vw;
            padding-right: 2.6667vw;
            padding-top: 1.3333vw;
            padding-bottom: 1.3333vw;
            margin: 4.5333vw 0 4.5333vw 0;
            font-size: 3.4667vw;
            line-height: 5.3333vw;
        }

        .wp-block-file a:last-child, a.wp-block-file__button {
            padding: 1.6vw 3.2vw 1.6vw 3.2vw;
            border: 0.1333vw #DBB302 solid;
            line-height: 2.1333vw;
        }

        .wp-block-file a:last-child:after, a.wp-block-file__button:after {
            font-size: 2.6667vw;
            margin-left: 2.4vw;
		}
		
		.nav-links {
			margin-top: 4.5333vw;
			margin-bottom: 4.5333vw;
		}

		.wp-block-button {
			margin: 4.5333vw 0 4.5333vw 0;
		}

        .likes-button {
            width: 16vw;
            height: 16vw;
            border: 0.1333vw solid #C4C4C4;
            font-size: 2.6667vw;
            margin-top: 2.6667vw;
        }
        .likes-button:before {
            font-size: 5.6vw;
            margin-bottom: 1.8667vw;
        }

        .post-nav {
            margin-bottom: 12.6667vw;           
        }

        .post-nav .nav-previous a, .post-nav .nav-next a {
            font-size: 3.7333vw;
        }


        .social-share-box {
            width: 6.6667vw;
            height: 6.6667vw;
            margin-right: 4vw;
        }

        .post-tags {
            margin-top: 8.8vw;;
        }
        .post-tags a{
            padding-left: 3.5333vw;
            padding-right: 3.5333vw;
            padding-top: 1.7333vw;
            padding-bottom: 1.7333vw;
            margin-right: 1.3333vw;
            font-size: 2.2vw;
            line-height: 2.2vw;
        }

        .comments>ul .comment-author .avatar {
            width: 10.6667vw;
            height: 10.6667vw;
            left: 0;
        }

        #comments>ul {
            padding-left: 0;
        }

        .comments>ul .comment-body {
            padding-left: 15.7067vw;
            padding-bottom: 1.8667vw;
            padding-top: 5.3333vw;         
        }

        .comments>ul cite.fn a {
            font-size: 3.7333vw;
        }

        .comments>ul .comment-meta a:first-child {
            font-size: 3.2vw;
            line-height: 3.2vw;
        }

        .comments>ul .comment-body .reply {
            font-size: 3.7333vw;
            top: 5.3333vw;       
        }

        .comments>h2,.comment-respond .comment-reply-title {
            font-size: 3.7333vw;
        }

        .comment-form-comment .comment-content {
            width: 92vw;
            height: 26.6667vw;
            border: 0.1333vw #E6E6E6 solid;
            padding: 4vw 3.3333vw 4vw 3.3333vw;
            font-size: 3.4667vw;
            line-height: 3.4667vw;     
        }

        .comment-form-comment .comment-content::placeholder {
            font-size: 3.4667vw;
            line-height: 3.4667vw;   
        }


        .comment-form>.form-submit>.submit {
            border: 0.1333vw solid #DBB302;
            font-size: 3.2vw;
            line-height: 3.2vw;
            padding: 2.8133vw 4.4vw 2.8133vw 4.4vw;
            cursor: pointer;
        }

        .comment-form .comment-error {
            font-size: 3.4667vw;
        }

        #comments>ul>li.comment {
            border-bottom: 0.1333vw solid #E6E6E6;
        }
        .comment-form-author input, .comment-form-email input, .comment-form-url input {
            width: 92vw;
            height: 10.6667vw;
            border: 0.1333vw solid #E6E6E6;
            padding: 2.5333vw;
            font-size: 3.4667vw;
            line-height: 3.4667vw;
        }

        #wp-comment-cookies-consent {
            width: 5.3333vw;
            height: 5.3333vw;
            margin-right: 1.3333vw;
        }

        .comment-form-cookies-consent>label {
            font-size: 3.2vw;
            line-height: 4.8vw;
        }
        .comment-form-cookies-consent {
            display: flex;
        }

        .post-nav .nav-previous a:before {
            font-size: 5.3333vw;
            margin-right: 2.8vw;         
        }
        .post-nav .nav-next a:after {
            font-size: 5.3333vw; 
            margin-left: 2.8vw;        
        }

        hr {
            height: 0.1333vw;
            margin-top: 5.3333vw;
            margin-bottom: 5.3333vw;
        }
        .post-password-form>p>label>input {
            margin-left: 2.0001vw;
            margin-right: 1.8667vw;
            width: 42.6667vw;
            height: 5.3333vw;
            border-radius: 0.5333vw;
            border: 0.1334vw #E6E6E6 solid;
            padding-left: 2.6667vw;
            padding-right: 2.6667vw;
        } 
    
        .post-password-form>p>input {
            font-size: 2.1333vw;
            border-radius: 0.5333vw;
            padding: 1.8934vw 2.5334vw 1.8934vw 2.5334vw;
        }

        #comments>ul>li.comment ul .comment-body:before {
            height: 6.6667vw;
            width: 0.5333vw;
            left: -3.3333vw;
            top: 7.3334vw;
        }

        #comments {
            margin-top: 12vw;
        }

        .wp-block-table table td {
            border: 0.2667vw #cccccc solid;
            padding: 1.0667vw;
        }

        .wp-block-gallery ul li figure>figcaption {
            font-size: 1.7333vw;
            line-height: 2.9333vw;
        }
    }
