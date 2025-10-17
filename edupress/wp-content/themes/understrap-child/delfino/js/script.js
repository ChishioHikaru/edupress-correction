$(function(){
	
	// ボックスの高さの最大値を
	// 格納する変数
	var maxHeight = 0;
	
	// 高さをそろえたいボックスを列挙
	$('#box1,#box2').each(function(){
		
		// ボックスの高さを取得して
		// 最大値と比較する
		var height = $(this).height();
		maxHeight = Math.max(maxHeight, height);
		
	}).height(maxHeight);
		
});
$(function(){
	
	// ボックスの高さの最大値を
	// 格納する変数
	var maxHeight = 0;
	
	// 高さをそろえたいボックスを列挙
	$('#box3,#box4').each(function(){
		
		// ボックスの高さを取得して
		// 最大値と比較する
		var height = $(this).height();
		maxHeight = Math.max(maxHeight, height);
		
	}).height(maxHeight);
		
});
$(function(){
	
	// ボックスの高さの最大値を
	// 格納する変数
	var maxHeight = 0;
	
	// 高さをそろえたいボックスを列挙
	$('#box5,#box6').each(function(){
		
		// ボックスの高さを取得して
		// 最大値と比較する
		var height = $(this).height();
		maxHeight = Math.max(maxHeight, height);
		
	}).height(maxHeight);
		
});