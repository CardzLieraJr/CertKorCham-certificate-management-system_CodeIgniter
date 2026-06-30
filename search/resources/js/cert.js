//LNB
function lnb() {
    var $lnbBtn = $(".lnb").find("ul > li");
    var $lnbBtnSub = $lnbBtn.children("ul");

    $lnbBtn.click(function () {
        if ($(this).children("ul").is(":hidden")) {
            $lnbBtnSub.hide();
            $(this).children("ul").show();
            $lnbBtn.removeClass("current");
            $(this).addClass("current");
        }
        else {
            $lnbBtnSub.hide();
            $lnbBtn.removeClass("current");
        }
        quickLink();
    });
}


function tab() {
    var $tab = $(".tab");
    var $target = $tab.find("ul > li");
    var $tabCont = $("#content").find(" .tabCont");

    $target.each(function (e) {
        $(this).on("click", function () {
            $tabCont.hide();
            $tabCont.eq(e).show();
            $target.removeClass("current");
            $(this).addClass("current");
        });
    });
}


function quickLink() {
    var windowWidth = $(window).width();
    if (Number(windowWidth) < 1024) {
        var lnbHeight = $(".lnb").height();
        var quickLinkTop = Number(lnbHeight) + 50;
        $(".quickLink").css({ top: quickLinkTop + 'px' });
    }
}

//qna
function faq() {
    var $question = $(".eng").find(".qnaBoard").find(".question");
    var $answer = $(".eng").find(".qnaBoard").find(".answer");

    $answer.hide();

    $question.click(function () {
        if ($(this).next($answer).is(":hidden")) {
            $answer.hide();
            $(this).next($answer).show();
            $question.parent().removeClass("current");
            $(this).parent().addClass("current");
        }
        else {
            $(this).next($answer).hide();
            $(this).removeClass("current");
            $question.parent().removeClass("current");
        }
    });
}

//printList
function print(){
	var $printName = $(".printList").find(".hsTit");
	var $printList = $(".printList").find(".popBoard");
	
	$printList.hide();
	
	$printName.click(function(){
		if($(this).next($printList).is(":hidden")){
			$printList.hide();
			$(this).next($printList).show();
		}
		else{
			$(this).next($printList).hide();
		}
	});
	
}

/* ??�뻾 ?곸뿭 */
$(function () {
    lnb();
    tab();
    quickLink();
    faq();
    print();
    $(window).resize(function () {
        quickLink();
    });
});


//viewport
var agent = navigator.userAgent.toLowerCase();
if (agent.match(/iphone/) != null || agent.match(/ipod/) != null) {
    document.write('<meta name="viewport" content="width=480, user-scalable=yes">');
} else if (agent.match(/ipad/) != null) {
    document.write('<meta name="viewport" content="width=965, user-scalable=yes">');
} else {
    document.write('<meta name="viewport" content="width=480, user-scalable=yes">');
}