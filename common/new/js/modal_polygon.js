$(document).ready(function() {
    var body = document.body;
    var polymodal = createModal(document.querySelector("#polymodal-1"));
    setTimeout(function () { polymodal.open(); }, _show_modal_timer);
    
    $(".polymodal-close").click(function() {
        polymodal.close();
    });

    function createModal(container) {
        var content = container.querySelector(".polymodal-content");
        var dialog = container.querySelector(".polymodal-dialog");
        var polygon = container.querySelector(".polymodal-polygon");
        var svg = container.querySelector(".polymodal-svg");
        
        var point1 = createPoint(45, 45);
        var point2 = createPoint(55, 45);
        var point3 = createPoint(55, 55);
        var point4 = createPoint(45, 55);
            
        var animation = new TimelineMax({    
            onReverseComplete: onReverseComplete,
            onStart: onStart,
            paused: true
            })     
            .to(point1, 0.45, {
            x: 15,
            y: 30,
            ease: Power4.easeIn
            }, 0)
            .to(point4, 0.45, {
            x: 5,
            y: 80,
            ease: Power2.easeIn
            }, "-=0.1")
            .to(point1, 0.45, {
            x: 0,
            y: 0,
            ease: Power3.easeIn
            })
            .to(point2, 0.45, {
            x: 100,
            y: 0,
            ease: Power2.easeIn
            }, "-=0.2")
            .to(point3, 0.45, {
            x: 100,
            y: 100,
            ease: Power2.easeIn
            })
            .to(point4, 0.45, {
            x: 0,
            y: 100,
            ease: Power2.easeIn
            }, "-=0.1")  
            .to(container, 1, {
            autoAlpha: 1
            }, 0)  
            .to(content, 1, {
            autoAlpha: 1
            })
        
        var polymodal = {
            animation: animation,
            container: container,
            content: content,
            dialog: dialog,    
            isOpen: false,
            open: open,
            close: close   
        };
        
        function onClick() {
            if (polymodal.isOpen) close();
        }
        
        function onStart() {
            //body.appendChild(container);
            //container.addEventListener("click", onClick);
        }
        
        function onReverseComplete() {
            //container.removeEventListener("click", onClick);
            //body.removeChild(container);
        }
        
        function open() {
            polymodal.isOpen = true;
            animation.play().timeScale(2);
        }
        
        function close() {
            polymodal.isOpen = false;
            animation.reverse().timeScale(2.5);
        }
            
        function createPoint(x, y) {
            var point = polygon.points.appendItem(svg.createSVGPoint());
            point.x = x || 0;
            point.y = y || 0;
            return point;
        }
        
        return polymodal;
    }
});