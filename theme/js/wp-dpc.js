/**!
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here

	});

	$("#lastNameBold").html(function(){
	  var text= $(this).text().trim().split(" ");
	  var last = text.pop();
	  return text.join(" ") + (text.length > 0 ? " <span class='lastNameBolded'>" + last + "</span>" : last);
	});


}(jQuery));
