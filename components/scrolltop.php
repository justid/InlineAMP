<div class="scrolltop-wrap">
    <span tabindex="0" role="button" class="go-top" on="tap:commonTop.scrollTo(duration=500, position=top)">
        <span class="iconfont">&#xe638;</span>
    </span>
</div>
<amp-position-observer target="commonTop" layout="nodisplay" on="exit:showScrollTop.start; enter:hideScrollTop.start">
</amp-position-observer>
<amp-animation id="showScrollTop" layout="nodisplay">
<script type="application/json">
    {
    "duration": "200ms",
    "fill": "both",
    "iterations": "1",
    "direction": "alternate",
    "animations": [{
        "selector": ".scrolltop-wrap",
        "keyframes": [{
        "opacity": "1",
        "visibility": "visible"
        }]
    }]
    }
</script>
</amp-animation>
<amp-animation id="hideScrollTop" layout="nodisplay">
<script type="application/json">
    {
    "duration": "200ms",
    "fill": "both",
    "iterations": "1",
    "direction": "alternate",
    "animations": [{
        "selector": ".scrolltop-wrap",
        "keyframes": [{
        "opacity": "0",
        "visibility": "hidden"
        }]
    }]
    }
</script>
</amp-animation>