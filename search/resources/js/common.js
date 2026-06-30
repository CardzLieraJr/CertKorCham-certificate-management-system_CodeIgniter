/**
 * Common Javascript
 */

$(document).ready(function() {

	$.datepicker.setDefaults({
        dateFormat: 'yy-mm-dd',
        showOn: 'button',
        buttonImageOnly: true,
        buttonImage:'/resources/images/common/ico_cal.png',
        buttonText:'달력',
        changeMonth: true,
        changeYear: true,
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['01월','02월','03월','04월','05월','06월','07월','08월','09월','10월','11월','12월'],
        monthNamesShort: ['01월','02월','03월','04월','05월','06월','07월','08월','09월','10월','11월','12월'],
        dayNames: ['일','월','화','수','목','금','토'],
        dayNamesShort: ['일','월','화','수','목','금','토'],
        dayNamesMin: ['일','월','화','수','목','금','토'],
        showMonthAfterYear: true,
        showButtonPanel:true,
        closeText:"닫기",
        yearSuffix: '년'
	});

	// AJAX setup for error handling
    $.ajaxSetup({
    	statusCode: {
            901: ajaxSessionTimeout
            , 902: badCsrfToken
        }
    });

	$(".btn_help").click(function() {
		 $(this).next().toggle();
		 return false;
	});

});

function ajaxSessionTimeout() {
	top.location.href = "../../base/logout.htm";
}

function badCsrfToken() {
	top.location.href = "../../error/error.htm?code=500";
}

function fncMovePage(contextPath, url, loginYn, memform, menuName) {

	//EDI, 출력 사용자 메뉴 제한
	if(memform == 'E' || memform == 'P'){

		if((menuName == '원산지증명서' || menuName == '기타무역인증' || menuName == 'ATA까르네' ||
			menuName == '서명등록 변경신고' || menuName == '증명서 발급현황' || menuName == '까르네 발급현황' ||
			menuName == '신청서 작성 목록' || menuName == '대행 신청 현황' || menuName == '신청 서식 작성' || menuName == '신청서 작성 목록' ||
			menuName == '출력업체 지정' || menuName == '월합 세금계산서 신청' || menuName == 'Exporter 관리' ||
			menuName == 'Importer 관리' || menuName == 'Producer 관리' || menuName == '물품 관리' || menuName == '발급통계 조회' ||
			menuName == '원산지 증명 발급' || menuName == '웹증명서 발급')){
			alert('해당 메뉴는 웹인증 사용자만 이용가능 합니다.');
			return;
		}
	}

	if((memform == 'P') && (menuName == '온라인 결제' || menuName == '결제내역 조회' || menuName == '세금계산서 조회' || menuName == '회사로고 관리')){
		alert('해당 메뉴는 웹인증 사용자만 이용가능 합니다.');
		return;
	}

	if (loginYn == 'Y') {
		if (confirm('해당 메뉴를 사용하기 위해서는 로그인이 필요합니다.\n로그인 하시겠습니까 ?')) {
			UTILS.postSubmit(contextPath + "/base/login.htm?returnUrl="+url);
		}

	} else {
		UTILS.postSubmit(contextPath + url);
	}
}

/**
 * 팝업페이지 (GET 방식)
 */
