var UTILS = { 
	/**
	 * UUID 생성기
	 */
	getUUID : function () {
	    var d = new Date().getTime();
	    var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
	        var r = (d + Math.random()*16)%16 | 0;
	        d = Math.floor(d/16);
	        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
	    });
	    return uuid;
	},
	/**
	 * Post 방식으로 Submit 처리
	 * requestUrl : http://test.com/sample/send.do?param1=1&param2=2
	 */
	postSubmit : function(requestUrl) { 
		var p = requestUrl.replace(/&amp;/gi,'&').split('?');
	    var action = p[0];
	    var $form = $('<form/>', {action:action, method:'post'}).appendTo('body');
	    if(p[1] != null && p[1] != '') {
		    var params = p[1].split('&');
		    for (var i in params) {
		        var tmp = params[i].split('=');
		        var key = tmp[0], value = tmp[1];
		        $('<input/>', {type:'hidden', name:key, value:value}).appendTo($form);
		    }
	    }
		$form.submit();
		$form.remove();
	},
	/**
	 * Post 방식으로 Submit 처리
	 * requestUrl : http://test.com/sample/send.do?param1=1&param2=2
	 */
	postSubmitTarget : function(requestUrl, targetID) { 
		var p = requestUrl.replace(/&amp;/gi,'&').split('?');
	    var action = p[0];
	    var $form = $('<form/>', {action:action, target:targetID, method:'post'}).appendTo('body');
	    if(p[1] != null && p[1] != '') {
		    var params = p[1].split('&');
		    for (var i in params) {
		        var tmp = params[i].split('=');
		        var key = tmp[0], value = tmp[1];
		        $('<input/>', {type:'hidden', name:key, value:value}).appendTo($form);
		    }
	    }
		$form.submit();
		$form.remove();
	},
	/**
	 * Post 방식으로 Submit 처리
	 * requestUrl : http://test.com/sample/send.do?param1=1&param2=2
	 */
	postFormSubmit : function(requestUrl, formID) { 
		var p = requestUrl.replace(/&amp;/gi,'&').split('?');
	    var action = p[0];
	    var form = $('#'+formID).appendTo('body');
	    if(p[1] != null && p[1] != '') {
		    var params = p[1].split('&');
		    for (var i in params) {
		        var tmp = params[i].split('=');
		        var key = tmp[0], value = tmp[1];
		        $('<input/>', {type:'hidden', name:key, value:value}).appendTo(form);
		    }
	    }
	    form.attr("action", action).submit();
	},
	/**
	 * requestMap 의 값으로 Dynamic 하게 Form 생성 후 Submit 까지 완료 
	 * requestMap = [{name : "formElementName", value : "value"}]
	 */
	dynamicFormSubmit : function(requestUrl, requestMap) { 
		var $form = $("<form></form>");
		$form.attr("action", requestUrl);
		$form.attr("method", "post");
		$form.appendTo("body");
		try {
			for (var i = 0; requestMap != null && i < requestMap.length; i++) {
				$('<input/>', {type:'hidden', name:requestMap[i].name, value:requestMap[i].value}).appendTo($form);
			}
		} catch (e) {
			alert(e);
		}
		$form.submit();
		$form.remove();
	},
	/**
	 * Ajax 실행
	 * requestType : "GET" or "POST"
	 * requestUrl : URL
	 * reqeustData : {"id1":"value2", "id2":"value2"}
	 * successFn : function(data) { }
	 * successFn : function(xhr, status, error) { }
	 */
	ajaxCall : function(requestType, requestUrl, reqeustData, successFn, errorFn) { 
		$.ajax({
			type:requestType,
			url:requestUrl,
			contentType:"application/x-www-form-urlencoded;charset=utf-8",
			data:reqeustData,
			dataType:"json",
			timeout:30000,
			async:false,
			cache:false,
			success:function(data) { typeof successFn === "function" ? successFn(data): null; },
			error:function(xhr, status, error) 
				{ 
					typeof errorFn === "function" ? errorFn(xhr, status, error) : null;
				}
		});
	},
	/**
	 * 특정 날짜에 대해 지정한 값만큼 가감(+-)한 날짜를 반환
	 * 
	 * 입력 파라미터 -----
	 * pInterval : "yyyy" 는 연도 가감, "m" 은 월 가감, "d" 는 일 가감
	 * pAddVal  : 가감 하고자 하는 값 (정수형)
	 * pYyyymmdd : 가감의 기준이 되는 날짜
	 * pDelimiter : pYyyymmdd 값에 사용된 구분자를 설정 (없으면 "" 입력)
	 * 
	 * 반환값 ----
	 * yyyymmdd 또는 함수 입력시 지정된 구분자를 가지는 yyyy?mm?dd 값
	 *
	 * 사용예 ---
	 * 2008-01-01 에 3 일 더하기 ==> addDate("d", 3, "2008-08-01", "-");
	 * 20080301 에 8 개월 더하기 ==> addDate("m", 8, "20080301", "");
	 */
	addDate : function (pInterval, pAddVal, pYyyymmdd, pDelimiter) {
		var yyyy;
		var mm;
		var dd;
		var cDate;
		var cYear, cMonth, cDay;

		if (pDelimiter != "") {
			pYyyymmdd = pYyyymmdd.replace(eval("/\\" + pDelimiter + "/g"), "");
		}

		yyyy = pYyyymmdd.substr(0, 4);
		mm  = pYyyymmdd.substr(4, 2);
		dd  = pYyyymmdd.substr(6, 2);

		if (pInterval == "yyyy") {
			yyyy = (yyyy * 1) + (pAddVal * 1); 
		} else if (pInterval == "m") {
			mm  = (mm * 1) + (pAddVal * 1);
		} else if (pInterval == "d") {
			dd  = (dd * 1) + (pAddVal * 1);
		}

		cDate = new Date(yyyy, mm - 1, dd); // 12월, 31일을 초과하는 입력값에 대해 자동으로 계산된 날짜가 만들어짐.

		cYear = cDate.getFullYear();
		cMonth = cDate.getMonth() + 1;
		cDay = cDate.getDate();
		cMonth = cMonth < 10 ? "0" + cMonth : cMonth;
		cDay = cDay < 10 ? "0" + cDay : cDay;

		if (pDelimiter != "") {
			return cYear + pDelimiter + cMonth + pDelimiter + cDay;
		} else {
			return "" + cYear + cMonth + cDay;
		}
	},
	
	/**
	 * 필수로 입력해야 하는 정보를 입력하지 않았을 때 경고를 띄우는데 쓰인다.
	 * 인자(checkMsgMap)은 필수 입력해야 할 필드의 id와 입력되지 않았을 때 화면에 뜨는 
	 * 경고 메시지 쌍으로 구성된 객체(Hash 형태)를 받는다.
	 * ex) var requiredFieldMap = {
	 *			mainItem : "대표품목을 입력하세요.",
				itemNum : "수량을 입력하세요."
	 *	   };
	 *	   checkInputValue( requiredFieldMap );
	 *
	 * 필수 입력값이 모두 입력되지 않았으면 false를 리턴하고, 
	 * 모두 입력되었으면 true를 리턴한다.
	 */
	checkInputValue : function (checkMsgMap) {
		var idOfEmptyTag = [];
		var idOfEmptyMsg = [];
		var blank_pattern = /^\s+|\s+$/g;
		$.map(checkMsgMap, function(msg, id) {
			var inputValue = $("#" + id).val();
			if(inputValue.length == 0 || inputValue.replace(blank_pattern, '' ) == "") {
				idOfEmptyTag.push(id);
				idOfEmptyMsg.push(msg);
			}
		});
		
		if(idOfEmptyMsg.length > 0) {
			alert(idOfEmptyMsg[0]);
			$("#" + idOfEmptyTag[0]).focus();
			return false;
		}
		
		return true;
	},
	
	/**
	 * 필수로 입력해야 하는 정보를 입력하지 않았을 때 경고를 띄우는데 쓰인다.
	 * 인자(checkMsgMap)은 필수 입력해야 할 필드의 id와 입력되지 않았을 때 화면에 뜨는 
	 * 경고 메시지 쌍으로 구성된 객체(Hash 형태)를 받는다.
	 * ex) var requiredFieldMap = {
	 *			mainItem : "대표품목을 입력하세요.",
				itemNum : "수량을 입력하세요."
	 *	   };
	 *	   checkInputValue( requiredFieldMap );
	 *
	 * 필수 입력값이 모두 입력되지 않았으면 false를 리턴하고, 
	 * 모두 입력되었으면 true를 리턴한다.
	 */
	checkDateValue : function (checkMsgMap) {
		var idOfEmptyTag = [];
		var idOfEmptyMsg = [];
		
		$.map(checkMsgMap, function(msg, id) {
			var inputValue = $("#" + id).val();
			
			if(inputValue.length > 0) {
				var dateFormat = '';
				
				if(inputValue.length == 8) {
					dateFormat = 'YYYYMMDD';
				} else {
					dateFormat = 'YYYY-MM-DD';
				}
				
				if(!moment(inputValue, dateFormat).isValid()) {
					idOfEmptyTag.push(id);
					idOfEmptyMsg.push(msg);
				}
			}
		});
		
		if(idOfEmptyMsg.length > 0) {
			alert(idOfEmptyMsg[0]);
			$("#" + idOfEmptyTag[0]).focus();
			return false;
		}
		
		return true;
	},
	
	/**
	 * 입력된 이메일의 유효성을 체크한다.
	 * 
	 * @param email
	 * @returns {Boolean}
	 */
	checkEmailValue : function(email) {
		/** 체크사항 
		- @가 2개이상일 경우 
		- .이 붙어서 나오는 경우 
		-  @.나  .@이 존재하는 경우 
		- 맨처음이.인 경우 
		- @이전에 하나이상의 문자가 있어야 함 
		- @가 하나있어야 함 
		- Domain명에 .이 하나 이상 있어야 함 
		- Domain명의 마지막 문자는 영문자 2~4개이어야 함 **/

		var check1 = /(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;

		var check2 = /^[a-zA-Z0-9\-\.\_]+\@[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4})$/;

		if (!check1.test(email) && check2.test(email)) {
			return true;
		} else {
			return false;
		}
	},

	/**
	 * 특수문자 입력 불가능하게 막기.
	 * 
	 * @param 
	 * @returns {Boolean}
	 */
	checkEscape : function(txt) {
		 var num ="{}[]()<>?_|~`!@#$%^&*+\"'\\/ ";    //입력을 막을 특수문자 기재.
		 event.returnValue = true;
		 for (var i=0;i<txt.length;i++)
		 {
			 if(-1 != num.indexOf(txt.charAt(i))) {
				 event.returnValue = false;
				 break;
			 }
		 }

		 return event.returnValue;
	},
	//핸드폰 및 전화번호 체크
	checkFormTelAndMobileNo : function(telNo){
		//입력 값이 000-0000-0000 형식인지 확인한다.
		//var regExp = /^0[0-9]{1,2}-[0-9]{3,4}-[0-9]{4}$/;
		//var regExp = /^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})-?[0-9]{3,4}-?[0-9]{4}$/;	//핸드폰 번호 포함
		/*//var regExp = /^(0[0-9]{1,2})-?[0-9]{3,4}-?[0-9]{4}$/;
		if(!regExp.test(telNo)) {
			return false;
		} else {
			return true;
		}*/
		// 정규식 삭제 161014
		return true;
	},
	
	//전화번호 체크
	checkFormTelNo : function(telNo) {
		//입력 값이 000-0000-0000 형식인지 확인한다.
		//var regExp = /^0[0-9]{1,2}-[0-9]{3,4}-[0-9]{4}$/;
		//var regExp = /^(01[016789]{1}|02|0[3-9]{1}[0-9]{1})-?[0-9]{3,4}-?[0-9]{4}$/;	//핸드폰 번호 포함
		var regExp = /^(02|0[3-9]{1}[0-9]{1})-?[0-9]{3,4}-?[0-9]{4}$/;
		if(!regExp.test(telNo)) {
			return false;
		} else {
			return true;
		}
	},

	//핸드폰번호 체크
	checkFormMobileNo : function(mobileNo) {
		//입력 값이 000-0000-0000 형식인지 확인한다.
		var regExp = /^(01[016789]{1})-[0-9]{3,4}-[0-9]{4}$/;
		if(!regExp.test(mobileNo)) {
			return false;
		} else {
			return true;
		}
	},
	
	//바이트 체크
	stringByteLength : function(s,b,i,c){
	    for(b=i=0;c=s.charCodeAt(i++);b+=c>>11?3:c>>7?2:1);
	    return b
	},
	
	//한글 체크
	inHangulCheck : function(str) {
		if(str == '') return false;
		var pattern = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;
		return pattern.test(str);
	},
	
	//화폐 체크(소수점 5자리까지)
	moneyCheck : function(str) {
		if(str == '') return true;
		str = str.replace(/,/gi, ''); 
		var pattern = /^[0-9]+(.[0-9]{0,5})?$/;
		return pattern.test(str);
	},
	
	//화폐 체크(숫자, 쉼표, 마침표 체크)
	moneyCheck2 : function(str) {
		if(str == '') return true;
		var pattern = /^[0-9|,|.]*[0-9]+$/;
		return pattern.test(str);
	},
	
	//문자의 byte를 리턴한다.
	getTextByte : function(name) {
		var tempText = $("input:text[name='" + name + "']");
		var tempChar = "";                                         // TextArea의 문자를 한글자씩 담는다
		var tempHangul = 0;                                        // 한글을 카운트 한다
		var countChar = 0;                                         // 한글자씩 담긴 문자를 카운트 한다
		
		// 글자수 바이트 체크를 위한 반복
	    for (var i = 0 ; i < tempText.val().length; i++) {
	        tempChar = tempText.val().charAt(i);
	 
	        // 한글일 경우 3 추가, 영문일 경우 1 추가
	        if (escape(tempChar).length > 4) {
	            tempHangul += 2;
	        }
	        
	        countChar++;
	    }
	    
	    return countChar + tempHangul;
	}
};

