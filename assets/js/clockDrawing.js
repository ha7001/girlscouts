/**
 * Created by Harry on 4/23/16.
 */
(function drawingTest() {
    var Drawing,
        __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

    Drawing = (function() {
        function Drawing() {
            this.handle_interval = __bind(this.handle_interval, this);
            this.canvas = $("#canvas-drawing").get(0);
            this.context = this.canvas.getContext("2d");
            this.context.strokeStyle = "#91c91d";
            this.context.lineWidth = 15;
            this.context.fillStyle = "rgba(255, 255, 255, 1)";
            this.context.fillRect(0, 0, 980, 600);
            this.x = 0;
            this.y = 0;
            this.x_offset = $("#canvas-drawing").offset().left + 20;
            this.y_offset = $("#canvas-drawing").offset().top + 20;
            this.points = [];
            this.allow_drawing = false;
            setInterval(this.handle_interval, 30);
            this.handle_orientation_change();
            this.canvas.addEventListener("touchstart", (function(_this) {
                return function(event) {
                    return _this.handle_start(event, event.target);
                };
            })(this));
            this.canvas.addEventListener("touchmove", (function(_this) {
                return function(event) {
                    return _this.handle_move(event, event.target);
                };
            })(this));
            this.canvas.addEventListener("touchend", (function(_this) {
                return function(event) {
                    return _this.handle_end(event, event.target);
                };
            })(this));
            window.addEventListener("orientationchange", (function(_this) {
                return function(event) {
                    return _this.handle_orientation_change(event);
                };
            })(this));
            $(".colors li a").click((function(_this) {
                return function(event) {
                    var color;
                    event.preventDefault();
                    color = $(event.target).attr("data-color");
                    _this.context.strokeStyle = color;
                    $(".colors li a").removeClass("active");
                    return $(event.target).addClass("active");
                };
            })(this));
            $(".pencils li a").click((function(_this) {
                return function(event) {
                    var width;
                    event.preventDefault();
                    width = $(event.target).attr("data-size");
                    _this.context.lineWidth = width;
                    $(".pencils li a").removeClass("active");
                    return $(event.target).addClass("active");
                };
            })(this));
            $(".clear-drawing").click((function(_this) {
                return function(event) {
                    var answer;
                    event.preventDefault();
                    answer = confirm("All your drawing will be erased, are you sure?");
                    if (answer === true) {
                        _this.context.fillStyle = "rgba(255, 255, 255, 1)";
                        return _this.context.fillRect(0, 0, 980, 600);
                    }
                };
            })(this));
            $(".save-image-button").click((function(_this) {
                return function(event) {
                    var answer;
                    event.preventDefault();
                    answer = confirm("Your drawing will be saved but you can no longer edit it, you finished it?");
                    if (answer === true) {
                        $(".loading-overlay").show();
                        _this.save_image();
                    }
                    return false;
                };
            })(this));
            $(".drawings-gallery").click((function(_this) {
                return function(event) {
                    event.preventDefault();
                    return window.location.href = "/drawings";
                };
            })(this));
        }

        Drawing.prototype.handle_start = function(event, element) {
            this.x = event.touches[0].clientX - this.x_offset;
            this.y = event.touches[0].clientY - this.y_offset;
            this.points.push([this.x, this.y]);
            this.allow_drawing = true;
            return event.preventDefault();
        };

        Drawing.prototype.handle_move = function(event, element) {
            var point;
            point = [event.touches[0].clientX - this.x_offset, event.touches[0].clientY - this.y_offset];
            this.points.push(point);
            return event.preventDefault();
        };

        Drawing.prototype.handle_end = function(event, element) {
            this.allow_drawing = false;
            return this.points = [];
        };

        Drawing.prototype.handle_interval = function() {
            var start;
            if (!this.points.length) {
                return null;
            }
            start = new Date();
            if (this.allow_drawing) {
                this.context.beginPath();
                while (this.points.length && new Date() - start < 10) {
                    this.draw_line(this.points.shift());
                }
                return this.context.stroke();
            }
        };

        Drawing.prototype.draw_line = function(point) {
            this.context.lineCap = "round";
            this.context.moveTo(this.x, this.y);
            this.x = point[0];
            this.y = point[1];
            return this.context.lineTo(this.x, this.y);
        };

        Drawing.prototype.handle_orientation_change = function() {
            if (window.orientation === 0 || window.orientation === 180) {
                return $("body").removeClass("horizontal");
            } else {
                return $("body").addClass("horizontal");
            }
        };

        Drawing.prototype.save_image = function() {
            var image;
            image = this.canvas.toDataURL();
            $(".loading-overlay").css("display", "block");
            $.ajax({
                url: "/save",
                type: "post",
                dataType: "json",
                data: {
                    image_data: image
                },
                success: function(data, textStatus, jqXHR) {
                    return window.location.href = "/drawings";
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $(".loading-overlay").hide();
                    return alert("Sorry, some error ocurred while we were saving your drawing. Please, try again.");
                }
            });
            return false;
        };

        return Drawing;

    })();

    jQuery(function() {
        var drawing;
        if (($(".canvas-wrapper").length)) {
            drawing = new Drawing();
        }
        if (window.navigator.standalone) {
            return $("body").addClass("standalone");
        }
    });

}).call(this);
