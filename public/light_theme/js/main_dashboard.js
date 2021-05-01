$(document).ready(function () {

  // ---------------------------- Search --------------------
  var search_status = 0;
  $("#btn-search").click(function () {
	if(search_status == 0) {
		$(".latest-connections").hide();
		$(".populer-connections").hide();
		$("#search-result").removeClass("display-none");

		$(".industry").removeClass("display-none");
		$(".industry-option").removeClass("display-none");
		$(".industry-search").removeClass("display-none");

		$('#search').removeClass("width-sm");
		$('#search-filter').removeClass("display-none");
		$('#btn-search').removeClass("fa-search");
		$('#search').addClass("width-lg");
		$('#btn-search').addClass("fa-chevron-right");
		$('.search-text').addClass("display-none");
		search_status = 1;
	}else {
		$(".latest-connections").show();
		$(".populer-connections").show();
		$("#search-result").addClass("display-none");

		$(".industry").addClass("display-none");
		$(".industry-option").addClass("display-none");
		$(".industry-search").addClass("display-none");


		$('#search').removeClass("width-lg");
		$('#search-filter').addClass("display-none");
		$('#btn-search').removeClass("fa-chevron-right");
		$('#search').addClass("width-sm");
		$('#btn-search').addClass("fa-search");
		$('.search-text').removeClass("display-none");
		search_status = 0;
	}

  });
});
