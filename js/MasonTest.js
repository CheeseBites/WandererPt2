 

var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  gutter: '.gutter-sizer',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});  