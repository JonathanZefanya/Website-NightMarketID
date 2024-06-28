/*
Template Name: Shreyu - Responsive Bootstrap 5 Admin Dashboard
Author: CoderThemes
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Kanban Board init js
*/

! function($) {
	"use strict";

	var KanbanBoard = function() {
		this.$body = $("body")
	};

	

	//initializing various charts and components
	KanbanBoard.prototype.init = function() {
		$('.task-list-items').each(function () {
			Sortable.create($(this)[0], {
				group: 'shared',
				animation: 150
			});
            
        });
	},

	//init KanbanBoard
	$.KanbanBoard = new KanbanBoard, $.KanbanBoard.Constructor =
	KanbanBoard

}(window.jQuery),

//initializing KanbanBoard
function($) {
	"use strict";
	$.KanbanBoard.init()
}(window.jQuery);