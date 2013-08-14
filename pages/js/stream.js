/*
 * stream plugin 
 * author : liuluying  
 *
 * */

(function(w,d){
    
    var Stream = function(cfgs){
        var _t = this,

        config = extend({
            containerId:'',
            itemWidth : 320,
            center : true,
            sort : false
        },cfgs),container = d.getElementById(config.containerId);

        if(!container) {
            return;
        }

        /*999*/
        
        window.cont = container; 
        var items = [].slice.call(container.children);
        if(config.sort) {
            items.sort(function(a,b){
                return parseFloat(getStyle(a,'height')) - parseFloat(getStyle(b,'height'));
            });
        } 
        var itemOffsetWidth = parseFloat(getStyle(items[0],'padding-left')) + 
            parseFloat(getStyle(items[0],'margin-right')) + parseFloat(getStyle(items[0],'margin-left')) + 
            parseFloat(getStyle(items[0],'padding-right')) + items[0].offsetWidth - items[0].clientWidth,

        itemOffsetHeight = parseFloat(getStyle(items[0],'padding-top')) + 
            parseFloat(getStyle(items[0],'margin-bottom')) + parseFloat(getStyle(items[0],'margin-top')) + 
            parseFloat(getStyle(items[0],'padding-bottom')) + items[0].offsetHeight - items[0].clientHeight,
        
        columnWidth = itemOffsetWidth + config.itemWidth;

        var columnsData = (function(){
            var columns = Math.max(1,parseInt(getContainerWidth()/columnWidth)),data = [];
            var overflowWidth = getContainerWidth()%columnWidth;
                overOfst = 0;
            if(config.center) {
                overOfst = overflowWidth/2;
            }
            for(var c =0; c<columns; c++) {
                data[c] = {
                    height: container.offsetTop,
                    left : container.offsetLeft + (c*columnWidth) + overOfst,
                    index : c,
                    items : []
                } 
            }
            
            return  data;
        })();
        
        var initPosition =  {
            left : columnsData[0].left,
            top : columnsData[0].height
        }
        
        function itemMapStyle(item) {
            var column = columnsData.sort(function(a,b){
                return a.height - b.height;
            })[0];
            initLeft = initPosition.left; 
            initTop =  initPosition.top;
            cLeft = column.left;
            cTop = column.height;
            column.height += itemOffsetHeight + parseFloat(getStyle(item,'height'));
            return {
                item :item,
                initLeft : initLeft,
                initTop : initTop,
                pLeft : cLeft - initLeft,
                pTop : cTop - initTop,
                cLeft : cLeft,
                cTop :cTop 
            }
        }

         function itemPush(items){
            container.style.height = columnsData.sort(function(a,b){
                return b.height - a.height
            })[0].height +'px';
            if(config.animate) {
                animate({
                    time : config.animate.time,
                    fps : config.animate.fps,
                    func : function(args){
                        for(var i=0;i<items.length; i++) {
                            var item = items[i];
                            var f = args.currFrame/args.totalFps;
                            item.item.style.width = config.itemWidth + 'px';
                            item.item.style.left = item.initLeft + item.pLeft*f + 'px';
                            item.item.style.top = item.initTop + item.pTop*f + 'px';
                        }
                    },
                    callback:function(args){
                        //console.info(+new Date - args.startTime);
                    }
                }); 
            } else {
                for(var i=0; i<items.length; i++) {
                    var item = items[i];
                    item.item.style.width = config.itemWidth + 'px';
                    item.item.style.left = item.cLeft + 'px';
                    item.item.style.top = item.cTop + 'px';
                }
                
            }
            
        }

        function initItems(){
            var cloneItems = items.concat([]);
            var itemStyles = [];
            while(cloneItems.length >0) {
                var item =cloneItems.shift(); 
                itemStyles.push(itemMapStyle(item));
            }

            itemPush(itemStyles);

            cloneItems = null;
            
        };
        
        function getContainerWidth () {
            return container.offsetWidth - (parseFloat(getStyle(container,'padding-left')) + 
            parseFloat(getStyle(container,'padding-right')) + container.offsetWidth - container.clientWidth);
        }

        function addItem(items) {
        
        };

        function delItem(items) {
        
        };


        function reload() {
        
        };

        function __construct() {
            initItems();
        
        }
        __construct();
    };

    Stream.prototype = {
        constructor : Stream,
        initItems: function(){
        },
        run : function(){
         
        } 
    }

    function extend() {
        var args = [].slice.call(arguments);
        for(var i=args.length; i>0; i--) {
            var item = args[i];
            if(!item) {
                continue;
            }
            for(var k in item) {
                args[i-1][k] = item[k];
            } 
            
        }
        return args[0];
    }

    function getStyle(el, style){
        if(!+"\v1"){
            style = style.replace(/\-(\w)/g, function(all, letter){
                return letter.toUpperCase();
            });
            return el.currentStyle[style];
        }else{
            return document.defaultView.getComputedStyle(el, null).getPropertyValue(style);
        }
    } 

    function animate(args) {
        var time = args.time || 1;
        var fps = args.fps || 20;
        var cfg ={
            time : time,
            fps : fps,
            currFrame : 0,
            totalFps : time*fps
        };
        var n = +new Date
        timer = setInterval(function(){
            if(cfg.currFrame > cfg.totalFps) {
                clearInterval(timer);
                if('function' == typeof args.callback) {
                    args.callback(cfg);
                }
                return;
            }
            cfg.currFrame ++;
            cfg.startTime = n;
            args.func(cfg);
        },1000/cfg.fps);


    }
    
    var stream = new Stream({
        containerId : 'stream-list',
        animate : {
            time :0.5,
            fps : 30
        } 
    });
    stream.run();

})(window,document,undefined)
