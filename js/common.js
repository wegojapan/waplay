﻿

// auto height
function matchHeight($o,m) {
	$o.css('height','auto')
	var foo_length = $o.length;
	for(var i = 0 ; i < Math.ceil(foo_length / m) ; i++) {
		var maxHeight = 0;
		for(var j = 0; j < m; j++){
			if ($o.eq(i * m + j).height() > maxHeight) {
				maxHeight = $o.eq(i * m + j).height();
			}
		}
		for(var k = 0; k < m; k++){
			$o.eq(i * m + k).height(maxHeight);
		}
	}
}

function matchHeightS($o, m) {
	var _w = Math.floor((100 / m) * 10) / 10;
	var _parent = $o.parent();
	if (m > 1) {
		$o.css('height', 'auto');
		if ($o.css('float') != 'none') {
			$o.css('width', String(_w) + '%')
		} else if (_parent.css('display') == 'flex') {
			$o.css('width', String(_w) + '%');
		}
		var foo_length = $o.length;
		for(var i = 0 ; i < Math.ceil(foo_length / m) ; i++) {
			var maxHeight = 0;
			for(var j = 0; j < m; j++){
				if ($o.eq(i * m + j).height() > maxHeight) {
					maxHeight = $o.eq(i * m + j).height();
				}
			}
			for(var k = 0; k < m; k++){
				$o.eq(i * m + k).height(maxHeight);
			}
		}
	} else {
		$o.css('height', 'auto');
		if ($o.css('float') != 'none') {
			$o.css('width', String(_w) + '%')
		} else if (_parent.css('display') == 'flex') {
			$o.css('width', String(_w) + '%');
		}
	}
}