function popupG(requestUrl, title) {
	var title = title.replace(/\s/g, "_");
	return window.open(requestUrl, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no');
}

/**
 * 팝업페이지 (GET 방식)
 */
function popupG(requestUrl, title, width, height) {
	var title = title.replace(/\s/g, "_");
	var wLeft = window.screenLeft ? window.screenLeft : window.screenX;
	var wTop = window.screenTop ? window.screenTop : window.screenY;

	var left = wLeft + (window.innerWidth / 2) - (width / 2);
	var top = wTop + (window.innerHeight / 2) - (height / 2);

	return window.open(requestUrl, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no, width=' + width + ', height=' + height + ', top=' + top + ', left=' + left);
}

/**
 * 팝업페이지 리포트용 - 노엑티브엑스 (GET 방식) 2016.04.14 - 박정호
 */
function popupReport(requestUrl, title, width, height) {
	var title = title.replace(/\s/g, "_");
	var wLeft = window.screenLeft ? window.screenLeft : window.screenX;
	var wTop = window.screenTop ? window.screenTop : window.screenY;

	var left = wLeft + (window.innerWidth / 2) - (width / 2);
	var top = wTop + (window.innerHeight / 2) - (height / 2);

	var reportUrl = requestUrl.split("?")[0];
	var reportParam = requestUrl.split("?")[1];

	//ActiveX로 갈경우 - 2016.04.10 박정호 ActiveX 관련 소스 작업.
	//주의 activeX6를 테스트 할경우 host 에 RD서버 해당 (개발/운영을 구분하여)아이피 rd.korcham.net 정보 입력 바람.
	/*reportUrl = "/common/report/viewerActiveX.htm";

	reportParam = reportParam + "&activeXVersion=5";//ActiveX 5버전인 경우
	reportParam = reportParam + "&activeXVersion=6";//ActiveX 6버전인 경우*/

	return window.open(reportUrl+"?"+reportParam, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no, width=' + width + ', height=' + height + ', top=' + top + ', left=' + left);
}

/**
 * 팝업페이지 리포트용 - 엑티브엑스 (GET 방식) 2016.04.14 - 박정호
 */
function popupReport_ActiveX(requestUrl, title, width, height) {
	var title = title.replace(/\s/g, "_");
	var wLeft = window.screenLeft ? window.screenLeft : window.screenX;
	var wTop = window.screenTop ? window.screenTop : window.screenY;

	var left = wLeft + (window.innerWidth / 2) - (width / 2);
	var top = wTop + (window.innerHeight / 2) - (height / 2);

	var reportUrl = requestUrl.split("?")[0];
	var reportParam = requestUrl.split("?")[1];

	//ActiveX로 갈경우 - 2016.04.10 박정호 ActiveX 관련 소스 작업.
	//주의 activeX6를 테스트 할경우 host 에 RD서버 해당 (개발/운영을 구분하여)아이피 rd.korcham.net 정보 입력 바람.
	reportUrl = "/common/report/viewerActiveX.htm";

	reportParam = reportParam + "&activeXVersion=5";//ActiveX 5버전인 경우
	//reportParam = reportParam + "&activeXVersion=6";//ActiveX 6버전인 경우

	return window.open(reportUrl+"?"+reportParam, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no, width=' + width + ', height=' + height + ', top=' + top + ', left=' + left);
}

/**
 * 팝업페이지 (POST 방식)
 * requestURL 의 파라미터값으로 Submit 까지 완료 (팝업)
 * requestUrl : http://test.com/sample/send.do?param1=1&param2=2
 */
function popupP(requestUrl, title) {
	var title = title.replace(/\s/g, "_");
	var p = requestUrl.replace(/&amp;/gi,'&').split('?');
    var action = p[0];
    var $form = $('<form/>', {target:title, action:action, method:'post'}).appendTo('body');

    if(p[1] != null && p[1] != '') {
	    var params = p[1].split('&');
	    for (var i in params) {
	        var tmp = params[i].split('=');
	        var key = tmp[0], value = tmp[1];
	        $('<input/>', {type:'hidden', name:key, value:value}).appendTo($form);
	    }
    }

    window.open("", title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no');

    $form.submit();
	$form.remove();
}

/**
 * 팝업페이지 (POST 방식)
 * requestURL 의 파라미터값으로 Submit 까지 완료 (팝업)
 * requestUrl : http://test.com/sample/send.do?param1=1&param2=2
 */
function popupP(requestUrl, title, width, height) {
	var title = title.replace(/\s/g, "_");
    var wLeft = window.screenLeft ? window.screenLeft : window.screenX;
    var wTop = window.screenTop ? window.screenTop : window.screenY;

    var left = wLeft + (window.innerWidth / 2) - (width / 2);
    var top = wTop + (window.innerHeight / 2) - (height / 2);

	var p = requestUrl.replace(/&amp;/gi,'&').split('?');
    var action = p[0];
    var $form = $('<form/>', {target:title, action:action, method:'post'}).appendTo('body');
    if(p[1] != null && p[1] != '') {
	    var params = p[1].split('&');
	    for (var i in params) {
	        var tmp = params[i].split('=');
	        var key = tmp[0], value = tmp[1];
	        $('<input/>', {type:'hidden', name:key, value:value}).appendTo($form);
	    }
    }

    window.open("", title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no, width=' + width + ', height=' + height + ', top=' + top + ', left=' + left);

	$form.submit();
	$form.remove();
}

/**
 * 팝업페이지 (POST 방식)
 * requestMap 의 값으로 Dynamic 하게 Form 생성 후 Submit 까지 완료 (팝업)
 * requestMap 형식 : [{name : "formElementName1", value : "value1"}, {name : "formElementName2", value : "value2"}]
 */
function popupP_M(requestUrl, requestMap, title, width, height) {
	var title = title.replace(/\s/g, "_");
	var wLeft = window.screenLeft ? window.screenLeft : window.screenX;
	var wTop = window.screenTop ? window.screenTop : window.screenY;

	var left = wLeft + (window.innerWidth / 2) - (width / 2);
	var top = wTop + (window.innerHeight / 2) - (height / 2);

	var $form = $("<form></form>");
	$form.attr("target", title);
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

	window.open("", title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no, width=' + width + ', height=' + height + ', top=' + top + ', left=' + left);

	$form.submit();
	$form.remove();
}

/**
 * 사용자 아이디로 Cert 시스템에 접속한다. (ProxyLogin)
 */
function fncProxyLoginCert(coid, id, name) {
	if(confirm("[ " + name + " ] 님의 계정으로 웹인증시스템에 로그인 합니다.\n계속 하시겠습니까?")){
		UTILS.dynamicFormSubmit("http://cert.korcham.net/member/index.htm?method=proxyLogin"
				, [{name : "coid", value : coid}, {name : "id", value : id}]);
	}
}

/**
* "-" 처리 스크립트
* johw
**/
var sTimer;
var curr_val;
var setObj;
var hscode;

function realtimeValid(obj, ll, param, param2) {
	curr_val = obj.value;
	setObj = obj;
	hscode = param2;
	validThread(ll, param);
}

function validThread(ll, param) {
	clearTimeout(sTimer);
	obj = setObj;
	if (obj.value != curr_val) {
		format_str(obj, ll, param);
	} else {
		sTimer = window.setTimeout(
				"validThread('" + ll + "', '" + param + "')", 1);
	}
}

function format_str(obj, ll, param) {

	var arrValue = new Array;
	var len = 0;
	var resultValue;
	var strValue = obj.value;

	var tmp = "";
	var i;
	var splitLen = param.split(",");

	for (i = 0; i < strValue.length; i++) {
		if (strValue.charAt(i) != ' ' && strValue.charAt(i) != '-' && strValue.charAt(i) != '.') {
			tmp += strValue.charAt(i);
		}
	}

	strValue = tmp;
	len = strValue.length;
	if (len >= ll) {
		strValue = strValue.substring(0, ll);
		len = ll - splitLen.length;
	}

	if (splitLen.length == 1) {
		if (len <= splitLen[0]) {
			arrValue[0] = strValue;
		} else if (len <= ll) {
			arrValue[0] = strValue.substring(0, splitLen[0]);
			arrValue[1] = strValue.substring(splitLen[0], ll - splitLen.length);
		}
	} else if (splitLen.length == 2) {
		if (len <= splitLen[0]) {
			arrValue[0] = strValue;
		} else if (len <= splitLen[1]) {
			arrValue[0] = strValue.substring(0, splitLen[0]);
			arrValue[1] = strValue.substring(splitLen[0], splitLen[1]);
		} else if (len <= ll) {
			arrValue[0] = strValue.substring(0, splitLen[0]);
			arrValue[1] = strValue.substring(splitLen[0], splitLen[1]);
			arrValue[2] = strValue.substring(splitLen[1], ll - splitLen.length);
		}
	} else if (splitLen.length == 3) {

		if (len <= splitLen[0]) {
			arrValue[0] = strValue;
		} else if (len <= splitLen[1]) {
			arrValue[0] = strValue.substring(0, splitLen[0]);
			arrValue[1] = strValue.substring(splitLen[0], splitLen[1]);
		} else if (len <= splitLen[2]) {
			arrValue[0] = strValue.substring(0, splitLen[0]);
			arrValue[1] = strValue.substring(splitLen[0], splitLen[1]);
			arrValue[2] = strValue.substring(splitLen[1], splitLen[2]);
		} else if (len <= ll) {
			arrValue[0] = strValue.substring(0, splitLen[0]);
			arrValue[1] = strValue.substring(splitLen[0], splitLen[1]);
			arrValue[2] = strValue.substring(splitLen[1], splitLen[2]);
			arrValue[3] = strValue.substring(splitLen[2], ll - splitLen.length);
		}
	}

	resultValue = arrValue[0];
	if (arrValue[1]) {
		if (hscode == 'hscode') {
			resultValue += "." + arrValue[1];
		} else {
			resultValue += "-" + arrValue[1];
		}
	}
	if (arrValue[2]) {
		resultValue += "-" + arrValue[2];
	}
	if (arrValue[3]) {
		resultValue += "-" + arrValue[3];
	}

	obj.value = resultValue;
}

//사업자등록번호 체크
function checkBizNum(bizNum) {
    // bizNum는 숫자만 10자리로 해서 문자열로 넘긴다.
    var checkID = new Array(1, 3, 7, 1, 3, 7, 1, 3, 5, 1);
    var tmpBizNum, i, chkSum=0, c2, remander;
     bizNum = bizNum.replace(/-/gi,'');

     for (i=0; i<=7; i++) chkSum += checkID[i] * bizNum.charAt(i);
     c2 = "0" + (checkID[8] * bizNum.charAt(8));
     c2 = c2.substring(c2.length - 2, c2.length);
     chkSum += Math.floor(c2.charAt(0)) + Math.floor(c2.charAt(1));
     remander = (10 - (chkSum % 10)) % 10 ;

    if (Math.floor(bizNum.charAt(9)) == remander) return true ; // OK!
      return false;
}

