//タブメニュー
$(function(){
	$('#js-category-tag-acc').click(function(){
		$(this).addClass('active');
		$('#js-category-tag-beauty').removeClass('active');
		$('#beauty').removeClass('active');
		$('#accessories').addClass('active')
	});

	$('#js-category-tag-beauty').click(function(){
		$(this).addClass('active');
		$('#js-category-tag-acc').removeClass('active');
		$('#accessories').removeClass('active');
		$('#beauty').addClass('active');
	});
	$('#js-category-tag-homeGoods').click(function(){
		$(this).addClass('active');
		$('#js-category-tag-stationeries').removeClass('active');
		$('#stationeries').removeClass('active');
		$('#homegoods').addClass('active')
	});

	$('#js-category-tag-stationeries').click(function(){
		$(this).addClass('active');
		$('#js-category-tag-homeGoods').removeClass('active');
		$('#homegoods').removeClass('active');
		$('#stationeries').addClass('active');
	});
});

//ページ内リンク　ずれ補正
$(function () {
 var headerHight = 200; //ヘッダの高さ
 $('a[href^=#top-]').click(function(){
     var href= $(this).attr("href");
       var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
     $("html, body").animate({scrollTop:position}, 550, "swing");
        return false;
   });
});
