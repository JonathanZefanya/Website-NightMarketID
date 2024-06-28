
/*
Template Name: Shreyu - Responsive Bootstrap 5 Admin Dashboard
Author: CoderThemes
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Widgets init js
*/


!function($) {
    "use strict";

    var ChatApp = function() {
        this.$body = $("body"),
        this.$chatInput = $('.chat-input'),
        this.$chatList = $('.conversation-list'),
        this.$chatSendBtn = $('.chat-send'),
        this.$chatForm = $("#chat-form")
    };

    ChatApp.prototype.save = function() {
        var chatText = this.$chatInput.val();
        var chatTime = moment().format("h:mm");
        if (chatText == "") {
            this.$chatInput.focus();
            return false;
        } else {
            $('<li class="clearfix odd"><div class="chat-avatar"><img src="assets/images/users/avatar-7.jpg" alt="male"><i>' + chatTime + '</i></div><div class="conversation-text"><div class="ctext-wrap"><i>Shreyu</i><p>' + chatText + '</p></div></div></li>').appendTo('.conversation-list');
            this.$chatInput.focus();
            this.$chatList.animate({ scrollTop: this.$chatList.prop("scrollHeight") }, 1000);
            return true;
        }
    }

    // init
    ChatApp.prototype.init = function () {
        var $this = this;
        //binding keypress event on chat input box - on enter we are adding the chat into chat list - 
        $this.$chatInput.keypress(function (ev) {
            var p = ev.which;
            if (p == 13) {
                $this.save();
                return false;
            }
        });


        //binding send button click
        $this.$chatForm.on('submit', function (ev) {
            ev.preventDefault();
            $this.save();
            $this.$chatForm.removeClass('was-validated');
            $this.$chatInput.val('');
            return false;
        });
    },
    //init ChatApp
    $.ChatApp = new ChatApp, $.ChatApp.Constructor = ChatApp
    
}(window.jQuery),

function ($) {
    "use strict";

    var WidgetsPage = function () { };

    WidgetsPage.prototype.initCharts = function() {
        window.Apex = {
            chart: {
                parentHeightOffset: 0,
                toolbar: {
                    show: false
                }
            },
            grid: {
                padding: {
                    left: 0,
                    right: 0
                }
            },
            colors: ["#5369f8", "#43d39e", "#f77e53", "#ffbe0b"],
            tooltip: {
                theme: 'dark',
                x: { show: false }
            }
        };


        // 
        // Stats
        //

        var options2 = {
            chart: {
                type: 'area',
                height: 45,
                width: 90,
                sparkline: {
                    enabled: true
                }
            },
            series: [{
                data: [25, 66, 41, 85, 63, 25, 44, 12, 36, 9, 54]
            }],
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            markers: {
                size: 0
            },
            colors: ["#5369f8"],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function (seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    type: "vertical",
                    shadeIntensity: 1,
                    inverseColors: false,
                    opacityFrom: 0.45,
                    opacityTo: 0.05,
                    stops: [45, 100]
                  },
            }
        }

        new ApexCharts(document.querySelector("#today-revenue-chart"), options2).render();
        new ApexCharts(document.querySelector("#today-product-sold-chart"), $.extend({}, options2, {colors: ['#f77e53']})).render();
        new ApexCharts(document.querySelector("#today-new-customer-chart"), $.extend({}, options2, {colors: ['#43d39e']})).render();
        new ApexCharts(document.querySelector("#today-new-visitors-chart"), $.extend({}, options2, {colors: ['#ffbe0b']})).render();

        // ------------------- revenue chart

        // data for the sparklines that appear below header area
        var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39];
        // the default colorPalette for this dashboard

        var labelsSales = [];
        for (var i=1; i<=10;i++) {
            labelsSales.push('2018-09-' + i);
        }
        var options2 = {
            chart: {
                type: 'area',
                height: 160,
                sparkline: {
                    enabled: true
                },
            },
            stroke: {
                width: 3,
                curve: 'smooth'
            },
            fill: {
                opacity: 0.2,
            },
            series: [{
                name: 'Data',
                data: sparklineData
            }],
            xaxis: {
                type: 'datetime',
            },
            yaxis: {
                min: 0
            },
            colors: ['#5369f8'],
            labels: labelsSales,
            title: {
                text: '21,000',
                offsetX: 5,
                offsetY: 10,
                margin: 0,
                style: {
                    fontSize: '24px'
                }
            },
            subtitle: {
                text: 'Visits',
                offsetX: 5,
                offsetY: 45,
                margin: 0,
                style: {
                    fontSize: '16px'
                }
            }
        }
        
        new ApexCharts(document.querySelector("#traffic-chart"), options2).render();
        
        var customersTitles = $.extend({}, options2.title, {text: '1100'});
        var customersSubTitles = $.extend({}, options2.subtitle, {text: 'Customers'});
        new ApexCharts(document.querySelector("#customers-chart"), $.extend({}, options2, {colors: ['#43d39e'], title: customersTitles, subtitle: customersSubTitles})).render();

        var revenueTitle = $.extend({}, options2.title, {text: '$201,200'});
        var revenueSubTitle = $.extend({}, options2.subtitle, {text: 'Revenue'});
        new ApexCharts(document.querySelector("#revenue-chart"), $.extend({}, options2, {colors: ['#f77e53'], title: revenueTitle, subtitle: revenueSubTitle})).render();
    },

    //initializing
    WidgetsPage.prototype.init = function () {
        // charts
        this.initCharts();

        // calendar
        $('#calendar-widget').flatpickr({
            inline: true,
            shorthandCurrentMonth: true,
        });

        // chat
        $.ChatApp.init();
    },

    
    $.WidgetsPage = new WidgetsPage, $.WidgetsPage.Constructor = WidgetsPage

}(window.jQuery),
//initializing main application module
function ($) {
    "use strict";
    $.WidgetsPage.init();
}(window.jQuery);
