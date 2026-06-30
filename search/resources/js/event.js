var EVT = {
	/**
	 * Usage : onkeydown="onlyNumber(event);" style="ime-mode:disabled"
	 * input object에서 숫자만 입력받는다.
	 * ime-mode : active -> 처음에 한글입력상태가 된다
	 * ime-mode : inactive -> 처음에 영어입력상태가 된다
	 * ime-mode : disabled -> 영어만 입력받는다(한글전환 안됨)
	 */
	onlyNumber : function(event) {
	    switch(event.keyCode) {
	    case  8: case  9: case  13:         // backspace, tab, enter
	    case 35: case 36:                   // end, home
	    case 37: case 38: case 39: case 40: // ←, ↑, →, ↓
	    case 46:                            // delete
	        event.returnValue = true;
	        break;
	    default:
	        // 0 ~ 9 || 키패드 0 ~ 9
	        if ((!event.shiftKey && ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105)))|| (event.ctrlKey && (event.keyCode == 86 || event.keyCode==67))) {
	            event.returnValue = true;
	        } else {
	            event.returnValue = false;
	        }
	        break;
	    }
		if (event.returnValue == false && event.preventDefault) {
			event.preventDefault();
		}
	},
	/**
	 * Usage : onkeydown="onlyDecimalNumber(event);" style="ime-mode:disabled"
	 * input object에서 소수점(.)과 숫자만 입력받는다.
	 */
	onlyDecimalNumber : function(event) {
	    var obj = event.target ? event.target : event.srcElement;
		switch(event.keyCode) {
		case  8: case  9: case  13:         // backspace, tab, enter
		case 35: case 36:                   // end, home
		case 37: case 38: case 39: case 40: // ←, ↑, →, ↓
		case 46:                            // delete
	        event.returnValue = true;
	        break;
		case 190: // .
		case 110: // 키패드 .
			if (event.shiftKey)	event.returnValue = false;
			else	{
			    if (obj.value.indexOf(".") == -1) event.returnValue = true;
	    	    else                              event.returnValue = false;
		    }
		    break;
		default:
		    // 0 ~ 9 || 키패드 0 ~ 9
	        if ((!event.shiftKey && ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105))) || (event.ctrlKey && (event.keyCode == 86 || event.keyCode==67))) {
	            event.returnValue = true;
	        } else {
			    event.returnValue = false;
			}
			break;
		}
		if (event.returnValue == false && event.preventDefault) {
			event.preventDefault();
		}
	},
	/**
	 * Usage : onkeydown="onlyNumberHyphen(event);" 
	 * input object에서 숫자/하이폰(-)만 입력받는다.
	 */
	onlyNumberHyphen : function(event) {
	    switch(event.keyCode) {
	    case  8: case  9: case  13:         // backspace, tab, enter
	    case 35: case 36:                   // end, home
	    case 37: case 38: case 39: case 40: // ←, ↑, →, ↓
	    case 46:                            // delete
	        event.returnValue = true;
	        break;
	    default:
	        // 0 ~ 9 || 키패드 0 ~ 9 || 하이폰(-)
	        if ((!event.shiftKey && ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 189 || event.keyCode == 109))||(event.ctrlKey && (event.keyCode == 86 || event.keyCode==67))) {
	            event.returnValue = true;
	        } else {
	            event.returnValue = false;
	        }
	        break;
	    }
		if (event.returnValue == false && event.preventDefault) {
			event.preventDefault();
		}
	},
	/**
	 * Usage : onkeydown="onlyHyphen(event);" 
	 * input object에서 숫자/하이폰(-)만 입력받는다.
	 */
	onlyHyphen : function(event) {
	    switch(event.keyCode) {
	    case  8: case  9: case  13:         // backspace, tab, enter
	    case 35: case 36:                   // end, home
	    case 37: case 38: case 39: case 40: // ←, ↑, →, ↓
	    case 46:                            // delete
	        event.returnValue = true;
	        break;
	    default:
	    	if(!event.shiftKey && event.keyCode == 189){
	    		event.returnValue = false;
	    	} else {
	    		 event.returnValue = true;
	    	}
	        break;
	    }
		if (event.returnValue == false && event.preventDefault) {
			event.preventDefault();
		}
	},
	/**
	 * Usage : onkeyup="EVT.toComma(event);" onkeydown="onlyNumber(event);" style="ime-mode:disabled"
	 * input object의 값을 3자리 마다 콤마를 찍는다.
	 */
	toComma : function(event) {
		var obj = event.target ? event.target : event.srcElement;    
		var str = obj.value.replace(/[,]/g, '');
	    var arr = str.split('.');
	    if (arr.length <= 2) {
	        if (!isNaN(arr[0])) {
	            var pattern = /([+-]?\d+)(\d{3})/;   // 정규식
	            while (pattern.test(arr[0])) {
	                arr[0] = arr[0].replace(pattern, '$1,$2');
	            }
	        }
	        obj.value = arr.join('.');
	    }
	},
	/******************************************************************************
	 * EVT.checkTextLength(thisElement) 
	 * input object에 입력되는 글자 수 체크
	 * Usage : onkeyup="EVT.checkTextLength(this)"
	 */
	checkTextLength : function(thisElement) {
		var mlength = thisElement.getAttribute? parseInt(thisElement.getAttribute("maxlength")) : 0;
		var cntntsTxt = $(thisElement).val();
		if(cntntsTxt.length > mlength){
			$(thisElement).blur();
			$(thisElement).val(cntntsTxt.substring(0,mlength));
			$(thisElement).focus();
			return false;
		} else{
			$("#" + $(thisElement).attr("id") + "_length").html(cntntsTxt.length);
		}
	}	
};