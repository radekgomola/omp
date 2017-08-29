$(document).ready(function(){
	$('.sk-example').each(function(i){
		var $this = $(this),
			$annot = $this.find('.sk-annot'),
			$code = $this.find('.sk-example__content'),
			$comment = $this.find('.sk-example__comment'),
			$umbrac = $this.find('.sk-example__umbrac'),
			escapeHtml = function(text) {
				var map = {
					'&': '&amp;',
					'<': '&lt;',
					'>': '&gt;',
					'"': '&quot;',
					"'": '&#039;'
				};

				return text.replace(/[&<>"']/g, function(m) { return map[m]; });
			}

		$annot
			.append('<p class="sk-annot__icons"></p>');

		if ( $umbrac.length ){
			$annot
				.after('<div id="example-umbrac-'+i+'" class="box-code jsHide">\
					<div class="box-code__title">\
						<span class="box-code__title__name">Popis komponenty</span>\
						<span class="box-code__title__icon icon icon-desktop"></span>\
						<a href="#" class="box-code__title__close icon icon-times"></a>\
					</div>\
					<div class="box-code__content">'+$umbrac.html()+'</div>\
				</div>');
		}

		if ( $code.length ){
			var codeHTML = escapeHtml($code.html());
			var codeLines = codeHTML.split(/\n/);
			var firstLineCode = codeLines[1];
			var tabsCount = firstLineCode.split(/[^\t]/)[0].length;
			var reg = new RegExp('^\t{'+ tabsCount+'}', 'mg')
			var trimHTML = $.trim(codeHTML.replace(reg, ''))

			$annot
				.after('<div id="example-code-'+i+'" class="box-code jsHide">\
					<div class="box-code__title">\
						<span class="box-code__title__name">Ukázka HTML kódu</span>\
						<span class="box-code__title__icon icon icon-code"></span>\
						<a href="#" class="box-code__title__close icon icon-times"></a>\
					</div>\
					<pre class="box-code__inner"><code class="html">'+ trimHTML +'</code></pre>\
				</div>');
		}

		if ( $comment.length ){
			$annot
				.after('<div id="example-comment-'+i+'" class="box-code">\
					<div class="box-code__title">\
						<span class="box-code__title__name">Popis komponenty</span>\
						<span class="box-code__title__icon icon icon-comment"></span>\
						<a href="#" class="box-code__title__close icon icon-times"></a>\
					</div>\
					<div class="box-code__content">'+$comment.html()+'</div>\
				</div>');
		}


		if ( $comment.length ){
			$this.find('.sk-annot__icons').append('<a href="#example-comment-'+i+'" class="icon icon-comment js-toggle-jsHide" title="Popis komponenty"></a>');
		}
		if ( $code.length ){
			$this.find('.sk-annot__icons').append('<a href="#example-code-'+i+'" class="icon icon-code js-toggle-jsHide" title="Ukázka HTML kódu"></a>');
		}
		if ( $umbrac.length ){
			$this.find('.sk-annot__icons').append('<a href="#example-umbrac-'+i+'" class="icon icon-desktop js-toggle-jsHide" title="Umbrac"></a>');
		}
	})
})
