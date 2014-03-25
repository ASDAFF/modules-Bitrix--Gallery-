//
// Copyright 2014 101 Studio. All Rights Reserved.
//
//
/**
 * @author maxonmishin@gmail.com || head@101studio.ru
 */

var st101 = {};

st101.gallery = function() {
  /**
   * @type {*|jQuery|HTMLElement}
   * @private
   */
  this.root_ = $('body');
  /**
   * @type {*}
   * @private
   */
  this.cont_ =  this.root_.find('.st1_gallery_box');
  /**
   * @type {children|*|XMLList|children|children|children}
   * @private
   */
  this.albums_ = this.cont_.children();
  /**
   * run
   */
  this.init_();
};

/**
 * @private
 */
st101.gallery.prototype.init_ = function() {
  this.centerImageAlbum_();
};
/**
 * @private
 */
st101.gallery.prototype.centerImageAlbum_ = function() {

  /**
   * @type {number}
   */
  var heightImg = 0;
  /**
   * @type {number}
   */
  var widthImg = 0;
  /**
   * @type {number}
   */
  var topImg = 0;
  /**
   * @type {number}
   */
  var leftImg = 0;
  this.albums_.find('img').each(function(i){
    widthImg = $(this)[0].clientWidth;
    heightImg = $(this)[0].clientHeight;

    topImg = parseInt( (heightImg - $(this).parent().height()) / 2 , 10);
    leftImg = parseInt( (widthImg - $(this).parent().width()) / 2 , 10);

    $(this).css({
        'top': -1 * topImg,
        'left': -1 * leftImg
    });
  });
};


$(window).load(function() {
  new st101.gallery();
});